<?php

/* innovator/innovator.html.twig */
class __TwigTemplate_99c526c0e83a107eb8e590c0311dbea2fc16d277f75053e337c79c9f220505b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "innovator/innovator.html.twig", 1);
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
        $__internal_a70bb6194e6fadb869263ad08c7cf860c92c10a969765f7b20ce624c3156de09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70bb6194e6fadb869263ad08c7cf860c92c10a969765f7b20ce624c3156de09->enter($__internal_a70bb6194e6fadb869263ad08c7cf860c92c10a969765f7b20ce624c3156de09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $__internal_2b0434a0c0c474d2b9251a5429cae98192d6f968aa50881f1fad1668960d781d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0434a0c0c474d2b9251a5429cae98192d6f968aa50881f1fad1668960d781d->enter($__internal_2b0434a0c0c474d2b9251a5429cae98192d6f968aa50881f1fad1668960d781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a70bb6194e6fadb869263ad08c7cf860c92c10a969765f7b20ce624c3156de09->leave($__internal_a70bb6194e6fadb869263ad08c7cf860c92c10a969765f7b20ce624c3156de09_prof);

        
        $__internal_2b0434a0c0c474d2b9251a5429cae98192d6f968aa50881f1fad1668960d781d->leave($__internal_2b0434a0c0c474d2b9251a5429cae98192d6f968aa50881f1fad1668960d781d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5872be6309331bf5c93d915840c748d6fc33af946c6c23c8bdeb579f996b09ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5872be6309331bf5c93d915840c748d6fc33af946c6c23c8bdeb579f996b09ac->enter($__internal_5872be6309331bf5c93d915840c748d6fc33af946c6c23c8bdeb579f996b09ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_40ac3fe2c06181ca7d4cee35ee0a5c0423a92f9fd88f3d17acd53c4fd2ec8120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ac3fe2c06181ca7d4cee35ee0a5c0423a92f9fd88f3d17acd53c4fd2ec8120->enter($__internal_40ac3fe2c06181ca7d4cee35ee0a5c0423a92f9fd88f3d17acd53c4fd2ec8120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_40ac3fe2c06181ca7d4cee35ee0a5c0423a92f9fd88f3d17acd53c4fd2ec8120->leave($__internal_40ac3fe2c06181ca7d4cee35ee0a5c0423a92f9fd88f3d17acd53c4fd2ec8120_prof);

        
        $__internal_5872be6309331bf5c93d915840c748d6fc33af946c6c23c8bdeb579f996b09ac->leave($__internal_5872be6309331bf5c93d915840c748d6fc33af946c6c23c8bdeb579f996b09ac_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_30ba144482029c44b476b09e7088d8b295584970bbd7ae29f508ca457f5e6c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ba144482029c44b476b09e7088d8b295584970bbd7ae29f508ca457f5e6c36->enter($__internal_30ba144482029c44b476b09e7088d8b295584970bbd7ae29f508ca457f5e6c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3aca83ec4d09773f48a59dcae1943248b30bb4254e73df48bcbdd62e1dfa9f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aca83ec4d09773f48a59dcae1943248b30bb4254e73df48bcbdd62e1dfa9f90->enter($__internal_3aca83ec4d09773f48a59dcae1943248b30bb4254e73df48bcbdd62e1dfa9f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <div class=\"parallax\" data-image=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-innovator/hosted_by_africa_innovators.jpg"), "html", null, true);
        echo "\"></div>

    <main>

        <section id=\"innovators-header\">

            <div class=\"container\">

                <div class=\"row\">

";
        // line 26
        echo "
                    <div class=\"col-xs-12 text-center\">

                        <h1>";
        // line 29
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos innovateurs"), "html", null, true);
        echo "</h1>

                    </div>

                </div>

                <div class=\"row all-select-innovators\">

                    ";
        // line 58
        echo "
                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">

                        <form id=\"filter-form\">

                            <select class=\"col-xs-12 innovators-select-pays\">

                                <option value=\"\">choissisez un pays</option>

                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 67, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 68
            echo "
                                <option>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                            </select>

                        </form>

                    </div>

                    

                </div>

            </div>

        </section><br><br>

              

        <section id=\"innovators-body\">

            <div class=\"container\">

                <div class=\"row\">

                    <div id=\"innovator-list\">

                        ";
        // line 97
        $this->loadTemplate("innovator/innovatorList.html.twig", "innovator/innovator.html.twig", 97)->display($context);
        // line 98
        echo "
                    </div>                  

                </div>                    

            </div>  

        </section>

    </main>

";
        
        $__internal_3aca83ec4d09773f48a59dcae1943248b30bb4254e73df48bcbdd62e1dfa9f90->leave($__internal_3aca83ec4d09773f48a59dcae1943248b30bb4254e73df48bcbdd62e1dfa9f90_prof);

        
        $__internal_30ba144482029c44b476b09e7088d8b295584970bbd7ae29f508ca457f5e6c36->leave($__internal_30ba144482029c44b476b09e7088d8b295584970bbd7ae29f508ca457f5e6c36_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_eb423b67de77b3fe00ce2095ec10ad9728ce8e20d1d4c54848d9644900122c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb423b67de77b3fe00ce2095ec10ad9728ce8e20d1d4c54848d9644900122c47->enter($__internal_eb423b67de77b3fe00ce2095ec10ad9728ce8e20d1d4c54848d9644900122c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_a7af05a86d09df5b705c6f10af29144e963a5fe8972cb090d55ca598a13ff480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7af05a86d09df5b705c6f10af29144e963a5fe8972cb090d55ca598a13ff480->enter($__internal_a7af05a86d09df5b705c6f10af29144e963a5fe8972cb090d55ca598a13ff480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 112
        echo "
     ";
        // line 113
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

     <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>

     <script>

        var countrySelect = '";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_ajax");
        echo "';

        

    </script>

    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/innovators/innovators.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

";
        
        $__internal_a7af05a86d09df5b705c6f10af29144e963a5fe8972cb090d55ca598a13ff480->leave($__internal_a7af05a86d09df5b705c6f10af29144e963a5fe8972cb090d55ca598a13ff480_prof);

        
        $__internal_eb423b67de77b3fe00ce2095ec10ad9728ce8e20d1d4c54848d9644900122c47->leave($__internal_eb423b67de77b3fe00ce2095ec10ad9728ce8e20d1d4c54848d9644900122c47_prof);

    }

    public function getTemplateName()
    {
        return "innovator/innovator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 125,  214 => 119,  207 => 115,  202 => 113,  199 => 112,  190 => 111,  169 => 98,  167 => 97,  140 => 72,  131 => 69,  128 => 68,  124 => 67,  113 => 58,  102 => 29,  97 => 26,  84 => 13,  81 => 12,  72 => 11,  59 => 7,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset(\"css/innovators/innovators.css\") }}\"/>

{% endblock %}

{% block content %}

    <div class=\"parallax\" data-image=\"{{ asset('img/img-innovator/hosted_by_africa_innovators.jpg') }}\"></div>

    <main>

        <section id=\"innovators-header\">

            <div class=\"container\">

                <div class=\"row\">

{#                  <div id=\"slide1\" style=\"background-image:url(\"../images/innovateurs.jpg\"); background-repeat: none;\">

                    </div>#}

                    <div class=\"col-xs-12 text-center\">

                        <h1>{{ \"Nos innovateurs\"|upper }}</h1>

                    </div>

                </div>

                <div class=\"row all-select-innovators\">

                    {#<div class=\"col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 innovators-select-theme\">

                      

                            <select class=\"col-xs-12\">

                                <option value=\"\">Theme</option>

                                <option>Education</option>

                                <option>Santé</option>

                                <option>Assurance</option>

                                <option>Comptabilité</option>

                                <option>Numérisation GED</option>

                            </select>

                    </div>#}

                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">

                        <form id=\"filter-form\">

                            <select class=\"col-xs-12 innovators-select-pays\">

                                <option value=\"\">choissisez un pays</option>

                                {% for country in countries %}

                                <option>{{ country.name }}</option>

                                {% endfor %}

                            </select>

                        </form>

                    </div>

                    

                </div>

            </div>

        </section><br><br>

              

        <section id=\"innovators-body\">

            <div class=\"container\">

                <div class=\"row\">

                    <div id=\"innovator-list\">

                        {% include 'innovator/innovatorList.html.twig' %}

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

        var countrySelect = '{{ path('provider_ajax') }}';

        

    </script>

    <script src=\"{{ asset(\"js/innovators/innovators.js\") }}\"></script>

    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

{% endblock %}", "innovator/innovator.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovator.html.twig");
    }
}
