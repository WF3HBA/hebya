<?php

/* product/product.html.twig */
class __TwigTemplate_bdb18dc76c7afe7527b53d88140607b8c5859b224e56cb8537ffe007e2180f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "product/product.html.twig", 1);
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
        $__internal_0c4109dfcd442cf605a2a89cc020f1bd97f36e7fc0dd334bb232bfcbcf86d746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4109dfcd442cf605a2a89cc020f1bd97f36e7fc0dd334bb232bfcbcf86d746->enter($__internal_0c4109dfcd442cf605a2a89cc020f1bd97f36e7fc0dd334bb232bfcbcf86d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $__internal_1e30d2261a7809371138dc12840d15f79fc7b513dce58cdaef942df27cf3a0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e30d2261a7809371138dc12840d15f79fc7b513dce58cdaef942df27cf3a0a2->enter($__internal_1e30d2261a7809371138dc12840d15f79fc7b513dce58cdaef942df27cf3a0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4109dfcd442cf605a2a89cc020f1bd97f36e7fc0dd334bb232bfcbcf86d746->leave($__internal_0c4109dfcd442cf605a2a89cc020f1bd97f36e7fc0dd334bb232bfcbcf86d746_prof);

        
        $__internal_1e30d2261a7809371138dc12840d15f79fc7b513dce58cdaef942df27cf3a0a2->leave($__internal_1e30d2261a7809371138dc12840d15f79fc7b513dce58cdaef942df27cf3a0a2_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_eedb39f9e4f244a1480c591f6e6cfd979ed3dd4b1ffb9bdb30ab6f97aa04b025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedb39f9e4f244a1480c591f6e6cfd979ed3dd4b1ffb9bdb30ab6f97aa04b025->enter($__internal_eedb39f9e4f244a1480c591f6e6cfd979ed3dd4b1ffb9bdb30ab6f97aa04b025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d8bf192c0561fae2a824de9d6a9f54b249de74c43000c8f4b22093fac3d3e865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bf192c0561fae2a824de9d6a9f54b249de74c43000c8f4b22093fac3d3e865->enter($__internal_d8bf192c0561fae2a824de9d6a9f54b249de74c43000c8f4b22093fac3d3e865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/products/products.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_d8bf192c0561fae2a824de9d6a9f54b249de74c43000c8f4b22093fac3d3e865->leave($__internal_d8bf192c0561fae2a824de9d6a9f54b249de74c43000c8f4b22093fac3d3e865_prof);

        
        $__internal_eedb39f9e4f244a1480c591f6e6cfd979ed3dd4b1ffb9bdb30ab6f97aa04b025->leave($__internal_eedb39f9e4f244a1480c591f6e6cfd979ed3dd4b1ffb9bdb30ab6f97aa04b025_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b901ee857ae0068ed304f73257b4859f4fe722e109420750fdeae57ea349ac3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b901ee857ae0068ed304f73257b4859f4fe722e109420750fdeae57ea349ac3c->enter($__internal_b901ee857ae0068ed304f73257b4859f4fe722e109420750fdeae57ea349ac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fc6c1efbe0974bd90089d2a601b4b46d838b29d223733aa4c6ab055c3c6bf7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6c1efbe0974bd90089d2a601b4b46d838b29d223733aa4c6ab055c3c6bf7cc->enter($__internal_fc6c1efbe0974bd90089d2a601b4b46d838b29d223733aa4c6ab055c3c6bf7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/products/hosted_by_africa_products.jpg"), "html", null, true);
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
                <div class=\"row all-select-products\">
                    <form id=\"filter-form\">
                        <div class=\"col-xs-12 col-sm-6 products-select-theme\">
                            <select class=\"col-xs-12 products-select-field\">
                                <option value=\"\">Thème</option>
                                <option>Education</option>
                                <option>Santé</option>
                                <option>Assurance</option>
                                <option>Comptabilité</option>
                                <option>Numérisation GED</option>
                            </select>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 \">
                            <select class=\"col-xs-12 products-select-pays\">
                                <option value=\"\">pays</option>
                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 36
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </section><br><br>
              
        <section id=\"products-body\">
            <div class=\"container\">
                <div id=\"product-list\">
                    ";
        // line 48
        $this->loadTemplate("product/productList.html.twig", "product/product.html.twig", 48)->display($context);
        // line 49
        echo "                </div>
                
                ";
        // line 52
        echo "                 <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                    <div class=\"modal-dialog\" role=\"document\">
                      <div class=\"modal-content product-detail\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                          <h1 class=\"modal-title\" id=\"myModalLabel\"></h1>
                        </div>
                        <div class=\"modal-body product-detail-content\">
                          ...
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                          
                        </div>
                      </div>
                    </div>
                 </div>
                ";
        // line 70
        echo "                
            </div>
        </section><br>
    </main>
";
        
        $__internal_fc6c1efbe0974bd90089d2a601b4b46d838b29d223733aa4c6ab055c3c6bf7cc->leave($__internal_fc6c1efbe0974bd90089d2a601b4b46d838b29d223733aa4c6ab055c3c6bf7cc_prof);

        
        $__internal_b901ee857ae0068ed304f73257b4859f4fe722e109420750fdeae57ea349ac3c->leave($__internal_b901ee857ae0068ed304f73257b4859f4fe722e109420750fdeae57ea349ac3c_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_eacb268806f08315be7ce8e672070d54eb78c3a4c789a496c50cd0335d823abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacb268806f08315be7ce8e672070d54eb78c3a4c789a496c50cd0335d823abe->enter($__internal_eacb268806f08315be7ce8e672070d54eb78c3a4c789a496c50cd0335d823abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_87b4547b7b598f43fc9c319d6726e43000b65db232f6a4666c8f7b6c0e60624c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b4547b7b598f43fc9c319d6726e43000b65db232f6a4666c8f7b6c0e60624c->enter($__internal_87b4547b7b598f43fc9c319d6726e43000b65db232f6a4666c8f7b6c0e60624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 78
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var countrySelect = '";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_ajax");
        echo "';
        
    </script>
     <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_87b4547b7b598f43fc9c319d6726e43000b65db232f6a4666c8f7b6c0e60624c->leave($__internal_87b4547b7b598f43fc9c319d6726e43000b65db232f6a4666c8f7b6c0e60624c_prof);

        
        $__internal_eacb268806f08315be7ce8e672070d54eb78c3a4c789a496c50cd0335d823abe->leave($__internal_eacb268806f08315be7ce8e672070d54eb78c3a4c789a496c50cd0335d823abe_prof);

    }

    public function getTemplateName()
    {
        return "product/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 84,  194 => 81,  189 => 79,  184 => 78,  175 => 77,  161 => 70,  142 => 52,  138 => 49,  136 => 48,  124 => 38,  113 => 36,  109 => 34,  88 => 16,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/products/products.css\") }}\"/>

{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/products/hosted_by_africa_products.jpg') }}\"></div>
    <main>
        <section id=\"products-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <h1>{{ \"Nos Produits\"|upper }}</h1>
                    </div>
                </div>
                <div class=\"row all-select-products\">
                    <form id=\"filter-form\">
                        <div class=\"col-xs-12 col-sm-6 products-select-theme\">
                            <select class=\"col-xs-12 products-select-field\">
                                <option value=\"\">Thème</option>
                                <option>Education</option>
                                <option>Santé</option>
                                <option>Assurance</option>
                                <option>Comptabilité</option>
                                <option>Numérisation GED</option>
                            </select>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 \">
                            <select class=\"col-xs-12 products-select-pays\">
                                <option value=\"\">pays</option>
                                {% for country in countries %}
{#                                    #}
                                <option value=\"{{ country.idcountry }}\">{{ country.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </section><br><br>
              
        <section id=\"products-body\">
            <div class=\"container\">
                <div id=\"product-list\">
                    {% include 'product/productList.html.twig' %}
                </div>
                
                {#  MODAL #}
                 <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                    <div class=\"modal-dialog\" role=\"document\">
                      <div class=\"modal-content product-detail\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                          <h1 class=\"modal-title\" id=\"myModalLabel\"></h1>
                        </div>
                        <div class=\"modal-body product-detail-content\">
                          ...
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                          
                        </div>
                      </div>
                    </div>
                 </div>
                {# END OF MODAL #}
                
            </div>
        </section><br>
    </main>
{% endblock %}


{% block javascript %}
     {{ parent() }}
     <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
    <script>
        var countrySelect = '{{ path('product_ajax') }}';
        
    </script>
     <script src=\"{{ asset(\"js/product/product.js\") }}\"></script>
{% endblock %}
", "product/product.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\product\\product.html.twig");
    }
}
