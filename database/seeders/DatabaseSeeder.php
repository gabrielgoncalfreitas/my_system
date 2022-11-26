<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(EthnicitiesSeeder::class);
        $this->call(GendersSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(NationalitiesSeeder::class);
        $this->call(ReligionsSeeder::class);
        $this->call(SexualOrientationsSeeder::class);
        $this->call(TitlesSeeder::class);
    }
}
