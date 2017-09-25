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
        $__internal_0affc2d50b3b7454ad8e3b5c90cdec617565a5889f4e3419bac7b52cca5b4d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0affc2d50b3b7454ad8e3b5c90cdec617565a5889f4e3419bac7b52cca5b4d90->enter($__internal_0affc2d50b3b7454ad8e3b5c90cdec617565a5889f4e3419bac7b52cca5b4d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productId.html.twig"));

        $__internal_63660edcb06e9cf44c697faa89f64211fe1f8c050546dd83ca546f23d05b9a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63660edcb06e9cf44c697faa89f64211fe1f8c050546dd83ca546f23d05b9a93->enter($__internal_63660edcb06e9cf44c697faa89f64211fe1f8c050546dd83ca546f23d05b9a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productId.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0affc2d50b3b7454ad8e3b5c90cdec617565a5889f4e3419bac7b52cca5b4d90->leave($__internal_0affc2d50b3b7454ad8e3b5c90cdec617565a5889f4e3419bac7b52cca5b4d90_prof);

        
        $__internal_63660edcb06e9cf44c697faa89f64211fe1f8c050546dd83ca546f23d05b9a93->leave($__internal_63660edcb06e9cf44c697faa89f64211fe1f8c050546dd83ca546f23d05b9a93_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ef88a6be2e988ef5b327165998108d1db9e7d98ec17ea3d9c6cd80784f84d11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88a6be2e988ef5b327165998108d1db9e7d98ec17ea3d9c6cd80784f84d11b->enter($__internal_ef88a6be2e988ef5b327165998108d1db9e7d98ec17ea3d9c6cd80784f84d11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_72128d626774ae85d9ad0f2171eb0258042d859e84371df542df07b98ec0e437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72128d626774ae85d9ad0f2171eb0258042d859e84371df542df07b98ec0e437->enter($__internal_72128d626774ae85d9ad0f2171eb0258042d859e84371df542df07b98ec0e437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_72128d626774ae85d9ad0f2171eb0258042d859e84371df542df07b98ec0e437->leave($__internal_72128d626774ae85d9ad0f2171eb0258042d859e84371df542df07b98ec0e437_prof);

        
        $__internal_ef88a6be2e988ef5b327165998108d1db9e7d98ec17ea3d9c6cd80784f84d11b->leave($__internal_ef88a6be2e988ef5b327165998108d1db9e7d98ec17ea3d9c6cd80784f84d11b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_48c954a4f388431b1c88675d44ef7a208b570e072dfa149b94a469b3d67f2e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c954a4f388431b1c88675d44ef7a208b570e072dfa149b94a469b3d67f2e43->enter($__internal_48c954a4f388431b1c88675d44ef7a208b570e072dfa149b94a469b3d67f2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c847f4342f73815fb5b2ffa74ae5d38f069481b39f4320ef0cd45f6333252d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c847f4342f73815fb5b2ffa74ae5d38f069481b39f4320ef0cd45f6333252d8->enter($__internal_5c847f4342f73815fb5b2ffa74ae5d38f069481b39f4320ef0cd45f6333252d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <div class=\"row all-select-innovators\">
                    <div class=\"col-xs-12 col-sm-6 innovators-select-theme\">
                        <select class=\"col-xs-12\">
                            <option>Theme</option>
                            <option>Education</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                            <option>Comptabilité</option>
                            <option>Numérisation GED</option>
                        </select>
                    </div>
                    ";
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
                      <h2 class=\"product-name\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 56, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "</h2>
                      <div class=\"product-content-short hideen\">";
            // line 57
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 57, $this->getSourceContext()); })()), "summary", array());
            echo "</div>
                      <div class=\"product-content \">";
            // line 58
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
        
        $__internal_5c847f4342f73815fb5b2ffa74ae5d38f069481b39f4320ef0cd45f6333252d8->leave($__internal_5c847f4342f73815fb5b2ffa74ae5d38f069481b39f4320ef0cd45f6333252d8_prof);

        
        $__internal_48c954a4f388431b1c88675d44ef7a208b570e072dfa149b94a469b3d67f2e43->leave($__internal_48c954a4f388431b1c88675d44ef7a208b570e072dfa149b94a469b3d67f2e43_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c7174daf08ad33cad0901533754cb2f4f50cdf4133898df526671fa6757ad987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7174daf08ad33cad0901533754cb2f4f50cdf4133898df526671fa6757ad987->enter($__internal_c7174daf08ad33cad0901533754cb2f4f50cdf4133898df526671fa6757ad987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c77a042197d51b01b126386ef4047d05cc523b07f3cf01a0b5a7834fc4bc1acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77a042197d51b01b126386ef4047d05cc523b07f3cf01a0b5a7834fc4bc1acc->enter($__internal_c77a042197d51b01b126386ef4047d05cc523b07f3cf01a0b5a7834fc4bc1acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    
     ";
        
        $__internal_c77a042197d51b01b126386ef4047d05cc523b07f3cf01a0b5a7834fc4bc1acc->leave($__internal_c77a042197d51b01b126386ef4047d05cc523b07f3cf01a0b5a7834fc4bc1acc_prof);

        
        $__internal_c7174daf08ad33cad0901533754cb2f4f50cdf4133898df526671fa6757ad987->leave($__internal_c7174daf08ad33cad0901533754cb2f4f50cdf4133898df526671fa6757ad987_prof);

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
        return array (  200 => 96,  191 => 95,  177 => 88,  158 => 70,  154 => 67,  149 => 64,  144 => 61,  139 => 58,  135 => 57,  131 => 56,  120 => 47,  118 => 46,  109 => 39,  95 => 19,  89 => 16,  86 => 15,  84 => 14,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/innovators/innovators.css\") }}\"/>

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
                <div class=\"row all-select-innovators\">
                    <div class=\"col-xs-12 col-sm-6 innovators-select-theme\">
                        <select class=\"col-xs-12\">
                            <option>Theme</option>
                            <option>Education</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                            <option>Comptabilité</option>
                            <option>Numérisation GED</option>
                        </select>
                    </div>
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
                      <h2 class=\"product-name\">{{ product.name }}</h2>
                      <div class=\"product-content-short hideen\">{{ product.summary|raw }}</div>
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
