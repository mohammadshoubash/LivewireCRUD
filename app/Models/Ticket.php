<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'country',
        'priority',
        'first_category',
        'second_category',
        'third_category',
        'attachment',
        'comment'
    ];
}
