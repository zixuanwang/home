<?php

/* AcmeMyBundle:Default:community.show.html.twig */
class __TwigTemplate_404b98684f756c77fb38f7283a5642328ba5e898eb8e5d6181c3fee7c811b61f extends Twig_Template
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
\t<div class=\"row model-gallery\">
\t\t<div id=\"columns\">
\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["model_price_array"]) ? $context["model_price_array"] : $this->getContext($context, "model_price_array")));
        foreach ($context['_seq'] as $context["_key"] => $context["model_price"]) {
            // line 7
            echo "\t\t\t<div class=\"pin\">
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model", array("id" => $this->getAttribute($this->getAttribute($context["model_price"], "model", array(), "array"), "getId", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t<img class=\"pin-image\"
\t\t\t\t\tsrc=\"";
            // line 10
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["model_price"], "model", array(), "array"), "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t</a>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t<h4>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["model_price"], "model", array(), "array"), "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<img src=\"/images/lennar.png\" class=\"pin-builder\">
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 23
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute($context["model_price"], "model", array(), "array"), "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
            // line 24
            echo " 平方米</div>

\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 26
            echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["model_price"], "price", array(), "array") * 6.3) / 10000)), "html", null, true);
            // line 27
            echo " 万元</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</div>
\t</div>
\t<hr />
\t";
        // line 34
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:community.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 31,  86 => 27,  84 => 26,  80 => 24,  78 => 23,  66 => 14,  59 => 10,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
