<?php

/* AcmeMyBundle:Manage:community.html.twig */
class __TwigTemplate_d70b3ea16cfa465b901310ad2d49c8b96e463a70d7680394dea94587f587f144 extends Twig_Template
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
        echo "<div class=\"container\">
\t<h2>Add a New Community</h2>
\t<hr/>
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t  <div class=\"form-group\">
\t    <label for=\"name\">Name of the Community</label>
\t    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"address\">Address</label>
\t    <input name=\"address\" type=\"text\" class=\"form-control\" id=\"address\" />
\t  </div>
\t  <div class=\"form-group\">
\t  \t<label for=\"builder\">Choose the Builder</label>
\t    <select name=\"builder\" class=\"form-control\" id=\"builder\">
\t    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["builders"]) ? $context["builders"] : $this->getContext($context, "builders")));
        foreach ($context['_seq'] as $context["_key"] => $context["builder"]) {
            // line 20
            echo "\t\t  <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["builder"], "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['builder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</select>
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"longitude\">Longitude</label>
\t    <input name=\"longitude\" type=\"text\" class=\"form-control\" id=\"longitude\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"latitude\">Latitude</label>
\t    <input name=\"latitude\" type=\"text\" class=\"form-control\" id=\"latitude\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"city\">City</label>
\t    <input name=\"city\" type=\"text\" class=\"form-control\" id=\"city\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"county\">County</label>
\t    <input name=\"county\" type=\"text\" class=\"form-control\" id=\"county\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"state\">State</label>
\t    <input name=\"state\" type=\"text\" class=\"form-control\" id=\"state\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"state\">Zipcode</label>
\t    <input name=\"zipcode\" type=\"text\" class=\"form-control\" id=\"zipcode\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"description\">Description</label>
\t    <textarea name=\"description\" class=\"form-control\" id=\"description\" rows=\"4\"></textarea>
\t  </div>
\t  <div class=\"form-group\">
\t\t<label for=\"map\">Map of the Community</label>
\t\t<input name=\"map\" type=\"file\" id=\"map\" accept=\"image/*\" />
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"images\">Images of the Community</label>
\t    <input type=\"file\" id=\"images\" name=\"images[]\" multiple=\"multiple\" accept=\"image/*\" />
\t  </div>
\t  <hr/>
\t  <button type=\"submit\" class=\"btn btn-default\">Add</button>
\t</form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:community.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  60 => 20,  56 => 19,  39 => 4,  36 => 3,  11 => 1,);
    }
}
