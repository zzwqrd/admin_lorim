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
        'title_en',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',
    ];

    public function getImageAttribute($image)
    {
        return isset($image) ? assetsUpload() . '/sections/' . $image : '';
    }

    public function setImageAttribute($image)
    {

        if ($image) {

            return $this->attributes['image'] = uploadFile($image, '/sections/');

        }

    }

    public function providers()
    {
        return $this->belongsToMany(Providers::class, 'provider_section');
    }


// public function sections()
// {
//     return $this->belongsTo(Sections::all());
// }

public function sub()
{
    return $this->belongsTo(SubSections::class);
}

public function subsection()
{
    return $this->hasMany(SubSections::class, 'section_id', 'id');
}

public function user () {
    return $this->hasMany(User::class);
}

}
