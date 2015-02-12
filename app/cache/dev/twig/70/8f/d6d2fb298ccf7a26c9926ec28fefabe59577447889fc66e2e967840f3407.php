<?php

/* AcmeMyBundle:Manage:album.show.html.twig */
class __TwigTemplate_708fd6d2fb298ccf7a26c9926ec28fefabe59577447889fc66e2e967840f3407 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
\t<form name=\"album_form\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("album", array("type" => "add"));
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t    \t<label for=\"exampleInputEmail1\">Title</label>
\t    \t<input name=\"album_name\" type=\"text\" class=\"form-control\" placeholder=\"Title of the Album\">
\t  \t</div>
\t  \t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) ? $context["filenames"] : $this->getContext($context, "filenames")));
        foreach ($context['_seq'] as $context["_key"] => $context["filename"]) {
            // line 11
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, ("/" . $context["filename"]), "html", null, true);
            echo "\" class=\"img-rounded\" alt=\"Responsive image\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<input name=\"";
            // line 15
            echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
            echo "\" type=\"text\" class=\"form-control\" placeholder=\"Name of Photo\">
\t\t\t</div>
\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t  \t<button class=\"btn btn-default\" type=\"submit\">Submit</button>
\t</form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:album.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  63 => 15,  57 => 12,  54 => 11,  50 => 10,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
