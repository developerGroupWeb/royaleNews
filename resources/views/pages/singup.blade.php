@extends('templates.template')

<div class="">
  <nav class="navbar navbar-expand-sm fixed-top px-5 shadow" style="background: #000000;">>
    <a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
      <h3 class="font-weight-bold">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
      </h3>
      </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{route('rubric.all',['rubrics' => 'singin'])}}" class="nav-link btn px-4 singbg-btn" style="color: #fff;"><strong>Se connecter</strong>
                </a>
            </li>
        </ul>
      </div>
  </nav>
</div>

<div class="singin-body col-12">
  <div class="row bg-light">
    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 offset-0 singin-content bg-white py-4 px-5 mb-5 shadow" style="margin-top: 100px; border-radius: 20px;">
      <div class="row">
        <h1 class="text-center mx-auto mb-5" style="color: #333;">Créez votre compte<br>en 1 minute.</h1>
        <h4 class="text-center mx-auto">Vous pourrez profiter des services gratuits de La Royale Presse sur tous les supports.</h4>
        <h6 class="d-block d-sm-none text-center mx-auto"><strong>Déjà inscrit(e) ? <a href="Sing-in.html">Connectez-vous</a></strong></h6>

        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <p class="d-block d-sm-none text-center font-weight-bold">Se connecter avec</p>
            </div>
            <div class="col">
              <div class="row">
                    <a href="#" class="btn" style="background: #3B5998; color: #fff;">
                      <span class="d-none d-sm-inline-block font-weight-bold">Se connecter avec</span> 
                      <button class="btn" style="background: #fff; color: #3B5998;"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                    </a>
                  </div>
                </div>

                <div class="col">
                  <div class="row">
                  <a href="#" class="btn ml-auto" style="background: #d34836; color: #fff;">
                    <span class="d-none d-sm-inline-block font-weight-bold">Se connecter avec</span> 
                    <button class="btn" style="background: #fff; color: #d34836;"><i class="fa fa-google" aria-hidden="true"></i></button>
                  </a>
                </div>
              </div>
            </div>
        </div>

          <div class="col-12 text-center">
              <hr class="row">

              <p class="my-2"><strong>Ou</strong></p>
            </div>

            <div class="col-12">
            <form method="post" action="" id="singup">
              <div class="radio">
                    <span style="font-weight: bold; margin-right: 20px;">Civilité: </span>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Madame
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Monsieur
                    </label>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="firstname">Prénom</label>
                      <input type="text" class="form-control" id="firstname" placeholder="Votre prénom">
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="surname">Nom</label>
                      <input type="text" class="form-control" id="surname" placeholder="Votre nom">
                    </div>
                  </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control " id="email" placeholder="email@mail.fr">
              </div>

              <div class="form-group">
                <div class="">
                  <label class="pull-left" for="password">Créer un mot de passe</label>
                  <span class="pull-right" style="font-size: 15px; color: #1abc9c;"><i class="fa fa-eye" aria-hidden="true">Afficher</i><i class="fa fa-eye-slash" aria-hidden="true" style="display: none;">Cacher</i></span>
              </div>
                <input type="password" class="form-control" id="password" placeholder="Au moins 8 caratères, 1 majuscule, 1 chiffre">
              </div>

              <div class="form-group">
                          <label class="pull-left" for="password">Confirmer mot de passe</label>
                          <input type="password" class="form-control" id="password" placeholder="Confirmer mot de passe">
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Oui, je souhaite recevoir les informations de laroyalepresse.com
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Oui, je souhaite recevoir les informations des partenaires de laroyalepresse.com
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" required="required" checked="">J'accepte les <a href="">conditions générales de vente</a> et <a href="">conditions générales d'utilisation</a>
                    </label>
                  </div>


              <button type="submit" name="singup" id="singup" class="btn col-sm-8 offset-sm-2 col-8 offset-2 singbg-btn" style="padding: 12px; margin-bottom: 40px;"><h4>Je m'inscris</h4></button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
	<footer style="color: #fff;" class="p-4 bg-dark">
    <div class="container">
      <div class="col-12" style="color: #fff;">
        <div class="row">
          <span style="">© laroyalepresse.com</span> <span class="ml-auto"><a href="#">Aide</a> / <a href="#">CGU/CGV</a> / <a href="#">Confidentialité</a></span>
        </div>
      </div>
    </div>
  </footer>
</div>