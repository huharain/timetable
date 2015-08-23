<?php
use App\Http\Controllers\SubjectsController;
?>

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
                <td>
                	<select name="time1">
                		<option selected>
                				@if($schedule->days == 1) {{$schedule-t1}}
                				@endif
                		    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
                 <td>
                	<select name="time1">
                		<option>    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
                 <td>
                	<select name="time1">
                		<option>    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
                 <td>
                	<select name="time1">
                		<option>    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
                 <td>
                	<select name="time1">
                		<option>    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
                 <td>
                	<select name="time1">
                		<option>    </option>
                		<option>NULL</option>
                		<option>NULL</option>
                		<option>NULL</option>
                	</select>
                 </td>
            </tr>

            <tr>
                <td>2</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td>3</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td>4</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td>5</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td>6</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

            <tr>
                <td>7</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
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