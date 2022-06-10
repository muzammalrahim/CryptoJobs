<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class HomeController extends Controller
{
    public function showJobs()
    {
        $job = Jobs::all();
        return view('cryptoJobs.index', compact('job'));
    }
}
