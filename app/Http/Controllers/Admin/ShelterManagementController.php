<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShelterManagementController extends Controller
{
    public function index()
    {
        return response('Shelter management index page.');
    }
}
