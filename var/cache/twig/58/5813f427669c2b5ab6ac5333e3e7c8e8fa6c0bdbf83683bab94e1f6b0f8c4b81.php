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
        $__internal_09fe434e50c52ed52c946e09a2bcd7e6a4f30c0d890c7bf1ed06c121322f28bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fe434e50c52ed52c946e09a2bcd7e6a4f30c0d890c7bf1ed06c121322f28bb->enter($__internal_09fe434e50c52ed52c946e09a2bcd7e6a4f30c0d890c7bf1ed06c121322f28bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $__internal_c548bcb48d402cf4d4ab3db97c59383699a78acc5869ac2059c6e668e2cfbc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c548bcb48d402cf4d4ab3db97c59383699a78acc5869ac2059c6e668e2cfbc2c->enter($__internal_c548bcb48d402cf4d4ab3db97c59383699a78acc5869ac2059c6e668e2cfbc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fe434e50c52ed52c946e09a2bcd7e6a4f30c0d890c7bf1ed06c121322f28bb->leave($__internal_09fe434e50c52ed52c946e09a2bcd7e6a4f30c0d890c7bf1ed06c121322f28bb_prof);

        
        $__internal_c548bcb48d402cf4d4ab3db97c59383699a78acc5869ac2059c6e668e2cfbc2c->leave($__internal_c548bcb48d402cf4d4ab3db97c59383699a78acc5869ac2059c6e668e2cfbc2c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ac29063eff7d8862dbec6624dc9e85a4a7a5df33d2d2fa89cd69d588c573c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac29063eff7d8862dbec6624dc9e85a4a7a5df33d2d2fa89cd69d588c573c65->enter($__internal_5ac29063eff7d8862dbec6624dc9e85a4a7a5df33d2d2fa89cd69d588c573c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1d6adb1240503965b3a85c2ac1aa1ee49606c48e8f25ddd472fc976b71c0a867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6adb1240503965b3a85c2ac1aa1ee49606c48e8f25ddd472fc976b71c0a867->enter($__internal_1d6adb1240503965b3a85c2ac1aa1ee49606c48e8f25ddd472fc976b71c0a867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
 <div class=\"col-md-7 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Client</h2>
            <p>Admin <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit");
        echo "\">add client</a></p>
            <table class=\"table\">
                <tr>
                    <th>id</th>
                    <th>company</th>
                    <th>company type</th>
                    <th>lastname</th>
                    <th>firstname</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>address</th>
                    <th>country</th>
";
        // line 21
        echo "                    <th>status</th>
                    <th>Edit</th>
                    <th>delete</th>
                    
                </tr>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 26, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "idclient", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "company", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "company_type", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "lastname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "firstname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "phone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "address", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "country", array()), "html", null, true);
            echo "</td>

";
            // line 39
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "status", array()), "html", null, true);
            echo "</td>
                         <td>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "idclient", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">modifier</button></a>
                        </td>
                        <td>
                             <a href=\" ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "idclient", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo " 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </table>
        </div>
    </div>   

";
        
        $__internal_1d6adb1240503965b3a85c2ac1aa1ee49606c48e8f25ddd472fc976b71c0a867->leave($__internal_1d6adb1240503965b3a85c2ac1aa1ee49606c48e8f25ddd472fc976b71c0a867_prof);

        
        $__internal_5ac29063eff7d8862dbec6624dc9e85a4a7a5df33d2d2fa89cd69d588c573c65->leave($__internal_5ac29063eff7d8862dbec6624dc9e85a4a7a5df33d2d2fa89cd69d588c573c65_prof);

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
        return array (  151 => 50,  143 => 47,  134 => 44,  128 => 41,  122 => 39,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  82 => 27,  77 => 26,  70 => 21,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/admin.html.twig\" %}

{% block content %}
    
 <div class=\"col-md-7 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Client</h2>
            <p>Admin <a href=\"{{ path('admin_client_edit')}}\">add client</a></p>
            <table class=\"table\">
                <tr>
                    <th>id</th>
                    <th>company</th>
                    <th>company type</th>
                    <th>lastname</th>
                    <th>firstname</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>address</th>
                    <th>country</th>
{#                    <th>password</th>#}
                    <th>status</th>
                    <th>Edit</th>
                    <th>delete</th>
                    
                </tr>
                {% for client in clients%}
                    <tr>
                        <td>{{ client.idclient }}</td>
                        <td>{{ client.company }}</td>
                        <td>{{ client.company_type }}</td>
                        <td>{{ client.lastname }}</td>
                        <td>{{ client.firstname }}</td>
                        <td>{{ client.phone }}</td>
                        <td>{{ client.email }}</td>
                        <td>{{ client.address }}</td>
                        <td>{{ client.country }}</td>

{#                        <td>{{ client.password }}</td>#}
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
