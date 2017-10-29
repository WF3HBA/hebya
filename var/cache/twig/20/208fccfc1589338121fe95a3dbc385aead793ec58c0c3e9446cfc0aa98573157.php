<?php

/* public/provider.html.twig */
class __TwigTemplate_3060bbbd8691aaabc88d6e9b10286af8f9d37beb98c9f77745c45ae4790396ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/provider.html.twig", 1);
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
        $__internal_ad5de5c0e42b111f840583852accdf9a1feaa364058d9b5c9e57c475e22a67e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5de5c0e42b111f840583852accdf9a1feaa364058d9b5c9e57c475e22a67e7->enter($__internal_ad5de5c0e42b111f840583852accdf9a1feaa364058d9b5c9e57c475e22a67e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/provider.html.twig"));

        $__internal_bd3462904a05f59547f810b9ece1ce4401e14891e7b20942f9ce615a4b015a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3462904a05f59547f810b9ece1ce4401e14891e7b20942f9ce615a4b015a04->enter($__internal_bd3462904a05f59547f810b9ece1ce4401e14891e7b20942f9ce615a4b015a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/provider.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5de5c0e42b111f840583852accdf9a1feaa364058d9b5c9e57c475e22a67e7->leave($__internal_ad5de5c0e42b111f840583852accdf9a1feaa364058d9b5c9e57c475e22a67e7_prof);

        
        $__internal_bd3462904a05f59547f810b9ece1ce4401e14891e7b20942f9ce615a4b015a04->leave($__internal_bd3462904a05f59547f810b9ece1ce4401e14891e7b20942f9ce615a4b015a04_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_373ae65be52b66b57c4d1517a6482232835a2e2a6c19264ad9618e958d022278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373ae65be52b66b57c4d1517a6482232835a2e2a6c19264ad9618e958d022278->enter($__internal_373ae65be52b66b57c4d1517a6482232835a2e2a6c19264ad9618e958d022278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_659deaa70578d54eb7d4b47bd58e5729f3e15b301977269a1c08a974aed6e2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659deaa70578d54eb7d4b47bd58e5729f3e15b301977269a1c08a974aed6e2e8->enter($__internal_659deaa70578d54eb7d4b47bd58e5729f3e15b301977269a1c08a974aed6e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/providers.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_659deaa70578d54eb7d4b47bd58e5729f3e15b301977269a1c08a974aed6e2e8->leave($__internal_659deaa70578d54eb7d4b47bd58e5729f3e15b301977269a1c08a974aed6e2e8_prof);

        
        $__internal_373ae65be52b66b57c4d1517a6482232835a2e2a6c19264ad9618e958d022278->leave($__internal_373ae65be52b66b57c4d1517a6482232835a2e2a6c19264ad9618e958d022278_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea562561220d6ba170bada75bbaa69ae16e361c7ddb465f59134f787a982f284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea562561220d6ba170bada75bbaa69ae16e361c7ddb465f59134f787a982f284->enter($__internal_ea562561220d6ba170bada75bbaa69ae16e361c7ddb465f59134f787a982f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e8d202ab5ed6956f166eae8101149148e8dd34d7a31594b52f387bb8fd0a3964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d202ab5ed6956f166eae8101149148e8dd34d7a31594b52f387bb8fd0a3964->enter($__internal_e8d202ab5ed6956f166eae8101149148e8dd34d7a31594b52f387bb8fd0a3964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/public/hosted_by_africa_providers.jpg"), "html", null, true);
        echo "\"></div>
  <main>
    <section id=\"providers-header\">
      <div class=\"container\">
        <div class=\"row\">
          
          <div class=\"col-xs-12 text-center\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos innovateurs"), "html", null, true);
        echo "</h1>
          </div>
        </div>
        <div class=\"row all-select-providers\">
          <div class=\"col-md-6 providers-select-theme\">
                  <select class=\"col-xs-12\">
                      <option value=\"\">Theme</option>
                      <option>Education</option>
                      <option>Santé</option>
                      <option>Assurance</option>
                      <option>Comptabilité</option>
                      <option>Numérisation GED</option>
                  </select>
          </div>
          <div class=\"col-md-6\">
            <form id=\"filter-form\">
              <select class=\"col-xs-12 providers-select-pays\">
                <option value=\"\">choissisez un pays</option>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 35
            echo "                  <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "              </select>
            </form>
          </div>
        </div>
      </div>
    </section><br><br>
    <section id=\"providers-body\">
      <div class=\"container\">
        <div class=\"row\">
          <div id=\"provider-list\">
            ";
        // line 47
        $this->loadTemplate("public/providerList.html.twig", "public/provider.html.twig", 47)->display($context);
        // line 48
        echo "          </div>                  
        </div>                    
      </div>  
    </section>
  </main>
";
        
        $__internal_e8d202ab5ed6956f166eae8101149148e8dd34d7a31594b52f387bb8fd0a3964->leave($__internal_e8d202ab5ed6956f166eae8101149148e8dd34d7a31594b52f387bb8fd0a3964_prof);

        
        $__internal_ea562561220d6ba170bada75bbaa69ae16e361c7ddb465f59134f787a982f284->leave($__internal_ea562561220d6ba170bada75bbaa69ae16e361c7ddb465f59134f787a982f284_prof);

    }

    // line 55
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9796daf78d4ac6767374c303531e4ebab6be363510091ba17a30df30e5b8f6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9796daf78d4ac6767374c303531e4ebab6be363510091ba17a30df30e5b8f6d8->enter($__internal_9796daf78d4ac6767374c303531e4ebab6be363510091ba17a30df30e5b8f6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_85ace6c893a6f6c6d94615fd14e51e9c92f3fb2a634cb6ebfa593898df25bfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ace6c893a6f6c6d94615fd14e51e9c92f3fb2a634cb6ebfa593898df25bfcb->enter($__internal_85ace6c893a6f6c6d94615fd14e51e9c92f3fb2a634cb6ebfa593898df25bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 56
        echo "  ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    var countrySelect = '";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_ajax");
        echo "';
  </script>
  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/providers.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>
";
        
        $__internal_85ace6c893a6f6c6d94615fd14e51e9c92f3fb2a634cb6ebfa593898df25bfcb->leave($__internal_85ace6c893a6f6c6d94615fd14e51e9c92f3fb2a634cb6ebfa593898df25bfcb_prof);

        
        $__internal_9796daf78d4ac6767374c303531e4ebab6be363510091ba17a30df30e5b8f6d8->leave($__internal_9796daf78d4ac6767374c303531e4ebab6be363510091ba17a30df30e5b8f6d8_prof);

    }

    public function getTemplateName()
    {
        return "public/provider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 61,  170 => 59,  165 => 57,  160 => 56,  151 => 55,  136 => 48,  134 => 47,  122 => 37,  113 => 35,  109 => 34,  88 => 16,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/providers.css\") }}\"/>
{% endblock %}

{% block content %}
  <div class=\"parallax\" data-image=\"{{ asset('img/public/hosted_by_africa_providers.jpg') }}\"></div>
  <main>
    <section id=\"providers-header\">
      <div class=\"container\">
        <div class=\"row\">
          
          <div class=\"col-xs-12 text-center\">
            <h1>{{ \"Nos innovateurs\"|upper }}</h1>
          </div>
        </div>
        <div class=\"row all-select-providers\">
          <div class=\"col-md-6 providers-select-theme\">
                  <select class=\"col-xs-12\">
                      <option value=\"\">Theme</option>
                      <option>Education</option>
                      <option>Santé</option>
                      <option>Assurance</option>
                      <option>Comptabilité</option>
                      <option>Numérisation GED</option>
                  </select>
          </div>
          <div class=\"col-md-6\">
            <form id=\"filter-form\">
              <select class=\"col-xs-12 providers-select-pays\">
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
    <section id=\"providers-body\">
      <div class=\"container\">
        <div class=\"row\">
          <div id=\"provider-list\">
            {% include 'public/providerList.html.twig' %}
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
  <script src=\"{{ asset(\"js/public/providers.js\") }}\"></script>
  <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>
{% endblock %}", "public/provider.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\provider.html.twig");
    }
}
