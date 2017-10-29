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
        $__internal_23c8b74c0aa1415ba1ad2df5e779dd64af7842f84f09709b253624af2bd785b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c8b74c0aa1415ba1ad2df5e779dd64af7842f84f09709b253624af2bd785b2->enter($__internal_23c8b74c0aa1415ba1ad2df5e779dd64af7842f84f09709b253624af2bd785b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_0167b57edc8d6b22e02d5572ae5b231f90e10293580f09b825d4d8667d213c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0167b57edc8d6b22e02d5572ae5b231f90e10293580f09b825d4d8667d213c74->enter($__internal_0167b57edc8d6b22e02d5572ae5b231f90e10293580f09b825d4d8667d213c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c8b74c0aa1415ba1ad2df5e779dd64af7842f84f09709b253624af2bd785b2->leave($__internal_23c8b74c0aa1415ba1ad2df5e779dd64af7842f84f09709b253624af2bd785b2_prof);

        
        $__internal_0167b57edc8d6b22e02d5572ae5b231f90e10293580f09b825d4d8667d213c74->leave($__internal_0167b57edc8d6b22e02d5572ae5b231f90e10293580f09b825d4d8667d213c74_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e3b8404299bf3bf2fbbc4b64c4e34d82ef8e6bfa75c53cb384d2c02c2b4e5e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b8404299bf3bf2fbbc4b64c4e34d82ef8e6bfa75c53cb384d2c02c2b4e5e6d->enter($__internal_e3b8404299bf3bf2fbbc4b64c4e34d82ef8e6bfa75c53cb384d2c02c2b4e5e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0a26a6b6a40b9269dfe12618551a20309e55e24e012c9de85506de8c8415fc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a26a6b6a40b9269dfe12618551a20309e55e24e012c9de85506de8c8415fc3e->enter($__internal_0a26a6b6a40b9269dfe12618551a20309e55e24e012c9de85506de8c8415fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_0a26a6b6a40b9269dfe12618551a20309e55e24e012c9de85506de8c8415fc3e->leave($__internal_0a26a6b6a40b9269dfe12618551a20309e55e24e012c9de85506de8c8415fc3e_prof);

        
        $__internal_e3b8404299bf3bf2fbbc4b64c4e34d82ef8e6bfa75c53cb384d2c02c2b4e5e6d->leave($__internal_e3b8404299bf3bf2fbbc4b64c4e34d82ef8e6bfa75c53cb384d2c02c2b4e5e6d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2cfeee63024fff0b2d685b2a649bbec3703fffab917bf1ca3e5d3bef658a2be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfeee63024fff0b2d685b2a649bbec3703fffab917bf1ca3e5d3bef658a2be5->enter($__internal_2cfeee63024fff0b2d685b2a649bbec3703fffab917bf1ca3e5d3bef658a2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_761d8e028e82d8483bbe13e8362f5df3c3648c097c114c69eb7aa3761637c610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761d8e028e82d8483bbe13e8362f5df3c3648c097c114c69eb7aa3761637c610->enter($__internal_761d8e028e82d8483bbe13e8362f5df3c3648c097c114c69eb7aa3761637c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_761d8e028e82d8483bbe13e8362f5df3c3648c097c114c69eb7aa3761637c610->leave($__internal_761d8e028e82d8483bbe13e8362f5df3c3648c097c114c69eb7aa3761637c610_prof);

        
        $__internal_2cfeee63024fff0b2d685b2a649bbec3703fffab917bf1ca3e5d3bef658a2be5->leave($__internal_2cfeee63024fff0b2d685b2a649bbec3703fffab917bf1ca3e5d3bef658a2be5_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_69f61033dc9b4b679129e33d931b2a9a5c9f97959eba6dfbf6fbb9d7bbc2ca84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f61033dc9b4b679129e33d931b2a9a5c9f97959eba6dfbf6fbb9d7bbc2ca84->enter($__internal_69f61033dc9b4b679129e33d931b2a9a5c9f97959eba6dfbf6fbb9d7bbc2ca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9435898a06395f15b6fd6fbbe1da1cf1ad098c836bd3a558c9d9b051389b9281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9435898a06395f15b6fd6fbbe1da1cf1ad098c836bd3a558c9d9b051389b9281->enter($__internal_9435898a06395f15b6fd6fbbe1da1cf1ad098c836bd3a558c9d9b051389b9281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 67
        echo "     
";
        
        $__internal_9435898a06395f15b6fd6fbbe1da1cf1ad098c836bd3a558c9d9b051389b9281->leave($__internal_9435898a06395f15b6fd6fbbe1da1cf1ad098c836bd3a558c9d9b051389b9281_prof);

        
        $__internal_69f61033dc9b4b679129e33d931b2a9a5c9f97959eba6dfbf6fbb9d7bbc2ca84->leave($__internal_69f61033dc9b4b679129e33d931b2a9a5c9f97959eba6dfbf6fbb9d7bbc2ca84_prof);

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
