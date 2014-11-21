<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Links\Updates
 */

namespace AxC\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Create the Link DB scheme.
 */
class CreateLinkTable extends Migration
{
	/**
	 * Create the DB scheme.
	 * @return null;
	 */
	public function up()
	{
		Schema::dropIfExists('axc_data_management_link');
		Schema::create('axc_data_management_link', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('title')->unique()->index();
			$table->text('url')->unique()->index();
			$table->integer('position');
			$table->boolean('published')->default(false)->index();
			$table->text('description')->unique();
			$table->timestamps();
			$table->integer('created_by_id')->nullable();
			$table->integer('updated_by_id')->nullable();
		});
	}

	/**
	 * Delete the DB scheme.
	 * @return null;
	 */
	public function down()
	{
		Schema::drop('axc_data_management_link');
	}
}