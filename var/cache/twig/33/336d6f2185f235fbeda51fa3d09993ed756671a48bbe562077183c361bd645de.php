<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_efc77edc0f3f9c79f5d50f5296c6473f2d248d5061cd131f712eb1d29c0c52e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d29d5dfd84050e00f80014c65dfe2fbfb83833234cf6529239750cb781eb347b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29d5dfd84050e00f80014c65dfe2fbfb83833234cf6529239750cb781eb347b->enter($__internal_d29d5dfd84050e00f80014c65dfe2fbfb83833234cf6529239750cb781eb347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_74c361e027f9f23f226c16d6a2e63f2b4be40ffff5aef3b527c1439bf98370a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c361e027f9f23f226c16d6a2e63f2b4be40ffff5aef3b527c1439bf98370a7->enter($__internal_74c361e027f9f23f226c16d6a2e63f2b4be40ffff5aef3b527c1439bf98370a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29d5dfd84050e00f80014c65dfe2fbfb83833234cf6529239750cb781eb347b->leave($__internal_d29d5dfd84050e00f80014c65dfe2fbfb83833234cf6529239750cb781eb347b_prof);

        
        $__internal_74c361e027f9f23f226c16d6a2e63f2b4be40ffff5aef3b527c1439bf98370a7->leave($__internal_74c361e027f9f23f226c16d6a2e63f2b4be40ffff5aef3b527c1439bf98370a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c0545134b2457d41f37df58719502531447ad5f273451e23e48d03d80ce7d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0545134b2457d41f37df58719502531447ad5f273451e23e48d03d80ce7d33->enter($__internal_5c0545134b2457d41f37df58719502531447ad5f273451e23e48d03d80ce7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d2faa23d8bc4cc374ec499f475b549c1552c39704d8c06fe1003e5bcc1a93cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2faa23d8bc4cc374ec499f475b549c1552c39704d8c06fe1003e5bcc1a93cc8->enter($__internal_d2faa23d8bc4cc374ec499f475b549c1552c39704d8c06fe1003e5bcc1a93cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d2faa23d8bc4cc374ec499f475b549c1552c39704d8c06fe1003e5bcc1a93cc8->leave($__internal_d2faa23d8bc4cc374ec499f475b549c1552c39704d8c06fe1003e5bcc1a93cc8_prof);

        
        $__internal_5c0545134b2457d41f37df58719502531447ad5f273451e23e48d03d80ce7d33->leave($__internal_5c0545134b2457d41f37df58719502531447ad5f273451e23e48d03d80ce7d33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
