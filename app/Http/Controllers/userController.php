<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function addPerson(Request $req){

 

        $person = DB::table('movie_user')->insert(
            [
                'name' => $req->name,
                'email'=> $req->email,
                'salary'=> $req->password,
                'phone_number'=>$req->phone_number,
                'age'=> $req->age,
                'gender'=> $req->gender,
                'image'=> $req->image,
                'role_user'=> $req->role_user


                
            ]
            );
    
            if($person){
                return redirect()->route('home');
            }
    
            else{
                return ('error');
            }
}
}
