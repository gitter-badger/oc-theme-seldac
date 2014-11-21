<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/i18n/menu.htm */
class __TwigTemplate_725a53fad8d551d9a015376866626c9246dfc55d02b1018ff25fe357f95b8561 extends Twig_Template
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
        echo "<!-- i18n-select -->
<ul class=\"nav navbar-nav navbar-right hidden-xs i18n\">
\t<li class=\"dropdown\">
\t\t<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-flag\"></i></a>
\t\t<ul class=\"dropdown-menu pt-0px pb-0px\" role=\"menu\">
\t\t\t<? foreach (\$this->app->i18n() as \$i18n): ?>
\t\t\t\t<li class=\"<?= \$this->app->i18n()->is(\$i18n->name) ? 'active' : STR_BLANK ?>\">
\t\t\t\t\t<a class=\"pt-10px pb-10px pl-20px pr-20px\" href=\"<?= \$this->ctrl->i18nLink(\$i18n->name) ?>\">
\t\t\t\t\t\t<i class=\"flag-icon flag-icon-<?= \$i18n->locale ?> mr-5px\" ></i><?= \$i18n->title ?></a>
\t\t\t\t</li>
\t\t\t\t<!-- /<?= \$i18n ?> -->
\t\t\t<? endforeach ?>
\t\t</ul><!-- /dropdown-menu -->
\t</li><!-- /dropdown-toggle -->
</ul><!--/ dropdown -->
<!-- /i18n-select -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/i18n/menu.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
