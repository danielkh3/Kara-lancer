<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['day','price' , 'detail' , 'detail_employer' , 'detail_lancer'];
}
