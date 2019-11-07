<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
    ];

    /**
     * @return HasMany
     */
    public function announces(){

        //Un category possede plusieurs announce
        return $this->hasMany(Announce::class);
    }
}
