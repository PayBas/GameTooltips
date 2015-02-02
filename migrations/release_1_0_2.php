<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace paybas\gametooltips\migrations;

class release_1_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['gttips_version']) && version_compare($this->config['gttips_version'], '1.0.2', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\paybas\gametooltips\migrations\release_1_0_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('gttips_version', '1.0.2')),
			array('config.add', array('gttips_xivdb', 0)),
		);
	}
}
