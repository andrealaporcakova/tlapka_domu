<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    /**
     * Displays a list of all shelters.
     */
    public function index()
    {
        // 1. Retrieve all shelters from the database, sorted by name
        $shelters = Shelter::orderBy('name', 'asc')->get();

        // 2. Return the view (template) and pass it the data in the $shelters variable
        return view('shelters', [
            'shelters' => $shelters
        ]);
    }
}
