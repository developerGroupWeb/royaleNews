@extends('templates.template')

@section('content')

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

<div class="lectureBox-content">
  <div class="container-fluid" style="">
    <div class="row">
      <div class="btn btn-dark" style="position: fixed; height: 100%; width: 50px;"><i class="fa fa-chevron-left chevron-left" style="font-size: 30px; margin-top: 250px;" aria-hidden="true"></i>
      </div>

      <div class="ml-auto btn btn-dark" style="position: fixed; right: 0; height: 100%; width: 50px;"><i class="fa fa-chevron-right chevron-right" style="font-size: 30px; margin-top: 250px;" aria-hidden="true"></i>
      </div>
    </div>

    <div class="row" id="lectureBox-fistpage">
      <div class="mr-3">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid" style="height: 80vh; width: 350px;">
      </div>

      <div class="bg-white" style="width: 910px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid mr-0" style="height: 80vh; width: 450px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid ml-0" style="height: 80vh; width: 450px;">
      </div>
    </div>
  </div>
</div>

  <div class="col-12 fixed-bottom" style="background: #000;">
    <div class="row text-white py-2">
      <div class="btn btn-dark" style="position: fixed;"><i class="fa fa-caret-left caret-left" style="font-size: 22px;" aria-hidden="true"></i>
      </div>

      <div class="lectureBox-nav">
        <div class="nav">
          <div class="btn btn-dark ml-5 mr-3">LA UNE</div>
          <div class="btn btn-dark mr-3">Page 1</div>
          <div class="btn btn-dark mr-3">Page 2</div>
          <div class="btn btn-dark mr-3">Page 4</div>
          <div class="btn btn-dark mr-3">Page 5</div>
          <div class="btn btn-dark mr-3">Page 6</div>
          <div class="btn btn-dark mr-3">Page 7</div>
          <div class="btn btn-dark mr-3">Page 8</div>
          <div class="btn btn-dark mr-3">Page 9</div>
          <div class="btn btn-dark mr-3">Page 10</div>
          <div class="btn btn-dark mr-3">Page 1</div>
          <div class="btn btn-dark mr-3">Page 2</div>
          <div class="btn btn-dark mr-3">Page 4</div>
          <div class="btn btn-dark mr-3">Page 5</div>
          <div class="btn btn-dark mr-3">Page 6</div>
          <div class="btn btn-dark mr-3">Page 7</div>
          <div class="btn btn-dark mr-3">Page 8</div>
          <div class="btn btn-dark mr-3">Page 9</div>
          <div class="btn btn-dark mr-3">Page 10</div>
        </div>
      </div>

      <div class="ml-auto btn btn-dark" style="position: fixed; right: 0;"><i class="fa fa-caret-right caret-right" style="font-size: 22px;" aria-hidden="true"></i>
      </div>
    </div>
  </div>

@stop