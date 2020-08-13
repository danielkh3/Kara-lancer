<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['subject', 'detail', 'suggested_days', 'price' , 'title_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function titles()
    {
        return $this->belongsTo(Title::class);
    }
}
