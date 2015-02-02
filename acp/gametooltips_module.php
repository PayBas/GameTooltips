<?php

/**
*
* @package Game Tooltips
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace paybas\gametooltips\acp;

class gametooltips_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_gametooltips';
		$this->page_title = $user->lang('GAME_TOOLTIPS');

		$form_key = 'acp_gametooltips';
		add_form_key($form_key);

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error('FORM_INVALID');
			}

			$gttips_wowhead = $request->variable('gttips_wowhead', 0);
			$config->set('gttips_wowhead', $gttips_wowhead);

			$gttips_diablo3 = $request->variable('gttips_diablo3', 0);
			$config->set('gttips_diablo3', $gttips_diablo3);

			$gttips_wildheap = $request->variable('gttips_wildheap', 0);
			$config->set('gttips_wildheap', $gttips_wildheap);

			$gttips_loltip = $request->variable('gttips_loltip', 0);
			$config->set('gttips_loltip', $gttips_loltip);

			$gttips_zam = $request->variable('gttips_zam', 0);
			$config->set('gttips_zam', $gttips_zam);

			$gttips_xivdb = $request->variable('gttips_xivdb', 0);
			$config->set('gttips_xivdb', $gttips_xivdb);

			$gttips_swtor = $request->variable('gttips_swtor', 0);
			$config->set('gttips_swtor', $gttips_swtor);

			$gttips_destiny = $request->variable('gttips_destiny', 0);
			$config->set('gttips_destiny', $gttips_destiny);

			$gttips_esohead = $request->variable('gttips_esohead', 0);
			$config->set('gttips_esohead', $gttips_esohead);

			$gttips_region = $request->variable('gttips_region', 1);
			$config->set('gttips_region', $gttips_region);

			trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'S_GTTIPS_WOWHEAD'  => isset($config['gttips_wowhead']) ? $config['gttips_wowhead'] : false,
			'S_GTTIPS_DIABLO3'  => isset($config['gttips_diablo3']) ? $config['gttips_diablo3'] : false,
			'S_GTTIPS_WILDHEAP' => isset($config['gttips_wildheap']) ? $config['gttips_wildheap'] : false,
			'S_GTTIPS_LOLTIP'   => isset($config['gttips_loltip']) ? $config['gttips_loltip'] : false,
			'S_GTTIPS_ZAM'      => isset($config['gttips_zam']) ? $config['gttips_zam'] : false,
			'S_GTTIPS_XIVDB'    => isset($config['gttips_xivdb']) ? $config['gttips_xivdb'] : false,
			'S_GTTIPS_SWTOR'    => isset($config['gttips_swtor']) ? $config['gttips_swtor'] : false,
			'S_GTTIPS_DESTINY'  => isset($config['gttips_destiny']) ? $config['gttips_destiny'] : false,
			'S_GTTIPS_ESOHEAD'  => isset($config['gttips_esohead']) ? $config['gttips_esohead'] : false,

			'S_GTTIPS_REGION'   => isset($config['gttips_region']) ? $config['gttips_region'] : false,
			'U_ACTION'          => $this->u_action,
		));
	}
}
