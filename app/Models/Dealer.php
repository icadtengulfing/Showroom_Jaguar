<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'country',
        'image'
    ];
    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset($this->image)
            : asset('images/defaults/default-dealer.jpg');
    }

    // Tidak perlu password untuk dealer berdasarkan seeder Anda
}
