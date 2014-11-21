<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Controllers
 */

namespace Axc\DataManagement\Controllers;

use BackendMenu;
use AxC\DataManagement\ReportWidgets\Link as LinkReportWidget;

/**
 * Link controller.
 */
class Link extends \Backend\Classes\Controller
{
	/**
	 * Implement the System.Behaviors.FormController behavior and System.Behaviors.ListController behaviors.
	 * @param array
	 */
	public $implement = [
		'Backend.Behaviors.FormController',
		'Backend.Behaviors.ListController'
	];

	/**
	 * Reference to from configuration
	 * @param string
	 */
	public $formConfig = 'form_config.yaml';

	/**
	 * Reference to list configuration
	 * @param string
	 */
	public $listConfig = 'list_config.yaml';

	/**
	 * Set the context and add the asset resources.
	 */
	public function __construct()
	{
		parent::__construct();
		$link_report_widget = new LinkReportWidget($this);
		$link_report_widget->alias = 'link_report_widget';
		$link_report_widget->bindToController();
		BackendMenu::setContext('AxC.DataManagement', 'link', 'link');
		$this->addCss('/plugins/axc/datamanagement/assets/less/style.less');
	}
}