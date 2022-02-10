<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{

    protected $fillable = [

        'name',
        'salaryinday',
        'cartype',
        'datecreate',
        'engine_condition',
        'condition',
        'description',
        'with_driver'


    ];





}
