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
        $__internal_cfc32772814867f43107edd6d64dcc41f5abee1974c127d72a44bcb69f029003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc32772814867f43107edd6d64dcc41f5abee1974c127d72a44bcb69f029003->enter($__internal_cfc32772814867f43107edd6d64dcc41f5abee1974c127d72a44bcb69f029003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d73c3fcca9ca795cbaf134473f2853c1099e8f0b3035f8d34361b549ea9840bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73c3fcca9ca795cbaf134473f2853c1099e8f0b3035f8d34361b549ea9840bf->enter($__internal_d73c3fcca9ca795cbaf134473f2853c1099e8f0b3035f8d34361b549ea9840bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc32772814867f43107edd6d64dcc41f5abee1974c127d72a44bcb69f029003->leave($__internal_cfc32772814867f43107edd6d64dcc41f5abee1974c127d72a44bcb69f029003_prof);

        
        $__internal_d73c3fcca9ca795cbaf134473f2853c1099e8f0b3035f8d34361b549ea9840bf->leave($__internal_d73c3fcca9ca795cbaf134473f2853c1099e8f0b3035f8d34361b549ea9840bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a4d81c0ae298670c33484fdf0aee93bad8c6dfe0ec0c0b28104d2d952305cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4d81c0ae298670c33484fdf0aee93bad8c6dfe0ec0c0b28104d2d952305cce->enter($__internal_1a4d81c0ae298670c33484fdf0aee93bad8c6dfe0ec0c0b28104d2d952305cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e94e10616bde584c5904b037867f2139ec9974a3c141b06a3932a8c85a825727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94e10616bde584c5904b037867f2139ec9974a3c141b06a3932a8c85a825727->enter($__internal_e94e10616bde584c5904b037867f2139ec9974a3c141b06a3932a8c85a825727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e94e10616bde584c5904b037867f2139ec9974a3c141b06a3932a8c85a825727->leave($__internal_e94e10616bde584c5904b037867f2139ec9974a3c141b06a3932a8c85a825727_prof);

        
        $__internal_1a4d81c0ae298670c33484fdf0aee93bad8c6dfe0ec0c0b28104d2d952305cce->leave($__internal_1a4d81c0ae298670c33484fdf0aee93bad8c6dfe0ec0c0b28104d2d952305cce_prof);

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
