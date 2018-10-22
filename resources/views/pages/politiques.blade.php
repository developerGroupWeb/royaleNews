@extends('templates.template')

@section('content')
    @include('templates.nav')
    <div class="politic_content">
<div class="container-fluid">
  <div class="row">
    <div class="">
      <h1 class="m-4"><strong>Politique</strong></h1>
    </div>
  </div>
  <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <hr>
      <div class="row">
      <div class="col-12">
          @foreach($article as $detail)
              <a href="{{route('rubric.show', [strtolower($detail->rubric), $formatData($detail->start_at), $detail->id, $detail->slug])}}">
                  <h4>{{$detail->title}}</h4>
                  <img src="http://127.0.0.1/royaleAdmin/public/storage/pictures/{{$detail->pictures}}" style="width:100%" alt="Image">
                  <p>{{$detail->content}}</p>
              </a>
          @endforeach
      </div>
    </div>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <!--Tous les article politiques cliques vont se retrouver ici-->
          </div>
        </div>
        <div class="card-deck">
          <div class="card mb-3 bg-white">
            <a href="#">
              <img class="img-fluid w-100 h-100" src="../public/images/880x495_551979.jpg" alt="First slide">
            </a>
            <h4 class="card-body"><a href="">Outside counsel in Kavanaugh hearing told Republican senators she would not have been able to prosecute</a></h4>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card mb-3">
            <a href="#">
              <img class="img-fluid w-100 h-100" src="../public/images/880x495_551979.jpg" alt="First slide">
            </a>
            <h4 class="card-body"><a href="">Outside counsel in Kavanaugh hearing told Republican senators she would not have been able to prosecute she would not have been able to prosecute</a></h4>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card-deck">
          <div class="card mb-3 bg-white">
            <a href="#">
              <img class="img-fluid w-100" src="../public/images/gvbuyb.jpg" alt="First slide">
            </a>
            <h4 class="card-body"><a href="">Outside counsel in Kavanaugh hearing </a></h4>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card mb-3">
            <a href="#">
              <img class="img-fluid w-100" src="../public/images/gvbuyb.jpg" alt="First slide">
            </a>
            <h4 class="card-body"><a href="">Outside counsel in Kavanaugh hearing told Republican senatsecute</a></h4>
          </div>
          <div class="card mb-3">
            <a href="#">
              <img class="img-fluid w-100" src="../public/images/gvbuyb.jpg" alt="First slide">
            </a>
            <h4 class="card-body"><a href="">Outside counsel in Kavanaugh hearing told Republican </a></h4>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card-columns">
          <div class="card bg-white">
            <div class="card-body">
              <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
              <small class="text-muted">Politique</small>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
              <small class="text-muted">Politique</small>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
              <small class="text-muted">Politique</small>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
              <small class="text-muted">Politique</small>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="">Card title that wraps to a new line</a></h5>
              <small class="text-muted">Politique</small>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
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

      <hr>

      <div class="row">
        <ul class="list-unstyled">
          <li class="media my-4 bg-white p-3">
            <a href=""><img class="mr-3 img-fluid" src="https://placehold.it/150x100?text=Another Image Maybe" alt="Generic plac eholder image"></a>
            <div class="media-body">
              <a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
               <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              <span class="text-muted">date and time</span>
            </div>
          </li>
          <li class="media my-4 bg-white p-3">
            <a href=""><img class="mr-3 img-fluid" src="https://placehold.it/150x100?text=Another Image Maybe" alt="Generic plac eholder image"></a>
            <div class="media-body">
              <a href=""><h5 class="mt-0 mb-1">List-based media object</h5></a>
               <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              <span class="text-muted">date and time</span>
            </div>
          </li>
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

      <hr>

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
              <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="../public/images/gvbuyb.jpg" alt="Card image cap">
              <span class="badge badge-pill badge-primary">Chronique</span>
              <div class="card-body border-bottom">
                <h5>his is a longer card with supporting text below as a natural</h5>
              </div></a>
            </div>

            <div class="card">
              <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="../public/images/gvbuyb.jpg" alt="Card image cap">
              <span class="badge badge-pill badge-primary">Chronique</span>
              <div class="card-body border-bottom">
                <h5>his is a longer card with supporting text below as a natural</h5>
              </div></a>
            </div>

            <div class="card">
              <a href="#"><img class="img-fluid w-100" style="max-height: 400px;" src="../public/images/gvbuyb.jpg" alt="Card image cap">
              <span class="badge badge-pill badge-primary">Chronique</span>
              <div class="card-body border-bottom">
                <h5>his is a longer card with supporting text below as a natural</h5>
              </div></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
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
    </div>

    <!--<?php
       /*le aside.php doit rester ici*/
    ?>-->
    
  </div>
@stop