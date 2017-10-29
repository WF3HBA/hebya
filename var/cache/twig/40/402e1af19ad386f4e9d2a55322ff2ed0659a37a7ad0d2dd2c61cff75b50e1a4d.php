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
        $__internal_a93530d3a9e3303b89c2d3f56717b1dbaa8f8c3cf295f0bc018ee3b3ae494934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93530d3a9e3303b89c2d3f56717b1dbaa8f8c3cf295f0bc018ee3b3ae494934->enter($__internal_a93530d3a9e3303b89c2d3f56717b1dbaa8f8c3cf295f0bc018ee3b3ae494934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $__internal_b3707cc301d27935f5d141fb679a2317953b28777ec296adb5f0b92f6478c4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3707cc301d27935f5d141fb679a2317953b28777ec296adb5f0b92f6478c4a8->enter($__internal_b3707cc301d27935f5d141fb679a2317953b28777ec296adb5f0b92f6478c4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93530d3a9e3303b89c2d3f56717b1dbaa8f8c3cf295f0bc018ee3b3ae494934->leave($__internal_a93530d3a9e3303b89c2d3f56717b1dbaa8f8c3cf295f0bc018ee3b3ae494934_prof);

        
        $__internal_b3707cc301d27935f5d141fb679a2317953b28777ec296adb5f0b92f6478c4a8->leave($__internal_b3707cc301d27935f5d141fb679a2317953b28777ec296adb5f0b92f6478c4a8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d8ff780abff646073b42805bb0f6fb6c41090547af60720945a71640a43e4c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ff780abff646073b42805bb0f6fb6c41090547af60720945a71640a43e4c2b->enter($__internal_d8ff780abff646073b42805bb0f6fb6c41090547af60720945a71640a43e4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7ab0c50a463be57b57f55f5d1731a5be249bdfc706ce712c066119dc7a2c0a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab0c50a463be57b57f55f5d1731a5be249bdfc706ce712c066119dc7a2c0a64->enter($__internal_7ab0c50a463be57b57f55f5d1731a5be249bdfc706ce712c066119dc7a2c0a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_7ab0c50a463be57b57f55f5d1731a5be249bdfc706ce712c066119dc7a2c0a64->leave($__internal_7ab0c50a463be57b57f55f5d1731a5be249bdfc706ce712c066119dc7a2c0a64_prof);

        
        $__internal_d8ff780abff646073b42805bb0f6fb6c41090547af60720945a71640a43e4c2b->leave($__internal_d8ff780abff646073b42805bb0f6fb6c41090547af60720945a71640a43e4c2b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_38fa3031e67e828993f1efc299944a5b1913d7b92bfeb20e82d4ea00bf84621e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fa3031e67e828993f1efc299944a5b1913d7b92bfeb20e82d4ea00bf84621e->enter($__internal_38fa3031e67e828993f1efc299944a5b1913d7b92bfeb20e82d4ea00bf84621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1042b3ce5cc6c4f317c1e809ffa97a93f95aabfd18e17f2cd5c44dc35c614435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1042b3ce5cc6c4f317c1e809ffa97a93f95aabfd18e17f2cd5c44dc35c614435->enter($__internal_1042b3ce5cc6c4f317c1e809ffa97a93f95aabfd18e17f2cd5c44dc35c614435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1042b3ce5cc6c4f317c1e809ffa97a93f95aabfd18e17f2cd5c44dc35c614435->leave($__internal_1042b3ce5cc6c4f317c1e809ffa97a93f95aabfd18e17f2cd5c44dc35c614435_prof);

        
        $__internal_38fa3031e67e828993f1efc299944a5b1913d7b92bfeb20e82d4ea00bf84621e->leave($__internal_38fa3031e67e828993f1efc299944a5b1913d7b92bfeb20e82d4ea00bf84621e_prof);

    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3b75f4e7465b3798aa11f4f11225770a200a93f96855cdf57868aa045038873f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b75f4e7465b3798aa11f4f11225770a200a93f96855cdf57868aa045038873f->enter($__internal_3b75f4e7465b3798aa11f4f11225770a200a93f96855cdf57868aa045038873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_e487a8f563029d773fffc3fcc727b46a4618fd24ef49025c98240acd1af3edd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e487a8f563029d773fffc3fcc727b46a4618fd24ef49025c98240acd1af3edd2->enter($__internal_e487a8f563029d773fffc3fcc727b46a4618fd24ef49025c98240acd1af3edd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 53
        echo "     
";
        
        $__internal_e487a8f563029d773fffc3fcc727b46a4618fd24ef49025c98240acd1af3edd2->leave($__internal_e487a8f563029d773fffc3fcc727b46a4618fd24ef49025c98240acd1af3edd2_prof);

        
        $__internal_3b75f4e7465b3798aa11f4f11225770a200a93f96855cdf57868aa045038873f->leave($__internal_3b75f4e7465b3798aa11f4f11225770a200a93f96855cdf57868aa045038873f_prof);

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
