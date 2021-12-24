<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Media;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Location::factory(10)->create();
        Property::factory(155)->create();
        Media::factory(500)->create();
        Page::create([
            'name'  => 'Contact Us',
            'slug'  => 'contact-us',
            'content'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat maxime ullam quae incidunt quos dolor, totam rem cumque aliquam, sequi doloribus iste enim odio possimus assumenda dolorem veritatis aperiam! Necessitatibus.'
        ]);
        Page::create([
            'name'  => 'About Us',
            'slug'  => 'about-us',
            'content'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat maxime ullam quae incidunt quos dolor, totam rem cumque aliquam, sequi doloribus iste enim odio possimus assumenda dolorem veritatis aperiam! Necessitatibus.'
        ]);
    }
}
