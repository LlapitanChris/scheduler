<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('programs')->delete();
        
        \DB::table('programs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'programName' => 'Math 5',
                'created_at' => '2021-04-02 00:16:04',
                'updated_at' => '2021-04-02 00:16:04',
            ),
            1 => 
            array (
                'id' => 2,
                'programName' => 'Math 6',
                'created_at' => '2021-04-02 00:16:04',
                'updated_at' => '2021-04-02 00:16:04',
            ),
            2 => 
            array (
                'id' => 3,
                'programName' => 'AP',
                'created_at' => '2021-04-02 00:16:54',
                'updated_at' => '2021-04-02 00:16:54',
            ),
            3 => 
            array (
                'id' => 4,
                'programName' => 'Fil 4',
                'created_at' => '2021-04-02 00:16:54',
                'updated_at' => '2021-04-02 00:16:54',
            ),
            4 => 
            array (
                'id' => 5,
                'programName' => 'Math 3',
                'created_at' => '2021-04-02 00:17:33',
                'updated_at' => '2021-04-02 00:17:33',
            ),
            5 => 
            array (
                'id' => 6,
                'programName' => 'Fil 1',
                'created_at' => '2021-04-02 00:18:14',
                'updated_at' => '2021-04-02 00:18:14',
            ),
        ));
        
        
    }
}