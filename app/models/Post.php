<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
	
	protected $fillable = ['user_id', 'title', 'slug', 'content'];
	protected static $userModel = 'App\Models\User';
	
	public function user()
	{
		return $this->belongsTo(static::$userModel);
	}
	
	public function savePost($postData = array())
	{
		return $this->fill($postData)->save();
	}
	
	public function updatePost($postData = array())
	{
		return $this->upadate($postData);
	}
	
	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}


















