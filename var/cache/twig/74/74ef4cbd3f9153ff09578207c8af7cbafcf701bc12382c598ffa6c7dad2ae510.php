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
        $__internal_5bc5b8cac51f35890311a7d146a0431444b3c7d56abaf54ee4e51ab72d207835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc5b8cac51f35890311a7d146a0431444b3c7d56abaf54ee4e51ab72d207835->enter($__internal_5bc5b8cac51f35890311a7d146a0431444b3c7d56abaf54ee4e51ab72d207835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "candidacy/candidacy.html.twig"));

        $__internal_d2f8be446b9168a14dfad37c10e21bc37adf5d55eac07fd5c29f0fb31f1b1110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f8be446b9168a14dfad37c10e21bc37adf5d55eac07fd5c29f0fb31f1b1110->enter($__internal_d2f8be446b9168a14dfad37c10e21bc37adf5d55eac07fd5c29f0fb31f1b1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "candidacy/candidacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc5b8cac51f35890311a7d146a0431444b3c7d56abaf54ee4e51ab72d207835->leave($__internal_5bc5b8cac51f35890311a7d146a0431444b3c7d56abaf54ee4e51ab72d207835_prof);

        
        $__internal_d2f8be446b9168a14dfad37c10e21bc37adf5d55eac07fd5c29f0fb31f1b1110->leave($__internal_d2f8be446b9168a14dfad37c10e21bc37adf5d55eac07fd5c29f0fb31f1b1110_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e5dfa453a4954e61ccb724b801df265ad4ad8633861b72d8e2f94ed39088c846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dfa453a4954e61ccb724b801df265ad4ad8633861b72d8e2f94ed39088c846->enter($__internal_e5dfa453a4954e61ccb724b801df265ad4ad8633861b72d8e2f94ed39088c846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b9e862742d1319282dca8c9c933957973e80e2795d47ef863070a0ba7f6ef522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e862742d1319282dca8c9c933957973e80e2795d47ef863070a0ba7f6ef522->enter($__internal_b9e862742d1319282dca8c9c933957973e80e2795d47ef863070a0ba7f6ef522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/candidacy/candidacy.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_b9e862742d1319282dca8c9c933957973e80e2795d47ef863070a0ba7f6ef522->leave($__internal_b9e862742d1319282dca8c9c933957973e80e2795d47ef863070a0ba7f6ef522_prof);

        
        $__internal_e5dfa453a4954e61ccb724b801df265ad4ad8633861b72d8e2f94ed39088c846->leave($__internal_e5dfa453a4954e61ccb724b801df265ad4ad8633861b72d8e2f94ed39088c846_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_32debf960736c36a1cc8c7a7eea4863bb05a211bf20a9d03c2932ad7508aa0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32debf960736c36a1cc8c7a7eea4863bb05a211bf20a9d03c2932ad7508aa0d4->enter($__internal_32debf960736c36a1cc8c7a7eea4863bb05a211bf20a9d03c2932ad7508aa0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a9a100e52512c19d8dd66852eaf0fc56c93b9166e86c60ea5db4563acc45a0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a100e52512c19d8dd66852eaf0fc56c93b9166e86c60ea5db4563acc45a0cc->enter($__internal_a9a100e52512c19d8dd66852eaf0fc56c93b9166e86c60ea5db4563acc45a0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <main>
        <section class=\"container\">
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
        
        $__internal_a9a100e52512c19d8dd66852eaf0fc56c93b9166e86c60ea5db4563acc45a0cc->leave($__internal_a9a100e52512c19d8dd66852eaf0fc56c93b9166e86c60ea5db4563acc45a0cc_prof);

        
        $__internal_32debf960736c36a1cc8c7a7eea4863bb05a211bf20a9d03c2932ad7508aa0d4->leave($__internal_32debf960736c36a1cc8c7a7eea4863bb05a211bf20a9d03c2932ad7508aa0d4_prof);

    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0ae310496d32660266e901c7c0e63105daa162ed84eff48ae2c9e97b4af55e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae310496d32660266e901c7c0e63105daa162ed84eff48ae2c9e97b4af55e67->enter($__internal_0ae310496d32660266e901c7c0e63105daa162ed84eff48ae2c9e97b4af55e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4c62c0720a4c63d6954281edd553b9caddbe3e43677264d9cc009c255f3255f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c62c0720a4c63d6954281edd553b9caddbe3e43677264d9cc009c255f3255f3->enter($__internal_4c62c0720a4c63d6954281edd553b9caddbe3e43677264d9cc009c255f3255f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_4c62c0720a4c63d6954281edd553b9caddbe3e43677264d9cc009c255f3255f3->leave($__internal_4c62c0720a4c63d6954281edd553b9caddbe3e43677264d9cc009c255f3255f3_prof);

        
        $__internal_0ae310496d32660266e901c7c0e63105daa162ed84eff48ae2c9e97b4af55e67->leave($__internal_0ae310496d32660266e901c7c0e63105daa162ed84eff48ae2c9e97b4af55e67_prof);

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
        <section class=\"container\">
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
