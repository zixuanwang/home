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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " <div class=\"container\">
\t<h2>Add a New Builder</h2>
\t<hr/>
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t  <div class=\"form-group\">
\t    <label for=\"nameofbuilder\">Name of the Builder</label>
\t    <input name=\"nameofbuilder\" type=\"text\" class=\"form-control\" id=\"nameofBuilder\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"urlofbuilder\">Website Builder</label>
\t    <input name=\"urlofbuilder\" type=\"text\" class=\"form-control\" id=\"urlofBuilder\" placeholder=\"http://\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"description\">Description</label>
\t    <textarea name=\"description\" class=\"form-control\" id=\"description\" rows=\"4\"></textarea>
\t  </div>
\t  <div class=\"form-group\">
\t\t<label for=\"logofile\">Logo of the Builder</label>
\t\t<input name=\"logofile\" type=\"file\" id=\"logofile\" accept=\"image/*\" />
\t  </div>
\t  <hr/>
\t  <button type=\"submit\" class=\"btn btn-default\">Add</button>
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
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
