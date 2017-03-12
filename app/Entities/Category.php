<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug',
    ];

    public function newsTypes()
    {
        return $this->hasMany('App\Entities\NewsType');
    }
}
