<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/partials/footer.htm */
class __TwigTemplate_bcf5bf657fe40248a2152a72dfb51247565d3e473135c30e876357664874be3d extends Twig_Template
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
        echo "<footer>
\t<div class=\"container p-20px\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t&copy; ";
        // line 5
        echo "year";
        echo " &bull; ";
        echo "full-name";
        echo "
\t\t\t\t<span class=\"hidden-xs\">&bull;</span> <br class=\"visible-xs\"/>
\t\t\t\t";
        // line 7
        echo "street";
        echo " n. ";
        echo "number";
        echo " int.
\t\t\t\t";
        // line 8
        echo "int";
        echo " <span class=\"hidden-xs\">&bull;</span>
\t\t\t\t";
        // line 9
        echo "zip";
        echo " ";
        echo "city";
        echo "
\t\t\t\t(";
        // line 10
        echo "prov";
        echo ") <span class=\"hidden-xs\">&bull;</span>
\t\t\t\t";
        // line 11
        echo "vat_abbr";
        echo " ";
        echo "vat";
        echo "
\t\t\t</div><!-- /.col-md-6 -->

\t\t\t<div class=\"col-md-6 col-xs-12 text-right\">
\t\t\t\t<div class=\"row mb-10px\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<em>";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Page loaded in"));
        echo "<span
\t\t\t\t\t\t\t\tclass=\"label label-success ml-5px mr-5px\">";
        // line 18
        echo "timer";
        echo "</span>
\t\t\t\t\t\t\t\t";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("seconds"));
        echo "</em>
\t\t\t\t\t</div><!-- /.col-md-12 -->
\t\t\t\t</div><!-- /.row -->
\t\t\t\t";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("powered"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "\t\t\t</div><!-- /.col-md-6 -->
\t\t</div><!-- /.row -->
\t</div><!-- /.container -->
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  77 => 22,  71 => 19,  67 => 18,  63 => 17,  52 => 11,  48 => 10,  42 => 9,  38 => 8,  32 => 7,  25 => 5,  19 => 1,);
    }
}
