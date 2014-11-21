<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Framework\Classes
 */

namespace AxC\Framework\Classes;

class Math
{
	use \October\Rain\Support\Traits\Singleton;

	/**
	 * Return the sign of @var $x
	 * @param number $x
	 */
	public function sign($x)
	{
		return min( 1, max(-1, $x) );
	}
}