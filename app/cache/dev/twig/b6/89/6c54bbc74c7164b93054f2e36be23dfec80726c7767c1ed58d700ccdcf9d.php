<?php

/* AcmeMyBundle:Default:index.html.twig */
class __TwigTemplate_b6896c54bbc74c7164b93054f2e36be23dfec80726c7767c1ed58d700ccdcf9d extends Twig_Template
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
\t";
        // line 3
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row category-bar\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"category-item\">
\t\t\t\t\t\t<img src=\"/images/school.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t\t\t<h5>优秀学区</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item\">
\t\t\t\t\t\t<img src=\"/images/invest.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t\t\t<h5>投资升值</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item\">
\t\t\t\t\t\t<img src=\"/images/downtown.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t\t\t<h5>热门地段</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"category-item\">
\t\t\t\t\t\t<img src=\"/images/sea.jpg\" alt=\"...\" class=\"img-rounded\">
\t\t\t\t\t\t<div class=\"category-desc\">
\t\t\t\t\t\t\t<h5>养老休闲</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-3\">
\t\t\t<select class=\"form-control\">
\t\t\t\t<option>价格：人民币</option>
\t\t\t\t<option>小于200万</option>
\t\t\t\t<option>200万-500万</option>
\t\t\t\t<option>大于500万</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sm-3\">
\t\t\t<select class=\"form-control\">
\t\t\t\t<option>使用面积</option>
\t\t\t\t<option>小于200平方米</option>
\t\t\t\t<option>200-300平方米</option>
\t\t\t\t<option>300-400平方米</option>
\t\t\t\t<option>大于400平方米</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sm-3\">
\t\t\t<select class=\"form-control\">
\t\t\t\t<option>卧室数量</option>
\t\t\t\t<option>1-2</option>
\t\t\t\t<option>3-4</option>
\t\t\t\t<option>5以上</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-sm-3\">
\t\t\t<select class=\"form-control\">
\t\t\t\t<option>户型</option>
\t\t\t\t<option>独栋别墅</option>
\t\t\t\t<option>连体别墅</option>
\t\t\t\t<option>公寓</option>
\t\t\t</select>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"container\">
\t\t\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 75
            echo "\t\t\t\t<div class=\"pin\">
\t\t\t\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model", array("id" => $this->getAttribute($context["model"], "getId", array(), "method"))), "html", null, true);
            echo "\"> <img
\t\t\t\t\t\tclass=\"pin-image\"
\t\t\t\t\t\tsrc=\"";
            // line 78
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["model"], "getFacades", array(), "method"), 0, array(), "array"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<h5>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getName", array(), "method"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 85
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["model"], "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
            // line 86
            echo " 平方米， ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBeds", array(), "method"), "html", null, true);
            echo "卧，";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "getNumBaths", array(), "method"), "html", null, true);
            echo "卫
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12\">";
            // line 88
            if (($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") == 0)) {
                // line 89
                echo " 无现房 ";
            } else {
                echo " ￥";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute((isset($context["starting_prices"]) ? $context["starting_prices"] : $this->getContext($context, "starting_prices")), $this->getAttribute($context["model"], "getId", array(), "method"), array(), "array") * 6.3) / 10000)), "html", null, true);
                // line 90
                echo " 万元起 ";
            }
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 92
            if ( !twig_test_empty($this->getAttribute($context["model"], "getImages", array(), "method"))) {
                // line 93
                echo "\t\t\t\t\t<div class=\"ribbon-wrapper-green\">
\t\t\t\t\t\t<div class=\"ribbon-green\">样板间</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 text-right\">
\t\t\t<nav>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_array"]) ? $context["page_array"] : $this->getContext($context, "page_array")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                // line 107
                echo "\t\t\t\t\t<li class=\"active\"><a
\t\t\t\t\t\thref=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("area" => (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            } else {
                // line 110
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home", array("area" => (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 111
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<hr />
\t";
        // line 117
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 117,  217 => 112,  211 => 111,  203 => 110,  196 => 108,  193 => 107,  187 => 106,  178 => 99,  171 => 97,  165 => 93,  163 => 92,  157 => 90,  152 => 89,  150 => 88,  142 => 86,  140 => 85,  133 => 81,  127 => 78,  122 => 76,  119 => 75,  115 => 74,  41 => 3,  38 => 2,  11 => 1,);
    }
}
