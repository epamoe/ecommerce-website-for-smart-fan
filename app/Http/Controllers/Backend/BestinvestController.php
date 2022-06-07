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

    public function users(Request $request){


        if(Auth::user()->role != 'admin') return back();

        if(!isset($request->email))
        {
            $users=DB::table('users')
            ->selectRaw('name,last_name, email, country,phone')
            ->orderBy('country', 'asc')
            ->get();
        }

        else{
            $users=DB::table('users')
            ->where('email',$request->email)
            ->get();


            if($users->isEmpty())
            {
                session()->flash('alert','Utilisateur inexistant');
                return back();
            }
            return view('backend.users', ['users' => $users[0],'email'=>1]);
        }
       
        return view('backend.users', ['users' => $users]);
    }
}
