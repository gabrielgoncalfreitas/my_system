<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'Algerian Spoken Arabic',
            'Amharic',
            'Bengali',
            'Bhojpuri',
            'Burmese',
            'Eastern Punjabi',
            'Egyptian Spoken Arabic',
            'English',
            'French',
            'Gujarati',
            'Hakka Chinese',
            'Hausa',
            'Hindi',
            'Indonesian',
            'Iranian Persian',
            'Italian',
            'Japanese',
            'Javanese',
            'Jin Chinese',
            'Kannada',
            'Korean',
            'Lingala',
            'Mandarin Chinese',
            'Marathi',
            'Min Nan Chinese',
            'Modern Standard Arabic',
            'Nigerian Pidgin',
            'Polish',
            'Portuguese',
            'Russian',
            'Spanish',
            'Standard German',
            'Sudanese Spoken Arabic',
            'Swahili',
            'Tagalog',
            'Tamil',
            'Telugu',
            'Thai',
            'Turkish',
            'Urdu',
            'Vietnamese',
            'Western Punjabi',
            'Wu Chinese',
            'Yoruba',
            'Yue Chinese'
        ];

        foreach ($languages as $id => $language) {
            Languages::firstOrCreate([
                'id'          => ($id + 1),
                'description' => $language
            ]);
        }
    }
}
