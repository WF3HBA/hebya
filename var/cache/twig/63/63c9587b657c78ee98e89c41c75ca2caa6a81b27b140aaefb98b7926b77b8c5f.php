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
        $__internal_f9931f202141b32f372d78e59561a914aa1748f1c57c39bcd4ac64cf2e2f9429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9931f202141b32f372d78e59561a914aa1748f1c57c39bcd4ac64cf2e2f9429->enter($__internal_f9931f202141b32f372d78e59561a914aa1748f1c57c39bcd4ac64cf2e2f9429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $__internal_0b2e9b3f985ffcbeed0faf4131b690f87ada874c87bcd931b5feccf1c7f78fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2e9b3f985ffcbeed0faf4131b690f87ada874c87bcd931b5feccf1c7f78fbb->enter($__internal_0b2e9b3f985ffcbeed0faf4131b690f87ada874c87bcd931b5feccf1c7f78fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9931f202141b32f372d78e59561a914aa1748f1c57c39bcd4ac64cf2e2f9429->leave($__internal_f9931f202141b32f372d78e59561a914aa1748f1c57c39bcd4ac64cf2e2f9429_prof);

        
        $__internal_0b2e9b3f985ffcbeed0faf4131b690f87ada874c87bcd931b5feccf1c7f78fbb->leave($__internal_0b2e9b3f985ffcbeed0faf4131b690f87ada874c87bcd931b5feccf1c7f78fbb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c4278e2e6740534e492dab0ae50e0c734599a19c8bde466f8e67d1947f8dff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4278e2e6740534e492dab0ae50e0c734599a19c8bde466f8e67d1947f8dff1->enter($__internal_3c4278e2e6740534e492dab0ae50e0c734599a19c8bde466f8e67d1947f8dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_12c8c0c3a8efa3f2dcd345a992a8528c23a2138e07898589563b9efce424aac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c8c0c3a8efa3f2dcd345a992a8528c23a2138e07898589563b9efce424aac4->enter($__internal_12c8c0c3a8efa3f2dcd345a992a8528c23a2138e07898589563b9efce424aac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_12c8c0c3a8efa3f2dcd345a992a8528c23a2138e07898589563b9efce424aac4->leave($__internal_12c8c0c3a8efa3f2dcd345a992a8528c23a2138e07898589563b9efce424aac4_prof);

        
        $__internal_3c4278e2e6740534e492dab0ae50e0c734599a19c8bde466f8e67d1947f8dff1->leave($__internal_3c4278e2e6740534e492dab0ae50e0c734599a19c8bde466f8e67d1947f8dff1_prof);

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
