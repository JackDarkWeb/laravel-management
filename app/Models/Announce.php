<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Announce extends Model
{
    protected $table = 'announces';

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'category_id',
        'type',
        'price',
        'devise',
        'description',
        'address',
        'country',
        'city',
        'phone',
        'code',
        'slug',
        'active',
    ];

    /**
     * @return BelongsTo
     */
    public function category(){

        // Une announce possede un category
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function picture(){

        return $this->hasMany(Picture::class);
    }



}
