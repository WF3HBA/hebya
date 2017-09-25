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
        $__internal_5e49b07b715c7031fa9bb8f9053cec2ca97b1a19df8476d0c5d189bc35c78932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e49b07b715c7031fa9bb8f9053cec2ca97b1a19df8476d0c5d189bc35c78932->enter($__internal_5e49b07b715c7031fa9bb8f9053cec2ca97b1a19df8476d0c5d189bc35c78932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_7dd8ef525d38d9a686ba84f81bb62b12b8fa86efefa63dd5536fb4bbbfa364c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd8ef525d38d9a686ba84f81bb62b12b8fa86efefa63dd5536fb4bbbfa364c2->enter($__internal_7dd8ef525d38d9a686ba84f81bb62b12b8fa86efefa63dd5536fb4bbbfa364c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e49b07b715c7031fa9bb8f9053cec2ca97b1a19df8476d0c5d189bc35c78932->leave($__internal_5e49b07b715c7031fa9bb8f9053cec2ca97b1a19df8476d0c5d189bc35c78932_prof);

        
        $__internal_7dd8ef525d38d9a686ba84f81bb62b12b8fa86efefa63dd5536fb4bbbfa364c2->leave($__internal_7dd8ef525d38d9a686ba84f81bb62b12b8fa86efefa63dd5536fb4bbbfa364c2_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_18b67c894f4b84bf93762bfb4c1874cb8c49476adaf5f3ba6f481f68da8c4546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b67c894f4b84bf93762bfb4c1874cb8c49476adaf5f3ba6f481f68da8c4546->enter($__internal_18b67c894f4b84bf93762bfb4c1874cb8c49476adaf5f3ba6f481f68da8c4546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_aa16f44d993eab7df77dbf76179dab7a1d912a63f1f83e25a76b431b60d5177e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa16f44d993eab7df77dbf76179dab7a1d912a63f1f83e25a76b431b60d5177e->enter($__internal_aa16f44d993eab7df77dbf76179dab7a1d912a63f1f83e25a76b431b60d5177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_aa16f44d993eab7df77dbf76179dab7a1d912a63f1f83e25a76b431b60d5177e->leave($__internal_aa16f44d993eab7df77dbf76179dab7a1d912a63f1f83e25a76b431b60d5177e_prof);

        
        $__internal_18b67c894f4b84bf93762bfb4c1874cb8c49476adaf5f3ba6f481f68da8c4546->leave($__internal_18b67c894f4b84bf93762bfb4c1874cb8c49476adaf5f3ba6f481f68da8c4546_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f6158fd690890f5d3ce78451d44becebc2fc6e54e3be71f7eb404cb2b579b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6158fd690890f5d3ce78451d44becebc2fc6e54e3be71f7eb404cb2b579b17->enter($__internal_0f6158fd690890f5d3ce78451d44becebc2fc6e54e3be71f7eb404cb2b579b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4d1fa27cb307be065f1e6fb42865bf537a7d59a1f81dcb5c05ad5e74fd1f1f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1fa27cb307be065f1e6fb42865bf537a7d59a1f81dcb5c05ad5e74fd1f1f72->enter($__internal_4d1fa27cb307be065f1e6fb42865bf537a7d59a1f81dcb5c05ad5e74fd1f1f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4d1fa27cb307be065f1e6fb42865bf537a7d59a1f81dcb5c05ad5e74fd1f1f72->leave($__internal_4d1fa27cb307be065f1e6fb42865bf537a7d59a1f81dcb5c05ad5e74fd1f1f72_prof);

        
        $__internal_0f6158fd690890f5d3ce78451d44becebc2fc6e54e3be71f7eb404cb2b579b17->leave($__internal_0f6158fd690890f5d3ce78451d44becebc2fc6e54e3be71f7eb404cb2b579b17_prof);

    }

    // line 170
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_947b9e604162fe950437f822a99e912a8f24f072b7f8fa6ac24efce1cb926404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947b9e604162fe950437f822a99e912a8f24f072b7f8fa6ac24efce1cb926404->enter($__internal_947b9e604162fe950437f822a99e912a8f24f072b7f8fa6ac24efce1cb926404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_eadf8ea484ed5ab30f3e7e49e55d805557509929409a18af35ccb352e9e360a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadf8ea484ed5ab30f3e7e49e55d805557509929409a18af35ccb352e9e360a9->enter($__internal_eadf8ea484ed5ab30f3e7e49e55d805557509929409a18af35ccb352e9e360a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_eadf8ea484ed5ab30f3e7e49e55d805557509929409a18af35ccb352e9e360a9->leave($__internal_eadf8ea484ed5ab30f3e7e49e55d805557509929409a18af35ccb352e9e360a9_prof);

        
        $__internal_947b9e604162fe950437f822a99e912a8f24f072b7f8fa6ac24efce1cb926404->leave($__internal_947b9e604162fe950437f822a99e912a8f24f072b7f8fa6ac24efce1cb926404_prof);

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
