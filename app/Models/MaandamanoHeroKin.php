<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaandamanoHeroKin extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'maandamano_hero_id', 'name', 'relationship', 'contact', 'bio'
    ];

    public function maandamanoHero()
    {
        return $this->belongsTo(MaandamanoHero::class);
    }
}
