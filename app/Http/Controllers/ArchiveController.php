<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Leader;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArchiveController extends Controller
{
    public function index()
    {
        $getArchiveDate = Archive::with('leaders')->select('id', 'archive_date')->get();

        return Inertia::render('welcome', compact('getArchiveDate'));
    }

    public function show(Leader $leader)
    {
        return Inertia::render('leader', compact('leader'));
    }
}
