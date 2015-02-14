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
    'VIEW_TOPIC_ANNOUNCEMENT'   => '公告',
    'VIEW_TOPIC_GLOBAL'         => '全域公告',
    'VIEW_TOPIC_LOCKED'         => '鎖',
    'VIEW_TOPIC_LOGS'           => '紀錄',
    'VIEW_TOPIC_MOVED'          => '移動',
    'VIEW_TOPIC_POLL'           => '票選',
    'VIEW_TOPIC_STICKY'         => '置頂',
));
