<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'About Kiniko Art Management',
            'description' => 'An art management platform dedicated to sustaining contemporary visual culture.',
            'content' => 'Visual art has long been an essential element in shaping human civilization, influencing technology, communication, fashion, and social structures...',
            'image' => 'img/about-hero.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
