<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_forms';

    protected $fillable = [
        'dealer_id',
        'fullname',
        'email',
        'phone',
        'country',
        'model',
        'message',
    ];

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }
}
