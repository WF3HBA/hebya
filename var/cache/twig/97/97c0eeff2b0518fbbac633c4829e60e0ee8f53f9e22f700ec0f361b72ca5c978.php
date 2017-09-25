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
        $__internal_269453d8db9b1a5fc515e5f8af1858d9f539e7e8320ea32b5de06c5140b14e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269453d8db9b1a5fc515e5f8af1858d9f539e7e8320ea32b5de06c5140b14e9e->enter($__internal_269453d8db9b1a5fc515e5f8af1858d9f539e7e8320ea32b5de06c5140b14e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_af3d4bff3bd21d07da489f512b268393a4ac701bff901502805dbdb52961f161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3d4bff3bd21d07da489f512b268393a4ac701bff901502805dbdb52961f161->enter($__internal_af3d4bff3bd21d07da489f512b268393a4ac701bff901502805dbdb52961f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269453d8db9b1a5fc515e5f8af1858d9f539e7e8320ea32b5de06c5140b14e9e->leave($__internal_269453d8db9b1a5fc515e5f8af1858d9f539e7e8320ea32b5de06c5140b14e9e_prof);

        
        $__internal_af3d4bff3bd21d07da489f512b268393a4ac701bff901502805dbdb52961f161->leave($__internal_af3d4bff3bd21d07da489f512b268393a4ac701bff901502805dbdb52961f161_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7ad6a88c89333ba75c48d820ec45fbdaaa6e3c9027c95b9a67fb48063d94971f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad6a88c89333ba75c48d820ec45fbdaaa6e3c9027c95b9a67fb48063d94971f->enter($__internal_7ad6a88c89333ba75c48d820ec45fbdaaa6e3c9027c95b9a67fb48063d94971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cc96313e0502067fedfbd0dcf334245020a83f0ad183c246b784a77d51a5ddca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc96313e0502067fedfbd0dcf334245020a83f0ad183c246b784a77d51a5ddca->enter($__internal_cc96313e0502067fedfbd0dcf334245020a83f0ad183c246b784a77d51a5ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_cc96313e0502067fedfbd0dcf334245020a83f0ad183c246b784a77d51a5ddca->leave($__internal_cc96313e0502067fedfbd0dcf334245020a83f0ad183c246b784a77d51a5ddca_prof);

        
        $__internal_7ad6a88c89333ba75c48d820ec45fbdaaa6e3c9027c95b9a67fb48063d94971f->leave($__internal_7ad6a88c89333ba75c48d820ec45fbdaaa6e3c9027c95b9a67fb48063d94971f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_6642f06f3af240242159ffdee6ad9ace95ef48cb99e74604c93743c3729fffd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6642f06f3af240242159ffdee6ad9ace95ef48cb99e74604c93743c3729fffd9->enter($__internal_6642f06f3af240242159ffdee6ad9ace95ef48cb99e74604c93743c3729fffd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9338ca8d8aa8a06280e9de72fd51a556266349b1cf801ef5dad41de21243ac0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9338ca8d8aa8a06280e9de72fd51a556266349b1cf801ef5dad41de21243ac0c->enter($__internal_9338ca8d8aa8a06280e9de72fd51a556266349b1cf801ef5dad41de21243ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <h1>Pour les entrepreneurs</h1>        
                        <h3></h3>
                    </hgroup>
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Pour les investisseurs</h1>        
                        <h3></h3>
                    </hgroup>       
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Pour l'Humanité</h1>        
                        <h3></h3>
                    </hgroup>
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
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
        // line 166
        echo "   
         
";
        
        $__internal_9338ca8d8aa8a06280e9de72fd51a556266349b1cf801ef5dad41de21243ac0c->leave($__internal_9338ca8d8aa8a06280e9de72fd51a556266349b1cf801ef5dad41de21243ac0c_prof);

        
        $__internal_6642f06f3af240242159ffdee6ad9ace95ef48cb99e74604c93743c3729fffd9->leave($__internal_6642f06f3af240242159ffdee6ad9ace95ef48cb99e74604c93743c3729fffd9_prof);

    }

    // line 170
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a574cfef30d4a63431049f61a7e5f603c6641f74032b7733ac5037a855852229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a574cfef30d4a63431049f61a7e5f603c6641f74032b7733ac5037a855852229->enter($__internal_a574cfef30d4a63431049f61a7e5f603c6641f74032b7733ac5037a855852229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5202a7578d8eb9a83117ea36438d3b9746f9b46e1722ba623a484c6b6145e3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5202a7578d8eb9a83117ea36438d3b9746f9b46e1722ba623a484c6b6145e3f6->enter($__internal_5202a7578d8eb9a83117ea36438d3b9746f9b46e1722ba623a484c6b6145e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_5202a7578d8eb9a83117ea36438d3b9746f9b46e1722ba623a484c6b6145e3f6->leave($__internal_5202a7578d8eb9a83117ea36438d3b9746f9b46e1722ba623a484c6b6145e3f6_prof);

        
        $__internal_a574cfef30d4a63431049f61a7e5f603c6641f74032b7733ac5037a855852229->leave($__internal_a574cfef30d4a63431049f61a7e5f603c6641f74032b7733ac5037a855852229_prof);

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
        return array (  273 => 176,  269 => 174,  265 => 173,  259 => 171,  250 => 170,  238 => 166,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                        <h1>Pour les entrepreneurs</h1>        
                        <h3></h3>
                    </hgroup>
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-2\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Pour les investisseurs</h1>        
                        <h3></h3>
                    </hgroup>       
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
                </div>
            </div>
            <div class=\"item slides\">
                <div class=\"slide-3\"></div>
                <div class=\"hero\">        
                    <hgroup>
                        <h1>Pour l'Humanité</h1>        
                        <h3></h3>
                    </hgroup>
                    <button class=\"btn btn-hero btn-lg\" role=\"button\">See all features</button>
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
{#    <script src=\"{{ asset('js/map/africa.js') }}\"></script>#}
     <script src=\"{{ asset('js/index/index.js') }}\"></script>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\index.html.twig");
    }
}
