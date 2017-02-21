<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submission extends Model
{
		use SoftDeletes;
		protected $fillable = [
   			'name',
            'email',
            'phone',
            'employer',
            'title',
            'ingredients',
            'instructions'
    	    ];
}
