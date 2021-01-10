@extends('layaout.header')
@section('title')

      <title>{{$work->title}}</title>
@endsection
@section('content')

<div class="position-relative">



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
 @if(empty(json_decode($work->images)))

        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       @else

       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

         @for ($i = 1; $i <= count(json_decode($work->images)); $i++)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
         @endfor
        @endif
    </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('storage/'.$work->image)}}" class="img-fluid" >
    </div>
    @if(empty(json_decode($work->images)))
    <div class="carousel-item active">
      <img src="{{asset('storage/'.$work->image)}}" class="img-fluid" >
    </div>
    @else
    <div class="carousel-item active">
      <img src="{{asset('storage/'.$work->image)}}" class="img-fluid" >
    </div>
       @foreach( json_decode($work->images,true) as $image)
    <div class="carousel-item">
        <img  class="img-fluid" src="{{asset('storage/'.$image)}}">
    </div>
    @endforeach
    @endif


  </div>
  <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="text-block-right">
  {{$work->location}}
</div>
<button onclick="on()" class="btn-inf rounded-circle">Info</button>
<div id="overlay" onclick="off()">
  <div id="text" >
    {{$work->description}}</div>
</div>

</div>


<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>

@endsection
