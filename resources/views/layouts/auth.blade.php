<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PES Alumni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/backend/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/backend/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/backend/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style>
            .note
            {
                text-align: center;
                height: 80px;
                background: #0062cc;
                color: #fff;    line-height: 80px;
            }
            .form-content
            {
                padding: 5%;
                border: 1px solid #ced4da;
                margin-bottom: 2%;
            }
            .form-control{
                border-radius: 0;
                height:40px;
            }
            .btn-submit-form
            {
                border:none;
                width: 50%;
                cursor: pointer;
                background: #0062cc;
                color: #fff;
                padding:10px;
            }
            .register-form{
                padding:40px 20px;
            }
            .login-form{
                padding:50px 20px;
            }
            .button-container{
                text-align: center;
            }
            .form-content-info a{
                text-decoration: none;
                color:#32363a;
                font-size: 11px;
            }

            label{
               color:#32363a;
                font-size: 15px; 
            }
        </style>
  </head>
  <body>
    @yield('content')
  </body>
</html>