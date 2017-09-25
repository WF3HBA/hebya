<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_97a4e4bf73b6e489c03d7297f976f4ca40d0f80fd980bb910bddb46690045c4d extends Twig_Template
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
        $__internal_72d5c7bd93388519b646ccd691fbc5d4e318183cad6e75373f2190056595b195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d5c7bd93388519b646ccd691fbc5d4e318183cad6e75373f2190056595b195->enter($__internal_72d5c7bd93388519b646ccd691fbc5d4e318183cad6e75373f2190056595b195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cbbe7f31fc0c65c0331f9c562c227e9a3a08388bab6ae977287bbecde4758c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbe7f31fc0c65c0331f9c562c227e9a3a08388bab6ae977287bbecde4758c52->enter($__internal_cbbe7f31fc0c65c0331f9c562c227e9a3a08388bab6ae977287bbecde4758c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d5c7bd93388519b646ccd691fbc5d4e318183cad6e75373f2190056595b195->leave($__internal_72d5c7bd93388519b646ccd691fbc5d4e318183cad6e75373f2190056595b195_prof);

        
        $__internal_cbbe7f31fc0c65c0331f9c562c227e9a3a08388bab6ae977287bbecde4758c52->leave($__internal_cbbe7f31fc0c65c0331f9c562c227e9a3a08388bab6ae977287bbecde4758c52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36a0cbd5a6c895ea05291d439b81c733118dcf86382cd6ec12293e200afd4002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a0cbd5a6c895ea05291d439b81c733118dcf86382cd6ec12293e200afd4002->enter($__internal_36a0cbd5a6c895ea05291d439b81c733118dcf86382cd6ec12293e200afd4002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4dac46b3b882be2b694ee8e30e208b5e7548be4e9357306cdfbd1af4eed11221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dac46b3b882be2b694ee8e30e208b5e7548be4e9357306cdfbd1af4eed11221->enter($__internal_4dac46b3b882be2b694ee8e30e208b5e7548be4e9357306cdfbd1af4eed11221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4dac46b3b882be2b694ee8e30e208b5e7548be4e9357306cdfbd1af4eed11221->leave($__internal_4dac46b3b882be2b694ee8e30e208b5e7548be4e9357306cdfbd1af4eed11221_prof);

        
        $__internal_36a0cbd5a6c895ea05291d439b81c733118dcf86382cd6ec12293e200afd4002->leave($__internal_36a0cbd5a6c895ea05291d439b81c733118dcf86382cd6ec12293e200afd4002_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
