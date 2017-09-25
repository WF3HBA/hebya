<?php

/* opportunity/opportunity.html.twig */
class __TwigTemplate_77a6f0a12c03a7d5af710c0c427b1cda8b48af030d05f98e3e4362b268204ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "opportunity/opportunity.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8801836c551741dd5dbf9955613873a90faff8e7e0d95b6eacd3624167f1c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8801836c551741dd5dbf9955613873a90faff8e7e0d95b6eacd3624167f1c48->enter($__internal_f8801836c551741dd5dbf9955613873a90faff8e7e0d95b6eacd3624167f1c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunity.html.twig"));

        $__internal_7441371cdb838893d025aec7ad608da20674905659afca9a1070d8ac76d1390d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7441371cdb838893d025aec7ad608da20674905659afca9a1070d8ac76d1390d->enter($__internal_7441371cdb838893d025aec7ad608da20674905659afca9a1070d8ac76d1390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8801836c551741dd5dbf9955613873a90faff8e7e0d95b6eacd3624167f1c48->leave($__internal_f8801836c551741dd5dbf9955613873a90faff8e7e0d95b6eacd3624167f1c48_prof);

        
        $__internal_7441371cdb838893d025aec7ad608da20674905659afca9a1070d8ac76d1390d->leave($__internal_7441371cdb838893d025aec7ad608da20674905659afca9a1070d8ac76d1390d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_35f2fdb938da6edf77e22d20f301abdfbde99552578c65332f1bfe45affd1a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f2fdb938da6edf77e22d20f301abdfbde99552578c65332f1bfe45affd1a6f->enter($__internal_35f2fdb938da6edf77e22d20f301abdfbde99552578c65332f1bfe45affd1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cee759934062e3146ef059f86e364643ae27275b3b8fa56557f80da2cd649675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee759934062e3146ef059f86e364643ae27275b3b8fa56557f80da2cd649675->enter($__internal_cee759934062e3146ef059f86e364643ae27275b3b8fa56557f80da2cd649675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/opportunity/opportunity.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_cee759934062e3146ef059f86e364643ae27275b3b8fa56557f80da2cd649675->leave($__internal_cee759934062e3146ef059f86e364643ae27275b3b8fa56557f80da2cd649675_prof);

        
        $__internal_35f2fdb938da6edf77e22d20f301abdfbde99552578c65332f1bfe45affd1a6f->leave($__internal_35f2fdb938da6edf77e22d20f301abdfbde99552578c65332f1bfe45affd1a6f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c8fc5738f450aa4aabb2b52153ac4f684a5dcb63274359a5b501faba864eec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8fc5738f450aa4aabb2b52153ac4f684a5dcb63274359a5b501faba864eec4->enter($__internal_8c8fc5738f450aa4aabb2b52153ac4f684a5dcb63274359a5b501faba864eec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cf68d1ee0380077eaed28bce259af7aeaa131714c33c8f6d2149cbbc96ec238b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf68d1ee0380077eaed28bce259af7aeaa131714c33c8f6d2149cbbc96ec238b->enter($__internal_cf68d1ee0380077eaed28bce259af7aeaa131714c33c8f6d2149cbbc96ec238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/opportunity/hosted_by_africa_opportunity.jpg"), "html", null, true);
        echo "\"></div>
    <main class=\"container\">
        <section class=\"form-group row text-center\">
            <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "offres d'emploi"), "html", null, true);
        echo "</h1>
        </section>
        <section class=\"row\">
            <p class=\"col-xs-12 icone-fermer\"><span class=\"glyphicon glyphicon-remove\"></span></p>
            <p class=\"col-xs-12\" id=\"affiner-recherche\"><span class=\"glyphicon glyphicon-th-list\"></span></p>
                <div class=\"emploi-form col-xs-offset-1 col-sm-offset-0 col-sm-3\">
                    <form id=\"filter-form\">
                        <p>Type de contrat</p>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"CDI\">
                            CDI
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"CDD\">
                            CDD
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"Stage\">
                            Stage
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"Alternance\">
                            Alternance
                        </label><br><br>

                       ";
        // line 86
        echo "                       <select class=\"col-xs-12 col-sm-8 products-select-field\">
                                <option value=\"\">Theme</option>
                                <option>Comptabilité</option>
                                <option>Communication</option>
                                <option>Marketing</option>
                                <option>Informatique</option>
                                
                       </select><br><br>
                        <select class=\"col-xs-12 products-select-pays\">
                            <option value=\"\">tout les pays</option>
                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 96, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 97
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                           
                        </select>
                    </form>  
                </div>
                <div class=\"emploi-annonce col-xs-12 col-sm-8\">
                     ";
        // line 103
        $this->loadTemplate("opportunity/opportunityList.html.twig", "opportunity/opportunity.html.twig", 103)->display($context);
        // line 104
        echo "                </div>
            
        </section>
        
    </main>
";
        
        $__internal_cf68d1ee0380077eaed28bce259af7aeaa131714c33c8f6d2149cbbc96ec238b->leave($__internal_cf68d1ee0380077eaed28bce259af7aeaa131714c33c8f6d2149cbbc96ec238b_prof);

        
        $__internal_8c8fc5738f450aa4aabb2b52153ac4f684a5dcb63274359a5b501faba864eec4->leave($__internal_8c8fc5738f450aa4aabb2b52153ac4f684a5dcb63274359a5b501faba864eec4_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ad8dcd0f68471b8695b126bd142d746db2c5c7ab65a48dbdbe607fd738283257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8dcd0f68471b8695b126bd142d746db2c5c7ab65a48dbdbe607fd738283257->enter($__internal_ad8dcd0f68471b8695b126bd142d746db2c5c7ab65a48dbdbe607fd738283257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3e918513a8847b247608cf1e05ac0288e0d7c037f3fac32daa0ba33d26db81f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e918513a8847b247608cf1e05ac0288e0d7c037f3fac32daa0ba33d26db81f3->enter($__internal_3e918513a8847b247608cf1e05ac0288e0d7c037f3fac32daa0ba33d26db81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
     <script>
        var countrySelect = '";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("opportunity_ajax");
        echo "';
        
    </script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/opportunity/opportunity.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3e918513a8847b247608cf1e05ac0288e0d7c037f3fac32daa0ba33d26db81f3->leave($__internal_3e918513a8847b247608cf1e05ac0288e0d7c037f3fac32daa0ba33d26db81f3_prof);

        
        $__internal_ad8dcd0f68471b8695b126bd142d746db2c5c7ab65a48dbdbe607fd738283257->leave($__internal_ad8dcd0f68471b8695b126bd142d746db2c5c7ab65a48dbdbe607fd738283257_prof);

    }

    public function getTemplateName()
    {
        return "opportunity/opportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 118,  182 => 115,  177 => 113,  172 => 112,  163 => 111,  148 => 104,  146 => 103,  139 => 98,  128 => 97,  124 => 96,  112 => 86,  84 => 12,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}   
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/opportunity/opportunity.css\") }}\"/>
{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/opportunity/hosted_by_africa_opportunity.jpg') }}\"></div>
    <main class=\"container\">
        <section class=\"form-group row text-center\">
            <h1>{{ \"offres d'emploi\"|upper }}</h1>
        </section>
        <section class=\"row\">
            <p class=\"col-xs-12 icone-fermer\"><span class=\"glyphicon glyphicon-remove\"></span></p>
            <p class=\"col-xs-12\" id=\"affiner-recherche\"><span class=\"glyphicon glyphicon-th-list\"></span></p>
                <div class=\"emploi-form col-xs-offset-1 col-sm-offset-0 col-sm-3\">
                    <form id=\"filter-form\">
                        <p>Type de contrat</p>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"CDI\">
                            CDI
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"CDD\">
                            CDD
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"Stage\">
                            Stage
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"contrat\" value=\"Alternance\">
                            Alternance
                        </label><br><br>

                       {# <p>Expérience</p>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"experience\">
                            Non préciser
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"moins-an\">
                            Moins de 1 an
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"entre1-3\">
                            De 1 à 3 ans
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"plus-3\">
                            Plus de 3 ans
                        </label><br><br>

                        <p>Niveau de formation</p>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Non préciser
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Moins de 1 an
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            De 1 à 3 ans
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Plus de 3 ans
                        </label><br><br>

                        <p>DURÉE HEBDOMADAIRE</p>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Non préciser
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Temps plein
                        </label><br>
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\">
                            Temps partiel
                        </label><br>#}
                       <select class=\"col-xs-12 col-sm-8 products-select-field\">
                                <option value=\"\">Theme</option>
                                <option>Comptabilité</option>
                                <option>Communication</option>
                                <option>Marketing</option>
                                <option>Informatique</option>
                                
                       </select><br><br>
                        <select class=\"col-xs-12 products-select-pays\">
                            <option value=\"\">tout les pays</option>
                            {% for country in countries %}
                                <option value=\"{{ country.idcountry }}\">{{ country.name }}</option>
                                {% endfor %}                           
                        </select>
                    </form>  
                </div>
                <div class=\"emploi-annonce col-xs-12 col-sm-8\">
                     {% include 'opportunity/opportunityList.html.twig' %}
                </div>
            
        </section>
        
    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
     <script>
        var countrySelect = '{{ path('opportunity_ajax') }}';
        
    </script>
    <script src=\"{{ asset('js/opportunity/opportunity.js') }}\"></script>
{% endblock %}", "opportunity/opportunity.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\opportunity\\opportunity.html.twig");
    }
}
