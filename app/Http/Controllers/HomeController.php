<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $currentExhibition = Exhibition::where('is_current', 1)->first();
        $exhibitions = Exhibition::orderBy('start_date', 'desc')->limit(5)->get();
        return view('home', compact('exhibitions', 'currentExhibition'));
    }
}