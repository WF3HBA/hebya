<?php

/* admin/adminService.html.twig */
class __TwigTemplate_679be1aad5140b615a501bedce6d250635a2f2c88c0c1f1d2c48a811fd273bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminService.html.twig", 1);
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
        $__internal_8134c0b1a55ac8539b960869d5cf210739d75309983ae74666378f5d27554a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8134c0b1a55ac8539b960869d5cf210739d75309983ae74666378f5d27554a27->enter($__internal_8134c0b1a55ac8539b960869d5cf210739d75309983ae74666378f5d27554a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $__internal_b79255ad1eb4b5653c4056375a878b6e43acfd5aa4abd64477e2189407569dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79255ad1eb4b5653c4056375a878b6e43acfd5aa4abd64477e2189407569dfc->enter($__internal_b79255ad1eb4b5653c4056375a878b6e43acfd5aa4abd64477e2189407569dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8134c0b1a55ac8539b960869d5cf210739d75309983ae74666378f5d27554a27->leave($__internal_8134c0b1a55ac8539b960869d5cf210739d75309983ae74666378f5d27554a27_prof);

        
        $__internal_b79255ad1eb4b5653c4056375a878b6e43acfd5aa4abd64477e2189407569dfc->leave($__internal_b79255ad1eb4b5653c4056375a878b6e43acfd5aa4abd64477e2189407569dfc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_23a1a1f963269a82515033d3f6032e9d2ad8c297222cf13370769f46de4fa852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a1a1f963269a82515033d3f6032e9d2ad8c297222cf13370769f46de4fa852->enter($__internal_23a1a1f963269a82515033d3f6032e9d2ad8c297222cf13370769f46de4fa852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e95c6c21151c526d45c4e9959ac038bc56b84b08862671bbc9a4c119765a7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e95c6c21151c526d45c4e9959ac038bc56b84b08862671bbc9a4c119765a7cf->enter($__internal_4e95c6c21151c526d45c4e9959ac038bc56b84b08862671bbc9a4c119765a7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Services</h2>
            <p>Admin</p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Cible</th>
                    <th>Contenu</th>
                    <th>Edition</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 15, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 16
            echo "                    <tr>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "content", array()), 0, 100);
            echo "...</td>
                         <td>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_service_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idservice", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo " 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </table>
        </div>
    </div>   
    
";
        
        $__internal_4e95c6c21151c526d45c4e9959ac038bc56b84b08862671bbc9a4c119765a7cf->leave($__internal_4e95c6c21151c526d45c4e9959ac038bc56b84b08862671bbc9a4c119765a7cf_prof);

        
        $__internal_23a1a1f963269a82515033d3f6032e9d2ad8c297222cf13370769f46de4fa852->leave($__internal_23a1a1f963269a82515033d3f6032e9d2ad8c297222cf13370769f46de4fa852_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  88 => 23,  79 => 20,  74 => 18,  70 => 17,  67 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block content %}
    
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Services</h2>
            <p>Admin</p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Cible</th>
                    <th>Contenu</th>
                    <th>Edition</th>
                </tr>
                {% for service in services %}
                    <tr>
                        <td>{{ service.target|capitalize }}</td>
                        <td>{{ service.content[:100]|raw }}...</td>
                         <td>
                            <a href=\"{{ path('admin_service_edit', {id: service.idservice}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
                        </td>
                    </tr>
                {% else %} 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                {% endfor %}
            </table>
        </div>
    </div>   
    
{% endblock %}
", "admin/adminService.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminService.html.twig");
    }
}
