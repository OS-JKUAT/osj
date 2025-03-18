<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaandamanoHero extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name', 'alias', 'slug', 'dob', 'dod', 'birthplace', 'place_of_death', 'ethnicity', 'county', 'highschool', 'uni', 'occupation', 'cause', 'contributions', 'affiliations', 'awards', 'case_number', 'religion', 'residence', 'quotes', 'legacy', 'death', 'memorial_location', 'image', 'documents', 'eulogy'
    ];

    protected $casts = [
        'dob' => 'date',
        'dod' => 'date',
        'documents' => 'array',
    ];

    public function maandamanoHeroMedia()
    {
        return $this->hasMany(MaandamanoHeroMedia::class);
    }

    public function maandamanoHeroKin()
    {
        return $this->hasMany(MaandamanoHeroKin::class);
    }
}
