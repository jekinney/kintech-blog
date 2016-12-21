<?php

namespace App\Users\Queries;

trait UserQueries
{
	public function login($request)
	{
		if(!auth()->attempt(['email' => $request->email, 'password' => $request->password], true)) 
		{
			return abort(505, 'Unable to log you in');
		}

	}
}