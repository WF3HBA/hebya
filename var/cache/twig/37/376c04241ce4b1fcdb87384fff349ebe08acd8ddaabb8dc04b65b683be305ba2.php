<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0f886937e4bf401c5e2858612f8bdb3cf262a257b6549050d25789eb640f8b55 extends Twig_Template
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
        $__internal_aa477b1755135ca447df625fe65e0cff1d230b7c4754002c4dda827a759975c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa477b1755135ca447df625fe65e0cff1d230b7c4754002c4dda827a759975c1->enter($__internal_aa477b1755135ca447df625fe65e0cff1d230b7c4754002c4dda827a759975c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7386e77b1ce226ee78d793650b670513b3b11f4f78287c3cad251a50ac103e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7386e77b1ce226ee78d793650b670513b3b11f4f78287c3cad251a50ac103e78->enter($__internal_7386e77b1ce226ee78d793650b670513b3b11f4f78287c3cad251a50ac103e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa477b1755135ca447df625fe65e0cff1d230b7c4754002c4dda827a759975c1->leave($__internal_aa477b1755135ca447df625fe65e0cff1d230b7c4754002c4dda827a759975c1_prof);

        
        $__internal_7386e77b1ce226ee78d793650b670513b3b11f4f78287c3cad251a50ac103e78->leave($__internal_7386e77b1ce226ee78d793650b670513b3b11f4f78287c3cad251a50ac103e78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63831c9fa1e8534bb94dde3b229f092c7c5bbaf4d17603c326bd648cc911687f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63831c9fa1e8534bb94dde3b229f092c7c5bbaf4d17603c326bd648cc911687f->enter($__internal_63831c9fa1e8534bb94dde3b229f092c7c5bbaf4d17603c326bd648cc911687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2647d69d364ec53aef1d6d7a9cb580bc2ebe624d496cd5a974032b358b13d298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2647d69d364ec53aef1d6d7a9cb580bc2ebe624d496cd5a974032b358b13d298->enter($__internal_2647d69d364ec53aef1d6d7a9cb580bc2ebe624d496cd5a974032b358b13d298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2647d69d364ec53aef1d6d7a9cb580bc2ebe624d496cd5a974032b358b13d298->leave($__internal_2647d69d364ec53aef1d6d7a9cb580bc2ebe624d496cd5a974032b358b13d298_prof);

        
        $__internal_63831c9fa1e8534bb94dde3b229f092c7c5bbaf4d17603c326bd648cc911687f->leave($__internal_63831c9fa1e8534bb94dde3b229f092c7c5bbaf4d17603c326bd648cc911687f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dd6daff0df9186efc4bf6b416fdacc658874ce3f1577ae4d996ef8ed813fadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd6daff0df9186efc4bf6b416fdacc658874ce3f1577ae4d996ef8ed813fadc->enter($__internal_7dd6daff0df9186efc4bf6b416fdacc658874ce3f1577ae4d996ef8ed813fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_07d86299ef2c064fc4dffe07eb4bf5a620ce603c45d26b000380a881774084ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d86299ef2c064fc4dffe07eb4bf5a620ce603c45d26b000380a881774084ed->enter($__internal_07d86299ef2c064fc4dffe07eb4bf5a620ce603c45d26b000380a881774084ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_07d86299ef2c064fc4dffe07eb4bf5a620ce603c45d26b000380a881774084ed->leave($__internal_07d86299ef2c064fc4dffe07eb4bf5a620ce603c45d26b000380a881774084ed_prof);

        
        $__internal_7dd6daff0df9186efc4bf6b416fdacc658874ce3f1577ae4d996ef8ed813fadc->leave($__internal_7dd6daff0df9186efc4bf6b416fdacc658874ce3f1577ae4d996ef8ed813fadc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52e2f8dd2645acb12a9ec28f882dbc88b75428b1c68a829ba99fa50e7083c304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e2f8dd2645acb12a9ec28f882dbc88b75428b1c68a829ba99fa50e7083c304->enter($__internal_52e2f8dd2645acb12a9ec28f882dbc88b75428b1c68a829ba99fa50e7083c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04df05b8f55b3b0a872f3f30e3b10e6f64c3b150bb2c01635095c371e2090979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04df05b8f55b3b0a872f3f30e3b10e6f64c3b150bb2c01635095c371e2090979->enter($__internal_04df05b8f55b3b0a872f3f30e3b10e6f64c3b150bb2c01635095c371e2090979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_04df05b8f55b3b0a872f3f30e3b10e6f64c3b150bb2c01635095c371e2090979->leave($__internal_04df05b8f55b3b0a872f3f30e3b10e6f64c3b150bb2c01635095c371e2090979_prof);

        
        $__internal_52e2f8dd2645acb12a9ec28f882dbc88b75428b1c68a829ba99fa50e7083c304->leave($__internal_52e2f8dd2645acb12a9ec28f882dbc88b75428b1c68a829ba99fa50e7083c304_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
