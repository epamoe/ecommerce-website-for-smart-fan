@extends('backend.components.layout')



<script src="{{asset ('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckeditor/samples/js/sample.js')}}"></script>
<link rel="stylesheet" href="{{asset('ckeditor/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
<meta name="viewport" content="width=device-width,initial-scale=1">  
@section('main')

<div class="container-fluid">
    
    <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
        <h2 class="font-w600 title mb-2 mr-auto ">Utilisateurs</h2>
        <!-- <div class="weather-btn mb-2">
            <span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
            <select class="form-control style-1 default-select  mr-3 ">
                <option>Medan, IDN</option>
                <option>Jakarta, IDN</option>
                <option>Surabaya, IDN</option>
            </select>
        </div> -->
        <!-- <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-3"></i>STATISTIQUES</a> -->
    </div>
    


   
    <div class="row">
    <div class="col-xl-12 col-xx-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Envoyez des mails</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- <h6 style="text-align: center;color:#eb8153;">Top 10</h6> -->
                           
                                <form class="comment-form" method="post" action="{{route('sendmail')}}">
                                    @csrf
																<div class="row"> 
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label class="text-black font-w600">Utilisateurs<span class="required">*</span></label>


                                                                            <select name="pays" class="form-control" id="">
                                                                            <option value="">Tous les utilisateurs</option>
                                                                            @foreach($pays as $pay)
                                                                            @if($pay->country!=null)
                                                                            <option value="{{$pay->country}}">{{$pay->country}}({{$pay->nbr }} utilisateurs) </option>
                                                                            @endif
                                                                            @endforeach
                                                                            </select>
																			<!-- <input type="text" value="" class="form-control" value="Author" name="Author" placeholder="Author"> -->
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label class="text-black font-w600">Objet <span class="required">*</span></label>
																			<input type="text"  name="objet" value="" class="form-control" value="Email" placeholder="Objet" name="objet">
																		</div>
																	</div>
                                                                   
																	
                                                                    <div class="col-lg-12">
																		<div class="form-group">
																			<label class="text-black font-w600">Message<span class="required">*</span></label>

                                                                            <textarea  id="editor" name="message"  cols="30" type="text"  class="form-control" rows="10"></textarea>
																			
																		</div>
																	</div>
																	
																	
																	<div class="col-lg-12">
																		<div class="form-group mb-3">
																			<input type="submit" value="Envoyer" class="submit btn btn-primary" name="submit">
																		</div>
																	</div>
                                                                   
																</div>
															</form>
                                
                            </div>
                        </div>
                    </div>
                </div>
      
    </div>



    <div class="row">
    <div class="col-xl-12 col-xx-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mes mails</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- <h6 style="text-align: center;color:#eb8153;">Top 10</h6> -->
                           
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Pays</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php   $i=1 ?>
                                        @foreach($emails as $email)
                                        <tr>
                                            <td>
                                            {{$email->id}}
                                           
                                            </td>
                                            <td>
                                           {{ $email->titre}}
                                            </td>
                                            <td>
                                           <?php  echo $email->message ?>
                                            </td>
                                            <td>
                                                @if($email->pays == null)
                                                Tous les utilisateurs
                                                @else
                                            {{$email->pays}}
                                            @endif
                                            </td>
                                            <td> 
                                                 <button data-toggle="modal" data-target="#sms_{{$email->id}}" class = "btn btn-danger">Voir</button> 
                                                
                                                <!-- Button trigger modal -->



                                                
                                                
                                                
                                                
                                                
                                                </td>
                                           
                                        </tr>





                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
        
    </div>
</div>




@foreach($emails as $email)
    <!-- Modal -->

    
<div class="modal fade" id="sms_{{$email->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $email->titre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php  echo $email->message ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>  
@endforeach



<script>
    initSample();
</script>

@endsection