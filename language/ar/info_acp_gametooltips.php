<?php
/**
 *
 * @package Game Tooltips
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'GAME_TOOLTIPS'           => 'تلميحات اللعبة',
	'GAME_TOOLTIPS_EXPLAIN'   => 'هذه الإضافة تعطيك إمكانية تفعيل سكربت التلميحات للعديد من الألعاب. وبصورة عامة تعمل على البحث عن الروابط في الصفحة التي تظهر حالياً للعضو , ثم تضيف تأثير سكربت الجافا عند وضع الماوس على الرابط لعرض النصوص الخاصة بالصفحة المطلوبة.',
	'GAME_TOOLTIPS_SETTINGS'  => 'الإعدادات',

	'GTTIPS_WOWHEAD'          => 'تلميحات اللعبة Wowhead ',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'تفعيل تلميحات اللعبة World of Warcraft and HearthStone. عليك زيارة الموقع <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a> للمزيد من المعلومات.',

	'GTTIPS_DIABLO3'          => 'تلميحات اللعبة Diablo 3 ',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'تفعيل تلميحات اللعبة Diablo 3 (officially provided by Blizzard Entertainment). عليك زيارة الموقع <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a> للمزيد من المعلومات.',

	'GTTIPS_WILDHEAP'         => 'تلميحات اللعبة WildHeap ',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'تفعيل تلميحات اللعبة WildStar. عليك زيارة الموقع <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a> للمزيد من المعلومات.',

	'GTTIPS_LOLTIP'           => 'تلميحات اللعبة LoLTip ',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'تفعيل تلميحات اللعبة League of Legends. عليك زيارة الموقع <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a> للمزيد من المعلومات.',

	'GTTIPS_ZAM'              => 'تلميحات اللعبة ZAM ',
	'GTTIPS_ZAM_EXPLAIN'      => 'تفعيل تلميحات اللعبة Everquest (1 & 2), Final Fantasy XI, LotR Online, and Warhammer Online. عليك زيارة الموقع <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a> للمزيد من المعلومات.',

	'GTTIPS_XIVDB'            => 'تلميحات اللعبة XIVDB ',
	'GTTIPS_XIVDB_EXPLAIN'    => 'تفعيل تلميحات اللعبة Final Fantasy XIV. عليك زيارة الموقع <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a> للمزيد من المعلومات.',

	'GTTIPS_SWTOR'            => 'تلميحات اللعبة SWTOR ',
	'GTTIPS_SWTOR_EXPLAIN'    => 'تفعيل تلميحات اللعبة Star Wars - The Old Republic. عليك زيارة الموقع <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a> للمزيد من المعلومات.',

	'GTTIPS_DESTINY'          => 'تلميحات اللعبة DestinyDB ',
	'GTTIPS_DESTINY_EXPLAIN'  => 'تفعيل تلميحات اللعبة Destiny. عليك زيارة الموقع <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a>للمزيد من المعلومات.',

	'GTTIPS_ESOHEAD'          => 'تلميحات اللعبة Esohead ',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'تفعيل تلميحات اللعبة The Elder Scrolls Online. عليك زيارة الموقع <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a> للمزيد من المعلومات.',

	'GTTIPS_REGION'           => 'إعدادات محلية ',
	'GTTIPS_REGION_EXPLAIN'   => 'بعض سكربتات التلميح ( وليس جميعها ) لديها تصنيف محلي وتعتمد على المنطقة السكانية للعضو. لذلك من المُستحسن اختيار التوقيت الأقرب لمنطقتك.',

	'LOG_GTTIPS_CONFIG'       => '<strong>تعديل إعدادات الإضافة : تلميحات اللعبة</strong><br />&raquo; %s',
));
