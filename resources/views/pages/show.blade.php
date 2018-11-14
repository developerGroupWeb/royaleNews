@extends('templates.template')

@section('content')

    @include('templates.nav')

    @if(isset($article) && isset($pages))

        <div class="rubric-content">
            <div class="container-fluid">
              <div class="row">
                <h3 class="mx-auto mt-3" style="text-transform: uppercase;"><strong>{{$pages}}</strong></h3>
              </div>

                    <div class="mx-auto text-center w-75">
                        <h2 class="">{{$article->title}}</h2>
                        <p>Par <a href="">Nom de l'editeur</a> Date end time</p>
                    </div>


              <hr>
            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

                                <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$article->pictures}}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                                <h5 class="mb-4 p-3"><strong>{{$article->content}}</strong></h5>
                                <p class="p-3">{{$article->contents}}</p>

                        </div>

                        <div class="row bg-light p-4">
                            <div class="col-12">
                                <div class="row pt-3" style="border-top: 2px solid #333">
                                    <h3 class="font-weight-bold col-md-6">Vos réaction <span>(?)</span></h3>
                                    <div class="col-md-6">
                                        <div class="row pr-4">
                                            <a href="#connectBefore" class="btn bg-dark text-light font-weight-bold px-4 ml-auto">Réagir</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 mx-0 py-4 px-1" style="background: #ecf2f4;">
                                    <div class="col-sm-2">
                                        <img src="{{asset('images/discussion-icon@1x.png')}}" class="img-fluid">
                                    </div>

                                    <div class="col-sm-10">
                                        <p class="">
                                            Les commentaires des articles sont modérés par l'équipe de la royaleNews selon certaines exigences en vigueures.<br>
                                            Chacun porte l'entière responsabilité de ses écris.
                                        </p>
                                    </div>
                                </div>

                                <ul class="list-group mt-4">
                                    <li class="list-group-item d-sm-inline-flex">
                                        <img src="{{asset('images/user.svg')}}" class="" style="width: 30px; height: 30px; margin-right: 20px;">
                                        <div class="">
                                            <h5>Name <span class="text-muted">Date - Heure</span></h5>
                                            <p>Voici ce que pense l'ARBRE (auteurs réalisateurs en Bretagne) de ce festival : "De sa genèse (dans un bureau de France Télévisions) à son financement en passant par sa liste d'invités, des intitulés des débats à sa présentation du lieu qui l'accueille : “à 90 minutes de Paris” (le </p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="btn w-100 py-2 bg-dark text-light mt-4" id="connectBefore"><span class="d-none d-sm-block">Connectez vous pour laisser un commentaire</span><span class="d-block d-sm-none font-weight-bold" style="font-size: 12px;">Connectez vous pour commenter</span>
                                </div>

                                <div class="mt-4">
                                    <form action="" method="post" id="sendComent">
                                        <div class="form-group">
                                            <textarea placeholder="Laisser un commentaire" class="w-100 form-control"></textarea>
                                        </div>
                                        <input type="submit" name="send" value="Envoyer" class="btn bg-success px- py-1 mt-3" id="sendComent">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('templates.aside')
                </div>
            </div>
        </div>

    @endif

@stop