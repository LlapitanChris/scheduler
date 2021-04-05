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
                'id' => 1,
                'levelNo' => 1,
                'levelName' => 'Kagawad',
                'created_at' => '2021-04-03 11:31:42',
                'updated_at' => '2021-04-03 11:31:43',
            ),
            1 => 
            array (
                'id' => 2,
                'levelNo' => 2,
                'levelName' => 'Tanod hehe',
                'created_at' => '2021-04-03 11:31:43',
                'updated_at' => '2021-04-03 11:31:43',
            ),
        ));
        
        
    }
}