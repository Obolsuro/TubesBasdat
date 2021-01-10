<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class tweets extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tweets';
    protected $fillable = [
        'PI', 'content', 'reply'
    ];
}
