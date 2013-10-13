<?php

class Group extends Eloquent {
	protected $guarded = array();
	protected $table = 'groups';

	public static $rules = array();
	
	public function getAllGroupsForLoggedInUser()
	{
		
	}
}
