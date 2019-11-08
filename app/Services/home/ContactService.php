<?php


namespace App\Services\home;



use App\Models\Contact;

class ContactService
{
    static function InsertContact($request){

        return Contact::create([
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
            'email'      => $request->get('email'),
            'subject'    => $request->get('subject'),
            'message'    => $request->get('message'),
        ]);
    }
}
