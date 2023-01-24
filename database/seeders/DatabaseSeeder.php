<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dolorem corrupti impedit soluta quod cum obcaecati nostrum sed magni. Velit vitae soluta eos consectetur tempore dolores veniam voluptas quaerat earum delectus non odit eaque illum, explicabo fugit similique impedit, sunt odio officia, officiis fuga natus dolorem? Aliquam rem expedita sequi.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dolorem corrupti impedit soluta quod cum obcaecati nostrum sed magni. Velit vitae soluta eos consectetur tempore dolores veniam voluptas quaerat earum delectus non odit eaque illum, explicabo fugit similique impedit, sunt odio officia, officiis fuga natus dolorem? Aliquam rem expedita sequi.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
