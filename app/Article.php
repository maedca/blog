<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;


class Article extends Model
{

    use Sluggable;
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'slug', // Los slugs se agregan como un campo mas en la tabla 
        'content', 
        'category_id', 
        'user_id'];
    
    // Esta Funcion ya no se usara...
    /*public function sluggable()
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
