@extends("layout.master")
@section("title","Login Page")
@section("content")
	
	<div class="container">
		<div class="row">
			@if(Session::has("success"))
				<div class="alert alert-success">{{Session::get("success")}}</div>
				@elseif(Session::has("error"))
					<div class="alert alert-danger">{{Session::get("error")}}</div>
			@endif
			<div class="col-md-4 mx-auto mt-5">
				<div class="card">
					<div class="card-header">
						<h2>Login</h2>
					</div>
					<div class="card-body">
						<form action="{{route('user_login')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Write Email">
								@error('email') <p class="text-danger">{{$message}}</p> @enderror
							</div>
							
							<div class="form-group mt-2">
								<label for="password">password</label>
								<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
								@error('password') <p class="text-danger">{{$message}}</p> @enderror
							</div>
							
							<div class="form-group mt-4">
								<input type="submit" class="btn btn-primary w-100" value="Loggin">
							</div>
						</form>
							<p class="text-center mt-2">Create New Account? <a href="{{route('register')}}" class="text-decoration-none">Signup</a></p>
					</div>

				</div>
			</div>
		</div>				
	</div>


@endsection
