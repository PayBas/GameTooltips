<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'GAME_TOOLTIPS'           => 'Game Tooltips',
	'GAME_TOOLTIPS_EXPLAIN'   => 'This extension allows you to enable tooltip scripts for various games. They generally work by looking for links on the page currently being displayed to the user, and add a JavaScript mouse-over effect with context specific to the page the link refers to.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Settings',

	'GTTIPS_WOWHEAD'          => 'Wowhead Tooltips',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Enables tooltips for World of Warcraft and HearthStone. For more information, visit <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',

	'GTTIPS_DIABLO3'          => 'Diablo 3 Tooltips',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Enables tooltips for Diablo 3 (officially provided by Blizzard Entertainment). For more information, visit <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',

	'GTTIPS_WILDHEAP'         => 'WildHeap Tooltips',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Enables tooltips for WildStar. For more information, visit <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',

	'GTTIPS_LOLTIP'           => 'LoLTip Tooltips',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Enables tooltips for League of Legends. For more information, visit <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',

	'GTTIPS_ZAM'              => 'ZAM Tooltips',
	'GTTIPS_ZAM_EXPLAIN'      => 'Enables tooltips for Everquest (1 & 2), Final Fantasy (XI & XIV), LotR Online, and Warhammer Online. For more information, visit <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',

	'GTTIPS_XIVDB'            => 'XIVDB Tooltips',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Enables tooltips for Final Fantasy XIV. For more information, visit <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',

	'GTTIPS_REGION'           => 'Region Setting',
	'GTTIPS_REGION_EXPLAIN'   => 'Some (not all) tooltip scripts have regional distribution. Depending on your user\'s demographics, it might be advisable to choose the one with the lowest latency.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Altered Game Tooltips settings</strong><br />&raquo; %s',
));
