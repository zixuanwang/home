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
\t<div class=\"row model-gallery\">
\t\t<div id=\"columns\">
\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 7
            echo "\t\t\t<div class=\"pin\">
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model", array("id" => $this->getAttribute($context["model"], "getId", array(), "method"))), "html", null, true);
            echo "\"> <img
\t\t\t\t\tclass=\"pin-image\"
\t\t\t\t\tsrc=\"";
            // line 10
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($context["model"], "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"></a>
\t\t\t\t<h4>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t<p>";
            // line 12
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["model"], "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
            echo " 平方米</p>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</div>
\t</div>
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
        return array (  76 => 15,  67 => 12,  63 => 11,  59 => 10,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
