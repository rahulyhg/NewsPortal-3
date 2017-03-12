<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table = 'news_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Entities\Category');
    }
    
    public function newses()
    {
        return $this->hasMany('App\Entities\News');
    }
}
