<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
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
        return view('home', compact('exhibitions'));
    }
}