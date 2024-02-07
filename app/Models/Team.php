<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(TeamTranslation::class, 'teams_id', 'id');   //each category has a translation
    }
    public function translation()
    {
        return $this->hasOne(TeamTranslation::class, 'teams_id', 'id');   //each category has a translation
    }
}
