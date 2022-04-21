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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>
    <title>AUTH</title>
    <style>

    </style>
</head>
<body>
    <section class="vh-100 gradient-custom">




        <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center col-auto">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      <div class="centerdiv">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>please proceed to your phone to give access
                            </p>
                            <hr>
                            <p class="mb-0"></p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      </section>
      <script src="{{ asset('js/app.js') }}"></script>
      <script>
          Echo.channel('testing')
              .listen('HelloEvent', (e) => {
                  console.log(e);
                  window.location.href = "http://192.168.56.1:8000/users";
                  msg(e);
              });
          function msg(message) {
              var node = document.createElement("li");
              var textnode = document.createTextNode(message);
              node.appendChild(textnode);
              document.getElementById("log").appendChild(node);
          }
      </script>
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
