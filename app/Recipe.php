<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
	protected $fillable = [
   			'title',
            'body',
            'img',
            'category'
    	    ];
}
