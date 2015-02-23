<?php
/**
 *
 * @package Game Tooltips
 * French translation by Galixte (http://www.galixte.com)
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
	'GAME_TOOLTIPS'           => 'Infobulles des jeux',
	'GAME_TOOLTIPS_EXPLAIN'   => 'Cette extension vous permet d’activer des infobulles pour différents jeux. Elles recherchent des liens sur la page actuellement affichée pour l’utilisateur, et ajoute selon le contexte un effet JavaScript lors du survole de la souris pour les liens en référence avec des jeux.',
	'GAME_TOOLTIPS_SETTINGS'  => 'Paramètres',

	'GTTIPS_WOWHEAD'          => 'Infobulles Wowhead',
	'GTTIPS_WOWHEAD_EXPLAIN'  => 'Activer les infobulles pour World of Warcraft et HearthStone. Pour davantage d’informations, visiter <a href="http://www.wowhead.com/tooltips" target="_blank">Wowhead</a>.',

	'GTTIPS_DIABLO3'          => 'Infobulles Diablo 3',
	'GTTIPS_DIABLO3_EXPLAIN'  => 'Activer les infobulles pour Diablo 3 (officiellement développé par Blizzard Entertainment). Pour davantage d’informations, visiter <a href="http://us.battle.net/d3/en/tooltip/" target="_blank">Battle.net</a>.',

	'GTTIPS_WILDHEAP'         => 'Infobulles WildHeap',
	'GTTIPS_WILDHEAP_EXPLAIN' => 'Activer les infobulles pour WildStar. Pour davantage d’informations, visiter <a href="http://wildheap.com/en/tooltips" target="_blank">WildHeap</a>.',

	'GTTIPS_LOLTIP'           => 'Infobulles LoLTip',
	'GTTIPS_LOLTIP_EXPLAIN'   => 'Activer les infobulles pour League of Legends. Pour davantage d’informations, visiter <a href="http://www.arcana-gaming.com/en/LoL/Tooltip" target="_blank">LoLTip</a>.',

	'GTTIPS_ZAM'              => 'Infobulles ZAM',
	'GTTIPS_ZAM_EXPLAIN'      => 'Activer les infobulles pour Everquest (1 & 2), Final Fantasy XI, LotR Online, et Warhammer Online. Pour davantage d’informations, visiter <a href="http://www.zam.com/wiki/Tooltips" target="_blank">ZAM Tooltips Wiki</a>.',

	'GTTIPS_XIVDB'            => 'Infobulles XIVDB',
	'GTTIPS_XIVDB_EXPLAIN'    => 'Activer les infobulles pour Final Fantasy XIV. Pour davantage d’informations, visiter <a href="http://xivdb.com/?tooltip" target="_blank">XIVDB</a>.',

	'GTTIPS_SWTOR'            => 'Infobulles SWTOR',
	'GTTIPS_SWTOR_EXPLAIN'    => 'Activer les infobulles pour Star Wars - The Old Republic. Pour davantage d’informations, visiter <a href="http://swtor.askmrrobot.com/" target="_blank">Ask Mr. Robot</a>.',

	'GTTIPS_DESTINY'          => 'Infobulles DestinyDB',
	'GTTIPS_DESTINY_EXPLAIN'  => 'Activer les infobulles pour Destiny. Pour davantage d’informations, visiter <a href="http://www.destinydb.com/tooltips" target="_blank">DestinyDB</a>.',

	'GTTIPS_ESOHEAD'          => 'Infobulles Esohead',
	'GTTIPS_ESOHEAD_EXPLAIN'  => 'Activer les infobulles pour The Elder Scrolls Online. Pour davantage d’informations, visiter <a href="http://www.esohead.com/tooltips" target="_blank">Esohead</a>.',

	'GTTIPS_REGION'           => 'Paramètre de la région',
	'GTTIPS_REGION_EXPLAIN'   => 'Certaines (pas toutes) infobulles sont régionalisées. Selon les données géographiques de vos utilisateurs, il pourrait être judicieux de choisir la région avec la plus faible latence.',

	'LOG_GTTIPS_CONFIG'       => '<strong>Paramètres des infobulles modifiés</strong><br />&raquo; %s',
));
