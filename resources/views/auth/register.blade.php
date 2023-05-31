<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>PLA | Page Création de compte</title>
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
                                <h4 class="text-center mb-4">Création de votre compte</h4>
                                <form action="#" method="post" role="form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" class="form-control" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" placeholder="hello@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" value="Password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">S'identifier</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Vous avez un compte? <a class="text-primary" href="{{url('login')}}">Se
                                            connecter</a></p>
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
