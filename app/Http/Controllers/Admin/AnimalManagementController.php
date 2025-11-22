<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AnimalManagementController extends Controller
{
    /**
     * Displays a list of all animals for administration.
     */
    public function index()
    {
        // Verify if you are an admin?
        if (Gate::denies('access-admin-panel')) {
            abort(403, 'Nemáte oprávnění pro vstup do této sekce.');
        }

        // Load all animals (including 'reunited')
        // Sort by newest
        $animals = Animal::orderBy('created_at', 'desc')->get();

        // Returning the new admin view
        return view('admin.animals.index', [
            'animals' => $animals
        ]);
    }
}
