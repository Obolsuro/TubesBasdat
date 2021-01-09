<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class userM extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $fillable = [
        'uname', 'pass', 'mail', 'bd'
    ];
}
