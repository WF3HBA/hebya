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
        $__internal_861ea6cd9a07699fa4ccf080f6f34e65e276ae62e75c4666218a938a08da6f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861ea6cd9a07699fa4ccf080f6f34e65e276ae62e75c4666218a938a08da6f17->enter($__internal_861ea6cd9a07699fa4ccf080f6f34e65e276ae62e75c4666218a938a08da6f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9784f053b7d0ea3de6c4a2744cc2f5b6720b29bf25aee2391b518e8a3a9845e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9784f053b7d0ea3de6c4a2744cc2f5b6720b29bf25aee2391b518e8a3a9845e2->enter($__internal_9784f053b7d0ea3de6c4a2744cc2f5b6720b29bf25aee2391b518e8a3a9845e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861ea6cd9a07699fa4ccf080f6f34e65e276ae62e75c4666218a938a08da6f17->leave($__internal_861ea6cd9a07699fa4ccf080f6f34e65e276ae62e75c4666218a938a08da6f17_prof);

        
        $__internal_9784f053b7d0ea3de6c4a2744cc2f5b6720b29bf25aee2391b518e8a3a9845e2->leave($__internal_9784f053b7d0ea3de6c4a2744cc2f5b6720b29bf25aee2391b518e8a3a9845e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8dea4075a0d9e91e8aed77175e5406a4048b3a7b34c6653eb96b19c9c76bc9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dea4075a0d9e91e8aed77175e5406a4048b3a7b34c6653eb96b19c9c76bc9d3->enter($__internal_8dea4075a0d9e91e8aed77175e5406a4048b3a7b34c6653eb96b19c9c76bc9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c3a98ce875ec9e2ae8f9d1c43858b68836d9872ed4bed25260773082e0af216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3a98ce875ec9e2ae8f9d1c43858b68836d9872ed4bed25260773082e0af216->enter($__internal_8c3a98ce875ec9e2ae8f9d1c43858b68836d9872ed4bed25260773082e0af216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c3a98ce875ec9e2ae8f9d1c43858b68836d9872ed4bed25260773082e0af216->leave($__internal_8c3a98ce875ec9e2ae8f9d1c43858b68836d9872ed4bed25260773082e0af216_prof);

        
        $__internal_8dea4075a0d9e91e8aed77175e5406a4048b3a7b34c6653eb96b19c9c76bc9d3->leave($__internal_8dea4075a0d9e91e8aed77175e5406a4048b3a7b34c6653eb96b19c9c76bc9d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_044342052292902fc6a0b6e08eacd77c31baf6f2798cf03fa1ae18d8376c6407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044342052292902fc6a0b6e08eacd77c31baf6f2798cf03fa1ae18d8376c6407->enter($__internal_044342052292902fc6a0b6e08eacd77c31baf6f2798cf03fa1ae18d8376c6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9eee56d623bfbce34d1922dab3a780caa959cef4b5505964fa3c048102ce6900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eee56d623bfbce34d1922dab3a780caa959cef4b5505964fa3c048102ce6900->enter($__internal_9eee56d623bfbce34d1922dab3a780caa959cef4b5505964fa3c048102ce6900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9eee56d623bfbce34d1922dab3a780caa959cef4b5505964fa3c048102ce6900->leave($__internal_9eee56d623bfbce34d1922dab3a780caa959cef4b5505964fa3c048102ce6900_prof);

        
        $__internal_044342052292902fc6a0b6e08eacd77c31baf6f2798cf03fa1ae18d8376c6407->leave($__internal_044342052292902fc6a0b6e08eacd77c31baf6f2798cf03fa1ae18d8376c6407_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b90ddebe38a625154f96115dc412d2fa6d7cec8f1cd5e2d04560491b07f11b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90ddebe38a625154f96115dc412d2fa6d7cec8f1cd5e2d04560491b07f11b6b->enter($__internal_b90ddebe38a625154f96115dc412d2fa6d7cec8f1cd5e2d04560491b07f11b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c369296814e06f0b3c4f625d5e60bfcf12565833e78bcae8088f5770df6d9efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c369296814e06f0b3c4f625d5e60bfcf12565833e78bcae8088f5770df6d9efa->enter($__internal_c369296814e06f0b3c4f625d5e60bfcf12565833e78bcae8088f5770df6d9efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c369296814e06f0b3c4f625d5e60bfcf12565833e78bcae8088f5770df6d9efa->leave($__internal_c369296814e06f0b3c4f625d5e60bfcf12565833e78bcae8088f5770df6d9efa_prof);

        
        $__internal_b90ddebe38a625154f96115dc412d2fa6d7cec8f1cd5e2d04560491b07f11b6b->leave($__internal_b90ddebe38a625154f96115dc412d2fa6d7cec8f1cd5e2d04560491b07f11b6b_prof);

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
