@extends('layouts.template')
@section('content')

<div class="row mt-4 pt-4 justify-content-md-center">
	<div class="col-md-8 mt-4 pt-4">
		<h2 class="text-center">Add schedule</h2>
	
		<form method="POST" action="/schedules">
			@csrf
		  <div class="mb-3">
		    <label for="teacher" class="form-label">Teacher name:</label>
		    <select class="form-select" aria-label="Default select example" name="teacher" id="teacher">
			    @foreach($users as $user)
			    	<option value="{{$user->id}}">{{$user->name}}</option>
			    @endforeach
		    </select>
		    <div id="teacher" class="form-text">Choose a teacher to schedule</div>
		  </div>
		  <div class="mb-3">
		    <label for="schedDay" class="form-label">Day:</label>
		    <select class="form-select" aria-label="Default select example" name="days" id="days">
			    @foreach($days as $day)
			    	<option value="{{$day}}">{{$day}}</option>
			    @endforeach
		    </select>
		  </div>
		  <div class="mb-3">
		    <label for="timeStart" class="form-label">Starting time:</label>
		    <input type="time" id="startTime" value="07:00" name="startTime" min="09:00" max="18:00" class="form-control" id="timeStart" aria-describedby="timeStart" required>
		    <div id="timeStart" class="form-text">Choose a time to start a subject </div>
		  </div>

		  <div class="mb-3">
		    <label for="timeEnd" class="form-label">Ending time:</label>
		    <input type="time" id="endTime" value="08:00" name="endTime" min="09:00" max="18:00" class="form-control" id="timeEnd" aria-describedby="timeEnd" required>
		    <div id="timeEnd" class="form-text">Choose a time to end a subject </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Create a schedule</button>
		</form>
		
	</div>		
	
</div>

@endsection