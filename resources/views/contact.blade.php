@extends('layaout.header')
@section('title')
<title>Contact Us</title>
@endsection
@section('content')
<div class="section ">
    <div class="form ">
      <div class="contact-info">
        <h3 class="title">Get in touch</h3>
        <p class="text">
          We look forward to hearing from you.
        </p>

        <div class="info">
          <div class="information">
            <span class="icon fas fa-map-marker-alt"  > </span>
            <p class="m-0">51  Harrogate Road,RYLAND</p>
          </div>
          <div class="information">
          <span class="icon fas fa-envelope"> </span>
            <p class="m-0" >Company@email.com</p>
          </div>
          <div class="information">

                <span class ="icon"style="display: inline-block;">
               <i class=" fas fa-phone fa-flip-horizontal"></i></span>
            <p class="m-0">+999-999-999</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
