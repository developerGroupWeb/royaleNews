@extends('templates.template')

@section('content')
    @include('templates.nav')
<div id="main">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 order-last order-md-first">

                <div class="row d-none d-md-block">
                    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @foreach($unes as $une)
                                <a href="{{route('rubric.show', [strtolower($une->rubric), $formatData($une->start_at), $une->id, $une->slug])}}">
                                    <span class="badge badge-primary">{{$une->rubric}}</span>
                                    <img class="d-block w-100 img-fluid" src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$une->pictures}}" alt="First slide">
                                    <div class="carousel-caption carousel-caption-bg">
                                        <h2 class="title">{{$une->title}}</h2>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @foreach($suites as $suite)
                            <div class="carousel-item">

                                <a href="{{route('rubric.show', [strtolower($suite->rubric), $formatData($suite->start_at), $suite->id, $suite->slug])}}">
                                    <span class="badge badge-primary">{{$suite->rubric}}</span>
                                    <img class="d-block w-100 img-fluid" src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$suite->pictures}}" alt="Second slide">
                                    <div class="carousel-caption carousel-caption-bg">
                                        <h2 class="title">{{$suite->title}}</h2>
                                    </div></a>

                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="d-block d-md-none row">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{asset('images/gvbuyb.jpg')}}" alt="Card image cap">
                            <span class="badge badge-primary">Politique</span>
                            <div class="w-100" style="position: absolute; bottom: 50px; background: rgb(0,0,0,0.6);">
                                <h5 class="p-3 text-white text-center">This is a wider card with supporting text below as a natural lead-in This is a wider card with supporting </h5>
                            </div>
                        </a>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="card-columns">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <span class="badge-small badge-primary font-weight-bold rounded px-1">Primary</span>
                                    <h5 class="card-title">This is a wider card with supporting text below as a natural lead-in</h5>
                                    <p class="card-text"></p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                <small class="text-muted">Politique</small>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="mt-2 mb-4 bg-rnews">
                        <h1>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="card-columns">
                        <div class="card">
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <span class="badge badge-primary">Chronique</span>
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                </div></a>

                            <div class="p-2" style="font-size: 13px;">
                                <p class="border-bottom pb-3 font-weight-bold"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <a href="#">his is a longer card with supporting text below as a natural</a></p>

                                <p class="text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> voir toutes les chroniques</strong></a></p>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <span class="badge badge-primary">Enquetes</span>
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                </div></a>

                            <div class="p-2" style="font-size: 13px;">
                                <p class="border-bottom font-weight-bold pb-3"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <a href="#">his is a longer card with supporting text below as a natural</a></p>

                                <p class="text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> voir toutes les enquetes</strong></a></p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header fixed font-weight-bold">
                                TOP INFOS
                            </div>

                            <ul class="list-group" style="overflow: auto; max-height: 400px;">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <span class="badge-small p-2 mb-1 rounded font-weight-bold text-white">1</span>
                                        <small >3 days ago</small>
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                    </div>
                                </li>

                                <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir tous</strong></small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-2 mb-4" style="background-color: #333; ">
                        <h1>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="card-columns">
                        <div class="card">
                            <a href=""><img class="img-fluid w-100" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <span class="badge badge-pill badge-primary">Sante</span>

                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                </div></a>

                            <div class="p-2" style="font-size: 13px;">
                                <p class="border-bottom font-weight-bold pb-3"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <a href="#">his is a longer card with supporting text below as a natural</a></p>

                                <p class="text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> voir tous les sante</strong></a></p>
                            </div>
                        </div>

                        <div class="card">
                            <a href=""><img class="img-fluid w-100" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <span class="badge badge-pill badge-primary">Sport</span>

                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                </div></a>

                            <div class="p-2" style="font-size: 13px;">
                                <p class="border-bottom font-weight-bold pb-3"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <a href="#">his is a longer card with supporting text below as a natural</a></p>

                                <p class="text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> voir tous les sport</strong></a></p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header fixed font-weight-bold">
                                LES PLUS LUS
                            </div>
                            <ul class="list-group list-group-flush" style="overflow: auto; max-height: 400px;">
                                <li class="list-group-item">
                                    <div class="w-100">
                                        <small class="text-muted">Politique</small>
                                        <a href=""> Cras justo odio Last updated 3 mins agoLast updated 3 mins agoLast updated 3 mins ago</a>
                                    </div>
                                </li>

                                <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir tous</strong></small></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row sections-titles">
                    <h3 style="border-top: 4px solid #00c6ff; padding: 10px;" class="w-100 d-block text-center">
                        <strong>IDEE - ANALYSE</strong>
                        <hr class="mb-0">
                    </h3>
                </div>

                <div class="row text-center opinion-items">

                    <div class="col-md col-sm-4">
                        <a href="#">
                            <p style="color: #999999;"><strong>OPINION</strong></p>
                            <img src="https://placehold.it/80x80?text=IMAGE" class="img-fluid rounded-circle img-thumbnail" style="width:100%" alt="Image">
                            <p>TITRE Cras justo odio Last updated 3 mins agoLast updated 3 mins agoLast updated 3 mins ago</p>
                        </a>
                    </div>

                    <div class="col-md col-sm-4">
                        <a href="#">
                            <p style="color: #999999; text-decoration: none;"><strong>OPINION</strong></p>
                            <img src="https://placehold.it/80x80?text=IMAGE" class="img-fluid rounded-circle img-thumbnail" style="width:100%" alt="Image">
                            <p>Partner 2 Cras justo odio Last updated 3 mins agoLast updated io Last updated 3 mins agoLast updated 3io Last </p>
                        </a>
                    </div>

                    <div class="col-md col-sm-4">
                        <a href="#">
                            <p style="color: #999999; text-decoration: none;"><strong>OPINION</strong></p>
                            <img src="https://placehold.it/80x80?text=IMAGE" class="img-responsive rounded-circle img-thumbnail" style="width:100%" alt="Image">
                            <p>Partner 3</p>
                        </a>
                    </div>

                    <div class="col-md col-sm">
                        <a href="#">
                            <p style="color: #999999; text-decoration: none;"><strong>OPINION</strong></p>
                            <img src="https://placehold.it/80x80?text=IMAGE" class="img-responsive rounded-circle img-thumbnail" style="width:100%" alt="Image">
                            <p>Partner 4</p>
                        </a>
                    </div>

                    <div class="col-md col-sm">
                        <a href="#">
                            <p style="color: #999999; text-decoration: none;"><strong>OPINION</strong></p>
                            <img src="https://placehold.it/80x80?text=IMAGE" class="img-responsive rounded-circle img-thumbnail" style="width:100%" alt="Image">
                            <p>Partner 5</p>
                        </a>
                    </div>
                </div>

                <hr>
                <small class="text-right d-block opinion-items"><strong><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> PLUS D'OPINONS</a></strong></small>
                <hr>

                <div class="">
                    <ul class="list-unstyled">
                        <li class="media my-4 bg-white p-3">
                            <a href=""><img class="mr-3 img-fluid" src="https://placehold.it/150x100?text=Another Image Maybe" alt="Generic plac eholder image"></a>
                            <div class="media-body">
                                <a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <span class="text-muted">date and time</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="row sections-titles">
                    <h3 style="border-top: 4px solid #1abc9c; padding: 10px;" class="w-100 d-block text-center">
                        <strong>DOSSIERS</strong>
                        <hr class="mb-0">
                    </h3>
                </div>

                <div class="row">
                    <div id="dossierCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#dossierCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#dossierCarousel" data-slide-to="1"></li>
                        </ol>


                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="card-deck">
                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <p class="text-muted text-center">Dosssier</p>
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card-deck">
                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="card">
                                            <img class="card-img-top" src="https://placehold.it/150x80?text=Another Image Maybe" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="text-right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> voir tous les dossiers</strong></a></p>
                            </div>
                        </div>

                        <div style="">
                            <a class="carousel-control-prev" href="#dossierCarousel" role="button" data-slide="prev" style="background-color: rgba(0, 0, 0,0.5); width: 40px; height: 40px;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#dossierCarousel" role="button" data-slide="next" style="background-color: rgba(0,0,0,0.5); width: 40px; height: 40px;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-2 mb-4" style="background-color: #333; ">
                        <h1>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h1>
                    </div>
                </div>

                <div class="row pb-4 mb-4" style="background-color: #333;">
                    <div class="col-12 sections-titles">
                        <div class="row">
                            <h3 style="border-top: 4px solid #1abc9c; color: #fff; padding: 10px;" class="w-100 d-block text-center">
                                <strong>ROYALE NEWS TV</strong>
                                <hr class="mb-0">
                            </h3>
                        </div>

                        <div class="card-columns">
                            <div class="card">
                                <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                    <span class="badge badge-pill badge-primary">Chronique</span>
                                    <div class="card-body border-bottom">
                                        <h5>his is a longer card with supporting text below as a natural</h5>
                                    </div></a>
                            </div>

                            <div class="card">
                                <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                    <span class="badge badge-pill badge-primary">Chronique</span>
                                    <div class="card-body border-bottom">
                                        <h5>his is a longer card with supporting text below as a natural</h5>
                                    </div></a>
                            </div>

                            <div class="card">
                                <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                    <span class="badge badge-pill badge-primary">Chronique</span>
                                    <div class="card-body border-bottom">
                                        <h5>his is a longer card with supporting text below as a natural</h5>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="card-deck mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong>POLITIQUE</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">

                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>ECONOMIE</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>INTERNATIONAL</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mt-5">
                    <div class="card-deck mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong>Opinion</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">

                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Enquêtes</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Santé</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row mt-5">
                    <div class="card-deck mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <strong>Sport</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">

                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Culture</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Education</strong>
                            </div>
                            <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">
                                <div class="card-body border-bottom">
                                    <h5>his is a longer card with supporting text below as a natural</h5>
                                    <small class="text-right text-muted d-block">3 days ago</small>
                                </div></a>

                            <ul class="list-group">
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                                <li  class="list-group-item ">
                                    <div class="w-100">
                                        <p class="mb-1"><a href="">List group item headingList group item headingList group item heading</a></p>
                                        <small class="text-right text-muted d-block">3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <footer class="col-md-12 p-4" style="color: #fff; background: #111;">
                        <div class="row">
                            <div class="col-md-4 footer-item">
                                <h5><strong>Informations légales</strong></h5>
                                <div><a href="">Conditions générales d’utilisation</a></div>
                                <div><a href="">Conditions générales de vente</a></div>
                                <div><a href="">Mentions légales</a></div>
                            </div>

                            <div class="col-md-4 footer-item">
                                <h5><strong>Des questions ?</strong></h5>
                                <div><a href="">Qui sommes-nous ?</a></div>
                                <div><a href="">Nous contacter</a></div>
                            </div>

                            <div class="col-md-4 footer-item">
                                <h5><strong>Créé par</strong></h5>
                                <div><a href="">laroyalenews</a></div>
                                <div><a href="">Recrutement</a></div>
                            </div>
                        </div>
                        <hr style="background: #eee;">
                        <div class="row">
                            <div class="col-md-4">© 2018 <strong class="hidden-xs hidden-sm">La Royale News</strong></div>
                            <div class="col-md-4">
                                <span style="font-size: 18px; color: #fff;">Nous suivre</span>
                                <span><a href="#" class="btn bg-light"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="#" class="btn bg-light"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                            </div>
                            <div class="text-center col-md-4">Tous droits réservés</div>
                        </div>
                    </footer>
                </div>

            </div>


            <div class="col-md-4 order-fisrt order-md-last">
                <div class="row">
                    <aside id="edition_day" class="edition_card mx-auto d-block bg-white">
                        <h3 class="col-12 p-2 title-label">L'edition du jour</h3>
                        <div class="mt-5">
                            <a href="#" title="Lire"><img class="img-fluid" src="{{asset('images/laune.jpg')}}"></a>
                        </div>

                        <hr>
                        <div class="d-none d-md-block">
                            <h5 class="p-2">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h5>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>

</div>
@stop
