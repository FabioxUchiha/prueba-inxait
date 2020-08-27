<?php

namespace App;

use App\City;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = 'departments';
	protected $fillable = ['department'];

	public function users()
	{
		// return $this->hasMany(User::class);
	}

	public function city()
	{
		return $this->hasMany(City::class);
	}
}
