<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{


    protected $table = 'posts';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'author',
        'title',
        'slug',
        'body',
        'is_published',
        'category_id'
    ];


    protected $dates = [];


    protected $casts = [];

    public function getThumbnailAttribute()
    {
        if (Str::contains('src=',$this->body)){
            return 'found.png';

        }
        return 'not found.png';
    }

    public function getSummaryAttribute()
    {
        $summary = Str::words(strip_tags($this->body), 50);
        return  strip_tags($summary);
    }

    /**
     * Get the category for this model.
     *
     * @return App\Models\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }


}
