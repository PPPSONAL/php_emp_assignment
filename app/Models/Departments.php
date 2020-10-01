<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Departments extends Eloquent
{

    protected $table = 'departments';

    protected $primaryKey = '_id';
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = ['dep_name'];

    protected $hidden = ['updated_at','created_at'];

    public function employees()
    {
        return $this->hasMany('App\Models\Employees', 'depId', '_id');
    }
}
