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
        $__internal_3fb01d6ec9f45e29aa427a2e60a5e49d485a68bdf2b020d8d10e75eadea37ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb01d6ec9f45e29aa427a2e60a5e49d485a68bdf2b020d8d10e75eadea37ba5->enter($__internal_3fb01d6ec9f45e29aa427a2e60a5e49d485a68bdf2b020d8d10e75eadea37ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $__internal_9e6160ff6af6f54ec561fd0b0eab40a436beef301ae9dfd2c5273f9d61b59ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6160ff6af6f54ec561fd0b0eab40a436beef301ae9dfd2c5273f9d61b59ad3->enter($__internal_9e6160ff6af6f54ec561fd0b0eab40a436beef301ae9dfd2c5273f9d61b59ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb01d6ec9f45e29aa427a2e60a5e49d485a68bdf2b020d8d10e75eadea37ba5->leave($__internal_3fb01d6ec9f45e29aa427a2e60a5e49d485a68bdf2b020d8d10e75eadea37ba5_prof);

        
        $__internal_9e6160ff6af6f54ec561fd0b0eab40a436beef301ae9dfd2c5273f9d61b59ad3->leave($__internal_9e6160ff6af6f54ec561fd0b0eab40a436beef301ae9dfd2c5273f9d61b59ad3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_18a1ec5c7b78dee5c1d92f05648e5269d953361f74a9044cbb7053d697badb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a1ec5c7b78dee5c1d92f05648e5269d953361f74a9044cbb7053d697badb56->enter($__internal_18a1ec5c7b78dee5c1d92f05648e5269d953361f74a9044cbb7053d697badb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9cdae306279011eee7da48be3d1c09d7b56c9666c4fafd7d63bcca1b1079b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdae306279011eee7da48be3d1c09d7b56c9666c4fafd7d63bcca1b1079b574->enter($__internal_9cdae306279011eee7da48be3d1c09d7b56c9666c4fafd7d63bcca1b1079b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9cdae306279011eee7da48be3d1c09d7b56c9666c4fafd7d63bcca1b1079b574->leave($__internal_9cdae306279011eee7da48be3d1c09d7b56c9666c4fafd7d63bcca1b1079b574_prof);

        
        $__internal_18a1ec5c7b78dee5c1d92f05648e5269d953361f74a9044cbb7053d697badb56->leave($__internal_18a1ec5c7b78dee5c1d92f05648e5269d953361f74a9044cbb7053d697badb56_prof);

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
