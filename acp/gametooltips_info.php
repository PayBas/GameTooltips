<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
