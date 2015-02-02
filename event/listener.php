<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace paybas\gametooltips\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/**
	 * @var \phpbb\config\config
	 */
	protected $config;
	/**
	 * @var \phpbb\template\template
	 */
	protected $template;

	/**
	 * @param \phpbb\config\config     $config
	 * @param \phpbb\template\template $template
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after' => 'assign_to_template',
		);
	}

	public function assign_to_template()
	{
		$tpl_vars = array(
			'GTTIPS_WOWHEAD'  => isset($this->config['gttips_wowhead']) ? $this->config['gttips_wowhead'] : false,
			'GTTIPS_DIABLO3'  => isset($this->config['gttips_diablo3']) ? $this->config['gttips_diablo3'] : false,
			'GTTIPS_WILDHEAP' => isset($this->config['gttips_wildheap']) ? $this->config['gttips_wildheap'] : false,
			'GTTIPS_LOLTIP'   => isset($this->config['gttips_loltip']) ? $this->config['gttips_loltip'] : false,
			'GTTIPS_ZAM'      => isset($this->config['gttips_zam']) ? $this->config['gttips_zam'] : false,
			'GTTIPS_XIVDB'    => isset($this->config['gttips_xivdb']) ? $this->config['gttips_xivdb'] : false,
			'GTTIPS_SWTOR'    => isset($this->config['gttips_swtor']) ? $this->config['gttips_swtor'] : false,
			'GTTIPS_DESTINY'  => isset($this->config['gttips_destiny']) ? $this->config['gttips_destiny'] : false,
			'GTTIPS_ESOHEAD'  => isset($this->config['gttips_esohead']) ? $this->config['gttips_esohead'] : false,

			'GTTIPS_REGION'   => (isset($this->config['gttips_region']) && $this->config['gttips_region'] > 0) ? 'us' : 'eu',
		);

		$this->template->assign_vars($tpl_vars);
	}
}
