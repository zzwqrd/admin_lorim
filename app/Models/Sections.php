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
        'title_ar',
        'title_en'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function getImageAttribute($image)
    {
        return isset($image) ? assetsUpload() . 'sections' . $image : '';
    }

    public function sections()
    {
        return $this->belongsTo(Sections::all());
    }

    public function subsection()
    {
        return $this->hasMany(SubSections::class, 'sub_section_id', 'id');
    }


}