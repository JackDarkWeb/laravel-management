<?php

namespace App\Http\Controllers;

use App\Http\Requests\home\ContactFormRequest;
use App\Services\home\ContactService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;

use Illuminate\Http\RedirectResponse;
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
     * @param ContactFormRequest $request
     * @return RedirectResponse
     */
    function store(ContactFormRequest $request){

        ContactService::insertContact($request);
        return redirect()->route('contact')->with(['message' => "<div class='alert alert-success'>Votre message a bien été envoyé</div>"]);
    }
}
