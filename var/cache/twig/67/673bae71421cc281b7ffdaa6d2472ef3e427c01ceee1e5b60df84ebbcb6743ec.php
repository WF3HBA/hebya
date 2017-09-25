<?php

/* service/service.html.twig */
class __TwigTemplate_7fe384e7936b205c78561f8bc7d1258b9e71f2b1071882ab747e5601b92ed49c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "         ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
         <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/services/services.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <main>
        <section id=\"service-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center service-profil-title\">
                        <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos services"), "html", null, true);
        echo "</h1>
                        <span id=\"service-subtitle\">Selon votre profil</span>
                    </div>
                </div>
                <div class=\"row\">   
                    <div class=\"col-xs-12 col-sm-6 col-lg-3 col-lg-offset-3 text-center\">
                        <a href=\"btn btn-default\" role=\"button\" class=\"service-profil-button\" data-id=\"
                           ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
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
    }

    // line 73
    public function block_javascript($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        var targetAjaxUrl = '";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_ajax");
        echo "';
    </script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/service/service.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  184 => 78,  179 => 76,  173 => 74,  170 => 73,  154 => 60,  148 => 57,  137 => 48,  131 => 47,  125 => 45,  122 => 44,  118 => 43,  101 => 33,  95 => 31,  92 => 30,  88 => 29,  77 => 25,  71 => 23,  68 => 22,  64 => 21,  54 => 14,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "service/service.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\service\\service.html.twig");
    }
}
