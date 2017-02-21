<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
		use SoftDeletes;
		protected $fillable = [
   			'title',
            'category',
            'body',
            'img',
            'credit'
    	    ];
}
