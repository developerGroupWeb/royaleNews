@extends('templates.template')

@section('content')

<div class="contentContact">
	<nav class="navbar navbar-expand-md px-3 shadow">
		<div class="title-mo">
			<a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
				<h3 class="font-weight-bold" style="color: #000;">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
				</h3>
		    </a>
		</div>
	    <div class="collapse navbar-collapse">
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item mr-4">
		      	  	<a href="{{route('members.abonnement')}}" class="nav-link btn bg-warning px-5" style="color: #000; padding: 11px 11px;"><strong>ABONNEZ-VOUS</strong>
		      	  	</a>
		      	</li>
		      	<li class="nav-item">
		      	  	<a href="{{route('authentic', ['login' => 'singin'])}}" class="nav-link btn px-4" style="color: #fff; background: #000;"><img src="{{asset('images/user.svg')}}" style="width: 30px; height:
		      	  	30px; margin-right: 10px;"><strong>Votre compte</strong>
		      	  	</a>
		      	</li>
		    </ul>
	    </div>
	</nav>

	<div style="background: #ecf2f4;">
		<div class="container">
			<div class="row contentContact-home">
				<div class="col-lg-10 offset-lg-1 bg-white shadow my-3 py-5">
					<div class="row">
						<h1 class="text-center mx-auto">CONTACTEZ-NOUS</h1>
					</div>
					<div class="row">
						<h5 class="text-center mx-auto">Vous avez une question, une remarque, des suggestions…<br>
							Contactez notre Service Client Le Parisien </h5>
					</div>

					<div class="row">
						<div class="col-md-4 p-4">
							<div class="row py-4" style="background: #ecf2f4; height: 250px;">
								<img src="{{asset('images/at.svg')}}" style="width: 32px; height: 32px;" class="mx-auto">
								<div class="col-12 text-center">
									<p class="mt-3">Par email à </p>
									<p class="font-weight-bold text-primary"><a href="">contact@laroyalenews.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 p-4">
							<div class="row py-4" style="background: #ecf2f4; height: 250px;">
								<i class="fa fa-phone fa-2x mx-auto" aria-hidden="true"></i>
								<div class="col-12 text-center">
									<p class="mt-3">Par téléphone<br>
										du lundi au vendredi 7h30 à 19h<br>
											et le samedi de 8h à 12h au </p>
									<p class="font-weight-bold text-primary">000 000 000 000 <br>
									<small class="text-dark">(coût d’un appel local)</small></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 p-4">
							<div class="row py-4" style="background: #ecf2f4; height: 250px;">
								<i class="fa fa-envelope-o fa-2x mx-auto" aria-hidden="true"></i>
								<div class="col-12 text-center">
									<p class="mt-3">Par courrier à l’adresse suivante : </p>
									<p class="font-weight-bold text-primary">La RoyaleNews Service Abonnements ...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="text-white py-4" style="background: #141e28;">
		<div class="container px-4">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<h4>Nos Offres d'Abonnement</h4>
					</div>
					<hr class="row my-2 bg-white col-10">

					<div class="row mt-4">
						<a href="" class="btn bg-warning text-dark p-2"><h5 class="font-weight-bold">Offre 100% numérique</h5></a>
						<a href="" class="btn bg-danger text-white py-2 px-4 font-weight-bold"><h5 class="font-weight-bold">Offre PREMIUM</h5></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<h4 class="">Informations</h4>
					</div>
					<hr class="row my-2 bg-white col-10">

					<div class="row" style="font-size: 16px;">
						<a href="" class="text-light">Mentions légales</a> - 
						<a href="" class="text-light">Conditions Générales d'Utilisation et de vente</a> - 
						<a href="" class="text-light">Politique de Confidentialité</a> - 
						<a href="" class="text-light">Charte Cookies</a> - 
						<a href="" class="text-light">La rédaction</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
@stop