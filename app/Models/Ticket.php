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
        'comment',

        'customer_name',
        'customer_mobile',
        'customer_email',
        'site',
        'anydesk_id',
        'customer_id',
        'extension_number',
        'inquiry'
    ];

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
