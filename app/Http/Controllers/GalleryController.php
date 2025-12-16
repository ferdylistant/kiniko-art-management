<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = collect([
            (object)[
                'type'  => 'exhibition',
                'title' => 'Ruang Ekspresi',
                'slug'  => 'ruang-ekspresi',
                'year'  => 2025,
                'image' => 'https://placehold.co/800x600?text=Exhibition',
            ],
            (object)[
                'type'  => 'artwork',
                'title' => 'Untitled #3',
                'slug'  => 'untitled-3',
                'year'  => 2024,
                'image' => 'https://placehold.co/800x600?text=Artwork',
            ],
            (object)[
                'type'  => 'photo',
                'title' => 'Kiniko Gallery Space',
                'slug'  => null,
                'year'  => 2024,
                'image' => 'https://placehold.co/800x600?text=Gallery+Space',
            ],
        ]);

        // archive years (untuk sidebar)
        $years = collect([
            (object)['year' => 2025, 'count' => 2],
            (object)['year' => 2024, 'count' => 2],
            (object)['year' => 2023, 'count' => 1],
        ]);

        return view('gallery.index', compact('galleries', 'years'));
    }

    public function archive()
    {
        $years = collect([
            (object)['year' => 2025, 'count' => 2],
            (object)['year' => 2024, 'count' => 1],
            (object)['year' => 2023, 'count' => 1],
        ]);

        return view('gallery.archive', compact('years'));
    }

    public function year($year)
    {
        $exhibitions = collect([
            (object)[
                'title' => 'Untitled Exhibition',
                'slug'  => 'untitled-exhibition',
                'period' => 'June – August ' . $year,
            ],
            (object)[
                'title' => 'Selected Works',
                'slug'  => 'selected-works',
                'period' => 'October ' . $year,
            ],
        ]);

        return view('gallery.year', compact('year', 'exhibitions'));
    }
}