@extends("layout.master")
@section("navbar")
<nav class="navbar navbar-expand-lg bg-light px-5">
  	<div class="container-fluid">
    	<a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
	    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
	      	<ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
		        <li class="nav-item mt-2">
		         	@if(Auth::check())
		         		{{Auth::user()->username}}
		         	@endif
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{route('loggout')}}">Loggout</a>
		        </li> 
	      	</ul>
	    </div>
  	</div>
</nav>
@endsection
