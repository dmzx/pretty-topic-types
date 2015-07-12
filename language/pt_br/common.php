<?php
/*
*
* @package Pretty topic
* @author dmzx (www.dmzx-web.net)
* Brazilian Portuguese	translation by MarcosFPo
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Anúncio',
	'VIEW_TOPIC_GLOBAL'		 => 'Anúncio Global',
	'VIEW_TOPIC_LOCKED'		 => 'Trancado',
	'VIEW_TOPIC_LOGS'			=> 'Ver logs',
	'VIEW_TOPIC_MOVED'			=> 'Movido',
	'VIEW_TOPIC_POLL'			=> 'Enquete',
	'VIEW_TOPIC_STICKY'		 => 'Fixado',
));
