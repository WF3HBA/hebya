<?php

/* admin/adminService.html.twig */
class __TwigTemplate_c94d62a1e696ed8d5c1fd251e306ff68b499ce4b91bd31acb3bdbeb703b6c6ab extends Twig_Template
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
        $__internal_830261fb527e451e7b989fdebf2a8e95874c0bbbf2d1d4923df1ae6dcd5cc69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830261fb527e451e7b989fdebf2a8e95874c0bbbf2d1d4923df1ae6dcd5cc69e->enter($__internal_830261fb527e451e7b989fdebf2a8e95874c0bbbf2d1d4923df1ae6dcd5cc69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $__internal_84f3c80437026b66c0f7c11f32ff654ae52c64a26c6f320c073a33c32c516ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f3c80437026b66c0f7c11f32ff654ae52c64a26c6f320c073a33c32c516ebc->enter($__internal_84f3c80437026b66c0f7c11f32ff654ae52c64a26c6f320c073a33c32c516ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminService.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830261fb527e451e7b989fdebf2a8e95874c0bbbf2d1d4923df1ae6dcd5cc69e->leave($__internal_830261fb527e451e7b989fdebf2a8e95874c0bbbf2d1d4923df1ae6dcd5cc69e_prof);

        
        $__internal_84f3c80437026b66c0f7c11f32ff654ae52c64a26c6f320c073a33c32c516ebc->leave($__internal_84f3c80437026b66c0f7c11f32ff654ae52c64a26c6f320c073a33c32c516ebc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_09b2b83bc79d2a7aa70efe0f566e14b53e9e80374d783ab00b151cc594197011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b2b83bc79d2a7aa70efe0f566e14b53e9e80374d783ab00b151cc594197011->enter($__internal_09b2b83bc79d2a7aa70efe0f566e14b53e9e80374d783ab00b151cc594197011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_224dc77ace8cc04f29a7e2ac05c5bce257667333c68f16b4c14383d49bfd8e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224dc77ace8cc04f29a7e2ac05c5bce257667333c68f16b4c14383d49bfd8e72->enter($__internal_224dc77ace8cc04f29a7e2ac05c5bce257667333c68f16b4c14383d49bfd8e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_224dc77ace8cc04f29a7e2ac05c5bce257667333c68f16b4c14383d49bfd8e72->leave($__internal_224dc77ace8cc04f29a7e2ac05c5bce257667333c68f16b4c14383d49bfd8e72_prof);

        
        $__internal_09b2b83bc79d2a7aa70efe0f566e14b53e9e80374d783ab00b151cc594197011->leave($__internal_09b2b83bc79d2a7aa70efe0f566e14b53e9e80374d783ab00b151cc594197011_prof);

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
", "admin/adminService.html.twig", "C:\\wamp64\\www\\hebya\\templates\\admin\\adminService.html.twig");
    }
}
