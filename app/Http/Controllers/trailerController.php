<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trailerController extends Controller
{
    public function showTrailer()
    {
        $personData =DB::table('tbl_movies')->get();

        return view('pages.home', ["data" => $personData]);
    }
}
