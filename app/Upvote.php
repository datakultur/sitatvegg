<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    protected $guarded = ['id'];

    public function quote()
    {
    	return $this->belongsTo('App\Quote');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
