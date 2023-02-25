@section("title","Dashboard")
@extends("project.header")
@section("content")
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				@if(Session::has("success"))
					<div class="alert alert-success">{{Session::get("success")}}</div>
					@elseif(Session::has("error"))
						<div class="alert alert-danger">{{Session::get("error")}}</div>
				@endif
				<div class="card">
					<div class="card-header">
						User Record
					</div>
					<div class="card-body">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Username</th>
									<th>Email</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								
									<tr>
										<td>{{Auth::user()->username}}</td>
										<td>{{Auth::user()->email}}</td>
										<td>{{Auth::user()->created_at}}</td>
										
									</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
