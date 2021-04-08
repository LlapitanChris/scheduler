@extends('layouts.template')
@section('content')

<div class="row mt-4 pt-4 justify-content-md-center">
	<div class="col-md-8 mt-4 pt-4">
		<h2 class="text-center">Add schedule (Different dates with different start and end time)</h2>
	
		<form method="POST" action="/schedules/diffdaystime">
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
		    <label for="teacher" class="form-label">Level Name:</label>
		    <select class="form-select" aria-label="Default select example" name="level" id="teacher">
			    @foreach($levels as $level)
			    	<option value="{{$level->id}}"> {{$level->levelNo}} - {{$level->levelName}}</option>
			    @endforeach
		    </select>
		    <div id="teacher" class="form-text">Choose a level to schedule</div>
		  </div>
		  <div class="mb-3">
		    <label for="teacher" class="form-label">Program name:</label>
		    <select class="form-select" aria-label="Default select example" name="program" id="program">
			    @foreach($programs as $program)
			    	<option value="{{$program->id}}">{{$program->programName}}</option>
			    @endforeach
		    </select>
		    <div id="teacher" class="form-text.">Choose a program to schedule</div>
		  </div>
		  <div class="row justify-content-md-center pr-4 pl-4">  	
		  	@foreach($days as $day)
			  <div class="form-check col-md-4">
			    <label for="schedDay" class="form-label">{{$day}}</label>
			    <input class="form-check-input" name="days[]" type="checkbox" value="{{$day}}">
			    <input class="form-control" name="time[{{$day}}][startTime]" type="time"  min="09:00" max="18:00">
			    <input class="form-control" name="time[{{$day}}][endTime]" type="time"  min="09:00" max="18:00">

			  </div>
		    @endforeach
		  </div>

		  <button type="submit" class="btn btn-primary">Create a schedule</button>
		</form>
		
	</div>		
	
</div>

@endsection