<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f82a8383f9cdeb46a5249d0ae57631f2ca6912c19f4fcedb3030a96111fd772c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f2c3ab805e4bd3fb004aca416cfa23aa0f5b4d0c30ca91778267ff9be9dbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f2c3ab805e4bd3fb004aca416cfa23aa0f5b4d0c30ca91778267ff9be9dbac->enter($__internal_11f2c3ab805e4bd3fb004aca416cfa23aa0f5b4d0c30ca91778267ff9be9dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e18777dae31d735ae39420ec522710d9bebcbb410d49e164ab4d26a01969ba95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18777dae31d735ae39420ec522710d9bebcbb410d49e164ab4d26a01969ba95->enter($__internal_e18777dae31d735ae39420ec522710d9bebcbb410d49e164ab4d26a01969ba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f2c3ab805e4bd3fb004aca416cfa23aa0f5b4d0c30ca91778267ff9be9dbac->leave($__internal_11f2c3ab805e4bd3fb004aca416cfa23aa0f5b4d0c30ca91778267ff9be9dbac_prof);

        
        $__internal_e18777dae31d735ae39420ec522710d9bebcbb410d49e164ab4d26a01969ba95->leave($__internal_e18777dae31d735ae39420ec522710d9bebcbb410d49e164ab4d26a01969ba95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d5d30d6f7caa69cd8c5ccfd000c5e9283e5b8ec878f0c20bc7538dd32adb384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5d30d6f7caa69cd8c5ccfd000c5e9283e5b8ec878f0c20bc7538dd32adb384->enter($__internal_2d5d30d6f7caa69cd8c5ccfd000c5e9283e5b8ec878f0c20bc7538dd32adb384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c37d4b836a084f0abf7959f65c6b355a2983d29cfcc1e99c4edea00a6a6467c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37d4b836a084f0abf7959f65c6b355a2983d29cfcc1e99c4edea00a6a6467c3->enter($__internal_c37d4b836a084f0abf7959f65c6b355a2983d29cfcc1e99c4edea00a6a6467c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c37d4b836a084f0abf7959f65c6b355a2983d29cfcc1e99c4edea00a6a6467c3->leave($__internal_c37d4b836a084f0abf7959f65c6b355a2983d29cfcc1e99c4edea00a6a6467c3_prof);

        
        $__internal_2d5d30d6f7caa69cd8c5ccfd000c5e9283e5b8ec878f0c20bc7538dd32adb384->leave($__internal_2d5d30d6f7caa69cd8c5ccfd000c5e9283e5b8ec878f0c20bc7538dd32adb384_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8be02779a04232408710d5f2e29535016118b51410c4e35da501f1474cab3f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be02779a04232408710d5f2e29535016118b51410c4e35da501f1474cab3f89->enter($__internal_8be02779a04232408710d5f2e29535016118b51410c4e35da501f1474cab3f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4628a2c994192873dc3af0b53135aee4ed4f29be03c1cca7025e12207c3ab886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4628a2c994192873dc3af0b53135aee4ed4f29be03c1cca7025e12207c3ab886->enter($__internal_4628a2c994192873dc3af0b53135aee4ed4f29be03c1cca7025e12207c3ab886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4628a2c994192873dc3af0b53135aee4ed4f29be03c1cca7025e12207c3ab886->leave($__internal_4628a2c994192873dc3af0b53135aee4ed4f29be03c1cca7025e12207c3ab886_prof);

        
        $__internal_8be02779a04232408710d5f2e29535016118b51410c4e35da501f1474cab3f89->leave($__internal_8be02779a04232408710d5f2e29535016118b51410c4e35da501f1474cab3f89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc0eade0915cca1edba960af2e3b7488bf00bda5c033db8ad8925c2389879e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0eade0915cca1edba960af2e3b7488bf00bda5c033db8ad8925c2389879e2d->enter($__internal_bc0eade0915cca1edba960af2e3b7488bf00bda5c033db8ad8925c2389879e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02ba338cee530449ddef755f229dfab4a8338e25298b6d9658eae7561ba3f1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ba338cee530449ddef755f229dfab4a8338e25298b6d9658eae7561ba3f1af->enter($__internal_02ba338cee530449ddef755f229dfab4a8338e25298b6d9658eae7561ba3f1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_02ba338cee530449ddef755f229dfab4a8338e25298b6d9658eae7561ba3f1af->leave($__internal_02ba338cee530449ddef755f229dfab4a8338e25298b6d9658eae7561ba3f1af_prof);

        
        $__internal_bc0eade0915cca1edba960af2e3b7488bf00bda5c033db8ad8925c2389879e2d->leave($__internal_bc0eade0915cca1edba960af2e3b7488bf00bda5c033db8ad8925c2389879e2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
