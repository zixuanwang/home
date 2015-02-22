<?php

/* AcmeMyBundle:Default:builder.show.html.twig */
class __TwigTemplate_e6280a3c58a4b3eb11935258741ab2a65a6a950f8139d6c8b65c9e452a39d75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<section class=\"wrap\">
\t<header class=\"header\">
\t\t<a href=\"/\" class=\"headerLogo\"><svg>
\t\t\t<use xlink:href=\"/fonts/header.svg#shapeLogo\"></use></svg></a>
\t\t<div class=\"headerCases\">
\t\t\t<div class=\"headerCasesLine\"></div>
\t\t\t<div class=\"headerCasesFilters\">
\t\t\t\t<button class=\"cta grey small rounded\" data-filter=\"*\">西雅图</button>
\t\t\t\t<button class=\"cta grey small rounded\" data-filter=\".digitalt\">旧金山</button>
\t\t\t\t<button class=\"cta grey small rounded\" data-filter=\".grafisk\">洛杉矶</button>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"headerTools\">
\t\t\t<p>
\t\t\t\tFanges på
\t\t\t\t<svg>
\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeSmallArrow\"></use></svg>
\t\t\t</p>
\t\t\t<div class=\"headerToolsIcons\">
\t\t\t\t<a href=\"tel:+4529902543\" class=\"headerToolsIconsMobile\"><svg>
\t\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeMobile\"></use></svg></a> <a
\t\t\t\t\thref=\"mailto:hello@sampedro.dk\" class=\"headerToolsIconsMail\"><svg>
\t\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeMail\"></use></svg></a>
\t\t\t</div>
\t\t</div>
\t</header>
\t<section class=\"caseSlider wow fadeIn\" data-wow-duration=\"2.5s\"
\t\tdata-wow-offset=\"0\" data-wow-delay=\"0\">
\t\t<img src=\"/uploads/5c600a646e224fd5f92fa7a9ca38feeba7743201.jpg\" />
\t</section>
\t<section class=\"content caseHero\">
\t\t<div class=\"row caseTitle\">
\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t<h2 class=\"fadeInUp\" data-wow-duration=\"0.5s\" data-wow-offset=\"0\"
\t\t\t\t\tdata-wow-delay=\"0\">
\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getName", array(), "method"), "html", null, true);
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getWebsite", array(), "method"), "html", null, true);
        echo "\"
\t\t\t\t\t\ttarget=\"_blank\"><svg>
\t\t\t\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeLink\"></use></svg></a>
\t\t\t\t</h2>
\t\t\t\t<p class=\"fadeInUp\" data-wow-duration=\"0.5s\" data-wow-offset=\"0\"
\t\t\t\t\tdata-wow-delay=\"1s\">Kunde: Dating.dk</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row caseElementText\">
\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t<p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</section>
</section>

";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:builder.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  92 => 48,  77 => 38,  39 => 2,  11 => 1,);
    }
}
