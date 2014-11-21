<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/user/menu-xs.htm */
class __TwigTemplate_50ea13f0467fe706df4520ea3a03d5d1f7f9fbb437e14c7ae3b0643a41d876ae extends Twig_Template
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
        echo "<!-- user-menu-xs -->
<? \$fix = \$this->user ? 'out' : 'in' ?>
<a class=\"user-menu-xs visible-xs pull-right btn btn-danger\" data-tooltip data-placement=\"left\"
\ttitle=\"<?= _('Sign '. \$fix) ?>\" href=\"<?= \$this->app->linkTo('sign', \$fix) ?>\">
\t<i class=\"mr-10px fa fa-sign-<?= \$fix ?>\"></i>
</a>
<? if ( \$this->ctrl->isAdmin() ): ?>
\t<a class=\"user-menu-xs visible-xs pull-right btn btn-info\" data-tooltip target=\"_view_site\" data-placement='left'
\t\ttitle=\"<?= _('View site') ?>\" href=\"<?= \$this->app->linkTo('front-end', 'index') ?>\">
\t\t<i class=\"fa fa-sitemap\"></i>
 </a>
<? endif ?>
<? if ( \$this->vars()->check('user') && !\$this->ctrl->isAdmin() ): ?>
\t<a class=\"user-menu-xs visible-xs pull-right btn btn-info\" data-tooltip data-placement='left'
\t\ttitle=\"<?= _('Admin') ?>\" target=\"_admin\" href=\"<?= \$this->app->linkTo('admin', 'index') ?>\">
\t\t<i class=\"glyphicon glyphicon-wrench fa-fw mr-10px\"></i>
\t</a>
<? endif ?>
<!-- /user-menu-xs -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/user/menu-xs.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
