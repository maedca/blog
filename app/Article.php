<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;


/**
 * @property string content
 */
class Article extends Model
{


    protected $table = 'articles';
    protected $fillable = ['title','slug','content', 'category_id', 'user_id'];
   /* public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }*/
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Images');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
