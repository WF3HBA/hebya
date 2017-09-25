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
        $__internal_bfc0fc487a332ecd69c7ddf8b5e6d8c3b8377b0eac05e4f53ab1ddb9c9a473be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc0fc487a332ecd69c7ddf8b5e6d8c3b8377b0eac05e4f53ab1ddb9c9a473be->enter($__internal_bfc0fc487a332ecd69c7ddf8b5e6d8c3b8377b0eac05e4f53ab1ddb9c9a473be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f0873747837bc09b795e41c11c82dbb84906df1294e5fab57ffeb9fc94498b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0873747837bc09b795e41c11c82dbb84906df1294e5fab57ffeb9fc94498b2a->enter($__internal_f0873747837bc09b795e41c11c82dbb84906df1294e5fab57ffeb9fc94498b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc0fc487a332ecd69c7ddf8b5e6d8c3b8377b0eac05e4f53ab1ddb9c9a473be->leave($__internal_bfc0fc487a332ecd69c7ddf8b5e6d8c3b8377b0eac05e4f53ab1ddb9c9a473be_prof);

        
        $__internal_f0873747837bc09b795e41c11c82dbb84906df1294e5fab57ffeb9fc94498b2a->leave($__internal_f0873747837bc09b795e41c11c82dbb84906df1294e5fab57ffeb9fc94498b2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cea4b62eaa52e756ab1dd289841e295aff5e2f9afb17d9111cfacb1c4187090d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea4b62eaa52e756ab1dd289841e295aff5e2f9afb17d9111cfacb1c4187090d->enter($__internal_cea4b62eaa52e756ab1dd289841e295aff5e2f9afb17d9111cfacb1c4187090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f5ec212a8dca38f2212d6d4d6740ba921550287c31ef53ce98eba1c20336abf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ec212a8dca38f2212d6d4d6740ba921550287c31ef53ce98eba1c20336abf6->enter($__internal_f5ec212a8dca38f2212d6d4d6740ba921550287c31ef53ce98eba1c20336abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5ec212a8dca38f2212d6d4d6740ba921550287c31ef53ce98eba1c20336abf6->leave($__internal_f5ec212a8dca38f2212d6d4d6740ba921550287c31ef53ce98eba1c20336abf6_prof);

        
        $__internal_cea4b62eaa52e756ab1dd289841e295aff5e2f9afb17d9111cfacb1c4187090d->leave($__internal_cea4b62eaa52e756ab1dd289841e295aff5e2f9afb17d9111cfacb1c4187090d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15e33b7f7bcdddea8f5937231675df362ea6aa77822b6b7ff0de63ddd05cfd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e33b7f7bcdddea8f5937231675df362ea6aa77822b6b7ff0de63ddd05cfd2f->enter($__internal_15e33b7f7bcdddea8f5937231675df362ea6aa77822b6b7ff0de63ddd05cfd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee00a2a55bed8f7ce9ad36482d3877631fd396bdc923b1e4a636ada41682d4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee00a2a55bed8f7ce9ad36482d3877631fd396bdc923b1e4a636ada41682d4f0->enter($__internal_ee00a2a55bed8f7ce9ad36482d3877631fd396bdc923b1e4a636ada41682d4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee00a2a55bed8f7ce9ad36482d3877631fd396bdc923b1e4a636ada41682d4f0->leave($__internal_ee00a2a55bed8f7ce9ad36482d3877631fd396bdc923b1e4a636ada41682d4f0_prof);

        
        $__internal_15e33b7f7bcdddea8f5937231675df362ea6aa77822b6b7ff0de63ddd05cfd2f->leave($__internal_15e33b7f7bcdddea8f5937231675df362ea6aa77822b6b7ff0de63ddd05cfd2f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42d4b798a95d7744a66a8266664cc0b1900553dba6bfe01d35670d1c9d13e4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d4b798a95d7744a66a8266664cc0b1900553dba6bfe01d35670d1c9d13e4dc->enter($__internal_42d4b798a95d7744a66a8266664cc0b1900553dba6bfe01d35670d1c9d13e4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2321af2953aaec0219f19559ed01e0bc3c58c3f25bae1781543adc97eee5d0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2321af2953aaec0219f19559ed01e0bc3c58c3f25bae1781543adc97eee5d0e8->enter($__internal_2321af2953aaec0219f19559ed01e0bc3c58c3f25bae1781543adc97eee5d0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2321af2953aaec0219f19559ed01e0bc3c58c3f25bae1781543adc97eee5d0e8->leave($__internal_2321af2953aaec0219f19559ed01e0bc3c58c3f25bae1781543adc97eee5d0e8_prof);

        
        $__internal_42d4b798a95d7744a66a8266664cc0b1900553dba6bfe01d35670d1c9d13e4dc->leave($__internal_42d4b798a95d7744a66a8266664cc0b1900553dba6bfe01d35670d1c9d13e4dc_prof);

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
