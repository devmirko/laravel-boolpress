<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    // determina il nome della tabella sovrascrivendo la convenzione del plurale
    protected $table = 'users_details';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'address', 'phone', 'birth'
    ];
    // collegamento delle classi

    public function user() {
        return $this->belongsTo('App\Models\User'); // nella tabella con il foreign key
    }
}
