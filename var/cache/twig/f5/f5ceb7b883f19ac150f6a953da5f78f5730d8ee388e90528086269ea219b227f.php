<?php

/* public/productList.html.twig */
class __TwigTemplate_75195d35d0835ce8b766953d1cef8aeb4344aea199d7bbc4fd5051ef21431859 extends Twig_Template
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
        $__internal_860af3fcd33fe2fadfd9737bc5a79e3c4aab5698a538fc369b00482bc0345ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860af3fcd33fe2fadfd9737bc5a79e3c4aab5698a538fc369b00482bc0345ac7->enter($__internal_860af3fcd33fe2fadfd9737bc5a79e3c4aab5698a538fc369b00482bc0345ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/productList.html.twig"));

        $__internal_c37a95becfe7685067ae60d9c4b857c691ecf83b9a08d2d844e560f79f166386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37a95becfe7685067ae60d9c4b857c691ecf83b9a08d2d844e560f79f166386->enter($__internal_c37a95becfe7685067ae60d9c4b857c691ecf83b9a08d2d844e560f79f166386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/productList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "    <div class=\"row product-row\">    
       <div id=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "idproduct", array()), "html", null, true);
            echo "\" class=\"col-sm-4\">
         <a href=\"#\">
           <img class=\"img-thumbnail\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
         </a>
       </div>                    
       <div class=\"col-sm-8\">
         <h2 class=\"product-name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</h2>
         <div class=\"product-content-short\">";
            // line 10
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "summary", array());
            echo "</div>
         <div class=\"product-content hidden\">";
            // line 11
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array());
            echo "</div>
         <button class=\"btn btn-primary overlay-button\">Détail produit</button>
       </div>
    </div><hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_860af3fcd33fe2fadfd9737bc5a79e3c4aab5698a538fc369b00482bc0345ac7->leave($__internal_860af3fcd33fe2fadfd9737bc5a79e3c4aab5698a538fc369b00482bc0345ac7_prof);

        
        $__internal_c37a95becfe7685067ae60d9c4b857c691ecf83b9a08d2d844e560f79f166386->leave($__internal_c37a95becfe7685067ae60d9c4b857c691ecf83b9a08d2d844e560f79f166386_prof);

    }

    public function getTemplateName()
    {
        return "public/productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  37 => 5,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for product in products %}
    <div class=\"row product-row\">    
       <div id=\"{{ product.idproduct }}\" class=\"col-sm-4\">
         <a href=\"#\">
           <img class=\"img-thumbnail\" src=\"{{ asset(product.picture) }}\" alt=\"\">
         </a>
       </div>                    
       <div class=\"col-sm-8\">
         <h2 class=\"product-name\">{{ product.name }}</h2>
         <div class=\"product-content-short\">{{ product.summary|raw }}</div>
         <div class=\"product-content hidden\">{{ product.description|raw }}</div>
         <button class=\"btn btn-primary overlay-button\">Détail produit</button>
       </div>
    </div><hr>
{% endfor %}
", "public/productList.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\productList.html.twig");
    }
}
