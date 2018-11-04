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
			<div class="row">
				<div class="col-lg-7">
					<div class="row">
						
					</div>
				</div>

				<div class="col-lg-5">
					<div class="row">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>