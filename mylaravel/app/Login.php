<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{

	// use Notifiable;
	public $timestamps = false;

	protected $table = 'logins';

	protected $fillable = [
        'biaoti', 'content',
    ];
    // protected $hidden = [
    //     'content',
    // ];

    //
}