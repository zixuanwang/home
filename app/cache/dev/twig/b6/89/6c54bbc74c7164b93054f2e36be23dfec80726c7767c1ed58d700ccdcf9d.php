<?php

/* AcmeMyBundle:Default:index.html.twig */
class __TwigTemplate_b6896c54bbc74c7164b93054f2e36be23dfec80726c7767c1ed58d700ccdcf9d extends Twig_Template
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
\t";
        // line 3
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"container\">
\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 8
            echo "\t\t\t\t<div class=\"pin\">
\t\t\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model", array("id" => $this->getAttribute($context["model"], "getId", array(), "method"))), "html", null, true);
            echo "\"> <img
\t\t\t\t\t\tclass=\"pin-image\"
\t\t\t\t\t\tsrc=\"";
            // line 11
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["model"], "getFacades", array(), "method"), 0, array(), "array"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t<h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<img src=\"/images/lennar.png\" class=\"pin-builder\">
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 23
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["model"], "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
            // line 24
            echo " 平方米， ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBeds", array(), "method"), "html", null, true);
            echo "卧，";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBaths", array(), "method"), "html", null, true);
            echo "卫</div>

\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 26
            if (($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") == 0)) {
                // line 27
                echo " 无现房 ";
            } else {
                echo " ￥";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") * 6.3) / 10000)), "html", null, true);
                // line 28
                echo " 万元起 ";
            }
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 text-right\">
\t\t\t<nav>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                // line 40
                echo "\t\t\t\t\t<li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li> ";
            }
            // line 43
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<hr />
\t";
        // line 49
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  142 => 44,  136 => 43,  129 => 42,  121 => 40,  115 => 39,  106 => 32,  95 => 28,  90 => 27,  88 => 26,  80 => 24,  78 => 23,  66 => 14,  60 => 11,  55 => 9,  52 => 8,  48 => 7,  41 => 3,  38 => 2,  11 => 1,);
    }
}
