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
			<div class="row py-5">
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

					<div class="row mt-5">
						<div class="col-md-10 offset-md-1">
							<div class="row">
								<p class="mx-auto text-center">Vous avez déjà un sur laRoyaleNews ? <a href="">Connectez-vous</a></p>
								<h3 class="mx-auto text-center">Sinon veuillez <strong>créer un compte</strong></h3>
							</div>
						</div>
					</div>
					
					<div class="row mt-5">
						<div class="col-md-10 offset-md-1">
							<div class="row">
								<form method="post" action="" id="singup">
					                {{csrf_field()}}
					              <div class="radio">
					                    <span style="margin-right: 20px;">Civilité: </span>
					                    <label class="radio-inline">
					                      <input type="radio" name="inlineRadioOptions" id="inlineRadio" value="option1"> Madame
					                    </label>
					                    <label class="radio-inline">
					                      <input type="radio" name="inlineRadioOptions" id="inlineRadio" value="option2"> Monsieur
					                    </label>
					                    <small style="margin-left: 20px; color: red;">(Civilité obligatoire)</small>
					              </div>

					                  <div class="row">
					                    <div class="form-group col-sm-6">
					                      <label for="firstname">Prénom</label>
					                      <input type="text" class="form-control" id="firstname" title="first name" placeholder="Votre prénom"><span class="error"></span>
					                    </div>

					                    <div class="form-group col-sm-6">
					                      <label for="surname">Nom</label>
					                      <input type="text" class="form-control" id="surname" title="surname" placeholder="Votre nom"><span class="error"></span>
					                    </div>
					                  </div>
					              <div class="form-group">
					                <label for="email">E-mail</label>
					                <input type="email" class="form-control " id="email" title="email" placeholder="email@mail.fr"><span class="error"></span>
					              </div>

					              <div class="form-group">
					                <div class="">
					                  <label class="pull-left" for="password">Créer un mot de passe</label>
					                  <span class="pull-right" style="font-size: 15px; color: #1abc9c;"><i class="fa fa-eye" id="fa-eye" aria-hidden="true">Afficher</i><i class="fa fa-eye-slash" id="fa-eye-slash" aria-hidden="true" style="display: none;">Cacher</i></span>
					              </div>
					                <input type="password" class="form-control" id="password" title="password" placeholder="Au moins 8 caratères, 1 majuscule, 1 chiffre"><span class="error"></span>
					              </div>

					              <div class="form-group">
					                          <label class="pull-left" for="password">Confirmer mot de passe</label>
					                          <input type="password" class="form-control" id="passwordConfirm" title="password confirm" placeholder="Confirmer mot de passe"><span class="error"></span>
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


					              <button type="submit"  id="singup" class="btn col-sm-8 offset-sm-2 col-8 offset-2 singbg-btn my-4" style="padding: 7px;"><h4>Je m'inscris</h4></button>
					            </form>
							</div>

							<div class="row">
								<div class="col-md-5 ml-auto mt-4">
									<div class="row">
										<a href="" class="btn w-100" style="background: #ffa31a;"><h5 class="text-white font-weight-bold">Continuer</h5></a>
									</div>
								</div>
							</div>

							<!--confirmation page-->
							<div class="row">
								<h3 class="mt-5 mb-4">Choisissez votre mode de paiement</h3>
							</div>
							<div class="row">
								<form action="" method="">
										<div class="custom-control custom-radio mb-4">
										  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="" checked>
										  <label class="custom-control-label" for="customRadio1">
										  	<strong>Carte de crédit</strong>
										  </label>
										</div>

										<div class="custom-control custom-radio mb-4">
										  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="">
										  <label class="custom-control-label" for="customRadio2">
										  	<strong>PayPal</strong>
										  </label>
										</div>

										<div class="custom-control custom-radio mb-4">
										  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="">
										  <label class="custom-control-label" for="customRadio3">
										  	<strong>Mode de paiement local</strong>
										  </label>
										</div>
								</form>
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

	<div class="">
		<div class="col-12 bg-white py-5">
			<div class="row">
				<h3 class="mx-auto text-dark">Pour plus de renseignements</h3>
			</div>
			<div class="row">
				<h2 class="mx-auto my-3"><a href="{{route('members.contacts')}}" class="text-center">Contactez-nous !</a></h2>
			</div>
		</div>
	</div>

	<div class="bg-info py-5 text-light">
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

	<footer class="" style="padding: 10px; background: #074e68;;">
	    <h5 class="text-center mx-auto" style="color: #000;"><strong>© La Royale News 2018</strong></h5>
	</footer>

	<div id="help">
		<div style="cursor: pointer;" id="helpMsg">
			<h5 class="m-0 text bg-danger px-5 py-2" style="border-top-left-radius: 20px;">Besoin d'aide?</h5>
		</div>
		<div style="cursor: pointer; display: none;" id="helpMsgToo">
			<h5 class="m-0 text bg-danger px-5 py-2" style="border-top-left-radius: 20px;">Besoin d'aide?</h5>
		</div>

		<div class="bg-white" id="helpMsgBox" style="border-top-left-radius: 20px;">
			<form>
				<div class="form-group">
					<textarea class="form-control" placeholder="Envoyez un message" rows="4"></textarea>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="{{asset('js/singup.js')}}"></script>
@stop