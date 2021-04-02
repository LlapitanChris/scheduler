<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subjectName' => 'Math 5',
                'created_at' => '2021-04-02 00:16:04',
                'updated_at' => '2021-04-02 00:16:04',
            ),
            1 => 
            array (
                'id' => 2,
                'subjectName' => 'Math 6',
                'created_at' => '2021-04-02 00:16:04',
                'updated_at' => '2021-04-02 00:16:04',
            ),
            2 => 
            array (
                'id' => 3,
                'subjectName' => 'AP',
                'created_at' => '2021-04-02 00:16:54',
                'updated_at' => '2021-04-02 00:16:54',
            ),
            3 => 
            array (
                'id' => 4,
                'subjectName' => 'Fil 4',
                'created_at' => '2021-04-02 00:16:54',
                'updated_at' => '2021-04-02 00:16:54',
            ),
            4 => 
            array (
                'id' => 5,
                'subjectName' => 'Math 3',
                'created_at' => '2021-04-02 00:17:33',
                'updated_at' => '2021-04-02 00:17:33',
            ),
            5 => 
            array (
                'id' => 6,
                'subjectName' => 'Fil 1',
                'created_at' => '2021-04-02 00:18:14',
                'updated_at' => '2021-04-02 00:18:14',
            ),
        ));
        
        
    }
}