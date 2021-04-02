<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'roleName' => 'admin',
                'created_at' => '2021-04-02 00:03:22',
                'updated_at' => '2021-04-02 00:03:29',
            ),
            1 => 
            array (
                'id' => 2,
                'roleName' => 'teacher',
                'created_at' => '2021-04-02 00:02:22',
                'updated_at' => '2021-04-02 00:02:22',
            ),
        ));
        
        
    }
}