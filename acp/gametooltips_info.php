<?php
/**
 *
 * @package Game Tooltips
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\gametooltips\acp;

class gametooltips_info
{
	function module()
	{
		return array(
			'filename' => '\paybas\gametooltips\acp\gametooltips_module',
			'title'    => 'GAME_TOOLTIPS',
			'modes'    => array(
				'settings'    => array('title' => 'GAME_TOOLTIPS_SETTINGS', 'auth' => 'ext_paybas/gametooltips && acl_a_board', 'cat' => array('GAME_TOOLTIPS')),
			),
		);
	}
}
