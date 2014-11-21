<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Seldac
 */

namespace AxC\Seldac;

use Backend;
use Lang;
use System\Classes\PluginBase;

/**
 * Seldac Plugin Information File
 */
class Plugin extends PluginBase
{
	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'        => 'Seldac',
			'description' => Lang::get('axc.seldac::lang.plugin.description'),
			'author'      => 'Alex Carrega',
			'icon'        => 'icon-fire'
		];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'       => Lang::get('axc.seldac::lang.settings.label'),
				'icon'        => 'icon-fire',
				'description' => Lang::get('axc.seldac::lang.settings.description'),
				'class'       => 'AxC\Seldac\Models\Settings',
				'order'       => 1
			]
		];
	}
}
