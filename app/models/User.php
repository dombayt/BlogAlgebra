<?php

namespace App\models;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    protected static $postModel = 'App\Models\Post';
	
	public function posts()
	{
		return $this->hasMany(static::$postModel);
	}
}
