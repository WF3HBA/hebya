<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_89ed005b8d2ed3b2c0d8736f71bdb912d336be8c6d909a7f1872ae7385adcc3e extends Twig_Template
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
        $__internal_fdda4e9fd24735e5014a71d0969ea9601a79ee8bba6f8d4e0d568ba4d5f0ba93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdda4e9fd24735e5014a71d0969ea9601a79ee8bba6f8d4e0d568ba4d5f0ba93->enter($__internal_fdda4e9fd24735e5014a71d0969ea9601a79ee8bba6f8d4e0d568ba4d5f0ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_30678d2e70e3d2b42b6570e4037a4ce4ae7a8d7fa11dacba4c436d5064ccb7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30678d2e70e3d2b42b6570e4037a4ce4ae7a8d7fa11dacba4c436d5064ccb7da->enter($__internal_30678d2e70e3d2b42b6570e4037a4ce4ae7a8d7fa11dacba4c436d5064ccb7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdda4e9fd24735e5014a71d0969ea9601a79ee8bba6f8d4e0d568ba4d5f0ba93->leave($__internal_fdda4e9fd24735e5014a71d0969ea9601a79ee8bba6f8d4e0d568ba4d5f0ba93_prof);

        
        $__internal_30678d2e70e3d2b42b6570e4037a4ce4ae7a8d7fa11dacba4c436d5064ccb7da->leave($__internal_30678d2e70e3d2b42b6570e4037a4ce4ae7a8d7fa11dacba4c436d5064ccb7da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_feba6354e20b1c8d18bca20450b8d1cab055dabcc8440a4555c035a765409238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feba6354e20b1c8d18bca20450b8d1cab055dabcc8440a4555c035a765409238->enter($__internal_feba6354e20b1c8d18bca20450b8d1cab055dabcc8440a4555c035a765409238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23034a2416868a66035d5dd76e02ec7ef02b6c96de95b1741610a4f4e17b6ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23034a2416868a66035d5dd76e02ec7ef02b6c96de95b1741610a4f4e17b6ab1->enter($__internal_23034a2416868a66035d5dd76e02ec7ef02b6c96de95b1741610a4f4e17b6ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23034a2416868a66035d5dd76e02ec7ef02b6c96de95b1741610a4f4e17b6ab1->leave($__internal_23034a2416868a66035d5dd76e02ec7ef02b6c96de95b1741610a4f4e17b6ab1_prof);

        
        $__internal_feba6354e20b1c8d18bca20450b8d1cab055dabcc8440a4555c035a765409238->leave($__internal_feba6354e20b1c8d18bca20450b8d1cab055dabcc8440a4555c035a765409238_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4a5f7599faca426ffe8bdfa8aeaa1d62ba68b6c49e83db3f50e2a405c277616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a5f7599faca426ffe8bdfa8aeaa1d62ba68b6c49e83db3f50e2a405c277616->enter($__internal_a4a5f7599faca426ffe8bdfa8aeaa1d62ba68b6c49e83db3f50e2a405c277616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af5bcba536780e604d6a77a771ec78c3c39e3be95349a5b2601491d2f8438705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5bcba536780e604d6a77a771ec78c3c39e3be95349a5b2601491d2f8438705->enter($__internal_af5bcba536780e604d6a77a771ec78c3c39e3be95349a5b2601491d2f8438705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af5bcba536780e604d6a77a771ec78c3c39e3be95349a5b2601491d2f8438705->leave($__internal_af5bcba536780e604d6a77a771ec78c3c39e3be95349a5b2601491d2f8438705_prof);

        
        $__internal_a4a5f7599faca426ffe8bdfa8aeaa1d62ba68b6c49e83db3f50e2a405c277616->leave($__internal_a4a5f7599faca426ffe8bdfa8aeaa1d62ba68b6c49e83db3f50e2a405c277616_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1676622c01adfde77c6a252e7763d6dee416bdd4c871b2ffd5ddcb47af49e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1676622c01adfde77c6a252e7763d6dee416bdd4c871b2ffd5ddcb47af49e71->enter($__internal_d1676622c01adfde77c6a252e7763d6dee416bdd4c871b2ffd5ddcb47af49e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ec58bc5e6c01ba38dd2e787f9edfba7ffa79fc85277bf6515fa033e9546c3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec58bc5e6c01ba38dd2e787f9edfba7ffa79fc85277bf6515fa033e9546c3fe->enter($__internal_7ec58bc5e6c01ba38dd2e787f9edfba7ffa79fc85277bf6515fa033e9546c3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7ec58bc5e6c01ba38dd2e787f9edfba7ffa79fc85277bf6515fa033e9546c3fe->leave($__internal_7ec58bc5e6c01ba38dd2e787f9edfba7ffa79fc85277bf6515fa033e9546c3fe_prof);

        
        $__internal_d1676622c01adfde77c6a252e7763d6dee416bdd4c871b2ffd5ddcb47af49e71->leave($__internal_d1676622c01adfde77c6a252e7763d6dee416bdd4c871b2ffd5ddcb47af49e71_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
