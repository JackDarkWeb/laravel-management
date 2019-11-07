<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{

    /**
     * @return Factory|View
     */
    function index(){
        return view('home.welcome');
    }

    /**
     * @return Factory|View
     */
    function about(){
        return view('home.about');
    }

    /**
     * @return Factory|View
     */
    function contact(){
        return view('home.contact');
    }

    /**
     * @return Factory|View
     */
    function service(){
        return view('home.service');
    }


    /**
     * @param Request $request
     */
    function store(Request $request){

        dd($request->all());
    }
}
