<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BestinvestController extends Controller
{
    public function index()
    {
        
        $bestindvestisor=DB::table('payments')
        ->selectRaw('montant_investit,nbr_share,pk')
        ->orderBy('nbr_share','desc')
        ->get();

        

        //(dd($total));
        return view('backend.bestinvest',['bestindvestisor'=>$bestindvestisor]);
    }

    public function users(){
        if(Auth::user()->role != 'admin') return back();
        $users=DB::table('payments')
        ->selectRaw('name,last_name, email, nbr_share')
        ->orderBy('name', 'asc')
        ->get();
        return view('backend.users', ['users' => $users]);
    }
}
