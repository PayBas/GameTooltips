<?php
/**
 *
 * @package Game Tooltips
 * Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
	'GAME_TOOLTIPS'           => 'Naputci igara',
	'GAME_TOOLTIPS_EXPLAIN'   => 'Ova ekstenzija omogućava skripte naputaka za različite igre. U pravilu, rade na način da traže linkove, na korisniku/ci trenutno prikazanoj stranici, te dodaju JavaScript mouse-over efekt u kontekstu specifičnom za stranicu na koju link/ovi upućuje/u.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Postavke',

	'GTTIPS_WOWHEAD'          => 'Wowhead naputci',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Omogućava naputke za: World of Warcraft i HearthStone. Za više informacija, posjeti: <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',

	'GTTIPS_DIABLO3'          => 'Diablo 3 naputci',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Omogućava naputke za: Diablo 3 (Blizzard Entertainment). Za više informacija, posjeti: <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',

	'GTTIPS_WILDHEAP'         => 'WildHeap naputci',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Omogućava naputke za: WildStar. Za više informacija, posjeti: <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',

	'GTTIPS_LOLTIP'           => 'LoLTip naputci',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Omogućava naputke za: League of Legends. Za više informacija, posjeti: <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',

	'GTTIPS_ZAM'              => 'ZAM naputci',
	'GTTIPS_ZAM_EXPLAIN'      => 'Omogućava naputke za: Everquest (1 & 2), Final Fantasy XI, LotR Online, i Warhammer Online. Za više informacija, posjeti: <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',

	'GTTIPS_XIVDB'            => 'XIVDB naputci',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Omogućava naputke za: Final Fantasy XIV. Za više informacija, posjeti: <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',

	'GTTIPS_SWTOR'            => 'SWTOR naputci',
	'GTTIPS_SWTOR_EXPLAIN'    => 'Omogućava naputke za: Star Wars - The Old Republic. Za više informacija, posjeti: <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a>.',

	'GTTIPS_DESTINY'          => 'DestinyDB naputci',
	'GTTIPS_DESTINY_EXPLAIN'  => 'Omogućava naputke za: Destiny. Za više informacija, posjeti: <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a>.',

	'GTTIPS_ESOHEAD'          => 'Esohead naputci',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'Omogućava naputke za: The Elder Scrolls Online. Za više informacija, posjeti: <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a>.',

	'GTTIPS_REGION'           => 'Regionalne postavke',
	'GTTIPS_REGION_EXPLAIN'   => 'Neke, ne sve, skripte naputaka regionalne su distribuirane. Ovisno o demografiji korisnika/ca, poželjno je izabrati onu s manjom skrivenošću.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Izmijenjene postavke naputaka igara</strong><br />&raquo; %s',
));
