<?php

namespace Database\Seeders;

use App\Models\Mentor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Faker::create();
        $languages = [1, 2, 3]; // Language IDs
        $types = ['beginner', 'intermediate', 'expert']; // Mentor types

        foreach ($languages as $languageId) {
            foreach ($types as $type) {
                for ($i = 1; $i <= 5; $i++) {
                    Mentor::create([
                        'name' => $faker->name,
                        'type' => $type,
                        'language_id' => $languageId,
                        'address' => "City $i, Language $languageId",
                        'email' => "$type$i.language$languageId@example.com",
                        'phone' => $faker->unique()->numerify('##########'),
                        'verified' => $i % 2 === 0, // Alternate between verified and not verified
                        'active' => $i % 2 !== 0, // Alternate between active and not active
                    ]);
                }
            }
        }
    }

}
