<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
use Auth;

class UpvoteController extends Controller
{
    public function store(Request $request, Quote $quote)
    {
    	$user = Auth::user();
    	if(!$quote->upvotes()->where('user_id', $user->id)->first())
    	{
	    	$quote->upvotes()->create([
	    		'user_id' => $user->id,
	    		'quote_id' => $quote->id
	    	]);
    	}
    	return redirect()->back();
    }
}
