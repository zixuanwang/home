<?php

/* AcmeMyBundle:Manage:builder.html.twig */
class __TwigTemplate_d4a7281c6f2827873958b9ae8d77993fdbd11d773f3a389ca2e847908a3ac6f0 extends Twig_Template
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
\t<h2>Add a New Builder</h2>
\t<hr />
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"name\">Name of the Builder</label> <input name=\"name\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"name\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"url\">Website Builder</label> <input name=\"url\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"url\" placeholder=\"http://\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"description\">Description</label>
\t\t\t<textarea name=\"description\" class=\"form-control\" id=\"description\"
\t\t\t\trows=\"4\"></textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"logofile\">Logo of the Builder</label> <input
\t\t\t\tname=\"logofile\" type=\"file\" id=\"logofile\" accept=\"image/*\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"images\">Images of the Builder</label> <input type=\"file\"
\t\t\t\tid=\"images\" name=\"images[]\" multiple=\"multiple\" accept=\"image/*\" />
\t\t</div>
\t\t<hr />
\t\t<button type=\"submit\" class=\"btn btn-default\">Add</button>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:builder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  11 => 1,);
    }
}
