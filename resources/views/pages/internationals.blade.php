@extends('templates.template')

@section('content')
    @include('templates.nav')
<div class="container-fluid">
    <div class="col-sm-7 col-sm-offset-1">
        <h1 class=""><strong>International</strong></h1>

        <hr>
        <div></div>
        <hr>

        <div class="row">
            <div class="col-sm-12">
                @foreach($une as $detail)
                    <a href="{{route('rubric.show', [$formatData($detail->start_at), strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                        <h4>{{$detail->title}}</h4>
                        <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
                        <p>{{$detail->content}}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <hr>

        <div class="row">

            <div class="col-sm-12">
                @foreach($article as $detail)
                    <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">{{$detail->title}}</h4>
                                ...<p class="">{{$detail->content}} </p>
                            </div>

                            <div class="media-right">
                                <img class="media-object" src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" alt="..." style="">
                            </div>
                        </div>
                    </a>
                @endforeach
                <hr>

            </div>

        </div>


    </div>


    <div class="col-sm-4 hidden-xs">
        <hr>
        <div class="col-sm-12">
            <a href="#" class="btn btn-default"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-default"><i class="fa fa-google" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-default"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <button class="btn"><i class="fa fa-share" aria-hidden="true"></i> Partager</button>
            <hr>
        </div>

        <div class="col-sm-12" style="background-color: #666; padding: 10px; border-radius: 10px; margin-bottom: 20px;">
            <form method="post" action="" id="newslettres">
                <div class="form-group form-group-sm col-sm-12">
                    <label for="newslettres" class="">Newsletter International</label>
                    <input type="email" name="" class="form-control" placeholder="Insèrez votre email" id="newslettres">
                </div><br>
                <button class="btn btn-default col-md-4 col-xs-10" style="margin-left: 15px;" type="submit" name="" >Envoyer</button>
            </form>
        </div>


        <div class="col-sm-12">
            <h3 style="border-top: 4px solid #0080ff; margin-top: -5px; padding-top: 10px;"><strong><span style="color: red;">Info</span> plus</strong></h3>
            <div class="list-group">

                <a href="#" class="list-group-item ">
                    <span class="badge pull-left">1</span>
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">...lc[i ifjjf  qimimc  icim mmmmmmm mmmmmmmmmm cqimcqimc qmiqmciqcq mqcmiqmmc qimqciqiipq q </p>
                </a>

                <a href="#" class="list-group-item">
                    <span class="badge pull-left">2</span>
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">...</p>
                </a>

                <a href="#" class="list-group-item">
                    <span class="badge pull-left">3</span>
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">...</p>
                </a>

                <a href="#" class="list-group-item">
                    <span class="badge pull-left">4</span>
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">...</p>
                </a>

                <a href="#" class="list-group-item">
                    <span class="badge pull-left">5</span>
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">..fffffffffffffff ffffffffffffffffff fffffffffffffff ffffffffffffff .</p>
                </a>
            </div>
            <hr>
            <h4><a href="#">Titre</a></h4>
            <p>...</p>
            <hr>
            <h4><a href="#">Titre</a></h4>
            <p>...</p>
            <hr>
            <h4><a href="#">Titre</a></h4>
            <p>...</p>
            <hr>

        </div>

    </div>
</div>
@stop