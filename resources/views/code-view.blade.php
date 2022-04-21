<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/login.css') }}">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
 <!--=============== SWIPER CSS ===============-->
 <link href="{{ asset('swiper-bundle.min.css') }}" rel="stylesheet">

 <!--=============== CSS ===============-->
 <link href="{{ asset('styles.css') }}" rel="stylesheet">
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>
    <title>Code</title>
    <style>
    </style>
</head>
<body>
    <section class="vh-100 gradient-custom">


        <div id="login">
        <h3 class="text-center text-white pt-5">SE HA ENVIADO UN CODIGO A TU CORREO </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login-with-code" method="POST">
                        @csrf
                        <input type="hidden" name="email" value="{{$email}}">


                            <div class="form-group">
                                <br>
                                <label for="username" class=" text-white">ingresa el codigo que se envio a tu correo:</label><br>

                                <input type="number" id="pnombre" class="form-control form-control-lg" name="code" required/>
                            </div>
                            <span style="color:red;">@error('code')
                        {{$message}}
                        @enderror
                    </span><br>
                    <button type="submit" class="btn  text-white btn-md">Confirmar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
      </section>

<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
</body>
</html>
<style>
    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    body{
      margin: 0;
      padding: 0;
      font-family: Arial;
      font-size: 12px;
      background: url("https://images6.alphacoders.com/552/thumb-1920-552086.jpg") repeat-y;

    }

    .body{
      position: absolute;
      top: -20px;
      left: -20px;
      right: -40px;
      bottom: -40px;
      width: auto;
      height: auto;
      background-size: cover;
      -webkit-filter: blur(5px);
      z-index: 0;
    }
.centerdiv{
    display:flex;
    justify-content: center;
    flex-direction: column;
    height: 700px;
}
    .grad{
      position: absolute;
      top: -20px;
      left: -20px;
      right: -40px;
      bottom: -40px;
      width: auto;
      height: auto;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
      z-index: 1;
      opacity: 0.7;
    }

    .header{
      position: absolute;
      top: calc(50% - 35px);
      left: calc(50% - 255px);
      z-index: 2;
    }

    .header div{
      float: left;
      color: transparent;
      font-family: 'Exo', sans-serif;
      font-size: 35px;
      font-weight: 200;
    }

    .header div span{
      color: #5379fa ;
    }

    .login{
      position: absolute;
      top: calc(50% - 75px);
      left: calc(50% - 50px);
      height: 150px;
      width: 350px;
      padding: 10px;
      z-index: 2;
    }

    .login input[type=text]{
      width: 250px;
      height: 30px;
      background: transparent;
      border: 1px solid rgba(0, 0, 0, 0.6);
      border-radius: 2px;
      color: transparent;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 4px;
    }
    #pnombre::placeholder {
            color: rgb(249, 248, 246);
          }
    .login input[type=password]{
      width: 250px;
      height: 30px;
      background: transparent;
      border: 1px solid rgba(255,255,255,0.6);
      border-radius: 2px;
      color: transparent;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 4px;
      margin-top: 10px;
    }

    .login input[type=button]{
      width: 260px;
      height: 35px;
      background: #fff;
      border: 1px solid #fff;
      cursor: pointer;
      border-radius: 2px;
      color: #a18d6c;
      font-family: 'Exo', sans-serif;
      font-size: 16px;
      font-weight: 400;
      padding: 6px;
      margin-top: 10px;
    }

    .login input[type=button]:hover{
      opacity: 0.8;
    }

    .login input[type=button]:active{
      opacity: 0.6;
    }

    .login input[type=text]:focus{
      outline: none;
      border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=password]:focus{
      outline: none;
      border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=button]:focus{
      outline: none;
    }

    ::-webkit-input-placeholder{
       color: rgb(1, 0, 0);
    }

    ::-moz-input-placeholder{
       color: rgb(12, 10, 10);
    }
    </style>
