<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Models\Schedule;
use App\Models\Program;
use App\Models\Level;
use App\Models\User;

class ScheduleController extends Controller
{
    public function showForm(){
    	$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        $levels = Level::all();
        $programs = Program::all();
    	$users = User::all();
    	return view('schedules.addschedule', compact('days', 'users', 'levels', 'programs'));
    }

    public function addSchedule(Request $request){
    	//check if teacher is already at the schedules - done
    	//check if teacher schedule day is already added - done
    	//check if teacher schedule day time is already existing - done
    	//check if the startTime == endTime , must be atleast 1 hr for the schedule - done
    	function createSchedule($request){ 
            $convertStartTime = strtotime($request->startTime);
            $convertEndTime = strtotime($request->endTime);
            // dd(date("H:i", $convertEndTime) <= date("H:i", $convertStartTime));
    		if( $convertEndTime == $convertStartTime){
		    	echo "Cant't create schedule that has the same Ending Time. Schedule must be atleast 1 hr!";
		    } elseif(date("H:i", $convertEndTime) <= date("H:i", $convertStartTime)){
                echo "Cant't create schedule that has the greater End time than Start time. Schedule must be atleast 1 hr!";
            }
            else {
                foreach($request->days as $index => $day){
        			$newSched = new Schedule;
    		    	$newSched->user_id = $request->teacher;
    		    	$newSched->day = $day;
    		    	$newSched->timeStarts = date("H:i", $convertStartTime);
    		    	$newSched->timeEnds =  date("H:i", $convertEndTime);
                    $newSched->level_id = $request->level;
                    $newSched->program_id = $request->program;
    		    	$newSched->save();
                }
    		    return view('schedules.addschedule');
    		}
    	}

        function intersectSchedule(array $newSched, array $existingSched, $request){
            $intersectionResult = [];
            $intersected = array_intersect_key($newSched, $existingSched); //for new sched lang to
            foreach($intersected as $index1 => $values){
                foreach($values as $index2 => $time){
                    $intersectionResult[$index1]= array_intersect($existingSched[$index1][$index2], $time);

                }
            }

            return $intersectionResult;
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

            $newDaysAndTime = [];
            //para naman to sa na tick na days ni admin 
            if(is_array($request->days)){
                foreach($request->days as $days){
                    $newDaysAndTime[$days][]= [ 'timeStarts' => "$request->startTime:00", 'timeEnds' => "$request->endTime:00"];
                }
            } else {
                echo "Please tick days before creating schedule!";
            }
          
            //pag intersect natin ung na tick na araw ni admin sa existing days and times ni teacher
            $intersectionResult = intersectSchedule($newDaysAndTime, $existingDayAndTime, $request);

            $intersectedTime = [];
            foreach($intersectionResult as $day => $time){
                if(array_key_exists('timeStarts', $time)){
                   $intersectedTime[$day] = $time['timeStarts'];
                }
            }

            if(count($intersectedTime) > 0) {
                foreach($intersectedTime as $day => $time){
                    echo "Can't create schedule, start time $time already created for $day";
                    echo "<br>";
                }
            } else {
                createSchedule($request);

            }

            // dd($intersectedTime);
            
		  	//kunin yung keys from the $existingDayAndTime then compare sa days na ininput ng admin which is si $request->days
		    // $daysExists = array_key_exists($request->days, $existingDayAndTime); -> di na pwede kasi array na ichecheck natin

		    //kung existing yung days sa schedule ni teacher, check naman natin ung time (medj mahirap yung part na to, kasi dalawa ichecheck natin, yung Starting time and Ending time ng subject)
		    // dd($daysExists);
		    // if($daysExists === true) {
		   
		    // 	//check naman natin kung Starting time na ininput ni admin ay existing dun sa day na meron si teacher
		    // 	$timeStartsExists = array_filter($existingDayAndTime[$request->days], function($timeStart) use ($request){
		    // 		return  $timeStart['timeStarts'] == "$request->startTime:00";
		    // 	});

		    // 	//if may timeStartsExists sa schedule day ni teacher, di tayo pwedeng mag create ng schedule.
		    // 	if (count($timeStartsExists) > 0) {
		    // 		echo "can't create schedule, start time already created for $request->days";
		    // 	} elseif (count($timeStartsExists) == 0) {
		    // 		createSchedule($request);
		    // 	}
		    // 	// dd($timeStartsExists);
		    // } else { //else kung di naman nag eexist pa ung day, pwede na tayo gumawa ng schedule
		    // 	createSchedule($request);
		    // }

    	} else {
    		createSchedule($request);
    	}
    }

    public function dashboard(Request $request){
        // dd($request->search);
        $availableSchedules = [];
        if($request->search === null){
        	$availableSchedules = Schedule::all();

        } else{
            $availableSchedules = Schedule::where('day', '=', $request->search)
            ->orWhere('timeStarts', '=', $request->search)
            ->orWhere('timeEnds', '=', $request->search)
            ->orWhere(function($query){
                $query->select('levelName')->from('levels')->whereColumn('levels.id', 'level_id');
            }, $request->search)
            ->orWhere(function($query){
                $query->select('programName')->from('programs')->whereColumn('programs.id', 'program_id');
            }, $request->search)
            ->orWhere(function($query){
                $query->select('name')->from('users')->whereColumn('users.id', 'user_id');
            }, $request->search)
            ->get();
        }

    	return view('dashboard', compact('availableSchedules'));
    }
}
