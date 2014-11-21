<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/user/menu.htm */
class __TwigTemplate_379df230a57027e2178bcb1eae3ce9e8c5fd9d9197cf134d7e18818a57c94026 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav navbar-right hidden-xs user-menu\">
\t<li class=\"dropdown\">
\t\t<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i></a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<? if ( \$this->vars()->check('user') ): ?>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"navbar-content w-400px p-15px\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<img src=\"<?= \$this->app->linkTo('admin-account', 'avatar') ?>\" alt=\"Avatar\"
\t\t\t\t\t\t\t\t\tclass=\"img-circle\" height=\"100px\" width=\"100px\" />
\t\t\t\t\t\t\t</div><!-- /.col-md-5 -->
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<span><?= \$this->user->name ?></span>
\t\t\t\t\t\t\t\t<p class=\"text-muted small\"><?= \$this->user->username ?></p>
\t\t\t\t\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t\t\t\t\t<div><span class=\"label label-primary\"><?= \$this->user->group->name ?></span></div>
\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t<a href=\"<?= \$this->user->account_url ?>\" data-tooltip data-placement=\"left\"
\t\t\t\t\t\t\t\t\t\t\ttarget=\"<?= \$this->user->account_target ?>\" title=\"<?= _('Account') ?>\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-primary active\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t</div><!-- /.btn-group -->
\t\t\t\t\t\t\t\t</div><!-- /.text-right -->
\t\t\t\t\t\t\t</div><!-- /.col-md-7 -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.navbar-content -->
\t\t\t\t\t<div class=\"navbar-footer\">
\t\t\t\t\t\t<div class=\"navbar-footer-content p-15px bg-lighten-success-25pc\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<? if ( \$this->ctrl->isAdmin() ): ?>
\t\t\t\t\t\t\t\t\t\t<a target=\"_view_site\" href=\"<?= \$this->app->linkTo('front-end', 'index') ?>\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-default btn-sm\"><i class=\"fa fa-sitemap mr-10px\"></i><?= _('View site') ?></a>
\t\t\t\t\t\t\t\t\t<? else: ?>
\t\t\t\t\t\t\t\t\t\t<a target=\"_admin\" href=\"<?= \$this->app->linkTo('admin', 'index') ?>\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-default btn-sm\"><i class=\"glyphicon glyphicon-wrench mr-10px\"></i>
\t\t\t\t\t\t\t\t\t\t\t<?= _('Admin') ?></a>
\t\t\t\t\t\t\t\t\t<? endif ?>
\t\t\t\t\t\t\t\t</div><!-- /.col-md-6 -->
\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t\t\t\t\t\t<a href=\"<?= \$this->app->linkTo('sign', 'out') ?>\" class=\"btn btn-default btn-sm pull-right\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out mr-10px\"></i><?= _('Sign out') ?></a>
\t\t\t\t\t\t\t\t</div><!-- /.col-md-6 -->
\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t</div><!-- /.navbar-footer-content -->
\t\t\t\t\t</div><!-- navbar-footer -->
\t\t\t\t</li>
\t\t\t<? else: ?>
\t\t\t\t<li><? \$this->module()->core('sign/index') ?></li>
\t\t\t<? endif ?>
\t\t</ul><!-- /.dropdown-menu -->
\t</li><!-- /.dropdown -->
</ul><!-- /.nav.navbar-nar -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/user/menu.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
