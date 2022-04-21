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
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!--=============== SWIPER CSS ===============-->
 <link href="{{ asset('swiper-bundle.min.css') }}" rel="stylesheet">

 <!--=============== CSS ===============-->
 <link href="{{ asset('styles.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>
<title>VIEW BOOK</title>

@if($book)


    <div id="the-prophet">
        <div class="masthead">
            <h1 class="title">    {{$book->title}}            </h1>
        </div>
        <div class="everything">
            <div class="top">

                <div class="section section-1">
                    <div class="article article-1">
                        <h2 class="text-dark">    {{$book->description}}</h2>
                        <div class="img-wrap"><img class="article-1-img" src="http://unsplash.it/400" alt="    {{$book->description}}"/></div>
                        <p>{{$book->content}}</p>
                    </div>
            </div>


                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
@endif

<style>
 @import url(http://weloveiconfonts.com/api/?family=fontawesome);
@import url(https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400,400italic);
@import url(https://fonts.googleapis.com/css?family=Patua+One);
@import url(https://fonts.googleapis.com/css?family=PT+Serif);

/* -------------------- */
/* GENERAL */
/* -------------------- */
body {
	font-family: 'PT Serif';
	font-size: 16px;
	line-height: 26px;
}

h1 {
	font-family: 'IM Fell Great Primer';
}

p { text-align: justify; }

#the-prophet {
	width: 1000px; height: 100%;
	margin: 50px auto;
	padding: 50px;
	background-color: #ffffff;
	box-shadow: 0 0 8px 2px rgba(0,0,0,0.8);
	transition: all 1s;
}

.title {
	font-size: 60px;
	text-align: center;
	text-transform: uppercase;
    background-color: #070707;

}

.top {
	display: flex;
	flex-direction: row;
}

/* -------------------- */
/* SECTIONS */
/* -------------------- */

.section-1 {
	width: 750px;
}

.section-2 {
	width: 250px;
}

/* -------------------- */
/* ARTICLES */
/* -------------------- */

.article img {
	filter: grayscale(100%);
}

/* --- ARTICLE 1 --- */

.article-1 h2 {
	font-size: 42px;
	line-height: 58px;
	margin: 10px 0;
}

.article-1 h3 {
	font-size: 32px;
	line-height: 38px;
}

.quote {
	display: block;
	margin: 10px auto;

	font-family: 'IM Fell Great Primer';
	font-style: italic;
	font-weight: bold;
	font-size: 24px;
	text-align: center;
}

.img-wrap {
	float: right;
	width: 400px;
	margin: 10px;
	border-bottom: 3px solid #555;

}
.img-wrap p {
	max-width: 100%;
	margin: 0 20px 5px;
	font-family: 'IM Fell Great Primer';
	font-style: italic;
}

/* --- ARTICLE 2 --- */

.article-2 h3 {
	font-weight: bold;
	text-transform: uppercase;
	text-align: center;
	border-top: 2px solid;
	border-bottom: 2px solid;
}

/* --- ARTICLE 3 --- */

.article-3 {
	box-sizing: border-box;
	height: 250px;
	padding: 2em;
	font-size: .5em;
	line-height: 1.5em;

	border-left: 1px solid;
	border-right: 1px solid;
	cursor: zoom-in;
	box-shadow: 0 0 1px 1px rgba(0,0,0,0);

	transition: all 500ms ease;

	transform-origin: 50% 50%;
	transform: rotate(90deg) ;
}

.article-3:hover { box-shadow: 0 0 1px 1px rgba(0,0,0,0.5);}

.view-article-3 .article-3 { cursor: zoom-out; }

/* -------------------- */
/* ANIMATIONS */
/* -------------------- */

.view-article-3 {
	transform-origin: top 50%;
	transform:
		rotate(-90deg)
		scale(2)
		translateX(-25%)
		translateY(-25%);
}



 </style>
<script type="text/javascript">
// Get The Date
$(".article-3-link").click(function() {
	$("#the-prophet").toggleClass("view-article-3");
});

$(".article-1-img").each(function() {
	$(this).after('<p class="alt">' + $(this).attr('alt') + '</p>');
})
</script>
