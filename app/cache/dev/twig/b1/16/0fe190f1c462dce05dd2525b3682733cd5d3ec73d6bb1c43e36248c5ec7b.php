<?php

/* AcmeMyBundle:Manage:home.html.twig */
class __TwigTemplate_b1160fe190f1c462dce05dd2525b3682733cd5d3ec73d6bb1c43e36248c5ec7b extends Twig_Template
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
\t<h2>Add a New Home</h2>
\t<hr />
\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"city\">City of the Home</label> <input name=\"city\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"city\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"builder\">Builder</label> <select name=\"builder\"
\t\t\t\tclass=\"form-control\" id=\"builder\">
\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"community\">Community</label> <input name=\"community\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"community\">
\t\t</div>
\t\t<hr />
\t\t<button type=\"submit\" class=\"btn btn-default\">Add</button>
\t</form>
</div>
";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "<script>
 \$(document).ready(function(\$) {
  \$('#city').change(function(e) {
    //Grab the chosen value on first select list change
    var selectcity = \$(this).val();
    \$('#builder').html('<option value=\"\">Loading...</option>');
 
    if (selectvalue != \"\") {
        \$.ajax({url: '/manage/home?city=' + selectcity,
            success: function(output) {
            \tvar option;
\t\t\t\t\$.each(output, function(i, val){
\t\t\t\t\toption += '<option>' + val + '</option>';
\t\t\t\t});
            \t\$('#builder').html(option);
            },
         \terror: function (xhr, ajaxOptions, thrownError) {
           \t\talert(xhr.status + \" \"+ thrownError);
         }});
    }
   });
  }
});
 </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  64 => 23,  39 => 2,  11 => 1,);
    }
}
