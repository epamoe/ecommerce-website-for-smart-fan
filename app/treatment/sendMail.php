<?php
namespace App\treatment;

use \Mailjet\Resources;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use View;

class sendMail
{
  


    public function sendMail($email,$nom,$subject,$textpart)
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
                        'Email' => $email,
                        'Name' => $nom
                    ]
                ],
                'Subject' => $subject,
                'TextPart' => $textpart,
                'HTMLPart' => $textpart
            ]
        ]
    ];
    $response = $mailjet->post(Resources::$Email, ['body' => $body]);

    // if($response->success())
    //  return $response->success(); //$response->getData();
    // else return 'Failed';
    
    }
    



  public   function test()
    {
        return "sa marche";
    }





}






?>