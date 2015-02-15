<?php

/* AcmeMyBundle:Manage:index.html.twig */
class __TwigTemplate_144e0ad9bd0044073398ff2414ed87d5479dd3b9e9fcb4a92eb6b56239cd590c extends Twig_Template
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
        echo "\t<form>
\t  <div class=\"form-group\">
\t    <label>Builder Name</label>
\t    <input type=\"text\" class=\"form-control\" placeholder=\"Enter Builder Name\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label>Description</label>
\t    <input type=\"text\" class=\"form-control\" placeholder=\"Description\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label>Website</label>
\t    <input type=\"text\" class=\"form-control\" placeholder=\"http://\">
\t  </div>
\t  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t</form>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:index.html.twig";
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
