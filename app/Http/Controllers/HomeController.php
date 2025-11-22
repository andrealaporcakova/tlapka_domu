<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use App\Models\Shelter;

class HomeController extends Controller
{
    public function index()
    {
        // DYNAMIC COUNTING: Returned animals
        // SELECT COUNT(*) FROM animals WHERE status = 'reunited';
        $reunitedCount = Animal::where('status', 'reunited')->count();

        // DYNAMIC COUNTING: Registered finders and reporters
        // SELECT COUNT(*) FROM users WHERE role = 'reporter';
        $reporterCount = User::where('role', 'reporter')->count();

        // DYNAMIC COUNTING: shelters
        $partnersCount = Shelter::count();

        // Displays random animals from the database
        $randomAnimals = Animal::whereIn('status', ['lost', 'found'])
        ->inRandomOrder()
        ->limit(4)
        ->get();

        // Passing data to the view template
        return view('homepage', [
            'reunitedCount' => $reunitedCount,
            'reporterCount' => $reporterCount,
            'partnersCount' => $partnersCount,
            'randomAnimals' => $randomAnimals,
        ]);
    }
}
