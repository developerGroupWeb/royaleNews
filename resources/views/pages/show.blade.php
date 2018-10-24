@extends('templates.template')

@section('content')
    @include('templates.nav')
        <div class="rubric-content">
            <div class="container-fluid">
              <div class="row">
                <h1 class="mx-auto mt-3"><strong>Rubrics here</strong></h1>
              </div>
                @foreach($article as $detail)
                    <div class="mx-auto text-center w-75">
                        <h2 class="">{{$detail->title}}</h2>
                        <p>Par <a href="">Nom de l'editeur</a></p>
                        <p>Date end time</p>
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
                    </div>

                    @include('templates.aside')
                </div>
            </div>
        </div>
@stop