<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Postingan extends Model
{
    use Sluggable;
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
