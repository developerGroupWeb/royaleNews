<!--Side navbar on mobile-->
<nav class="d-md-none">
    <div class="header-mob navbar fixed-top shadow" style="background: #fff;">
        <div>
            <span class="fa fa-bars" style="color: #111;" onclick="openNavLeft()"></span>
        </div>
        <div class="title-mo">
            <a href="{{route('root_path')}}">
                <h5 class="text-dark"><strong>LA ROYALE<span class="pt-0 px-2 pb-1 rounded title-label">News</span></strong></h5>
            </a>
        </div>
        <div>
            <span class="fa fa-search" style="color: #111;"></span>
        </div>
    </div>

    <div id="mySidenavLeft" class="sidenavLeft">
        <ul class="list-unstyled">
            <li class="close"><a href="javascript:void(0)" class="closebtn" onclick="closeNavLeft()">&times;</a></li>
            <li class="abo-li bg-warning"><a href="abonnement.php" class="text-dark"><b>ABONNEMENT<br>1 mois gratuit</b></a></li>
            <hr style="background-color: #fff;">
            <li class="">
                <form>
                    <div class="form-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </li>
            <hr style="background-color: #fff;">
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'politiques'])}}">Politique</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'opinions'])}}">Opinion</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'economies'])}}">Economie</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'enquetes'])}}">Enquêtes</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'international'])}}">International</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'sports'])}}">Sport</a></li>
            <li class="li"><a href="{{route('rubric.all',['rubrics' => 'santes'])}}">Santé</a></li>
            <li class="li"><a href="">Culture</a></li>
            <li class="li"><a href="">Education</a></li>
            <li class="li"><a href="">Tech-Innovation</a></li>
            <hr style="background-color: #fff;">
            <li class="li"><a href="">Top info</a></li>
            <li class="li"><a href="">Dossiers d'actualité</a></li>
            <li class="li"><a href="">Le conseil des minitres</a></li>
            <li class="li"><a href="">Histoire d'afrique</a></li>
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
                    <a class="nav-link rounded font-weight-bold bg-warning text-white" href="#">ABONNEZ-VOUS/1 mois gratuit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-dark" href="Sing_in.php"><span class="fa fa-user-circle-o"></span> Connexion</a>
                </li>
            </ul>

        </div>
    </nav>
</div>

<div class="d-none d-md-block sticky-top">
    <nav class="navbar navbar-dark navbar-expand-sm" style="background: #000000;">
        <div class="pl-3 pt-1 pb-1 rounded m-auto" style="cursor: pointer; background: #393434;">
            <span class="fa fa-bars mr-3" style="font-size: 23px; color: #eee;"><small style="font-family: 'Arial';"> MENU</small></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'politiques'])}}"><strong>Politique</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'economies'])}}"><strong>Economie</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'opinions'])}}"><strong>Opinion</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'enquetes'])}}"><strong>Enquêtes</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'sports'])}}"><strong>Sport</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'santes'])}}"><strong>Santé</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rubric.all',['rubrics' => 'internationals'])}}"><strong>International</strong></a>
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

<div class="d-none d-md-block">
    <div class="navbar bg-danger" style=" background: ;">
        <p style="height: 10px; color: #fff;"><strong class="mr-2">EN CE MOMENT</strong><span style="border-right: 2px solid #fff;"></span></p>
    </div>
</div>

<!--end header navbar on desktop-->