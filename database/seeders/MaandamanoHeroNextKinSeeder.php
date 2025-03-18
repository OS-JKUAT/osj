<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaandamanoHeroKin;
use App\Models\MaandamanoHero;

class MaandamanoHeroNextKinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kimathi = MaandamanoHero::where('name', 'Dedan Kimathi')->first();
        $mandela = MaandamanoHero::where('name', 'Nelson Mandela')->first();

        if ($kimathi) {
            MaandamanoHeroKin::insert([
                ['maandamano_hero_id' => $kimathi->id, 'name' => 'Mukami Kimathi', 'relationship' => 'Wife', 'contact' => 'N/A',  'created_at' => now(), 'updated_at' => now()],
            ]);
        }

        if ($mandela) {
            MaandamanoHeroKin::insert([
                ['maandamano_hero_id' => $mandela->id, 'name' => 'Winnie Mandela', 'relationship' => 'Wife', 'contact' => 'N/A',   'created_at' => now(), 'updated_at' => now()],
                ['maandamano_hero_id' => $mandela->id, 'name' => 'Makaziwe Mandela', 'relationship' => 'Daughter', 'contact' => 'N/A', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }

    }
}
