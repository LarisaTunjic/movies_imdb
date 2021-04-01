<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $dates = [
        'published_at'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'imdbID',
        'type',
        'published_at',
        'poster',
        'rating',
        'genre',
        'director',
        'writer',
        'actor',
        'plot',
        'language',
        'country',
        'awards',
    ];

}
