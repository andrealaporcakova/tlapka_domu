<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use App\Http\Requests\StoreAnimalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AnimalController extends Controller
{
    use AuthorizesRequests;

    public function index(Request $request)
    {
        $query = Animal::query();
        $query->whereIn('status', ['lost', 'found']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('species')) {
            $query->where('species', $request->species);
        }

        if ($request->filled('region') && $request->input('region') !== 'cela_cr') {
            $query->where('location_region', $request->region);
        }

        $animals = $query->latest()->paginate(12);

        return view('animal-database', [
            'animals' => $animals,
            'filters' => $request->all()
        ]);
    }

    public function report(string $stav = null)
    {
        $statusMap = [
            'ztraceny' => 'lost',
            'nalezeny' => 'found',
        ];

        return view('report-animal', [
            'status' => $statusMap[$stav] ?? null,
        ]);
    }

    /**
     * Processes the submitted form and saves the new animal to the database.
     */
    public function store(StoreAnimalRequest $request)
    {
        $validated = $request->validated();

        // 2. IMAGE PROCESSING: Handle file upload and retrieve the storage path.
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store the image in the 'storage/app/public/animals' directory.
            $imagePath = $request->file('image')->store('animals', 'public');
        }

        // 3. USER/GUEST DATA LOGIC: Determine the source of the contact information.
        $userId = null;
        $guestEmail = null;
        $guestPhone = null;

        if (Auth::check()) {
            // If logged in, link the report to the registered user's ID.
            $userId = Auth::id();
        } else {
            // If not logged in (guest), use the contact details provided in the form
            // and store them in the animal's record.
            $guestEmail = $validated['guest_email'];
            $guestPhone = $validated['guest_phone'];
        }

        // 4. DATABASE SAVE: Attempt to create the new Animal record.
        try {
            $animal = Animal::create([
                // Map validated fields to database columns
                'status' => $validated['status'],
                'name' => $validated['name'],
                'species' => $validated['species'],
                'breed' => $validated['breed'],
                'sex' => $validated['sex'],
                'location_city' => $validated['location_city'],
                'location_region' => $validated['location_region'],
                'report_date' => $validated['report_date'],
                'description' => $validated['description'],
                'image_path' => $imagePath,
                // Link User/Guest info
                'user_id' => $userId,
                'guest_email' => $guestEmail,
                'guest_phone' => $guestPhone,
            ]);

        } catch (\Throwable $exception) {
            // Catches any database or model exception (e.g., Mass Assignment, constraint issues).
            // Note: This logs the error internally but still shows success to the user (due to the redirect below).
            report($exception->getMessage());
        }


        // 5. REDIRECTION: Redirect user upon successful submission.
        return redirect()->route('animal.index')->with('success', 'Váš inzerát byl úspěšně nahlášen a je nyní v databázi!');

    }

    /**
     * Displays ads reported by the currently logged in user.
     */
    public function myReports()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Pro zobrazení inzerátů se musíte přihlásit.');
        }

        $userAnimals = Animal::where('user_id', Auth::id())
        ->latest()
            ->get();

        return view('my_animals', [
            'animals' => $userAnimals,
            'user' => Auth::user(),
        ]);
    }
    public function reunite(Animal $animal)
    {
        $this->authorize('reunite', $animal);

        $animal->status = 'reunited';
        $animal->save();

        return redirect()->back()->with('success', 'Skvělá zpráva! Inzerát byl označen jako vyřešený.');
    }
    public function destroy(Animal $animal)
    {
        $this->authorize('delete', $animal);

        if ($animal->image_path) {
            Storage::disk('public')->delete($animal->image_path);
        }
        $animal->delete();

        return redirect()->back()->with('success', 'Inzerát byl úspěšně smazán.');
    }

    /**
     * Displays the detail of one animal ad.
     */
    public function show(Animal $animal)
    {
        return view('animal-detail', [
            'animal' => $animal
        ]);
    }
}
