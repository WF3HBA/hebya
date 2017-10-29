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
        $__internal_d15017fa241a5e279ce2b10a6e699fa5e6e56b47ade47b8da933242128ffd661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15017fa241a5e279ce2b10a6e699fa5e6e56b47ade47b8da933242128ffd661->enter($__internal_d15017fa241a5e279ce2b10a6e699fa5e6e56b47ade47b8da933242128ffd661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $__internal_824baac147e2c891bd660a12b3e0415ac46c452ebbc4a704697c8cdc5941c057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824baac147e2c891bd660a12b3e0415ac46c452ebbc4a704697c8cdc5941c057->enter($__internal_824baac147e2c891bd660a12b3e0415ac46c452ebbc4a704697c8cdc5941c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15017fa241a5e279ce2b10a6e699fa5e6e56b47ade47b8da933242128ffd661->leave($__internal_d15017fa241a5e279ce2b10a6e699fa5e6e56b47ade47b8da933242128ffd661_prof);

        
        $__internal_824baac147e2c891bd660a12b3e0415ac46c452ebbc4a704697c8cdc5941c057->leave($__internal_824baac147e2c891bd660a12b3e0415ac46c452ebbc4a704697c8cdc5941c057_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_07d3da4ec03b965e2d7343039b07289e11283beaef68c95ac97f151df1bf896c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d3da4ec03b965e2d7343039b07289e11283beaef68c95ac97f151df1bf896c->enter($__internal_07d3da4ec03b965e2d7343039b07289e11283beaef68c95ac97f151df1bf896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9db3b5e374d21a88b5a0a02c4767531087d49e5bd0799fb5fa5de9afca559b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db3b5e374d21a88b5a0a02c4767531087d49e5bd0799fb5fa5de9afca559b23->enter($__internal_9db3b5e374d21a88b5a0a02c4767531087d49e5bd0799fb5fa5de9afca559b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9db3b5e374d21a88b5a0a02c4767531087d49e5bd0799fb5fa5de9afca559b23->leave($__internal_9db3b5e374d21a88b5a0a02c4767531087d49e5bd0799fb5fa5de9afca559b23_prof);

        
        $__internal_07d3da4ec03b965e2d7343039b07289e11283beaef68c95ac97f151df1bf896c->leave($__internal_07d3da4ec03b965e2d7343039b07289e11283beaef68c95ac97f151df1bf896c_prof);

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
