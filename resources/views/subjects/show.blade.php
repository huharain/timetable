@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Your subjects</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if (Session::get('flash_success'))
						<div class="alert alert-success fade in m-b-15">
							<strong>Success!</strong>
							{!! Session::get('flash_success') !!}
							<span class="close" data-dismiss="alert">×</span>
						</div>
					@endif

						<ul>
							<li>Subject code : {{ $subject->code }}</li>
							<li>Subject name : {{ $subject->name }}</li>
							<li>Description : {{ $subject->description }}</li>
							<li>Created at : {{ $subject->created_at }}</li>
							<li>Updated at : {{ $subject->updated_at }}</li>
						</ul>




				</div>
			</div>
		</div>
	</div>
</div>
@endsection



