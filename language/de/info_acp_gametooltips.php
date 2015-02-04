<?php
/**
 *
 * @package Game Tooltips
 * German translation by Mythos (http://www.stefan-schmid.com)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'GAME_TOOLTIPS'           => 'Spiele Tooltips',
	'GAME_TOOLTIPS_EXPLAIN'   => 'Diese Erweiterung erlaubt dir, Tooltip-Skripte für verschiedene Spiele einzubinden. Diese durchsuchen die Hyperlinks auf der aktuellen Seite, die dem Benutzer angezeigt werden und fügen einen Javascript Mouseover Effekt hinzu, mit Daten, auf die der Hyperlink verweist.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Einstellungen',

	'GTTIPS_WOWHEAD'          => 'Wowhead Tooltips',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Aktiviert Tooltips für World of Warcraft und HearthStone. Besuche für weitere Informationen <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',

	'GTTIPS_DIABLO3'          => 'Diablo 3 Tooltips',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Aktiviert Tooltips für Diablo 3 (offiziell bereitgestellt von Blizzard Entertainment). Besuche für weitere Informationen <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',

	'GTTIPS_WILDHEAP'         => 'WildHeap Tooltips',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Aktiviert Tooltips für WildStar. Besuche für weitere Informationen <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',

	'GTTIPS_LOLTIP'           => 'LoLTip Tooltips',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Aktiviert Tooltips für League of Legends. Besuche für weitere Informationen <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',

	'GTTIPS_ZAM'              => 'ZAM Tooltips',
	'GTTIPS_ZAM_EXPLAIN'      => 'Aktiviert Tooltips für Everquest (1 & 2), Final Fantasy XI, LotR Online und Warhammer Online. Besuche für weitere Informationen <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',

	'GTTIPS_XIVDB'            => 'XIVDB Tooltips',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Aktiviert Tooltips für Final Fantasy XIV. Besuche für weitere Informationen <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',

	'GTTIPS_SWTOR'            => 'SWTOR Tooltips',
	'GTTIPS_SWTOR_EXPLAIN'    => 'Aktiviert Tooltips für Star Wars - The Old Republic. Besuche für weitere Informationen <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a>.',

	'GTTIPS_DESTINY'          => 'DestinyDB Tooltips',
	'GTTIPS_DESTINY_EXPLAIN'  => 'Aktiviert Tooltips für Destiny. Besuche für weitere Informationen <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a>.',

	'GTTIPS_ESOHEAD'          => 'Esohead Tooltips',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'Aktiviert Tooltips für The Elder Scrolls Online. Besuche für weitere Informationen <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a>.',

	'GTTIPS_REGION'           => 'Regionseinstellung',
	'GTTIPS_REGION_EXPLAIN'   => 'Manche (nicht alle) Tooltip-Skripte haben eine regionale Auslieferung. Basierend auf der Herkunft deiner Benutzer ist es ratsam, die Region mit der niedrigsten Latenz zu wählen.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Spiele Tooltip-Einstellungen geändert</strong><br />&raquo; %s',
));
