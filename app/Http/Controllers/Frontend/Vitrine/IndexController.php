<?php

namespace App\Http\Controllers\Frontend\Vitrine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Mailjet\Resources;
use Mailjet\LaravelMailjet\Facades\Mailjet;

class IndexController extends Controller
{
     
    public function index()
    {
        return view('frontend.index');
    }
    
    
  public function sendmessage(Request $request )
    {
        $mailjet = new \Mailjet\Client('cbbf565827215f1b7b3bcd041c331eed','36c1ac1b7d088bc375c2bc34ecfb9607',true,['version' => 'v3.1']);

     $body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "infos@smartfantechnology.com",
                'Name' => "SMART FAN TECHNOLOGY"
            ],
            'To' => [
                [
                    'Email' => "steveellah01@gmail.com",
                    'Name' => "smartfantechnology"
                ]
            ],
            'Subject' => $request->objet,
            'TextPart' => $request->message,
            'HTMLPart' => ''.$request->message.'(Email du client : '.$request->email." / Numero du client  ".$request->number.')'
        ]
    ]
];
$response = $mailjet->post(Resources::$Email, ['body' => $body]);

session()->flash("good","message envoyé avec success");
            return back();
    }


    
}


