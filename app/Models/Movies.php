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
        'type',
        'published_at',
        'content',
        
    ];

}
