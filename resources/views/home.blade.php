<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- BS JavaScript -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.js"></script>
        <!--=============== SWIPER CSS ===============-->
        <link href="{{ asset('swiper-bundle.min.css') }}" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link href="{{ asset('styles.css') }}" rel="stylesheet">

        <title>HOME</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="{{asset('logo.png') }}" alt="" class="nav__logo-img">
                    HORROR STORIES
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Candy</a>
                        </li>

                        <li class="nav__item">
                            <a href="#new" class="nav__link">New</a>
                        </li>
                        <div class="contain">

                            <button class="click">Request token</button>

                            <div class="list">

                                <form id="login-form" class="form" action="token" method="POST">
                                    @csrf
                                <button class="links">Add</button>
                                </form>
                                <form id="login-form" class="form" action="token2" method="POST">
                                    @csrf
                                <button class="links">Update </button>
                                </form>
                                <form id="login-form" class="form" action="token3" method="POST">
                                    @csrf
                                <button class="links">Delete</button>
                                </form>

                                <form id="login-form" class="form" action="tokeningresado" method="POST">
                                    @csrf

                                    <h3 class="text-center text-white "></h3>
                                        <div class="form-group">
                                            <input type="text" id="pnombre" class="form-control form-control-lg btn btn-primary" placeholder="place your token" style="background-color:transparent; text-transform: lowercase;
                                            " name="token" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-dark text-primary btn-md" style="margin-left:12%; font-weight: 900;color-text:rgb(22, 20, 20)">ACCEPT TOKEN</button>
                                        </div>
                                        </form>
                                        <p class="text-white font-weight-bold">
                                            your token will be sent to your email when it is authorized or when you log in again if it was already authorized it will appear in an alert
                                        </p>
                            </div>

                            </div>

                        </div>

                        <script>

                            let click = document.querySelector('.click');

                            let list = document.querySelector('.list');

                            click.addEventListener("click",()=>{

                                list.classList.toggle('newlist');

                            });

                        </script>

                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <form action="logout" method="POST">
                        @csrf
                        <button type="submit" class=" button button--ghost btn btn--primary">Logout</button>
                    </form>


                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="{{asset('nav-img.png')}}" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>
<!-- Button trigger modal -->

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="{{asset('home1-img.png')}}" alt="" class="home__img">
                                    <div class="home__indicator"></div>

                                    <div class="home__details-img">
                                        <h4 class="home__details-title">The Labu “Reiza”</h4>
                                        <span class="home__details-subtitle">The Living Pumpkin</span>
                                    </div>
                                </div>

                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 Top Scariest Ghost</h3>
                                    <h1 class="home__title">UOOOO <br> TRICK OR <br> TREAT!!</h1>
                                    <p class="home__description">Hi, I'm Reiza, people call me "El Labu". I am currently trying to learn
                                        something new, building my own bike with parts made only in Malaysia.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Book Now</a>
                                        <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 2 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="{{asset('home2-img.png')}}" alt="" class="home__img">
                                    <div class="home__indicator"></div>

                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Adino & Grahami</h4>
                                        <span class="home__details-subtitle">No words can describe them</span>
                                    </div>
                                </div>

                                <div class="home__data">
                                    <h3 class="home__subtitle">#2 top Best duo</h3>
                                    <h1 class="home__title">BRING BACK <br> MY COTTON <br> CANDY</h1>
                                    <p class="home__description">Adino steals cotton candy from his brother and eats them all in one bite,
                                        a hungry beast. Grahami can no longer contain his anger towards Adino.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Book Now</a>
                                        <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 3 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="{{asset('home3-img.png')}}" alt="" class="home__img">
                                    <div class="home__indicator"></div>

                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Captain Sem</h4>
                                        <span class="home__details-subtitle">Veteran Spooky Ghost</span>
                                    </div>
                                </div>

                                <div class="home__data">
                                    <h3 class="home__subtitle">#3 Top Scariest  Ghost</h3>
                                    <h1 class="home__title">RESPAWN <br> THE SPOOKY <br> SKULL</h1>
                                    <p class="home__description">In search for cute little puppy, Captain Sem has come back from his tragic death.
                                        With his hogwarts certified power he promise to be a hero for all of ghostkind.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Book Now</a>
                                        <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

              <!-- Modal -->
              <div class="modal" tabindex="-1" role="dialog" id="mymodal">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Save changes</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <!--==================== CATEGORY ====================-->
            <section class="section category">
                <h2 class="section__title">Favorite Scare <br> Category</h2>

                <div class="category__container container grid">
                    <div class="category__data">
                        <img src="{{asset('category1-img.png')}}" alt="" class="category__img">
                        <h3 class="category__title">Ghosts</h3>
                        <p class="category__description">Choose the ghosts, the scariest there are.</p>
                    </div>

                    <div class="category__data">
                        <img src="{{asset('category2-img.png')}}" alt="" class="category__img">
                        <h3 class="category__title">Pumpkins</h3>
                        <p class="category__description">You look at the scariest pumpkins there is.</p>
                    </div>

                    <div class="category__data">
                        <img src="{{asset('category3-img.png')}}" alt="" class="category__img">
                        <h3 class="category__title">Witch Hat</h3>
                        <p class="category__description">Pick the most stylish witch hats out there.</p>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">About Halloween <br> Night</h2>
                        <p class="about__description">Night of all the saints, or all the dead, is celebrated on October 31 and it is a
                            very fun international celebration, this celebration comes from ancient origins, and is already
                            celebrated by everyone.
                        </p>
                        <a href="#" class="button">Know more</a>
                    </div>

                    <img src="{{asset('about-img.png')}}" alt="" class="about__img">
                </div>
            </section>

            <!--==================== TRICK OR TREAT ====================-->
            <section class="section trick" id="trick">
                <h2 class="section__title">MYS BOOKS</h2>

                <div class="trick__container container grid">
                    @if($books)
                        @foreach($books as $bo)
                        <div class="trick__content">
                            <img src="{{asset('trick-treat1-img.png')}}" alt="" class="trick__img">
                            <h3 class="trick__title">{{$bo->title}}</h3>
                            <span class="trick__subtitle">{{$bo->description}}</span>
                            <span class="trick__price"></span>
                            <form action="showbook" class="form" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$bo->id}}">
                            <button class="button trick__button">
                                <i class="ri-article-line"></i>
                            </button>
                            </form>
                        </div>
                        @endforeach
                    @endif
                </div>
            </section>

            <!--==================== DISCOUNT ====================-->
            <section class="section discount">
                <div class="discount__container container grid">
                    <div class="discount__data">
                        <h2 class="discount__title">50% Discount <br> On New Products</h2>
                        <a href="#" class="button">Go to new</a>
                    </div>

                    <img src="{{asset('discount-img.png')}}" alt="" class="discount__img">
                </div>
            </section>

            <!--==================== NEW ARRIVALS ====================-->
            <section class="section new" id="new">
                <h2 class="section__title">SHARED BOOKS</h2>

                <div class="new__container container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            @if($book)
                             @foreach($book as $bo)
                                <div class="new__content swiper-slide">
                                <div class="new__tag">New</div>
                                <img src="{{asset('new1-img.png')}}" alt="" class="new__img">
                                <h3 class="new__title">{{$bo->title}}</h3>
                                <span class="new__subtitle">{{$bo->description}}</span>


                                <form action="showbook" class="form" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$bo->id}}">
                                <button class="button new__button">
                                    <i class="ri-article-line"></i>
                                </button>
                                </form>
                            </div>
                              @endforeach
                             @endif
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== OUR NEWSLETTER ====================-->
            <section class="section newsletter">
                <div class="newsletter__container container">
                    <h2 class="section__title">Our Newsletter</h2>
                    <p class="newsletter__description">
                        Promotion new products and sales. Directly to your inbox
                    </p>

                    <form action="" class="newsletter__form">
                        <input type="text" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            Subscribe
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="{{asset('logo.png')}}" alt="" class="footer__logo-img">
                            Halloween
                        </a>

                        <p class="footer__description">Enjoy the scariest night <br> of your life.</p>

                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">About</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Our Services</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Discounts</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Shipping mode</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Our Company</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">About us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Our mision</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>

                <img src="{{asset('footer1-img.png')}}" alt="" class="footer__img-one">
                <img src="{{asset('footer2-img.png')}}" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="{{asset('scrollreveal.min.js')}}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{asset('swiper-bundle.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('main.js')}}"></script>
    </body>
</html>
<style>
    .contain {

width:200px;

position: relative;

}

.click{

background-color: rgba(23, 25, 33, 0);

}

.click:hover {

background-color:rgba(23, 25, 33, 0);

}

.click,.links {

padding: 12px;

font-size: 1.2em;

font-family: futura Md BT;

border: none;

outline: none;

width:200px;

color:#fff;

transition: 0.3s;

}

.list {

position: absolute;

transform: scaleY(0);

transform-origin: top;

transition: 0.3s;

}

.newlist {

transform: scaleY(1);

}

.links {

background-color: rgba(23, 25, 33, 0);

}

.links:hover {

background-color: rgba(23, 25, 33, 0);

transform: scale(1.1);

}
    </style>


<script type="text/javascript">

$(document).ready(function(){

    $.ajax({
        url: "/modal",
        method: "GET",
        dataType:"json",
        success: function(response){
                if(response.user.token){
                    console.log(response.user.token);
                    alert("su token es :  " + response.user.token);
                }
                        }
                    });
                });


</script>
