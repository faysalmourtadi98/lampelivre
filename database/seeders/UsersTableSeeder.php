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
                'created_at' => '2022-07-16 22:42:11.000000',
                'date_naissance' => '1989-01-08',
                'email' => 'wafabe@mailinator.com',
                'email_verified_at' => NULL,
                'first_name' => 'Mari',
                'id' => 1,
                'last_name' => 'Lester',
                'password' => '$2y$10$MIgSQFjxijTBOuo8vvcAyeJUc11j/F.7cWX51YCPCcXMfpdQEnvBi',
                'remember_token' => NULL,
                'updated_at' => '2022-07-16 22:42:11.000000',
            ),
        ));
        
        
    }
}