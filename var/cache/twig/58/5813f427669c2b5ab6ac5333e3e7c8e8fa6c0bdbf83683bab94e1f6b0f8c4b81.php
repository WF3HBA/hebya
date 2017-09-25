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
        $__internal_80aefbda3aad9231642b0d2aa123f8b5736873117f30f18f76ade9aad3fcdfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aefbda3aad9231642b0d2aa123f8b5736873117f30f18f76ade9aad3fcdfa5->enter($__internal_80aefbda3aad9231642b0d2aa123f8b5736873117f30f18f76ade9aad3fcdfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $__internal_6e2a48a1d49188f2be53735f62e7bbf48e7c89d89ca75005b17ea729d9f79115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2a48a1d49188f2be53735f62e7bbf48e7c89d89ca75005b17ea729d9f79115->enter($__internal_6e2a48a1d49188f2be53735f62e7bbf48e7c89d89ca75005b17ea729d9f79115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80aefbda3aad9231642b0d2aa123f8b5736873117f30f18f76ade9aad3fcdfa5->leave($__internal_80aefbda3aad9231642b0d2aa123f8b5736873117f30f18f76ade9aad3fcdfa5_prof);

        
        $__internal_6e2a48a1d49188f2be53735f62e7bbf48e7c89d89ca75005b17ea729d9f79115->leave($__internal_6e2a48a1d49188f2be53735f62e7bbf48e7c89d89ca75005b17ea729d9f79115_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b8b39428fe3720823b65a5f6a2e38a43e4be987484825ff6689c0f1a7c74be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8b39428fe3720823b65a5f6a2e38a43e4be987484825ff6689c0f1a7c74be9->enter($__internal_7b8b39428fe3720823b65a5f6a2e38a43e4be987484825ff6689c0f1a7c74be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_24c4ad5e6077065aac6f4acad52b0b63f88bb81e3ce7fd6af09207120c82a544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c4ad5e6077065aac6f4acad52b0b63f88bb81e3ce7fd6af09207120c82a544->enter($__internal_24c4ad5e6077065aac6f4acad52b0b63f88bb81e3ce7fd6af09207120c82a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_24c4ad5e6077065aac6f4acad52b0b63f88bb81e3ce7fd6af09207120c82a544->leave($__internal_24c4ad5e6077065aac6f4acad52b0b63f88bb81e3ce7fd6af09207120c82a544_prof);

        
        $__internal_7b8b39428fe3720823b65a5f6a2e38a43e4be987484825ff6689c0f1a7c74be9->leave($__internal_7b8b39428fe3720823b65a5f6a2e38a43e4be987484825ff6689c0f1a7c74be9_prof);

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
