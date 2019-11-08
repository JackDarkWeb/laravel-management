<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminLockFormRequest;
use App\Http\Requests\admin\AdminLoginFormRequest;
use App\Models\Announce;
use App\Models\Contact;
use App\Services\admin\AdminLoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * @param AdminLoginFormRequest $request
     * @return RedirectResponse
     */
    function checkAdmin(AdminLoginFormRequest $request){

        $response = AdminLoginService::checkAdmin($request);
        if($response === true){
            return redirect()->route('admin.lock');
        }
        session()->flash('message', $response);
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $count = [];

        $messages = Contact::all();
        $count['message'] = $messages->count();

        $announces = Announce::with('category')->latest()->get();
        $count['announce'] = $announces->count();

        return view('admin.admin-lock', [
            'messages' => $messages,
            'announces' => $announces,
            'count'    => $count,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminLockFormRequest $request
     * @return void
     */
    public function store(AdminLockFormRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
