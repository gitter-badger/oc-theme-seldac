<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

?>

@import (reference) "core/less/general/bootstrap/base/_mixins";
@import (reference) "app/less/general/bootstrap/_styles";

<?

	include(__DIR__ .'/../../const.php');

	$styles = [
		'm' => 'margin',
		'mt' => 'margin-top',
		'mb' => 'margin-bottom',
		'ml' => 'margin-left',
		'mr' => 'margin-right',
		'p' => 'padding',
		'pt' => 'padding-top',
		'pb' => 'padding-bottom',
		'pl' => 'padding-left',
		'pr' => 'padding-right',
		'w' => 'width',
		'h' => 'height'
	];

	$step = 5;
	$max = 1000;

	foreach ($styles as $sk => $sv)
		for ($i = 0; $i * $step <= $max; $i++)
			echo STR_DOT . $sk . STR_HYPHEN . ($i * $step) ."px { ". $sv . STR_COLON . ($i * $step) ."px !important; }\n".
					STR_DOT . $sk . STR_HYPHEN . ($i * $step) / 5 ."pc { ". $sv . STR_COLON . ($i * $step) / 5 ."% !important; }\n";

	$less = [
		'tr-delay' => '.transition-delay',
		'an-delay' => '.animation-delay'
	];

	$step = 1;
	$max = 50;
	foreach ($less as $lk => $lv)
		for ($i = 1; $i * $step <= $max; $i++)
			echo STR_DOT . $lk . STR_HYPHEN . ($i * $step) ."s { ". $lv . STR_PARS_OPEN . ($i * $step) ."s); }\n";

	$step = 1;
	$max = 100;

	foreach (['primary', 'success', 'info', 'warning', 'danger'] as $type )
		for ($i = 0; $i * $step <= $max; $i++)
		{
			echo '.bg-lighten-'. $type . STR_HYPHEN . ($i * $step)
				.'pc { background-color: lighten(@'. $type[0] .'-color,'. ($i * $step) ."%) !important; }\n";
			echo '.bg-darken-'. $type . STR_HYPHEN . ($i * $step)
				.'pc { background-color: darken(@'. $type[0] .'-color,'. ($i * $step) ."%) !important; }\n";
		}

	$styles = [
		'lh' => 'line-height'
	];

	$step = 0.05;
	$max = 5;

	foreach ($styles as $sk => $sv)
		for ($i = 0; $i * $step <= $max; $i++)
			echo STR_DOT . $sk . STR_HYPHEN . str_replace( STR_DOT, 'e', ($i * $step) ) ." { ".
				$sv . STR_COLON . STR_SPACE . ($i * $step) ." !important; }\n";

?>

.text-left { text-align: left; }
.text-justify { text-align: justify; }
.t-shadow-white { text-shadow: 0 1px 0 white; }
.strong { font-weight: bold; }
.uppercase { text-transform: uppercase; }
.pointer { cursor: pointer; }

.vmiddle
{
	vertical-align: middle !important;
}

.select
{
	.pointer;

	&:hover
	{
		text-decoration: underline;
	}
}

.sign-in-link:hover
{
	border-bottom: 1px solid @s-color;
	border-left: 1px solid @s-color;
}
