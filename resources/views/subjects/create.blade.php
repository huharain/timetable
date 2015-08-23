@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					@if ($subject->id)
 						{{ $subject->name }}
					@else
						Create New subject
					@endif
				</div>
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

					@if ($subject->id)
						<form class="form-horizontal" role="form" method="POST" action="{{ route('subjects.update', $subject->id) }}">
						<input type="hidden" name="_method" value="PUT">
					@else
						<form class="form-horizontal" role="form" method="POST" action="{{ route('subjects.store') }}">
					@endif
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Code</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="code" value="{{ $subject->code or old('code') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $subject->name or old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-6">
								<textarea class="form-control" name="description">{{ $subject->description or old('description') }}</textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection