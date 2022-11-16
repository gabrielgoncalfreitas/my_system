<?php

namespace Database\Seeders;

use App\Models\Titles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Miss',
            'Mr',
            'Mrs',
            'Ms',
            'Other',
            'Unknown'
        ];

        foreach ($titles as $id => $title) {
            Titles::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $title
            ]);
        }
    }
}
