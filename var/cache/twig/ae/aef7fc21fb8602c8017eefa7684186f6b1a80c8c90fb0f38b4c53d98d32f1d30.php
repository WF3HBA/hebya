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
        $__internal_a52c66dc4098a32593abbf01e6d3d399c0973e294cffc963e18b6083b7530918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52c66dc4098a32593abbf01e6d3d399c0973e294cffc963e18b6083b7530918->enter($__internal_a52c66dc4098a32593abbf01e6d3d399c0973e294cffc963e18b6083b7530918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_71eabc79d93de1fa1f06281ebd04b58f28ff1c74e97b6c6e5af73105b87c57d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eabc79d93de1fa1f06281ebd04b58f28ff1c74e97b6c6e5af73105b87c57d0->enter($__internal_71eabc79d93de1fa1f06281ebd04b58f28ff1c74e97b6c6e5af73105b87c57d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52c66dc4098a32593abbf01e6d3d399c0973e294cffc963e18b6083b7530918->leave($__internal_a52c66dc4098a32593abbf01e6d3d399c0973e294cffc963e18b6083b7530918_prof);

        
        $__internal_71eabc79d93de1fa1f06281ebd04b58f28ff1c74e97b6c6e5af73105b87c57d0->leave($__internal_71eabc79d93de1fa1f06281ebd04b58f28ff1c74e97b6c6e5af73105b87c57d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f821a4ecaa54d052b335996b1fd4b1309e7495803228593548d16b780e71add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f821a4ecaa54d052b335996b1fd4b1309e7495803228593548d16b780e71add->enter($__internal_0f821a4ecaa54d052b335996b1fd4b1309e7495803228593548d16b780e71add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0929878d6a77f94d416d9bdd99b0bc8da9995f3a8a3b9b69e1445a04d66e4490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0929878d6a77f94d416d9bdd99b0bc8da9995f3a8a3b9b69e1445a04d66e4490->enter($__internal_0929878d6a77f94d416d9bdd99b0bc8da9995f3a8a3b9b69e1445a04d66e4490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0929878d6a77f94d416d9bdd99b0bc8da9995f3a8a3b9b69e1445a04d66e4490->leave($__internal_0929878d6a77f94d416d9bdd99b0bc8da9995f3a8a3b9b69e1445a04d66e4490_prof);

        
        $__internal_0f821a4ecaa54d052b335996b1fd4b1309e7495803228593548d16b780e71add->leave($__internal_0f821a4ecaa54d052b335996b1fd4b1309e7495803228593548d16b780e71add_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_473fc550ef1315c2dbbad675ad5cc777eac22effa0a258308e7484a5c8ba2954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473fc550ef1315c2dbbad675ad5cc777eac22effa0a258308e7484a5c8ba2954->enter($__internal_473fc550ef1315c2dbbad675ad5cc777eac22effa0a258308e7484a5c8ba2954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e2a8f226f17426a1137c5b183469687b64fb25a5b64f9be868b74a787eb2bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2a8f226f17426a1137c5b183469687b64fb25a5b64f9be868b74a787eb2bca->enter($__internal_1e2a8f226f17426a1137c5b183469687b64fb25a5b64f9be868b74a787eb2bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1e2a8f226f17426a1137c5b183469687b64fb25a5b64f9be868b74a787eb2bca->leave($__internal_1e2a8f226f17426a1137c5b183469687b64fb25a5b64f9be868b74a787eb2bca_prof);

        
        $__internal_473fc550ef1315c2dbbad675ad5cc777eac22effa0a258308e7484a5c8ba2954->leave($__internal_473fc550ef1315c2dbbad675ad5cc777eac22effa0a258308e7484a5c8ba2954_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e766562ecf4b23b1e16e32d07ffa5740d0102fe31c0b8efeff7d9d9cb853cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e766562ecf4b23b1e16e32d07ffa5740d0102fe31c0b8efeff7d9d9cb853cce->enter($__internal_2e766562ecf4b23b1e16e32d07ffa5740d0102fe31c0b8efeff7d9d9cb853cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_884f688d609ba740b8084d3a74621aa8bcd5f53bbbce5da242a56e02181a67af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884f688d609ba740b8084d3a74621aa8bcd5f53bbbce5da242a56e02181a67af->enter($__internal_884f688d609ba740b8084d3a74621aa8bcd5f53bbbce5da242a56e02181a67af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_884f688d609ba740b8084d3a74621aa8bcd5f53bbbce5da242a56e02181a67af->leave($__internal_884f688d609ba740b8084d3a74621aa8bcd5f53bbbce5da242a56e02181a67af_prof);

        
        $__internal_2e766562ecf4b23b1e16e32d07ffa5740d0102fe31c0b8efeff7d9d9cb853cce->leave($__internal_2e766562ecf4b23b1e16e32d07ffa5740d0102fe31c0b8efeff7d9d9cb853cce_prof);

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
