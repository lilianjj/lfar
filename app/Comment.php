<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name','n','a', 's', 'email', 'subject','message'
    ];
}
//
