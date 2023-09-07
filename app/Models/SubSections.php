<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSections extends Model
{
    protected $table = 'sub_sections';
    protected $fillable = ['title', 'section_id',];

    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
}
