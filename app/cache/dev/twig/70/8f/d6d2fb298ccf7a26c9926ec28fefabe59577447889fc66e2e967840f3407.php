<?php

/* AcmeMyBundle:Manage:album.show.html.twig */
class __TwigTemplate_708fd6d2fb298ccf7a26c9926ec28fefabe59577447889fc66e2e967840f3407 extends Twig_Template
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
\t<h2>Give Names to Images</h2>
\t<hr/>
\t<form name=\"album_form\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("manage", array("type" => "album"));
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"model_id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["model_id"]) ? $context["model_id"] : $this->getContext($context, "model_id")), "html", null, true);
        echo "\">
\t  \t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) ? $context["filenames"] : $this->getContext($context, "filenames")));
        foreach ($context['_seq'] as $context["_key"] => $context["filename"]) {
            // line 10
            echo "\t  \t<div class=\"media\">
\t\t\t<div class=\"media-left media-middle\">
\t\t      \t<img class=\"media-object\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, (("/uploads/" . $context["filename"]) . ".jpg"), "html", null, true);
            echo "\" style=\"height: 100px\">
\t\t  \t</div>
\t\t  \t<div class=\"media-body\">
\t\t    \t<input name=\"";
            // line 15
            echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
            echo "\" type=\"text\" class=\"form-control\">
\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t  <label>
\t\t\t\t\t    <input type=\"radio\" name=\"cover\" id=\"cover\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
            echo "\">
\t\t\t\t\t    Set as Cover
\t\t\t\t\t  </label>
\t\t\t\t\t</div>
\t\t  \t</div>
\t\t</div>
\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t  \t<hr/>
\t  \t<button class=\"btn btn-default\" type=\"submit\">Submit</button>
\t</form>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Manage:album.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  72 => 18,  66 => 15,  60 => 12,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
