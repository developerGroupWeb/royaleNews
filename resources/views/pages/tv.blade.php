@extends('templates.template')

@section('content')
    
    <div class="content-media-tv bg-dark pt-4">
      <nav class="navbar navbar-expand navbar-light">
        <div class="title-mo">
            <a href="{{route('root_path')}}">
                <h5 class="text-white"><strong>LA ROYALE <span class="pt-0 px-2 pb-1 rounded title-label">TV</span></strong></h5>
            </a>
        </div>

        <div class="collapse navbar-collapse">
          <div class="ml-auto d-none d-md-inline-block">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Chercher</button>
            </form>
          </div>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link text-white d-block d-md-none" href="#"><i class="fa fa-search" style="font-size: 23px;" aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fa fa-home" style="font-size: 23px;" aria-hidden="true"></i> <span class="d-none d-md-inline-block">laroyalenews.com</span></a>
            </li>
          </ul>
        </div>
      </nav>

      
      <div class="container-fluid">
        <hr class="row bg-light">

        <div class="row px-3">
          <div class="col-md-8">
            <div class="row">
              <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="mt-0 mb-1">List-based media object
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5>
            </div>
          </div>

          <div class="col-md-4 bg-light" style="position: fixed; overflow: auto; height: 700px; right: 20px;">
            <div class="row">
              <h3 class="ml-3 my-3">Les dernières vidéos</h3>
            </div>

            <div class="media row my-2 px-2">
              <div class="col-md-5 col-5">
                <div class="row">
                    <img class="img-fluid mr-2" src="{{asset('images/a0fca1e_h67KC3d-oLZ_V0WRvD-Pkpoo.jpg')}}" alt="Generic placeholder image" >
                </div>
              </div>

              <div class="col-md-7 col-7">
                <div class="row">
                  <div class="media-body">
                    <h5 class="">List-based media object</h5>
                  </div>
                </div>
              </div>
            </div>

            <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="mt-0 mb-1">List-based media object
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5><h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="mt-0 mb-1">List-based media object
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5>
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<h5 class="mt-0 mb-1">List-based media object
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</h5>
          </div>
        </div>
      </div>
    </div>
@stop