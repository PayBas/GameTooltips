<?php
/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
	'GAME_TOOLTIPS_EXPLAIN'   => 'Met deze extensie kun je tooltips van verschillende spellen weergeven. Het werkt door te kijken naar links op de huidige pagina die worden getoond aan de gebruiker, en voegt dan een JavaScript mouse-over effect met context aan de link toe.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Instellingen',
	'GTTIPS_WOWHEAD'          => 'Wowhead Tooltips',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Schakelt tooltips voor World of Warcraft en HearthStone in. Voor meer informatie, bezoek <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',
	'GTTIPS_DIABLO3'          => 'Diablo 3 Tooltips',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Schakelt tooltips voor Diablo 3 (officieel door Blizzard Entertainment) in. Voor meer informatie, bezoek <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',
	'GTTIPS_WILDHEAP'         => 'WildHeap Tooltips',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Schakelt tooltips voor WildStar in. Voor meer informatie, bezoek <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',
	'GTTIPS_LOLTIP'           => 'LoLTip Tooltips',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Schakelt tooltips voor League of Legends in. Voor meer informatie, bezoek <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',
	'GTTIPS_ZAM'              => 'ZAM Tooltips',
	'GTTIPS_ZAM_EXPLAIN'      => 'Schakelt tooltips voor Everquest (1 & 2), Final Fantasy XI, LotR Online, en Warhammer Online in. Voor meer informatie, bezoek <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',
	'GTTIPS_XIVDB'            => 'XIVDB Tooltips',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Schakelt tooltips voor Final Fantasy XIV in. Voor meer informatie, bezoek <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',
	'GTTIPS_REGION'           => 'Regio Instellingen',
	'GTTIPS_REGION_EXPLAIN'   => 'Sommige (niet alle) tooltip scripts werken per regio. Afhankelijk van de locatie van de gebruiker, is het aan te raden alleen de tooltips te gebruiken die de minste laadtijd hebben.',
	'LOG_GTTIPS_CONFIG'       => '<strong>Overige Game Tooltips instellingen</strong><br />&raquo; %s',
));
