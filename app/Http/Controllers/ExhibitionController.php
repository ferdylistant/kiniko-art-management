<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index()
    {
        // Dummy exhibition list
        $exhibitions = collect([
            (object)[
                'title' => 'Untitled Exhibition',
                'slug' => 'untitled-exhibition',
                'period' => 'Upcoming, 2025',
                'venue' => 'Kiniko Gallery',
            ],
            (object)[
                'title' => 'Untitled Exhibition',
                'slug' => 'untitled-exhibition',
                'period' => 'Upcoming, 2025',
                'venue' => 'Kiniko Gallery',
            ],
            (object)[
                'title' => 'Untitled Exhibition',
                'slug' => 'untitled-exhibition',
                'period' => 'Upcoming, 2025',
                'venue' => 'Kiniko Gallery',
            ],
            (object)[
                'title' => 'Untitled Exhibition',
                'slug' => 'untitled-exhibition',
                'period' => 'Upcoming, 2025',
                'venue' => 'Kiniko Gallery',
            ],
            (object)[
                'title' => 'Untitled Exhibition',
                'slug' => 'untitled-exhibition',
                'period' => 'Upcoming, 2025',
                'venue' => 'Kiniko Gallery',
            ],
        ]);

        return view('exhibitions.index', compact('exhibitions'));
    }

    public function show($slug)
    {
        // Dummy exhibition detail
        $exhibition = (object)[
            'title' => 'Untitled Exhibition',
            'slug' => $slug,
            'description' =>
            'This is a placeholder exhibition intended to demonstrate curatorial narrative and institutional presentation.',
            'period' => 'Upcoming, 2025',
            'venue' => 'Kiniko Gallery',
            'type' => 'Group Exhibition',
        ];

        return view('exhibitions.show', compact('exhibition'));
    }
}