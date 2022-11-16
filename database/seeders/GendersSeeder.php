<?php

namespace Database\Seeders;

use App\Models\Genders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            'Female',
            'Male',
            'Transgender',
            'Unknown',
            'Gender Fluid',
            'Third Gender',
            'Prefer not to say',
            'Prefer to self-describe'
        ];

        foreach ($genders as $id => $gender) {
            Genders::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $gender
            ]);
        }
    }
}
