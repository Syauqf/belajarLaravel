<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
    'employee_id', 
    'employee_name',
    'employee_address',
    'employee_phone_number'
    ];
}
