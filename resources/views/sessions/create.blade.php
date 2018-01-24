@extends ('layout')

@section('content')
	<div class="col-sm-8">
		<h1>Register</h1>
		<form method="POST" action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>

			<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="text" class="form-control" id="email" name="email" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password:</label>
		    <input type="text" class="form-control" id="password" name="password" required>
		  </div>

		  <button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
@endsection