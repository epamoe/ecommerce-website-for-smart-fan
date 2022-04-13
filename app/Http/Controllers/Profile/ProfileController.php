<?php

namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //edit user profile
    public function edit(Request $req){
        
        if($req->name!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['name'=>$req->name]);
        }
        if($req->last_name!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['last_name'=>$req->last_namename]);
        }
        if($req->email!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['email'=>$req->email]);
        }
        if($req->phone!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['phone'=>$req->phone]);
        }
        if($req->country!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['country'=>$req->country]);
        }
        if($req->country!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['description'=>$req->description]);
        }
        if($req->country!='') {
            $affected = DB::table('users')
                 ->where('pk',$req->reference)
                 ->update(['ville'=>$req->ville]);
        }

        $qry = "select * from ".
        "users INNER JOIN payments ON users.id=payments.id_user where ".
        "('".$req->reference."'<>''"." and users.pk like '%".$req->reference."%') ".
        ";";
        //print_r($qry);
        $result = DB::select($qry);
        //dd($result);
        return view('app-profile_show',['profile' => $result]);
    }
    //Find a profile by email
    public function find(Request $req){
        $qry = "select * from ".
        "users INNER JOIN payments ON users.id=payments.id_user where ".
        "('".$req->email."'<>''"." and users.email like '%".$req->email."%') ".
        ";";
        //print_r($qry);
        $result = DB::select($qry);
        //dd($result);
        return view('app-profile_show',['profile' => $result]);
    }
}