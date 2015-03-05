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
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<nav class=\"navbar navbar-inverse navbar-static-top\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\"
\t\t\t\t\tdata-toggle=\"collapse\" data-target=\"#home-header\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">搜美房</a>
\t\t\t</div>
\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"home-header\">
\t\t\t\t<ul class=\"nav navbar-nav headerCases\">
\t\t\t\t\t<li><button class=\"cta grey small rounded\">西雅图</button></li>
\t\t\t\t\t<li><button class=\"cta grey small rounded\">旧金山</button></li>
\t\t\t\t\t<li><button class=\"cta grey small rounded\">洛杉矶</button></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- /.navbar-collapse -->
\t\t</nav>
\t</div>

\t<div class=\"row\">
\t\t<div id=\"builder-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getAlbum", array(), "method"), "getPhotos", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 33
                echo "\t\t\t\t<li data-target=\"builder-carousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
\t\t\t\t\tclass=\"active\"></li> ";
            } else {
                // line 35
                echo "\t\t\t\t<li data-target=\"builder-carousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"></li>
\t\t\t\t";
            }
            // line 36
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getAlbum", array(), "method"), "getPhotos", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 43
                echo "\t\t\t\t<div class=\"item active\">
\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t";
            }
            // line 46
            echo " <img src=\"";
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["photo"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</div>
\t\t\t\t<!-- Controls -->
\t\t\t\t<a class=\"left carousel-control\" href=\"#builder-carousel\"
\t\t\t\t\trole=\"button\" data-slide=\"prev\"> <span
\t\t\t\t\tclass=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a> <a class=\"right carousel-control\" href=\"#builder-carousel\"
\t\t\t\t\trole=\"button\" data-slide=\"next\"> <span
\t\t\t\t\tclass=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h2>
\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getName", array(), "method"), "html", null, true);
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getWebsite", array(), "method"), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"_blank\"></a>
\t\t\t</h2>
\t\t\t<div class=\"row caseElementText\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["builder"]) ? $context["builder"] : $this->getContext($context, "builder")), "getDescription", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
    }

    // line 74
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
        return array (  203 => 74,  193 => 69,  183 => 64,  166 => 49,  148 => 46,  144 => 45,  140 => 43,  121 => 41,  115 => 37,  101 => 36,  95 => 35,  89 => 33,  70 => 31,  39 => 2,  11 => 1,);
    }
}
