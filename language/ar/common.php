<?php
/*
*
* @package Pretty topic
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'إعلان',
	'VIEW_TOPIC_GLOBAL'		 => 'إعلان عام',
	'VIEW_TOPIC_LOCKED'		 => 'مُغلق',
	'VIEW_TOPIC_LOGS'			=> 'مُشاهدة السجلات',
	'VIEW_TOPIC_MOVED'			=> 'منقول',
	'VIEW_TOPIC_POLL'			=> 'تصويت',
	'VIEW_TOPIC_STICKY'		 => 'مُثبت',
));
