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
        $__internal_f7a4e043b1ef1c2a5155fa38f4188e79f346b87311cacae3f43c39eb04cc001c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a4e043b1ef1c2a5155fa38f4188e79f346b87311cacae3f43c39eb04cc001c->enter($__internal_f7a4e043b1ef1c2a5155fa38f4188e79f346b87311cacae3f43c39eb04cc001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $__internal_1f2807b169a650a417caf9713375be986f8f0ea99630d01df0254a2e732847e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2807b169a650a417caf9713375be986f8f0ea99630d01df0254a2e732847e2->enter($__internal_1f2807b169a650a417caf9713375be986f8f0ea99630d01df0254a2e732847e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a4e043b1ef1c2a5155fa38f4188e79f346b87311cacae3f43c39eb04cc001c->leave($__internal_f7a4e043b1ef1c2a5155fa38f4188e79f346b87311cacae3f43c39eb04cc001c_prof);

        
        $__internal_1f2807b169a650a417caf9713375be986f8f0ea99630d01df0254a2e732847e2->leave($__internal_1f2807b169a650a417caf9713375be986f8f0ea99630d01df0254a2e732847e2_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f4acf9d456badb6bcc6e2e3fb7be6130a88b8e8dd5c1e6e623e349b97efb13df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4acf9d456badb6bcc6e2e3fb7be6130a88b8e8dd5c1e6e623e349b97efb13df->enter($__internal_f4acf9d456badb6bcc6e2e3fb7be6130a88b8e8dd5c1e6e623e349b97efb13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c2318337e9d9646f5365b3858ab1bc64b9b745710955789e88d86ff4cd8da37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2318337e9d9646f5365b3858ab1bc64b9b745710955789e88d86ff4cd8da37e->enter($__internal_c2318337e9d9646f5365b3858ab1bc64b9b745710955789e88d86ff4cd8da37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_c2318337e9d9646f5365b3858ab1bc64b9b745710955789e88d86ff4cd8da37e->leave($__internal_c2318337e9d9646f5365b3858ab1bc64b9b745710955789e88d86ff4cd8da37e_prof);

        
        $__internal_f4acf9d456badb6bcc6e2e3fb7be6130a88b8e8dd5c1e6e623e349b97efb13df->leave($__internal_f4acf9d456badb6bcc6e2e3fb7be6130a88b8e8dd5c1e6e623e349b97efb13df_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2deba8065672e05560c71b84250afc9d61577534339b89379f3b6322e11c24b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deba8065672e05560c71b84250afc9d61577534339b89379f3b6322e11c24b0->enter($__internal_2deba8065672e05560c71b84250afc9d61577534339b89379f3b6322e11c24b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_46a8f93c9859bb73676673339e25943dba601606143d77f9a2a5a101e77f7e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a8f93c9859bb73676673339e25943dba601606143d77f9a2a5a101e77f7e6e->enter($__internal_46a8f93c9859bb73676673339e25943dba601606143d77f9a2a5a101e77f7e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"parallax\" data-image=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-innovator/hosted_by_africa_innovators.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
";
        // line 18
        echo "                    <div class=\"col-xs-12 text-center\">
                        <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos innovateurs"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row all-select-innovators\">
                    ";
        // line 34
        echo "                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">
                        <form id=\"filter-form\">
                            <select class=\"col-xs-12 innovators-select-pays\">
                                <option value=\"\">choissisez un pays</option>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 38, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 39
            echo "                                <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </select>
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
        // line 53
        $this->loadTemplate("innovator/innovatorList.html.twig", "innovator/innovator.html.twig", 53)->display($context);
        // line 54
        echo "                    </div>                  
                </div>                    
            </div>  
        </section>
    </main>
";
        
        $__internal_46a8f93c9859bb73676673339e25943dba601606143d77f9a2a5a101e77f7e6e->leave($__internal_46a8f93c9859bb73676673339e25943dba601606143d77f9a2a5a101e77f7e6e_prof);

        
        $__internal_2deba8065672e05560c71b84250afc9d61577534339b89379f3b6322e11c24b0->leave($__internal_2deba8065672e05560c71b84250afc9d61577534339b89379f3b6322e11c24b0_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b110b1da9dda3bbfc2aa176e18c496dc1a3646e8504152c12e09b05096b8f41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b110b1da9dda3bbfc2aa176e18c496dc1a3646e8504152c12e09b05096b8f41f->enter($__internal_b110b1da9dda3bbfc2aa176e18c496dc1a3646e8504152c12e09b05096b8f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9ee17d5cf754a26f9199cb090450d72d4cd25cc90db4da553aecba52ae9fc7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee17d5cf754a26f9199cb090450d72d4cd25cc90db4da553aecba52ae9fc7db->enter($__internal_9ee17d5cf754a26f9199cb090450d72d4cd25cc90db4da553aecba52ae9fc7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 65
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
     <script>
        var countrySelect = '";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_ajax");
        echo "';
        
    </script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/innovators/innovators.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

";
        
        $__internal_9ee17d5cf754a26f9199cb090450d72d4cd25cc90db4da553aecba52ae9fc7db->leave($__internal_9ee17d5cf754a26f9199cb090450d72d4cd25cc90db4da553aecba52ae9fc7db_prof);

        
        $__internal_b110b1da9dda3bbfc2aa176e18c496dc1a3646e8504152c12e09b05096b8f41f->leave($__internal_b110b1da9dda3bbfc2aa176e18c496dc1a3646e8504152c12e09b05096b8f41f_prof);

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
        return array (  174 => 71,  168 => 68,  163 => 66,  158 => 65,  149 => 64,  134 => 54,  132 => 53,  118 => 41,  109 => 39,  105 => 38,  99 => 34,  92 => 19,  89 => 18,  81 => 11,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
