<?php

/* admin/adminAbout.html.twig */
class __TwigTemplate_1e046bee79104d98ba83a445ec646b66b999f60e32b08e643c58dd7f03450127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminAbout.html.twig", 1);
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
        $__internal_07121e8a5146f9812ad641a58ef6f1bf4633cf2434039a44272bb49ea4e87b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07121e8a5146f9812ad641a58ef6f1bf4633cf2434039a44272bb49ea4e87b46->enter($__internal_07121e8a5146f9812ad641a58ef6f1bf4633cf2434039a44272bb49ea4e87b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAbout.html.twig"));

        $__internal_2ce819726d06f7b7c6e778d86fc84b1f9c7ca36b44422915fe26b033068c572e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce819726d06f7b7c6e778d86fc84b1f9c7ca36b44422915fe26b033068c572e->enter($__internal_2ce819726d06f7b7c6e778d86fc84b1f9c7ca36b44422915fe26b033068c572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAbout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07121e8a5146f9812ad641a58ef6f1bf4633cf2434039a44272bb49ea4e87b46->leave($__internal_07121e8a5146f9812ad641a58ef6f1bf4633cf2434039a44272bb49ea4e87b46_prof);

        
        $__internal_2ce819726d06f7b7c6e778d86fc84b1f9c7ca36b44422915fe26b033068c572e->leave($__internal_2ce819726d06f7b7c6e778d86fc84b1f9c7ca36b44422915fe26b033068c572e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5f26ec7842be82b11bcdfa57b8b0c1c1f39495927f3e0dca280c7b0bd1f2ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f26ec7842be82b11bcdfa57b8b0c1c1f39495927f3e0dca280c7b0bd1f2ffc->enter($__internal_a5f26ec7842be82b11bcdfa57b8b0c1c1f39495927f3e0dca280c7b0bd1f2ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c49c430fc0c52151d5c496435c37196fdb8f9918b793d834ffd35c1523e7ca43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49c430fc0c52151d5c496435c37196fdb8f9918b793d834ffd35c1523e7ca43->enter($__internal_c49c430fc0c52151d5c496435c37196fdb8f9918b793d834ffd35c1523e7ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>A propos</h2>
            <p>Admin</p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Section</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Edit</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new Twig_Error_Runtime('Variable "abouts" does not exist.', 15, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 16
            echo "                    <tr>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "section", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "content", array()), 0, 100);
            echo "...</td>
                         <td>
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_about_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "idabout", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo " 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </table>
        </div>
    </div>   
";
        
        $__internal_c49c430fc0c52151d5c496435c37196fdb8f9918b793d834ffd35c1523e7ca43->leave($__internal_c49c430fc0c52151d5c496435c37196fdb8f9918b793d834ffd35c1523e7ca43_prof);

        
        $__internal_a5f26ec7842be82b11bcdfa57b8b0c1c1f39495927f3e0dca280c7b0bd1f2ffc->leave($__internal_a5f26ec7842be82b11bcdfa57b8b0c1c1f39495927f3e0dca280c7b0bd1f2ffc_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminAbout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  92 => 24,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block content %}
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>A propos</h2>
            <p>Admin</p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Section</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Edit</th>
                </tr>
                {% for about in abouts %}
                    <tr>
                        <td>{{ about.section|capitalize }}</td>
                        <td>{{ about.title }}</td>
                        <td>{{ about.content[:100]|raw }}...</td>
                         <td>
                            <a href=\"{{ path('admin_about_edit', {id: about.idabout}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
                        </td>
                    </tr>
                {% else %} 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                {% endfor %}
            </table>
        </div>
    </div>   
{% endblock %}
", "admin/adminAbout.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminAbout.html.twig");
    }
}
