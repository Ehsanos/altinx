<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'description',
        'is_active',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function getImgAttribute()
    {

        if ($this->hasMedia('categories')) {
            return $this->getFirstMediaUrl('categories');
        }

    }

}
