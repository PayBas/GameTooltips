<?php
/**
 *
 * @package Game Tooltips
 * Spanish translation by Raul [ThE KuKa] (www.phpbb-es.com)
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
	'GAME_TOOLTIPS'           => 'Tooltips de Juegos',
	'GAME_TOOLTIPS_EXPLAIN'   => 'Esta extensión le permite habilitar scripts tooltip para varios juegos. Por lo general, trabajan mediante la búsqueda de enlaces en la página que se muestra al usuario al pasar el ratón por encima (efecto JavaScript) con el contexto específico de la página el enlace se refiere.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Ajustes',

	'GTTIPS_WOWHEAD'          => 'Wowhead Tooltips',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Habilitar tooltips para World of Warcraft y HearthStone. Para más información, visite <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',

	'GTTIPS_DIABLO3'          => 'Diablo 3 Tooltips',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Habilitar tooltips para Diablo 3 (oficialmente proporcionada por Blizzard Entertainment). Para más información, visite <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',

	'GTTIPS_WILDHEAP'         => 'WildHeap Tooltips',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Habilitar tooltips para WildStar. Para más información, visite <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',

	'GTTIPS_LOLTIP'           => 'LoLTip Tooltips',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Habilitar tooltips para League of Legends. Para más información, visite <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',

	'GTTIPS_ZAM'              => 'ZAM Tooltips',
	'GTTIPS_ZAM_EXPLAIN'      => 'Habilitar tooltips para Everquest (1 y 2), Final Fantasy XI, LotR Online, y Warhammer Online. Para más información, visite <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',

	'GTTIPS_XIVDB'            => 'XIVDB Tooltips',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Habilitar tooltips para Final Fantasy XIV. Para más información, visite <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',

	'GTTIPS_SWTOR'            => 'SWTOR Tooltips',
	'GTTIPS_SWTOR_EXPLAIN'    => 'Habilitar tooltips para Star Wars - The Old Republic. Para más información, visite <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a>.',

	'GTTIPS_DESTINY'          => 'DestinyDB Tooltips',
	'GTTIPS_DESTINY_EXPLAIN'  => 'Habilitar tooltips para Destiny. Para más información, visite <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a>.',

	'GTTIPS_ESOHEAD'          => 'Esohead Tooltips',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'Habilitar tooltips para The Elder Scrolls Online. Para más información, visite <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a>.',

	'GTTIPS_REGION'           => 'Ajuste de región',
	'GTTIPS_REGION_EXPLAIN'   => 'Algunos (no todos) scripts tooltip tienen distribución regional. En función de los datos demográficos de sus usuarios, podría ser aconsejable elegir el que tenga la menor latencia.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Ajustes de Tooltips de Juegos alterados</strong><br />&raquo; %s',
));
