<?php


namespace App\Helpers;


use Illuminate\Support\Str;

class Helper
{
    public static function Slug_title($title){
        return Str::slug($title, '-');
    }

}
