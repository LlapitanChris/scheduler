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
                'timeStarts' => '10:00:00',
                'timeEnds' => '12:00:00',
                'timeEnds' => '12:00:00',
                'level_id' => 1,
                'program_id' => 1,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-02 00:18:44',
                'updated_at' => '2021-04-02 00:18:44',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'day' => 'Wednesday',
                'timeStarts' => '07:00:00',
                'timeEnds' => '09:00:00',
                'level_id' => 1,
                'program_id' => 1,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-02 00:20:00',
                'updated_at' => '2021-04-02 00:20:00',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'day' => 'Wednesday',
                'timeStarts' => '16:00:00',
                'timeEnds' => '18:00:00',
                'level_id' => 1,
                'program_id' => 1,
                'slots' => 20,
                'deleted_at' => NULL,
                'created_at' => '2021-04-02 00:20:00',
                'updated_at' => '2021-04-02 00:20:00',
            ),
        ));
        
        
    }
}