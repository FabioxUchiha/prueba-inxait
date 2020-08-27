<?php

namespace App;

use App\Department;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';
	protected $fillable = ['city', 'deparment_id'];

    public function deparment()
    {
    	return $this->belongsTo(Department::class);
    }
}
