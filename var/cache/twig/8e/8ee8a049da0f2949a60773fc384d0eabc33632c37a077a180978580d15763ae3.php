<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_30ac29f31b2d58bb74d8a4b1bfe8d3569849035b5479ece307894aad2ae23d00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e9ac513b3ec3c056d784845497871b7d061a284caf762b505a4f7b26b038240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9ac513b3ec3c056d784845497871b7d061a284caf762b505a4f7b26b038240->enter($__internal_0e9ac513b3ec3c056d784845497871b7d061a284caf762b505a4f7b26b038240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d7c10c3e92abba2e11ff0ac9d6bef09312faf8f859839649852f9512e4be3419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c10c3e92abba2e11ff0ac9d6bef09312faf8f859839649852f9512e4be3419->enter($__internal_d7c10c3e92abba2e11ff0ac9d6bef09312faf8f859839649852f9512e4be3419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0e9ac513b3ec3c056d784845497871b7d061a284caf762b505a4f7b26b038240->leave($__internal_0e9ac513b3ec3c056d784845497871b7d061a284caf762b505a4f7b26b038240_prof);

        
        $__internal_d7c10c3e92abba2e11ff0ac9d6bef09312faf8f859839649852f9512e4be3419->leave($__internal_d7c10c3e92abba2e11ff0ac9d6bef09312faf8f859839649852f9512e4be3419_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\hebya\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
