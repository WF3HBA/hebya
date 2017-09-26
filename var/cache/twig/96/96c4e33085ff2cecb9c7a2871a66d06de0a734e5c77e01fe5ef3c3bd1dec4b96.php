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
        $__internal_659551a2f2e0b1e00a23563b03ba0c60b0a27662c403917984837f80ccfc125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659551a2f2e0b1e00a23563b03ba0c60b0a27662c403917984837f80ccfc125d->enter($__internal_659551a2f2e0b1e00a23563b03ba0c60b0a27662c403917984837f80ccfc125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_073a0e5875e82d246d2cd1b446336bc992ad35bf0e5adf1fe3005a6523c15481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073a0e5875e82d246d2cd1b446336bc992ad35bf0e5adf1fe3005a6523c15481->enter($__internal_073a0e5875e82d246d2cd1b446336bc992ad35bf0e5adf1fe3005a6523c15481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659551a2f2e0b1e00a23563b03ba0c60b0a27662c403917984837f80ccfc125d->leave($__internal_659551a2f2e0b1e00a23563b03ba0c60b0a27662c403917984837f80ccfc125d_prof);

        
        $__internal_073a0e5875e82d246d2cd1b446336bc992ad35bf0e5adf1fe3005a6523c15481->leave($__internal_073a0e5875e82d246d2cd1b446336bc992ad35bf0e5adf1fe3005a6523c15481_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f9d9571d29e34e23776202f2fb7d6242f5d3a651c2869807b572bbdd51d0576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9d9571d29e34e23776202f2fb7d6242f5d3a651c2869807b572bbdd51d0576->enter($__internal_4f9d9571d29e34e23776202f2fb7d6242f5d3a651c2869807b572bbdd51d0576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9973431d2b19c613386eabc9640ceb8dec6c4b80ba7591c5bb60f9828a832b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9973431d2b19c613386eabc9640ceb8dec6c4b80ba7591c5bb60f9828a832b3->enter($__internal_d9973431d2b19c613386eabc9640ceb8dec6c4b80ba7591c5bb60f9828a832b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d9973431d2b19c613386eabc9640ceb8dec6c4b80ba7591c5bb60f9828a832b3->leave($__internal_d9973431d2b19c613386eabc9640ceb8dec6c4b80ba7591c5bb60f9828a832b3_prof);

        
        $__internal_4f9d9571d29e34e23776202f2fb7d6242f5d3a651c2869807b572bbdd51d0576->leave($__internal_4f9d9571d29e34e23776202f2fb7d6242f5d3a651c2869807b572bbdd51d0576_prof);

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
