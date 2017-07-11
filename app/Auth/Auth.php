<?php

namespace App\Auth;

use App\Models\User;


class Auth
{


    public function user()
    {

        if(isset($_SESSION['user'])){
        return User::find($_SESSION['user']);
        }
    }


    public function check()
    {

        return isset($_SESSION['user']);

    }


    public function attempt($email, $password)
    {
        //grab email from signin

        $user = User::where('email', $email)->first();

        // if !email exist on database  return false

        if(!$user)
        {

              return false;  

        }
        // if email exist check password and if correct


        if(password_verify($password, $user->password))
        {
            $_SESSION['user'] = $user->id;
            return true;

        }
        
        return false;

    }

    public function signout(){

        unset($_SESSION['user']);

    }

    

}