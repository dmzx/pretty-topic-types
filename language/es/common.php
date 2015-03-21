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
	'VIEW_TOPIC_ANNOUNCEMENT'   => 'Anuncio',
	'VIEW_TOPIC_GLOBAL'		 => 'Anuncio G.',
	'VIEW_TOPIC_LOCKED'		 => 'Cerrado',
	'VIEW_TOPIC_LOGS'		   => 'Ver registros',
	'VIEW_TOPIC_MOVED'		  => 'Movido',
	'VIEW_TOPIC_POLL'		   => 'Encuesta',
	'VIEW_TOPIC_STICKY'		 => 'Nota',
));
