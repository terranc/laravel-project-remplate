<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$V1BhyVFbChhFNJ8Yeu/8.ulfU6pF2f8LIiPb5zzrqYLbaOzmwZaEG',
                'name' => 'Administrator',
                'avatar' => 'images/2d0b3314e378e6490dc858696343e149.jpeg',
                'remember_token' => 'Ur0aDckw1soSovo0QuGzZAswieV1KZJzBmRwswp557VICobFplFAlHlJO4Ph',
                'created_at' => '2018-10-29 07:10:46',
                'updated_at' => '2018-10-29 19:08:32',
            ),
        ));
        
        
    }
}