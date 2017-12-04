<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{

	// use Notifiable;
	public $timestamps = false;

	protected $table = 'lianxi1';

	protected $fillable = [
        'name', 'pwd',
    ];
    // protected $hidden = [
    //     'content',
    // ];

    //
}