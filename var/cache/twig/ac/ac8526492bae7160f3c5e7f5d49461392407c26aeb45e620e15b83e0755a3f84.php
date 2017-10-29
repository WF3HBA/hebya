<?php

/* public/opportunityList.html.twig */
class __TwigTemplate_bfd917943d4e5af66c817567221903f3f9c9d643df6611740c636b6115afb688 extends Twig_Template
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
        $__internal_137c5f4e2f6995b934829c8ee724df079ff6091645d30f826d31b98685aa7078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137c5f4e2f6995b934829c8ee724df079ff6091645d30f826d31b98685aa7078->enter($__internal_137c5f4e2f6995b934829c8ee724df079ff6091645d30f826d31b98685aa7078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/opportunityList.html.twig"));

        $__internal_ecf69e28c1dc9267edfb0681a5da44076c4fdc8f115e4f66b350abe4fb2bdd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf69e28c1dc9267edfb0681a5da44076c4fdc8f115e4f66b350abe4fb2bdd10->enter($__internal_ecf69e28c1dc9267edfb0681a5da44076c4fdc8f115e4f66b350abe4fb2bdd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/opportunityList.html.twig"));

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
        
        $__internal_137c5f4e2f6995b934829c8ee724df079ff6091645d30f826d31b98685aa7078->leave($__internal_137c5f4e2f6995b934829c8ee724df079ff6091645d30f826d31b98685aa7078_prof);

        
        $__internal_ecf69e28c1dc9267edfb0681a5da44076c4fdc8f115e4f66b350abe4fb2bdd10->leave($__internal_ecf69e28c1dc9267edfb0681a5da44076c4fdc8f115e4f66b350abe4fb2bdd10_prof);

    }

    public function getTemplateName()
    {
        return "public/opportunityList.html.twig";
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
", "public/opportunityList.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\opportunityList.html.twig");
    }
}
