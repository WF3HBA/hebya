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
        $__internal_6632802034f32facc25d565f61e1b14aa3c32f11aa882026d090c2c75b4eba9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6632802034f32facc25d565f61e1b14aa3c32f11aa882026d090c2c75b4eba9f->enter($__internal_6632802034f32facc25d565f61e1b14aa3c32f11aa882026d090c2c75b4eba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $__internal_17604e2458266c624db7b541d295914de977cbbf48ce226c7cc3be7a7bf798f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17604e2458266c624db7b541d295914de977cbbf48ce226c7cc3be7a7bf798f8->enter($__internal_17604e2458266c624db7b541d295914de977cbbf48ce226c7cc3be7a7bf798f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6632802034f32facc25d565f61e1b14aa3c32f11aa882026d090c2c75b4eba9f->leave($__internal_6632802034f32facc25d565f61e1b14aa3c32f11aa882026d090c2c75b4eba9f_prof);

        
        $__internal_17604e2458266c624db7b541d295914de977cbbf48ce226c7cc3be7a7bf798f8->leave($__internal_17604e2458266c624db7b541d295914de977cbbf48ce226c7cc3be7a7bf798f8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7de92fd3a46ec5948f55e133fc583ff9401ff76f4b40539352c8d785cb3d36a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de92fd3a46ec5948f55e133fc583ff9401ff76f4b40539352c8d785cb3d36a9->enter($__internal_7de92fd3a46ec5948f55e133fc583ff9401ff76f4b40539352c8d785cb3d36a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5b65b5748974953b44277d5bb18ba9b5ad1c224e7f653fab024d3822ccfb82b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b65b5748974953b44277d5bb18ba9b5ad1c224e7f653fab024d3822ccfb82b3->enter($__internal_5b65b5748974953b44277d5bb18ba9b5ad1c224e7f653fab024d3822ccfb82b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/products/products.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_5b65b5748974953b44277d5bb18ba9b5ad1c224e7f653fab024d3822ccfb82b3->leave($__internal_5b65b5748974953b44277d5bb18ba9b5ad1c224e7f653fab024d3822ccfb82b3_prof);

        
        $__internal_7de92fd3a46ec5948f55e133fc583ff9401ff76f4b40539352c8d785cb3d36a9->leave($__internal_7de92fd3a46ec5948f55e133fc583ff9401ff76f4b40539352c8d785cb3d36a9_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7fbbd9d5e453c7283e085a1340891670640ec7bb4715ce559d6ed5a0bff944bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbbd9d5e453c7283e085a1340891670640ec7bb4715ce559d6ed5a0bff944bc->enter($__internal_7fbbd9d5e453c7283e085a1340891670640ec7bb4715ce559d6ed5a0bff944bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a9c02da73238a3c57a95da5c95cef48f1ee47caace1d88bc2f90e3a5fdc5ad23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c02da73238a3c57a95da5c95cef48f1ee47caace1d88bc2f90e3a5fdc5ad23->enter($__internal_a9c02da73238a3c57a95da5c95cef48f1ee47caace1d88bc2f90e3a5fdc5ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a9c02da73238a3c57a95da5c95cef48f1ee47caace1d88bc2f90e3a5fdc5ad23->leave($__internal_a9c02da73238a3c57a95da5c95cef48f1ee47caace1d88bc2f90e3a5fdc5ad23_prof);

        
        $__internal_7fbbd9d5e453c7283e085a1340891670640ec7bb4715ce559d6ed5a0bff944bc->leave($__internal_7fbbd9d5e453c7283e085a1340891670640ec7bb4715ce559d6ed5a0bff944bc_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7f6b1b5bf376be9355f404f0c5df5103405b2f3c8460cc3dc6b975fb8ac153e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b1b5bf376be9355f404f0c5df5103405b2f3c8460cc3dc6b975fb8ac153e3->enter($__internal_7f6b1b5bf376be9355f404f0c5df5103405b2f3c8460cc3dc6b975fb8ac153e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_18b9396c9acf5399255f880694d181b7e7650e9bed6b21bc519250ce65944f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b9396c9acf5399255f880694d181b7e7650e9bed6b21bc519250ce65944f59->enter($__internal_18b9396c9acf5399255f880694d181b7e7650e9bed6b21bc519250ce65944f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_18b9396c9acf5399255f880694d181b7e7650e9bed6b21bc519250ce65944f59->leave($__internal_18b9396c9acf5399255f880694d181b7e7650e9bed6b21bc519250ce65944f59_prof);

        
        $__internal_7f6b1b5bf376be9355f404f0c5df5103405b2f3c8460cc3dc6b975fb8ac153e3->leave($__internal_7f6b1b5bf376be9355f404f0c5df5103405b2f3c8460cc3dc6b975fb8ac153e3_prof);

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
