<?php

namespace Database\Seeders;

use App\Models\SexualOrientations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexualOrientationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexual_orientations = [
            'Bisexual',
            'Heterosexual',
            'Homosexual',
            'Unknown',
            'Prefer not to say',
            'Prefer to self-describe',
        ];

        foreach ($sexual_orientations as $id => $sexual_orientation) {
            SexualOrientations::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $sexual_orientation
            ]);
        }
    }
}
