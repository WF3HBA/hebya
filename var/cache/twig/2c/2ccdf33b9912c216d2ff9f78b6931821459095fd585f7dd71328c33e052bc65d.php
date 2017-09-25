<?php

/* register/register.html.twig */
class __TwigTemplate_695f5c7def979403add537da4048d8e96dc74f07d75731f19f7a1732c18b10ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register/register.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7525a13ff573e01bde75263a808520cccfeefdc6bcb6e394f3f1b00cdd3ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7525a13ff573e01bde75263a808520cccfeefdc6bcb6e394f3f1b00cdd3ced->enter($__internal_8e7525a13ff573e01bde75263a808520cccfeefdc6bcb6e394f3f1b00cdd3ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_9ef18d681bad1328c640c41fbab1a3d199bf608704c41ea6648e391b75d6f725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef18d681bad1328c640c41fbab1a3d199bf608704c41ea6648e391b75d6f725->enter($__internal_9ef18d681bad1328c640c41fbab1a3d199bf608704c41ea6648e391b75d6f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7525a13ff573e01bde75263a808520cccfeefdc6bcb6e394f3f1b00cdd3ced->leave($__internal_8e7525a13ff573e01bde75263a808520cccfeefdc6bcb6e394f3f1b00cdd3ced_prof);

        
        $__internal_9ef18d681bad1328c640c41fbab1a3d199bf608704c41ea6648e391b75d6f725->leave($__internal_9ef18d681bad1328c640c41fbab1a3d199bf608704c41ea6648e391b75d6f725_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_82bd27f9dae2d4a257bdfa6d2824036d3e29c53ea9ede8c896d076fde9b97472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bd27f9dae2d4a257bdfa6d2824036d3e29c53ea9ede8c896d076fde9b97472->enter($__internal_82bd27f9dae2d4a257bdfa6d2824036d3e29c53ea9ede8c896d076fde9b97472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e409b43f6af7c989571b4f5535f3fa2af2ee4ae431b19e89e31154a9c3660ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e409b43f6af7c989571b4f5535f3fa2af2ee4ae431b19e89e31154a9c3660ab2->enter($__internal_e409b43f6af7c989571b4f5535f3fa2af2ee4ae431b19e89e31154a9c3660ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_e409b43f6af7c989571b4f5535f3fa2af2ee4ae431b19e89e31154a9c3660ab2->leave($__internal_e409b43f6af7c989571b4f5535f3fa2af2ee4ae431b19e89e31154a9c3660ab2_prof);

        
        $__internal_82bd27f9dae2d4a257bdfa6d2824036d3e29c53ea9ede8c896d076fde9b97472->leave($__internal_82bd27f9dae2d4a257bdfa6d2824036d3e29c53ea9ede8c896d076fde9b97472_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c424d332f359176881e98e7081a80dd78cb0fb4f9d6c2ae0f7a153cf031149ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c424d332f359176881e98e7081a80dd78cb0fb4f9d6c2ae0f7a153cf031149ce->enter($__internal_c424d332f359176881e98e7081a80dd78cb0fb4f9d6c2ae0f7a153cf031149ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0c2f8cc8dd0c30c4d38f209d03bb5a330e971fea2956c444a3ca5060770f3ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2f8cc8dd0c30c4d38f209d03bb5a330e971fea2956c444a3ca5060770f3ceb->enter($__internal_0c2f8cc8dd0c30c4d38f209d03bb5a330e971fea2956c444a3ca5060770f3ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    
    <section class=\"container\">
        <div class=\"row centered-form register\">
            <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t<div class=\"panel panel-default\">
                    
        \t\t<div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Please sign up for Hebya <small><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" id=\"login\">already register?</a></small></h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t   <form role=\"form\" method=\"POST\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control input-sm\" placeholder=\"First Name\">
\t\t\t    \t\t</div>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control input-sm\" placeholder=\"Last Name\">
\t\t\t    \t\t</div>
                                    </div>
                                </div>

\t\t\t    \t<div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-sm\" placeholder=\"Email Address\">
\t\t\t    \t</div>

\t\t\t    \t<div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-sm\" placeholder=\"Password\">
\t\t\t    \t\t</div>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                        <div class=\"form-group\">
                                            <input type=\"password\" name=\"password_confirmation\" id=\"password_confirmation\" class=\"form-control input-sm\" placeholder=\"Confirm Password\">
\t\t\t    \t\t</div>
                                    </div>
\t\t\t    \t</div>
\t\t\t    \t\t\t
\t\t\t    \t<input type=\"submit\" value=\"Register\" class=\"btn btn-info btn-block\">
\t\t\t    \t\t
\t\t\t    </form>
\t\t\t</div>
                   
                </div>
            </div>
        </div>
    </section>
    
   
";
        
        $__internal_0c2f8cc8dd0c30c4d38f209d03bb5a330e971fea2956c444a3ca5060770f3ceb->leave($__internal_0c2f8cc8dd0c30c4d38f209d03bb5a330e971fea2956c444a3ca5060770f3ceb_prof);

        
        $__internal_c424d332f359176881e98e7081a80dd78cb0fb4f9d6c2ae0f7a153cf031149ce->leave($__internal_c424d332f359176881e98e7081a80dd78cb0fb4f9d6c2ae0f7a153cf031149ce_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0dba910c8bbbe3f67e02fdf76d338bddce99617148eb4acf1af5d6be38911e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dba910c8bbbe3f67e02fdf76d338bddce99617148eb4acf1af5d6be38911e64->enter($__internal_0dba910c8bbbe3f67e02fdf76d338bddce99617148eb4acf1af5d6be38911e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f9cd85df3b459bee06a7dfd1de3cdd6c31d1832cd38e606ff4e8ff1975a07ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cd85df3b459bee06a7dfd1de3cdd6c31d1832cd38e606ff4e8ff1975a07ce0->enter($__internal_f9cd85df3b459bee06a7dfd1de3cdd6c31d1832cd38e606ff4e8ff1975a07ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 67
        echo "     
";
        
        $__internal_f9cd85df3b459bee06a7dfd1de3cdd6c31d1832cd38e606ff4e8ff1975a07ce0->leave($__internal_f9cd85df3b459bee06a7dfd1de3cdd6c31d1832cd38e606ff4e8ff1975a07ce0_prof);

        
        $__internal_0dba910c8bbbe3f67e02fdf76d338bddce99617148eb4acf1af5d6be38911e64->leave($__internal_0dba910c8bbbe3f67e02fdf76d338bddce99617148eb4acf1af5d6be38911e64_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 67,  152 => 65,  143 => 64,  87 => 17,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/register/register.css\") }}\"/>

{% endblock %}
    
{% block content %}
    
    <section class=\"container\">
        <div class=\"row centered-form register\">
            <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t<div class=\"panel panel-default\">
                    
        \t\t<div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Please sign up for Hebya <small><a href=\"{{ path('login') }}\" id=\"login\">already register?</a></small></h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t   <form role=\"form\" method=\"POST\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control input-sm\" placeholder=\"First Name\">
\t\t\t    \t\t</div>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control input-sm\" placeholder=\"Last Name\">
\t\t\t    \t\t</div>
                                    </div>
                                </div>

\t\t\t    \t<div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-sm\" placeholder=\"Email Address\">
\t\t\t    \t</div>

\t\t\t    \t<div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-sm\" placeholder=\"Password\">
\t\t\t    \t\t</div>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                                        <div class=\"form-group\">
                                            <input type=\"password\" name=\"password_confirmation\" id=\"password_confirmation\" class=\"form-control input-sm\" placeholder=\"Confirm Password\">
\t\t\t    \t\t</div>
                                    </div>
\t\t\t    \t</div>
\t\t\t    \t\t\t
\t\t\t    \t<input type=\"submit\" value=\"Register\" class=\"btn btn-info btn-block\">
\t\t\t    \t\t
\t\t\t    </form>
\t\t\t</div>
                   
                </div>
            </div>
        </div>
    </section>
    
   
{% endblock %}

{% block javascript %}
    {{ parent() }}
{#     <script src=\"{{ asset('js/login/login.js') }}\"></script>#}
     
{% endblock %}
", "register/register.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\register\\register.html.twig");
    }
}
