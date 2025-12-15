<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // // Ambil data gallery dari database (dummy dulu)
        $galleries = [
            ['title' => 'Retro Collection', 'description' => 'Koleksi klasik tahun 70an'],
            ['title' => 'Modern Abstract', 'description' => 'Eksperimen warna dan bentuk'],
        ];
        return view('gallery.index', compact('galleries'));
    }

    // public function create()
    // {
    //     return view('gallery.create');
    // }

    // public function store(Request $request)
    // {
    //     // Simpan data gallery
    //     return redirect()->route('gallery.index')->with('success', 'Gallery created!');
    // }

    // public function show($id)
    // {
    //     return view('gallery.show', ['id' => $id]);
    // }

    // public function edit($id)
    // {
    //     return view('gallery.edit', ['id' => $id]);
    // }

    // public function update(Request $request, $id)
    // {
    //     return redirect()->route('gallery.index')->with('success', 'Gallery updated!');
    // }

    // public function destroy($id)
    // {
    //     return redirect()->route('gallery.index')->with('success', 'Gallery deleted!');
    // }
}