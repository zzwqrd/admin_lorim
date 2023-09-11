<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{


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
        'sub_section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
    public function subsection()
    {
        return $this->belongsTo(SubSections::class, 'sub_section_id', 'id');
    }
}
