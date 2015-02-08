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
    'VIEW_TOPIC_ANNOUNCEMENT'   => 'Bekanntmachung',
    'VIEW_TOPIC_GLOBAL'         => 'Globale Bekanntmachung',
    'VIEW_TOPIC_LOCKED'         => 'Gesperrt',
    'VIEW_TOPIC_LOGS'           => 'Protokoll anzeigen',
    'VIEW_TOPIC_MOVED'          => 'Verschoben',
    'VIEW_TOPIC_POLL'           => 'Umfrage',
    'VIEW_TOPIC_STICKY'         => 'Wichtig',
));
