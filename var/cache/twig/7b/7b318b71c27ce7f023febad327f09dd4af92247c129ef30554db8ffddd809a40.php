<?php

/* innovator/innovator.html.twig */
class __TwigTemplate_99c526c0e83a107eb8e590c0311dbea2fc16d277f75053e337c79c9f220505b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "innovator/innovator.html.twig", 1);
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
        $__internal_e2aeb3e83950c0a0a26ad1eab55b5081c764e4f6dcf02251c9ab0c84d2e80d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2aeb3e83950c0a0a26ad1eab55b5081c764e4f6dcf02251c9ab0c84d2e80d49->enter($__internal_e2aeb3e83950c0a0a26ad1eab55b5081c764e4f6dcf02251c9ab0c84d2e80d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $__internal_7a4c2c432840cf3da2d2545f2f2632dd8b2a77baded5b888a0a8fc85824926fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4c2c432840cf3da2d2545f2f2632dd8b2a77baded5b888a0a8fc85824926fa->enter($__internal_7a4c2c432840cf3da2d2545f2f2632dd8b2a77baded5b888a0a8fc85824926fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2aeb3e83950c0a0a26ad1eab55b5081c764e4f6dcf02251c9ab0c84d2e80d49->leave($__internal_e2aeb3e83950c0a0a26ad1eab55b5081c764e4f6dcf02251c9ab0c84d2e80d49_prof);

        
        $__internal_7a4c2c432840cf3da2d2545f2f2632dd8b2a77baded5b888a0a8fc85824926fa->leave($__internal_7a4c2c432840cf3da2d2545f2f2632dd8b2a77baded5b888a0a8fc85824926fa_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_39b8bc64d8c6e2f726e56d12e09b09cbae67bd0401b1b0460e68f8abee8490fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b8bc64d8c6e2f726e56d12e09b09cbae67bd0401b1b0460e68f8abee8490fb->enter($__internal_39b8bc64d8c6e2f726e56d12e09b09cbae67bd0401b1b0460e68f8abee8490fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_eb8d915e4093b3799ee0b50f7e478e8d8b628d91e253b410d9adae304e9c7366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8d915e4093b3799ee0b50f7e478e8d8b628d91e253b410d9adae304e9c7366->enter($__internal_eb8d915e4093b3799ee0b50f7e478e8d8b628d91e253b410d9adae304e9c7366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_eb8d915e4093b3799ee0b50f7e478e8d8b628d91e253b410d9adae304e9c7366->leave($__internal_eb8d915e4093b3799ee0b50f7e478e8d8b628d91e253b410d9adae304e9c7366_prof);

        
        $__internal_39b8bc64d8c6e2f726e56d12e09b09cbae67bd0401b1b0460e68f8abee8490fb->leave($__internal_39b8bc64d8c6e2f726e56d12e09b09cbae67bd0401b1b0460e68f8abee8490fb_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0ae8579e5d4c264e7519bd045c5a5bf059fe7c527e8d54475d4ebfbe042b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ae8579e5d4c264e7519bd045c5a5bf059fe7c527e8d54475d4ebfbe042b841->enter($__internal_e0ae8579e5d4c264e7519bd045c5a5bf059fe7c527e8d54475d4ebfbe042b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc207bb615f64ba4c1a82292f44db45b26332beddf1a7a9b0e570591eef27b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc207bb615f64ba4c1a82292f44db45b26332beddf1a7a9b0e570591eef27b42->enter($__internal_cc207bb615f64ba4c1a82292f44db45b26332beddf1a7a9b0e570591eef27b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"parallax\" data-image=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-innovator/hosted_by_africa_innovators.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
";
        // line 18
        echo "                    <div class=\"col-xs-12 text-center\">
                        <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos innovateurs"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row all-select-innovators\">
                    ";
        // line 34
        echo "                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">
                        <form id=\"filter-form\">
                            <select class=\"col-xs-12 innovators-select-pays\">
                                <option value=\"\">choissisez un pays</option>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 38, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 39
            echo "                                <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </select>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section><br><br>
              
        <section id=\"innovators-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"innovator-list\">
                        ";
        // line 53
        $this->loadTemplate("innovator/innovatorList.html.twig", "innovator/innovator.html.twig", 53)->display($context);
        // line 54
        echo "                    </div>                  
                </div>                    
            </div>  
        </section>
    </main>
";
        
        $__internal_cc207bb615f64ba4c1a82292f44db45b26332beddf1a7a9b0e570591eef27b42->leave($__internal_cc207bb615f64ba4c1a82292f44db45b26332beddf1a7a9b0e570591eef27b42_prof);

        
        $__internal_e0ae8579e5d4c264e7519bd045c5a5bf059fe7c527e8d54475d4ebfbe042b841->leave($__internal_e0ae8579e5d4c264e7519bd045c5a5bf059fe7c527e8d54475d4ebfbe042b841_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1f259d272cf1121b452d408b1d3dfb3d69b8316c8044286266f4daa4ec23c6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f259d272cf1121b452d408b1d3dfb3d69b8316c8044286266f4daa4ec23c6c4->enter($__internal_1f259d272cf1121b452d408b1d3dfb3d69b8316c8044286266f4daa4ec23c6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0dc3996dc5fe2e0c82ad7e3c6bf17183fd20173d2f6201ba7cc8fc3369c2395b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc3996dc5fe2e0c82ad7e3c6bf17183fd20173d2f6201ba7cc8fc3369c2395b->enter($__internal_0dc3996dc5fe2e0c82ad7e3c6bf17183fd20173d2f6201ba7cc8fc3369c2395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 65
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
     <script>
        var countrySelect = '";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_ajax");
        echo "';
        
    </script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/innovators/innovators.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

";
        
        $__internal_0dc3996dc5fe2e0c82ad7e3c6bf17183fd20173d2f6201ba7cc8fc3369c2395b->leave($__internal_0dc3996dc5fe2e0c82ad7e3c6bf17183fd20173d2f6201ba7cc8fc3369c2395b_prof);

        
        $__internal_1f259d272cf1121b452d408b1d3dfb3d69b8316c8044286266f4daa4ec23c6c4->leave($__internal_1f259d272cf1121b452d408b1d3dfb3d69b8316c8044286266f4daa4ec23c6c4_prof);

    }

    public function getTemplateName()
    {
        return "innovator/innovator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  168 => 68,  163 => 66,  158 => 65,  149 => 64,  134 => 54,  132 => 53,  118 => 41,  109 => 39,  105 => 38,  99 => 34,  92 => 19,  89 => 18,  81 => 11,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/innovators/innovators.css\") }}\"/>

{% endblock %}

{% block content %}

    <div class=\"parallax\" data-image=\"{{ asset('img/img-innovator/hosted_by_africa_innovators.jpg') }}\"></div>
    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
{#                  <div id=\"slide1\" style=\"background-image:url(\"../images/innovateurs.jpg\"); background-repeat: none;\">
                    </div>#}
                    <div class=\"col-xs-12 text-center\">
                        <h1>{{ \"Nos innovateurs\"|upper }}</h1>
                    </div>
                </div>
                <div class=\"row all-select-innovators\">
                    {#<div class=\"col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 innovators-select-theme\">
                      
                            <select class=\"col-xs-12\">
                                <option value=\"\">Theme</option>
                                <option>Education</option>
                                <option>Santé</option>
                                <option>Assurance</option>
                                <option>Comptabilité</option>
                                <option>Numérisation GED</option>
                            </select>
                    </div>#}
                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">
                        <form id=\"filter-form\">
                            <select class=\"col-xs-12 innovators-select-pays\">
                                <option value=\"\">choissisez un pays</option>
                                {% for country in countries %}
                                <option>{{ country.name }}</option>
                                {% endfor %}
                            </select>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section><br><br>
              
        <section id=\"innovators-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"innovator-list\">
                        {% include 'innovator/innovatorList.html.twig' %}
                    </div>                  
                </div>                    
            </div>  
        </section>
    </main>
{% endblock %}




{% block javascript %}
     {{ parent() }}
     <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
     <script>
        var countrySelect = '{{ path('provider_ajax') }}';
        
    </script>
    <script src=\"{{ asset(\"js/innovators/innovators.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

{% endblock %}", "innovator/innovator.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovator.html.twig");
    }
}
