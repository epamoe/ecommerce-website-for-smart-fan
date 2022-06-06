<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){

        $bestindvestisor=DB::table('payments')
        ->selectRaw('montant_investit,nbr_share,pk')
        ->orderBy('nbr_share','desc')
        ->limit(10)
        ->get();

        $mes_parts = DB::table('payments')
        ->where('id_user',Auth::user()->id)
        ->get();

        $nbr_users=DB::table('users')
        ->get()->count();

        $totalamount=DB::table('payments')
        ->select(DB::raw('SUM(montant_investit) as total_sales'))
        ->get();

        $totalshare=DB::table('payments')
        ->select(DB::raw('SUM(nbr_share) as total_share'))
        ->get();

        //(dd($total));
        return view('backend.home',['mes_parts'=>$mes_parts,'bestindvestisor'=>$bestindvestisor,'nbr_users'=>$nbr_users,'totalamount'=>$totalamount,'totalshare'=>$totalshare]);
    }

}
