<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2008
 * Date:		$Date: 2012-07-22 22:02:26 +0200 (So, 22. Jul 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: godmod $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 11870 $
 * 
 * $Id: wordofthemoment_portal.class.php 11870 2012-07-22 20:02:26Z godmod $
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

class wordofthemoment_portal extends portal_generic {
	
	protected static $path		= 'wordofthemoment';
	protected static $data		= array(
		'name'			=> 'Word of the Moment',
		'version'		=> '2.0.0',
		'author'		=> 'WalleniuM',
		'icon'			=> 'fa-book',
		'contact'		=> EQDKP_PROJECT_URL,
		'description'	=> 'Output a randomword or sentence of the moment',
		'lang_prefix'	=> 'words_'
	);
	protected static $positions = array('left1', 'left2', 'right', 'middle','bottom');
	protected $settings	= array(
		'words'		=> array(
			'type'			=> 'bbcodeeditor',
			'cols'			=> '30',
			'rows'			=> '20',
			'codeinput'		=> false,
		),

	);
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'right',
		'defaultnumber'		=> '7',
	);
	
	protected static $apiLevel = 20;

	public function output() {
		$words = explode(";", $this->config('words'));
		if(count($words) > 0){
			shuffle($words);
			$myout = $this->bbcode->toHTML($words[0]);
		}else{
			$myout = $this->user->lang('pk_wotm_nobd');
		}
		return $myout;
	}
}
?>