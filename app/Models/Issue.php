<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'name',
        'ticket_id'
    ];

    public $timestamps = false;

    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
}
