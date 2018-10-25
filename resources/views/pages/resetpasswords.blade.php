@extends('templates.template')

@section('content')
<div class="">
	<nav class="navbar navbar-expand-sm fixed-top px-5 shadow" style="background: #000000;">>
		<a class="navbar-brand" href="#" style="color: #fff;">
			<h3 class="font-weight-bold">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
			</h3>
	    </a>
	
	</nav>
</div>

<div class="singin-body col-12">
	<div class="row bg-light">
		<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 offset-0 singin-content bg-white py-4 px-5 mb-5 shadow" style="margin-top: 100px; border-radius: 20px;">
			<div class="row">
				<h1 class="text-center mx-auto" style="color: #333;">Récupération du mot de passe</h1>
				<h3 class="text-center mx-auto mb-5">Saisissez votre nouveau mot de passe</h3>

		      	<div class="col-12">
					<form method="post" action="" id="singin">
					  <div class="form-group row">
					  	<div class="col-12">
					  		<div class="row">
						    	<label class="" for="password">Nouveau mot de passe</label>
						    	<span class="ml-auto" style="font-size: 15px; color: #1abc9c;">
						    		<i class="fa fa-eye" id="fa-eye" aria-hidden="true">Afficher</i>
						    		<i class="fa fa-eye-slash" id="fa-eye-slash" aria-hidden="true" style="display: none;">Cacher</i>
						    	</span>
						    </div>
						</div>
					    <input type="password" class="form-control" id="password" title="password" placeholder="Votre mot de passe"><span class="error"></span>
					  </div>

					  <div class="form-group row">
					  	<div class="col-12">
					  		<div class="row">
						    	<label class="" for="resetpassword">Confirmer mot de passe</label>
						    </div>
						</div>
					    <input type="password" class="form-control" id="resetpassword" title="resetpassword" placeholder="Nouveau mot de passe"><span class="error"></span>
					  </div>
					  
					  <div class="singin" style="margin-top: 25px;">
					  	<button type="submit"  id="singin" class="btn col-sm-8 offset-sm-2 col-8 offset-2 mt-5 singbg-btn" style="padding: 8px;"><h4>Valider</h4></button>
					  </div>
					</form>
				</div>

				<div class="col-sm-12" style="margin-bottom: 50px;">
					<hr>
					<div class="row">
						<h5 class="mx-auto"><a href="{{route('rubric.all',['rubrics' => 'singin'])}}">Retour à la connexion</a	></h5>
					</div>
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
@stop