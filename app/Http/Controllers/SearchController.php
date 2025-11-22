<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Shelter;
use App\Models\Story;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Get the search term
        $searchTerm = $request->input('search');

        // If the expression is empty, we don't search for anything
        if (empty($searchTerm)) {
            return view('search.index', [
                'searchTerm' => '',
                'animals' => [],
                'shelters' => [],
                'stories' => [],
            ]);
        }

        // Search in Animals
        $animals = Animal::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('species', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('breed', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('location_city', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('location_region', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
            ->limit(10)
            ->get();

        // Search in Shelters

        $shelters = Shelter::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('location', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
            ->limit(10)
            ->get();

        // Search in Stories

        $stories = Story::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('category', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('excerpt', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('body', 'LIKE', '%' . $searchTerm . '%')
            ->limit(10)
            ->get();

        // Return a view with all the results found
        return view('search.index', [
            'searchTerm' => $searchTerm,
            'animals' => $animals,
            'shelters' => $shelters,
            'stories' => $stories,
        ]);
    }
}
