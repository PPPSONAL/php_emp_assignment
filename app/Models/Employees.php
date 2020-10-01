<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Employees extends Eloquent
{

    protected $table = 'employees';

    protected $primaryKey = '_id';
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = ['emp_name','email','salary','address','contact','job_profile','depId'];
    protected $hidden = ['salary','updated_at','created_at'];

}
