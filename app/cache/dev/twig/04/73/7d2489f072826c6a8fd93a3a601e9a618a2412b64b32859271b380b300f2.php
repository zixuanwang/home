<?php

/* AcmeMyBundle:Manage:model.html.twig */
class __TwigTemplate_04737d2489f072826c6a8fd93a3a601e9a618a2412b64b32859271b380b300f2 extends Twig_Template
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
\t<h2>Add a New Home Model</h2>
\t<hr/>
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t  <div class=\"form-group\">
\t    <label for=\"nameofmodel\">Name of the Model</label>
\t    <input name=\"nameofmodel\" type=\"text\" class=\"form-control\" id=\"nameofmodel\" placeholder=\"Hickory\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"numofbed\">Number of Bedrooms</label>
\t    <input name=\"numofbed\" type=\"text\" class=\"form-control\" id=\"numofbed\" placeholder=\"4\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"numofbath\">Number of Bathrooms</label>
\t    <input name=\"numofbath\" type=\"text\" class=\"form-control\" id=\"numofbed\" placeholder=\"2.75\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"numofgarage\">Number of Garage</label>
\t    <input name=\"numofgarage\" type=\"text\" class=\"form-control\" id=\"numofgarage\" placeholder=\"2\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"numofstory\">Number of Stories</label>
\t    <input name=\"numofstory\" type=\"text\" class=\"form-control\" id=\"numofstory\" placeholder=\"2\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"squarefeet\">Square Feet</label>
\t    <input name=\"squarefeet\" type=\"text\" class=\"form-control\" id=\"squarefeet\" placeholder=\"2311\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"description\">Description</label>
\t    <textarea name=\"description\" class=\"form-control\" id=\"description\" rows=\"4\"></textarea>
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"inputimage\">Images of the Model</label>
\t    <input type=\"file\" id=\"inputimage\" name=\"files[]\" multiple=\"multiple\" accept=\"image/*\" />
\t  </div>
\t  <hr/>
\t  <button type=\"submit\" class=\"btn btn-default\">Add</button>
\t</form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:model.html.twig";
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
