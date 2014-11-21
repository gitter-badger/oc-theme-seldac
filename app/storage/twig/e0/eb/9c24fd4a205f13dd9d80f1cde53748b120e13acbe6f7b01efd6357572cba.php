<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/pages/404.htm */
class __TwigTemplate_e0eb9c24fd4a205f13dd9d80f1cde53748b120e13acbe6f7b01efd6357572cba extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"rows\">
            <div class=\"col-xs-2 text-center\">
                <br />
                <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-xs-10\">
                <h1>You appear to be lost...</h1>
                <p>We're very sorry, but the page you requested <em>cannot be found</em> here.</p>
                <p>Try returning to where you started with this compass.</p>
                <p><small><em>Error code: 404</em></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
