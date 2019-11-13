<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    protected $fillable =
        ['fName','lName','standard','pNo'];
}
