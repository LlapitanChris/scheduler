<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schedules')->delete();
        
        \DB::table('schedules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'day' => 'Monday',
                'timeStarts' => '12:00:00',
                'timeEnds' => '13:00:00',
                'level_id' => 4,
                'program_id' => 2,
                'batch_id' => 3,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:03:20',
                'updated_at' => '2021-04-15 17:03:20',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'day' => 'Tuesday',
                'timeStarts' => '15:00:00',
                'timeEnds' => '16:00:00',
                'level_id' => 4,
                'program_id' => 2,
                'batch_id' => 3,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:03:20',
                'updated_at' => '2021-04-15 17:03:20',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'day' => 'Wednesday',
                'timeStarts' => '12:00:00',
                'timeEnds' => '13:00:00',
                'level_id' => 4,
                'program_id' => 2,
                'batch_id' => 3,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:03:20',
                'updated_at' => '2021-04-15 17:03:20',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'day' => 'Thursday',
                'timeStarts' => '15:00:00',
                'timeEnds' => '16:00:00',
                'level_id' => 4,
                'program_id' => 2,
                'batch_id' => 3,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:03:20',
                'updated_at' => '2021-04-15 17:03:20',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'day' => 'Monday, Wednesday, Friday',
                'timeStarts' => '13:00:00',
                'timeEnds' => '14:00:00',
                'level_id' => 6,
                'program_id' => 6,
                'batch_id' => 4,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:39:06',
                'updated_at' => '2021-04-15 17:39:06',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'day' => 'Tuesday, Thursday',
                'timeStarts' => '15:00:00',
                'timeEnds' => '16:00:00',
                'level_id' => 6,
                'program_id' => 6,
                'batch_id' => 4,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-15 17:39:06',
                'updated_at' => '2021-04-15 17:39:06',
            ),
        ));
        
        
    }
}