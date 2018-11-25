@extends('templates.template')

@section('content')
    
    <div class="content-media-tv bg-dark pt-4">
      <nav class="navbar navbar-expand navbar-light">
        <div class="title-mo">
            <a href="">
                <h5 class="text-white"><strong>LA ROYALE <span class="pt-0 px-2 pb-1 rounded title-label">TV</span></strong></h5>
            </a>
        </div>

        <div class="collapse navbar-collapse">
          <div class="ml-auto d-none d-md-inline-block">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" style="width: 500px;" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" style="margin-left: -52px;" type="submit"><i class="fa fa-search" style="font-size: 20px;" aria-hidden="true"></i></button>
            </form>
          </div>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white d-block d-md-none" href="#"><i class="fa fa-search" style="font-size: 20px;" aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('root_path')}}"><i class="fa fa-home" style="font-size: 20px;" aria-hidden="true"></i> <span class="d-none d-lg-inline-block">laroyalenews.com</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fa fa-user" style="font-size: 20px;" aria-hidden="true"></i> <span class="d-none d-lg-inline-block">Connexion</span></a>
            </li>
          </ul>
        </div>
      </nav>

      
      <div class="container-fluid">
        <hr class="row bg-light">

        <div class="row px-3">
          <div class="col-md-8">
            <div class="row">
              <div class="card">
                <video width="" height="" controls class="w-100">
                  <source src="{{asset('videos/FallyIpupa.mp4')}}" type="video/mp4">
                </video>

                <div class="card-body">
                  <h5 class="">List-based media object
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mt-4 mt-md-0" style="background-color: #000;">
            <div class="row">
              <h4 class="pl-3 py-3 text-white w-100" style="z-index: 10;">Les dernières vidéos</h4>
            </div>

            <div style="overflow-y: auto; overflow-x: hidden; height: 400px;">
              <div class="row mt-2">
                <div class="col-md-5 col-5">
                  <div class="row mr-1">
                      <video width="" height="" controls class="">
                        <source src="{{asset('videos/FallyIpupa.mp4')}}" type="video/mp4">
                      </video>
                  </div>
                </div>

                <div class="col-md-7 col-7">
                  <div class="row">
                    <div class="media-body">
                      <h5 class="text-white">List-based media object</h5>
                    </div>
                  </div>
                </div>
              </div>

              <h5 class="text-white">List-based media object
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.List-based media object
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5><h5 class="">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="">List-based media object
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5>
                        <h5 class="">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="">List-based media object
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </h5>
            </div>
          </div>
        </div>

        <div class="col-12 mt-5">
          <h2 class="row text-white">A voir aussi</h2>
          <hr class="row bg-light mt-1" style="height: 2px;">

          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
              <div class="card">
                <video width="" height="" controls class="w-100" style="">
                  <source src="{{asset('videos/FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              
                <div class="card-body">
                  <h5 class="">Title</h5>
                </div>
                <div class="card-footer">
                  <small class="">il y a <span>...</span></small>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card">
                <video width="" height="" controls autoplay class="">
                  <source src="{{asset('videos.FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              </div>
              <div class="card-body">
                <h5>Title</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card">
                <video width="" height="" controls autoplay class="">
                  <source src="{{asset('videos.FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              </div>
              <div class="card-body">
                <h5>Title</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card">
                <video width="" height="" controls autoplay class="">
                  <source src="{{asset('videos.FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              </div>
              <div class="card-body">
                <h5>Title</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card">
                <video width="" height="" controls autoplay class="">
                  <source src="{{asset('videos.FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              </div>
              <div class="card-body">
                <h5>Title</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card">
                <video width="" height="" controls autoplay class="">
                  <source src="{{asset('videos.FallyIpupa.mp4')}}" type="video/mp4">
                </video>
              </div>
              <div class="card-body">
                <h5>Title</h5>
              </div>
            </div>

          </div>
        </div>
    </div>
@stop