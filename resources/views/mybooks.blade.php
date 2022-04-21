<!doctype html>
<link href="{{ asset('swiper-bundle.min.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

 <!--=============== CSS ===============-->
 <link href="{{ asset('styles.css') }}" rel="stylesheet">
<title>DELETE BOOKS</title>
<style>
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
  }
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 100%;
}
.text {
  padding: 0 20px 20px;
}
.text > button {
  background: gray;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  }
body{
    margin-top:3%;
    margin-left:4%;

}
</style>
<h1 style="text-align:center;"> MYS BOOKS</h1>
<br>
<main class="grid">

 @if($books)
    @foreach($books as $book)
    <article>
        <img src="/pix/samples/16l.jpg" alt="Sample photo">
        <div class="text">
        <h3>{{$book->title}}</h3>
        <p>{{$book->description}}</p>
        <form action="deletebook" class="form" method="POST">
            @csrf
            {{ method_field('DELETE') }}

            <input type="hidden" name="id" value="{{$book->id}}">
        <button class="btn-danger btn btn-md btn-block ">Delete</button>
        </form>
        </div>
    </article>
    @endforeach
  @endif
</main>
