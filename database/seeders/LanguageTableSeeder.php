<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["Newari" ,"Newar or Newari known officially in Nepal as Nepal Bhasa is a Sino-Tibetan language is spoken by the Newar people, the indigenous inhabitants of Nepal Mandala, also found in the Kathmandu Valley and surrounding regions in Nepal."],
            ["Tamang", "Tamang is a language of the Tibeto-Burman family, belonging in the same branch as classical Tibetan, but it is not a descendant of classical Tibetan; it is not a Tibetan dialect"],
            ["Maithali", "Maithili (Nepali: मैथिली; /ˈmaɪtɪli/; Maithilī) is an Indo-Aryan language. It is spoken in Nepal and northern India. It is spoken by 34.7 million people. Of those, 2.8 million are Nepalese people."]
        ];

        foreach ($data as $d) {
            $language = new Language();
            $language->title = $d[0];
            $language->description = $data[1];
        }
    }
}
