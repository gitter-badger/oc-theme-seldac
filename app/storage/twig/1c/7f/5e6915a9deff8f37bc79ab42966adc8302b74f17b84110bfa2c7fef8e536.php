<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/i18n/menu-xs.htm */
class __TwigTemplate_1c7f5e6915a9deff8f37bc79ab42966adc8302b74f17b84110bfa2c7fef8e536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- i18-select-xs -->
<? foreach (\$this->app->i18n() as \$i18n): ?>
\t<a data-tooltip data-placement=\"right\"
\t\tclass=\"pull-left btn i18n-xs visible-xs btn-<?= \$this->app->i18n()->is(\$i18n) ? 'success' : 'default' ?>\"
\t\thref=\"<?= \$this->ctrl->i18nLink(\$i18n->name) ?>\" title=\"<?= \$i18n->title ?>\">
\t\t<i class=\"flag-icon flag-icon-<?= \$i18n->locale ?>\"></i>
\t</a><!-- /a - <?= \$i18n ?> -->
<? endforeach ?>
<!-- /i18-select-xs -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/i18n/menu-xs.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
