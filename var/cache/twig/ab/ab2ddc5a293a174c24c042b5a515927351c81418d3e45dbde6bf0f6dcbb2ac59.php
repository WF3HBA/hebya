<?php

/* index.html.twig */
class __TwigTemplate_930facb04aea20474a10a58d913570d1241156c1b1974ab8a48105cd11b6c26e extends Twig_Template
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
        $__internal_df02c302df25b61623928eacb2c7c22c47f6e642a46320c47e0125d6d3c141d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df02c302df25b61623928eacb2c7c22c47f6e642a46320c47e0125d6d3c141d4->enter($__internal_df02c302df25b61623928eacb2c7c22c47f6e642a46320c47e0125d6d3c141d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_811aed6b90efa4fe0e773d9e31841ebbc3aa9f68f6dd2e9015c119f2898f4ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811aed6b90efa4fe0e773d9e31841ebbc3aa9f68f6dd2e9015c119f2898f4ad4->enter($__internal_811aed6b90efa4fe0e773d9e31841ebbc3aa9f68f6dd2e9015c119f2898f4ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df02c302df25b61623928eacb2c7c22c47f6e642a46320c47e0125d6d3c141d4->leave($__internal_df02c302df25b61623928eacb2c7c22c47f6e642a46320c47e0125d6d3c141d4_prof);

        
        $__internal_811aed6b90efa4fe0e773d9e31841ebbc3aa9f68f6dd2e9015c119f2898f4ad4->leave($__internal_811aed6b90efa4fe0e773d9e31841ebbc3aa9f68f6dd2e9015c119f2898f4ad4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dd99e467aca072464699d92a97c266964a0c463aa3dfc137657ad8f1689d73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd99e467aca072464699d92a97c266964a0c463aa3dfc137657ad8f1689d73d->enter($__internal_1dd99e467aca072464699d92a97c266964a0c463aa3dfc137657ad8f1689d73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_669379f1ddb9641af2275e34fe767a9fa9e4afbcb8085394f15d10fa4150fea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669379f1ddb9641af2275e34fe767a9fa9e4afbcb8085394f15d10fa4150fea0->enter($__internal_669379f1ddb9641af2275e34fe767a9fa9e4afbcb8085394f15d10fa4150fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_669379f1ddb9641af2275e34fe767a9fa9e4afbcb8085394f15d10fa4150fea0->leave($__internal_669379f1ddb9641af2275e34fe767a9fa9e4afbcb8085394f15d10fa4150fea0_prof);

        
        $__internal_1dd99e467aca072464699d92a97c266964a0c463aa3dfc137657ad8f1689d73d->leave($__internal_1dd99e467aca072464699d92a97c266964a0c463aa3dfc137657ad8f1689d73d_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_db7524bfacca520e594f921c889dead7e62fe84b943c4310963338577f2b9ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7524bfacca520e594f921c889dead7e62fe84b943c4310963338577f2b9ec8->enter($__internal_db7524bfacca520e594f921c889dead7e62fe84b943c4310963338577f2b9ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e958bbbabf629aef9205fa00a3e0352a99d4f0649a738bef98a94637899f74b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e958bbbabf629aef9205fa00a3e0352a99d4f0649a738bef98a94637899f74b8->enter($__internal_e958bbbabf629aef9205fa00a3e0352a99d4f0649a738bef98a94637899f74b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_e958bbbabf629aef9205fa00a3e0352a99d4f0649a738bef98a94637899f74b8->leave($__internal_e958bbbabf629aef9205fa00a3e0352a99d4f0649a738bef98a94637899f74b8_prof);

        
        $__internal_db7524bfacca520e594f921c889dead7e62fe84b943c4310963338577f2b9ec8->leave($__internal_db7524bfacca520e594f921c889dead7e62fe84b943c4310963338577f2b9ec8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9b96b45f054863abcbca44eead13f35ae68c46b5118d8687270b337ae5633b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b96b45f054863abcbca44eead13f35ae68c46b5118d8687270b337ae5633b1->enter($__internal_e9b96b45f054863abcbca44eead13f35ae68c46b5118d8687270b337ae5633b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c98468e56f7adaf8f830971554426da489688a2c7125042dded73213e5f9f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c98468e56f7adaf8f830971554426da489688a2c7125042dded73213e5f9f3a->enter($__internal_6c98468e56f7adaf8f830971554426da489688a2c7125042dded73213e5f9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <h2>";
        // line 58
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Notre présence"), "html", null, true);
        echo "</h2>
            <!-- Map Container -->
            <div id=\"container\" class=\"col-md-7\"></div>
            <!-- End Map Container -->
            <div class=\"col-md-5\">
              <div class=\"info\">
                <div id=\"country_name\">
                  <h3>HEBYA</h3>
                </div>
                <div id=\"country_service\">
                  <h4>Présence</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div id=\"country_content\">
                  <h4>Service</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div id=\"country_contact\">
                  <h4>Contact</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  ";
        // line 79
        echo "                </div>
                <button class=\"btn btn-default btn-block\">back to map</button>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <section id=\"index-info\">
        <div class=\"container\">
          <div id=\"trio\" class=\"row\">
            <h2>";
        // line 89
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos missions"), "html", null, true);
        echo "</h2>
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
        <h2>";
        // line 115
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos produits"), "html", null, true);
        echo "</h2>
        <div id=\"product-carousel-container\">
          <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
            <!-- Carousel items -->
            <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
              <div class=\"carousel-inner onebyone-carosel\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 121, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 122
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) < 2)) {
                // line 123
                echo "                    <div class=\"item active\">
                  ";
            } else {
                // line 125
                echo "                    <div class=\"item\">
                  ";
            }
            // line 127
            echo "                  <div class=\"col-md-4\">
                    <p></p>
                    <a href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
            echo "?product=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "idproduct", array()), "html", null, true);
            echo "\">
                      <img src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "picture", array())), "html", null, true);
            echo "\" class=\"img-responsive center-block\">
                      <figcaption class=\"text-center\"><span>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</span></figcaption>
                    </a>
                  </div>
                </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  ";
        
        $__internal_6c98468e56f7adaf8f830971554426da489688a2c7125042dded73213e5f9f3a->leave($__internal_6c98468e56f7adaf8f830971554426da489688a2c7125042dded73213e5f9f3a_prof);

        
        $__internal_e9b96b45f054863abcbca44eead13f35ae68c46b5118d8687270b337ae5633b1->leave($__internal_e9b96b45f054863abcbca44eead13f35ae68c46b5118d8687270b337ae5633b1_prof);

    }

    // line 145
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4aa8c50275a113e5151cff2cfd0e692138fe365309df15e1885f6337d46586fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa8c50275a113e5151cff2cfd0e692138fe365309df15e1885f6337d46586fc->enter($__internal_4aa8c50275a113e5151cff2cfd0e692138fe365309df15e1885f6337d46586fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5ca9669df4e355a203a269e215b48f9873092e3e7f2e4a1b6bfd6c1689ae5792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca9669df4e355a203a269e215b48f9873092e3e7f2e4a1b6bfd6c1689ae5792->enter($__internal_5ca9669df4e355a203a269e215b48f9873092e3e7f2e4a1b6bfd6c1689ae5792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 146
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js\"></script>
    <script>
      var countryAjaxUrl = '";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("countryAjaxUrl");
        echo "';
      var countryRequest = '";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("country_request");
        echo "';
    </script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/africa-paths.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 156
        echo "    
  ";
        
        $__internal_5ca9669df4e355a203a269e215b48f9873092e3e7f2e4a1b6bfd6c1689ae5792->leave($__internal_5ca9669df4e355a203a269e215b48f9873092e3e7f2e4a1b6bfd6c1689ae5792_prof);

        
        $__internal_4aa8c50275a113e5151cff2cfd0e692138fe365309df15e1885f6337d46586fc->leave($__internal_4aa8c50275a113e5151cff2cfd0e692138fe365309df15e1885f6337d46586fc_prof);

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
        return array (  345 => 156,  341 => 154,  337 => 153,  333 => 152,  328 => 150,  324 => 149,  317 => 146,  308 => 145,  291 => 136,  272 => 131,  268 => 130,  262 => 129,  258 => 127,  254 => 125,  250 => 123,  247 => 122,  230 => 121,  221 => 115,  192 => 89,  180 => 79,  157 => 58,  144 => 48,  131 => 38,  118 => 28,  100 => 12,  91 => 11,  79 => 8,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title 'Accueil' %}

  {% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/carousel.css\") }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/accueil.css\") }}\"/>
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
            <h2>{{ \"Notre présence\"|upper }}</h2>
            <!-- Map Container -->
            <div id=\"container\" class=\"col-md-7\"></div>
            <!-- End Map Container -->
            <div class=\"col-md-5\">
              <div class=\"info\">
                <div id=\"country_name\">
                  <h3>HEBYA</h3>
                </div>
                <div id=\"country_service\">
                  <h4>Présence</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div id=\"country_content\">
                  <h4>Service</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div id=\"country_contact\">
                  <h4>Contact</h4>
                  <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  {# <a class=\"btn btn-primary\" href=\"{{ path('apropos') }}\">En savoir plus sur Hebya</a> #}
                </div>
                <button class=\"btn btn-default btn-block\">back to map</button>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <section id=\"index-info\">
        <div class=\"container\">
          <div id=\"trio\" class=\"row\">
            <h2>{{ \"Nos missions\"|upper }}</h2>
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
        <h2>{{ \"Nos produits\"|upper }}</h2>
        <div id=\"product-carousel-container\">
          <div id=\"myCarousel\" class=\"carousel fdi-Carousel slide\">
            <!-- Carousel items -->
            <div class=\"carousel fdi-Carousel slide\" id=\"eventCarousel\" data-interval=\"0\">
              <div class=\"carousel-inner onebyone-carosel\">
                {% for product in products %}
                  {% if loop.index < 2 %}
                    <div class=\"item active\">
                  {% else %}
                    <div class=\"item\">
                  {% endif %}
                  <div class=\"col-md-4\">
                    <p></p>
                    <a href=\"{{ path('product') }}?product={{ product.idproduct }}\">
                      <img src=\"{{ asset(product.picture) }}\" class=\"img-responsive center-block\">
                      <figcaption class=\"text-center\"><span>{{ product.name }}</span></figcaption>
                    </a>
                  </div>
                </div>
                {% endfor %}
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  {% endblock %}

  {% block javascript %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js\"></script>
    <script>
      var countryAjaxUrl = '{{ path('countryAjaxUrl') }}';
      var countryRequest = '{{ path('country_request') }}';
    </script>
    <script src=\"{{ asset('js/public/raphael-min.js') }}\"></script>
    <script src=\"{{ asset('js/public/africa-paths.js') }}\"></script>
    <script src=\"{{ asset('js/index.js') }}\"></script>
    {#    <script src=\"{{ asset('js/public/africa.js') }}\"></script>#}
    
  {% endblock %}
", "index.html.twig", "C:\\wamp64\\www\\hebya\\templates\\index.html.twig");
    }
}
