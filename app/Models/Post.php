<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=[
        'section_id',
        'tilte_ar',
        'tilte_en',
        'tilte_tr',
        'tilte_du',
        'tilte_es',
        'body_ar',
        'body_en',
        'body_tr',
        'body_du',
        'body_es',
        'img',
        'video',
    ];


    public function section(){
        return $this->belongsTo(Section::class);
    }
}
