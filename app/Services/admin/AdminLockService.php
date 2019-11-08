<?php


namespace App\Services\admin;


use App\Helpers\Helper;
use App\Models\Announce;
use App\Models\Category;
use App\Models\Picture;

class AdminLockService
{
    function insertService($request){

        $pictureName = [];

        foreach ($request->file as $key => $item){

            $pictureName[$key] = time().'.'.$item->getClientOriginalExtension();
            $item->storeAs('pictures', $pictureName[$key]);
        }

        $category = Category::create(['name' => $request->get('category')]);
        $announce = Announce::create([
            'title' => $request->get('title'),
            'type' => $request->get('type'),
            'price' => $request->get('price'),
            'devise' => $request->get('devise'),
            'description' => $request->get('description'),
            'address' => $request->get('address'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'phone' => $request->get('phone'),
            'slug' => Helper::slug_title($request->get('title')),
            'code' => rand(0,9),
            'active' => 1,
        ]);

        Picture::create([
            'announce_id' => $announce->id,

        ]);
    }
}
