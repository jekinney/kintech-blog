<?php

namespace App\Users\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'name',
		'email',
		'subject',
		'message',
		'archive',
	];
}
