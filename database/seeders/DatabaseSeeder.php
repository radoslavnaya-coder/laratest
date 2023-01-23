<?php

namespace Database\Seeders;

use App\Models\desk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\desk::factory()->create([
            'name' => Str::random(10)
        ]);

        \App\Models\desklist::factory()->create([
            'name' => Str::random(10)
        ]);

        \App\Models\card::factory()->create([
            'name' => Str::random(10)
        ]);

        \App\Models\task::factory()->create([
            'name' => Str::random(10)
        ]);
    }
}
