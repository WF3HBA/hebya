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
        $__internal_356cb4d10f6abe3e9ff97030bf1f6f4d7d72defd867841f15fac78bd1b770537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356cb4d10f6abe3e9ff97030bf1f6f4d7d72defd867841f15fac78bd1b770537->enter($__internal_356cb4d10f6abe3e9ff97030bf1f6f4d7d72defd867841f15fac78bd1b770537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        $__internal_f88ad41c0e8dd0d58b38c22eb0e9e19f7e0963707e8c1a79b1eed9dee4e6e8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88ad41c0e8dd0d58b38c22eb0e9e19f7e0963707e8c1a79b1eed9dee4e6e8e6->enter($__internal_f88ad41c0e8dd0d58b38c22eb0e9e19f7e0963707e8c1a79b1eed9dee4e6e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovatorList.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new Twig_Error_Runtime('Variable "providers" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 2
            echo "
                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">

                            <div class=\"box\"  data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\">

                                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">

                                <div class=\"box-content\">

                                    <h3 class=\"title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h3>

                                    <p class=\"title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</p>

                                        <!-- Button trigger modal -->

                                    

                                </div>

                            </div>

                        </div>        

                         ";
            // line 26
            echo "
                        <div class=\"modal fade\" id=\"exampleModalLong-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">

                          <div class=\"modal-dialog\" role=\"document\">

                            <div class=\"modal-content\">

                              <div class=\"modal-header\">

                                  <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 35
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
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">

                                </div>

                                <div class=\"col-xs-12\">

                                    <h3 class=\"text-center col-xs-12\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</h3>                                

                                    <p class=\"text-center col-xs-12\"> ";
            // line 59
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "description", array());
            echo "</p> 

                                    <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>

                                </div>

                              </div>

                            </div>       

                          </div>

                        </div>    

                         ";
            // line 73
            echo "        

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " ";
        
        $__internal_356cb4d10f6abe3e9ff97030bf1f6f4d7d72defd867841f15fac78bd1b770537->leave($__internal_356cb4d10f6abe3e9ff97030bf1f6f4d7d72defd867841f15fac78bd1b770537_prof);

        
        $__internal_f88ad41c0e8dd0d58b38c22eb0e9e19f7e0963707e8c1a79b1eed9dee4e6e8e6->leave($__internal_f88ad41c0e8dd0d58b38c22eb0e9e19f7e0963707e8c1a79b1eed9dee4e6e8e6_prof);

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
        return array (  143 => 75,  135 => 73,  118 => 59,  113 => 57,  104 => 51,  83 => 35,  72 => 27,  69 => 26,  54 => 13,  47 => 11,  40 => 7,  35 => 5,  30 => 2,  25 => 1,);
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

                    {% endfor %} ", "innovator/innovatorList.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovatorList.html.twig");
    }
}
