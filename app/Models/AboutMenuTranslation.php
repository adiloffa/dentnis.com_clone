<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMenuTranslation extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');   //is not essential
    }

    protected $fillable = [
        'title',
        'language_id',
        'about_menu_id',
        'category_id'
    ];
}
