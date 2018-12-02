@extends('templates.template')

@section('content')

  <nav class="navbar navbar-expand navbar-light fixed-top py-1 mb-3" style="background-color: rgb(0, 0, 0);">

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav text-white">
        <li class="nav-item mr-3" style="cursor: pointer;">
          <span><i class="fa fa-bars" id="bars-lectureBox" style="font-size: 25px;" aria-hidden="true"></i></span>
          <span class="fa fa-times" id="fa-times-lectureBox" style="font-size: 25px;"></span>
        </li>
      </ul>

      <div class="title-mo navbar-nav ml-auto">
        <a href="" class="mr-2">
            <h5 class="text-white"><strong><span class="d-none d-md-inline-block">LA ROYALE News</span> <span class="pt-0 px-2 pb-1 rounded title-label">RN</span></strong></h5>
        </a>
        <span style="border: 1px solid #eee;"></span>
        <div class="dropdown ml-2">
          <div class="dropdown-toggle text-white" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <span class="d-none d-md-inline-block">28 nov. 2018</span>
          </div>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
      

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link text-white"><i class="fa fa-download" style="font-size: 25px;" aria-hidden="true"></i> <span class="d-none d-md-inline-block">PDF</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa fa-user-circle" style="font-size: 25px;" aria-hidden="true"></i> <span class="d-none d-lg-inline-block font-weight-bold">Se connecter</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="sideNav-lectureBox">
    <ul class="list-unstyled" style="margin-top: 70px;">
      <li class="btn-dark p-2 mt-2 setting"><i class="fa fa-cog text-muted mr-3" style="font-size: 25px;" aria-hidden="true"></i><span style="font-size: 20px;">Paramètres</span></li>
      <li class="text-light p-2 my-0 settingBox font-weight-bold" data-toggle="modal" data-target="#ModalCenter">Police de caractères</li>
      <li class="btn-dark p-2 mt-2"><a href="" class="text-light" style="text-decoration: none;"><i class="fa fa-question-circle text-muted mr-3" aria-hidden="true" style="font-size: 25px;"></i><span style="font-size: 20px;">Centre d'aide</span></a></li>
    </ul>
  </div>

  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-secondary pt-1" data-dismiss="modal">Fermer</button>
          <h5 class="modal-title font-weight-bold" id="ModalCenterTitle" style="margin-right: 130px;">Police de caractères</h5>
        </div>
        <div class="modal-body bg-light">
          <div class="col-12">
            <div class="row mb-4">
              <button type="button" class="btn bg-white border col-5">A</button>
              <div class="col-2"></div>
              <button type="button" class="btn bg-white border col-5 font-weight-bold" style="font-size: 25px;">A</button>
            </div>
          </div>

          <ul class="list-group">
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <label class="custom-control-label" for="customRadio1">Par defaut</label>
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              </div>
            </li>
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Toggle this custom radio</label>
              </div>
            </li>
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
              </div>
            </li>
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
              </div>
            </li>
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio5">Toggle this custom radio</label>
              </div>
            </li>
            <li class="list-group-item bg-white">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio6">Toggle this custom radio</label>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<div class="lectureBox-content">
  <div class="container-fluid" style="">
    <div class="row btn-chevron">
      <div class="btn" id="btnLeft" style=""><i class="fa fa-chevron-left chevron-left" style="" aria-hidden="true"></i>
      </div>

      <div class="ml-auto btn" style="right: 0;"><i class="fa fa-chevron-right chevron-right" style="" aria-hidden="true"></i>
      </div>
    </div>

    <div class="row" id="lectureBox-fistpage">
      <div class="mr-3">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid" style="height: 80vh; width: 350px;">
      </div>

      <div class="bg-white mr-3" style="width: 910px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid mr-0" style="height: 80vh; width: 450px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid ml-0" style="height: 80vh; width: 450px;">
      </div>

      <div class="bg-white mr-3" style="width: 910px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid mr-0" style="height: 80vh; width: 450px;">
        <img src="{{asset('images/laune.jpg')}}" class="img-fluid ml-0" style="height: 80vh; width: 450px;">
      </div>
    </div>
  </div>
</div>

  <div class="col-12 fixed-bottom" style="background: #000;">
    <div class="row text-white py-2">
      <div class="btn btn-dark" style="position: fixed;"><i class="fa fa-caret-left caret-left" style="font-size: 22px;" aria-hidden="true"></i>
      </div>

      <div class="lectureBox-nav">
        <div class="nav">
          <div class="btn btn-dark ml-5 mr-3">LA UNE</div>
          <div class="btn btn-dark mr-3">Page 1</div>
          <div class="btn btn-dark mr-3">Page 2</div>
          <div class="btn btn-dark mr-3">Page 4</div>
          <div class="btn btn-dark mr-3">Page 5</div>
          <div class="btn btn-dark mr-3">Page 6</div>
          <div class="btn btn-dark mr-3">Page 7</div>
          <div class="btn btn-dark mr-3">Page 8</div>
          <div class="btn btn-dark mr-3">Page 9</div>
          <div class="btn btn-dark mr-3">Page 10</div>
          <div class="btn btn-dark mr-3">Page 1</div>
          <div class="btn btn-dark mr-3">Page 2</div>
          <div class="btn btn-dark mr-3">Page 4</div>
          <div class="btn btn-dark mr-3">Page 5</div>
          <div class="btn btn-dark mr-3">Page 6</div>
          <div class="btn btn-dark mr-3">Page 7</div>
          <div class="btn btn-dark mr-3">Page 8</div>
          <div class="btn btn-dark mr-3">Page 9</div>
          <div class="btn btn-dark mr-3">Page 10</div>
        </div>
      </div>

      <div class="ml-auto btn btn-dark" style="position: fixed; right: 0;"><i class="fa fa-caret-right caret-right" style="font-size: 22px;" aria-hidden="true"></i>
      </div>
    </div>
  </div>

@stop