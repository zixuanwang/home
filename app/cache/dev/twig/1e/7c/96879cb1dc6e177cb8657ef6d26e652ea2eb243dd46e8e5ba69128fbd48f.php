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
\t\t<div class=\"model-main thumb piece\">
\t\t\t<h3>样板间</h3>
\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " <a class=\"fancybox\" rel=\"group\"
\t\t\t\thref=\"";
            // line 8
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"model_thumb fade img-responsive\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 10
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</div>

\t\t<div class=\"model-side piece\">
\t\t\t<h3 class=\"text-center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getName", array(), "method"), "html", null, true);
        echo "户型</h3>
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"model_thumb img-responsive\">
\t\t\t<div class=\"model-side-detail\">
\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\">使用面积</td>
\t\t\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
        echo " 平方米</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\">楼层</td>
\t\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumStories", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\">卧室</td>
\t\t\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBeds", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\">洗手间</td>
\t\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBaths", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td scope=\"row\">车库</td>
\t\t\t\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumGarages", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"model-main thumb piece\">
\t\t\t<h3>户型图</h3>
\t\t\t";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floorplans"]) ? $context["floorplans"] : $this->getContext($context, "floorplans")));
        foreach ($context['_seq'] as $context["_key"] => $context["floorplan"]) {
            // line 48
            echo "\t\t\t<div class=\"floorplan-thumb-box\">
\t\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\t\thref=\"";
            // line 50
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"> <img
\t\t\t\t\tsrc=\"";
            // line 51
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\" class=\"floorplan-thumb\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['floorplan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</div>
\t</div>
\t<hr />
\t";
        // line 58
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
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
        return array (  152 => 58,  147 => 55,  137 => 51,  133 => 50,  129 => 48,  125 => 47,  114 => 39,  107 => 35,  100 => 31,  93 => 27,  86 => 23,  76 => 16,  72 => 15,  67 => 12,  59 => 10,  54 => 8,  48 => 7,  41 => 3,  38 => 2,  11 => 1,);
    }
}
