<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
	use SoftDeletes;
	protected $fillable = [
			'header',
   			'title',
   			'show',
   			'type',
   			'excerpt',
            'body',
            'img'
    	    ];
}
