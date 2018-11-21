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

          <div class="col-md-4 bg-light">
            <div class="row">
              <div class="py-3">
                <h3 class="ml-3 mb-3">Les dernières vidéos</h3>
                <div class="list-unstyled">
                  <div class="media  ml-1 my-2 col-12">
                    <div class="row border-bottom">
                      <div class="col-md-5 col-6">
                        <div class="row">
                          <img class="mr-2  w-100" src="{{asset('images/5889.jpg')}}" alt="Generic placeholder image" >
                        </div>
                      </div>

                      <div class="col-md-7 col-6">
                        <div class="row">
                          <div class="media-body">
                            <h5 class="">List-based media object</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <li class="media my-4">
                    <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </li>
                  <li class="media">
                    <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </li>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
@stop