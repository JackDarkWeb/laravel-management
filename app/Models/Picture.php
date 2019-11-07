<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Picture extends Model
{
    public $timestamps = true;

    protected  $table = 'pictures';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [

        'picture',
        'announce_id',
    ];

    /**
     * @return BelongsTo
     */
    function announces(){

        return $this->belongsTo(Announce::class);
    }
}
