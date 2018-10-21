@extends('templates.template')

@section('content')
    @include('templates.nav')
    <div class="container-fluid">
        <div class="col-sm-7 col-sm-offset-1">

            <div class="row">
                <div class="col-sm-12">
                    @foreach($article as $detail)

                            <h4>{{$detail->title}}</h4>
                            <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                            <p><strong>{{$detail->content}}</strong></p>
                        <br><br>
                        <p>{{$detail->contents}}</p>
                    @endforeach
                </div>
            </div>


            </div>

        </div>
    </div>
@stop