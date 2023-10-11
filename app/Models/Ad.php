<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $fillable = [
        'image',
        'title_ar',
        'title_en',
    ];

    public function getImageAttribute($image)
    {
        return isset($image) ? assetsUpload() . '/ads/' . $image : '';
    }

    public function setImageAttribute($image)
    {

        if($image) {

            return $this->attributes['image'] = uploadFile($image, '/ads/');

        }

    }
}
