<?php

/* admin/adminOpportunity.html.twig */
class __TwigTemplate_ae44775f2cd65147d09bbd7acbe159e62b2e15f5fdb10c181b006b5df584af9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminOpportunity.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d78e4f761dd048b53ffd9d83d3631b1b93ca6afecb81d27a16cdd8ccd9372b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d78e4f761dd048b53ffd9d83d3631b1b93ca6afecb81d27a16cdd8ccd9372b4->enter($__internal_3d78e4f761dd048b53ffd9d83d3631b1b93ca6afecb81d27a16cdd8ccd9372b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminOpportunity.html.twig"));

        $__internal_0e7a556ec68ece64aa5148e9094899edc895343593696509d846a483285e00d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7a556ec68ece64aa5148e9094899edc895343593696509d846a483285e00d8->enter($__internal_0e7a556ec68ece64aa5148e9094899edc895343593696509d846a483285e00d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminOpportunity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d78e4f761dd048b53ffd9d83d3631b1b93ca6afecb81d27a16cdd8ccd9372b4->leave($__internal_3d78e4f761dd048b53ffd9d83d3631b1b93ca6afecb81d27a16cdd8ccd9372b4_prof);

        
        $__internal_0e7a556ec68ece64aa5148e9094899edc895343593696509d846a483285e00d8->leave($__internal_0e7a556ec68ece64aa5148e9094899edc895343593696509d846a483285e00d8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c29286b96ec93074fa4798f39dd95472427287c4c712e0ce0dcaaac8fdb601c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c29286b96ec93074fa4798f39dd95472427287c4c712e0ce0dcaaac8fdb601c->enter($__internal_1c29286b96ec93074fa4798f39dd95472427287c4c712e0ce0dcaaac8fdb601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d1451c5e574e3b749be714133296d10ee0abb465f6e868b9653b0cc5c0c8f015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1451c5e574e3b749be714133296d10ee0abb465f6e868b9653b0cc5c0c8f015->enter($__internal_d1451c5e574e3b749be714133296d10ee0abb465f6e868b9653b0cc5c0c8f015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Pays</h2>
        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opportunity_edit");
        echo "\">Ajout offre d'emploi</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Position</th>
                <th>Référence</th>
                <th>Domaine</th>
                <th>Ville</th>
                <th>Type</th>
                <th>Publication</th>
                <th>Embauche</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) || array_key_exists("opportunities", $context) ? $context["opportunities"] : (function () { throw new Twig_Error_Runtime('Variable "opportunities" does not exist.', 20, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "field", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "contract_type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "publication_date", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "hiring_date", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "idcountry", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["opportunity"], "idcountry", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo " 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </table>
    </div>
       
";
        
        $__internal_d1451c5e574e3b749be714133296d10ee0abb465f6e868b9653b0cc5c0c8f015->leave($__internal_d1451c5e574e3b749be714133296d10ee0abb465f6e868b9653b0cc5c0c8f015_prof);

        
        $__internal_1c29286b96ec93074fa4798f39dd95472427287c4c712e0ce0dcaaac8fdb601c->leave($__internal_1c29286b96ec93074fa4798f39dd95472427287c4c712e0ce0dcaaac8fdb601c_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminOpportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  122 => 36,  113 => 33,  107 => 30,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  70 => 20,  54 => 7,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block content %}    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Pays</h2>
        <p><a href=\"{{ path('admin_opportunity_edit')}}\">Ajout offre d'emploi</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Position</th>
                <th>Référence</th>
                <th>Domaine</th>
                <th>Ville</th>
                <th>Type</th>
                <th>Publication</th>
                <th>Embauche</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            {% for opportunity in opportunities %}
            <tr>
                <td>{{ opportunity.position }}</td>
                <td>{{ opportunity.reference }}</td>
                <td>{{ opportunity.field }}</td>
                <td>{{ opportunity.city }}</td>
                <td>{{ opportunity.contract_type }}</td>
                <td>{{ opportunity.publication_date }}</td>
                <td>{{ opportunity.hiring_date }}</td>
                <td>
                    <a href=\"{{ path('admin_country_edit', {id: opportunity.idcountry}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" {{path('admin_country_delete', {id: opportunity.idcountry}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            {% else %} 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            {% endfor %}
        </table>
    </div>
       
{% endblock %}

", "admin/adminOpportunity.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminOpportunity.html.twig");
    }
}
