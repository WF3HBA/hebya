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
        $__internal_dc8a6749ed63cdc67a2de61bf73a972ada04d5e16fc3fbbd48db87d8c6dc56d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a6749ed63cdc67a2de61bf73a972ada04d5e16fc3fbbd48db87d8c6dc56d2->enter($__internal_dc8a6749ed63cdc67a2de61bf73a972ada04d5e16fc3fbbd48db87d8c6dc56d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $__internal_8049f93e2b37b9344cbc2a0fcade931f923f25aba2a0fd62a491319cf59f0468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8049f93e2b37b9344cbc2a0fcade931f923f25aba2a0fd62a491319cf59f0468->enter($__internal_8049f93e2b37b9344cbc2a0fcade931f923f25aba2a0fd62a491319cf59f0468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8a6749ed63cdc67a2de61bf73a972ada04d5e16fc3fbbd48db87d8c6dc56d2->leave($__internal_dc8a6749ed63cdc67a2de61bf73a972ada04d5e16fc3fbbd48db87d8c6dc56d2_prof);

        
        $__internal_8049f93e2b37b9344cbc2a0fcade931f923f25aba2a0fd62a491319cf59f0468->leave($__internal_8049f93e2b37b9344cbc2a0fcade931f923f25aba2a0fd62a491319cf59f0468_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ba01b0ea63d94ed251620a31a349eceaba1a4b211a96699630a589c8248c0a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba01b0ea63d94ed251620a31a349eceaba1a4b211a96699630a589c8248c0a7b->enter($__internal_ba01b0ea63d94ed251620a31a349eceaba1a4b211a96699630a589c8248c0a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ac0e4a1dc363d6d71176051b21df62b473934142ede344c70126bc522e3d19aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0e4a1dc363d6d71176051b21df62b473934142ede344c70126bc522e3d19aa->enter($__internal_ac0e4a1dc363d6d71176051b21df62b473934142ede344c70126bc522e3d19aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_ac0e4a1dc363d6d71176051b21df62b473934142ede344c70126bc522e3d19aa->leave($__internal_ac0e4a1dc363d6d71176051b21df62b473934142ede344c70126bc522e3d19aa_prof);

        
        $__internal_ba01b0ea63d94ed251620a31a349eceaba1a4b211a96699630a589c8248c0a7b->leave($__internal_ba01b0ea63d94ed251620a31a349eceaba1a4b211a96699630a589c8248c0a7b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f145f0bf0ee0efbe6494ff3b2b6aa1401e3989d3ceb82bea2385aaf6091dc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f145f0bf0ee0efbe6494ff3b2b6aa1401e3989d3ceb82bea2385aaf6091dc55->enter($__internal_3f145f0bf0ee0efbe6494ff3b2b6aa1401e3989d3ceb82bea2385aaf6091dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b2d41c2cab855a49495771bc9a013c36d0914f3c458718c02ef953133d8cd069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d41c2cab855a49495771bc9a013c36d0914f3c458718c02ef953133d8cd069->enter($__internal_b2d41c2cab855a49495771bc9a013c36d0914f3c458718c02ef953133d8cd069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b2d41c2cab855a49495771bc9a013c36d0914f3c458718c02ef953133d8cd069->leave($__internal_b2d41c2cab855a49495771bc9a013c36d0914f3c458718c02ef953133d8cd069_prof);

        
        $__internal_3f145f0bf0ee0efbe6494ff3b2b6aa1401e3989d3ceb82bea2385aaf6091dc55->leave($__internal_3f145f0bf0ee0efbe6494ff3b2b6aa1401e3989d3ceb82bea2385aaf6091dc55_prof);

    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6ee7cc12a245536c28d37a42dce34e1db28bc5b8c147919f6e87aded8ca10001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee7cc12a245536c28d37a42dce34e1db28bc5b8c147919f6e87aded8ca10001->enter($__internal_6ee7cc12a245536c28d37a42dce34e1db28bc5b8c147919f6e87aded8ca10001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9596b4fd847835e2d656493333d6965b25d2866d7988f2b1defeb80777c80c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9596b4fd847835e2d656493333d6965b25d2866d7988f2b1defeb80777c80c93->enter($__internal_9596b4fd847835e2d656493333d6965b25d2866d7988f2b1defeb80777c80c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 53
        echo "     
";
        
        $__internal_9596b4fd847835e2d656493333d6965b25d2866d7988f2b1defeb80777c80c93->leave($__internal_9596b4fd847835e2d656493333d6965b25d2866d7988f2b1defeb80777c80c93_prof);

        
        $__internal_6ee7cc12a245536c28d37a42dce34e1db28bc5b8c147919f6e87aded8ca10001->leave($__internal_6ee7cc12a245536c28d37a42dce34e1db28bc5b8c147919f6e87aded8ca10001_prof);

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
