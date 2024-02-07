<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMenu extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(AboutMenuTranslation::class, 'about_menu_id', 'id');   //each category has a translation
    }
    public function translation()
    {
        return $this->hasOne(AboutMenuTranslation::class, 'about_menu_id', 'id');   //each category has a translation
    }
}
