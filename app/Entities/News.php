<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'summary', 'content', 'image', 'news_type_id'
    ];

    public function newsType()
    {
        return $this->belongsTo('App\Entities\NewsType');
    }
}
