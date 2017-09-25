<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_22bc04c0bc42a3eeaacd16783dca52419def5e1e90e7842fa792cd7a137d38f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b0b74b58681685d7e4d3a927b75a0970f85d68900b176e3c26505023d8e9b1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b74b58681685d7e4d3a927b75a0970f85d68900b176e3c26505023d8e9b1f5->enter($__internal_b0b74b58681685d7e4d3a927b75a0970f85d68900b176e3c26505023d8e9b1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ced68648cabe0efe1b8e9a69b2cb23d7abdf83421f41da02d62c06dfc7c4530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ced68648cabe0efe1b8e9a69b2cb23d7abdf83421f41da02d62c06dfc7c4530->enter($__internal_3ced68648cabe0efe1b8e9a69b2cb23d7abdf83421f41da02d62c06dfc7c4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b74b58681685d7e4d3a927b75a0970f85d68900b176e3c26505023d8e9b1f5->leave($__internal_b0b74b58681685d7e4d3a927b75a0970f85d68900b176e3c26505023d8e9b1f5_prof);

        
        $__internal_3ced68648cabe0efe1b8e9a69b2cb23d7abdf83421f41da02d62c06dfc7c4530->leave($__internal_3ced68648cabe0efe1b8e9a69b2cb23d7abdf83421f41da02d62c06dfc7c4530_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8c093364630726ad1628747801c3953909e2cb8db0faa470857f9f19f430c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c093364630726ad1628747801c3953909e2cb8db0faa470857f9f19f430c61->enter($__internal_d8c093364630726ad1628747801c3953909e2cb8db0faa470857f9f19f430c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3bce6e189797c57a65e19ef6077db4c63064c0806bdbd8a430b602a76b50ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bce6e189797c57a65e19ef6077db4c63064c0806bdbd8a430b602a76b50ec3->enter($__internal_d3bce6e189797c57a65e19ef6077db4c63064c0806bdbd8a430b602a76b50ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3bce6e189797c57a65e19ef6077db4c63064c0806bdbd8a430b602a76b50ec3->leave($__internal_d3bce6e189797c57a65e19ef6077db4c63064c0806bdbd8a430b602a76b50ec3_prof);

        
        $__internal_d8c093364630726ad1628747801c3953909e2cb8db0faa470857f9f19f430c61->leave($__internal_d8c093364630726ad1628747801c3953909e2cb8db0faa470857f9f19f430c61_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22c517ea092ef956a31d7b3a918aebeac8fbda89ab1819d1383a5009dace42d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c517ea092ef956a31d7b3a918aebeac8fbda89ab1819d1383a5009dace42d5->enter($__internal_22c517ea092ef956a31d7b3a918aebeac8fbda89ab1819d1383a5009dace42d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_74da6b9318c776067fe8dc6faceb40faf2ed849a93bbd7bb7070c9da7bafd30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74da6b9318c776067fe8dc6faceb40faf2ed849a93bbd7bb7070c9da7bafd30f->enter($__internal_74da6b9318c776067fe8dc6faceb40faf2ed849a93bbd7bb7070c9da7bafd30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_74da6b9318c776067fe8dc6faceb40faf2ed849a93bbd7bb7070c9da7bafd30f->leave($__internal_74da6b9318c776067fe8dc6faceb40faf2ed849a93bbd7bb7070c9da7bafd30f_prof);

        
        $__internal_22c517ea092ef956a31d7b3a918aebeac8fbda89ab1819d1383a5009dace42d5->leave($__internal_22c517ea092ef956a31d7b3a918aebeac8fbda89ab1819d1383a5009dace42d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3aa2a119c63cfc9a05f31d1a576a24f902efdded0ccc3b06d847db8177f1690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aa2a119c63cfc9a05f31d1a576a24f902efdded0ccc3b06d847db8177f1690->enter($__internal_b3aa2a119c63cfc9a05f31d1a576a24f902efdded0ccc3b06d847db8177f1690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0b625d8da6eaa7f8287dcea6420af0a7f61c23ad702be48a9e52393cab81bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b625d8da6eaa7f8287dcea6420af0a7f61c23ad702be48a9e52393cab81bb4->enter($__internal_f0b625d8da6eaa7f8287dcea6420af0a7f61c23ad702be48a9e52393cab81bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f0b625d8da6eaa7f8287dcea6420af0a7f61c23ad702be48a9e52393cab81bb4->leave($__internal_f0b625d8da6eaa7f8287dcea6420af0a7f61c23ad702be48a9e52393cab81bb4_prof);

        
        $__internal_b3aa2a119c63cfc9a05f31d1a576a24f902efdded0ccc3b06d847db8177f1690->leave($__internal_b3aa2a119c63cfc9a05f31d1a576a24f902efdded0ccc3b06d847db8177f1690_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
