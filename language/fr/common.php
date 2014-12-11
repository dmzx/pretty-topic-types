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
    'VIEW_TOPIC_ANNOUNCEMENT'   => 'Annonce',
    'VIEW_TOPIC_GLOBAL'         => 'Annonce globale',
    'VIEW_TOPIC_LOCKED'         => 'Verrouillé',
    'VIEW_TOPIC_LOGS'           => 'Voir les journaux',
    'VIEW_TOPIC_MOVED'          => 'Déplacé',
    'VIEW_TOPIC_POLL'           => 'Sondage',
    'VIEW_TOPIC_STICKY'         => 'Post-it',
));
