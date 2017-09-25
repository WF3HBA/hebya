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
        $__internal_4ca711fb91bd042baeb4887ad2dac63062e76830502dde785a4728434d6ae4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca711fb91bd042baeb4887ad2dac63062e76830502dde785a4728434d6ae4db->enter($__internal_4ca711fb91bd042baeb4887ad2dac63062e76830502dde785a4728434d6ae4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        $__internal_7cfd74d2850cb4f64030f845657fa05a746a9427b82f51469bea502c996e7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfd74d2850cb4f64030f845657fa05a746a9427b82f51469bea502c996e7c86->enter($__internal_7cfd74d2850cb4f64030f845657fa05a746a9427b82f51469bea502c996e7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new Twig_Error_Runtime('Variable "providers" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 2
            echo "                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
                            <div class=\"box\">
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
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\">
                                      Détails
                                    </button>
                                </div>
                            </div>
                        </div>  
                                      
                         ";
            // line 18
            echo "                        <div class=\"modal fade\" id=\"exampleModalLong-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                          <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                  <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h2>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                  <span aria-hidden=\"true\">&times;</span>
                                </button>
                              </div>
                              
                              <div class=\"modal-footer text-center\">
                                <div class=\"col-xs-4\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"col-xs-7\">
                                    <h3 class=\"col-xs-12 text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</h3>                                
                                    <div class=\"text-center\"> ";
            // line 34
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "description", array());
            echo "</div> 
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                </div>
                              </div>
                            </div>       
                          </div>
                        </div>    
                         ";
            // line 41
            echo "        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
";
        
        $__internal_4ca711fb91bd042baeb4887ad2dac63062e76830502dde785a4728434d6ae4db->leave($__internal_4ca711fb91bd042baeb4887ad2dac63062e76830502dde785a4728434d6ae4db_prof);

        
        $__internal_7cfd74d2850cb4f64030f845657fa05a746a9427b82f51469bea502c996e7c86->leave($__internal_7cfd74d2850cb4f64030f845657fa05a746a9427b82f51469bea502c996e7c86_prof);

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
        return array (  109 => 42,  102 => 41,  92 => 34,  88 => 33,  82 => 30,  69 => 22,  61 => 18,  51 => 10,  46 => 8,  40 => 7,  34 => 4,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% for provider in providers %}
                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
                            <div class=\"box\">
                                <img src=\"{{ asset(provider.picture) }}\" alt=\"\">

                                <div class=\"box-content\">
                                    <h3 class=\"title\">{{ provider.firstname }} {{ provider.lastname }}</h3>
                                    <p class=\"title\">{{ provider.company }}</p>
                                        <!-- Button trigger modal -->
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalLong-{{ provider.idprovider }}\">
                                      Détails
                                    </button>
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
                                <div class=\"col-xs-4\">
                                    <img src=\"{{ asset(provider.picture) }}\" alt=\"\">
                                </div>
                                <div class=\"col-xs-7\">
                                    <h3 class=\"col-xs-12 text-center\">{{ provider.company }}</h3>                                
                                    <div class=\"text-center\"> {{ provider.description |raw }}</div> 
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
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
