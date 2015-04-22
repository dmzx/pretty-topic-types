<?php
/*
*
* @package Pretty topic
* @author dmzx (www.dmzx-web.net)
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
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Duyuru',
	'VIEW_TOPIC_GLOBAL'		 => 'Global Duyuru',
	'VIEW_TOPIC_LOCKED'		 => 'Kilitli',
	'VIEW_TOPIC_LOGS'			=> 'Kayıtları görüntüle',
	'VIEW_TOPIC_MOVED'			=> 'Taşındı',
	'VIEW_TOPIC_POLL'			=> 'Anket',
	'VIEW_TOPIC_STICKY'		 => 'Sabit',
));
