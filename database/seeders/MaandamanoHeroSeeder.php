<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaandamanoHero;

class MaandamanoHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        MaandamanoHero::insert([
            [
                'name' => 'Dedan Kimathi',
                'slug' => 'dedan-kimathi',
                'alias' => 'Field Marshal Kimathi',
                'dob' => '1920-10-31',
                'dod' => '1957-02-18',
                'birthplace' => 'Nyeri, Kenya',
                'place_of_death' => 'Nairobi, Kenya',
                'ethnicity' => 'Kikuyu',
                'county' => 'Kenya',
                'cause' => 'Mau Mau Rebellion Leader',
                'contributions' => 'Led the Mau Mau Uprising against British colonial rule.',
                'affiliations' => 'Mau Mau Movement',
                'awards' => 'National Hero (Posthumous)',
                'case_number' => 'C-43-13/65/24',
                'religion' => 'Christian',
                'residence' => 'Tetu',
                'quotes' => '"It is better to die on our feet than to live on our knees."',
                'legacy' => 'Symbol of Kenya’s fight for independence.',
                'death' => 'Drowning',
                'memorial_location' => 'Uhuru Park, Nairobi',
                'image' => null,
                'documents' => json_encode(['doc1.pdf', 'doc2.pdf']),
                'eulogy' => 'A brave warrior whose sacrifice paved the way for Kenya’s freedom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nelson Mandela',
                'slug' => 'nelson-mandela',
                'alias' => 'Madiba',
                'dob' => '1918-07-18',
                'dod' => '2013-12-05',
                'birthplace' => 'Mvezo, South Africa',
                'place_of_death' => 'Johannesburg, South Africa',
                'ethnicity' => 'Xhosa',
                'county' => 'South Africa',
                'cause' => 'Anti-Apartheid Activist',
                'contributions' => 'Led the fight against apartheid and became South Africa’s first Black president.',
                'affiliations' => 'African National Congress (ANC)',
                'awards' => 'Nobel Peace Prize (1993)',
                'religion' => 'Muslim',
                'case_number' => 'C-43-13/65/24',
                'residence' => 'Joburg',
                'quotes' => '"Education is the most powerful weapon which you can use to change the world."',
                'legacy' => 'Symbol of peace, reconciliation, and equality.',
                'death' => 'Police brutality',
                'memorial_location' => 'Nelson Mandela Square, South Africa',
                'image' => null,
                'documents' => json_encode(['speech.pdf', 'letter_to_prison.pdf']),
                'eulogy' => 'A global icon of peace and justice.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
