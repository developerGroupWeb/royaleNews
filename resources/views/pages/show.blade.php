@extends('templates.template')

@section('content')
    @include('templates.nav')
        <div class="rubric-content">
            <div class="container-fluid">
              <div class="row">
                <h3 class="mx-auto mt-3"><strong>{{$pages}}</strong></h3>
              </div>
                @foreach($article as $detail)
                    <div class="mx-auto text-center w-75">
                        <h2 class="">{{$detail->title}}</h2>
                        <p>Par <a href="">Nom de l'editeur</a> Date end time</p>
                    </div>
                @endforeach

              <hr>
            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @foreach($article as $detail)

                                <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                                <h5 class="mb-4 p-3"><strong>{{$detail->content}}</strong></h5>
                                <p class="p-3">{{$detail->contents}}</p>

                            @endforeach
                        </div>

                        <div class="row bg-light p-4">
                            <div class="col-12">
                                <div class="row pt-3" style="border-top: 2px solid #333">
                                    <h3 class="font-weight-bold col">Vos réaction <span>(?)</span></h3>
                                    <div class="col">
                                        <div class="row pr-4">
                                            <a href="#connectBefore" class="btn bg-dark text-light font-weight-bold px-5 ml-auto">Réagir</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 mx-0 p-4" style="background: #ecf2f4;">
                                    <div class="col-2">
                                        <img src="{{asset('images/discussion-icon@1x.png')}}" class="img-fluid">
                                    </div>

                                    <div class="col-10">
                                        <p class="">
                                            Les commentaires des articles sont modérés par l'équipe de la royaleNews selon certaines exigences en vigueures.<br>
                                            Chacun porte l'entière responsabilité de ses écris.
                                        </p>
                                    </div>
                                </div>

                                <ul class="list-group mt-4">
                                    <li class="list-group-item">
                                        
                                    </li>
                                </ul>

                                <div class="btn w-100 py-2 bg-dark text-light mt-4" id="connectBefore">Connectez vous pour laisser un commentaire</div>
                            </div>
                        </div>
                    </div>

                    @include('templates.aside')
                </div>
            </div>
        </div>
@stop