<?php

/* admin/adminCountry.html.twig */
class __TwigTemplate_6fba10f7a9c13c5c79379ba4de8b72253e4c1d9f0d27c1f12a0593049545bf56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminCountry.html.twig", 1);
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
        $__internal_ee0d0741e8bf8ddc6ab43053ebe6e3c4d5c1c7b2d7eed3c5ce596773d34ccd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0d0741e8bf8ddc6ab43053ebe6e3c4d5c1c7b2d7eed3c5ce596773d34ccd2b->enter($__internal_ee0d0741e8bf8ddc6ab43053ebe6e3c4d5c1c7b2d7eed3c5ce596773d34ccd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $__internal_22f3e47d36c94b5e9b39a2a354103a1d7663074522898271f3ad2c92492d9c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f3e47d36c94b5e9b39a2a354103a1d7663074522898271f3ad2c92492d9c8b->enter($__internal_22f3e47d36c94b5e9b39a2a354103a1d7663074522898271f3ad2c92492d9c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0d0741e8bf8ddc6ab43053ebe6e3c4d5c1c7b2d7eed3c5ce596773d34ccd2b->leave($__internal_ee0d0741e8bf8ddc6ab43053ebe6e3c4d5c1c7b2d7eed3c5ce596773d34ccd2b_prof);

        
        $__internal_22f3e47d36c94b5e9b39a2a354103a1d7663074522898271f3ad2c92492d9c8b->leave($__internal_22f3e47d36c94b5e9b39a2a354103a1d7663074522898271f3ad2c92492d9c8b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f6373383cc4ebb2015272ed9dace1b81f2c6cb10d77a894ed20c74435cc6ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6373383cc4ebb2015272ed9dace1b81f2c6cb10d77a894ed20c74435cc6ce8->enter($__internal_8f6373383cc4ebb2015272ed9dace1b81f2c6cb10d77a894ed20c74435cc6ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ca876162c36ad15675131d1f4b5af2e54be5c5c6ac6a7a0e93732eb3a2766ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca876162c36ad15675131d1f4b5af2e54be5c5c6ac6a7a0e93732eb3a2766ce2->enter($__internal_ca876162c36ad15675131d1f4b5af2e54be5c5c6ac6a7a0e93732eb3a2766ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Pays</h2>
        <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_edit");
        echo "\">Ajout pays</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Nom</th>
                <th>Continent</th>
                <th>Contact</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 20, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "continent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "contact_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "contact_phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "contact_email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "contact_address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "contact_city", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo " 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </table>
    </div>
       
";
        
        $__internal_ca876162c36ad15675131d1f4b5af2e54be5c5c6ac6a7a0e93732eb3a2766ce2->leave($__internal_ca876162c36ad15675131d1f4b5af2e54be5c5c6ac6a7a0e93732eb3a2766ce2_prof);

        
        $__internal_8f6373383cc4ebb2015272ed9dace1b81f2c6cb10d77a894ed20c74435cc6ce8->leave($__internal_8f6373383cc4ebb2015272ed9dace1b81f2c6cb10d77a894ed20c74435cc6ce8_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminCountry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  122 => 36,  113 => 33,  107 => 30,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  70 => 20,  54 => 7,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block content %}    
        
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h2>Pays</h2>
        <p><a href=\"{{ path('admin_country_edit')}}\">Ajout pays</a></p>
        <table class=\"table table-striped\">
            <tr class=\"info\">
                <th>Nom</th>
                <th>Continent</th>
                <th>Contact</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Edition</th>
                <th>Supprimer</th>
            </tr>
            {% for country in countries%}
            <tr>
                <td>{{ country.name }}</td>
                <td>{{ country.continent }}</td>
                <td>{{ country.contact_name }}</td>
                <td>{{ country.contact_phone }}</td>
                <td>{{ country.contact_email }}</td>
                <td>{{ country.contact_address }}</td>
                <td>{{ country.contact_city }}</td>
                <td>
                    <a href=\"{{ path('admin_country_edit', {id: country.idcountry}) }}\"><button class=\"btn btn-primary\">Modifier</button></a>
                </td>
                <td>
                    <a href=\" {{path('admin_country_delete', {id: country.idcountry}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">Supprimer</button></a>
                </td>
            </tr>
            {% else %} 
                <tr><td colspan=\"2\">Aucun résultat</td></tr>
            {% endfor %}
        </table>
    </div>
       
{% endblock %}

", "admin/adminCountry.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminCountry.html.twig");
    }
}
