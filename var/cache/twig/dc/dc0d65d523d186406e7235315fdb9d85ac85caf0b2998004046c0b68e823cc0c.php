<?php

/* index.html.twig */
class __TwigTemplate_40a45c3366e012f06186772200dfb0e70d2784b730c429cb3605c5c371631a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/carousel.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/accueil.css"), "html", null, true);
        echo "\"/>
  ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
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
        // line 28
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
        // line 38
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
        // line 48
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
        // line 116
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
        // line 125
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
        // line 134
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
        // line 143
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
    }

    // line 158
    public function block_javascript($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/africa-paths.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 163
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
  ";
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
        return array (  243 => 163,  239 => 161,  235 => 160,  230 => 159,  227 => 158,  209 => 143,  197 => 134,  185 => 125,  173 => 116,  102 => 48,  89 => 38,  76 => 28,  58 => 12,  55 => 11,  49 => 8,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\wamp64\\www\\hebya\\templates\\index.html.twig");
    }
}
