<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSections extends Model
{
    protected $table = 'sub_sections';
    protected $fillable = [
        'title_ar',
        'title_en',
        'section_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function section()
    {
        return $this->hasMany(Sections::class, 'section_id', 'id');
    }

    public function providers()
    {
        return $this->hasMany(Providers::class, 'sub_section_id', 'id');
    }
}
