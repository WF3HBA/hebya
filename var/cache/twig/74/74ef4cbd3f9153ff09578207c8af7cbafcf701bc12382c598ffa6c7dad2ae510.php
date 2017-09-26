<?php

/* candidacy/candidacy.html.twig */
class __TwigTemplate_744a6919a7e8d5add17b6574c0779aa25098a01fc365c0679f1276f0ee54bb01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "candidacy/candidacy.html.twig", 1);
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
        $__internal_5aa914a7974fa35bec2e5787d4b7909f50797884eeb7ac438f6f1913852b4986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa914a7974fa35bec2e5787d4b7909f50797884eeb7ac438f6f1913852b4986->enter($__internal_5aa914a7974fa35bec2e5787d4b7909f50797884eeb7ac438f6f1913852b4986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "candidacy/candidacy.html.twig"));

        $__internal_91ac7a32be16a55fe3d56c439314b4a1936b390be2f8258b39b405b67505ce20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ac7a32be16a55fe3d56c439314b4a1936b390be2f8258b39b405b67505ce20->enter($__internal_91ac7a32be16a55fe3d56c439314b4a1936b390be2f8258b39b405b67505ce20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "candidacy/candidacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa914a7974fa35bec2e5787d4b7909f50797884eeb7ac438f6f1913852b4986->leave($__internal_5aa914a7974fa35bec2e5787d4b7909f50797884eeb7ac438f6f1913852b4986_prof);

        
        $__internal_91ac7a32be16a55fe3d56c439314b4a1936b390be2f8258b39b405b67505ce20->leave($__internal_91ac7a32be16a55fe3d56c439314b4a1936b390be2f8258b39b405b67505ce20_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2f2eb63adafda3812c507237b1cd0f639a148caa9ec4cbf4ccda1d62da0734d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2eb63adafda3812c507237b1cd0f639a148caa9ec4cbf4ccda1d62da0734d8->enter($__internal_2f2eb63adafda3812c507237b1cd0f639a148caa9ec4cbf4ccda1d62da0734d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_759ec3d453f569249f496cee2f741bde508394fa08ab7ff0f7be34196ce56868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759ec3d453f569249f496cee2f741bde508394fa08ab7ff0f7be34196ce56868->enter($__internal_759ec3d453f569249f496cee2f741bde508394fa08ab7ff0f7be34196ce56868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/candidacy/candidacy.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_759ec3d453f569249f496cee2f741bde508394fa08ab7ff0f7be34196ce56868->leave($__internal_759ec3d453f569249f496cee2f741bde508394fa08ab7ff0f7be34196ce56868_prof);

        
        $__internal_2f2eb63adafda3812c507237b1cd0f639a148caa9ec4cbf4ccda1d62da0734d8->leave($__internal_2f2eb63adafda3812c507237b1cd0f639a148caa9ec4cbf4ccda1d62da0734d8_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_950fd843fec13fc7ef3a2601f47db4023e3d3e3c7554d5da753194a08a6c3d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950fd843fec13fc7ef3a2601f47db4023e3d3e3c7554d5da753194a08a6c3d23->enter($__internal_950fd843fec13fc7ef3a2601f47db4023e3d3e3c7554d5da753194a08a6c3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ce629dfa3698fd9029da0c1ed0d0e724666e3a3e3c30e4925fb1cba910731ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce629dfa3698fd9029da0c1ed0d0e724666e3a3e3c30e4925fb1cba910731ca->enter($__internal_6ce629dfa3698fd9029da0c1ed0d0e724666e3a3e3c30e4925fb1cba910731ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <main>
        <section class=\"container candidacy\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "candidatures"), "html", null, true);
        echo "</h1>
                </div>              
            </div>
            
                
            <div class=\"row\">
                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1\">
                            ";
        // line 21
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 21, $this->getSourceContext()); })())) {
            // line 22
            echo "                            <div class=\"row\">
                                <div class=\"col-sm-4\">Poste : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 23, $this->getSourceContext()); })()), "position", array()), "html", null, true);
            echo " </div>
                                <div class=\"col-sm-4\">Réference : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 24, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
            echo "</div>
                            </div>
                            ";
        }
        // line 27
        echo "                            <div class=\"col-10\">

                                ";
        // line 29
        if ( !(isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "                                <label for=\"position\" class=\"col-2 col-form-label\">Poste recherché</label>   
                                ";
        }
        // line 31
        echo "   
                                <input name=\"position\" class=\"form-control input-md ";
        // line 32
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 32, $this->getSourceContext()); })())) {
            echo "hidden";
        }
        echo "\" ";
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 32, $this->getSourceContext()); })())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 32, $this->getSourceContext()); })()), "position", array()), "html", null, true);
            echo " ";
        }
        echo "\">

                            </div>
                            
                            <div class=\"col-10\">
                                
                            
                                <input name=\"idopportunity\" class=\"form-control input-md hidden\" value=\"";
        // line 39
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 39, $this->getSourceContext()); })())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 39, $this->getSourceContext()); })()), "idopportunity", array()), "html", null, true);
        } else {
            echo "1";
        }
        echo "\">
                                
                            </div>
                            
                            <label for=\"firstname\" class=\"col-2 col-form-label\"> Nom </label>
                            <div class=\"col-10\">
                                <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
                            </div>


                            <label for=\"lastname\" class=\"col-2 col-form-label\">Prenom</label>
                            <div class=\"col-10\">
                                <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"Prenom\" class=\"form-control input-md\">
                            </div>


                            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
                            <div class=\"col-10\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                            </div>


                            <label for=\"phone\" class=\"col-2 col-form-label\">Téléphone</label>
                            <div class=\"col-10\">
                                <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Téléphone\" class=\"form-control input-md\">
                            </div>


                            <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
                            <div class=\"col-10\">
                                <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\">
                            </div>

                            <label for=\"country\" class=\"col-2 col-form-label\">Pays</label>
                            <div class=\"col-10\">
                                <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
                            </div>
                            
                            <div class=\"form-group\">
                                <label for=\"cv\"> CV </label>
                                <input type=\"file\" name=\"cv\" id=\"cv\" >
                                <small id=\"cv\" class=\"form-text text-muted\">Veuillez joindre un cv.</small>
                            </div>
                            
                            
                            <div class=\"form-group\">
                                <label for=\"coverletter\"> Lettre de motivation </label>
                                <input type=\"file\" name=\"coverletter\" id=\"coverletter\">
                                <small id=\"coverletter\" class=\"form-text text-muted\">Veuillez joindre une lettre de motivation.</small>
                            </div>
                            
                            <div class=\"col-10\">
                                <input class=\"btn btn-primary boutton-form-candidacy\" type=\"submit\" value=\"Postuler\">
                            </div>
                        </div>
                   
                </form>
            </div>
        </section>
    </main>
";
        
        $__internal_6ce629dfa3698fd9029da0c1ed0d0e724666e3a3e3c30e4925fb1cba910731ca->leave($__internal_6ce629dfa3698fd9029da0c1ed0d0e724666e3a3e3c30e4925fb1cba910731ca_prof);

        
        $__internal_950fd843fec13fc7ef3a2601f47db4023e3d3e3c7554d5da753194a08a6c3d23->leave($__internal_950fd843fec13fc7ef3a2601f47db4023e3d3e3c7554d5da753194a08a6c3d23_prof);

    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3dabff0fb5d3efa08f7102b135fe64a8c691aa071a549d3c43002608c5c85eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dabff0fb5d3efa08f7102b135fe64a8c691aa071a549d3c43002608c5c85eef->enter($__internal_3dabff0fb5d3efa08f7102b135fe64a8c691aa071a549d3c43002608c5c85eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3b92c441a9ae6b4ca58e02d62a2802708bde43e57cbce361793351e0df9bc6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b92c441a9ae6b4ca58e02d62a2802708bde43e57cbce361793351e0df9bc6e5->enter($__internal_3b92c441a9ae6b4ca58e02d62a2802708bde43e57cbce361793351e0df9bc6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
       
    </script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidacy/candidacy.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3b92c441a9ae6b4ca58e02d62a2802708bde43e57cbce361793351e0df9bc6e5->leave($__internal_3b92c441a9ae6b4ca58e02d62a2802708bde43e57cbce361793351e0df9bc6e5_prof);

        
        $__internal_3dabff0fb5d3efa08f7102b135fe64a8c691aa071a549d3c43002608c5c85eef->leave($__internal_3dabff0fb5d3efa08f7102b135fe64a8c691aa071a549d3c43002608c5c85eef_prof);

    }

    public function getTemplateName()
    {
        return "candidacy/candidacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 106,  224 => 102,  215 => 101,  140 => 39,  122 => 32,  119 => 31,  115 => 30,  113 => 29,  109 => 27,  103 => 24,  99 => 23,  96 => 22,  94 => 21,  83 => 13,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/candidacy/candidacy.css\") }}\"/>
{% endblock %}

{% block content %}
    <main>
        <section class=\"container candidacy\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <h1>{{ \"candidatures\"|upper }}</h1>
                </div>              
            </div>
            
                
            <div class=\"row\">
                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1\">
                            {% if opportunity %}
                            <div class=\"row\">
                                <div class=\"col-sm-4\">Poste : {{ opportunity.position }} </div>
                                <div class=\"col-sm-4\">Réference : {{ opportunity.reference }}</div>
                            </div>
                            {% endif %}
                            <div class=\"col-10\">

                                {% if not opportunity %}
                                <label for=\"position\" class=\"col-2 col-form-label\">Poste recherché</label>   
                                {% endif %}   
                                <input name=\"position\" class=\"form-control input-md {% if opportunity %}hidden{% endif %}\" {% if opportunity %}value=\"{{ opportunity.position }} {% endif %}\">

                            </div>
                            
                            <div class=\"col-10\">
                                
                            
                                <input name=\"idopportunity\" class=\"form-control input-md hidden\" value=\"{% if opportunity %}{{ opportunity.idopportunity }}{% else %}1{% endif %}\">
                                
                            </div>
                            
                            <label for=\"firstname\" class=\"col-2 col-form-label\"> Nom </label>
                            <div class=\"col-10\">
                                <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
                            </div>


                            <label for=\"lastname\" class=\"col-2 col-form-label\">Prenom</label>
                            <div class=\"col-10\">
                                <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"Prenom\" class=\"form-control input-md\">
                            </div>


                            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
                            <div class=\"col-10\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                            </div>


                            <label for=\"phone\" class=\"col-2 col-form-label\">Téléphone</label>
                            <div class=\"col-10\">
                                <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Téléphone\" class=\"form-control input-md\">
                            </div>


                            <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
                            <div class=\"col-10\">
                                <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\">
                            </div>

                            <label for=\"country\" class=\"col-2 col-form-label\">Pays</label>
                            <div class=\"col-10\">
                                <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
                            </div>
                            
                            <div class=\"form-group\">
                                <label for=\"cv\"> CV </label>
                                <input type=\"file\" name=\"cv\" id=\"cv\" >
                                <small id=\"cv\" class=\"form-text text-muted\">Veuillez joindre un cv.</small>
                            </div>
                            
                            
                            <div class=\"form-group\">
                                <label for=\"coverletter\"> Lettre de motivation </label>
                                <input type=\"file\" name=\"coverletter\" id=\"coverletter\">
                                <small id=\"coverletter\" class=\"form-text text-muted\">Veuillez joindre une lettre de motivation.</small>
                            </div>
                            
                            <div class=\"col-10\">
                                <input class=\"btn btn-primary boutton-form-candidacy\" type=\"submit\" value=\"Postuler\">
                            </div>
                        </div>
                   
                </form>
            </div>
        </section>
    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script>
       
    </script>
    <script src=\"{{ asset('js/candidacy/candidacy.js') }}\"></script>
{% endblock %}
", "candidacy/candidacy.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\candidacy\\candidacy.html.twig");
    }
}
