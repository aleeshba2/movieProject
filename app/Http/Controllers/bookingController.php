<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    function bookingPerson(Request $req){

 

        $person =DB::table('tbl_bookings')->insert(
            [
                'status' => $req->status,
                'userId'=> $req->userId,
                'showId'=> $req->showId,
                
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
