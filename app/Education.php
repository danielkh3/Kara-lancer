<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['university','field' , 'province' , 'start_year' , 'finish_year'];
}
