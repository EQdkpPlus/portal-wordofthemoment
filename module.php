<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-10-27 14:44:54 +0100 (Mo, 27 Okt 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2896 $
 * 
 * $Id: module.php 2896 2008-10-27 13:44:54Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['wordofthemoment'] = array(
			'name'           => 'Word of the Moment',
			'path'           => 'wordofthemoment',
			'version'        => '1.0.0',
			'author'         => 'WalleniuM',
			'contact'        => 'http://www.eqdkp-plus.com',
			'description'    => 'Output a randomword or sentence of the moment',
			'positions'      => array('left1', 'left2', 'right', 'middle'),
      'signedin'       => '0',
      'install'        => array(
			                            'autoenable'        => '0',
			                            'defaultposition'   => 'right',
			                            'defaultnumber'     => '7',
			                            ),
    );

$portal_settings['wordofthemoment'] = array(
  'pk_wotd_words'     => array(
        'name'      => 'pk_wotm_words',
        'language'  => 'pk_wotm_words',
        'property'  => 'bbcodeeditor',
        'size'      => '30',
        'rows'      => '20',
        'help'      => '',
        'codeinput' => false,
      ),
);

if(!function_exists(wordofthemoment_module)){
  function wordofthemoment_module(){
  	global $eqdkp , $user , $tpl, $db, $plang, $conf_plus, $bbcode;
    
    $words = explode(";", $conf_plus['pk_wotm_words']);
    if(count($words) > 0){
	    shuffle($words);
	    $myout = $bbcode->toHTML($words[0]);
    }else{
    	$myout = $plang['pk_wotm_nobd'];
    }
		return $myout;
  }
}
?>
