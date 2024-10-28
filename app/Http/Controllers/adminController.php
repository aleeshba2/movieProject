<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller

{
    public function showPerson()
    {
        $personData =  DB::table('movie_users')->get();
        return $personData;
        // return view('admin.home', ["data" => $personData]);
    }

   
    public function savePerson(Request $req)
    {

        $person = DB::table('movie_users')->insert(
            [
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password,
                'age' => $req->age,
                'gender' => $req->gender,
            
                'mobile' => $req->mobile,
                'image' => $req->image,
                'role' => $req->role
            ]
        );

        if ($person) {
            
            return redirect()->route('home');
        } else {
            return 'Error';
        }
    }


    
    public function showUsers(Request $req)
    {
        $singlePerson = DB::table('movie_users')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('admin.editUser', ["data" => $singlePerson]);
    }


    public function editPerson(Request $req)
    {
        $singlePerson = DB::table('movie_users')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('admin.editUser', ["data" => $singlePerson]);
    }

    public function updatePerson(Request $req)
    {

        $updateUser = DB::table('movie_users')->where('id', $req->id)->update(
            [
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password,
                'age' => $req->age,
                'gender' => $req->gender,
            
                'mobile' => $req->mobile,
                'image' => $req->image,
                'role' => $req->role
            ]
        );
        if ($updateUser) {
            return redirect()->route('home');
        } else {
            return 'Error';
        }
}

public function deletePerson(String $id)
{
    $delete  = DB::table('movie_users')->where('id',$id)->delete();
    // return $id;

    if($delete){
        return redirect()->route('home');
    }else{
        return 'An Error Occurd';
    }
}
}

   

    

