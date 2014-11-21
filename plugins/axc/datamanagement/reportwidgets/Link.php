<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\DataManagement\ReportWidgetss
 */

namespace Axc\DataManagement\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Axc\DataManagement\Models\Link as LinkModel;
use AxC\Framework\Classes\Math;

class Link extends ReportWidgetBase
{

	public function render()
	{
		$date_current_month = date('Y-m-01 00:00:00');
		$date_previous_month = date( 'Y-m-d 00:00:00', strtotime("first day of previous month") );
		$link_current_month = LinkModel::where( 'created_at', '>=', $date_current_month)->count();
		$link_previous_month = LinkModel::where( 'created_at', '<', $date_current_month )->where( 'created_at', '>=', $date_previous_month )->count();
		$link_total = $link_total = LinkModel::all()->count();
		$link_published = LinkModel::where('published', '=', true)->count();

		switch ( Math::instance()->sign($link_current_month - $link_previous_month) )
		{
			case 1: $link_trend = 'positive'; break;
			case 0: $link_trend = ''; break;
			case -1: $link_trend = 'negative'; break;
		}

		return $this->makePartial('widget', [
			'link_current_month' => $link_current_month,
			'link_previous_month' => $link_previous_month,
			'link_trend' => $link_trend,
			'link_total' => $link_total,
			'link_published' => $link_published,
			'link_goal_meter' => (int)($link_published / $link_total * 100)
		] );
	}
}