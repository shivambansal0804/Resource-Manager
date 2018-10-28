<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Story extends Model
{
    use SoftDeletes;
    use Uuids;

    protected $fillable = [
        'user_id', 'category_id',
        'title', 'biliner', 'slug',
        'body', 'status', 'cover',
        'views', 'likes', 
        'meta_title', 'meta_description'
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('cover')
            ->width(1000)
            ->height(1250);

        $this->addMediaConversion('fullscreen')
            ->width(1900)
            ->height(800);

        $this->addMediaConversion('thumb')
        ->width(800)
        ->height(800);
    }

    /**
     * Inverse of User's has Many
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Inverse of Category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
