<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{

    function index(){

        $announces = Announce::where('active', 1)
            ->orderby('created_at', 'desc')
            ->get();

        //$announces = $announces->category();

        return view('announces.index', [

            'announces' => $announces,
        ]);
    }

    function recent(){

        $latest = Announce::with('category')->where('active', 1)
            ->orderby('created_at', 'desc')
            ->take(4)
            ->get();

        //$latest = $latest->category();

        return view('announces.recent_announce',[
            'latest' => $latest,
        ]);

    }

    function show($id, $slug){

        $announce = Announce::with('category')->where('id', $id)
            ->where('slug', $slug)
            ->first();

        /* //dd($announce->category->name);
         $similar = Category::with('announces')
                            ->where('name', $announce->category->name)
                            ->take(1)
                            ->get();


         dd($similar->announces()->where('id', '!=', $id)->get());*/

        return view('announces.show',[
            'announce' => $announce,
        ]);
        /*
        $post = [];
        return response()->json($post);
        redirect()->back();
        */
    }

    function category($category){

        dd($category);
    }


}
