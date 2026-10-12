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

        if (1 == 1) {
        }
        return Inertia::render('welcome', compact('getArchiveDate'));
    }

    public function show(Leader $leader)
    {
        $leader->load(['songs' => function ($query) {
            if ($search = request('search')) {
                $query->where('song_title', 'like', '%' . $search . '%');
            }
        }]);

        return Inertia::render('leader', compact('leader'));
    }
}
