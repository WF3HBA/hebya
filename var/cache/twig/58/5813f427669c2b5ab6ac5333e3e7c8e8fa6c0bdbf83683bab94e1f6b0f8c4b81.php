<?php

/* admin/adminClient.html.twig */
class __TwigTemplate_1f05de064d982921b12db037096a07ff57afa4c4758000f00bad2e0c0ce01e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin.html.twig", "admin/adminClient.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef42dfd4cfe474312e939618747576c14cf26ed3ed630aeed59d347316257b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef42dfd4cfe474312e939618747576c14cf26ed3ed630aeed59d347316257b75->enter($__internal_ef42dfd4cfe474312e939618747576c14cf26ed3ed630aeed59d347316257b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $__internal_3f9d2cc76810ccd56539645ea2126909e6144cfaf7bf3cd899da3e4bdc5ee095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9d2cc76810ccd56539645ea2126909e6144cfaf7bf3cd899da3e4bdc5ee095->enter($__internal_3f9d2cc76810ccd56539645ea2126909e6144cfaf7bf3cd899da3e4bdc5ee095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef42dfd4cfe474312e939618747576c14cf26ed3ed630aeed59d347316257b75->leave($__internal_ef42dfd4cfe474312e939618747576c14cf26ed3ed630aeed59d347316257b75_prof);

        
        $__internal_3f9d2cc76810ccd56539645ea2126909e6144cfaf7bf3cd899da3e4bdc5ee095->leave($__internal_3f9d2cc76810ccd56539645ea2126909e6144cfaf7bf3cd899da3e4bdc5ee095_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9aa27157c7029594297e1960d05aa318f2f4bc0b652f6d67746080db176e5d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa27157c7029594297e1960d05aa318f2f4bc0b652f6d67746080db176e5d65->enter($__internal_9aa27157c7029594297e1960d05aa318f2f4bc0b652f6d67746080db176e5d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_73a927b9468a6ae81a57d26a745d21934b7f7d6633b0fa4482572903bf892859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a927b9468a6ae81a57d26a745d21934b7f7d6633b0fa4482572903bf892859->enter($__internal_73a927b9468a6ae81a57d26a745d21934b7f7d6633b0fa4482572903bf892859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
 <div class=\"col-md-7 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Client</h2>
            <p><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit");
        echo "\">Ajout client</a></p>
            <table class=\"table\">
                <tr>
                    <th>Société</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Statut</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                    
                </tr>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 24, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "company", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "lastname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "firstname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "phone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "address", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "city", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "country", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "status", array()), "html", null, true);
            echo "</td>
                         <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "idclient", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">modifier</button></a>
                        </td>
                        <td>
                             <a href=\" ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "idclient", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo " 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </table>
        </div>
    </div>   

";
        
        $__internal_73a927b9468a6ae81a57d26a745d21934b7f7d6633b0fa4482572903bf892859->leave($__internal_73a927b9468a6ae81a57d26a745d21934b7f7d6633b0fa4482572903bf892859_prof);

        
        $__internal_9aa27157c7029594297e1960d05aa318f2f4bc0b652f6d67746080db176e5d65->leave($__internal_9aa27157c7029594297e1960d05aa318f2f4bc0b652f6d67746080db176e5d65_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  134 => 42,  125 => 39,  119 => 36,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  74 => 24,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/admin.html.twig\" %}

{% block content %}
    
 <div class=\"col-md-7 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Client</h2>
            <p><a href=\"{{ path('admin_client_edit')}}\">Ajout client</a></p>
            <table class=\"table\">
                <tr>
                    <th>Société</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Statut</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                    
                </tr>
                {% for client in clients%}
                    <tr>
                        <td>{{ client.company }}</td>
                        <td>{{ client.lastname }}</td>
                        <td>{{ client.firstname }}</td>
                        <td>{{ client.phone }}</td>
                        <td>{{ client.email }}</td>
                        <td>{{ client.address }}</td>
                        <td>{{ client.city }}</td>
                        <td>{{ client.country }}</td>
                        <td>{{ client.status }}</td>
                         <td>
                            <a href=\"{{ path('admin_client_edit', {id: client.idclient}) }}\"><button class=\"btn btn-primary\">modifier</button></a>
                        </td>
                        <td>
                             <a href=\" {{path('admin_client_delete', {id: client.idclient}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                        </td>
                    </tr>
                {% else %} 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                {% endfor %}
            </table>
        </div>
    </div>   

{% endblock %}
", "admin/adminClient.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminClient.html.twig");
    }
}
