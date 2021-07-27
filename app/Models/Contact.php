<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
public $timestamps = false;
protected $primaryKey = 'user_id';
protected $fillable=[
		'phone',
		'user_id',
		'city',
		'address',
		'state',
		'zipcode'
	];
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
