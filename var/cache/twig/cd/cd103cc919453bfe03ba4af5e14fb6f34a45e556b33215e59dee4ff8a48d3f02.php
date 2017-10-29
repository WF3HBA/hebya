<?php

/* public/opportunity.html.twig */
class __TwigTemplate_9682fbffc90f654d79179d8a030a6da16de44a2081be12fb7d9a1ae65004f8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/opportunity.html.twig", 1);
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
        $__internal_aedce6d2b94039fcb5ef02d1ef127a0673cf2f633cc841a41343bfcf01f32541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedce6d2b94039fcb5ef02d1ef127a0673cf2f633cc841a41343bfcf01f32541->enter($__internal_aedce6d2b94039fcb5ef02d1ef127a0673cf2f633cc841a41343bfcf01f32541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/opportunity.html.twig"));

        $__internal_3a84d5653c6c1a5963e616676a94e895c0784afd56e2fc524ca5ee2af6a0bc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a84d5653c6c1a5963e616676a94e895c0784afd56e2fc524ca5ee2af6a0bc1d->enter($__internal_3a84d5653c6c1a5963e616676a94e895c0784afd56e2fc524ca5ee2af6a0bc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/opportunity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedce6d2b94039fcb5ef02d1ef127a0673cf2f633cc841a41343bfcf01f32541->leave($__internal_aedce6d2b94039fcb5ef02d1ef127a0673cf2f633cc841a41343bfcf01f32541_prof);

        
        $__internal_3a84d5653c6c1a5963e616676a94e895c0784afd56e2fc524ca5ee2af6a0bc1d->leave($__internal_3a84d5653c6c1a5963e616676a94e895c0784afd56e2fc524ca5ee2af6a0bc1d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a694aa8c1ec77fe6764945e543a5239b21f4ac37832793ecd45c561c21f4fffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a694aa8c1ec77fe6764945e543a5239b21f4ac37832793ecd45c561c21f4fffe->enter($__internal_a694aa8c1ec77fe6764945e543a5239b21f4ac37832793ecd45c561c21f4fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ddd576e7f32416f096b6710b627da3baf403ef6384c3353cea3d76111a7a1d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd576e7f32416f096b6710b627da3baf403ef6384c3353cea3d76111a7a1d08->enter($__internal_ddd576e7f32416f096b6710b627da3baf403ef6384c3353cea3d76111a7a1d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/opportunity/opportunity.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_ddd576e7f32416f096b6710b627da3baf403ef6384c3353cea3d76111a7a1d08->leave($__internal_ddd576e7f32416f096b6710b627da3baf403ef6384c3353cea3d76111a7a1d08_prof);

        
        $__internal_a694aa8c1ec77fe6764945e543a5239b21f4ac37832793ecd45c561c21f4fffe->leave($__internal_a694aa8c1ec77fe6764945e543a5239b21f4ac37832793ecd45c561c21f4fffe_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_38c3919fd08dedb3fc97b9d505e1aa5b87fe6f04b9ef02200922ec2229a6a773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c3919fd08dedb3fc97b9d505e1aa5b87fe6f04b9ef02200922ec2229a6a773->enter($__internal_38c3919fd08dedb3fc97b9d505e1aa5b87fe6f04b9ef02200922ec2229a6a773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_711fea2159c7c233d5d231b731db11361c6e0fe96f5c7f27174322e6a0be4d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711fea2159c7c233d5d231b731db11361c6e0fe96f5c7f27174322e6a0be4d13->enter($__internal_711fea2159c7c233d5d231b731db11361c6e0fe96f5c7f27174322e6a0be4d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/public/hosted_by_africa_opportunity.jpg"), "html", null, true);
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
        $this->loadTemplate("public/opportunityList.html.twig", "public/opportunity.html.twig", 103)->display($context);
        // line 104
        echo "                </div>
            
        </section>
        
    </main>
";
        
        $__internal_711fea2159c7c233d5d231b731db11361c6e0fe96f5c7f27174322e6a0be4d13->leave($__internal_711fea2159c7c233d5d231b731db11361c6e0fe96f5c7f27174322e6a0be4d13_prof);

        
        $__internal_38c3919fd08dedb3fc97b9d505e1aa5b87fe6f04b9ef02200922ec2229a6a773->leave($__internal_38c3919fd08dedb3fc97b9d505e1aa5b87fe6f04b9ef02200922ec2229a6a773_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8d4cbafb98abfd2579d361c7bde3ff6976821eacaf4287bce3f3f107615d889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4cbafb98abfd2579d361c7bde3ff6976821eacaf4287bce3f3f107615d889f->enter($__internal_8d4cbafb98abfd2579d361c7bde3ff6976821eacaf4287bce3f3f107615d889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4c970aed861e709d4f7f4c7d8d12fd5ea02f280d9af24118cc291844700aa46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c970aed861e709d4f7f4c7d8d12fd5ea02f280d9af24118cc291844700aa46c->enter($__internal_4c970aed861e709d4f7f4c7d8d12fd5ea02f280d9af24118cc291844700aa46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/opportunity.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4c970aed861e709d4f7f4c7d8d12fd5ea02f280d9af24118cc291844700aa46c->leave($__internal_4c970aed861e709d4f7f4c7d8d12fd5ea02f280d9af24118cc291844700aa46c_prof);

        
        $__internal_8d4cbafb98abfd2579d361c7bde3ff6976821eacaf4287bce3f3f107615d889f->leave($__internal_8d4cbafb98abfd2579d361c7bde3ff6976821eacaf4287bce3f3f107615d889f_prof);

    }

    public function getTemplateName()
    {
        return "public/opportunity.html.twig";
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
    <div class=\"parallax\" data-image=\"{{ asset('img/public/hosted_by_africa_opportunity.jpg') }}\"></div>
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
                     {% include 'public/opportunityList.html.twig' %}
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
    <script src=\"{{ asset('js/public/opportunity.js') }}\"></script>
{% endblock %}", "public/opportunity.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\opportunity.html.twig");
    }
}
