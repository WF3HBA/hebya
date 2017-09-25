<?php

/* service/service.html.twig */
class __TwigTemplate_53bc5eaea6ca1d36a79d63a626b4f9d7b06bf17e099ebc5be4d92ce920ed905a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "service/service.html.twig", 1);
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
        $__internal_f3037ab8fa3658c61c933e26e5849a5f6ab1f0665eb8b47920037ec140aa862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3037ab8fa3658c61c933e26e5849a5f6ab1f0665eb8b47920037ec140aa862a->enter($__internal_f3037ab8fa3658c61c933e26e5849a5f6ab1f0665eb8b47920037ec140aa862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        $__internal_22105927728b4d283bcac00702a27f76cb1a8a5a328fda85c0324af37be3262d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22105927728b4d283bcac00702a27f76cb1a8a5a328fda85c0324af37be3262d->enter($__internal_22105927728b4d283bcac00702a27f76cb1a8a5a328fda85c0324af37be3262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3037ab8fa3658c61c933e26e5849a5f6ab1f0665eb8b47920037ec140aa862a->leave($__internal_f3037ab8fa3658c61c933e26e5849a5f6ab1f0665eb8b47920037ec140aa862a_prof);

        
        $__internal_22105927728b4d283bcac00702a27f76cb1a8a5a328fda85c0324af37be3262d->leave($__internal_22105927728b4d283bcac00702a27f76cb1a8a5a328fda85c0324af37be3262d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e4b2ebd16b0f2ad67816ecfe6c53ebfcf5ce94d78bba142a514fbe8d429c5e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b2ebd16b0f2ad67816ecfe6c53ebfcf5ce94d78bba142a514fbe8d429c5e66->enter($__internal_e4b2ebd16b0f2ad67816ecfe6c53ebfcf5ce94d78bba142a514fbe8d429c5e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_664376dc386aba43f2d6caf990823910a9f8e58d2ec91a3becfd935dd370ab20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664376dc386aba43f2d6caf990823910a9f8e58d2ec91a3becfd935dd370ab20->enter($__internal_664376dc386aba43f2d6caf990823910a9f8e58d2ec91a3becfd935dd370ab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "         ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
         <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/services/services.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_664376dc386aba43f2d6caf990823910a9f8e58d2ec91a3becfd935dd370ab20->leave($__internal_664376dc386aba43f2d6caf990823910a9f8e58d2ec91a3becfd935dd370ab20_prof);

        
        $__internal_e4b2ebd16b0f2ad67816ecfe6c53ebfcf5ce94d78bba142a514fbe8d429c5e66->leave($__internal_e4b2ebd16b0f2ad67816ecfe6c53ebfcf5ce94d78bba142a514fbe8d429c5e66_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e5747bd1269d305a53e84c477f3b0781f9552dfbaa4bb8cdee07b4e8930584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5747bd1269d305a53e84c477f3b0781f9552dfbaa4bb8cdee07b4e8930584b->enter($__internal_8e5747bd1269d305a53e84c477f3b0781f9552dfbaa4bb8cdee07b4e8930584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_913b0df8c868546c2faa55962373b3476675a279f53c53a027003b8e399e697d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913b0df8c868546c2faa55962373b3476675a279f53c53a027003b8e399e697d->enter($__internal_913b0df8c868546c2faa55962373b3476675a279f53c53a027003b8e399e697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/services/hosted_by_africa_services.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center service-profil-title\">
                        <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos services"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row\">   
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 col-lg-offset-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 22
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "start-up")) {
                // line 23
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idService", array()), "html", null, true);
                echo "
                                ";
            }
            // line 25
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">Start-up</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 30
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "investor")) {
                // line 31
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idService", array()), "html", null, true);
                echo "
                                ";
            }
            // line 33
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">Investisseur</a>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 main-body-content\">
                        <div id=\"service-content\">
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 44
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "target", array()) == "introduction")) {
                // line 45
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "content", array());
                echo "
                                ";
            }
            // line 47
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center col-lg-offset-3\">
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\" role=\"button\" class=\"service-link-button\">Nos clients</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\" role=\"button\" class=\"service-link-button\">Nos innovateurs</a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3 text-center\">
                        <a href=\"http://localhost/hebya/web/index_dev.php/contact\" role=\"button\" class=\"service-contact-button\">Nous contacter</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
";
        
        $__internal_913b0df8c868546c2faa55962373b3476675a279f53c53a027003b8e399e697d->leave($__internal_913b0df8c868546c2faa55962373b3476675a279f53c53a027003b8e399e697d_prof);

        
        $__internal_8e5747bd1269d305a53e84c477f3b0781f9552dfbaa4bb8cdee07b4e8930584b->leave($__internal_8e5747bd1269d305a53e84c477f3b0781f9552dfbaa4bb8cdee07b4e8930584b_prof);

    }

    // line 73
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6307324367655cd818e2835e309f4ac6e2626840bfce2fe1a403ba7141bb7fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6307324367655cd818e2835e309f4ac6e2626840bfce2fe1a403ba7141bb7fb3->enter($__internal_6307324367655cd818e2835e309f4ac6e2626840bfce2fe1a403ba7141bb7fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_98c91618e69745754eaa6c44eb564bedf88ec90351dbcd3adc82f776abdebd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c91618e69745754eaa6c44eb564bedf88ec90351dbcd3adc82f776abdebd54->enter($__internal_98c91618e69745754eaa6c44eb564bedf88ec90351dbcd3adc82f776abdebd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var targetAjaxUrl = '";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_ajax");
        echo "';
    </script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/service/service.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_98c91618e69745754eaa6c44eb564bedf88ec90351dbcd3adc82f776abdebd54->leave($__internal_98c91618e69745754eaa6c44eb564bedf88ec90351dbcd3adc82f776abdebd54_prof);

        
        $__internal_6307324367655cd818e2835e309f4ac6e2626840bfce2fe1a403ba7141bb7fb3->leave($__internal_6307324367655cd818e2835e309f4ac6e2626840bfce2fe1a403ba7141bb7fb3_prof);

    }

    public function getTemplateName()
    {
        return "service/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 79,  227 => 77,  222 => 75,  217 => 74,  208 => 73,  186 => 60,  180 => 57,  169 => 48,  163 => 47,  157 => 45,  154 => 44,  150 => 43,  133 => 33,  127 => 31,  124 => 30,  120 => 29,  109 => 25,  103 => 23,  100 => 22,  96 => 21,  87 => 15,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
         {{ parent() }}   
         <link rel=\"stylesheet\" href=\"{{ asset(\"css/services/services.css\") }}\"/>
{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/services/hosted_by_africa_services.jpg') }}\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center service-profil-title\">
                        <h1>{{ \"Nos services\"|upper }}</h1>
                    </div>
                </div>
                <div class=\"row\">   
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 col-lg-offset-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           {% for service in services %}
                                {% if service.target == \"start-up\" %}
                                    {{ service.idService }}
                                {% endif %}
                            {% endfor %}\">Start-up</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           {% for service in services %}
                                {% if service.target == \"investor\" %}
                                    {{ service.idService }}
                                {% endif %}
                            {% endfor %}\">Investisseur</a>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 main-body-content\">
                        <div id=\"service-content\">
                            {% for service in services %}
                                {% if service.target == \"introduction\" %}
                                    {{ service.content|raw }}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=\"service-main-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center col-lg-offset-3\">
                        <a href=\"{{ path('clients') }}\" role=\"button\" class=\"service-link-button\">Nos clients</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"{{ path('innovateurs') }}\" role=\"button\" class=\"service-link-button\">Nos innovateurs</a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3 text-center\">
                        <a href=\"http://localhost/hebya/web/index_dev.php/contact\" role=\"button\" class=\"service-contact-button\">Nous contacter</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
    <script>
        var targetAjaxUrl = '{{ path('services_ajax') }}';
    </script>
    <script src=\"{{ asset(\"js/service/service.js\") }}\"></script>
{% endblock %}
", "service/service.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\service\\service.html.twig");
    }
}
