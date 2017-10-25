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
        $__internal_b96f0b01dbf3223e97bc76b116a9dba2a0fd5d3e9b5fba7a3a5ef4edc72a45f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96f0b01dbf3223e97bc76b116a9dba2a0fd5d3e9b5fba7a3a5ef4edc72a45f0->enter($__internal_b96f0b01dbf3223e97bc76b116a9dba2a0fd5d3e9b5fba7a3a5ef4edc72a45f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_af3b21f1d0e0a722ac87dee0a68645526990d20c66adc2318e3e958897bf4c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3b21f1d0e0a722ac87dee0a68645526990d20c66adc2318e3e958897bf4c16->enter($__internal_af3b21f1d0e0a722ac87dee0a68645526990d20c66adc2318e3e958897bf4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96f0b01dbf3223e97bc76b116a9dba2a0fd5d3e9b5fba7a3a5ef4edc72a45f0->leave($__internal_b96f0b01dbf3223e97bc76b116a9dba2a0fd5d3e9b5fba7a3a5ef4edc72a45f0_prof);

        
        $__internal_af3b21f1d0e0a722ac87dee0a68645526990d20c66adc2318e3e958897bf4c16->leave($__internal_af3b21f1d0e0a722ac87dee0a68645526990d20c66adc2318e3e958897bf4c16_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0a05211a8fb7e1abba597607ccf92d7b5040dcbabe67f4bdc8f57774ddd004bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a05211a8fb7e1abba597607ccf92d7b5040dcbabe67f4bdc8f57774ddd004bc->enter($__internal_0a05211a8fb7e1abba597607ccf92d7b5040dcbabe67f4bdc8f57774ddd004bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_dd1451616fd2a53d8a4cb9a5b57d1e7be725629484cd5bfcb754bbf5c591c727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1451616fd2a53d8a4cb9a5b57d1e7be725629484cd5bfcb754bbf5c591c727->enter($__internal_dd1451616fd2a53d8a4cb9a5b57d1e7be725629484cd5bfcb754bbf5c591c727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_dd1451616fd2a53d8a4cb9a5b57d1e7be725629484cd5bfcb754bbf5c591c727->leave($__internal_dd1451616fd2a53d8a4cb9a5b57d1e7be725629484cd5bfcb754bbf5c591c727_prof);

        
        $__internal_0a05211a8fb7e1abba597607ccf92d7b5040dcbabe67f4bdc8f57774ddd004bc->leave($__internal_0a05211a8fb7e1abba597607ccf92d7b5040dcbabe67f4bdc8f57774ddd004bc_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0f7955139a29ba3288f71167d9a3613cb25327d95d51a46031c19dc54fc3ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f7955139a29ba3288f71167d9a3613cb25327d95d51a46031c19dc54fc3ecd->enter($__internal_c0f7955139a29ba3288f71167d9a3613cb25327d95d51a46031c19dc54fc3ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_717c591f70ac692dc5387eefbe2870b5544bcc03d68a25d847c0f7f51d2af8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717c591f70ac692dc5387eefbe2870b5544bcc03d68a25d847c0f7f51d2af8c6->enter($__internal_717c591f70ac692dc5387eefbe2870b5544bcc03d68a25d847c0f7f51d2af8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <h1>Invest for future</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\" role=\"button\">Nos services pour les investisseurs</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>You are creative</h1>        
                        <h3></h3>
                    </hgroup>       
                    <a class=\"btn btn-hero btn-lg\"href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\" role=\"button\">Nos services pour les start-ups</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Solutions for Africa</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\" role=\"button\">Nos produits innovants</a>
                </div>
            </div>
        </div> 
    </div>
    <!-- End Carousel -->
    <main>
        <section id=\"index-map\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Map Container -->
                    <div id=\"container\" class=\"col-md-8 col-xs-12\"></div>
                    <!-- End Map Container -->
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"info\">
                            <div id=\"country_name\">
                                <h3>HEBYA</h3>
                            </div>
                           
                            <h5>service</h5>
                        
                                
                           
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <h5>Service</h5>
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
                        <h2>Nos missions</h2>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-line-chart  fa-4x\" aria-hidden=\"true\"></i>
                                <h4>ACCÈS AU MARCHÉ AFRICAIN</h4>
                                <p>A Hosted By Africa, nous avons une ambition panafricaine. Nous allons, après le Maroc, ouvrir progressivement des filiales dans les autres pays africains et ainsi permettre à nos startups de conquérir le continent.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                             <div class=\"assets\">
                                 <i class=\"fa fa-handshake-o fa-4x\" aria-hidden=\"true\"></i>
                                <h4>MUTUALISATION</h4>
                                <p>Hosted By Africa va à terme réunir les équipes techniques des startups de son portefeuil afin de créer une grande équipe de R & D pour que les uns puissent  bénéficier des expertises et  des expériences des autres.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-cloud-upload fa-4x\" aria-hidden=\"true\"></i>
                                <h4>CO-CRÉATION</h4>
                                <p>Rassembler les startups sous un même toit va  favoriser l'émergence de nouvelles idées et projet de startups. Nous allons ensuite co-construire et co-développer ces startups jusqu’à ce qu’elles deviennent  autonomes.</p>
                            </div>
                        </div>
                     </div>
             </div>
        </section>
        <section id=\"product-carousel\" class=\"text-center\">
            
            <h2>Nos produits</h2>
            <div id=\"product-carousel-container\">
                <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
                 <!-- Carousel items -->
                    <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
                        <div class=\"carousel-inner onebyone-carosel\">
                            <div class=\"item active\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">
                                        <img src=\"../img/img-index/eyone-medical.jpg\" class=\"img-responsive center-block\">
                                        <figcaption class=\"text-center\"><span>E-YONE MEDICAL</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">                                           
                                <div class=\"col-xs-6 col-md-3\">
                                     <p></p>
                                    <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">
                                        <img src=\"../img/img-index/madrassa-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>MADRASSA-SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">
                                        <img src=\"../img/img-index/as-pharm.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>AS PHARM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">
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
        // line 166
        echo "   
         
";
        
        $__internal_717c591f70ac692dc5387eefbe2870b5544bcc03d68a25d847c0f7f51d2af8c6->leave($__internal_717c591f70ac692dc5387eefbe2870b5544bcc03d68a25d847c0f7f51d2af8c6_prof);

        
        $__internal_c0f7955139a29ba3288f71167d9a3613cb25327d95d51a46031c19dc54fc3ecd->leave($__internal_c0f7955139a29ba3288f71167d9a3613cb25327d95d51a46031c19dc54fc3ecd_prof);

    }

    // line 170
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dfedb924233bcb2a051d3e4a75c0345d450262a8744ffc688af853dfdaee89c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfedb924233bcb2a051d3e4a75c0345d450262a8744ffc688af853dfdaee89c3->enter($__internal_dfedb924233bcb2a051d3e4a75c0345d450262a8744ffc688af853dfdaee89c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_77cbe063d40b43255cd4758d1623c56072276a12d4309418cb501ccdb2b58d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cbe063d40b43255cd4758d1623c56072276a12d4309418cb501ccdb2b58d85->enter($__internal_77cbe063d40b43255cd4758d1623c56072276a12d4309418cb501ccdb2b58d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 171
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     
     <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map/raphael-min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map/africa-paths.js"), "html", null, true);
        echo "\"></script>
";
        // line 176
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_77cbe063d40b43255cd4758d1623c56072276a12d4309418cb501ccdb2b58d85->leave($__internal_77cbe063d40b43255cd4758d1623c56072276a12d4309418cb501ccdb2b58d85_prof);

        
        $__internal_dfedb924233bcb2a051d3e4a75c0345d450262a8744ffc688af853dfdaee89c3->leave($__internal_dfedb924233bcb2a051d3e4a75c0345d450262a8744ffc688af853dfdaee89c3_prof);

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
        return array (  294 => 176,  290 => 174,  286 => 173,  280 => 171,  271 => 170,  259 => 166,  237 => 146,  225 => 137,  213 => 128,  201 => 119,  125 => 46,  112 => 36,  99 => 26,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                        <h1>Invest for future</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"{{ path('services') }}\" role=\"button\">Nos services pour les investisseurs</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>You are creative</h1>        
                        <h3></h3>
                    </hgroup>       
                    <a class=\"btn btn-hero btn-lg\"href=\"{{ path('services') }}\" role=\"button\">Nos services pour les start-ups</a>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Solutions for Africa</h1>        
                        <h3></h3>
                    </hgroup>
                    <a class=\"btn btn-hero btn-lg\" href=\"{{ path('product') }}\" role=\"button\">Nos produits innovants</a>
                </div>
            </div>
        </div> 
    </div>
    <!-- End Carousel -->
    <main>
        <section id=\"index-map\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Map Container -->
                    <div id=\"container\" class=\"col-md-8 col-xs-12\"></div>
                    <!-- End Map Container -->
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"info\">
                            <div id=\"country_name\">
                                <h3>HEBYA</h3>
                            </div>
                           
                            <h5>service</h5>
                        
                                
                           
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <h5>Service</h5>
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
                        <h2>Nos missions</h2>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-line-chart  fa-4x\" aria-hidden=\"true\"></i>
                                <h4>ACCÈS AU MARCHÉ AFRICAIN</h4>
                                <p>A Hosted By Africa, nous avons une ambition panafricaine. Nous allons, après le Maroc, ouvrir progressivement des filiales dans les autres pays africains et ainsi permettre à nos startups de conquérir le continent.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                             <div class=\"assets\">
                                 <i class=\"fa fa-handshake-o fa-4x\" aria-hidden=\"true\"></i>
                                <h4>MUTUALISATION</h4>
                                <p>Hosted By Africa va à terme réunir les équipes techniques des startups de son portefeuil afin de créer une grande équipe de R & D pour que les uns puissent  bénéficier des expertises et  des expériences des autres.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-xs-12\">
                            <div class=\"assets\">
                                <i class=\"fa fa-cloud-upload fa-4x\" aria-hidden=\"true\"></i>
                                <h4>CO-CRÉATION</h4>
                                <p>Rassembler les startups sous un même toit va  favoriser l'émergence de nouvelles idées et projet de startups. Nous allons ensuite co-construire et co-développer ces startups jusqu’à ce qu’elles deviennent  autonomes.</p>
                            </div>
                        </div>
                     </div>
             </div>
        </section>
        <section id=\"product-carousel\" class=\"text-center\">
            
            <h2>Nos produits</h2>
            <div id=\"product-carousel-container\">
                <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
                 <!-- Carousel items -->
                    <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
                        <div class=\"carousel-inner onebyone-carosel\">
                            <div class=\"item active\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"{{ path('product') }}\">
                                        <img src=\"../img/img-index/eyone-medical.jpg\" class=\"img-responsive center-block\">
                                        <figcaption class=\"text-center\"><span>E-YONE MEDICAL</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">                                           
                                <div class=\"col-xs-6 col-md-3\">
                                     <p></p>
                                    <a href=\"{{ path('product') }}\">
                                        <img src=\"../img/img-index/madrassa-system.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>MADRASSA-SYSTEM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"{{ path('product') }}\">
                                        <img src=\"../img/img-index/as-pharm.jpg\" class=\"img-responsive center-block\">
                                        <figcaption><span>AS PHARM</span></figcaption>
                                    </a>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <p></p>
                                    <a href=\"{{ path('product') }}\">
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
{#    <script src=\"{{ asset('js/map/africa.js') }}\"></script>#}
     <script src=\"{{ asset('js/index/index.js') }}\"></script>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\index.html.twig");
    }
}
