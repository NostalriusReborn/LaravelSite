<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RealmAccount extends Model
{
	// protected $connection = 'database connection' found in database/config
	protected $table = 'account'; 
	protected $primaryKey = 'id';
	public $timestamps = false;

}
