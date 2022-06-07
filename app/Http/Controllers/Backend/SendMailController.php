<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\treatment\sendMail;


class SendMailController extends Controller
{
    public function show(){
       


$pays = DB::table('users')
->select(DB::raw("country ,count(*) as nbr"))
->groupBy('country')
->orderBy('country','asc')
->get();

$email = DB::table('email')
->orderBy('id','asc')
->get();




        return view('backend.sendmail',['pays'=>$pays,'emails'=>$email]);


    }

    public function sendmail(Request  $request){




        $input = DB::table('email')
        ->insert([
            'message'=>$request->message,
            'titre'=>$request->objet,
            'pays'=>$request->pays
        ]);
       


        if($input)
        {

            if($request->pays == null)
{

    $pays = DB::table('users')
    ->get();

    foreach($pays as $pay)
    {

        
        $response = (new sendMail())->sendMail($pay->email,$pay->name,$request->objet, $request->message);
    }

    
    session()->flash('good','Message envoyé avec success');
    return back();
}

else{


    $pays = DB::table('users')
    ->where('country',$request->pays)
    ->get();

    foreach($pays as $pay)
    {
        $response = (new sendMail())->sendMail($pay->email,$pay->name,$request->objet, $request->message);
    }

    session()->flash('good','message envoyé avec success');
    return back();
}

        }

        else{
            session()->flash('alert','Veuillez reessayez plustard');
            return back();
        }

        
        
        
        
              
        
        
            }
}
