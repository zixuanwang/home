<?php

/* AcmeMyBundle:Manage:album.html.twig */
class __TwigTemplate_d7edac85929f55535475612b9cdbe59a61329f639db3a63f0d62df77ce6700d1 extends Twig_Template
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
        echo "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t<input type=\"file\" id=\"file\" name=\"files[]\" multiple=\"multiple\" accept=\"image/*\" />
\t<input type=\"submit\" value=\"Upload!\" />
</form>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:album.html.twig";
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
