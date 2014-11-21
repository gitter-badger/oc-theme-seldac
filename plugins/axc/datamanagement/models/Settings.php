<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\Models
 */

namespace AxC\DataManagement\Models;

use Model;

/**
 * DataManagement Settings model
 */
class Settings extends Model
{
	/**
	 * Implement the System.Behaviors.SettingsModel behavior.
	 * @param array 
	 */
	public $implement = ['System.Behaviors.SettingsModel'];

	/**
	 * A unique code.
	 * @param string
	 */
	public $settingsCode = 'axc_data_management_settings';

	/**
	 * Reference to field configuration
	 * @param string
	 */
	public $settingsFields = 'fields.yaml';
}