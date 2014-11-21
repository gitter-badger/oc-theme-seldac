<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/header.htm */
class __TwigTemplate_6966afe8980d89e7d5e9aefefbf898815075651f09d5e3ea16320c2f8bd9212c extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-fixed-top\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button class=\"navbar-toggle\" type=\"button\" data-target=\".navbar-collapse\" data-toggle=\"collapse\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>

\t\t\t<a class=\"navbar-brand hidden-xs mr-50px p-0px pt-5px\"
\t\t\t\thref=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("index");
        echo "\"><img
\t\t\t\tsrc=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/header/logo.png");
        echo "\"
\t\t\t\talt=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("full-name");
        echo "\" /></a><!-- /.navbar-brand.hidden-xs -->
\t\t\t<a class=\"navbar-brand visible-xs\"
\t\t\t\thref=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter((isset($context["index"]) ? $context["index"] : null));
        echo "\"><strong>";
        echo $this->env->getExtension('CMS')->themeFilter("name");
        echo "</strong></a><!-- /.navbar-brand.visible-xs -->
\t\t</div><!-- /.navbar-header -->

\t\t<div class=\"navbar-collapse collapse\">
\t\t\t";
        // line 19
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['selected_item'] = twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()))        ;
        echo $this->env->getExtension('CMS')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "\t\t</div><!-- /.navbar-collapse -->
\t</div><!-- /.container -->
</div><!-- /.navbar -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  53 => 19,  44 => 15,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
