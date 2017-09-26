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
        $__internal_6378055f8701c242999a589fc2673e047359bf68be69b0a9ee3ce05e9ccbf9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6378055f8701c242999a589fc2673e047359bf68be69b0a9ee3ce05e9ccbf9fc->enter($__internal_6378055f8701c242999a589fc2673e047359bf68be69b0a9ee3ce05e9ccbf9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff2e9b83251583adfb4a5381aec7119624a9fae87c391037ef78efcdc8081612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2e9b83251583adfb4a5381aec7119624a9fae87c391037ef78efcdc8081612->enter($__internal_ff2e9b83251583adfb4a5381aec7119624a9fae87c391037ef78efcdc8081612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6378055f8701c242999a589fc2673e047359bf68be69b0a9ee3ce05e9ccbf9fc->leave($__internal_6378055f8701c242999a589fc2673e047359bf68be69b0a9ee3ce05e9ccbf9fc_prof);

        
        $__internal_ff2e9b83251583adfb4a5381aec7119624a9fae87c391037ef78efcdc8081612->leave($__internal_ff2e9b83251583adfb4a5381aec7119624a9fae87c391037ef78efcdc8081612_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adb8dedbe240c88961db5006fd0d5e094ade9c44034527fa36aa9119fc6a80f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb8dedbe240c88961db5006fd0d5e094ade9c44034527fa36aa9119fc6a80f9->enter($__internal_adb8dedbe240c88961db5006fd0d5e094ade9c44034527fa36aa9119fc6a80f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcc0681b26e03c0af101ef6c0c43b4f89c82b63eb45cb9d7b1e3cf6c6ee2d14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc0681b26e03c0af101ef6c0c43b4f89c82b63eb45cb9d7b1e3cf6c6ee2d14d->enter($__internal_dcc0681b26e03c0af101ef6c0c43b4f89c82b63eb45cb9d7b1e3cf6c6ee2d14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dcc0681b26e03c0af101ef6c0c43b4f89c82b63eb45cb9d7b1e3cf6c6ee2d14d->leave($__internal_dcc0681b26e03c0af101ef6c0c43b4f89c82b63eb45cb9d7b1e3cf6c6ee2d14d_prof);

        
        $__internal_adb8dedbe240c88961db5006fd0d5e094ade9c44034527fa36aa9119fc6a80f9->leave($__internal_adb8dedbe240c88961db5006fd0d5e094ade9c44034527fa36aa9119fc6a80f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6335e045c8419eca792475910ea9d33bb31b8667cf6eb742072fbcc36572699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6335e045c8419eca792475910ea9d33bb31b8667cf6eb742072fbcc36572699->enter($__internal_e6335e045c8419eca792475910ea9d33bb31b8667cf6eb742072fbcc36572699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef09a8fb4f6cd6d4c3d4d0b22db37e7865109fe13c018645d4de2f3e356a13d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef09a8fb4f6cd6d4c3d4d0b22db37e7865109fe13c018645d4de2f3e356a13d2->enter($__internal_ef09a8fb4f6cd6d4c3d4d0b22db37e7865109fe13c018645d4de2f3e356a13d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef09a8fb4f6cd6d4c3d4d0b22db37e7865109fe13c018645d4de2f3e356a13d2->leave($__internal_ef09a8fb4f6cd6d4c3d4d0b22db37e7865109fe13c018645d4de2f3e356a13d2_prof);

        
        $__internal_e6335e045c8419eca792475910ea9d33bb31b8667cf6eb742072fbcc36572699->leave($__internal_e6335e045c8419eca792475910ea9d33bb31b8667cf6eb742072fbcc36572699_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70c8d8042216edfb72b7d541be20ba1f710a15c1c85359d7b23f0ca9263ee90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c8d8042216edfb72b7d541be20ba1f710a15c1c85359d7b23f0ca9263ee90b->enter($__internal_70c8d8042216edfb72b7d541be20ba1f710a15c1c85359d7b23f0ca9263ee90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3d89980d11de01b36a3dd7cf8c59d500d5d81941eea97013c5733e457c64a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d89980d11de01b36a3dd7cf8c59d500d5d81941eea97013c5733e457c64a1b->enter($__internal_a3d89980d11de01b36a3dd7cf8c59d500d5d81941eea97013c5733e457c64a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a3d89980d11de01b36a3dd7cf8c59d500d5d81941eea97013c5733e457c64a1b->leave($__internal_a3d89980d11de01b36a3dd7cf8c59d500d5d81941eea97013c5733e457c64a1b_prof);

        
        $__internal_70c8d8042216edfb72b7d541be20ba1f710a15c1c85359d7b23f0ca9263ee90b->leave($__internal_70c8d8042216edfb72b7d541be20ba1f710a15c1c85359d7b23f0ca9263ee90b_prof);

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
