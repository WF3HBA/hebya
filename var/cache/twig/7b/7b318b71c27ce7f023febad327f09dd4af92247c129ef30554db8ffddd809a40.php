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
        $__internal_63fc71ed4a15a868ebbe7f5fa612c7f9a4d9017eb41477e73aaa31674d424214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fc71ed4a15a868ebbe7f5fa612c7f9a4d9017eb41477e73aaa31674d424214->enter($__internal_63fc71ed4a15a868ebbe7f5fa612c7f9a4d9017eb41477e73aaa31674d424214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $__internal_d52c7455c01473d5e008b47af74e3abac9e691ec47ea38c7fb7b233ed4372b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52c7455c01473d5e008b47af74e3abac9e691ec47ea38c7fb7b233ed4372b7e->enter($__internal_d52c7455c01473d5e008b47af74e3abac9e691ec47ea38c7fb7b233ed4372b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innovator/innovator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63fc71ed4a15a868ebbe7f5fa612c7f9a4d9017eb41477e73aaa31674d424214->leave($__internal_63fc71ed4a15a868ebbe7f5fa612c7f9a4d9017eb41477e73aaa31674d424214_prof);

        
        $__internal_d52c7455c01473d5e008b47af74e3abac9e691ec47ea38c7fb7b233ed4372b7e->leave($__internal_d52c7455c01473d5e008b47af74e3abac9e691ec47ea38c7fb7b233ed4372b7e_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bd642687ef43336e1b1ce0112c6121cfb34cb26e416f29122b62697df5bd959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd642687ef43336e1b1ce0112c6121cfb34cb26e416f29122b62697df5bd959c->enter($__internal_bd642687ef43336e1b1ce0112c6121cfb34cb26e416f29122b62697df5bd959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_94d8df7e7377b48870b9a8164342b57ff90e003a97336c96c9b3985717532669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d8df7e7377b48870b9a8164342b57ff90e003a97336c96c9b3985717532669->enter($__internal_94d8df7e7377b48870b9a8164342b57ff90e003a97336c96c9b3985717532669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_94d8df7e7377b48870b9a8164342b57ff90e003a97336c96c9b3985717532669->leave($__internal_94d8df7e7377b48870b9a8164342b57ff90e003a97336c96c9b3985717532669_prof);

        
        $__internal_bd642687ef43336e1b1ce0112c6121cfb34cb26e416f29122b62697df5bd959c->leave($__internal_bd642687ef43336e1b1ce0112c6121cfb34cb26e416f29122b62697df5bd959c_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_faec013a3f09e87c857d5c740a374d2eac2720c4956e5ae9d6c669ac35d8142d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faec013a3f09e87c857d5c740a374d2eac2720c4956e5ae9d6c669ac35d8142d->enter($__internal_faec013a3f09e87c857d5c740a374d2eac2720c4956e5ae9d6c669ac35d8142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_148a8da9ba59f0041ebb5973e74b12d431620c1f235d4b36230b19dded413513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148a8da9ba59f0041ebb5973e74b12d431620c1f235d4b36230b19dded413513->enter($__internal_148a8da9ba59f0041ebb5973e74b12d431620c1f235d4b36230b19dded413513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_148a8da9ba59f0041ebb5973e74b12d431620c1f235d4b36230b19dded413513->leave($__internal_148a8da9ba59f0041ebb5973e74b12d431620c1f235d4b36230b19dded413513_prof);

        
        $__internal_faec013a3f09e87c857d5c740a374d2eac2720c4956e5ae9d6c669ac35d8142d->leave($__internal_faec013a3f09e87c857d5c740a374d2eac2720c4956e5ae9d6c669ac35d8142d_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_67cf6abd83fc350906583fed578e95ef4131f3bf029bd94420d11531bf75b909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cf6abd83fc350906583fed578e95ef4131f3bf029bd94420d11531bf75b909->enter($__internal_67cf6abd83fc350906583fed578e95ef4131f3bf029bd94420d11531bf75b909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_80a89e5bf3376d408d38982f7f744ae0bed0cf1557added0f8544aa3494d1c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a89e5bf3376d408d38982f7f744ae0bed0cf1557added0f8544aa3494d1c8a->enter($__internal_80a89e5bf3376d408d38982f7f744ae0bed0cf1557added0f8544aa3494d1c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_80a89e5bf3376d408d38982f7f744ae0bed0cf1557added0f8544aa3494d1c8a->leave($__internal_80a89e5bf3376d408d38982f7f744ae0bed0cf1557added0f8544aa3494d1c8a_prof);

        
        $__internal_67cf6abd83fc350906583fed578e95ef4131f3bf029bd94420d11531bf75b909->leave($__internal_67cf6abd83fc350906583fed578e95ef4131f3bf029bd94420d11531bf75b909_prof);

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
