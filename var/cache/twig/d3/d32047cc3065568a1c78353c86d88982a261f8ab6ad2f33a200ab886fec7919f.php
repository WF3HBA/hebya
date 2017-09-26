<?php

/* admin/adminProvider.html.twig */
class __TwigTemplate_a0a8b2fef585856844f3b21f9b67fa7227f69bcb0eb39c1df2764183fa72b0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminProvider.html.twig", 1);
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
        $__internal_54f944a6883072510b93c291faf0142c409b77654677bcfeba99cb6658c599e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f944a6883072510b93c291faf0142c409b77654677bcfeba99cb6658c599e6->enter($__internal_54f944a6883072510b93c291faf0142c409b77654677bcfeba99cb6658c599e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProvider.html.twig"));

        $__internal_08c5fabf0e1139ce95025f5d48f3014fb58fd8caea82b61d6cbf02931ffa43c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c5fabf0e1139ce95025f5d48f3014fb58fd8caea82b61d6cbf02931ffa43c1->enter($__internal_08c5fabf0e1139ce95025f5d48f3014fb58fd8caea82b61d6cbf02931ffa43c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProvider.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f944a6883072510b93c291faf0142c409b77654677bcfeba99cb6658c599e6->leave($__internal_54f944a6883072510b93c291faf0142c409b77654677bcfeba99cb6658c599e6_prof);

        
        $__internal_08c5fabf0e1139ce95025f5d48f3014fb58fd8caea82b61d6cbf02931ffa43c1->leave($__internal_08c5fabf0e1139ce95025f5d48f3014fb58fd8caea82b61d6cbf02931ffa43c1_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cce81a449ff588835dddaaabe4f7d98447abef6e311a4a15e9c897fe9b08cf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce81a449ff588835dddaaabe4f7d98447abef6e311a4a15e9c897fe9b08cf0b->enter($__internal_cce81a449ff588835dddaaabe4f7d98447abef6e311a4a15e9c897fe9b08cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ae3752c93c5042269478b0984a75a3e1a81ca75948cde86cb983f1e4c37f4a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3752c93c5042269478b0984a75a3e1a81ca75948cde86cb983f1e4c37f4a58->enter($__internal_ae3752c93c5042269478b0984a75a3e1a81ca75948cde86cb983f1e4c37f4a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Innovateurs</h2>
        <p>Admin <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_edit");
        echo "\">Ajout innovateur</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Nom</th>
                <th>Société</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Pays</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new Twig_Error_Runtime('Variable "providers" does not exist.', 20, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "fullName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "country", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo " 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </table>
    </div>
       
";
        
        $__internal_ae3752c93c5042269478b0984a75a3e1a81ca75948cde86cb983f1e4c37f4a58->leave($__internal_ae3752c93c5042269478b0984a75a3e1a81ca75948cde86cb983f1e4c37f4a58_prof);

        
        $__internal_cce81a449ff588835dddaaabe4f7d98447abef6e311a4a15e9c897fe9b08cf0b->leave($__internal_cce81a449ff588835dddaaabe4f7d98447abef6e311a4a15e9c897fe9b08cf0b_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminProvider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  117 => 35,  108 => 32,  102 => 29,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  69 => 20,  54 => 8,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}


{% block content %}    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Innovateurs</h2>
        <p>Admin <a href=\"{{ path('admin_provider_edit')}}\">Ajout innovateur</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Nom</th>
                <th>Société</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Pays</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            {% for provider in providers%}
            <tr>
                <td>{{ provider.fullName }}</td>
                <td>{{ provider.company }}</td>
                <td>{{ provider.email }}</td>
                <td>{{ provider.phone }}</td>
                <td>{{ provider.address }}</td>
                <td>{{ provider.country }}</td>
                <td>
                    <a href=\"{{ path('admin_provider_edit', {id: provider.idprovider}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" {{path('admin_provider_delete', {id: provider.idprovider}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            {% else %} 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            {% endfor %}
        </table>
    </div>
       
{% endblock %}
", "admin/adminProvider.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminProvider.html.twig");
    }
}
