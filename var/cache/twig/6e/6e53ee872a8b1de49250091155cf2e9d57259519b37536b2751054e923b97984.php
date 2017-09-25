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
        $__internal_8044a0a2eb97e174720399e17bd569b25a342b4435b5010fe95ff5bd47c4fa27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8044a0a2eb97e174720399e17bd569b25a342b4435b5010fe95ff5bd47c4fa27->enter($__internal_8044a0a2eb97e174720399e17bd569b25a342b4435b5010fe95ff5bd47c4fa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50671316e6fce3bb6b7c600ab4cacc50efab43776a1bc6c6ea9efcdd6ff2635a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50671316e6fce3bb6b7c600ab4cacc50efab43776a1bc6c6ea9efcdd6ff2635a->enter($__internal_50671316e6fce3bb6b7c600ab4cacc50efab43776a1bc6c6ea9efcdd6ff2635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8044a0a2eb97e174720399e17bd569b25a342b4435b5010fe95ff5bd47c4fa27->leave($__internal_8044a0a2eb97e174720399e17bd569b25a342b4435b5010fe95ff5bd47c4fa27_prof);

        
        $__internal_50671316e6fce3bb6b7c600ab4cacc50efab43776a1bc6c6ea9efcdd6ff2635a->leave($__internal_50671316e6fce3bb6b7c600ab4cacc50efab43776a1bc6c6ea9efcdd6ff2635a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_325d76cd69165c9e8f49011f50558321114679ef9476573424d08721729f82d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325d76cd69165c9e8f49011f50558321114679ef9476573424d08721729f82d2->enter($__internal_325d76cd69165c9e8f49011f50558321114679ef9476573424d08721729f82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b880bdd24d6a6fc5591c3f22e3467045da1f5fa1738d33d074d724f827ddea4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b880bdd24d6a6fc5591c3f22e3467045da1f5fa1738d33d074d724f827ddea4a->enter($__internal_b880bdd24d6a6fc5591c3f22e3467045da1f5fa1738d33d074d724f827ddea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b880bdd24d6a6fc5591c3f22e3467045da1f5fa1738d33d074d724f827ddea4a->leave($__internal_b880bdd24d6a6fc5591c3f22e3467045da1f5fa1738d33d074d724f827ddea4a_prof);

        
        $__internal_325d76cd69165c9e8f49011f50558321114679ef9476573424d08721729f82d2->leave($__internal_325d76cd69165c9e8f49011f50558321114679ef9476573424d08721729f82d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fc7618a0d66a89a4d72873880bae9cb97ff5aec660f9d284d1a06b18d2e92b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc7618a0d66a89a4d72873880bae9cb97ff5aec660f9d284d1a06b18d2e92b3->enter($__internal_0fc7618a0d66a89a4d72873880bae9cb97ff5aec660f9d284d1a06b18d2e92b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ff588a47adbfe03e713fa0b47f450bc1298c8b9b5d7810f5789f167be1250f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff588a47adbfe03e713fa0b47f450bc1298c8b9b5d7810f5789f167be1250f9->enter($__internal_9ff588a47adbfe03e713fa0b47f450bc1298c8b9b5d7810f5789f167be1250f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ff588a47adbfe03e713fa0b47f450bc1298c8b9b5d7810f5789f167be1250f9->leave($__internal_9ff588a47adbfe03e713fa0b47f450bc1298c8b9b5d7810f5789f167be1250f9_prof);

        
        $__internal_0fc7618a0d66a89a4d72873880bae9cb97ff5aec660f9d284d1a06b18d2e92b3->leave($__internal_0fc7618a0d66a89a4d72873880bae9cb97ff5aec660f9d284d1a06b18d2e92b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61f1496e45edb703e63f5374a7952e473012e1468bffce305b397808d75dff1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f1496e45edb703e63f5374a7952e473012e1468bffce305b397808d75dff1c->enter($__internal_61f1496e45edb703e63f5374a7952e473012e1468bffce305b397808d75dff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3afd6fea665cb559af2d671e60c413746ca4dfc57651a94f699555a063732e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afd6fea665cb559af2d671e60c413746ca4dfc57651a94f699555a063732e4e->enter($__internal_3afd6fea665cb559af2d671e60c413746ca4dfc57651a94f699555a063732e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3afd6fea665cb559af2d671e60c413746ca4dfc57651a94f699555a063732e4e->leave($__internal_3afd6fea665cb559af2d671e60c413746ca4dfc57651a94f699555a063732e4e_prof);

        
        $__internal_61f1496e45edb703e63f5374a7952e473012e1468bffce305b397808d75dff1c->leave($__internal_61f1496e45edb703e63f5374a7952e473012e1468bffce305b397808d75dff1c_prof);

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
