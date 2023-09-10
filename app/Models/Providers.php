<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;

    protected $table = 'providers';


    protected $fillable = [
        'name',
        'image',
        'description',
        'rate',
        'status',
        'lat',
        'lng',
        'section_id',
        'sub_section',
    ];

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
}
