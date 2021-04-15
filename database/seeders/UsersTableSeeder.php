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
                'id' => 1,
                'name' => 'admin_ako',
                'email' => 'admin_ako@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Sdn.ESsO8Xz31ntvUBy6LOZn4iDSG55ZBpPQio78cy82.gIEJOE4e',
                'remember_token' => 'lTElzGwr1s4M0SfIj1vuhEfMiz3UJIUtt7pGklVNC6svcU7BbmCAszHn0EgF',
                'role_id' => 1,
                'created_at' => '2021-04-15 15:23:28',
                'updated_at' => '2021-04-15 15:23:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Camille',
                'email' => 'camille@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$47FlpEH.4ujIK8o7BnXaqOoCleJMR53rgRDN6IcYoW2FTA7gfXpFi',
                'remember_token' => NULL,
                'role_id' => 2,
                'created_at' => '2021-04-15 15:25:00',
                'updated_at' => '2021-04-15 15:25:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nica',
                'email' => 'nica@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7o3v9/EecOQurFMLxArtwuvaUBILW5TpkrWzC6DBRw0StP1VOrati',
                'remember_token' => NULL,
                'role_id' => 2,
                'created_at' => '2021-04-15 15:25:31',
                'updated_at' => '2021-04-15 15:25:31',
            ),
        ));
        
        
    }
}