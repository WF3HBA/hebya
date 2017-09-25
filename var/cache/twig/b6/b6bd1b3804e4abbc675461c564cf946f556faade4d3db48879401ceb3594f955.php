<?php

/* innovator/innovatorList.html.twig */
class __TwigTemplate_bf088b46b14cb88f4412e3ac82d3e128be174cd96be7f5da1c3e9234fab269de extends Twig_Template
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
        $__internal_3967ab18a7fdbb64deac6ddc1159b5d522fc435ef18e2fcbe7264604b68da364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3967ab18a7fdbb64deac6ddc1159b5d522fc435ef18e2fcbe7264604b68da364->enter($__internal_3967ab18a7fdbb64deac6ddc1159b5d522fc435ef18e2fcbe7264604b68da364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        $__internal_f04d09d9f7eea50f45ad4f2e0ddb69494b142dc5c83f04772d8db00864e4a5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04d09d9f7eea50f45ad4f2e0ddb69494b142dc5c83f04772d8db00864e4a5b4->enter($__internal_f04d09d9f7eea50f45ad4f2e0ddb69494b142dc5c83f04772d8db00864e4a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new Twig_Error_Runtime('Variable "providers" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 2
            echo "                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
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
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h3>
                                    <p class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</p>
                                        <!-- Button trigger modal -->
                                    
                                </div>
                            </div>
                        </div>        
                         ";
            // line 15
            echo "                        <div class=\"modal fade\" id=\"exampleModalLong-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                          <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                  <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 19
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
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"col-xs-12\">
                                    <h3 class=\"text-center col-xs-12\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</h3>                                
                                    <p class=\"text-center col-xs-12\"> ";
            // line 31
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "description", array());
            echo "</p> 
                                    <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>
                                </div>
                              </div>
                            </div>       
                          </div>
                        </div>    
                         ";
            // line 38
            echo "        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " 
";
        
        $__internal_3967ab18a7fdbb64deac6ddc1159b5d522fc435ef18e2fcbe7264604b68da364->leave($__internal_3967ab18a7fdbb64deac6ddc1159b5d522fc435ef18e2fcbe7264604b68da364_prof);

        
        $__internal_f04d09d9f7eea50f45ad4f2e0ddb69494b142dc5c83f04772d8db00864e4a5b4->leave($__internal_f04d09d9f7eea50f45ad4f2e0ddb69494b142dc5c83f04772d8db00864e4a5b4_prof);

    }

    public function getTemplateName()
    {
        return "innovator/innovatorList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  99 => 38,  89 => 31,  85 => 30,  79 => 27,  66 => 19,  58 => 15,  49 => 8,  43 => 7,  37 => 4,  33 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% for provider in providers %}
                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
                            <div class=\"box\"  data-toggle=\"modal\" data-target=\"#exampleModalLong-{{ provider.idprovider }}\">
                                <img src=\"{{ asset(provider.picture) }}\" alt=\"\">

                                <div class=\"box-content\">
                                    <h3 class=\"title\">{{ provider.firstname }} {{ provider.lastname }}</h3>
                                    <p class=\"title\">{{ provider.company }}</p>
                                        <!-- Button trigger modal -->
                                    
                                </div>
                            </div>
                        </div>        
                         {# M O D A L  #}
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
                         {# E N D  M O D A L  #}        
                    {% endfor %} 
", "innovator/innovatorList.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovatorList.html.twig");
    }
}
