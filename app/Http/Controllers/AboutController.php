<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Quote;
use App\Models\Founder;
use Illuminate\Http\Request;
use App\Models\VisionMission;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // Ambil konten About
        $visions = VisionMission::where('type', 'vision')->get();
        $missions = VisionMission::where('type', 'mission')->get();
        $founder = Founder::first();
        $quote = Quote::first();

        return view('about.index', compact('about', 'visions', 'missions', 'founder', 'quote'));
    }
}