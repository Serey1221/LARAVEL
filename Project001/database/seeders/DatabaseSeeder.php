<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel,javascript',
        //     'company' => 'Jenny Ben Technology',
        //     'location' => 'Siem Reap',
        //     'email' => 'sereyjenny@gmail.com',
        //     'website' => 'https://www.catalog.com',
        //     'description' => 'Lorem ipsum dolor sit 
        //     amet, consectetur adipiscing elit, 
        //     sed do eiusmod tempor incididunt ut labore
        //      et dolore magna aliqua.Ut enim ad minim veniam, 
        //      quis nostrud exercitation ullamco laboris nisi ut aliquip 
        //      ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        //      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        //      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
        //       officia deserunt mollit anim id est laborum.'
        // ]);
        // Listing::create([
        //     'title' => 'PHP Developer',
        //     'tags' => 'PHP,javascript',
        //     'company' => 'Jenny Ben Technology',
        //     'location' => 'Siem Reap',
        //     'email' => 'sereyBen@gmail.com',
        //     'website' => 'https://www.catalog.com',
        //     'description' => 'Lorem ipsum dolor sit 
        //     amet, consectetur adipiscing elit, 
        //     sed do eiusmod tempor incididunt ut labore
        //      et dolore magna aliqua.Ut enim ad minim veniam, 
        //      quis nostrud exercitation ullamco laboris nisi ut aliquip 
        //      ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        //      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
        //      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
        //       officia deserunt mollit anim id est laborum.'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
// public interface Car {
// void autodriver();
// }
// public class BW implements Car {
// String name;
// void driver(){
// System.out.println(name + “ is driver”);
// }
// public void autodriver(){
// System.out.println(name + “ is autodriver”);
// }
// }