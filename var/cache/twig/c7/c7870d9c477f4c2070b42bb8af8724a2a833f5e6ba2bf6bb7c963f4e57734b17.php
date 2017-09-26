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
        $__internal_f9fa27063c34079ad1c96b7a029bbcc39ad926e48185e9ca0cf0303909bf5ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fa27063c34079ad1c96b7a029bbcc39ad926e48185e9ca0cf0303909bf5ad9->enter($__internal_f9fa27063c34079ad1c96b7a029bbcc39ad926e48185e9ca0cf0303909bf5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunity.html.twig"));

        $__internal_a4f8de87844c22295bf912ef6a6153224c5c912ec0a35c68b68d45ca14444916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f8de87844c22295bf912ef6a6153224c5c912ec0a35c68b68d45ca14444916->enter($__internal_a4f8de87844c22295bf912ef6a6153224c5c912ec0a35c68b68d45ca14444916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "opportunity/opportunity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fa27063c34079ad1c96b7a029bbcc39ad926e48185e9ca0cf0303909bf5ad9->leave($__internal_f9fa27063c34079ad1c96b7a029bbcc39ad926e48185e9ca0cf0303909bf5ad9_prof);

        
        $__internal_a4f8de87844c22295bf912ef6a6153224c5c912ec0a35c68b68d45ca14444916->leave($__internal_a4f8de87844c22295bf912ef6a6153224c5c912ec0a35c68b68d45ca14444916_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bbf94d9e6ee2f36238137da6c2b5e9587d7a5816e64719e4d6362dcba79d690f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf94d9e6ee2f36238137da6c2b5e9587d7a5816e64719e4d6362dcba79d690f->enter($__internal_bbf94d9e6ee2f36238137da6c2b5e9587d7a5816e64719e4d6362dcba79d690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9973a7cf30fee324ebef2816ee1553d9399da735c9faefa79960e78e0951fc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9973a7cf30fee324ebef2816ee1553d9399da735c9faefa79960e78e0951fc07->enter($__internal_9973a7cf30fee324ebef2816ee1553d9399da735c9faefa79960e78e0951fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/opportunity/opportunity.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_9973a7cf30fee324ebef2816ee1553d9399da735c9faefa79960e78e0951fc07->leave($__internal_9973a7cf30fee324ebef2816ee1553d9399da735c9faefa79960e78e0951fc07_prof);

        
        $__internal_bbf94d9e6ee2f36238137da6c2b5e9587d7a5816e64719e4d6362dcba79d690f->leave($__internal_bbf94d9e6ee2f36238137da6c2b5e9587d7a5816e64719e4d6362dcba79d690f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_17dc23aff4bed525af1fdc51ec5a2c2d5ead0aef6c5d7c552aa9e6a39081a72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dc23aff4bed525af1fdc51ec5a2c2d5ead0aef6c5d7c552aa9e6a39081a72a->enter($__internal_17dc23aff4bed525af1fdc51ec5a2c2d5ead0aef6c5d7c552aa9e6a39081a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a7fce92a3aa5833552a0d61f73b62f1acced4e7d577d8a9a435d9fc34a68e4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fce92a3aa5833552a0d61f73b62f1acced4e7d577d8a9a435d9fc34a68e4de->enter($__internal_a7fce92a3aa5833552a0d61f73b62f1acced4e7d577d8a9a435d9fc34a68e4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a7fce92a3aa5833552a0d61f73b62f1acced4e7d577d8a9a435d9fc34a68e4de->leave($__internal_a7fce92a3aa5833552a0d61f73b62f1acced4e7d577d8a9a435d9fc34a68e4de_prof);

        
        $__internal_17dc23aff4bed525af1fdc51ec5a2c2d5ead0aef6c5d7c552aa9e6a39081a72a->leave($__internal_17dc23aff4bed525af1fdc51ec5a2c2d5ead0aef6c5d7c552aa9e6a39081a72a_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b09f487117eded89b3418aa29a34e503d04820818514728e41da2e1f964ac2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f487117eded89b3418aa29a34e503d04820818514728e41da2e1f964ac2d7->enter($__internal_b09f487117eded89b3418aa29a34e503d04820818514728e41da2e1f964ac2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_d1b853ce85b7c9adbeb07e5e5ea266b324f074b43177f019bb598756112c7939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b853ce85b7c9adbeb07e5e5ea266b324f074b43177f019bb598756112c7939->enter($__internal_d1b853ce85b7c9adbeb07e5e5ea266b324f074b43177f019bb598756112c7939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_d1b853ce85b7c9adbeb07e5e5ea266b324f074b43177f019bb598756112c7939->leave($__internal_d1b853ce85b7c9adbeb07e5e5ea266b324f074b43177f019bb598756112c7939_prof);

        
        $__internal_b09f487117eded89b3418aa29a34e503d04820818514728e41da2e1f964ac2d7->leave($__internal_b09f487117eded89b3418aa29a34e503d04820818514728e41da2e1f964ac2d7_prof);

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
