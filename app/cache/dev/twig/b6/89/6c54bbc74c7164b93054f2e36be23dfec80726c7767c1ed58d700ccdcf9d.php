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
\t<div class=\"row category-bar\">
\t\t<div class=\"col-lg-12 text-center\">
\t\t\t<div class=\"category-item\">
\t\t\t\t<img src=\"/images/school.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t<h5>优秀学区</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"category-item\">
\t\t\t\t<img src=\"/images/invest.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t<h5>投资升值</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"category-item\">
\t\t\t\t<img src=\"/images/downtown.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t<h5>热门地段</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"category-item\">
\t\t\t\t<img src=\"/images/sea.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t<h5>养老休闲</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"container\">
\t\t\t\t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 36
            echo "\t\t\t\t<div class=\"pin\">
\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model", array("id" => $this->getAttribute($context["model"], "getId", array(), "method"))), "html", null, true);
            echo "\"> <img
\t\t\t\t\t\tclass=\"pin-image\"
\t\t\t\t\t\tsrc=\"";
            // line 39
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["model"], "getFacades", array(), "method"), 0, array(), "array"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<h5>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getName", array(), "method"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 46
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["model"], "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
            // line 47
            echo " 平方米， ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBeds", array(), "method"), "html", null, true);
            echo "卧，";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBaths", array(), "method"), "html", null, true);
            echo "卫
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 49
            if (($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") == 0)) {
                // line 50
                echo " 无现房 ";
            } else {
                echo " ￥";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") * 6.3) / 10000)), "html", null, true);
                // line 51
                echo " 万元起 ";
            }
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 53
            if ( !twig_test_empty($this->getAttribute($context["model"], "getImages", array(), "method"))) {
                // line 54
                echo "\t\t\t\t\t<div class=\"ribbon-wrapper-green\">
\t\t\t\t\t\t<div class=\"ribbon-green\">样板间</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 text-right\">
\t\t\t<nav>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_array"]) ? $context["page_array"] : $this->getContext($context, "page_array")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                // line 68
                echo "\t\t\t\t\t<li class=\"active\"><a
\t\t\t\t\t\thref=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("area" => (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("area" => (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 72
                echo "</a></li> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<hr />
\t";
        // line 78
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
        return array (  184 => 78,  177 => 73,  169 => 72,  164 => 71,  157 => 69,  154 => 68,  148 => 67,  139 => 60,  132 => 58,  126 => 54,  124 => 53,  118 => 51,  113 => 50,  111 => 49,  103 => 47,  101 => 46,  94 => 42,  88 => 39,  83 => 37,  80 => 36,  76 => 35,  41 => 3,  38 => 2,  11 => 1,);
    }
}
