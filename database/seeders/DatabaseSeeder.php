<?php

namespace Database\Seeders;

use App\Models\Subscribers;
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
        $this->call([
            UserSeeder::class
        ]);

        Subscribers::factory(5)->create();
    }
}
