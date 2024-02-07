<?php

namespace App\Models;

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(AboutUsTranslation::class, 'about_us_id', 'id');   //each category has a translation
    }
    public function translation()
    {
        return $this->hasOne(AboutUsTranslation::class, 'about_us_id', 'id');   //each category has a translation
    }
}
