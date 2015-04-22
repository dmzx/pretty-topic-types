<?php
/*
*
* @package Pretty topic
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net); Estonian language pack by www.phpbbeesti.com
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
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Teadaanne',
	'VIEW_TOPIC_GLOBAL'		 => 'Üldteadaanne',
	'VIEW_TOPIC_LOCKED'		 => 'Suletud',
	'VIEW_TOPIC_LOGS'			=> 'Vaata logisi',
	'VIEW_TOPIC_MOVED'			=> 'Liigutatud',
	'VIEW_TOPIC_POLL'			=> 'Hääletus',
	'VIEW_TOPIC_STICKY'		 => 'Kleebis',
));
