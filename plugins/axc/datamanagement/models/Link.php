<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagements\Models
 */

namespace AxC\DataManagement\Models;

use Lang;
use Model;
use BackendAuth;
use Backend\Model\User;

/**
 * Link model class
 */
class Link extends Model
{
	/**
	 * Model validation
	 */
	use \October\Rain\Database\Traits\Validation;

	/**
	 * DB Table name.
	 * @var string
	 */
	protected $table = 'axc_data_management_link';

	/**
	 * To translate the attributes.
	 * @param array
	 */
	public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

	/**
	 * Attributes to translate.
	 * @var array
	 */
	public $translatable = [
		'title',
		'description'
	];

	/**
	 * Created and update by users.
	 * @var array
	 */
	public $belongsTo = [
		'created_by' => ['Backend\Models\User', 'foreignKey' => 'created_by_id'],
		'updated_by' => ['Backend\Models\User', 'foreignKey' => 'updated_by_id']
	];

	/**
	 * Single file attachment.
	 * @var array
	 */
	public $attachOne = [
		'image' => ['System\Models\File']
	];

	/**
	 * Modal validation.
	 * @var array
	 */
	public $rules = [
		'title'       => 'required|between:5,100',
		'url'         => 'required',
		'position'    => 'required',
		'description' => 'required'
	];

	/**
	 * Return the CSS class names depend on status of link (published or not).
	 * @return string
	 */
	public function publishedCssClass()
	{
		return $this->published ? 'icon-check text-success' : 'icon-times text-danger';
	}

	/**
	 * Return the path of the image link.
	 * @return string
	 */
	public function imagePath()
	{
		return $this->image ? $this->image->getThumb(
			Settings::get('link_image_width', 120),
			Settings::get('link_image_height', 120),
			[ 'mode' => 'crop']
		) : 'http://www.placehold.it/120x120';
	}

	private function __avatar($field, $size)
	{
		return $this->$field ?
			$this->$field->getAvatarThumb($size) :
			'assets/images/user.png';
	}

	public function updatedByAvatar($size)
	{
		return $this->__avatar('updated_by', $size);
	}

	public function createdByAvatar($size)
	{
		return $this->__avatar('created_by', $size);
	}

	public function beforeCreate()
	{
		$this->created_by_id = BackendAuth::getUser()->id;
	}

	public function beforeUpdate()
	{
		$this->updated_by_id = BackendAuth::getUser()->id;
	}
}