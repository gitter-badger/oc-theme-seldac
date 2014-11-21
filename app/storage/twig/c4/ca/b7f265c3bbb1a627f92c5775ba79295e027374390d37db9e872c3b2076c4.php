<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/powered.htm */
class __TwigTemplate_c4cab7f265c3bbb1a627f92c5775ba79295e027374390d37db9e872c3b2076c4 extends Twig_Template
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
        echo "<!-- powered -->
<div class=\"row\" id=\"powered\">
\t<div class=\"col-md-4 col-xs-12 text-center\">
\t\t<a href=\"http://www.alexcarrega.com\" target=\"_blank\" data-tooltip title=\"";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Powered by :axc", array("axc" => "AxC")));
        echo "\">
\t\t\t<img class=\"img-rounded mt-30px\" src=\"";
        // line 5
        echo "axc_logo";
        echo "\"
\t\t\t\talt=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Powered by :axc", array("axc" => "AxC")));
        echo "\" /></a>
\t</div><!-- /.col-md-4.col-xs-12 -->
\t<div class=\"col-md-4 col-xs-12 text-center\">
\t\t<a href=\"http://pwf.alexcarrega.com\" target=\"_blank\" data-tooltip
\t\t\ttitle=\"";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Developed with :pwf", array("pwf" => "PWF")));
        echo "\">
\t\t\t<img src=\"";
        // line 11
        echo "pwf_logo";
        echo "\"
\t\t\t\talt=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Developed with :pwf", array("pwf" => "PWF")));
        echo "\" /></a>
\t</div><!-- /.col-md-4.col-xs-12 -->
\t<div class=\"col-md-4 col-xs-12 text-center\">
\t\t<a href=\"http://www.pc-repair.it\" target=\"_blank\" data-tooltip
\t\t\ttitle=\"";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Developed by :pc_repair", array("pc_repair" => "Pc-Repair")));
        echo "\">
\t\t\t<img class=\"img-rounded mt-30px\" src=\"";
        // line 17
        echo "pc_repair_logo";
        echo " ?>\"
\t\t\t\talt=\"";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Developed by :pc_repair", array("pc_repair" => "Pc-Repair")));
        echo "\" /></a>
\t</div><!-- /.col-md-4.col-xs-12 -->
</div><!-- /.row#powered -->
<!-- /powered -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/powered.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  58 => 17,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
