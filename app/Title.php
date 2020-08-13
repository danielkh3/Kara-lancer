<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = ['slug', 'content', 'image'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
