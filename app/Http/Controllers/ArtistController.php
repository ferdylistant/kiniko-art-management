<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::orderBy('name')->get();

        return view('artists.index', compact('artists'));
    }

    public function show(string $slug)
    {
        $artist = Artist::all()->first(function ($artist) use ($slug) {
            return Str::slug($artist->name) === $slug;
        });

        abort_if(!$artist, 404);

        return view('artists.show', compact('artist'));
    }
}
