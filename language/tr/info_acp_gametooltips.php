<?php
/**
 *
 * @package Game Tooltips
 * Turkish translation by pikachuturkey
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
	'GAME_TOOLTIPS'           => 'Oyun İpuçları',
	'GAME_TOOLTIPS_EXPLAIN'   => 'Bu eklenti size bazı oyunlar için ipuçları scriptini aktive etmenize izin verir. They generally work by looking for links on the page currently being displayed to the user, and add a JavaScript mouse-over effect with context specific to the page the link refers to.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Ayarlar',

	'GTTIPS_WOWHEAD'          => 'Wowhead İpuçları',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'World of Warcraft ve HearthStone için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a> sitesini ziyaret edin.',

	'GTTIPS_DIABLO3'          => 'Diablo 3 İpuçları',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Diablo 3 (resmi olarak Blizzard Entertainment tarafından sağlanmaktadır) için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a> sitesini ziyaret edin.',

	'GTTIPS_WILDHEAP'         => 'WildHeap İpuçları',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'WildStar için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a> sitesini ziyaret edin.',

	'GTTIPS_LOLTIP'           => 'LoLTip İpuçları',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'League of Legends için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a> sitesini ziyaret edin.',

	'GTTIPS_ZAM'              => 'ZAM İpuçları',
	'GTTIPS_ZAM_EXPLAIN'      => 'Everquest (1 & 2), Final Fantasy XI, LotR Online, ve Warhammer Online için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a> sitesini ziyaret edin.',

	'GTTIPS_XIVDB'            => 'XIVDB İpuçları',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Final Fantasy XIV için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a> sitesini ziyaret edin.',

	'GTTIPS_SWTOR'            => 'SWTOR İpuçları',
	'GTTIPS_SWTOR_EXPLAIN'    => 'Star Wars - The Old Republic için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a> sitesini ziyaret edin.',

	'GTTIPS_DESTINY'          => 'DestinyDB İpuçları',
	'GTTIPS_DESTINY_EXPLAIN'  => 'Destiny için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a> sitesini ziyaret edin.',

	'GTTIPS_ESOHEAD'          => 'Esohead İpuçları',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'The Elder Scrolls Online için ipuçlarını aktive et. Daha fazla bilgi için <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a> sitesini ziyaret edin.',

	'GTTIPS_REGION'           => 'Bölge Ayarı',
	'GTTIPS_REGION_EXPLAIN'   => 'Bazı (tümü değil) ipucu scriptleri bölgesel dağıtımlara sahiptir. Kullanıcılarızın demografik özelliklerine bağlı olarak daha düşük özellikli birini seçmeniz uygun olabilir.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Oyun İpuçları ayarları değiştirildi</strong><br />&raquo; %s',
));
