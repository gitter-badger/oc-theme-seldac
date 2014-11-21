<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/flash.htm */
class __TwigTemplate_8b10c043f376f7baf40b78456eb6a7f477f7f9e8546771cefc7a8fe98e54083b extends Twig_Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 2
            echo "\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t<i class=\"icon icon-";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo " fa-2x pull-left\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t</div>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }
}
