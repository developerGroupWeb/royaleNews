<!--Side navbar on mobile-->
<nav class="d-md-none">
    <div class="header-mob navbar fixed-top shadow" style="background: #fff;">
        <div>
            <span class="fa fa-bars" style="color: #111;" onclick="openNavLeft()"></span>
            <span class="fa fa-times" style="color: #111;"></span>
        </div>
        <div class="title-mo">
            <a href="{{route('root_path')}}">
                <h5 class="text-dark"><strong>LA ROYALE<span class="pt-0 px-2 pb-1 rounded title-label">News</span></strong></h5>
            </a>
        </div>
        <div>
          <a href="{{route('authentic', ['login' => 'singin'])}}">
            <span class="fa fa-user-circle-o" style="color: #111;"></span>
          </a>
        </div>
    </div>

    <div id="mySidenavLeft" class="sidenavLeft">
        <ul class="list-unstyled">
            <li class="close"><a href="javascript:void(0)" class="closebtn" onclick="closeNavLeft()">&times;</a></li>
            <li class="nav-item">
              <a class="nav-link rounded font-weight-bold bg-warning py-2 text-center" style="color: #000;" href="{{route('members.abonnement')}}">ABONNEZ-VOUS<br/><span class="text-white">1 mois gratuit offert</span></a>
            </li>
            <hr style="background-color: #fff;">
            <li class="">
                <form>
                    <div class="form-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </li>
            <hr style="background-color: #fff;">
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'politique'])}}">Politique</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'opinion'])}}">Opinion</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'économie'])}}">Économie</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'enquêtes'])}}">Enquêtes</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'international'])}}">International</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'sport'])}}">Sport</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'santé'])}}">Santé</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'éducation'])}}">Éducation</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'tech-innovation'])}}">Tech-Innovation</a></li>
            <hr style="background-color: #fff;">
            <li class="li"><a href="">Top info</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'dossiers-d\'actualité'])}}">Dossiers d'actualité</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'le-conseil-des-ministres'])}}">Le conseil des minitres</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'histoires-d\'afrique'])}}">Histoires d'afrique</a></li>
            <li class="li"><a href="">Publicité</a></li>
            <hr style="background-color: #fff;">
          </ul>
        </div>
      </nav>
    <!--end side navbar mobile-->

    
    <!--header navbar on desktop-->
    <div class="d-none d-md-block">
      <nav class="navbar navbar-light navbar-expand-sm">
        <div class="">
            <a class="navbar-brand py-2" href="{{route('root_path')}}">
                <h2 class="m-0"><strong>LA ROYALE<span class="pt-0 px-2 pb-1 rounded title-label">News</span></strong></h2>
                <small><em>L'information à l'ère du numérique</em></small>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link rounded font-weight-bold bg-warning py-2 text-center" style="color: #000;" href="{{route('members.abonnement')}}" target="_blank">ABONNEZ-VOUS<br/><span class="text-white">1 mois gratuit offert</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold text-dark py-3" href="{{route('authentic', ['login' => 'singin'])}}"><img src="{{asset('images/user.svg')}}" style="width: 30px; height:
                30px; margin-right: 10px;"></span> Connexion</a>
            </li>
            

            <!--<li class="dropdown nav-item">
              <a class="dropdown-toggle nav-link font-weight-bold text-dark py-3" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mr ou Mme Name
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="z-index: 10000;">
                <a class="dropdown-item" href="">Espace abonné</a>
                <a class="dropdown-item" href="">Se déconnecter</a>
              </div>
            </li>-->
          </ul>
          
        </div>
      </nav>
    </div>

    <div class="d-none d-md-block sticky-top">
    <nav class="navbar navbar-dark navbar-expand-sm" style="background: #000000;">
        <div class="pl-3 pt-1 pb-1 rounded m-auto" style="cursor: pointer; background: #393434;">
            <span class="fa fa-bars mr-3" onclick="openNav()" style="font-size: 23px; color: #eee;"><small style="font-family: 'Arial';"> MENU</small></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'politique'])}}"><strong>Politique</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'économie'])}}"><strong>Économie</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'opinion'])}}"><strong>Opinion</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'enquêtes'])}}"><strong>Enquêtes</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'santé'])}}"><strong>Santé</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'international'])}}"><strong>International</strong></a>
                </li>
                <li class="dropdown nav-item">
                  <a class="dropdown-toggle nav-link font-weight-bold" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plus
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'sport'])}}"><strong>Sport</strong></a>
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'éducation'])}}"><strong>Éducation</strong></a>
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'tech-innovation'])}}"><strong>Tech-innovation</strong></a>
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'dossiers-d\'actualité'])}}"><strong>Dossiers d'actualité</strong></a>
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'le-conseil-des-ministres'])}}"><strong>Le conseil des minitres</strong></a>
                    <a class="dropdown-item" href="{{route('rubric.all',['rubrics' => 'histoires-d\'afrique'])}}"><strong>Histoires d'afrique</strong></a>
                  </div>
                </li>
            </ul>
            <div class="navbar-nav ml-auto">
                <div class="nav-item" style="color: #eee; cursor: pointer;">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
      </nav>
    </div>

    <!--Search bar content-->
    <div class="searchBar-content d-none">
      <div class="bg-dark py-2 d-none d-md-block">
        <form class="col-6 offset-3 d-inline-flex" action="" method="">
          <input type="search" name="" id="searchBar" class="w-100 pl-3 py-2">
          <button type="submit" class="btn" role="button">chercher</button>
        </form>
      </div>
    </div><!--end-->

    <div class="d-none d-md-block">
      <div class="navbar bg-danger" style=" background: ;">
        <p style="height: 10px; color: #fff;"><strong class="mr-2">EN CE MOMENT</strong><span style="border-right: 2px solid #fff;"></span>
          ...........
        </p>
      </div>
    </div>

    <!--Menu fullscreen content-->
    <div class="d-none d-md-block">
      <div id="myNav" class="overlay">
        <nav class="navbar navbar-light navbar-expand-sm bg-white">
          <div class="">
            <a class="navbar-brand py-2" href="">
              <h2 class="m-0"><strong>LA ROYALE<span class="pt-0 px-2 pb-1 rounded title-label">News</span></strong></h2>
              <small><em>L'information à l'ère du numérique</em></small>
            </a>
          </div>
          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </nav>

        <div class="container-fluid">
          <div class="row p-3">
            <div class="col-md-3">
              <div class="row">
                <ul class="nav flex-column w-100 font-weight-bold" style="font-size: 20px; text-transform: uppercase; ">
                  <li class="nav-itembg-dark pl-3">
                    <a class="nav-link avtive" href="Opinion.php">Opinion</a>
                  </li>
                  <li class="nav-item bg-dark my-2 pl-3">
                    <a class="nav-link" href="Enquetes.php">enquêtes</a>
                  </li>
                  <li class="nav-item bg-dark pl-3">
                    <a class="nav-link active" href="Politique.php">Politique</a>
                  </li>
                  <li class="nav-item bg-dark my-2 pl-3">
                    <a class="nav-link" href="Economie.php">économie</a>
                  </li>
                  <li class="nav-item bg-dark pl-3">
                    <a class="nav-link" href="International.php">International</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="col-md-9">
              <div class="row">
                <div class="card-group menuFullScreen-content">
                  <div class="card bg-dark text-white item1">
                    <img class="card-img" src="{{asset('images/images25525415.jpg')}}" alt="Card image">
                    <div class="card-img-overlay item1-overlay">
                      <h5 class="card-title">La Royale Presse: Le premier quotidien 100% electronique au Benin</h5>
                      
                      <small class="card-text">Last updated 3 mins ago</small>
                    </div>
                  </div>

                  <div class="card bg-dark text-white item2">
                    <img class="card-img" src="{{asset('images/images25525415.jpg')}}" alt="Card image">
                    <div class="card-img-overlay item2-overlay">
                      <h5 class="card-title">Card title</h5>
                      
                      <small class="card-text">Last updated 3 mins ago</small>
                    </div>
                  </div>

                  <div class="card bg-dark text-white item3">
                    <img class="card-img" src="{{asset('images/images25525415.jpg')}}" alt="Card image">
                    <div class="card-img-overlay item3-overlay">
                      <h5 class="card-title">Card title</h5>
                      
                      <small class="card-text">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        

        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Clients</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </div>
        </ul>
    </div>
</nav>
<script src="{{asset('js/navmobile.js')}}"></script>