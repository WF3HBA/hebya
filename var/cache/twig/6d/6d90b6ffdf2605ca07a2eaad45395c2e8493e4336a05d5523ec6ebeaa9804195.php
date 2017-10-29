<?php

/* public/product.html.twig */
class __TwigTemplate_2d0a8427af1595f4c33921028d5c3a3728e60906e25ee940ec50c2c080c98a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/product.html.twig", 1);
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
        $__internal_1f54872e3f6f85bb64c9487752b58fc5dafab1c5b293933efab68fb5e479228e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f54872e3f6f85bb64c9487752b58fc5dafab1c5b293933efab68fb5e479228e->enter($__internal_1f54872e3f6f85bb64c9487752b58fc5dafab1c5b293933efab68fb5e479228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/product.html.twig"));

        $__internal_cf0a309dd8e166475be73e5280c3934a5a92544a13f7c7eb6f8c326920d063d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0a309dd8e166475be73e5280c3934a5a92544a13f7c7eb6f8c326920d063d2->enter($__internal_cf0a309dd8e166475be73e5280c3934a5a92544a13f7c7eb6f8c326920d063d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f54872e3f6f85bb64c9487752b58fc5dafab1c5b293933efab68fb5e479228e->leave($__internal_1f54872e3f6f85bb64c9487752b58fc5dafab1c5b293933efab68fb5e479228e_prof);

        
        $__internal_cf0a309dd8e166475be73e5280c3934a5a92544a13f7c7eb6f8c326920d063d2->leave($__internal_cf0a309dd8e166475be73e5280c3934a5a92544a13f7c7eb6f8c326920d063d2_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c6ecbfa43fee45bdea03bf66aeeb3f988eac2b8db2919aedcf03ac6969d40a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ecbfa43fee45bdea03bf66aeeb3f988eac2b8db2919aedcf03ac6969d40a2a->enter($__internal_c6ecbfa43fee45bdea03bf66aeeb3f988eac2b8db2919aedcf03ac6969d40a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_351c080e4458fa3251f6699dbf538d6ca942651fe11da1fc7b93ab0c113655ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351c080e4458fa3251f6699dbf538d6ca942651fe11da1fc7b93ab0c113655ff->enter($__internal_351c080e4458fa3251f6699dbf538d6ca942651fe11da1fc7b93ab0c113655ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/products.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_351c080e4458fa3251f6699dbf538d6ca942651fe11da1fc7b93ab0c113655ff->leave($__internal_351c080e4458fa3251f6699dbf538d6ca942651fe11da1fc7b93ab0c113655ff_prof);

        
        $__internal_c6ecbfa43fee45bdea03bf66aeeb3f988eac2b8db2919aedcf03ac6969d40a2a->leave($__internal_c6ecbfa43fee45bdea03bf66aeeb3f988eac2b8db2919aedcf03ac6969d40a2a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4eea282c8e6e37657cd47568af8c359aed0474905e12049793662858bd74d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eea282c8e6e37657cd47568af8c359aed0474905e12049793662858bd74d031->enter($__internal_4eea282c8e6e37657cd47568af8c359aed0474905e12049793662858bd74d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fb4e489e9a9edec080821df1964d886396542e48f259fbdd0ec387e3725926f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4e489e9a9edec080821df1964d886396542e48f259fbdd0ec387e3725926f1->enter($__internal_fb4e489e9a9edec080821df1964d886396542e48f259fbdd0ec387e3725926f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "  <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/public/hosted_by_africa_products.jpg"), "html", null, true);
        echo "\"></div>
  <main>
    <section id=\"products-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 text-center\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos Produits"), "html", null, true);
        echo "</h1>
          </div>
        </div>
        <div class=\"row product-select\">
          <form id=\"filter-form\">
            <div class=\"col-sm-6\">
              <select class=\"col-xs-12  field-select\">
                <option value=\"\">Thème</option>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 25
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "field", array())), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "              </select>
            </div>
            <div class=\"col-sm-6\">
              <select class=\"col-xs-12 country-select\">
                <option value=\"\">pays</option>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 32, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 33
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </select>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section id=\"product-list\">
      <div class=\"container\">
        ";
        // line 43
        $this->loadTemplate("public/productList.html.twig", "public/product.html.twig", 43)->display($context);
        // line 44
        echo "      </div>
    </section>
    <div id=\"product-overlay\">
      <i id=\"close-overlay\" class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 product-picture\">
            <img src=\"\">
          </div>
          <div class=\"col-md-6 product-description\">
            <h2></h2>
            <div id=\"product-detail\">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_fb4e489e9a9edec080821df1964d886396542e48f259fbdd0ec387e3725926f1->leave($__internal_fb4e489e9a9edec080821df1964d886396542e48f259fbdd0ec387e3725926f1_prof);

        
        $__internal_4eea282c8e6e37657cd47568af8c359aed0474905e12049793662858bd74d031->leave($__internal_4eea282c8e6e37657cd47568af8c359aed0474905e12049793662858bd74d031_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f8da863eed7e9b19803777a1e8c8d775afd8ffc6986906db998344ecf64b0a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8da863eed7e9b19803777a1e8c8d775afd8ffc6986906db998344ecf64b0a48->enter($__internal_f8da863eed7e9b19803777a1e8c8d775afd8ffc6986906db998344ecf64b0a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4b044b88d34ba5d0a226f79e325e283b1d7344a70b834d952882f4cc1371a09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b044b88d34ba5d0a226f79e325e283b1d7344a70b834d952882f4cc1371a09d->enter($__internal_4b044b88d34ba5d0a226f79e325e283b1d7344a70b834d952882f4cc1371a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 67
        echo "  ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
  <script>
      var countrySelect = '";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_ajax");
        echo "';
      var idproduct = '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["idproduct"]) || array_key_exists("idproduct", $context) ? $context["idproduct"] : (function () { throw new Twig_Error_Runtime('Variable "idproduct" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
        echo "';
  </script>
  <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4b044b88d34ba5d0a226f79e325e283b1d7344a70b834d952882f4cc1371a09d->leave($__internal_4b044b88d34ba5d0a226f79e325e283b1d7344a70b834d952882f4cc1371a09d_prof);

        
        $__internal_f8da863eed7e9b19803777a1e8c8d775afd8ffc6986906db998344ecf64b0a48->leave($__internal_f8da863eed7e9b19803777a1e8c8d775afd8ffc6986906db998344ecf64b0a48_prof);

    }

    public function getTemplateName()
    {
        return "public/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 73,  200 => 71,  196 => 70,  191 => 68,  186 => 67,  177 => 66,  148 => 44,  146 => 43,  136 => 35,  125 => 33,  121 => 32,  114 => 27,  103 => 25,  99 => 24,  88 => 16,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/products.css\") }}\"/>

{% endblock %}

{% block content %}
  <div class=\"parallax\" data-image=\"{{ asset('img/public/hosted_by_africa_products.jpg') }}\"></div>
  <main>
    <section id=\"products-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 text-center\">
            <h1>{{ \"Nos Produits\"|upper }}</h1>
          </div>
        </div>
        <div class=\"row product-select\">
          <form id=\"filter-form\">
            <div class=\"col-sm-6\">
              <select class=\"col-xs-12  field-select\">
                <option value=\"\">Thème</option>
                {% for field in fields %}
                  <option value=\"{{ field.field }}\">{{ field.field|capitalize }}</option>
                {% endfor %}
              </select>
            </div>
            <div class=\"col-sm-6\">
              <select class=\"col-xs-12 country-select\">
                <option value=\"\">pays</option>
                {% for country in countries %}
                  <option value=\"{{ country.idcountry }}\">{{ country.name }}</option>
                {% endfor %}
              </select>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section id=\"product-list\">
      <div class=\"container\">
        {% include 'public/productList.html.twig' %}
      </div>
    </section>
    <div id=\"product-overlay\">
      <i id=\"close-overlay\" class=\"fa fa-times-circle-o\" aria-hidden=\"true\"></i>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 product-picture\">
            <img src=\"\">
          </div>
          <div class=\"col-md-6 product-description\">
            <h2></h2>
            <div id=\"product-detail\">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
{% endblock %}


{% block javascript %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
  <script>
      var countrySelect = '{{ path('product_ajax') }}';
      var idproduct = '{{ idproduct }}';
  </script>
  <script src=\"{{ asset(\"js/public/product.js\") }}\"></script>
{% endblock %}
", "public/product.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\product.html.twig");
    }
}
