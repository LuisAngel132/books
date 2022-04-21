
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMIN</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="font-awesome.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="{{ asset('swiper-bundle.min.css') }}" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
	<script src="main.js"></script>
</head>
<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <form action="logout" method="POST">
    @csrf
    <p class= "text-right">
    <button type="submit" class=" button button--ghost btn btn--primary">Logout</button>
    </p>
</form>


        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

	<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">ADD</span></a></li>
			<li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">UPDATE</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">DELETE</span></a></li>
            <li><a href="#tab4"><span class="fa fa-bookmark"></span><span class="tab-text">ROL 1</span></a></li>
			<li><a href="#tab5"><span class="fa fa-home"></span><span class="tab-text">ROL 2</span></a></li>
        </ul>

		<div class="secciones">
			<article id="tab1">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($userAdd as $useadd)
                        <tr>
                        <th scope="row">{{$useadd->id}}</th>
                        <td>{{$useadd->email}}</td>
                        <form id="login-form" class="form" action="createtoken" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$useadd->id}}">

                        <td><button type="submit" name="submit" class="btn text-dark btn-md btn-white" style="font-weight: 900;color-text:rgb(15, 14, 14)">ACCEPT</button>
                        </td>
                        </form>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>

			</article>
			<article id="tab2">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($userUpdate)

                                @foreach ($userUpdate as $useup)
                                <tr>
                                <th scope="row">{{$useup->id}}</th>
                                <td>{{$useup->email}}</td>
                                <form id="login-form" class="form" action="createtoken" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$useup->id}}">

                                <td><button type="submit" name="submit" class="btn text-dark btn-md btn-white" style="font-weight: 900;color-text:rgb(15, 14, 14)">ACCEPT</button>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
			</article>
			<article id="tab3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($userDelete)
                                @foreach ($userDelete as $usedel)
                            <tr>
                                <th scope="row">{{$usedel->id}}</th>
                                <td>{{$usedel->email}}</td>
                                <form id="login-form" class="form" action="createtoken" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$usedel->id}}">

                                <td><button type="submit" name="submit" class="btn text-dark btn-md btn-white" style="font-weight: 900;color-text:rgb(15, 14, 14)">ACCEPT</button>
                                </td>
                                </form>
                            </tr>
                            @endforeach
                      @endif
                    </tbody>
                  </table>
			</article>
            <article id="tab4">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($usermin)
                                @foreach ($usermin as $us)
                            <tr>
                                <th scope="row">{{$us->id}}</th>
                                <td>{{$us->email}}</td>
                                <form id="login-form" class="form" action="uprange" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$us->id}}">

                                <td><button type="submit" name="submit" class="btn text-dark btn-md btn-white" style="font-weight: 900;color-text:rgb(15, 14, 14)">rank up
                                </button>
                                </td>
                                </form>
                            </tr>
                            @endforeach
                      @endif
                    </tbody>
                  </table>

            </article>
			<article id="tab5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($usermin)
                                @foreach ($usermax as $us)
                            <tr>
                                <th scope="row">{{$us->id}}</th>
                                <td>{{$us->email}}</td>
                                <form id="login-form" class="form" action="downrange" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$us->id}}">

                                <td><button type="submit" name="submit" class="btn text-dark btn-md btn-white" style="font-weight: 900;color-text:rgb(15, 14, 14)">downgrade
                                </button>
                                </td>
                                </form>
                            </tr>
                            @endforeach
                      @endif
                    </tbody>
                  </table>
            </article>
		</div>
	</div>
</body>
</html>

<style>



.wrap{
	width: 100%;
	max-width: 90%;
	margin: 30px auto;
}

ul.tabs{
	width: 100%;
	background: #8a1437;
	list-style: none;
	display: flex;
}

ul.tabs li{
	width: 18%;
}

ul.tabs li a{
	color: rgb(11, 10, 10);
	text-decoration: none;
	font-size: 16px;
	text-align: center;

	display: block;
	padding: 20px 0px;
}

.active{
	background: #a61846;
}

ul.tabs li a .tab-text{
	margin-left: 8px;
}

*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}



.wrap{
	width: 800px;
	max-width: 90%;
	margin: 30px auto;
}

ul.tabs{
	width: 100%;
	background: #8a1437;
	list-style: none;
	display: flex;
}

ul.tabs li{
	width: 18%;
}

ul.tabs li a{
	color: #fff;
	text-decoration: none;
	font-size: 16px;
	text-align: center;

	display: block;
	padding: 20px 0px;
}

.active{
	background: #a61846;
}

ul.tabs li a .tab-text{
	margin-left: 8px;
}

.secciones{
	width: 100%;
	background: rgb(8, 7, 7);
}

.secciones article{
	padding: 30px;
}

.secciones article p{
	text-align: justify;
}


@media screen and (max-width: 700px){
	ul.tabs li{
		width: none;
		flex-basis: 0;
		flex-grow: 1;
	}
}

@media screen and (max-width: 450px){
	ul.tabs li a{
		padding: 15px 0px;
	}

	ul.tabs li a .tab-text{
		display: none;
	}

	.secciones article{
		padding: 20px;
	}
}
</style>

<script type="text/javascript">
$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones article').hide();
	$('.secciones article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});
</script>
