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

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container\">
\t<h2>Add a New Home Model</h2>
\t<hr />
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nameofmodel\">Name of the Model</label> <input
\t\t\t\tname=\"nameofmodel\" type=\"text\" class=\"form-control\" id=\"nameofmodel\"
\t\t\t\tplaceholder=\"Hickory\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numofbed\">Number of Bedrooms</label> <input
\t\t\t\tname=\"numofbed\" type=\"text\" class=\"form-control\" id=\"numofbed\"
\t\t\t\tplaceholder=\"4\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numofbath\">Number of Bathrooms</label> <input
\t\t\t\tname=\"numofbath\" type=\"text\" class=\"form-control\" id=\"numofbed\"
\t\t\t\tplaceholder=\"2.75\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numofgarage\">Number of Garage</label> <input
\t\t\t\tname=\"numofgarage\" type=\"text\" class=\"form-control\" id=\"numofgarage\"
\t\t\t\tplaceholder=\"2\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numofstory\">Number of Stories</label> <input
\t\t\t\tname=\"numofstory\" type=\"text\" class=\"form-control\" id=\"numofstory\"
\t\t\t\tplaceholder=\"2\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"squarefeet\">Square Feet</label> <input name=\"squarefeet\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"squarefeet\" placeholder=\"2311\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"description\">Description</label>
\t\t\t<textarea name=\"description\" class=\"form-control\" id=\"description\"
\t\t\t\trows=\"4\"></textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"facade\">Facade of the Model</label> <input type=\"file\"
\t\t\t\tid=\"facade\" name=\"facade\" accept=\"image/*\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"image\">Images of the Model</label> <input type=\"file\"
\t\t\t\tid=\"image\" name=\"image[]\" multiple=\"multiple\" accept=\"image/*\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"floorplan\">Floorplans of the Model</label> <input
\t\t\t\ttype=\"file\" id=\"floorplan\" name=\"floorplan[]\" multiple=\"multiple\"
\t\t\t\taccept=\"image/*\" />
\t\t</div>
\t\t<hr />
\t\t<button type=\"submit\" class=\"btn btn-default\">Add</button>
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
        return array (  38 => 2,  11 => 1,);
    }
}
