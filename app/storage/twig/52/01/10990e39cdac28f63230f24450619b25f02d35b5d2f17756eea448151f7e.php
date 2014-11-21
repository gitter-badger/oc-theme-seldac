<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/pages/link.htm */
class __TwigTemplate_520110990e39cdac28f63230f24450619b25f02d35b5d2f17756eea448151f7e extends Twig_Template
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
        echo "<div class=\"container\">
\t<div class=\"page-header text-center\">
\t\t<h1>Link</h1>
\t";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("flash"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "\t</div>

\t<ul class=\"media-list\">
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data_management_link"]) ? $context["data_management_link"] : null), "published", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 9
            echo "\t\t\t<li class=\"media mb-50px\">
\t\t\t\t<a class=\"pull-left mr-20px\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\" target=\"_link\">
\t\t\t\t\t<img class=\"media-object img-thumbnail w-120px h-120px\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "imagePath", array(), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
            echo "\">
\t\t\t\t</a>
\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t<h4 class=\"media-heading text-success\"><strong>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
            echo "</strong></h4>
\t\t\t\t\t";
            // line 15
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["link"], "description", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/pages/link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  56 => 15,  52 => 14,  44 => 11,  40 => 10,  37 => 9,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
