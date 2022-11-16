<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marital_statuses = [
            'Declined',
            'Divorced / Separated',
            'Married / Partnered',
            'Single',
            'Widowed',
            'Other'
        ];

        foreach ($marital_statuses as $id => $marital_status) {
            MaritalStatus::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $marital_status
            ]);
        }
    }
}
