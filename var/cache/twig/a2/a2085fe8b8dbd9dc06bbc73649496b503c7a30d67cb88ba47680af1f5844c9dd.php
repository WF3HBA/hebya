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
        $__internal_41436a3a601018409f22b3b6c96bfe3d0efd87f476ffe515b0d1649d0a321975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41436a3a601018409f22b3b6c96bfe3d0efd87f476ffe515b0d1649d0a321975->enter($__internal_41436a3a601018409f22b3b6c96bfe3d0efd87f476ffe515b0d1649d0a321975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $__internal_544a0538cadeb866d0512787149f71c75fe3ee7ee58fff33c33ed848e7f1281f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544a0538cadeb866d0512787149f71c75fe3ee7ee58fff33c33ed848e7f1281f->enter($__internal_544a0538cadeb866d0512787149f71c75fe3ee7ee58fff33c33ed848e7f1281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41436a3a601018409f22b3b6c96bfe3d0efd87f476ffe515b0d1649d0a321975->leave($__internal_41436a3a601018409f22b3b6c96bfe3d0efd87f476ffe515b0d1649d0a321975_prof);

        
        $__internal_544a0538cadeb866d0512787149f71c75fe3ee7ee58fff33c33ed848e7f1281f->leave($__internal_544a0538cadeb866d0512787149f71c75fe3ee7ee58fff33c33ed848e7f1281f_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c45424951573ab8b4eb45b77f21475589510f2ef130c86dd09a4f2a2dd59dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45424951573ab8b4eb45b77f21475589510f2ef130c86dd09a4f2a2dd59dc39->enter($__internal_c45424951573ab8b4eb45b77f21475589510f2ef130c86dd09a4f2a2dd59dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ad6fa9dfa017bb7f98ec5586b2863526c17760433f0036128269843be05e07da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6fa9dfa017bb7f98ec5586b2863526c17760433f0036128269843be05e07da->enter($__internal_ad6fa9dfa017bb7f98ec5586b2863526c17760433f0036128269843be05e07da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/products/products.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_ad6fa9dfa017bb7f98ec5586b2863526c17760433f0036128269843be05e07da->leave($__internal_ad6fa9dfa017bb7f98ec5586b2863526c17760433f0036128269843be05e07da_prof);

        
        $__internal_c45424951573ab8b4eb45b77f21475589510f2ef130c86dd09a4f2a2dd59dc39->leave($__internal_c45424951573ab8b4eb45b77f21475589510f2ef130c86dd09a4f2a2dd59dc39_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_053001b5f46b5f46d502b0f5466db6f34b87a479782a2eef37ee71f5bec18d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053001b5f46b5f46d502b0f5466db6f34b87a479782a2eef37ee71f5bec18d4c->enter($__internal_053001b5f46b5f46d502b0f5466db6f34b87a479782a2eef37ee71f5bec18d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8cab5e24c67ae6bef569883892ff44a468b4da41c155db51918fdca9bfe862b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cab5e24c67ae6bef569883892ff44a468b4da41c155db51918fdca9bfe862b1->enter($__internal_8cab5e24c67ae6bef569883892ff44a468b4da41c155db51918fdca9bfe862b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                          <h2 class=\"modal-title\" id=\"myModalLabel\">...</h2>
                        </div>
                        <div class=\"modal-body product-detail-content\">
                          ...
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                          
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
        
        $__internal_8cab5e24c67ae6bef569883892ff44a468b4da41c155db51918fdca9bfe862b1->leave($__internal_8cab5e24c67ae6bef569883892ff44a468b4da41c155db51918fdca9bfe862b1_prof);

        
        $__internal_053001b5f46b5f46d502b0f5466db6f34b87a479782a2eef37ee71f5bec18d4c->leave($__internal_053001b5f46b5f46d502b0f5466db6f34b87a479782a2eef37ee71f5bec18d4c_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_11455da9f88e99699b48c07a43700d180620d0fee38edbb1ef40b638fc99c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11455da9f88e99699b48c07a43700d180620d0fee38edbb1ef40b638fc99c783->enter($__internal_11455da9f88e99699b48c07a43700d180620d0fee38edbb1ef40b638fc99c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_11d565402af6781ced1cb4edbcef7f91c0167abcaf26cec32581d8eac1e6c908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d565402af6781ced1cb4edbcef7f91c0167abcaf26cec32581d8eac1e6c908->enter($__internal_11d565402af6781ced1cb4edbcef7f91c0167abcaf26cec32581d8eac1e6c908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_11d565402af6781ced1cb4edbcef7f91c0167abcaf26cec32581d8eac1e6c908->leave($__internal_11d565402af6781ced1cb4edbcef7f91c0167abcaf26cec32581d8eac1e6c908_prof);

        
        $__internal_11455da9f88e99699b48c07a43700d180620d0fee38edbb1ef40b638fc99c783->leave($__internal_11455da9f88e99699b48c07a43700d180620d0fee38edbb1ef40b638fc99c783_prof);

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
                          <h2 class=\"modal-title\" id=\"myModalLabel\">...</h2>
                        </div>
                        <div class=\"modal-body product-detail-content\">
                          ...
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                          
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
