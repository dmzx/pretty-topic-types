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
    'VIEW_TOPIC_ANNOUNCEMENT'   => 'Announcement',
    'VIEW_TOPIC_GLOBAL'         => 'Global Announcement',
    'VIEW_TOPIC_LOCKED'         => 'Locked',
    'VIEW_TOPIC_LOGS'           => 'View logs',
    'VIEW_TOPIC_MOVED'          => 'Moved',
    'VIEW_TOPIC_POLL'           => 'Poll',
    'VIEW_TOPIC_STICKY'         => 'Sticky',
));
