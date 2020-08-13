<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['company','job' , 'province' , 'start_year' , 'finish_year'];
}
