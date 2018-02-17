<?php artisan makem:modle comment

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email', 'subject','message'
    ];
}
//
