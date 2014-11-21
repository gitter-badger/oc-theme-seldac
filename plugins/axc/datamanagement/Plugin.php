<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement
 */

namespace AxC\DataManagement;

use Backend;
use Lang;
use System\Classes\PluginBase;

/**
 * DataManagement Plugin Information File
 */
class Plugin extends PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = ['AxC.Framework'];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'        => 'Data Management',
			'description' => Lang::get('axc.datamanagement::lang.plugin.description'),
			'author'      => 'Alex Carrega',
			'icon'        => 'icon-inbox'
		];
	}

	/**
	 * Register the backend navigation menu.
	 * @return array
	 */
	public function registerNavigation()
	{
		return
		[
			'link' => [
				'label'       => Lang::get('axc.datamanagement::lang.plugin.label'),
				'url'         => Backend::url('axc/datamanagement/link'),
				'icon'        => 'icon-inbox',
				'permissions' => ['axc.data_management.link'],
				'order'       => 1,

				'sideMenu' => [
					'link' => [
						'label'       => 'Link',
						'icon'        => 'icon-list',
						'url'         => Backend::url('axc/datamanagement/link'),
						'permissions' => ['axc.data_management.link'],
					],
					'settings' => [
						'label'       => Lang::get('system::lang.settings.menu_label'),
						'icon'        => 'icon-cog',
						'url'         => Backend::url('system/settings/update/axc/datamanagement/settings'),
					]
				]
			]
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return [
			'AxC\DataManagement\Components\Link' => 'data_management_link'
		];
	}

	/**
	 * Register the user permissions.
	 * @return array
	 */
	public function registerPermissions()
	{
		return [
			'axc.data_management.link' => ['label' => 'Link management']
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
				'label'       => Lang::get('axc.datamanagement::lang.settings.label'),
				'icon'        => 'icon-inbox',
				'description' => Lang::get('axc.datamanagement::lang.settings.description'),
				'class'       => 'AxC\DataManagement\Models\Settings',
				'order'       => 1
			]
		];
	}

	public function registerReportWidgets()
	{
		return [
			'Axc\DataManagement\ReportWidgets\Link' => [
				'label' => Lang::get('axc.datamanagement::lang.widget.label'),
				'context' => 'dashboard'
			]
		];
	}
}