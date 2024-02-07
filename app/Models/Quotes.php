<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(QuotesTranslation::class, 'quote_id', 'id');   //each category has a translation
    }

}
