@extends("layout.master")
@section("title","Register Page")

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
						<h2>Register</h2>
					</div>
					<div class="card-body">
						<form action="{{route('register_user')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter The Username">
								@error('username') <p class="text-danger">{{$message}}</p> @enderror
							</div>
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
								<input type="submit" class="btn btn-primary w-100" value="Register">
							</div>
						</form>
							<p class="text-center mt-2">Already Register <a href="{{route('login')}}" class="text-decoration-none">Login</a></p>
					</div>

				</div>
			</div>
		</div>				
	</div>


@endsection
