<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{


    protected $table = 'providers';


    protected $fillable = [
        'title',
        'image',
        'description',
        'lat',
        'lng',
        'section_id',
        'sub_section_id',
    ];

    public function section()
    {
        return $this->morphToMany(Sections::class, 'section_id', 'id');
    }
    public function subsection()
    {
        return $this->morphToMany(SubSections::class, 'sub_section_id', 'id');
    }
}
