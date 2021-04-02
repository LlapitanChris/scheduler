<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
    public function showForm(){
    	$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    	$users = User::all();
    	return view('schedules.addschedule', compact('days', 'users'));
    }

    public function addSchedule(Request $request){
    	//check if teacher is already at the schedules - done
    	//check if teacher schedule day is already added - done
    	//check if teacher schedule day time is already existing - done
    	//check if the startTime == endTime , must be atleast 1 hr for the schedule - done
    	function createSchedule($request){ 
    		if($request->startTime == $request->endTime){
		    		echo "Cant't create schedule that has the same Ending Time. Schedule must be atleast 1 hr!";
		    } else {
    			$newSched = new Schedule;
		    	$newSched->user_id = $request->teacher;
		    	$newSched->day = $request->days;
		    	$newSched->timeStarts = $request->startTime;
		    	$newSched->timeEnds = $request->endTime;
		    	$newSched->save();
		    	return view('schedules.addschedule');
    		}
    	}

    	$existingSchedules = Schedule::all();
    	$extractedScheds = [];
    	//converting array from Eloquent to an ordinary array, para ma 'array_filter' natin then lahat ng ma iterate na arrays from Eloquent ipu-push natin sa array literal ni $extractedScheds
    	foreach ($existingSchedules as $schedules) {
    		// dd($schedules);
    		$extractedScheds[] = $schedules;
    	}

    	$teacherExists = array_filter($extractedScheds, function($schedule) use ($request){
    		return $schedule['user_id'] == $request->teacher; //should be compared to $request->teacher
    	});

    	if (count($teacherExists) > 0 ) { //if si $teacherExists ay greater than 0, meaning may nag exist ng teacher sa table ng schedules. Lol
    		//check naman natin kung existing na yung day (monday-friday) sa schedule ni teacher
    		$existingDayAndTime = [];
    		//converting array from Eloquent to an ordinary array, para ma 'array_filter' natin then lahat ng ma iterate na arrays from Eloquent ipu-push natin sa array literal ni $existingDayAndTime
    		foreach($teacherExists as $days) {
    			//Nagcreate ng panibagong array na nagcocontain ang ng Schedule ni teacher
    			$existingDayAndTime[$days['day']][] = [ 'timeStarts' => $days['timeStarts'], 'timeEnds' => $days['timeEnds']];
    		}
		  	//kunin yung keys from the $existingDayAndTime then compare sa days na ininput ng admin which is si $request->days
		    $daysExists = array_key_exists($request->days, $existingDayAndTime);

		    //kung existing yung days sa schedule ni teacher, check naman natin ung time (medj mahirap yung part na to, kasi dalawa ichecheck natin, yung Starting time and Ending time ng subject)
		    // dd($daysExists);
		    if($daysExists === true) {
		   
		    	//check naman natin kung Starting time na ininput ni admin ay existing dun sa day na meron si teacher
		    	$timeStartsExists = array_filter($existingDayAndTime[$request->days], function($timeStart) use ($request){
		    		return  $timeStart['timeStarts'] == "$request->startTime:00";
		    	});

		    	//if may timeStartsExists sa schedule day ni teacher, di tayo pwedeng mag create ng schedule.
		    	if (count($timeStartsExists) > 0) {
		    		echo "can't create schedule, start time already created for $request->days";
		    	} elseif (count($timeStartsExists) == 0) {
		    		createSchedule($request);
		    	}
		    	// dd($timeStartsExists);
		    } else { //else kung di naman nag eexist pa ung day, pwede na tayo gumawa ng schedule
		    	createSchedule($request);
		    }

    	} else {
    		createSchedule($request);
    	}
    }

    public function dashboard(){
    	$availableSchedules = Schedule::all();

    	return view('dashboard', compact('availableSchedules'));
    }
}
