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

					<a class="btn btn-link" href="{{ route('subjects.create') }}">New subject</a>

					<ul>
						<!-- 	@forelse ($subjects as $subject)
								<li>{{ $subject }}</li>
							@empty
								<li>You don't have any subjects saved.</li>
							@endforelse
						 -->
					<div class="table-responsive">
						<table class="table">
							@if (count($subjects) > 0)
								@foreach ($subjects as $subject) 
								<tr>
									<td width=80%>
									<li>
										<a href="{{ route('subjects.show', $subject->id) }}">{{ $subject->name }}</a></li>
									</td>
									<td>	<a href="{{ route('subjects.edit', $subject->id) }}">Edit</a> </td>
									<td>	<a href="{{ route('subjects.delete', $subject->id) }}">Delete</a> </td>
								</tr>
								@endforeach
							@else
								<li>You don't have any subjects saved.</li>
							@endif

						</ul>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection