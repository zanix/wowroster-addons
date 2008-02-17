<?php 
/** 
 * Dev.PKComp.net Accounts Addon
 * 
 * LICENSE: Licensed under the Creative Commons 
 *          "Attribution-NonCommercial-ShareAlike 2.5" license 
 * 
 * @copyright  2005-2007 Pretty Kitty Development 
 * @author	   mdeshane
 * @license    http://creativecommons.org/licenses/by-nc-sa/2.5   Creative Commons "Attribution-NonCommercial-ShareAlike 2.5" 
 * @link       http://dev.pkcomp.net 
 * @package    Accounts 
 * @subpackage Accounts Handler 
 */ 

if ( !defined('ROSTER_INSTALLED') ) 
{ 
    exit('Detected invalid access to this file!'); 
}

class accounts
{
	var $id;
	var $message;
	var $plugin_data;
	var $db = array(
		'usertable' => '',
		'userlink' => '',
		'uid' => '',
		'uname' => '',
		'pass' => '',
		'email' => '',
		'group_id' => '',
		'active' => '',
		);

	/**
	 * Accounts Page Class Object
	 *
	 * @var accountsPage
	 */
	var $admin;

	/**
	 * Accounts Page Class Object
	 *
	 * @var accountsPage
	 */
	var $page;
	
	/**
	 * Accounts User Class Object
	 *
	 * @var accountsUser
	 */
	var $user;

	/**
	 * Accounts Plugin Class Object
	 *
	 * @var accountsPlugin
	 */
	var $plugin;
	
	function accounts()
	{
		global $roster, $addon;

		$this->get_db();
	}

	/**
	 * Fetch all plugin data. We need to cache the active status for plugin_active()
	 * and fetching everything isn't much slower and saves extra fetches later on.
	 */
	function get_plugin_data()
	{
		global $roster, $addon;
		
		$query = "SELECT * FROM `" . $roster->db->table('plugin', $addon['basename']) . "` ORDER BY `basename`;";
		$result = $roster->db->query($query);
		$this->plugin_data = array();
		while( $row = $roster->db->fetch($result,SQL_ASSOC) )
		{
			$this->plugin_data[$row['basename']] = $row;
		}
	}

	/**
	 * Get the db data
	 */
	function get_db()
	{
		global $roster, $addon;
		
		$this->db = array(
			'usertable' => $roster->db->table('user',$addon['basename']),
			'userlink' => $roster->db->table('user_link',$addon['basename']),
			'uid' => 'uid',
			'uname' => 'uname',
			'pass' => 'pass',
			'email' => 'email',
			'group_id' => 'group_id',
			'active' => 'active',
			);
	}

}