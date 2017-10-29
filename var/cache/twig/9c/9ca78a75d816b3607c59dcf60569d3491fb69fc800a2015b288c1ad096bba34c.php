<?php

/* public/providerList.html.twig */
class __TwigTemplate_5598fe16a07d4bcd6bf230c01fe166a01c83fb19535b351be3acdb220ae1b1db extends Twig_Template
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
        $__internal_c2853031a7043ad707305edd20fa7fd4bee2d38ca7452d7de064fc8e68820df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2853031a7043ad707305edd20fa7fd4bee2d38ca7452d7de064fc8e68820df6->enter($__internal_c2853031a7043ad707305edd20fa7fd4bee2d38ca7452d7de064fc8e68820df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/providerList.html.twig"));

        $__internal_65934c23a3f9262f3a1169cd1cace97c03d9a99d6c5c8fc0045df196988d7d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65934c23a3f9262f3a1169cd1cace97c03d9a99d6c5c8fc0045df196988d7d65->enter($__internal_65934c23a3f9262f3a1169cd1cace97c03d9a99d6c5c8fc0045df196988d7d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/providerList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new Twig_Error_Runtime('Variable "providers" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 2
            echo "  <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
    <div class=\"box\"  data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\">
      <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
      <div class=\"box-content\">
        <h3 class=\"title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h3>
        <p class=\"title\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</p>
      </div>
    </div>
  </div>   
  <div class=\"modal fade\" id=\"exampleModalLong-";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h2>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-footer text-center\">
          <div class=\"col-xs-12\">
            <img class=\"col-xs-9 col-xs-offset-3\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
          </div>
          <div class=\"col-xs-12\">
            <h3 class=\"text-center col-xs-12\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</h3>                                
            <p class=\"text-center col-xs-12\"> ";
            // line 26
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "description", array());
            echo "</p> 
            <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>       
    </div>
  </div>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " ";
        
        $__internal_c2853031a7043ad707305edd20fa7fd4bee2d38ca7452d7de064fc8e68820df6->leave($__internal_c2853031a7043ad707305edd20fa7fd4bee2d38ca7452d7de064fc8e68820df6_prof);

        
        $__internal_65934c23a3f9262f3a1169cd1cace97c03d9a99d6c5c8fc0045df196988d7d65->leave($__internal_65934c23a3f9262f3a1169cd1cace97c03d9a99d6c5c8fc0045df196988d7d65_prof);

    }

    public function getTemplateName()
    {
        return "public/providerList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  83 => 26,  79 => 25,  73 => 22,  61 => 15,  54 => 11,  47 => 7,  41 => 6,  36 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for provider in providers %}
  <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
    <div class=\"box\"  data-toggle=\"modal\" data-target=\"#exampleModalLong-{{ provider.idprovider }}\">
      <img src=\"{{ asset(provider.picture) }}\" alt=\"\">
      <div class=\"box-content\">
        <h3 class=\"title\">{{ provider.firstname }} {{ provider.lastname }}</h3>
        <p class=\"title\">{{ provider.company }}</p>
      </div>
    </div>
  </div>   
  <div class=\"modal fade\" id=\"exampleModalLong-{{ provider.idprovider }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">{{ provider.firstname }} {{ provider.lastname }}</h2>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-footer text-center\">
          <div class=\"col-xs-12\">
            <img class=\"col-xs-9 col-xs-offset-3\" src=\"{{ asset(provider.picture) }}\" alt=\"\">
          </div>
          <div class=\"col-xs-12\">
            <h3 class=\"text-center col-xs-12\">{{ provider.company }}</h3>                                
            <p class=\"text-center col-xs-12\"> {{ provider.description |raw }}</p> 
            <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>       
    </div>
  </div>    
{% endfor %} ", "public/providerList.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\providerList.html.twig");
    }
}
