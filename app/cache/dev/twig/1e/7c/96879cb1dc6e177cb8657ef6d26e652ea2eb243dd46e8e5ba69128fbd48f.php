<?php

/* AcmeMyBundle:Default:model.show.html.twig */
class __TwigTemplate_1e7c96879cb1dc6e177cb8657ef6d26e652ea2eb243dd46e8e5ba69128fbd48f extends Twig_Template
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
\t";
        // line 3
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-8 model-block\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>样板间</h4>
\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " <a class=\"fancybox\" rel=\"group\"
\t\t\t\t\thref=\"";
            // line 9
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"model-thumb fade img-responsive\"
\t\t\t\t\t\tstyle=\"background-image: url('";
            // line 11
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["image"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t\t</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-xs-12 col-sm-12 col-md-4 model-block\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4 class=\"text-center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getName", array(), "method"), "html", null, true);
        echo "户型</h4>
\t\t\t\t<div class=\"model-facade-thumb img-responsive\"
\t\t\t\t\tstyle=\"background-image: url('";
        // line 20
        echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
        echo "');\"></div>
\t\t\t\t<div class=\"model-side-detail\">
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">使用面积</td>
\t\t\t\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
        echo " 平方米</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">楼层</td>
\t\t\t\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumStories", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">卧室</td>
\t\t\t\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBeds", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">洗手间</td>
\t\t\t\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBaths", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">车库</td>
\t\t\t\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumGarages", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-12 col-md-8 model-block\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>户型图</h4>
\t\t\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floorplans"]) ? $context["floorplans"] : $this->getContext($context, "floorplans")));
        foreach ($context['_seq'] as $context["_key"] => $context["floorplan"]) {
            // line 53
            echo "\t\t\t\t<div class=\"floorplan-thumb-box\">
\t\t\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\t\t\thref=\"";
            // line 55
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"> <img
\t\t\t\t\t\tsrc=\"";
            // line 56
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"
\t\t\t\t\t\tclass=\"floorplan-thumb\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['floorplan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-12 col-md-4 model-block\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>所在社区</h4>
\t\t\t\t";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communities"]) ? $context["communities"] : $this->getContext($context, "communities")));
        foreach ($context['_seq'] as $context["id"] => $context["community"]) {
            // line 67
            echo "\t\t\t\t<div class=\"model-facade-thumb img-responsive\"
\t\t\t\t\tstyle=\"background-image: url('";
            // line 68
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($context["community"], "getFacade", array(), "method"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "');\"></div>
\t\t\t\t<h4 class=\"text-center\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getName", array(), "method"), "html", null, true);
            echo "社区</h4>
\t\t\t\t<div class=\"model-side-detail\">
\t\t\t\t\t<p>地址：";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getAddress", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getCity", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getState", array(), "method"), "html", null, true);
            // line 72
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getZipcode", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>价格： ";
            // line 73
            echo twig_escape_filter($this->env, twig_round((($this->getAttribute((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")), $context["id"], array(), "array") * 6.3) / 10000)), "html", null, true);
            echo " 万元起
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-12 col-sm-12 col-md-8 model-block\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>地图</h4>
\t\t\t\t<div id=\"bing_map_canvas\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<hr />
\t";
        // line 87
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "<script type=\"text/javascript\"
\tsrc=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0\"></script>
<script type=\"text/javascript\">
    function getMap(){
        var mapInitOpts = {
            credentials: 'AqpckLVrDZE9ehOKwFREOF16SWFONVDd9KqviWPOeoiE6oSn-Fu6YZZjalMvvWXg',
            center: new Microsoft.Maps.Location(";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["map_center"]) ? $context["map_center"] : $this->getContext($context, "map_center")), "latitude", array(), "array"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["map_center"]) ? $context["map_center"] : $this->getContext($context, "map_center")), "longitude", array(), "array"), "html", null, true);
        echo "),
            mapTypeId: Microsoft.Maps.MapTypeId.road,
            zoom: 9,
            width: 600,
            height:500
        };
       var map = new Microsoft.Maps.Map(document.getElementById(\"bing_map_canvas\"), mapInitOpts);
       ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communities"]) ? $context["communities"] : $this->getContext($context, "communities")));
        foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
            // line 104
            echo "       \tvar location = new Microsoft.Maps.Location(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getLatitude", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getLongitude", array(), "method"), "html", null, true);
            echo ");
       \t// Add a pin to the center of the map, using a custom icon
       \tvar pin = new Microsoft.Maps.Pushpin(location, {icon: '/images/home_icon.png', width: 30, height: 30, draggable: true}); 
       \tmap.entities.push(pin);
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "     }
    getMap();
      </script>

";
    }

    public function getTemplateName()
    {
        return "AcmeMyBundle:Default:model.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 109,  244 => 104,  240 => 103,  228 => 96,  220 => 90,  217 => 89,  210 => 87,  198 => 77,  188 => 73,  183 => 72,  177 => 71,  172 => 69,  168 => 68,  165 => 67,  161 => 66,  154 => 61,  143 => 56,  139 => 55,  135 => 53,  131 => 52,  118 => 42,  111 => 38,  104 => 34,  97 => 30,  90 => 26,  81 => 20,  76 => 18,  69 => 13,  61 => 11,  56 => 9,  50 => 8,  42 => 3,  39 => 2,  11 => 1,);
    }
}
