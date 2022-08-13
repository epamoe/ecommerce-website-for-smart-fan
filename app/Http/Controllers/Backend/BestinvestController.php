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



        if(isset($request->filtre) && isset($request->email))
        {

            session()->flash('alert','Un seul filtre à la fois');
            return back();
        }

        if(isset($request->filtre))
        {

            if($request->filtre == 'DEC')
        {            
        $bestindvestisor=DB::table('payments')
        ->join('users','users.id','payments.id_user')
        ->selectRaw('payments.montant_investit,payments.nbr_share,payments.pk,payments.name,payments.last_name,payments.email,users.country,users.phone,payments.bonus')
        ->orderBy('nbr_share','desc')
        ->get();}

        
        if($request->filtre == 'CRO')
        {            
                $bestindvestisor=DB::table('payments')
                ->join('users','users.id','payments.id_user')
                ->selectRaw('payments.montant_investit,payments.nbr_share,payments.pk,payments.name,payments.last_name,payments.email,users.country,users.phone,payments.bonus')
                ->orderBy('nbr_share','ASC')
                ->get();}
                if($request->filtre == 'ALP')
                {            
                        $bestindvestisor=DB::table('payments')
                        ->join('users','users.id','payments.id_user')
                       ->selectRaw('payments.montant_investit,payments.nbr_share,payments.pk,payments.name,payments.last_name,payments.email,users.country,users.phone,payments.bonus')
                        ->orderBy('name','asc')
                        ->get();
                }
        //(dd($total));
        return view('backend.users',['bestindvestisor'=>$bestindvestisor]);

        }



        if(!isset($request->email))
        {
            $users=DB::table('payments')
            ->join('users','users.id','payments.id_user')
            ->selectRaw('payments.montant_investit,payments.nbr_share,payments.pk,payments.name,payments.last_name,payments.email,users.country,users.phone,payments.bonus')
            ->orderBy('country','ASC')
            ->get();
            
        }

        else{

            $users=DB::table('payments')
            ->join('users','users.id','payments.id_user')
            ->where('payments.email',$request->email)
            ->selectRaw('payments.montant_investit,payments.nbr_share,payments.pk,payments.name,payments.last_name,payments.email,users.country,users.phone,payments.bonus')
            ->get();


            if($users->isEmpty())
            {
                session()->flash('alert','Utilisateur inexistant');
                return back();
            }
            return view('backend.users', ['users' => $users[0],'email'=>1]);
        }



       
        return view('backend.users', ['users' => $users,'email'=>0]);
    }

    public function addBonus(Request $request){

        $oldbonus=DB::table('payments')->where('pk',$request->pk)->selectRaw('bonus')->get();

        DB::table('payments')
        ->where('pk',$request->pk)
        ->update([
            "bonus"=>$oldbonus[0]->bonus+$request->bonus,
            "bonustampon"=>$request->bonus
        ]);

        return back();
    }


    public function delete(Request $request){

       $oldbonus=DB::table('payments')->where('pk',$request->pk)->selectRaw('bonus,bonustampon')->get();

        DB::table('payments')
        ->where('pk',$request->pk)
        ->update([
            "bonus"=>$oldbonus[0]->bonus-$oldbonus[0]->bonustampon,
            "bonustampon"=>0
        ]);

        return back();
    }
}
