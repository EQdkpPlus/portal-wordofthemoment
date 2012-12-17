<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-07-30 13:56:27 +0200 (Mi, 30 Jul 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2465 $
 * 
 * $Id: german.php 2465 2008-07-30 11:56:27Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
  'wordofthemoment'           => 'Sprüche',
  'pk_wotm_nobd'							=> 'Keine Sprüche definiert!',
  'pk_wotm_words'     				=> 'Sprüche eingeben, per Semikolon (;) trennen',
));
?>
