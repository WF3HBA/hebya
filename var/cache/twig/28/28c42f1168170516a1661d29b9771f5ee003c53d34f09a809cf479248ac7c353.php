<?php

/* product/productId.html.twig */
class __TwigTemplate_c8e4a218702e4c24ec7bb557d74750eabccd0b5ae2b8d71076551382f8a3490c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "product/productId.html.twig", 1);
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
        $__internal_d81c4a19a3c7f4acb01a3742fbd7844d9c650db6debcd3d57425c99be7050046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81c4a19a3c7f4acb01a3742fbd7844d9c650db6debcd3d57425c99be7050046->enter($__internal_d81c4a19a3c7f4acb01a3742fbd7844d9c650db6debcd3d57425c99be7050046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productId.html.twig"));

        $__internal_ad34042c8554ed627ff0e3fffca23fc0c2b44f7f29e29a875690daa374830ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad34042c8554ed627ff0e3fffca23fc0c2b44f7f29e29a875690daa374830ca8->enter($__internal_ad34042c8554ed627ff0e3fffca23fc0c2b44f7f29e29a875690daa374830ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productId.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81c4a19a3c7f4acb01a3742fbd7844d9c650db6debcd3d57425c99be7050046->leave($__internal_d81c4a19a3c7f4acb01a3742fbd7844d9c650db6debcd3d57425c99be7050046_prof);

        
        $__internal_ad34042c8554ed627ff0e3fffca23fc0c2b44f7f29e29a875690daa374830ca8->leave($__internal_ad34042c8554ed627ff0e3fffca23fc0c2b44f7f29e29a875690daa374830ca8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ca39d44394c3c5f21374028122b49296b1b7ada80f46dae10f5a151439f2e437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca39d44394c3c5f21374028122b49296b1b7ada80f46dae10f5a151439f2e437->enter($__internal_ca39d44394c3c5f21374028122b49296b1b7ada80f46dae10f5a151439f2e437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_eac5a7472544a2bac6726268d29652bd4a5c96cf17cd1661a6dc9b398f8f176d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac5a7472544a2bac6726268d29652bd4a5c96cf17cd1661a6dc9b398f8f176d->enter($__internal_eac5a7472544a2bac6726268d29652bd4a5c96cf17cd1661a6dc9b398f8f176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
";
        // line 6
        echo "
";
        
        $__internal_eac5a7472544a2bac6726268d29652bd4a5c96cf17cd1661a6dc9b398f8f176d->leave($__internal_eac5a7472544a2bac6726268d29652bd4a5c96cf17cd1661a6dc9b398f8f176d_prof);

        
        $__internal_ca39d44394c3c5f21374028122b49296b1b7ada80f46dae10f5a151439f2e437->leave($__internal_ca39d44394c3c5f21374028122b49296b1b7ada80f46dae10f5a151439f2e437_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ccde405a1722cfe9049c438aabed72aff54b72cc3ae30aea0c74bf7287bf3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccde405a1722cfe9049c438aabed72aff54b72cc3ae30aea0c74bf7287bf3e9->enter($__internal_8ccde405a1722cfe9049c438aabed72aff54b72cc3ae30aea0c74bf7287bf3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7a423b10341e8cac378e86f2d0532fe59e7d9d91553da123fedebd887b0d846e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a423b10341e8cac378e86f2d0532fe59e7d9d91553da123fedebd887b0d846e->enter($__internal_7a423b10341e8cac378e86f2d0532fe59e7d9d91553da123fedebd887b0d846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
                     ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->getSourceContext()); })()), "idproduct", array())) {
            // line 15
            echo "                    <div class=\"col-xs-12 text-center\">
                        <h1>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "</h1>
                    </div>
                    ";
        }
        // line 19
        echo "                </div>
               ";
        // line 31
        echo "                    ";
        // line 39
        echo "                </div>
            </div>
        </section><br><br>
              
        <section id=\"innovators-body\">
            <div class=\"container\">
                
                 ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 46, $this->getSourceContext()); })()), "idproduct", array())) {
            // line 47
            echo "                 <div class=\"row product-row\">                    
                  
                   
                    <div class=\"col-sm-6\">
                      <a href=\"#\">
                        <img class=\"img-thumbnail\" src=\"http://placehold.it/700x300\" alt=\"\">
                      </a>
                    </div>                    
                    <div class=\"col-sm-6\">
";
            // line 58
            echo "                      <div class=\"product-content \">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 58, $this->getSourceContext()); })()), "description", array());
            echo "</div>
                      
                        ";
            // line 61
            echo "                      <button class=\"btn btn-primary boutton-innovators-body\" data-toggle=\"modal\" data-target=\"#myModal\">View Product</button>
                    </div>
                    ";
        } else {
            // line 64
            echo "                        <p>No product in db</p>
                 </div><hr><br><br>
                 ";
        }
        // line 67
        echo "                 
                
                ";
        // line 70
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
        // line 88
        echo "                
            </div>
        </section><br>
    </main>
";
        
        $__internal_7a423b10341e8cac378e86f2d0532fe59e7d9d91553da123fedebd887b0d846e->leave($__internal_7a423b10341e8cac378e86f2d0532fe59e7d9d91553da123fedebd887b0d846e_prof);

        
        $__internal_8ccde405a1722cfe9049c438aabed72aff54b72cc3ae30aea0c74bf7287bf3e9->leave($__internal_8ccde405a1722cfe9049c438aabed72aff54b72cc3ae30aea0c74bf7287bf3e9_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_30b22a4ccb452dcfe7cae628b02b9a9022bd08f59f0281dabae9a634edff6ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b22a4ccb452dcfe7cae628b02b9a9022bd08f59f0281dabae9a634edff6ce1->enter($__internal_30b22a4ccb452dcfe7cae628b02b9a9022bd08f59f0281dabae9a634edff6ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_910a95343ba763ed6e90c546777f729929df3e74f38722547b2e0919b0fa9845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910a95343ba763ed6e90c546777f729929df3e74f38722547b2e0919b0fa9845->enter($__internal_910a95343ba763ed6e90c546777f729929df3e74f38722547b2e0919b0fa9845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    
     ";
        
        $__internal_910a95343ba763ed6e90c546777f729929df3e74f38722547b2e0919b0fa9845->leave($__internal_910a95343ba763ed6e90c546777f729929df3e74f38722547b2e0919b0fa9845_prof);

        
        $__internal_30b22a4ccb452dcfe7cae628b02b9a9022bd08f59f0281dabae9a634edff6ce1->leave($__internal_30b22a4ccb452dcfe7cae628b02b9a9022bd08f59f0281dabae9a634edff6ce1_prof);

    }

    public function getTemplateName()
    {
        return "product/productId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 96,  173 => 95,  159 => 88,  140 => 70,  136 => 67,  131 => 64,  126 => 61,  120 => 58,  109 => 47,  107 => 46,  98 => 39,  96 => 31,  93 => 19,  87 => 16,  84 => 15,  82 => 14,  76 => 10,  67 => 9,  56 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
{#    <link rel=\"stylesheet\" href=\"{{ asset(\"css/innovators/innovators.css\") }}\"/>#}

{% endblock %}

{% block content %}
    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
                     {% if product.idproduct %}
                    <div class=\"col-xs-12 text-center\">
                        <h1>{{ product.name }}</h1>
                    </div>
                    {% endif %}
                </div>
               {# <div class=\"row all-select-innovators\">
                    <div class=\"col-xs-12 col-sm-6 innovators-select-theme\">
                        <select class=\"col-xs-12\">
                            <option>Theme</option>
                            <option>Education</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                            <option>Comptabilité</option>
                            <option>Numérisation GED</option>
                        </select>
                    </div>#}
                    {#<div class=\"col-xs-12 col-sm-6 \">
                        <select class=\"col-xs-12 innovators-select-pays\">
                            {% for country in countries %}
                            <option value=\"{{ country.idcountry }}\">{{ country.name }}</option>
                            {% endfor %}
                           
                        </select>
                    </div>#}
                </div>
            </div>
        </section><br><br>
              
        <section id=\"innovators-body\">
            <div class=\"container\">
                
                 {% if product.idproduct %}
                 <div class=\"row product-row\">                    
                  
                   
                    <div class=\"col-sm-6\">
                      <a href=\"#\">
                        <img class=\"img-thumbnail\" src=\"http://placehold.it/700x300\" alt=\"\">
                      </a>
                    </div>                    
                    <div class=\"col-sm-6\">
{#                      <h2 class=\"product-name\">{{ product.name }}</h2>#}
{#                      <div class=\"product-content-short hideen\">{{ product.summary|raw }}</div>#}
                      <div class=\"product-content \">{{ product.description|raw }}</div>
                      
                        {#Launch modal with the button above #}
                      <button class=\"btn btn-primary boutton-innovators-body\" data-toggle=\"modal\" data-target=\"#myModal\">View Product</button>
                    </div>
                    {% else %}
                        <p>No product in db</p>
                 </div><hr><br><br>
                 {% endif %}
                 
                
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
    
     {#<script src=\"{{ asset(\"js/product/product.js\") }}\"></script>#}
{% endblock %}

", "product/productId.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\product\\productId.html.twig");
    }
}
