<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {    
		$USER_SEED_DATA = array();
		array_push($USER_SEED_DATA, 
			['name'=>'Jordan Foreman', 'email'=>'me@jordanforeman.com', 'role'=>'admin'],
			['name'=>'Test User1', 'email'=>'testuser1@grouppay.com'],
			['name'=>'Test User2', 'email'=>'testuser2@grouppay.com']
		);

        DB::table('users')->delete();

		foreach ($USER_SEED_DATA as $user)
		{
			// DEFAULT PASSWORD
			$password = "abc123";
			if (isset($user['password']))
				$password = $user['password'];
				
			// DEFAULT ROLE
			$role = "standard";
			if (isset($user['role']))
				$role = $user['role'];
		
	        User::create(array(
	        	'name' => $user['name'],
				'email' => $user['email'],
				'password' => Hash::make($password),
				'role' => $role
	        ));	
		}
    }

}

?>