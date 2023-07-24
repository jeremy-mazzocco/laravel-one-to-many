<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class LoggedController extends Controller
{
    public function index($id)
    {

        $projects = Project::findOrFail($id);

        return view('logged.show', compact('projects'));
    }
}
