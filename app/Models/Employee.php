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

	public function getPhoneAttribute($value) {
        $ac = substr($value, 1,3);
        $prefix = substr($value,4,3);
        $suffix = substr($value, 7);

        return "({$ac}) {$prefix}-{$suffix}";
    }


}
