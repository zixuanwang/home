<?php

/* AcmeMyBundle:Default:model.show.html.twig */
class __TwigTemplate_1e7c96879cb1dc6e177cb8657ef6d26e652ea2eb243dd46e8e5ba69128fbd48f extends Twig_Template
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
\t";
        // line 3
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"img-responsive\">
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h3 class=\"text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getName", array(), "method"), "html", null, true);
        echo "户型</h3>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td scope=\"row\">使用面积</td>
\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
        echo " 平方米</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td scope=\"row\">楼层</td>
\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumStories", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td scope=\"row\">卧室</td>
\t\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBeds", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td scope=\"row\">洗手间</td>
\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBaths", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td scope=\"row\">车库</td>
\t\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumGarages", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h3 class=\"text-center\">样板间</h3>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 51
            echo "\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 thumb\">
\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\thref=\"";
            // line 53
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"model_thumb fade img-responsive\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 55
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h3 class=\"text-center\">户型图</h3>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floorplans"]) ? $context["floorplans"] : $this->getContext($context, "floorplans")));
        foreach ($context['_seq'] as $context["_key"] => $context["floorplan"]) {
            // line 68
            echo "\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 thumb\">
\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\thref=\"";
            // line 70
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"floorplan_thumb fade\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 72
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['floorplan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t</div>
\t<hr />


\t";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:model.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 80,  169 => 76,  159 => 72,  154 => 70,  150 => 68,  146 => 67,  136 => 59,  126 => 55,  121 => 53,  117 => 51,  113 => 50,  97 => 37,  90 => 33,  83 => 29,  76 => 25,  69 => 21,  57 => 12,  48 => 6,  42 => 3,  39 => 2,  11 => 1,);
    }
}
