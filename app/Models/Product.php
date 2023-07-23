<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory , HasTags;

    protected $guarded=[];

    protected $casts = [
        'tags' => 'array',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);

    }


}
