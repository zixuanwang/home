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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <section id=\"pageloader\">
            <div class=\"loader-item fa fa-spin colored-border\"></div>
        </section> <!-- /#pageloader -->

        <header class=\"site-header container-fluid\">
            <div class=\"top-header\">
                <div class=\"logo col-md-6 col-sm-6\">
                    <h1><a href=\"index.html\"><em>Art</em>Core</a></h1>
                    <span>Responsive HTML5 Template</span>
                </div> <!-- /.logo -->
                <div class=\"social-top col-md-6 col-sm-6\">
                    <ul>
                        <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-google-plus\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-flickr\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                    </ul>
                </div> <!-- /.social-top -->
            </div> <!-- /.top-header -->
            <div class=\"main-header\">
                <div class=\"row\">
                    <div class=\"main-header-left col-md-3 col-sm-6 col-xs-8\">
                        <a id=\"search-icon\" class=\"btn-left fa fa-search\" href=\"#search-overlay\"></a>
                        <div id=\"search-overlay\">
                            <a href=\"#search-overlay\" class=\"close-search\"><i class=\"fa fa-times-circle\"></i></a>
                            <div class=\"search-form-holder\">
                                <h2>Type keywords and hit enter</h2>
                                <form id=\"search-form\" action=\"#\">
                                    <input type=\"search\" name=\"s\" placeholder=\"\" autocomplete=\"off\" />
                                </form>
                            </div>
                        </div><!-- #search-overlay -->
                    </div> <!-- /.main-header-left -->
                    <div class=\"menu-wrapper col-md-9 col-sm-6 col-xs-4\">
                        <a href=\"#\" class=\"toggle-menu visible-sm visible-xs\"><i class=\"fa fa-bars\"></i></a>
                        <ul class=\"sf-menu hidden-xs hidden-sm\">
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"services.html\">Services</a></li>
                            <li><a href=\"#\">Projects</a>
                                <ul>
                                    <li><a href=\"projects-2.html\">Two Columns</a></li>
                                    <li><a href=\"projects-3.html\">Three Columns</a></li>
                                    <li><a href=\"project-details.html\">Project Single</a></li>
                                </ul>
                            </li>
                            <li class=\"active\"><a href=\"#\">Blog</a>
                                <ul>
                                    <li><a href=\"blog.html\">Blog Masonry</a></li>
                                    <li><a href=\"blog-single.html\">Post Single</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Pages</a>
                                <ul>
                                    <li><a href=\"our-team.html\">Our Team</a></li>
                                    <li><a href=\"archives.html\">Archives</a></li>
                                    <li><a href=\"grids.html\">Columns</a></li>
                                    <li><a href=\"404.html\">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id=\"responsive-menu\">
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"services.html\">Services</a></li>
                    <li><a href=\"#\">Projects</a>
                        <ul>
                            <li><a href=\"projects-2.html\">Two Columns</a></li>
                            <li><a href=\"projects-3.html\">Three Columns</a></li>
                            <li><a href=\"project-details.html\">Project Single</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Blog</a>
                        <ul>
                            <li><a href=\"blog.html\">Blog Masonry</a></li>
                            <li><a href=\"blog-single.html\">Post Single</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Pages</a>
                        <ul>
                            <li><a href=\"our-team.html\">Our Team</a></li>
                            <li><a href=\"archives.html\">Archives</a></li>
                            <li><a href=\"grids.html\">Columns</a></li>
                            <li><a href=\"404.html\">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </header> <!-- /.site-header -->

        <div class=\"content-wrapper\">
            <div class=\"inner-container container\">
                <div class=\"row\">
                    <div class=\"section-header col-md-12\">
                        <h2>Our Blog</h2>
                        <span>Subtitle Goes Here</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class=\"row\">
                    <div class=\"blog-masonry masonry-true\">
                        ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["home_posts"]) ? $context["home_posts"] : $this->getContext($context, "home_posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["home_post"]) {
            // line 111
            echo "                        <div class=\"post-masonry col-md-4 col-sm-6\">
                            <div class=\"blog-thumb\">
                                <img src=\"";
            // line 113
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["home_post"], "cover_photo", array())) . ".jpg"), "html", null, true);
            echo "\" alt=\"\">
                                <div class=\"overlay-b\">
                                    <div class=\"overlay-inner\">
                                        <a href=\"blog-single.html\" class=\"fa fa-link\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"blog-body\">
                                <div class=\"box-content\">
                                    <h3 class=\"post-title\"><a href=\"blog-single.html\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "name", array()), "html", null, true);
            echo "</a></h3>
                                    <span class=\"blog-meta\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "post_time", array()), "html", null, true);
            echo "</span>
                                    <p>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["home_post"], "description", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div> <!-- /.post-masonry -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home_post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </div> <!-- /.blog-masonry -->
                </div> <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"pagination text-center\">
                            <ul>
                                <li><a href=\"javascript:void(0)\">1</a></li>
                                <li><a href=\"javascript:void(0)\" class=\"active\">2</a></li>
                                <li><a href=\"javascript:void(0)\">3</a></li>
                                <li><a href=\"javascript:void(0)\">4</a></li>
                                <li><a href=\"javascript:void(0)\">...</a></li>
                                <li><a href=\"javascript:void(0)\">11</a></li>
                            </ul>
                        </div> <!-- /.pagination -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
 ";
    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        // line 149
        echo " <!-- Preloader -->
<script type=\"text/javascript\">
    //<![CDATA[
    \$(window).load(function() { // makes sure the whole site is loaded
        \$('.loader-item').fadeOut(); // will first fade out the loading animation
            \$('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        \$('body').delay(350).css({'overflow-y':'visible'});
    })
    //]]>
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
        return array (  212 => 149,  209 => 148,  187 => 129,  176 => 124,  172 => 123,  168 => 122,  156 => 113,  152 => 111,  148 => 110,  40 => 4,  37 => 3,  11 => 1,);
    }
}
