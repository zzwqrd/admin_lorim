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

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
    public function subsection()
    {
        return $this->hasMany(SubSections::class, 'section_id', 'id');
    }

    public function providers()
    {
        return $this->hasMany(Providers::class, 'sub_section_id', 'id');
    }
}