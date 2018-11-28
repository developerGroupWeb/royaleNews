@extends('templates.template')

@section('content')

<div class="" style="height: 100vh;">
  <nav class="navbar navbar-expand navbar-light fixed-top py-1 mb-3" style="background-color: rgb(0, 0, 0);">

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav text-white">
        <li class="nav-item mr-3">
          <span><i class="fa fa-bars" style="font-size: 25px;" aria-hidden="true"></i></span>
        </li>
      </ul>

      <div class="title-mo navbar-nav ml-auto">
        <a href="" class="mr-2">
            <h5 class="text-white"><strong><span class="d-none d-md-inline-block">LA ROYALE News</span> <span class="pt-0 px-2 pb-1 rounded title-label">RN</span></strong></h5>
        </a>
        <span style="border: 1px solid #eee;"></span>
        <div class="dropdown ml-2">
          <div class="dropdown-toggle text-white" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <span class="d-none d-md-inline-block">28 nov. 2018</span>
          </div>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
      

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link text-white"><i class="fa fa-download" style="font-size: 25px;" aria-hidden="true"></i> <span class="d-none d-md-inline-block">PDF</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa fa-user-circle" style="font-size: 25px;" aria-hidden="true"></i> <span class="d-none d-lg-inline-block font-weight-bold">Se connecter</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" style="height: 100vh; padding-top: 80px; padding-bottom: 80px; background: #589;">
    <div class="row">
      <img src="{{asset('images/laune.jpg')}}" class="img-fluid" style="height: 500px;">
    </div>
  </div>

  <div class="bg-dark col-12 fixed-bottom">
    <div class="row text-white py-2 mx-3">
      <div><i class="fa fa-caret-left" style="font-size: 22px;" aria-hidden="true"></i></div>
      <div>
        
      </div>
      <div class="ml-auto"><i class="fa fa-caret-right" style="font-size: 22px;" aria-hidden="true"></i></div>
    </div>
  </div>
</div>

@stop