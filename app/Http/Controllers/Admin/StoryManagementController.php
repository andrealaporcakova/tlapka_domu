<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class StoryManagementController extends Controller
{


    /** Displays a list of all stories */
    public function index()
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        $stories = Story::orderBy('created_at', 'desc')->get();
        return view('admin.stories.index', ['stories' => $stories]);
    }

    /** Displays the form for a new story */
    public function create()
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        return view('admin.stories.create');
    }

    /** Saves the new story to the database */
    public function store(Request $request)
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'excerpt' => 'required|string',
            'body' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable|url',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Story::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'body' => $validated['body'],
            'image_path' => $imagePath,
            'url' => $validated['url'] ?? '#',
        ]);

        return redirect()->route('admin.stories.index')->with('success', 'Příběh byl úspěšně vytvořen.');
    }

    /** Displays the story editing form */
    public function edit(Story $story)
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        return view('admin.stories.edit', ['story' => $story]);
    }

    /** Updates the story in the database */
    public function update(Request $request, Story $story)
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'excerpt' => 'required|string',
            'body' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable|url',
        ]);

        $imagePath = $story->image_path;
        if ($request->hasFile('image')) {
            if ($story->image_path) {
                Storage::disk('public')->delete($story->image_path);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $story->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
            'body' => $validated['body'],
            'image_path' => $imagePath,
            'url' => $validated['url'] ?? '#',
        ]);

        return redirect()->route('admin.stories.index')->with('success', 'Příběh byl úspěšně upraven.');
    }

    /** Deletes the story */
    public function destroy(Story $story)
    {
        if (Gate::denies('access-admin-panel')) {
            abort(403);
        }

        try {
            if ($story->image_path) {
                Storage::disk('public')->delete($story->image_path);
            }
            $story->delete();

            return redirect()->route('admin.stories.index')->with('success', 'Příběh byl smazán.');
        } catch (\Exception $e) {
            return redirect()->route('admin.stories.index')->with('error', 'Příběh se nepodařilo smazat. Mohou na něj být navázány další záznamy.');
        }
    }
}
