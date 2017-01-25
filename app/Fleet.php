<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fleet extends Model
{
	use SoftDeletes;
	protected $fillable = [
   			'title',
            'body',
            'img'
    	    ];
}
