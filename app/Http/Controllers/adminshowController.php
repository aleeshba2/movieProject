<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminshowController extends Controller
{
    public function movieShow()
    {
        $personData =  DB::table('tbl_shows')->get();
        // return $personData;
        return view('admin.adminShow',  ["data" => $personData]);
    }

}
