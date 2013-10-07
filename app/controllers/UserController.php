<?php

	class UserController extends Base_Controller
	{
		public function action_index()
		{
			echo 'test'; //Echo test so we can test this controller
		}

		public function __construct()
		{
			$this->filter('before', 'auth');
		}
	}

?>