<?php

/* product/productList.html.twig */
class __TwigTemplate_fa4d058763ec1ecfc8404874c933a4b485eba2d233fab7845d2f7125d29292dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9f4df1786b522def6e353083b04eb9f2cb976c29f9906cad3c1eaefd4a79464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f4df1786b522def6e353083b04eb9f2cb976c29f9906cad3c1eaefd4a79464->enter($__internal_a9f4df1786b522def6e353083b04eb9f2cb976c29f9906cad3c1eaefd4a79464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productList.html.twig"));

        $__internal_0116f20721a48d71f59831c2a4ad20bcb83b19acd5b9f55d4f5054ea02f28bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0116f20721a48d71f59831c2a4ad20bcb83b19acd5b9f55d4f5054ea02f28bac->enter($__internal_0116f20721a48d71f59831c2a4ad20bcb83b19acd5b9f55d4f5054ea02f28bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/productList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "    <div class=\"row product-row\">                    


       <div class=\"col-sm-6\">
         <a href=\"#\">
           <img class=\"img-thumbnail\" src=\"http://placehold.it/800x400\" alt=\"\">
         </a>
       </div>                    
       <div class=\"col-sm-6\">
         <h2 class=\"product-name\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</h2>
         <div class=\"product-content-short\">";
            // line 12
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "summary", array());
            echo "</div>
         <div class=\"product-content hidden\">";
            // line 13
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array());
            echo "</div>

           ";
            // line 16
            echo "         <button class=\"btn btn-primary boutton-products-body\" data-toggle=\"modal\" data-target=\"#myModal\">Voir produit</button>
       </div>


    </div><hr><br><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a9f4df1786b522def6e353083b04eb9f2cb976c29f9906cad3c1eaefd4a79464->leave($__internal_a9f4df1786b522def6e353083b04eb9f2cb976c29f9906cad3c1eaefd4a79464_prof);

        
        $__internal_0116f20721a48d71f59831c2a4ad20bcb83b19acd5b9f55d4f5054ea02f28bac->leave($__internal_0116f20721a48d71f59831c2a4ad20bcb83b19acd5b9f55d4f5054ea02f28bac_prof);

    }

    public function getTemplateName()
    {
        return "product/productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  48 => 13,  44 => 12,  40 => 11,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for product in products %}
    <div class=\"row product-row\">                    


       <div class=\"col-sm-6\">
         <a href=\"#\">
           <img class=\"img-thumbnail\" src=\"http://placehold.it/800x400\" alt=\"\">
         </a>
       </div>                    
       <div class=\"col-sm-6\">
         <h2 class=\"product-name\">{{ product.name }}</h2>
         <div class=\"product-content-short\">{{ product.summary|raw }}</div>
         <div class=\"product-content hidden\">{{ product.description|raw }}</div>

           {#Launch modal with the button above #}
         <button class=\"btn btn-primary boutton-products-body\" data-toggle=\"modal\" data-target=\"#myModal\">Voir produit</button>
       </div>


    </div><hr><br><br>
{% endfor %}", "product/productList.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\product\\productList.html.twig");
    }
}
