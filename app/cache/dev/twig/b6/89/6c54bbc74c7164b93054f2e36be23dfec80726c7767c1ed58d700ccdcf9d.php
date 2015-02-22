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
        echo " <header class=\"header\">
\t<a href=\"/\" class=\"headerLogo\"><svg>
\t\t\t<use xlink:href=\"/fonts/header.svg#shapeLogo\"></use></svg></a>
\t<div class=\"headerCases\">
\t\t<div class=\"headerCasesLine\"></div>
\t\t<div class=\"headerCasesFilters\">
\t\t\t<button class=\"cta grey small rounded\" data-filter=\"*\">西雅图</button>
\t\t\t<button class=\"cta grey small rounded\" data-filter=\".digitalt\">旧金山</button>
\t\t\t<button class=\"cta grey small rounded\" data-filter=\".grafisk\">洛杉矶</button>
\t\t</div>
\t</div>

\t<div class=\"headerTools\">
\t\t<p>
\t\t\tFanges på
\t\t\t<svg>
\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeSmallArrow\"></use></svg>
\t\t</p>
\t\t<div class=\"headerToolsIcons\">
\t\t\t<a href=\"tel:+4529902543\" class=\"headerToolsIconsMobile\"><svg>
\t\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeMobile\"></use></svg></a> <a
\t\t\t\thref=\"mailto:hello@sampedro.dk\" class=\"headerToolsIconsMail\"><svg>
\t\t\t\t\t<use xlink:href=\"/fonts/header.svg#shapeMail\"></use></svg></a>
\t\t</div>
\t</div>
</header>



<div class=\"content-wrapper\">
\t<div class=\"inner-container container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"section-header col-md-12\">
\t\t\t</div>
\t\t\t<!-- /.section-header -->
\t\t</div>
\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"blog-masonry masonry-true\">
\t\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home_posts"]) ? $context["home_posts"] : $this->getContext($context, "home_posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["home_post"]) {
            // line 42
            echo "\t\t\t\t<div class=\"post-masonry col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"blog-thumb\">
\t\t\t\t\t\t<img src=\"";
            // line 44
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["home_post"], "cover_photo", array())) . ".jpg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t<div>hello</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog-body\">
\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t<h3 class=\"post-title\">
\t\t\t\t\t\t\t\t<a href=\"blog-single.html\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<span class=\"blog-meta\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "post_time", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.post-masonry -->
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home_post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</div>
\t\t\t<!-- /.blog-masonry -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t<!-- /.inner-content -->
</div>
<!-- /.content-wrapper -->
";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "<!-- Preloader -->
<script type=\"text/javascript\">
    //<![CDATA[
    \$(window).load(function() { // makes sure the whole site is loaded
        \$('.loader-item').fadeOut(); // will first fade out the loading animation
            \$('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        \$('body').delay(350).css({'overflow-y':'visible'});
    })
    //]]>
</script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bloxhover.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script> 
    \$(document).ready(function() {
        \$('.blog-thumb').bloxhover({
            effect: \"square\", // accepted strings: 'square', 'square reveal', 'vertical', 'vertical reveal', 'vertical alternate', 'vertical alternate reveal', 'horizontal', 'horizontal reveal', 'horizontal alternate', 'horizontal alternate reveal'
            sliceCount: 8, // the number of slices 
            color: 'rgba(0, 0, 0, 0.5)', //rgba color of the slices
            duration: 90, //how long should the animation of each slice last
            delay: 30 // delay between slice animations
   \t \t});
    });
</script>
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
        return array (  149 => 79,  145 => 78,  133 => 68,  130 => 67,  118 => 59,  106 => 53,  102 => 52,  97 => 50,  88 => 44,  84 => 42,  80 => 41,  39 => 2,  11 => 1,);
    }
}
