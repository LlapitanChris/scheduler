<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'id' => 4,
                'levelNo' => 1,
                'levelName' => 'Kagawad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'levelNo' => 2,
                'levelName' => 'Tanod',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'levelNo' => 3,
                'levelName' => 'Kapitan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}