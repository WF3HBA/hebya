<?php

/* admin/adminCountry.html.twig */
class __TwigTemplate_8de2b0923cd1ae6367463c13f104c1b4ee2447aa1c7e57e26f701cb7043cb321 extends Twig_Template
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
        $__internal_8759475a04026352015802880463ac0f2ae585a128d025bd32587367071e7a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8759475a04026352015802880463ac0f2ae585a128d025bd32587367071e7a41->enter($__internal_8759475a04026352015802880463ac0f2ae585a128d025bd32587367071e7a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $__internal_aa2f1f940de243d5a27d7144d408b1a3136a1d4b0c1e3ea6ec07ecf47cc95395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2f1f940de243d5a27d7144d408b1a3136a1d4b0c1e3ea6ec07ecf47cc95395->enter($__internal_aa2f1f940de243d5a27d7144d408b1a3136a1d4b0c1e3ea6ec07ecf47cc95395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8759475a04026352015802880463ac0f2ae585a128d025bd32587367071e7a41->leave($__internal_8759475a04026352015802880463ac0f2ae585a128d025bd32587367071e7a41_prof);

        
        $__internal_aa2f1f940de243d5a27d7144d408b1a3136a1d4b0c1e3ea6ec07ecf47cc95395->leave($__internal_aa2f1f940de243d5a27d7144d408b1a3136a1d4b0c1e3ea6ec07ecf47cc95395_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_82b63e5268fe37d4221096f8a632cfedead336ef6c29fc1605138b75a2f8ea89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b63e5268fe37d4221096f8a632cfedead336ef6c29fc1605138b75a2f8ea89->enter($__internal_82b63e5268fe37d4221096f8a632cfedead336ef6c29fc1605138b75a2f8ea89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37350f8df73d107adb0499bd60bdd8f8152b7fb37233af058a233f4ea9554648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37350f8df73d107adb0499bd60bdd8f8152b7fb37233af058a233f4ea9554648->enter($__internal_37350f8df73d107adb0499bd60bdd8f8152b7fb37233af058a233f4ea9554648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_37350f8df73d107adb0499bd60bdd8f8152b7fb37233af058a233f4ea9554648->leave($__internal_37350f8df73d107adb0499bd60bdd8f8152b7fb37233af058a233f4ea9554648_prof);

        
        $__internal_82b63e5268fe37d4221096f8a632cfedead336ef6c29fc1605138b75a2f8ea89->leave($__internal_82b63e5268fe37d4221096f8a632cfedead336ef6c29fc1605138b75a2f8ea89_prof);

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

", "admin/adminCountry.html.twig", "C:\\wamp64\\www\\hebya\\templates\\admin\\adminCountry.html.twig");
    }
}
