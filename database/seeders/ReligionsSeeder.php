<?php

namespace Database\Seeders;

use App\Models\Religions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            'African Traditional & Diasporic',
            'Agnostic',
            'Atheist',
            'Bahai',
            'Buddhism',
            'Cao Dai',
            'Chinese traditional religion',
            'Christianity',
            'Hinduism',
            'Muslim/Islam',
            'Jainism',
            'Juche',
            'Judaism',
            'Neo-Paganism',
            'Nonreligious',
            'Rastafarianism',
            'Secular',
            'Shinto',
            'Sikhism',
            'Spiritism',
            'Tenrikyo',
            'Unitarian-Universalism',
            'Zoroastrianism',
            'Primal-Indigenous',
            'Other',
        ];

        foreach ($religions as $id => $religion) {
            Religions::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $religion
            ]);
        }
    }
}
