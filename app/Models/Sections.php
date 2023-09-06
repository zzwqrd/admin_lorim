<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    protected $table = 'sections';


    protected $fillable = [
        'image',
        'title'
    ];

    public static function sections()
    {
        return Sections::all();
    }


}