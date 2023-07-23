<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;


class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use HasTags;

    protected $guarded=[];

    protected $casts=[
        'tags'=>'array',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

}
