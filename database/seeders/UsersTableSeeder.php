<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Camille',
                'email' => 'camille@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$097TyON503OI74wav3vTNeBZqi84A7etefA/s8rYjG6q2RFRuCRuW',
                'remember_token' => NULL,
                'role_id' => 2,
                'created_at' => '2021-04-01 16:03:58',
                'updated_at' => '2021-04-01 16:03:58',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Nica',
                'email' => 'nica@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s1Sd2uurNgF6h5idlH74FOUBF.prAoJOR6SyEON1IluDjlm1r43qS',
                'remember_token' => NULL,
                'role_id' => 2,
                'created_at' => '2021-04-01 16:15:46',
                'updated_at' => '2021-04-01 16:15:46',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'admin_ako',
                'email' => 'admin_ako@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HwI.sVGtajO3pk6I57hfceGVQ7UlX8xs09Y2IK9M5CqsODlPXhY6i',
                'remember_token' => NULL,
                'role_id' => 1,
                'created_at' => '2021-04-01 17:18:30',
                'updated_at' => '2021-04-01 17:18:30',
            ),
        ));
        
        
    }
}