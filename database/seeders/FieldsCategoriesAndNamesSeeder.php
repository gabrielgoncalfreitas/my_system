<?php

namespace Database\Seeders;

use App\Models\FieldsCategoriesAndNames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsCategoriesAndNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $field_categories_and_names = [
            'Fields' => [
                'text' => 'Text',
                'textarea' => 'Textarea',
            ],

            'Typography' => [
                'section-divider' => 'Section divider',
                'h1' => 'Header 1',
                'h2' => 'Header 2',
                'h3' => 'Header 3',
                'h4' => 'Header 4',
                'h5' => 'Header 5',
                'h6' => 'Header 6',
                'paragraph' => 'Paragraph',
            ],
        ];

        FieldsCategoriesAndNames::firstOrCreate([
            'id' => 1,
            'fields_categories_names' => json_encode($field_categories_and_names)
        ]);
    }
}
