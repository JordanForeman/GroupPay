<?php

	class UserController extends BaseController
	{
		public function action_index()
		{
			echo 'test'; //Echo test so we can test this controller
		}

		public function __construct()
		{
			$this->filter('before', 'auth');
		}

		public function makeAdmin()
		{
			$this->makeAdminById($this->id);
		}

		public function makeAdminById($id)
		{
			$u = User::find($id);
			$u->role = 'admin';
			$u->save;
		}

		public function demote()
		{
			$this->role = 'standard';
			$this->save();
		}
	}

?>