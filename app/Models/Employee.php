<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'date_contract' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name','last_name','phone','email','date_contract'];



}
