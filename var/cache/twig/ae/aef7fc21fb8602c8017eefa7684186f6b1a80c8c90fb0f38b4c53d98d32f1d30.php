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
        $__internal_425d0f1607d2773084eea562e51a581260f1d7a5199d8fc1f4b90e7a099fd220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425d0f1607d2773084eea562e51a581260f1d7a5199d8fc1f4b90e7a099fd220->enter($__internal_425d0f1607d2773084eea562e51a581260f1d7a5199d8fc1f4b90e7a099fd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2327be1776ef035545cbdf652c03bcc6f8e47879def13ceb72ae1fe80fa0b0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2327be1776ef035545cbdf652c03bcc6f8e47879def13ceb72ae1fe80fa0b0b2->enter($__internal_2327be1776ef035545cbdf652c03bcc6f8e47879def13ceb72ae1fe80fa0b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425d0f1607d2773084eea562e51a581260f1d7a5199d8fc1f4b90e7a099fd220->leave($__internal_425d0f1607d2773084eea562e51a581260f1d7a5199d8fc1f4b90e7a099fd220_prof);

        
        $__internal_2327be1776ef035545cbdf652c03bcc6f8e47879def13ceb72ae1fe80fa0b0b2->leave($__internal_2327be1776ef035545cbdf652c03bcc6f8e47879def13ceb72ae1fe80fa0b0b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2aac715a82a738d6d70e2d84cc07c9cabe4010d1077729951ee2cbdbb8c3fc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aac715a82a738d6d70e2d84cc07c9cabe4010d1077729951ee2cbdbb8c3fc13->enter($__internal_2aac715a82a738d6d70e2d84cc07c9cabe4010d1077729951ee2cbdbb8c3fc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3361c5309b6d2285dfdf724f679970c26f198a7b40179a649511bfc80f3e4784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3361c5309b6d2285dfdf724f679970c26f198a7b40179a649511bfc80f3e4784->enter($__internal_3361c5309b6d2285dfdf724f679970c26f198a7b40179a649511bfc80f3e4784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3361c5309b6d2285dfdf724f679970c26f198a7b40179a649511bfc80f3e4784->leave($__internal_3361c5309b6d2285dfdf724f679970c26f198a7b40179a649511bfc80f3e4784_prof);

        
        $__internal_2aac715a82a738d6d70e2d84cc07c9cabe4010d1077729951ee2cbdbb8c3fc13->leave($__internal_2aac715a82a738d6d70e2d84cc07c9cabe4010d1077729951ee2cbdbb8c3fc13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8aa86cb3e32191275f6e49270bf0c13a29559c9b6c7969ccc1fa74a1875d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8aa86cb3e32191275f6e49270bf0c13a29559c9b6c7969ccc1fa74a1875d607->enter($__internal_b8aa86cb3e32191275f6e49270bf0c13a29559c9b6c7969ccc1fa74a1875d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_70888c91e1864d536c1eb5d7a0c11130d357acd7eb8a9385bafd70e00ca852de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70888c91e1864d536c1eb5d7a0c11130d357acd7eb8a9385bafd70e00ca852de->enter($__internal_70888c91e1864d536c1eb5d7a0c11130d357acd7eb8a9385bafd70e00ca852de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_70888c91e1864d536c1eb5d7a0c11130d357acd7eb8a9385bafd70e00ca852de->leave($__internal_70888c91e1864d536c1eb5d7a0c11130d357acd7eb8a9385bafd70e00ca852de_prof);

        
        $__internal_b8aa86cb3e32191275f6e49270bf0c13a29559c9b6c7969ccc1fa74a1875d607->leave($__internal_b8aa86cb3e32191275f6e49270bf0c13a29559c9b6c7969ccc1fa74a1875d607_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30a81731176d7891f7c0a42fd5b55c0cf3db7f2730590aea27caa0568ee76638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a81731176d7891f7c0a42fd5b55c0cf3db7f2730590aea27caa0568ee76638->enter($__internal_30a81731176d7891f7c0a42fd5b55c0cf3db7f2730590aea27caa0568ee76638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a72888531311f2eed3f688764df44c56dc62e033fe095ad3016310fc52e19976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72888531311f2eed3f688764df44c56dc62e033fe095ad3016310fc52e19976->enter($__internal_a72888531311f2eed3f688764df44c56dc62e033fe095ad3016310fc52e19976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a72888531311f2eed3f688764df44c56dc62e033fe095ad3016310fc52e19976->leave($__internal_a72888531311f2eed3f688764df44c56dc62e033fe095ad3016310fc52e19976_prof);

        
        $__internal_30a81731176d7891f7c0a42fd5b55c0cf3db7f2730590aea27caa0568ee76638->leave($__internal_30a81731176d7891f7c0a42fd5b55c0cf3db7f2730590aea27caa0568ee76638_prof);

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
