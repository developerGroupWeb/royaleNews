 @extends('templates.template')
 
 @section('content')
     @include('templates.nav')
 <div id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 order-last order-lg-first">
                <div class="row d-none d-md-block d-lg-none">
                    <aside id="edition_day" class="edition_card mx-auto bg-white">
                        <h3 class="col-12 p-2 title-label">L'edition du jour</h3>
                        <div class="mt-5 mx-auto">
                            <a href="#" title="Lire"><img class="img-fluid" src="{{asset('images/laune.jpg')}}"></a>
                        </div>
                        <hr>
                        <div class="d-none d-lg-block">
                            <h5 class="p-2">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h5>
                        </div>
                    </aside>
                </div>
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
                            <div class="p-2 bg-rnews"><strong>A LA UNE</strong></div>
                            <img class="card-img-top" src="{{asset('images/gvbuyb.jpg')}}" alt="Card image cap">

                            <span class="font-weight-bold m-2">Rubrics</span>
                            <h5 class="p-3 card-title text-center">Title</h5>
                        </a>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
 
                <hr>
 
                <div class="">
                    <div class="card-columns">
                        @foreach($articlePriorityTwo as $detail)
                         <div class="card">
                             <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                                 <img class="card-img-top" src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$suite->pictures}}"/>
                                 <div class="card-body">
                                     <span class="badge-small badge-primary font-weight-bold rounded px-1">{{ucfirst($detail->rubric)}}</span>
                                     <h5 class="card-title">{{$detail->title}}</h5>
                                     <!--<p class="card-text">{{$detail->content}}</p>-->
                                 </div>
                             </a>
                             <div class="card-footer">
                                 <small class="text-muted">{{$times_already($detail->start_at)}}</small>
                             </div>
                         </div>
                        @endforeach
                    </div>
 
                    <hr>
                </div>
 
                <div class="row">
                     <div class="mb-4 bg-warning col-12 py-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <img src="{{asset('images/E-ABO-100Num-T-300x250.png')}}" class="img-fluid mx-auto" style="height: 250px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <h3 class="font-weight-bold text-center mx-auto">Abonnez-vous <span class="text-white"> à l'offre 100% numérique</span></h3>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="row mx-auto" style="font-size: 13px;">
                                            <li>Accédez en illimité à <strong>l'intégralité des contenus</strong> sur tous vos écrans</li>
                                            <li>Téléchargez <strong>votre journal en version numérique dès 7H</strong></li>
                                            <li>Profitez d'une navigation <strong>sans publicité</strong></li>
                                            <li>Bénéficiez d'un <strong>espace privilège</strong> réservé uniquement aux abonnés </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row"><a href="" class="btn bg-danger px-3 py-2 mt-5 text-white mx-auto"><h5>JE M'ABONNE</h5></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
 
                <div class="row">
                     <ul class="list-unstyled col-12">
                        @foreach($articlePriorityTreeMaxDataTreeOnePerLine as $detail)
                         <li class="media mt-4 mb-2 bg-white p-3 row">
                            <div class="col-md-3">
                                <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                                 <img class="mr-3 img-fluid" src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" alt="Generic plac eholder image">
                                </a>
                            </div>
                            <div class="col-md-9">
                                 <div class="media-body">
                                     <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                                         <h6 class="text-muted">{{$detail->rubric}}</h6>
                                         <h4 class="mt-0 mb-1">{{$detail->title}}</h4>
                                     </a>
                                     <span class="text-muted">{{$times_already($detail->start_at)}}</span>
                                 </div>
                            </div>
                         </li>
                        @endforeach
                     </ul>
                </div>
 
                <div class="mb-4">
                     <div class="card-columns">
                         @foreach($articlePriorityTreeMaxDataSixTreePerLine as $detail)
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="card-title"><a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">{{$detail->title}}</a></h5>
                                 <small class="text-muted">{{$detail->rubric}}</small>
                                 <p class="card-text">{{$detail->content}}</p>
                             </div>
                             <div class="card-footer"><small class="text-muted">{{$times_already($detail->start_at)}}</small></div>
                         </div>
                         @endforeach
                     </div>
                </div>

                <div class="row">
                    <div class="card-deck mx-auto">
                        <div class="card">
                            <div class="card-header font-weight-bold">CHRONIQUES</div>
                            
                            <ul class="list-group">
                                <li  class="list-group-item">
                                    <a href="" class="mb-2"><h5>
                                        <small class="text-muted">Rubrics</small>
                                        ici dans le tag li affichera une chronique de chak categorie. une par ligne. 5 maxi a afficher
                                    </h5></a>

                                    <div>
                                        <span><a href="">Par name autor</a></span>
                                         <small class="text-muted">3 days ago</small>
                                    </div>
                                </li>


                                <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir toutes les chroniques</strong></small></a></li>
                            </ul>
                        </div>
 
                         <div class="card">
                             <div class="card-header font-weight-bold text-white bg-danger">
                                 TOP INFOS
                             </div>
 
                             <ul class="list-group">
                                 <li  class="list-group-item d-flex">
                                     <div class="mr-3">
                                         <span class="badge-small p-2 mb-1 rounded font-weight-bold text-white">1</span>
                                     </div>
                                     <div class="">
                                         <p class="mb-1"><a href="">ici dans le tag li affichera une info top de chak categorie. une par ligne. 5 maxi a afficher</a></p>

                                         <small class="text-muted">3 days ago</small>
                                     </div>
                                 </li>
 
                                 <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir tous</strong></small></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
 
                <div class="row bg-light rounded  my-3 py-4" style="border: 1px solid #333;">
                    <div class="col-12">
                         <div class="row text-center">
                            <h3 class="font-weight-bold mx-auto text-center" style="color: #000;">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span></h3>
                        </div>
                        <div class="row">
                             <i class="fa fa-envelope-open-o fa-3x mx-auto" aria-hidden="true"></i>
                         </div>
                         <div class="row">
                             <h4 class="mx-auto text-center my-3">Ne rater rien de l'actualité en continue! Abonnez-vous à notre newsletters.</h4>
                         </div>
                         <div class="row">
                             <form class="col-12" id="scrbNewsLetters" action="" method="post">
                                <div class="row">
                                    <div class="form-group col-md-8">
                                         <input type="email" name="" class="form-control form-control-lg" id="scrbNewsLetters">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" name="" id="scrbNewsLetters" value="s'inscrire" class="btn bg-success py-2 px-5 text-white font-weight-bold" style="font-size: 20px;">
                                    </div>
                                </div>
                             </form>
                         </div>
                     </div>
                </div>

                <div class="row">
                    <div class="card-deck mx-auto">
                        <div class="card">
                            <div class="card-header font-weight-bold">ENTRETIENS</div>

                            <a href="">
                                <img class="img-fluid w-100" src="{{asset('images/images25525415.jpg')}}" alt="Card image cap">

                                 <div class="card-body border-bottom">
                                     <h5>ici dans le tag 'a' affichera la derniere entretien ajoutee.</h5>

                                     <small class="text-muted">3 days ago</small>
                                 </div>
                             </a>
 
                             <ul class="list-group">

                                 <li  class="list-group-item">
                                     <div class="">
                                         <p class="mb-1"><a href="">ici dans le tag li affichera une entretien. une par ligne. 2 maxi a afficher</a></p>

                                         <small class="text-muted">3 days ago</small>
                                     </div>
                                 </li>
 
                                 <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir tous</strong></small></a></li>
                             </ul>
                        </div>
 
                        <div class="card">
                             <div class="card-header fixed font-weight-bold">
                                 LES PLUS LUS
                             </div>
                             <ul class="list-group list-group-flush">
                                  <li  class="list-group-item">
                                     <div class="">
                                         <p class="mb-1"><a href="">ici dans le tag li affichera une info des plus lues de chak categorie. une par ligne. 5 maxi a afficher</a></p>

                                         <small class="text-muted">3 days ago</small>
                                     </div>
                                 </li>
 
                                 <li class="list-group-item text-right"><a href=""><small><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong> Voir tous</strong></small></a></li>
                             </ul>
                         </div>
                    </div>
                </div>
 
                <div class="row sections-titles mt-5 bg-white">
                     <h3 style="border-top: 4px solid #00c6ff; padding: 10px;" class="w-100 d-block text-center">
                         <strong>IDEE - ANALYSE</strong>
                         <hr class="mb-0">
                     </h3>
                </div>
 
                <div class="row text-center opinion-items bg-white">
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
 
                 <div class="row sections-titles bg-white">
                     <h3 style="border-top: 4px solid #1abc9c; padding: 10px;" class="w-100 d-block text-center">
                         <strong>DOSSIERS</strong>
                         <hr class="mb-0">
                     </h3>
                 </div>
 
                <div class="row bg-white">
                     <div id="dossierCarousel" class="carousel slide" data-ride="carousel">
 
                        <ol class="carousel-indicators">
                             <li data-target="#dossierCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#dossierCarousel" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="card-deck mx-auto">
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
                                 <div class="card-deck mx-auto">
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
                            </div>
                            <hr>
                            <small class="text-right d-block opinion-items mr-3"><strong><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> PLUS DE DOSSIERS</a></strong></small>
                            <hr>
                        </div>

                        <div>
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
 
                 <div class="row pb-4 mb-4" style="background-color: #000;">
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
                        <hr class="bg-white">
                        <small class="text-right d-block opinion-items mr-3"><strong><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>TOUTE LA ROYALENEWS TV</a></strong></small>
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


            <div class="col-lg-4 order-fisrt order-lg-last d-md-none d-lg-block">
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