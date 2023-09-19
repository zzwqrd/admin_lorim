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
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function sections()
    {
        return $this->belongsTo(Sections::all());
    }

    public function subsection()
    {
        return $this->hasMany(SubSections::class, 'sub_section_id', 'id');
    }


}