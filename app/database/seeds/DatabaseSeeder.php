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
		$this->call('GroupTableSeeder');
		$this->call('UserGroupRelationSeeder');
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

		$count = 1;
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
	        	'id' => $count,
	        	'name' => $user['name'],
				'email' => $user['email'],
				'password' => Hash::make($password),
				'role' => $role
	        ));	
	        
	        $count++;
		}
    }

}

class GroupTableSeeder extends Seeder {
	
	public function run()
	{
		$GROUP_SEED_DATA = array();
		array_push($GROUP_SEED_DATA,
			['name'=>'My Housemates']
		);
		
		DB::table('groups')->delete();
		
		$count = 1;
		foreach ($GROUP_SEED_DATA as $group)
		{
			Group::create(array(
				'id'=>$count,
				'name'=>$group['name']
			));
			$count++;
		}
	}
}

class UserGroupRelationSeeder extends Seeder {
	
	public function run()
	{
		$RELATION_DATA = array();
		array_push($RELATION_DATA,
			['gid'=>'1', 'uid'=>1],
			['gid'=>'1', 'uid'=>2],
			['gid'=>'1', 'uid'=>3]
		);
		
		DB::table('user_group')->delete();
		
		$count = 1;
		foreach ($RELATION_DATA as $relationship)
		{
			UserGroup::create(array(
				'id'=>$count,
				'group_id'=>$relationship['gid'],
				'user_id'=>$relationship['uid']
			));
			$count++;
		}
	}
	
}

?>