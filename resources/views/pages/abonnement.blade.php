@extends('templates.template')

@section('content')

<div class="contentAbo">
	<div class="contentAbo-home title-label">
		<nav class="navbar navbar-expand-sm px-3 shadow" style="background: #ecf2f4;">
			<div class="title-mo">
				<a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
					<h3 class="font-weight-bold" style="color: #000;">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
					</h3>
			    </a>
			</div>
		    <div class="collapse navbar-collapse">
			    <ul class="navbar-nav ml-auto">
			    	<li class="nav-item mr-4">
			      	  	<a href="{{route('members.contacts')}}" class="nav-link btn px-5" style=" color: #000; background: #589; padding: 11px 11px;"><strong>Une question ?</strong>
			      	  	</a>
			      	</li>
			      	<li class="nav-item">
			      	  	<a href="{{route('authentic', ['login' => 'singin'])}}" class="nav-link btn px-4" style="background: #000; color: #fff;"><img src="{{asset('images/user.svg')}}" style="width: 30px; height:
		      	  	30px; margin-right: 10px;"> <strong>Votre compte</strong>
			      	  	</a>
			      	</li>
			    </ul>
		    </div>
		</nav>
		
		<div class="container-fluid pt-5">
			<div class="row" style="">
				<div class="col-md-8 bg-danger pt-5 pb-4 order-last order-md-first" style="border-top-right-radius: 50px;">
					<div class="row">
						<div class="col-md-8 offset-md-2 text-light pb-4">
							<h2 class="mx-auto text-center">TOUTE L'ACTUALITÉ ADAPTÉE À VOTRE BESOIN.</h2>
							<h5 class="mx-auto text-center">La Royale Presse, une experience unique à vivre au quotidien.</h5>
							<h5 class="px-3 mx-auto text-center">Un accès illimité pour mieux comprendre l'actulité.</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 offset-md-1 p-4" style="border-top-right-radius: 50px; background: #ecf2f4">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<img src="{{asset('images/visuel_journal_PDF_PAN.png')}}" class="img-fluid">

								<ul>
									<li>Accédez en illimité à <strong>l'intégralité des contenus</strong> sur tous vos écrans</li>
									<li>Téléchargez <strong>votre journal en version numérique dès 7H</strong></li>
									<li>Profitez d'une navigation <strong>sans publicité</strong></li>
									<li>Bénéficiez d'un <strong>espace privilège</strong> réservé uniquement aux abonnés </li>
								</ul>
							</div>
						</div>

						<div class="col-md-6">
							<div class="bg-warning mt-4 p-2" style="border-radius: 20px;">
								<div class="mx-auto text-center">
									<h2 class="text-white font-weight-bold">ABONNEZ-VOUS</h2>
									<h3>Profitez de notre offre de bienvenue</h3>
									<h5 class="font-weight-bold">1 mois gratuit</h5>
								</div>

								<form action="" method="post" id="" class="col-12">
									<div class="row">
										<div class="form-group col-lg-7 col-sm-12">
											<div class="row">
												<input type="email" name="email" placeholder="Insérez ici votre email..." class="form-control" style="padding: 22px;">
											</div>
										</div>

										<div class="col-lg-5 col-sm-6 offset-sm-4 offset-md-3 offset-lg-0 w-100">
											<div class="">
												<input type="submit" id="" name="" value="JE M'ABONNE" class="btn row text-light font-weight-bold" style="font-size: 20px; background: #000;">
											</div>
										</div>
									</div>
								</form>
								<p class="text-center font-weight-bold">* sans engagement</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<h1 class="text-center mx-auto mt-5">DÉCOUVREZ NOS OFFRES D'ABONNEMENT</h1>
		</div>
		<hr class="row col-4 offset-4 bg-dark mb-5">

		<div class="col-lg-10 offset-lg-1">
			<div class="row">
				<div class="col-md-5 border mb-4">
					<div class="row">
						<div class="col-12 bg-dark py-4 rounded-top">
							<div class="row">
								<div class="mx-auto"><img src="{{asset('images/multi-device-black-2.png')}}"></div>
							</div>
							<div class="row">
								<h2 class="text-center mx-auto text-white my-2">Standard</h2>
							</div>
							<div class="mx-auto text-center mb-4 text-white">Web + Mobile + Tablette</div>
							<h4 class="font-weight-bold mx-auto mb-0 text-center text-white" id="xbar"><span class="mr-4">2$</span> 0.99$</h4>
							<div class="mx-auto text-center text-light">Par semaine pour trois mois</div>
						</div>

						<div class="card-body">
							<ul class="" style="padding-top: 100px;">
								<li>Accédez en illimité à <strong>l'intégralité des contenus</strong> sur tous vos écrans</li>
								<li>Téléchargez <strong>votre journal en version numérique dès 7H</strong></li>
								<li>Profitez d'une navigation <strong>sans publicité</strong></li>
								<li>Bénéficiez d'un <strong>espace privilège</strong> réservé uniquement aux abonnés </li>
								<li>Intégrer le club des lecteurs de la RoyaleNews</li>
								<li>Diponibilité de toutes les archives de la RoyaleNews</li>
							</ul>

							<div class="text-center"><a href="" class="btn bg-warning font-weight-bold px-4 py-2" style="color: #000;">JE M'ABONNE</a></div>
						</div>
					</div>
				</div>

				<div class="col-md-2"></div>

				<div class="col-md-5 border mb-4">
					<div class="row">
						<div class="col-12 bg-info py-4 rounded-top">
							<div class="row">
								<div class="mx-auto"><img src="{{asset('images/multi-device-black-2.png')}}"></div>
							</div>
							<div class="row">
								<h2 class="text-center mx-auto text-white my-2">Premium</h2>
							</div>
							<div class="mx-auto text-center mb-4 text-white">Web + Mobile + Tablette + Magazine</div>
							<h4 class="font-weight-bold mx-auto mb-0 text-center text-white" id="xbar"><span class="mr-4">3$</span> 1.99$</h4>
							<div class="mx-auto text-center text-light">Par semaine pour trois mois</div>
						</div>

						<div class="card-body">
							<ul class="pt-5">
								<li>Recevez en exclusité le magasine La RoyaleMAG chaque fin du mois</li>
								<li>Accédez en illimité à <strong>l'intégralité des contenus</strong> sur tous vos écrans</li>
								<li>Téléchargez <strong>votre journal en version numérique dès 7H</strong></li>
								<li>Profitez d'une navigation <strong>sans publicité</strong></li>
								<li>Bénéficiez d'un <strong>espace privilège</strong> réservé uniquement aux abonnés</li>
								<li>Intégrer le club des lecteurs de la RoyaleNews</li>
								<li>Diponibilité de toutes les archives de la RoyaleNews</li>
							</ul>

							<div class="text-center"><a href="" class="btn bg-warning font-weight-bold px-4 py-2" style="color: #000;">JE M'ABONNE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<h1 class="text-center mx-auto mt-5">POURQUOI NOS CLIENTS <strong>SE SONT ABONNÉS ?</strong></h1>
		</div>

		<hr class="row col-4 offset-4 bg-dark mb-5">


		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-1 col-lg-3 offset-lg-0 py-4 mb-4">
						<div class="row mx-4 rounded" style="background: #ecf2f4;">
							<img src="{{asset('images/order-step-1.png')}}" class="mx-auto">
						</div>
						<div class="row">
							<h4 class="text-center mx-auto mt-3 px-3">Accessible partout</h4>
						</div>
				</div>

				<div class="col-md-4 offset-md-1 col-lg-3 offset-lg-0 py-4 mb-4">
						<div class="row mx-4 rounded" style="background: #ecf2f4;">
							<img src="{{asset('images/order-step-2.png')}}" class="mx-auto">
						</div>
						<div class="row">
							<h4 class="text-center mx-auto mt-3 px-3 ">Moins cher qu’en kiosque</h4>
						</div>
				</div>

				<div class="col-md-4 offset-md-1 col-lg-3 offset-lg-0  py-4 mb-4">
						<div class="row mx-4 rounded" style="background: #ecf2f4;">
							<img src="{{asset('images/order-step-3.png')}}" class="mx-auto">
						</div>
						<div class="row">
							<h4 class="text-center mx-auto mt-3 px-3">Service clients dédié</h4>
						</div>
				</div>

				<div class="col-md-4 offset-md-1 col-lg-3 offset-lg-0 py-4 mb-4">
						<div class="row mx-4 rounded" style="background: #ecf2f4;">
							<img src="{{asset('images/order-step-4.png')}}" class="mx-auto">
						</div>
						<div class="row">
							<h4 class="text-center mx-auto mt-3 px-3">Une lecture optimisée</h4>
						</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 bg-light py-5">
				<div class="row">
					<h3 class="mx-auto text-dark">Pour plus de renseignements</h3>
				</div>
				<div class="row">
					<h2 class="mx-auto my-3"><a href="{{route('members.contacts')}}" class="text-center">Contactez-nous !</a></h2>
				</div>
			</div>
		</div>

		<div class="row bg-info py-5 text-light">
			<div class="container">
				<div class="row">
					<div class="col-md-3 mb-4">
						<div class="row">
							<div class="mx-auto"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>
						</div>
						<div class="row">
					        <div class="mx-auto">
					          <h4 class="text-center">Une question ?<span class="d-none d-lg-block">contact@laroyalenews.com</span> <span class="d-block d-lg-none">Contacter nous!</span></h4>
					        </div>
						</div>
					</div>

					<div class="col-md-3 mb-4">
						<div class="row">
							<div class="mx-auto"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></div>
						</div>
						<div class="row">
					        <div class="text-center mx-auto">
					          <h4>Paiement <br> Sécurisé</h4>
					        </div>
						</div>
					</div>

					<div class="col-md-3 mb-4">
						<div class="row">
							<div class="mx-auto"><i class="fa fa-gift fa-2x" aria-hidden="true"></i></div>
						</div>
						<div class="row">
					        <div class="text-center mx-auto">
					          <h4>Offre <br>exceptionnelle</h4>
					        </div>
						</div>
					</div>

					<div class="col-md-3 mb-4">
						<div class="row">
							<div class="mx-auto"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i></div>
						</div>
						<div class="row">
					        <div class="text-center mx-auto">
					          <h4>Sans <br>engagement</h4>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="row" style="padding: 10px; background: #074e68;;">
		    <h5 class="text-center mx-auto" style="color: #000;"><strong>© La Royale News 2018</strong></h5>
		</footer>
	</div>
</div>

@stop