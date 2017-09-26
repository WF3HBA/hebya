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
        $__internal_d0660b2b23eed0933da0fae42d7c53647b1b7eaba37821520837ec15be27a19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0660b2b23eed0933da0fae42d7c53647b1b7eaba37821520837ec15be27a19e->enter($__internal_d0660b2b23eed0933da0fae42d7c53647b1b7eaba37821520837ec15be27a19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $__internal_45f3c604b7b175a60a75d0c7bbcfbf800ce99a19cb1545e3dd3f0739d75fe6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f3c604b7b175a60a75d0c7bbcfbf800ce99a19cb1545e3dd3f0739d75fe6e5->enter($__internal_45f3c604b7b175a60a75d0c7bbcfbf800ce99a19cb1545e3dd3f0739d75fe6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0660b2b23eed0933da0fae42d7c53647b1b7eaba37821520837ec15be27a19e->leave($__internal_d0660b2b23eed0933da0fae42d7c53647b1b7eaba37821520837ec15be27a19e_prof);

        
        $__internal_45f3c604b7b175a60a75d0c7bbcfbf800ce99a19cb1545e3dd3f0739d75fe6e5->leave($__internal_45f3c604b7b175a60a75d0c7bbcfbf800ce99a19cb1545e3dd3f0739d75fe6e5_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c20f880841251b1f5d6a935b7649a303659dd7470f63a110c74ec2365dddf2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20f880841251b1f5d6a935b7649a303659dd7470f63a110c74ec2365dddf2b3->enter($__internal_c20f880841251b1f5d6a935b7649a303659dd7470f63a110c74ec2365dddf2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ecb056d380ea46f168043871d5d4cb7ccc8b70497b96cae30e8b796a2351015c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb056d380ea46f168043871d5d4cb7ccc8b70497b96cae30e8b796a2351015c->enter($__internal_ecb056d380ea46f168043871d5d4cb7ccc8b70497b96cae30e8b796a2351015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/products/products.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_ecb056d380ea46f168043871d5d4cb7ccc8b70497b96cae30e8b796a2351015c->leave($__internal_ecb056d380ea46f168043871d5d4cb7ccc8b70497b96cae30e8b796a2351015c_prof);

        
        $__internal_c20f880841251b1f5d6a935b7649a303659dd7470f63a110c74ec2365dddf2b3->leave($__internal_c20f880841251b1f5d6a935b7649a303659dd7470f63a110c74ec2365dddf2b3_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed27e32bcac9cd21f410a4dceab84abb9160ec04d78e71c67785b2f20b0607c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed27e32bcac9cd21f410a4dceab84abb9160ec04d78e71c67785b2f20b0607c0->enter($__internal_ed27e32bcac9cd21f410a4dceab84abb9160ec04d78e71c67785b2f20b0607c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b0cd9f4161bad9514be88b35bc1d2eca6214e7807fe947510006a16593ef796b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cd9f4161bad9514be88b35bc1d2eca6214e7807fe947510006a16593ef796b->enter($__internal_b0cd9f4161bad9514be88b35bc1d2eca6214e7807fe947510006a16593ef796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b0cd9f4161bad9514be88b35bc1d2eca6214e7807fe947510006a16593ef796b->leave($__internal_b0cd9f4161bad9514be88b35bc1d2eca6214e7807fe947510006a16593ef796b_prof);

        
        $__internal_ed27e32bcac9cd21f410a4dceab84abb9160ec04d78e71c67785b2f20b0607c0->leave($__internal_ed27e32bcac9cd21f410a4dceab84abb9160ec04d78e71c67785b2f20b0607c0_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a34e36c851d07055587811ab7e19f1128581dc48d944401534bc763eb04068cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34e36c851d07055587811ab7e19f1128581dc48d944401534bc763eb04068cb->enter($__internal_a34e36c851d07055587811ab7e19f1128581dc48d944401534bc763eb04068cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_19a203c93dd60394b449dad8ac32b96001a144b26e7c32544b1b32bf7517b34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a203c93dd60394b449dad8ac32b96001a144b26e7c32544b1b32bf7517b34e->enter($__internal_19a203c93dd60394b449dad8ac32b96001a144b26e7c32544b1b32bf7517b34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_19a203c93dd60394b449dad8ac32b96001a144b26e7c32544b1b32bf7517b34e->leave($__internal_19a203c93dd60394b449dad8ac32b96001a144b26e7c32544b1b32bf7517b34e_prof);

        
        $__internal_a34e36c851d07055587811ab7e19f1128581dc48d944401534bc763eb04068cb->leave($__internal_a34e36c851d07055587811ab7e19f1128581dc48d944401534bc763eb04068cb_prof);

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
