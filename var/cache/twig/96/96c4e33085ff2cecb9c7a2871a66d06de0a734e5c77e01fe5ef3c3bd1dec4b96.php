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
        $__internal_2dc7dced93c582c589ef18512979c0712e044fcc0a33f2c3e3aa75402c3e7cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc7dced93c582c589ef18512979c0712e044fcc0a33f2c3e3aa75402c3e7cb2->enter($__internal_2dc7dced93c582c589ef18512979c0712e044fcc0a33f2c3e3aa75402c3e7cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f728b6d70ae5d9f491e61a9f0724a1af1e61c34addc577f73f68f3cedaa290c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f728b6d70ae5d9f491e61a9f0724a1af1e61c34addc577f73f68f3cedaa290c6->enter($__internal_f728b6d70ae5d9f491e61a9f0724a1af1e61c34addc577f73f68f3cedaa290c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc7dced93c582c589ef18512979c0712e044fcc0a33f2c3e3aa75402c3e7cb2->leave($__internal_2dc7dced93c582c589ef18512979c0712e044fcc0a33f2c3e3aa75402c3e7cb2_prof);

        
        $__internal_f728b6d70ae5d9f491e61a9f0724a1af1e61c34addc577f73f68f3cedaa290c6->leave($__internal_f728b6d70ae5d9f491e61a9f0724a1af1e61c34addc577f73f68f3cedaa290c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d503b2597a945aecb16022f43b42dd5dce830a3bcd720a67d7afe3853e107267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d503b2597a945aecb16022f43b42dd5dce830a3bcd720a67d7afe3853e107267->enter($__internal_d503b2597a945aecb16022f43b42dd5dce830a3bcd720a67d7afe3853e107267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e4896b6a8b3bd2eceba36e2f8271acc012cdcb1ef77961570f096224cf5fd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4896b6a8b3bd2eceba36e2f8271acc012cdcb1ef77961570f096224cf5fd4b->enter($__internal_3e4896b6a8b3bd2eceba36e2f8271acc012cdcb1ef77961570f096224cf5fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3e4896b6a8b3bd2eceba36e2f8271acc012cdcb1ef77961570f096224cf5fd4b->leave($__internal_3e4896b6a8b3bd2eceba36e2f8271acc012cdcb1ef77961570f096224cf5fd4b_prof);

        
        $__internal_d503b2597a945aecb16022f43b42dd5dce830a3bcd720a67d7afe3853e107267->leave($__internal_d503b2597a945aecb16022f43b42dd5dce830a3bcd720a67d7afe3853e107267_prof);

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
