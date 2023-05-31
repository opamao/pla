<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>PLA | Page Login</title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <img src="{{asset('images/logo-full-black.png')}}" alt="">
                                </div>
                                <h4 class="text-center mb-4">Connexion a votre compte</h4>
                                <form action="#" method="post" role="form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>E-mail / Téléphone</strong></label>
                                        <input name="login" type="text" class="form-control"
                                               placeholder="Ex: devchap@com ou 0707070707">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Mot de passe</strong></label>
                                        <input name="password" type="password" class="form-control"
                                               placeholder="*****************">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">

                                        <div class="form-group">
                                            <a href="{{url('forgot')}}">Mot de passe oublié?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Je me connecte</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Vous n'avez pas de compte? <a class="text-primary" href="{{url('register')}}">S'identifier</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor/global/global.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('js/deznav-init.js')}}" type="text/javascript"></script>
<script src="{{asset('js/demo.js')}}" type="text/javascript"></script>
</body>

</html>
