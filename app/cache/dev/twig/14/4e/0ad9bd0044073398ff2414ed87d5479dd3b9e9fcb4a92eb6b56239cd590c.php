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

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<form>
\t<div class=\"form-group\">
\t\t<label>Builder Name</label> <input type=\"text\" class=\"form-control\"
\t\t\tplaceholder=\"Enter Builder Name\">
\t</div>
\t<div class=\"form-group\">
\t\t<label>Description</label> <input type=\"text\" class=\"form-control\"
\t\t\tplaceholder=\"Description\">
\t</div>
\t<div class=\"form-group\">
\t\t<label>Website</label> <input type=\"text\" class=\"form-control\"
\t\t\tplaceholder=\"http://\">
\t</div>
\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>
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
        return array (  38 => 2,  11 => 1,);
    }
}
