<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{--bootsratp css/js cdn --}}

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
       {{-- css --}}
       <link rel="stylesheet" href="/css/style.css">
@yield('title')
</head>
<body>

    <div class="container">

 <nav class="navbar navbar-expand-lg ml-10 mr-10 ">
    <a class="navbar-brand ml-5">Brand</a>
     <button class="navbar-toggler"  type="button" data-bs-target="#my-nav" data-bs-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon" >
             <i class="fa fa-bars" style="color:#846d63; font-size:25px;"></i>

         </span>
     </button>

     <div id="my-nav" class="collapse navbar-collapse justify-content-end">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active ">
                 <a class="nav-link" href="/">Home </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link " href="{{route('work.index')}}" >Work</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link " href="{{route('about')}}" >About</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link " href="{{route('contact')}}" >contact</a>
             </li>
         </ul>
     </div>
 </nav>
</div>
@yield('content')

</body>
</html>
