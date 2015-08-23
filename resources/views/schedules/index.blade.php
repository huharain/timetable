@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Your schedules</div>
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

					<a class="btn btn-link" href="{{ route('schedules.create') }}">Edit schedule</a>


							


					<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Teusday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>1</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t1 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>2</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t2 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>3</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t3 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>4</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t4 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>5</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t5 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>6</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t6 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>

            <tr>
                <td>7</td>
             	@for ($x = 1; $x < 7; $x++)
                <td>
                	@foreach ($schedules as $schedule)
                		
                			@if ($schedule->days == $x) <a href="{{ route('lists.show', $schedule->id) }}"> {{ $schedule->t7 }} </a>
                			@endif
						
                	@endforeach
            	</td>
            	@endfor
            </tr>
        </tbody>
    </table>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection