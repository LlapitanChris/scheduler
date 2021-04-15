<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('batches')->delete();
        
        \DB::table('batches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'batch_name' => 'B10',
                'section_id' => 1,
                'created_at' => '2021-04-15 17:01:17',
                'updated_at' => '2021-04-15 17:01:17',
            ),
            1 => 
            array (
                'id' => 2,
                'batch_name' => 'B11',
                'section_id' => 2,
                'created_at' => '2021-04-15 17:02:45',
                'updated_at' => '2021-04-15 17:02:45',
            ),
            2 => 
            array (
                'id' => 3,
                'batch_name' => 'B12',
                'section_id' => 2,
                'created_at' => '2021-04-15 17:03:20',
                'updated_at' => '2021-04-15 17:03:20',
            ),
            3 => 
            array (
                'id' => 4,
                'batch_name' => 'Block16',
                'section_id' => 4,
                'created_at' => '2021-04-15 17:39:06',
                'updated_at' => '2021-04-15 17:39:06',
            ),
        ));
        
        
    }
}