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
        echo "<h1>Isotope - masonry gutter, with margin bottom</h1>

<div id=\"model_container\">
\t<div class=\"model_item width2 height2\">
\t\t<table class=\"table table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t<th>Username</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">1</th>
\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t<td>@mdo</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">2</th>
\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t<td>@fat</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">3</th>
\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t<td>@twitter</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 38
            echo "\t<div class=\"model_item\">
\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\thref=\"";
            // line 40
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["photo"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"> <img width=\"100%\"
\t\t\theight=\"100%\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["photo"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>


";
    }

    // line 47
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
        return array (  104 => 47,  97 => 44,  88 => 41,  84 => 40,  80 => 38,  76 => 37,  39 => 2,  11 => 1,);
    }
}
