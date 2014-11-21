<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagements\Components
 */

namespace AxC\DataManagement\Components;

use Lang;
use Cms\Classes\ComponentBase;
use AxC\DataManagement\Models\Link as LinkModel;

/**
 * Link component class
 */
class Link extends ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'        => Lang::get('axc.datamanagement::lang.link.component.name'),
			'description' => Lang::get('axc.datamanagement::lang.link.component.description')
		];
	}

	/**
	 * Return the published links.
	 * @return array
	 */
	public function published()
	{
		return LinkModel::where('published', true)->get();
	}
}