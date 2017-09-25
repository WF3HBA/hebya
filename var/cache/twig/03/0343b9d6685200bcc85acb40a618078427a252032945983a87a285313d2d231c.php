<?php

/* opportunity/opportunityList.html.twig */
class __TwigTemplate_92030c16bfd7c5dcb986bb4ae34552567e3f27c56a6ee3bafbcd9f0949a1fd9d extends Twig_Template
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
        $__internal_1dd48f9eec9fd7a8863e91e5519a41de56c1c634097f686b690728c3bd17a1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd48f9eec9fd7a8863e91e5519a41de56c1c634097f686b690728c3bd17a1dc->enter($__internal_1dd48f9eec9fd7a8863e91e5519a41de56c1c634097f686b690728c3bd17a1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunityList.html.twig"));

        $__internal_3604d95f7bb3b93e275833d22869679876d6bb25b3c253c1ae0308e1bfac7999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3604d95f7bb3b93e275833d22869679876d6bb25b3c253c1ae0308e1bfac7999->enter($__internal_3604d95f7bb3b93e275833d22869679876d6bb25b3c253c1ae0308e1bfac7999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunityList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new Twig_Error_Runtime('Variable "opportunities" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 2
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "position", array()), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                            <p><strong> Description : </strong> <br>";
            // line 5
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "description", array()), 0, 100), "html", null, true);
            echo "...</p>
                            <p><strong> Pays : </strong>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "countryName", array()), "html", null, true);
            echo "</p>
                            <button type=\"button\" class=\"btn btn-primary boutton-annonce\" data-toggle=\"modal\" data-target=\"#detail-annonce-";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "idopportunity", array()), "html", null, true);
            echo "\">
                                Voir l'annonce
                            </button>
                            <div class=\"modal fade\" id=\"detail-annonce-";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "idopportunity", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">  
                                <div class=\"modal-content\">    
                                    
                                    <p><strong> Nom du poste : </strong> <br> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "position", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Réference annonce : </strong> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "reference", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Déscription : </strong> <br> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "description", array()), "html", null, true);
            echo "</p>                                    
                                    <p><strong> Ville : </strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "city", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Domaine : </strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "field", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Type de contrat : </strong> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "contract_type", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Date de publication : </strong> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "publication_date", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Prérequis : </strong> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "required_skills", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Salaire : </strong> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "salary", array()), "html", null, true);
            echo "</p>
                                    <p><strong> Pays : </strong> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "countryName", array()), "html", null, true);
            echo "</p>
                                     
                                    <div class=\"modal-footer\">
                                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("candidacy", array("postId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "idopportunity", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Postuler</a>
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                      
                                    </div>
                                 </div>
                            </div>  
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  
";
        
        $__internal_1dd48f9eec9fd7a8863e91e5519a41de56c1c634097f686b690728c3bd17a1dc->leave($__internal_1dd48f9eec9fd7a8863e91e5519a41de56c1c634097f686b690728c3bd17a1dc_prof);

        
        $__internal_3604d95f7bb3b93e275833d22869679876d6bb25b3c253c1ae0308e1bfac7999->leave($__internal_3604d95f7bb3b93e275833d22869679876d6bb25b3c253c1ae0308e1bfac7999_prof);

    }

    public function getTemplateName()
    {
        return "opportunity/opportunityList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  99 => 25,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for opportunity in opportunities %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">{{ opportunity.position }}</div>
                        <div class=\"panel-body\">
                            <p><strong> Description : </strong> <br>{{ opportunity.description[:100] }}...</p>
                            <p><strong> Pays : </strong>{{ opportunity.countryName }}</p>
                            <button type=\"button\" class=\"btn btn-primary boutton-annonce\" data-toggle=\"modal\" data-target=\"#detail-annonce-{{ opportunity.idopportunity }}\">
                                Voir l'annonce
                            </button>
                            <div class=\"modal fade\" id=\"detail-annonce-{{ opportunity.idopportunity }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">  
                                <div class=\"modal-content\">    
                                    
                                    <p><strong> Nom du poste : </strong> <br> {{ opportunity.position}}</p>
                                    <p><strong> Réference annonce : </strong> {{ opportunity.reference }}</p>
                                    <p><strong> Déscription : </strong> <br> {{ opportunity.description}}</p>                                    
                                    <p><strong> Ville : </strong> {{ opportunity.city }}</p>
                                    <p><strong> Domaine : </strong> {{ opportunity.field }}</p>
                                    <p><strong> Type de contrat : </strong> {{ opportunity.contract_type }}</p>
                                    <p><strong> Date de publication : </strong> {{ opportunity.publication_date }}</p>
                                    <p><strong> Prérequis : </strong> {{ opportunity.required_skills }}</p>
                                    <p><strong> Salaire : </strong> {{ opportunity.salary }}</p>
                                    <p><strong> Pays : </strong> {{ opportunity.countryName }}</p>
                                     
                                    <div class=\"modal-footer\">
                                        <a href=\"{{ path('candidacy', {postId: opportunity.idopportunity}) }}\" class=\"btn btn-primary\">Postuler</a>
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                      
                                    </div>
                                 </div>
                            </div>  
                        </div>
                    </div>
                {% endfor %}  
", "opportunity/opportunityList.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\opportunity\\opportunityList.html.twig");
    }
}
