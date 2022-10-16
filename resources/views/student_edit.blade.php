@extends('layout.layout') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">Student Management System</h1>
			<div class="text-left"><a href="/student" class="btn btn-outline-primary">Student List</a></div>

			<form id="add-frm" method="POST" action="{{ route('student.edit', ["id" => $student->id]) }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="title">Fullname</label>
					<div>
						<input type="text" id="fullname" class="form-control mb-4" name="fullname"
							placeholder="Enter fullname" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Birthday</label>
					<div>
						<input type="date" id="birthday" class="form-control mb-4" name="birthday"
							placeholder="Enter birthday" rows="" required></textarea>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Address</label>
					<div>
						<input type="text" id="address" class="form-control mb-4" name="address"
							placeholder="Enter address" required>
					</div>
				</div>
				@csrf
                @method('PUT')
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Edit Info</button></div>
			</form>
		</div>
	</div>
</div>
@endsection