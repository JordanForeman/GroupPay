<?php

class Transaction extends Eloquent 
{
	protected $guarded = array();
	
	protected $table = 'transactions';

	public static $rules = array();

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
}
