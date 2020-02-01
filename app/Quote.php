<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function upvotes()
    {
    	return $this->hasMany('App\Upvote','quote_id','id');
    }
}
