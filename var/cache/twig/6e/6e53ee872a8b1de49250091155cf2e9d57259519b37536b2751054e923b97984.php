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
        $__internal_ebcb2fe1d86b210c82bb2b0fd8c1305f538fff32eb0a4f3757a24cdd2fc86ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcb2fe1d86b210c82bb2b0fd8c1305f538fff32eb0a4f3757a24cdd2fc86ab4->enter($__internal_ebcb2fe1d86b210c82bb2b0fd8c1305f538fff32eb0a4f3757a24cdd2fc86ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_167a1ec4264c4d2081feade038e20e3b97011363e21e19b4138538082318aef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167a1ec4264c4d2081feade038e20e3b97011363e21e19b4138538082318aef8->enter($__internal_167a1ec4264c4d2081feade038e20e3b97011363e21e19b4138538082318aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebcb2fe1d86b210c82bb2b0fd8c1305f538fff32eb0a4f3757a24cdd2fc86ab4->leave($__internal_ebcb2fe1d86b210c82bb2b0fd8c1305f538fff32eb0a4f3757a24cdd2fc86ab4_prof);

        
        $__internal_167a1ec4264c4d2081feade038e20e3b97011363e21e19b4138538082318aef8->leave($__internal_167a1ec4264c4d2081feade038e20e3b97011363e21e19b4138538082318aef8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08c321b42529e6834ae1cdc9452bd794a812e817530765a0ab49d17ac3265c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c321b42529e6834ae1cdc9452bd794a812e817530765a0ab49d17ac3265c85->enter($__internal_08c321b42529e6834ae1cdc9452bd794a812e817530765a0ab49d17ac3265c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_641a1658bc4fd4f9b7a5ba2d7e28ee41db922821a96734ee8b42f2905420e9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641a1658bc4fd4f9b7a5ba2d7e28ee41db922821a96734ee8b42f2905420e9bd->enter($__internal_641a1658bc4fd4f9b7a5ba2d7e28ee41db922821a96734ee8b42f2905420e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641a1658bc4fd4f9b7a5ba2d7e28ee41db922821a96734ee8b42f2905420e9bd->leave($__internal_641a1658bc4fd4f9b7a5ba2d7e28ee41db922821a96734ee8b42f2905420e9bd_prof);

        
        $__internal_08c321b42529e6834ae1cdc9452bd794a812e817530765a0ab49d17ac3265c85->leave($__internal_08c321b42529e6834ae1cdc9452bd794a812e817530765a0ab49d17ac3265c85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47cd588cc16be129a4f7d955d6039f712995c4a37e5ed61dad2e65d7fd83c0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cd588cc16be129a4f7d955d6039f712995c4a37e5ed61dad2e65d7fd83c0f1->enter($__internal_47cd588cc16be129a4f7d955d6039f712995c4a37e5ed61dad2e65d7fd83c0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00504e437c65209e1ef122ad4e8839e6433c0350b2f865665a548090bfda1c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00504e437c65209e1ef122ad4e8839e6433c0350b2f865665a548090bfda1c3d->enter($__internal_00504e437c65209e1ef122ad4e8839e6433c0350b2f865665a548090bfda1c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00504e437c65209e1ef122ad4e8839e6433c0350b2f865665a548090bfda1c3d->leave($__internal_00504e437c65209e1ef122ad4e8839e6433c0350b2f865665a548090bfda1c3d_prof);

        
        $__internal_47cd588cc16be129a4f7d955d6039f712995c4a37e5ed61dad2e65d7fd83c0f1->leave($__internal_47cd588cc16be129a4f7d955d6039f712995c4a37e5ed61dad2e65d7fd83c0f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7acba364fa8ebcf3733cf264a60d81dea777fc02c049dd42f74a81f916653fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7acba364fa8ebcf3733cf264a60d81dea777fc02c049dd42f74a81f916653fc->enter($__internal_e7acba364fa8ebcf3733cf264a60d81dea777fc02c049dd42f74a81f916653fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_415e261d2e809dfc5b89766922806e907191cc4b16b952034a08e0bbfcbc571e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415e261d2e809dfc5b89766922806e907191cc4b16b952034a08e0bbfcbc571e->enter($__internal_415e261d2e809dfc5b89766922806e907191cc4b16b952034a08e0bbfcbc571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_415e261d2e809dfc5b89766922806e907191cc4b16b952034a08e0bbfcbc571e->leave($__internal_415e261d2e809dfc5b89766922806e907191cc4b16b952034a08e0bbfcbc571e_prof);

        
        $__internal_e7acba364fa8ebcf3733cf264a60d81dea777fc02c049dd42f74a81f916653fc->leave($__internal_e7acba364fa8ebcf3733cf264a60d81dea777fc02c049dd42f74a81f916653fc_prof);

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
