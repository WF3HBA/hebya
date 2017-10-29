<?php

/* public/service.html.twig */
class __TwigTemplate_5f4d77f85d146ac3ecb1a311eb9dea8dd5d54e2995ccc62340520870a3cb1493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/service.html.twig", 1);
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
        $__internal_8aee3f800377da0d7267850353ed3d7ff25eff9e57cd004dde02ec6c24110d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aee3f800377da0d7267850353ed3d7ff25eff9e57cd004dde02ec6c24110d74->enter($__internal_8aee3f800377da0d7267850353ed3d7ff25eff9e57cd004dde02ec6c24110d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/service.html.twig"));

        $__internal_fd3ed8fb1126f127443dd4f17423a42e1cf5588187aafb88f2d45f936df4eff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3ed8fb1126f127443dd4f17423a42e1cf5588187aafb88f2d45f936df4eff8->enter($__internal_fd3ed8fb1126f127443dd4f17423a42e1cf5588187aafb88f2d45f936df4eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aee3f800377da0d7267850353ed3d7ff25eff9e57cd004dde02ec6c24110d74->leave($__internal_8aee3f800377da0d7267850353ed3d7ff25eff9e57cd004dde02ec6c24110d74_prof);

        
        $__internal_fd3ed8fb1126f127443dd4f17423a42e1cf5588187aafb88f2d45f936df4eff8->leave($__internal_fd3ed8fb1126f127443dd4f17423a42e1cf5588187aafb88f2d45f936df4eff8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_568bb1ddf4e8a50c11550936e266c4fd18f474b519d4c6acb5aa557d566c546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568bb1ddf4e8a50c11550936e266c4fd18f474b519d4c6acb5aa557d566c546e->enter($__internal_568bb1ddf4e8a50c11550936e266c4fd18f474b519d4c6acb5aa557d566c546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9e038a0e54902483d4b151ddd0c32484da5c9926bcbc68496059bcac08237628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e038a0e54902483d4b151ddd0c32484da5c9926bcbc68496059bcac08237628->enter($__internal_9e038a0e54902483d4b151ddd0c32484da5c9926bcbc68496059bcac08237628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "         ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
         <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/services.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_9e038a0e54902483d4b151ddd0c32484da5c9926bcbc68496059bcac08237628->leave($__internal_9e038a0e54902483d4b151ddd0c32484da5c9926bcbc68496059bcac08237628_prof);

        
        $__internal_568bb1ddf4e8a50c11550936e266c4fd18f474b519d4c6acb5aa557d566c546e->leave($__internal_568bb1ddf4e8a50c11550936e266c4fd18f474b519d4c6acb5aa557d566c546e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef78153bd5aecaeb238056dddd57e0cb40c85f512532268404c257ea108a91a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef78153bd5aecaeb238056dddd57e0cb40c85f512532268404c257ea108a91a3->enter($__internal_ef78153bd5aecaeb238056dddd57e0cb40c85f512532268404c257ea108a91a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c4c6d8a5a5c8e1e34c046d275234fcd25fb852b6cbf284836a302300e345f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4c6d8a5a5c8e1e34c046d275234fcd25fb852b6cbf284836a302300e345f9c->enter($__internal_6c4c6d8a5a5c8e1e34c046d275234fcd25fb852b6cbf284836a302300e345f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/public/hosted_by_africa_services.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
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
                    <br><br>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center col-lg-offset-3\">
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\" role=\"button\" class=\"service-link-button\">Nos clients</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 text-center\">
                        <a href=\"";
        // line 61
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
        
        $__internal_6c4c6d8a5a5c8e1e34c046d275234fcd25fb852b6cbf284836a302300e345f9c->leave($__internal_6c4c6d8a5a5c8e1e34c046d275234fcd25fb852b6cbf284836a302300e345f9c_prof);

        
        $__internal_ef78153bd5aecaeb238056dddd57e0cb40c85f512532268404c257ea108a91a3->leave($__internal_ef78153bd5aecaeb238056dddd57e0cb40c85f512532268404c257ea108a91a3_prof);

    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1491a965dec10edd0d617cabbd53a23601b3d360a23c43cc6a8191731b5729a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1491a965dec10edd0d617cabbd53a23601b3d360a23c43cc6a8191731b5729a0->enter($__internal_1491a965dec10edd0d617cabbd53a23601b3d360a23c43cc6a8191731b5729a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_86ebb1e552c981d61208910461bf5d7285b3313e536faad5b1611993956e8442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ebb1e552c981d61208910461bf5d7285b3313e536faad5b1611993956e8442->enter($__internal_86ebb1e552c981d61208910461bf5d7285b3313e536faad5b1611993956e8442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 75
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var targetAjaxUrl = '";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_ajax");
        echo "';
    </script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/service.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_86ebb1e552c981d61208910461bf5d7285b3313e536faad5b1611993956e8442->leave($__internal_86ebb1e552c981d61208910461bf5d7285b3313e536faad5b1611993956e8442_prof);

        
        $__internal_1491a965dec10edd0d617cabbd53a23601b3d360a23c43cc6a8191731b5729a0->leave($__internal_1491a965dec10edd0d617cabbd53a23601b3d360a23c43cc6a8191731b5729a0_prof);

    }

    public function getTemplateName()
    {
        return "public/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 80,  228 => 78,  223 => 76,  218 => 75,  209 => 74,  187 => 61,  181 => 58,  169 => 48,  163 => 47,  157 => 45,  154 => 44,  150 => 43,  133 => 33,  127 => 31,  124 => 30,  120 => 29,  109 => 25,  103 => 23,  100 => 22,  96 => 21,  87 => 15,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
         {{ parent() }}   
         <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/services.css\") }}\"/>
{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/public/hosted_by_africa_services.jpg') }}\"></div>
    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
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
                    <br><br>
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
    <script src=\"{{ asset(\"js/public/service.js\") }}\"></script>
{% endblock %}
", "public/service.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\service.html.twig");
    }
}
