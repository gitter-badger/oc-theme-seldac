<?php

/* C:\Users\Alex\Documents\Projects\octobercms\seldac/themes/seldac/layouts/default.htm */
class __TwigTemplate_1d771fafdb56b08c0be988b688e730d582bb02f466dbb32650953d3badc6eaf1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

\t\t<meta name=\"author\" content=\"Alex Carrega (AxC - http://www.alexcarrega.com)\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
\t\t<meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/logo.png");
        echo "\" />

\t\t<link href=\"//cdn.bootcss.com/animate.css/3.2.0/animate.min.css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/font-awesome.css", 1 => "assets/css/bootstrap.css", 2 => "assets/css/jasny-bootstrap.css", 3 => "assets/css/theme.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 21
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 22
        echo "\t</head>

\t<body class=\"page-";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
\t\t<!-- Header -->
\t\t<header id=\"layout-header\" class=\"header-navbar\">
\t\t\t";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "\t\t</header>

\t\t<!-- Content -->
\t\t<div id=\"layout-content\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 33
        echo "\t\t</div>

\t\t<!-- Footer -->
\t\t<footer id=\"layout-footer\">
\t\t\t";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "\t\t</footer>

\t\t<!-- Scripts -->
\t\t<script src=\"//code.jquery.com/jquery-2.1.1.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js\"></script>
\t\t";
        // line 44
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 45
        echo "\t\t";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 46
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Alex\\Documents\\Projects\\octobercms\\seldac/themes/seldac/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  101 => 45,  94 => 44,  86 => 38,  82 => 37,  76 => 33,  74 => 32,  68 => 28,  64 => 27,  56 => 24,  52 => 22,  49 => 21,  46 => 20,  44 => 15,  38 => 12,  32 => 9,  24 => 4,  19 => 1,);
    }
}
