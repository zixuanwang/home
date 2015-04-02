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
\t\t<div class=\"col-xs-12 col-sm-12 col-md-8\">
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
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>户型图</h4>
\t\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floorplans"]) ? $context["floorplans"] : $this->getContext($context, "floorplans")));
        foreach ($context['_seq'] as $context["_key"] => $context["floorplan"]) {
            // line 17
            echo "\t\t\t\t<div class=\"floorplan-thumb-box\">
\t\t\t\t\t<a class=\"fancybox\" rel=\"group\"
\t\t\t\t\t\thref=\"";
            // line 19
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["floorplan"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\"> <img
\t\t\t\t\t\tsrc=\"";
            // line 20
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
        // line 25
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-xs-12 col-sm-12 col-md-4\">
\t\t\t<div class=\"piece\">
\t\t\t\t<h4 class=\"text-center\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getName", array(), "method"), "html", null, true);
        echo "户型</h4>
\t\t\t\t<div class=\"model-facade-thumb img-responsive\"
\t\t\t\t\tstyle=\"background-image: url('";
        // line 32
        echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getFacades", array(), "method"), 0, array(), "array"), "getPath", array(), "method")) . ".jpg"), "html", null, true);
        echo "');\"></div>
\t\t\t\t<div class=\"model-side-detail\">
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">使用面积：</td>
\t\t\t\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getSquareFeet", array(), "method") * 0.092903)), "html", null, true);
        echo " 平方米</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">楼层：</td>
\t\t\t\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumStories", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">卧室：</td>
\t\t\t\t\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBeds", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">洗手间：</td>
\t\t\t\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumBaths", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">车库：</td>
\t\t\t\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getNumGarages", array(), "method"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"piece\" id=\"map-piece\">
\t\t\t\t<h4>地图</h4>
\t\t\t\t<div id=\"bing_map_canvas\"></div>
\t\t\t</div>
\t\t\t<div class=\"piece\">
\t\t\t\t<h4>所在社区</h4>
\t\t\t\t";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communities"]) ? $context["communities"] : $this->getContext($context, "communities")));
        foreach ($context['_seq'] as $context["id"] => $context["community"]) {
            // line 67
            echo "\t\t\t\t<div class=\"model-side-detail\">
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><strong><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("community", array("id" => $this->getAttribute($context["community"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getName", array(), "method"), "html", null, true);
            echo "社区</a></strong></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">地址： ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getAddress", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getCity", array(), "method"), "html", null, true);
            // line 77
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getState", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getZipcode", array(), "method"), "html", null, true);
            // line 78
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td scope=\"row\">价格： ";
            // line 81
            echo twig_escape_filter($this->env, twig_round((($this->getAttribute((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")), $context["id"], array(), "array") * 6.3) / 10000)), "html", null, true);
            echo " 万元起</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<hr />
\t";
        // line 91
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
</div>
";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "<script type=\"text/javascript\"
\tsrc=\"http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0\"></script>
<script type=\"text/javascript\">
    function getMap(){
        var w = \$(\"#map-piece\").width();
        var mapInitOpts = {
            credentials: 'AqpckLVrDZE9ehOKwFREOF16SWFONVDd9KqviWPOeoiE6oSn-Fu6YZZjalMvvWXg',
            center: new Microsoft.Maps.Location(";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["map_center"]) ? $context["map_center"] : $this->getContext($context, "map_center")), "latitude", array(), "array"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["map_center"]) ? $context["map_center"] : $this->getContext($context, "map_center")), "longitude", array(), "array"), "html", null, true);
        echo "),
            mapTypeId: Microsoft.Maps.MapTypeId.road,
            zoom: 7,
            width: w - 15,
            height:w - 15
        };
       var map = new Microsoft.Maps.Map(document.getElementById(\"bing_map_canvas\"), mapInitOpts);
       ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communities"]) ? $context["communities"] : $this->getContext($context, "communities")));
        foreach ($context['_seq'] as $context["_key"] => $context["community"]) {
            // line 109
            echo "       \tvar location = new Microsoft.Maps.Location(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getLatitude", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getLongitude", array(), "method"), "html", null, true);
            echo ");
       \t// Add a pin to the center of the map, using a custom icon
       \t//var name = ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["community"], "getName", array(), "method"), "html", null, true);
            echo ";
       \tvar pin = new Microsoft.Maps.Pushpin(location, {typeName: 'pushpinStyle', htmlContent: '<img src=\"/images/home_icon.png\" alt=\"\"/>' +
            '<span>haha</span>'}); 
     \t// Create the infobox for the pushpin
       \tmap.entities.push(pin);
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['community'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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
        return array (  268 => 117,  256 => 111,  248 => 109,  244 => 108,  232 => 101,  223 => 94,  220 => 93,  213 => 91,  207 => 87,  195 => 81,  190 => 78,  185 => 77,  181 => 76,  171 => 71,  165 => 67,  161 => 66,  146 => 54,  139 => 50,  132 => 46,  125 => 42,  118 => 38,  109 => 32,  104 => 30,  97 => 25,  86 => 20,  82 => 19,  78 => 17,  74 => 16,  69 => 13,  61 => 11,  56 => 9,  50 => 8,  42 => 3,  39 => 2,  11 => 1,);
    }
}
