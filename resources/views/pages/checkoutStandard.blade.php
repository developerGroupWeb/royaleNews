@extends('templates.template')

@section('content')

<div class="">
	<div class="">
		<nav class="navbar navbar-expand-sm px-3 shadow" style="background: #ecf2f4;">
			<div class="title-mo">
				<a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
					<h3 class="font-weight-bold" style="color: #000;">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
					</h3>
			    </a>
			</div>
		    <div class="collapse navbar-collapse">
			    <ul class="navbar-nav ml-auto">
			      	<li class="nav-item">
			      	  	<a href="{{route('authentic', ['login' => 'singin'])}}" class="nav-link btn px-4" style="background: #000; color: #fff;"><img src="{{asset('images/user.svg')}}" style="width: 30px; height:
		      	  	30px; margin-right: 10px;"> <strong>Espace abonné</strong>
			      	  	</a>
			      	</li>
			    </ul>
		    </div>
		</nav>
	</div>

	<div class="bg-light">
		<div class="container">
			<div class="row pt-5">
				<div class="col-md-7 col-lg-8">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="row">
								<div class="">
									<div style="background: #ffa31a; padding: 10px 17px; border-radius: 100px;" class="font-weight-bold text-white">1</div>
								</div>
								<div class="col">
									<hr class="mb-0 row" style=" height: 2px; background: #a6a6a6;">
								</div>
								<div class="">
									<div style="background: #a6a6a6; padding: 10px 17px; border-radius: 100px;" class="font-weight-bold text-white">2</div>
								</div>
								<div class="col">
									<hr class="mb-0 row" style=" height: 2px; background: #a6a6a6;">
								</div>
								<div class="">
									<div style="background: #a6a6a6; padding: 10px 17px; border-radius: 100px;" class="font-weight-bold text-white">3</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="row">
								<div class="col">
									<div class="row"> Identification</div>
								</div>
								<div class="col">
									<div class="row">
										<div class="mx-auto">Paiement</div>
									</div>
								</div>
								<div class="col">
									<div class="row">
										<div class="ml-auto">Confirmation</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5 col-lg-4 bg-white shadow p-4">
					<div class="row" style="text-transform: uppercase;">
						<h4 class="m-0 mx-auto">Récapitulatif de</h4>
					</div>
					<div class="row">
						<h4 class="m-0 text-center mx-auto"><strong>votre commande</strong></h4>
						<hr class="w-75 bg-dark">
					</div>

					<div class="row">
						<img src="{{asset('images/visuel_journal_PDF_PAN.png')}}" class="img-fluid mx-auto">
					</div>

					<div class="row">
						<h4 class="mx-auto font-weight-bold">La Royale News</h4>
					</div>
					<div class="row">
						<h5 class="mx-auto">web - smartphone - tablette</h5>
					</div>
					<div class="row">
						<div class="col-sm-8 offset-sm-2">
							<form class="" action="" method="">
								<label class="radio-inline mt-3 w-100 px-3 py-1 rounded" style="background: #000;">
			                      <input type="radio" checked="" name="inlineRadioOptions" id="inlineRadio" value="option1"> <span class="text-white font-weight-bold" style="font-size: 20px;">1 mois gratuit</span>
			                      <div class="row">
			                      	<h3 class="text-center text-danger mx-auto font-weight-bold m-0">0$</h3>
			                      </div>
			                    </label>
							</form>
						</div>
					</div>

					<div class="row">
						<h6 class="mx-auto text-center">* Sans engagement</h6>
					</div>
					<div class="row">
						<h6 class="mx-auto text-center">Annulez votre abonnement à tout moment.</h6>
					</div>

					<div class="row">
						<div class="col-sm-10 offset-sm-1 p-3" style="background: #cce0ff;">
							<div class="row">
								<h4 class="px-3">Vos avantages abonné : </h4>
							</div>
							<div class="row">
								<ul class="">
									<li>Accédez en illimité à <strong>l'intégralité des contenus</strong> sur tous vos écrans</li>
									<li>Téléchargez <strong>votre journal en version numérique dès 6H</strong></li>
									<li>Profitez d'une navigation <strong>sans publicité</strong></li>
									<li>Bénéficiez d'un <strong>espace privilège</strong> réservé uniquement aux abonnés </li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row mb-5">
						<div class="col-sm-10 offset-sm-1 my-3">
							<div class="row">
								<div class="col-6">
									<div class="row">
										<h3 class="font-weight-bold">Total</h3>
									</div>
								</div>

								<div class="col-6">
									<div class="row">
										<h3 class="font-weight-bold text-danger ml-auto">0$</h3>
									</div>
								</div>
							</div>
							
							<hr class="row bg-dark my-0" style="height: 2px;">
						</div>
					</div>

					<div class="row">
						<a class="mx-auto text-center" href="">Voir les autres offres d'abonnement</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>