<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class category extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'slug',

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'category',
                 'onupdate'=>true,
            ]
        ];
    }
}
