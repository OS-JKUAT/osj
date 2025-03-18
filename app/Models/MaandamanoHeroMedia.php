<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaandamanoHeroMedia extends Model
{
    //
    protected $fillable = ['maandamano_hero_id', 'type', 'path'];

    public function maandamanoHero()
    {
        return $this->belongsTo(MaandamanoHero::class);
    }
}
