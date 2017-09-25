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
        $__internal_dfeed7e23b199ad8c28f16971a8a211a05eb9b1752afbc5204a0d72a6e4ba608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeed7e23b199ad8c28f16971a8a211a05eb9b1752afbc5204a0d72a6e4ba608->enter($__internal_dfeed7e23b199ad8c28f16971a8a211a05eb9b1752afbc5204a0d72a6e4ba608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAbout.html.twig"));

        $__internal_96da5916b2f5f99c4d245690c8bb6a80a73c0e9d0e25f3a0b69c8d4378cb1e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96da5916b2f5f99c4d245690c8bb6a80a73c0e9d0e25f3a0b69c8d4378cb1e42->enter($__internal_96da5916b2f5f99c4d245690c8bb6a80a73c0e9d0e25f3a0b69c8d4378cb1e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAbout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfeed7e23b199ad8c28f16971a8a211a05eb9b1752afbc5204a0d72a6e4ba608->leave($__internal_dfeed7e23b199ad8c28f16971a8a211a05eb9b1752afbc5204a0d72a6e4ba608_prof);

        
        $__internal_96da5916b2f5f99c4d245690c8bb6a80a73c0e9d0e25f3a0b69c8d4378cb1e42->leave($__internal_96da5916b2f5f99c4d245690c8bb6a80a73c0e9d0e25f3a0b69c8d4378cb1e42_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c23d498de665d793056ed48e05034f200d1a7e1c21ba64458a1d0a4b2d2d4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c23d498de665d793056ed48e05034f200d1a7e1c21ba64458a1d0a4b2d2d4e6->enter($__internal_1c23d498de665d793056ed48e05034f200d1a7e1c21ba64458a1d0a4b2d2d4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_57388fcd4905624acd1d1656840ef306af5656cae078cd3579479e1ec13f6bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57388fcd4905624acd1d1656840ef306af5656cae078cd3579479e1ec13f6bf0->enter($__internal_57388fcd4905624acd1d1656840ef306af5656cae078cd3579479e1ec13f6bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_57388fcd4905624acd1d1656840ef306af5656cae078cd3579479e1ec13f6bf0->leave($__internal_57388fcd4905624acd1d1656840ef306af5656cae078cd3579479e1ec13f6bf0_prof);

        
        $__internal_1c23d498de665d793056ed48e05034f200d1a7e1c21ba64458a1d0a4b2d2d4e6->leave($__internal_1c23d498de665d793056ed48e05034f200d1a7e1c21ba64458a1d0a4b2d2d4e6_prof);

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
