<?php

/* register/login.html.twig */
class __TwigTemplate_4b490887ef61e944352da4eb10a6a91502523cf2b4d8aee5fcce8520d9cc1cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register/login.html.twig", 1);
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
        $__internal_bacd9449344655b8296f1d32a8fb4608a504de019896633ab42a18b066b90765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacd9449344655b8296f1d32a8fb4608a504de019896633ab42a18b066b90765->enter($__internal_bacd9449344655b8296f1d32a8fb4608a504de019896633ab42a18b066b90765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $__internal_aac09dafe24d66a0ebfdc66c6f9c1e48938bfe67872ed4636ccfb540bc3fcdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac09dafe24d66a0ebfdc66c6f9c1e48938bfe67872ed4636ccfb540bc3fcdff->enter($__internal_aac09dafe24d66a0ebfdc66c6f9c1e48938bfe67872ed4636ccfb540bc3fcdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacd9449344655b8296f1d32a8fb4608a504de019896633ab42a18b066b90765->leave($__internal_bacd9449344655b8296f1d32a8fb4608a504de019896633ab42a18b066b90765_prof);

        
        $__internal_aac09dafe24d66a0ebfdc66c6f9c1e48938bfe67872ed4636ccfb540bc3fcdff->leave($__internal_aac09dafe24d66a0ebfdc66c6f9c1e48938bfe67872ed4636ccfb540bc3fcdff_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ef80d278738fa3a1258ae070617c57dd3c927d89e49f3fea29767fa034e09993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef80d278738fa3a1258ae070617c57dd3c927d89e49f3fea29767fa034e09993->enter($__internal_ef80d278738fa3a1258ae070617c57dd3c927d89e49f3fea29767fa034e09993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_78555852806673d46177e0478c51f85788c06c9b5b68d31c920ed44f766a9d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78555852806673d46177e0478c51f85788c06c9b5b68d31c920ed44f766a9d33->enter($__internal_78555852806673d46177e0478c51f85788c06c9b5b68d31c920ed44f766a9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_78555852806673d46177e0478c51f85788c06c9b5b68d31c920ed44f766a9d33->leave($__internal_78555852806673d46177e0478c51f85788c06c9b5b68d31c920ed44f766a9d33_prof);

        
        $__internal_ef80d278738fa3a1258ae070617c57dd3c927d89e49f3fea29767fa034e09993->leave($__internal_ef80d278738fa3a1258ae070617c57dd3c927d89e49f3fea29767fa034e09993_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5dad1f1f596d37923899dde1c0238910db49a8741e202c494dc8147f9e2e1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dad1f1f596d37923899dde1c0238910db49a8741e202c494dc8147f9e2e1d5->enter($__internal_b5dad1f1f596d37923899dde1c0238910db49a8741e202c494dc8147f9e2e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aebdc22078706a75324798779e6b4dce35a439134d400f2391f6e743d1a58182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebdc22078706a75324798779e6b4dce35a439134d400f2391f6e743d1a58182->enter($__internal_aebdc22078706a75324798779e6b4dce35a439134d400f2391f6e743d1a58182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    
   
    
    <div class=\"container\">
        <div class=\"row centered-form\">
            <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t<div class=\"panel panel-default\">
        \t\t<div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Connectez vous sur Hebya <small><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" id=\"account\">Créer un compte</a></small></h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t   <form role=\"form\" method=\"POST\">
                                

\t\t\t    \t<div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-sm\" placeholder=\"Adresse mail\">
\t\t\t    \t</div>

\t\t\t    \t<div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-sm\" placeholder=\"Mot de passe\">
\t\t\t    \t\t</div>
                                    </div>
                                    
\t\t\t    \t</div>
\t\t\t    \t\t\t
\t\t\t    \t<input type=\"submit\" name=\"submit\" value=\"Connexion\" class=\"btn btn-info btn-block\">
\t\t\t    \t\t
\t\t\t    </form>
                            <div class=\"text-center\">
                                <a>forget password?</a>
                            </div>
\t\t\t</div>
                    </div>
    \t\t</div>
            </div>
        </div>
";
        
        $__internal_aebdc22078706a75324798779e6b4dce35a439134d400f2391f6e743d1a58182->leave($__internal_aebdc22078706a75324798779e6b4dce35a439134d400f2391f6e743d1a58182_prof);

        
        $__internal_b5dad1f1f596d37923899dde1c0238910db49a8741e202c494dc8147f9e2e1d5->leave($__internal_b5dad1f1f596d37923899dde1c0238910db49a8741e202c494dc8147f9e2e1d5_prof);

    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_838de1a7842f9fd32ca1bf46b8b846f43a67b0404fb312f8d54ae7b0b46a1c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838de1a7842f9fd32ca1bf46b8b846f43a67b0404fb312f8d54ae7b0b46a1c52->enter($__internal_838de1a7842f9fd32ca1bf46b8b846f43a67b0404fb312f8d54ae7b0b46a1c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1c927dfd26fda3a3f3b727974f7dd875e9be573e92f0b19bc57ddc472ef16284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c927dfd26fda3a3f3b727974f7dd875e9be573e92f0b19bc57ddc472ef16284->enter($__internal_1c927dfd26fda3a3f3b727974f7dd875e9be573e92f0b19bc57ddc472ef16284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 53
        echo "     
";
        
        $__internal_1c927dfd26fda3a3f3b727974f7dd875e9be573e92f0b19bc57ddc472ef16284->leave($__internal_1c927dfd26fda3a3f3b727974f7dd875e9be573e92f0b19bc57ddc472ef16284_prof);

        
        $__internal_838de1a7842f9fd32ca1bf46b8b846f43a67b0404fb312f8d54ae7b0b46a1c52->leave($__internal_838de1a7842f9fd32ca1bf46b8b846f43a67b0404fb312f8d54ae7b0b46a1c52_prof);

    }

    public function getTemplateName()
    {
        return "register/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  138 => 51,  129 => 50,  88 => 18,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/register/register.css\") }}\"/>

{% endblock %}
    
{% block content %}
    
   
    
    <div class=\"container\">
        <div class=\"row centered-form\">
            <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t<div class=\"panel panel-default\">
        \t\t<div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Connectez vous sur Hebya <small><a href=\"{{ path('register') }}\" id=\"account\">Créer un compte</a></small></h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t   <form role=\"form\" method=\"POST\">
                                

\t\t\t    \t<div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-sm\" placeholder=\"Adresse mail\">
\t\t\t    \t</div>

\t\t\t    \t<div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
\t\t\t    \t\t<div class=\"form-group\">
                                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-sm\" placeholder=\"Mot de passe\">
\t\t\t    \t\t</div>
                                    </div>
                                    
\t\t\t    \t</div>
\t\t\t    \t\t\t
\t\t\t    \t<input type=\"submit\" name=\"submit\" value=\"Connexion\" class=\"btn btn-info btn-block\">
\t\t\t    \t\t
\t\t\t    </form>
                            <div class=\"text-center\">
                                <a>forget password?</a>
                            </div>
\t\t\t</div>
                    </div>
    \t\t</div>
            </div>
        </div>
{% endblock %}

{% block javascript %}
    {{ parent() }}
{#     <script src=\"{{ asset('js/login/login.js') }}\"></script>#}
     
{% endblock %}

", "register/login.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\register\\login.html.twig");
    }
}
