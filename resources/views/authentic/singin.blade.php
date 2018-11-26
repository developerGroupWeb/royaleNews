@extends('templates.template')

@section('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="">
	<nav class="navbar navbar-expand-sm fixed-top px-5 shadow" style="background: #000000;">>
		<a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
			<h3 class="font-weight-bold">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
			</h3>
	    </a>
	    <div class="collapse navbar-collapse">
		    <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
		      	  	<a href="{{route('members.abonnement')}}" class="nav-link btn px-4 bg-warning" style=" color: #000;"><strong>ABONNEZ-VOUS</strong>
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
				<h1 class="text-center mx-auto mb-5" style="color: #333;">Connectez-vous</h1>

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

					<div class="alert alert-danger" id="alert" style="display: none"></div>


					<form method="post" action="" id="singin">

						{{csrf_field()}}

					  <div class="form-group row">
					    <label for="email">E-mail</label>
					    <input type="email" name="email"  class="form-control" id="email" title="email" placeholder="email@mail.fr"><span class="error"></span>
					  </div>

					  <div class="form-group row">
					  	<div class="col-12">
					  		<div class="row">
						    	<label class="" for="password">Mot de passe</label>
						    	<span class="ml-auto" style="font-size: 15px; color: #1abc9c;">
						    		<i class="fa fa-eye" id="fa-eye" aria-hidden="true">Afficher</i>
						    		<i class="fa fa-eye-slash" id="fa-eye-slash" aria-hidden="true" style="display: none;">Cacher</i>
						    	</span>
						    </div>
						</div>
					    <input type="password" name="password" class="form-control" id="password" title="password" placeholder="Votre mot de passe"><span class="error"></span>
					  </div>

					  <div class="">
						  <div class="checkbox">
						    <label class="pull-left">
						      <input type="checkbox" name="remember" checked value="1" id="remember"> Rester connecter
						    </label>
						  </div>
						  <div class="pull-right forget-password"><a href="" style="color: #333;">Mot de passe oublié?</a></div>
					  </div>
					  
					  <div class="singin" style="margin-top: 25px;">
					  	<button type="submit"  class="btn col-sm-8 offset-sm-2 col-8 offset-2 mt-5 singinButton" disabled="disabled" style="padding: 12px;"><h4>Se connecter</h4></button>
					  </div>
					</form>
				</div>

				<div class="col-sm-12 mt-5">
					<hr>
					<p class="col-12">Pas encore inscrit(e) ?</p>
					<a href="{{route('singup')}}" class="btn col-sm-10 offset-sm-1 offset-0 singbg-btn py-2 mt-3"><h3 class="singup text-white">Créer un compte</h3></a>
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

<script>

    // Ajax----------------------------------------------------

    $(document).on('submit', '#singin', function (event) {

        event.preventDefault();

        //alert($(this).serialize())
        $.ajax({

            url: "{{ route('singin.create') }}",
            method: "POST",
            data: $(this).serialize(),
            success: function (result) {

                if(result != ''){

                    $('#alert').html(result).show();

                }else{

                    window.location = "{{route('members.checkoutStandard')}}";
                }
            }

        });

    });

</script>
<script src="{{asset('js/singin.js')}}"></script>

@stop