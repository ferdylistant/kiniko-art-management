<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = collect([
            (object)[
                'title' => 'Untitled #01',
                'slug' => 'untitled-01',
                'artist' => 'Artist One',
                'year' => '2025',
                'medium' => 'Mixed media',
            ],
            (object)[
                'title' => 'Untitled #02',
                'slug' => 'untitled-02',
                'artist' => 'Artist Two',
                'year' => '2025',
                'medium' => 'Oil on canvas',
            ],
        ]);

        return view('artworks.index', compact('artworks'));
    }

    public function show($slug)
    {
        $artwork = (object)[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'artist' => 'Artist One',
            'year' => '2025',
            'medium' => 'Mixed media',
            'dimension' => '120 × 150 cm',
            'description' =>
            'This artwork entry serves as a placeholder to demonstrate institutional documentation of an artwork.',
        ];

        return view('artworks.show', compact('artwork'));
    }
}
