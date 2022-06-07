<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SendMailController extends Controller
{
    public function show(){
       


$pays = DB::table('users')
->select(DB::raw("country ,count(*) as nbr"))
->groupBy('country')
->orderBy('country','asc')
->get();




        return view('backend.sendmail',['pays'=>$pays]);


    }

    public function sendmail(){
       


        $pays = DB::table('users')
        ->select(DB::raw("country ,count(*) as nbr"))
        ->groupBy('country')
        ->orderBy('country','asc')
        ->get();
        
        
        
        
                return view('backend.sendmail',['pays'=>$pays]);
        
        
            }
}
