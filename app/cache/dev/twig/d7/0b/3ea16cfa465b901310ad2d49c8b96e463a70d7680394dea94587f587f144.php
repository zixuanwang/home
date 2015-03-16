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
        echo "<div class=\"container\">
\t<h2>Add a New Community</h2>
\t<hr />
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"name\">Name of the Community</label> <input name=\"name\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"name\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"address\">Address</label> <input name=\"address\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"address\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"builder\">Choose the Builder</label> <select
\t\t\t\tname=\"builder\" class=\"form-control\" id=\"builder\"> 
\t\t\t\t<option> </option>
\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["builders"]) ? $context["builders"] : $this->getContext($context, "builders")));
        foreach ($context['_seq'] as $context["_key"] => $context["builder"]) {
            // line 20
            echo "\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["builder"], "getName", array(), "method"), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['builder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"city\">City</label> <input name=\"city\" type=\"text\"
\t\t\t\tclass=\"form-control\" id=\"city\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"county\">County</label> <input name=\"county\" type=\"text\"
\t\t\t\tclass=\"form-control\" id=\"county\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"state\">State</label> <input name=\"state\" type=\"text\"
\t\t\t\tclass=\"form-control\" id=\"state\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"zipcode\">Zipcode</label> <input name=\"zipcode\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"zipcode\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"model\">Home Models</label><select multiple
\t\t\t\tclass=\"form-control\" name=\"model[]\" id=\"model\">
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"description\">Description</label>
\t\t\t<textarea name=\"description\" class=\"form-control\" id=\"description\"
\t\t\t\trows=\"4\"></textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"map\">Map of the Community</label> <input name=\"map\"
\t\t\t\ttype=\"file\" id=\"map\" accept=\"image/*\" />
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"images\">Images of the Community</label> <input
\t\t\t\ttype=\"file\" id=\"images\" name=\"images[]\" multiple=\"multiple\"
\t\t\t\taccept=\"image/*\" />
\t\t</div>
\t\t<hr />
\t\t<button type=\"submit\" class=\"btn btn-default\">Add</button>
\t</form>
</div>
";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "<script>
  \$('#builder').change(function(e) {
    //Grab the chosen value on first select list change
    var select = \$(this).val();
    if (select != \"\") {
        \$.ajax({url: '/manage/ajax?target=community&builder=' + select,
            success: function(output) {
            \tvar option;
\t\t\t\t\$.each(output, function(i, val){
\t\t\t\t\toption += '<option>' + val + '</option>';
\t\t\t\t});
            \t\$('#model').html(option);
            },
         \terror: function (xhr, ajaxOptions, thrownError) {
           \t\talert(xhr.status + \" \"+ thrownError);
         }});
    }
   });
 </script>
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
        return array (  117 => 63,  114 => 62,  69 => 21,  61 => 20,  57 => 18,  39 => 2,  11 => 1,);
    }
}
