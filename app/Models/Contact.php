<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = true;

    protected $table = 'contacts';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
    ];
}
