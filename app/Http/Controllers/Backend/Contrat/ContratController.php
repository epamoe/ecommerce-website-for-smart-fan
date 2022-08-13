<?php

namespace App\Http\Controllers\Backend\contrat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Mpdf\Mpdf;


class ContratController extends Controller
{
    //

    public function mycontrat(Request $request)
   {
      $toto=DB::table('payments')
      ->join('users','users.id','payments.id_user')
      ->where('users.id',Auth::id())
      ->selectRaw('users.name,users.last_name,users.email,users.country,users.pk,payments.nbr_share,payments.nbr_share,payments.montant_investit')
      ->get();
      //dd($toto);
    // die(var_dump(Auth::id(),$toto[0]->name,$toto[0]->nbr_share,Auth::user()->last_name,Auth::user()->country,Auth::user()->email));
      $mpdf = new Mpdf();

      //  $mpdf->SetDefaultBodyCSS('background', "url(".$logo.")");
      $mpdf->WriteHTML(" <div class='row'> <div class='col'>   <img src='frontend/images/logo.jpg' style='height:200px;width:200px' ></div> </div>");


      $mpdf->WriteHTML("  <h1 style='color:blue;'>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp; <span style='text-decoration: none;'>   Contrat de souscription  </span> </h1>   Le présent contrat est signé et prend effet à compter du  <b>  " . date('Y-m-d ') . " </b> <br><br>  
        ENTRE : <br><br>
        <b>&nbsp;&nbsp;&nbsp;&nbsp; PREVO SARL </b>(l’entreprise), une société a responsabilité limité
        (SARL) dont le siège social est au Cameroun,Yaoundé <br><br>
           Et :<br><br> <b>&nbsp;&nbsp;&nbsp;</b> <b> " .$toto[0]->name . " " . $toto[0]->last_name . " </b> (L’acheteur),
     résidant en/au " .  $toto[0]->country . "  et d’adresse mail    <b> " .  $toto[0]->email . "  </b>   <br><br>
        En effet,<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;  Le soussigné détient  <b> " .$toto[0]->nbr_share . "  </b>    <b></b>  parts dans la société pour un montant
         total investi de <b>  " . $toto[0]->montant_investit . " </b> FCFA.
     
         <br>En signant le présent contrat de souscription, le soussigné reconnait que
      la société se fonde sur l’exactitude et l’intégrité du respect de ses 
     obligations  prévues par les lois sur les titres applicables en la matière. <br><br>
     Le soussigné reconnait et atteste par ailleurs qu’il a lu le livre projet, 
     la politique d’achat et détention des parts, et ainsi que tout document ou
      information en complémentaire.  <br> ");
      $mpdf->WriteHTML('');
      $mpdf->WriteHTML(" <div class='row'> <div class='col'>  <h1><span style='text-decoration: underline;'> L'investisseur </span>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style='text-decoration: underline;'>   L'entreprise </span></h1>   </div> <div class='col'>   <h1> </h1> </div>   </div>
        
        ");

      $mpdf->WriteHTML(" <div class='row ' style='text-align:right;margin-right:50px'>   <img src='frontend/images/logo.jpg'  style='height:150px;width:190px'></div> ");


      $mpdf->Output();
   }


}
