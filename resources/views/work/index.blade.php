@extends('layaout.header')
@section('title')
    <title>Our Work</title>
@endsection
@section('content')
<div class="container-fluid mt-3">


        <div class="row">
            @foreach($works as $work)
            <div class="col-lg-4 col-md-6 col-sm-12 container position-relative" style=" float: left; padding: 5px 5px;">
                <a href="{{route('work.show',$work->title)}}">
                     <img  src="{{asset('storage/'.$work->image)}}" style="width:100%" height="300">
                 </a>
                <p class="overlay">{{$work->title}}</p>

            </div>
            @endforeach
        </div>

    </div>
@endsection
