<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = collect([
            (object)[
                'name' => 'Artist One',
                'slug' => 'artist-one',
                'discipline' => 'Contemporary Visual Artist',
                'location' => 'Indonesia',
            ],
            (object)[
                'name' => 'Artist Two',
                'slug' => 'artist-two',
                'discipline' => 'Mixed Media Artist',
                'location' => 'Indonesia',
            ],
        ]);

        return view('artists.index', compact('artists'));
    }

    public function show($slug)
    {
        $artist = (object)[
            'name' => ucwords(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'bio' => 'This is a placeholder artist profile used to demonstrate institutional artist representation within Kiniko Art Management.',
            'discipline' => 'Contemporary Artist',
            'location' => 'Indonesia',
            'year' => 'Active since 2020',
        ];

        return view('artists.show', compact('artist'));
    }
}
