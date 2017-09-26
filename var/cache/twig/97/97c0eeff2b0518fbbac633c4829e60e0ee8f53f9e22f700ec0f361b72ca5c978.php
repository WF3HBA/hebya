<?php

/* index.html.twig */
class __TwigTemplate_20927b089e990cdd9226e2eff565a601cbddeea0e0695a9106600d7ffce40e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15de2b1ddecebfc605e076cfd3cbf1f116e747c6f8f778da05839a09b9932ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15de2b1ddecebfc605e076cfd3cbf1f116e747c6f8f778da05839a09b9932ac2->enter($__internal_15de2b1ddecebfc605e076cfd3cbf1f116e747c6f8f778da05839a09b9932ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_28e533a28c82b7fa09bd2e60a12d17ef6c3559c545bbd9204b1cd0d4a7876b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e533a28c82b7fa09bd2e60a12d17ef6c3559c545bbd9204b1cd0d4a7876b07->enter($__internal_28e533a28c82b7fa09bd2e60a12d17ef6c3559c545bbd9204b1cd0d4a7876b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15de2b1ddecebfc605e076cfd3cbf1f116e747c6f8f778da05839a09b9932ac2->leave($__internal_15de2b1ddecebfc605e076cfd3cbf1f116e747c6f8f778da05839a09b9932ac2_prof);

        
        $__internal_28e533a28c82b7fa09bd2e60a12d17ef6c3559c545bbd9204b1cd0d4a7876b07->leave($__internal_28e533a28c82b7fa09bd2e60a12d17ef6c3559c545bbd9204b1cd0d4a7876b07_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_13d6cbd0da1fd56d2120affade72edbb06e860610ee37ac687583387481b88d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d6cbd0da1fd56d2120affade72edbb06e860610ee37ac687583387481b88d6->enter($__internal_13d6cbd0da1fd56d2120affade72edbb06e860610ee37ac687583387481b88d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2b09b828cb23bdc62df55a96cdd195f3d0aa841b15a78f408dabdd0f74582858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b09b828cb23bdc62df55a96cdd195f3d0aa841b15a78f408dabdd0f74582858->enter($__internal_2b09b828cb23bdc62df55a96cdd195f3d0aa841b15a78f408dabdd0f74582858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/accueil.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_2b09b828cb23bdc62df55a96cdd195f3d0aa841b15a78f408dabdd0f74582858->leave($__internal_2b09b828cb23bdc62df55a96cdd195f3d0aa841b15a78f408dabdd0f74582858_prof);

        
        $__internal_13d6cbd0da1fd56d2120affade72edbb06e860610ee37ac687583387481b88d6->leave($__internal_13d6cbd0da1fd56d2120affade72edbb06e860610ee37ac687583387481b88d6_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_12f32ae13e1a9bf229f074b2355c2be4b76695468333d31c0318b34d6a61b847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f32ae13e1a9bf229f074b2355c2be4b76695468333d31c0318b34d6a61b847->enter($__internal_12f32ae13e1a9bf229f074b2355c2be4b76695468333d31c0318b34d6a61b847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3a49c35fe5cd126548997ca8dbb00497fd909dc7705fe66ecaa1955e7693be5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a49c35fe5cd126548997ca8dbb00497fd909dc7705fe66ecaa1955e7693be5d->enter($__internal_3a49c35fe5cd126548997ca8dbb00497fd909dc7705fe66ecaa1955e7693be5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"carousel fade-carousel slide\" data-ride=\"carousel\" data-interval=\"4000\" id=\"bs-carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#bs-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#bs-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#bs-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item slides active\">
                <div class=\"slide-1\"></div>
                <div class=\"hero\">
                    <hgroup>
                        <h1>Invest in Future</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\" role=\"button\">See all services for investement</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>You are creative</h1>        
                        <h3></h3>
                    </hgroup>       
                    <a class=\"btn btn-hero btn-lg\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\" role=\"button\">See all services for inovation</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Solution for Africa</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\" role=\"button\">See all products</a>
                </div>
            </div>
        </div> 
    </div>
    <!-- End Carousel -->
    <main>
        <section id=\"index-map\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"container\" class=\"col-md-8 col-xs-12\"></div>
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"info\">
                            <div id=\"country_name\">
                                <h3>HEBYA</h3>
                            </div>
                           
                            <h5>service</h5>
                        
                                
                           
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <h5>Présence</h5>
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h5>Contact</h5>
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class=\"btn btn-default btn-block\">back to map</button>
                        </div>
                    </div>
                     
                </div>
            </div>
        </section> 
        <section id=\"index-info\">
            <div class=\"container\">
                <div id=\"trio\" class=\"row\">
                        <h2>Opportunités</h2>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-line-chart  fa-4x\" aria-hidden=\"true\"></i>
                                <strong><h4>Sourcing technologique</h4></strong>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                             <div class=\"assets\">
                                 <i class=\"fa fa-handshake-o fa-4x\" aria-hidden=\"true\"></i>
                                <h4>Developpement</h4>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-cloud-upload fa-4x\" aria-hidden=\"true\"></i>
                                <h4>Conseil</h4>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                     </div>
             </div>
        </section>
        <section id=\"product-carousel\" class=\"text-center\">
            
            
            <div id=\"product-carousel-container\">
                <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
                 <!-- Carousel items -->
                    <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
                        <div class=\"carousel-inner onebyone-carosel\">
                            <div class=\"item active\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/eyone-medical.jpg\" class=\"img-responsive center-block\">
                                        <figcaption class=\"text-center\"><span>E-YONE MEDICAL</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">                                           
                                <div class=\"col-xs-6 col-md-3\">
                                     <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/madrassa-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>MADRASSA-SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/as-pharm.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>AS PHARM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/sos-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>SOS SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </section>

      
        
    </main>
    
";
        // line 165
        echo "   
         
";
        
        $__internal_3a49c35fe5cd126548997ca8dbb00497fd909dc7705fe66ecaa1955e7693be5d->leave($__internal_3a49c35fe5cd126548997ca8dbb00497fd909dc7705fe66ecaa1955e7693be5d_prof);

        
        $__internal_12f32ae13e1a9bf229f074b2355c2be4b76695468333d31c0318b34d6a61b847->leave($__internal_12f32ae13e1a9bf229f074b2355c2be4b76695468333d31c0318b34d6a61b847_prof);

    }

    // line 169
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_307dea7f99cae4d656f2360c8d6905dadd7f379d91ff99f1ac2fb4dfa48329c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307dea7f99cae4d656f2360c8d6905dadd7f379d91ff99f1ac2fb4dfa48329c7->enter($__internal_307dea7f99cae4d656f2360c8d6905dadd7f379d91ff99f1ac2fb4dfa48329c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ae81acbf8c649276e5492f4f50add9247fd2a717b9e5c11f0752306e8ad6944c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae81acbf8c649276e5492f4f50add9247fd2a717b9e5c11f0752306e8ad6944c->enter($__internal_ae81acbf8c649276e5492f4f50add9247fd2a717b9e5c11f0752306e8ad6944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 170
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     
     <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map/raphael-min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map/africa-paths.js"), "html", null, true);
        echo "\"></script>
     <script>
        var countrySelect = '";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_country_ajax");
        echo "';
        
    </script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map/africa.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ae81acbf8c649276e5492f4f50add9247fd2a717b9e5c11f0752306e8ad6944c->leave($__internal_ae81acbf8c649276e5492f4f50add9247fd2a717b9e5c11f0752306e8ad6944c_prof);

        
        $__internal_307dea7f99cae4d656f2360c8d6905dadd7f379d91ff99f1ac2fb4dfa48329c7->leave($__internal_307dea7f99cae4d656f2360c8d6905dadd7f379d91ff99f1ac2fb4dfa48329c7_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 179,  288 => 178,  282 => 175,  277 => 173,  273 => 172,  267 => 170,  258 => 169,  246 => 165,  125 => 46,  112 => 36,  99 => 26,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/carousel.css\") }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/accueil.css\") }}\"/>
{% endblock %}
        
{% block content %}
    <div class=\"carousel fade-carousel slide\" data-ride=\"carousel\" data-interval=\"4000\" id=\"bs-carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#bs-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#bs-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#bs-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item slides active\">
                <div class=\"slide-1\"></div>
                <div class=\"hero\">
                    <hgroup>
                        <h1>Invest in Future</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"{{ path('services') }}\" role=\"button\">See all services for investement</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>You are creative</h1>        
                        <h3></h3>
                    </hgroup>       
                    <a class=\"btn btn-hero btn-lg\" href=\"{{ path('services') }}\" role=\"button\">See all services for inovation</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Solution for Africa</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"{{ path('product') }}\" role=\"button\">See all products</a>
                </div>
            </div>
        </div> 
    </div>
    <!-- End Carousel -->
    <main>
        <section id=\"index-map\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"container\" class=\"col-md-8 col-xs-12\"></div>
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"info\">
                            <div id=\"country_name\">
                                <h3>HEBYA</h3>
                            </div>
                           
                            <h5>service</h5>
                        
                                
                           
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <h5>Présence</h5>
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h5>Contact</h5>
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class=\"btn btn-default btn-block\">back to map</button>
                        </div>
                    </div>
                     
                </div>
            </div>
        </section> 
        <section id=\"index-info\">
            <div class=\"container\">
                <div id=\"trio\" class=\"row\">
                        <h2>Opportunités</h2>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-line-chart  fa-4x\" aria-hidden=\"true\"></i>
                                <strong><h4>Sourcing technologique</h4></strong>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                             <div class=\"assets\">
                                 <i class=\"fa fa-handshake-o fa-4x\" aria-hidden=\"true\"></i>
                                <h4>Developpement</h4>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-cloud-upload fa-4x\" aria-hidden=\"true\"></i>
                                <h4>Conseil</h4>
                                <p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                     </div>
             </div>
        </section>
        <section id=\"product-carousel\" class=\"text-center\">
            
            
            <div id=\"product-carousel-container\">
                <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
                 <!-- Carousel items -->
                    <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
                        <div class=\"carousel-inner onebyone-carosel\">
                            <div class=\"item active\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/eyone-medical.jpg\" class=\"img-responsive center-block\">
                                        <figcaption class=\"text-center\"><span>E-YONE MEDICAL</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">                                           
                                <div class=\"col-xs-6 col-md-3\">
                                     <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/madrassa-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>MADRASSA-SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/as-pharm.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>AS PHARM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"#\">
                                        <img src=\"../img/img-index/sos-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>SOS SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </section>

      
        
    </main>
    
{#  LAST SECTION  #}
   
         
{% endblock %}

{% block javascript %}
    {{ parent() }}
     
     <script src=\"{{ asset('js/map/raphael-min.js') }}\"></script>
     <script src=\"{{ asset('js/map/africa-paths.js') }}\"></script>
     <script>
        var countrySelect = '{{ path('index_country_ajax') }}';
        
    </script>
        <script src=\"{{ asset('js/map/africa.js') }}\"></script>
     <script src=\"{{ asset('js/index/index.js') }}\"></script>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\index.html.twig");
    }
}
