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
    'VIEW_TOPIC_GLOBAL'         => '全局公告',
    'VIEW_TOPIC_LOCKED'         => '锁',
    'VIEW_TOPIC_LOGS'           => '记录',
    'VIEW_TOPIC_MOVED'          => '移动',
    'VIEW_TOPIC_POLL'           => '投票',
    'VIEW_TOPIC_STICKY'         => '置顶',
));
