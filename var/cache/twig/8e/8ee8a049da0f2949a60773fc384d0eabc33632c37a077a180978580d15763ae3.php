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
        $__internal_4737e958b4ec73202ebdebcdb679fa807f2aa864ee1335941641f1672b388c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4737e958b4ec73202ebdebcdb679fa807f2aa864ee1335941641f1672b388c0d->enter($__internal_4737e958b4ec73202ebdebcdb679fa807f2aa864ee1335941641f1672b388c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3563a15fb93e13eb815396fc98a6065176581c5bb4bf844773888ee3b55833a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3563a15fb93e13eb815396fc98a6065176581c5bb4bf844773888ee3b55833a2->enter($__internal_3563a15fb93e13eb815396fc98a6065176581c5bb4bf844773888ee3b55833a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4737e958b4ec73202ebdebcdb679fa807f2aa864ee1335941641f1672b388c0d->leave($__internal_4737e958b4ec73202ebdebcdb679fa807f2aa864ee1335941641f1672b388c0d_prof);

        
        $__internal_3563a15fb93e13eb815396fc98a6065176581c5bb4bf844773888ee3b55833a2->leave($__internal_3563a15fb93e13eb815396fc98a6065176581c5bb4bf844773888ee3b55833a2_prof);

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
