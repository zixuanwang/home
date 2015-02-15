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
                        <h2>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "getName", array(), "method"), "html", null, true);
        echo "</h2>
                        <span>Subtitle Goes Here</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class=\"row\">
\t\t\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t  <!-- Indicators -->
\t\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t\t  ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 113
            echo "\t\t\t\t\t  \t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 114
                echo "\t\t\t\t\t  \t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"active\"></li>
\t\t\t\t\t  \t";
            } else {
                // line 116
                echo "\t\t\t\t\t  \t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"></li>
\t\t\t\t\t  \t";
            }
            // line 118
            echo "\t\t\t\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t  </ol>
\t\t\t\t\t
\t\t\t\t\t  <!-- Wrapper for slides -->
\t\t\t\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t  ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 124
            echo "\t\t\t\t\t  \t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 125
                echo "\t\t\t\t\t  \t\t<div class=\"item active\">
       \t\t\t\t\t";
            } else {
                // line 127
                echo "       \t\t\t\t\t\t<div class=\"item\">
    \t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t      <img src=\"";
            echo twig_escape_filter($this->env, (("/uploads/" . $this->getAttribute($context["photo"], "getPath", array(), "method")) . ".jpg"), "html", null, true);
            echo "\">
\t\t\t\t\t      <div class=\"carousel-caption\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "getName", array(), "method"), "html", null, true);
            echo "</div>
\t\t\t\t\t    </div>
\t\t\t\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "  
\t\t\t\t\t  </div>
\t\t\t\t\t
\t\t\t\t\t  <!-- Controls -->
\t\t\t\t\t  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t\t    <span class=\"sr-only\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t\t    <span class=\"sr-only\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</div>
                    <div class=\"blog-info col-md-12\">
                        <div class=\"box-content\">
                            <h2 class=\"blog-title\">Keep Your Stuff Alive And Apply it On Life</h2>
                            <span class=\"blog-meta\">4 November 2084 by Christina with 3 comments</span>
                            <p><a href=\"http://www.templatemo.com/preview/templatemo_423_artcore\">Artcore</a> is free HTML5 bootstrap template by <b class=\"blue\">template</b><b class=\"green\">mo</b>. Credit goes to <a rel=\"nofollow\" href=\"http://unsplash.com\">Unsplash</a> for images. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis, esse nemo architecto veniam ipsam et in odit unde cumque. Quidem, sapiente, deserunt accusantium iure minus numquam velit beatae iste corrupti alias atque quisquam praesentium est autem voluptatibus? Magnam, repellendus id quidem reprehenderit eligendi. Voluptas, fugiat cumque earum similique suscipit at labore aut hic voluptatum deserunt aliquid dignissimos corporis facilis in provident atque nihil.</p>
                            
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, cum, cumque, mollitia quidem officiis consectetur possimus ut voluptatum eum sit saepe vel nostrum a ad suscipit laborum exercitationem. Rerum, nam.
                                </blockquote>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, maxime, itaque, ut, eligendi consequuntur quasi placeat molestiae nam sunt amet ab officia voluptates dolore error repudiandae fugit aperiam quas facilis? Ipsa, perspiciatis, nam, modi ducimus esse assumenda aut quaerat commodi natus dolorem quo accusantium saepe officiis quasi porro. Possimus, asperiores, nihil, vitae, cumque aperiam perspiciatis velit sit aliquid consectetur neque quidem dolore voluptatem rerum omnis totam impedit sequi eius explicabo culpa facilis. <br><br>Debitis, totam dignissimos fugiat voluptatem esse optio unde alias nulla fuga facere cumque assumenda quod at reiciendis veniam maiores suscipit aperiam mollitia nisi dolorum molestiae omnis natus neque autem minus dicta magnam nobis ipsa ratione recusandae numquam modi asperiores adipisci repudiandae quis beatae placeat ullam atque pariatur expedita.</p>
                        </div>
                    </div> <!-- /.blog-info -->
                    <div class=\"blog-tags col-md-12\">
                        <span>Tags</span>: 
                        <a href=\"#\">Developmet</a>
                        <a href=\"#\">Inspiration</a>
                        <a href=\"#\">Web Design</a>
                        <a href=\"#\">Creative UI</a>
                        <a href=\"#\">templatemo</a>
                    </div> <!-- /.blog-tags -->
                </div> <!-- /.row -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
 ";
    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        // line 171
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
        return "AcmeMyBundle:Default:model.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 171,  296 => 170,  255 => 132,  238 => 130,  233 => 129,  229 => 127,  225 => 125,  222 => 124,  205 => 123,  199 => 119,  185 => 118,  179 => 116,  173 => 114,  170 => 113,  153 => 112,  142 => 104,  40 => 4,  37 => 3,  11 => 1,);
    }
}
