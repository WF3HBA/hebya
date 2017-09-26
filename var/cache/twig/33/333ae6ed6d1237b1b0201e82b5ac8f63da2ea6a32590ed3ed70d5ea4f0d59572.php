<?php

/* admin/adminTeam.html.twig */
class __TwigTemplate_367a873661b695b0ee2e199006b45c9cc89ec8dd9bdad773b26a45742e79683f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminTeam.html.twig", 1);
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
        $__internal_a1128f4b5e346098ef73171ce5901dfce50702987f2fd7a0675f32efa8a64eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1128f4b5e346098ef73171ce5901dfce50702987f2fd7a0675f32efa8a64eb4->enter($__internal_a1128f4b5e346098ef73171ce5901dfce50702987f2fd7a0675f32efa8a64eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeam.html.twig"));

        $__internal_7c1000956bee0c08b1eacc1d2384113237b47de7d943233b0a058f0ea6c3ca43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1000956bee0c08b1eacc1d2384113237b47de7d943233b0a058f0ea6c3ca43->enter($__internal_7c1000956bee0c08b1eacc1d2384113237b47de7d943233b0a058f0ea6c3ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1128f4b5e346098ef73171ce5901dfce50702987f2fd7a0675f32efa8a64eb4->leave($__internal_a1128f4b5e346098ef73171ce5901dfce50702987f2fd7a0675f32efa8a64eb4_prof);

        
        $__internal_7c1000956bee0c08b1eacc1d2384113237b47de7d943233b0a058f0ea6c3ca43->leave($__internal_7c1000956bee0c08b1eacc1d2384113237b47de7d943233b0a058f0ea6c3ca43_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6858d00202b7244e737d888427230952509d4920a65c1896c48c2cd96434143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6858d00202b7244e737d888427230952509d4920a65c1896c48c2cd96434143->enter($__internal_e6858d00202b7244e737d888427230952509d4920a65c1896c48c2cd96434143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_91642db5165f9074c9623f30537c2a0b92b8e972044db1994b20363d5c44a453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91642db5165f9074c9623f30537c2a0b92b8e972044db1994b20363d5c44a453->enter($__internal_91642db5165f9074c9623f30537c2a0b92b8e972044db1994b20363d5c44a453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Team Members</h2>
        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team_edit");
        echo "\">Ajouter un membre</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Prénom</th>
                <th>Nom</th>
                <th>Titre</th>
                <th>Linkedin</th>
                <th>Editer</th>
                <th>Supprimer</th>
            </tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new Twig_Error_Runtime('Variable "teamMembers" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "linkedin", array()), "html", null, true);
            echo "\">Linkedin</a></td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">modifier</button></a>
                    </td>
                    <td>
                         <a href=\" ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
  </div>

";
        
        $__internal_91642db5165f9074c9623f30537c2a0b92b8e972044db1994b20363d5c44a453->leave($__internal_91642db5165f9074c9623f30537c2a0b92b8e972044db1994b20363d5c44a453_prof);

        
        $__internal_e6858d00202b7244e737d888427230952509d4920a65c1896c48c2cd96434143->leave($__internal_e6858d00202b7244e737d888427230952509d4920a65c1896c48c2cd96434143_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  97 => 27,  91 => 24,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block content %}

    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Team Members</h2>
        <p><a href=\"{{ path('admin_team_edit') }}\">Ajouter un membre</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Prénom</th>
                <th>Nom</th>
                <th>Titre</th>
                <th>Linkedin</th>
                <th>Editer</th>
                <th>Supprimer</th>
            </tr>
            {% for teamMember in teamMembers %}
                <tr>
                    <td>{{ teamMember.firstname }}</td>
                    <td>{{ teamMember.lastname }}</td>
                    <td>{{ teamMember.title }}</td>
                    <td><a href=\"{{ teamMember.linkedin }}\">Linkedin</a></td>
                    <td>
                        <a href=\"{{ path('admin_team_edit', {id: teamMember.idteam_member}) }}\"><button class=\"btn btn-primary\">modifier</button></a>
                    </td>
                    <td>
                         <a href=\" {{path('admin_team_delete', {id: teamMember.idteam_member}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                    </td>
                </tr>

            {% endfor %}
        </table>
  </div>

{% endblock %}
", "admin/adminTeam.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminTeam.html.twig");
    }
}
