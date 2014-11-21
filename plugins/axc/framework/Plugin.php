<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Framework
 */

namespace AxC\Framework;

use Lang;
use System\Classes\PluginBase;

/**
 * Framework Plugin Information File.
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
			'name'        => 'Framework',
			'description' => Lang::get('axc.framework::lang.plugin.description'),
			'author'      => 'Alex Carrega',
			'icon'        => 'icon-cubes'
		];
	}
}