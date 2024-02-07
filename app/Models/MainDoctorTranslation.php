<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDoctorTranslation extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');   //is not essential
    }

    protected $fillable = [
        'description',
        'language_id',
        'main_doctor_id'
    ];
}
