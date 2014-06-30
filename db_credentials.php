<?php

/****************************************
*    DBCredentials                      *
*****************************************/

/**
 * This class houses database credentials
 */
class DBCredentials {

	/****************************************
	*    AUTHENTICATION                     *
	*****************************************/

	/**
	* This function returns a set of credentials, determined by the set parameter given
	*/
	public static function get_credentials() {

		$credentials['host']		= 'localhost';
		$credentials['username']	= 'root';
		$credentials['password']	= '';
		$credentials['database']	= 'yoga';

		// Return variables as array
		return $credentials;

	}

}