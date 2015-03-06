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
\t\t<div class=\"col-md-12\"><h2 class=\"text-center\">
\t\t\t样板间
\t\t\t</h2>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 12
            echo "\t\t<div class=\"col-xs-12 col-md-4\">
\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\thref=\"";
            // line 14
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"model_thumb\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 16
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2 class=\"text-center\">户型图</h2>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floorplans"]) ? $context["floorplans"] : $this->getContext($context, "floorplans")));
        foreach ($context['_seq'] as $context["_key"] => $context["floorplan"]) {
            // line 29
            echo "\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\thref=\"";
            // line 31
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"floorplan_thumb\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 33
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['floorplan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>
\t<div id=\"model_container\">
\t\t<div class=\"model_item width2 height2\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">1</th>
\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2</th>
\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">3</th>
\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
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
        return "AcmeMyBundle:Default:model.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 74,  109 => 37,  99 => 33,  94 => 31,  90 => 29,  86 => 28,  76 => 20,  66 => 16,  61 => 14,  57 => 12,  53 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
