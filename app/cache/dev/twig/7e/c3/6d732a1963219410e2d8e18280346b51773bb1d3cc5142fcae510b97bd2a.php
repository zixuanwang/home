<?php

/* ::header.html.twig */
class __TwigTemplate_7ec36d732a1963219410e2d8e18280346b51773bb1d3cc5142fcae510b97bd2a extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-static-top\">
\t<div class=\"container\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\"
\t\t\t\tdata-toggle=\"collapse\" data-target=\"#home-header\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">搜美房</a>
\t\t</div>
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"home-header\">
\t\t\t<ul class=\"nav navbar-nav headerCases\">
\t\t\t\t<li><a class=\"cta grey small rounded\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("seattle");
        echo "\" id=\"seattle-button\">西雅图</a></li>
\t\t\t\t<li><a class=\"cta grey small rounded\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("portland");
        echo "\" id=\"portland-button\">波特兰</a></li>
\t\t\t\t<li><a class=\"cta grey small rounded\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sf");
        echo "\" id=\"sf-button\">旧金山</a></li>
\t\t\t\t<li><a class=\"cta grey small rounded\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("la");
        echo "\" id=\"la-button\">洛杉矶</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  47 => 18,  43 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }
}
