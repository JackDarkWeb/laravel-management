<?php


namespace App\Services\admin;


use App\Models\Admin;

class AdminLoginService
{
    static function checkAdmin($request){

        $admin = Admin::where('name', $request->get('email_or_phone'))->first();

        $error = '';

        if(isset($admin)){

            if(password_verify($request->get('password'), $admin->password)){

                $error = true;

                //$request->session()->put('email_or_phone' , 'root@yahoo.fr');

            }else{
                $error = "Password incorrect";
            }
        }else{
            $error = 'Email incorrect';
        }
        return $error;
    }

    static function hashPassword($var){
        return bcrypt($var);
    }

}
