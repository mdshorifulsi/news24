<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        DB::table('users')->insert([

        	'role_id' =>'1',
          	'name' =>'Md.admin',
          	'email' =>'admin@gmail.com',
          	'password' =>bcrypt('rootadmin'),
          
        	


        ]);



        DB::table('users')->insert([

        	'role_id' =>'1',
          	'name' =>'Md.shoriful',
          	'email' =>'shoriful@gmail.com',
          	'password' =>bcrypt('rootadmin'),
          
        	


        ]);





        DB::table('users')->insert([

        	'role_id' =>'1',
          	'name' =>'Md.Shojib',
          	'email' =>'shojib@gmail.com',
          	'password' =>bcrypt('rootadmin'),
          
        	


        ]);





        DB::table('users')->insert([

        	'role_id' =>'1',
          	'name' =>'Md.Tamanna',
          	'email' =>'tamanna@gmail.com',
          	'password' =>bcrypt('rootadmin'),
          
        	


        ]);






        DB::table('users')->insert([

        	'role_id' =>'2',
          	'name' =>'Md.author',
          	'email' =>'author@gmail.com',
          	'password' =>bcrypt('rootauthor'),
          
        	


        ]);




        DB::table('users')->insert([

        	'role_id' =>'2',
          	'name' =>'Md.robin',
          	'email' =>'robin@gmail.com',
          	'password' =>bcrypt('rootauthor'),
          
        	


        ]);





        DB::table('users')->insert([

        	'role_id' =>'2',
          	'name' =>'Md.rony',
          	'email' =>'rony@gmail.com',
          	'password' =>bcrypt('rootauthor'),
          
        	


        ]);





        DB::table('users')->insert([

        	'role_id' =>'2',
          	'name' =>'Md.rocky',
          	'email' =>'rocky@gmail.com',
          	'password' =>bcrypt('rootauthor'),
          
        	


        ]);
    }
}
