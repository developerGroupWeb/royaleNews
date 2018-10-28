@extends('templates.template')

@section('content')

<div class="contentAbo">
	<div class="contentAbo-home">
		<nav class="navbar navbar-expand-sm px-5 shadow bg-light">
			<a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
				<h3 class="font-weight-bold" style="color: #000;">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
				</h3>
		    </a>
		    <div class="collapse navbar-collapse">
			    <ul class="navbar-nav ml-auto">
			      	<li class="nav-item">
			      	  	<a href="" class="nav-link btn px-4 bg-warning" style=" color: #000;"><strong>Votre compte</strong>
			      	  	</a>
			      	</li>
			    </ul>
		    </div>
		</nav>

	</div>
</div>

@stop