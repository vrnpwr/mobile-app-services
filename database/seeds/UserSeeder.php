<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    	'id' =>1,	
		'name' => 'varun',
        'email' => 'varun@afterdoor.com',
        // 'email_verified_at' => Str::random(10),    		
        'password' => 'admin1234',    		
    	]);

    }
}
