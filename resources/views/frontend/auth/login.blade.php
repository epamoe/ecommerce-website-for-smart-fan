<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART FAN</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/auth/css/iofrm-theme9.css')}}">
</head>
<body>

@include('flashMessage')
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Page de connexion</h3>
                    <p>Uniquement pour les investisseurs du projet SMART FAN TECHNOLOGY</p>
                    <img src="{{asset('frontend/auth/images/graphic5.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="{{asset('frontend/auth/images/logo-light.svg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Connectez-vous</h3>
                        <p>Veuillez utiliser votre adresse mail et mot de passe de la plateforme tagusinvestment.com</p>
                        <form   method="post" action = "{{route('login')}}" >

                        @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail " required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>

                            <div class="form-button full-width">
                                <button  type="submit" class="ibtn btn-forget">Valider</button>
                                <a  type="button"   href="{{route('vitrine')}}" class="ibtn btn-info mt-2   "   style="text-align : center; background-color : red; color: white" >Retour</a>

                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="{{asset('frontend/auth/images/logo-light.svg')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c05030a1e012c05030a1e011809011c000d1809420503">[email&#160;protected]</a></p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('frontend/auth/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/auth/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/auth/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/auth/js/main.js')}}"></script>
</body>
</html>