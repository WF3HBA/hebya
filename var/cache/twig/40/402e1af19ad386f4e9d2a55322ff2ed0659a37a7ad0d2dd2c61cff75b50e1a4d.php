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
        $__internal_22e33efb0c76ced249aa6c047f78a527343fa12ffd82442a98e9383333dfff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e33efb0c76ced249aa6c047f78a527343fa12ffd82442a98e9383333dfff26->enter($__internal_22e33efb0c76ced249aa6c047f78a527343fa12ffd82442a98e9383333dfff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $__internal_2ff1c128ed5bc9b9c387274c3d8880ba009754de013b5b1b2e9a5141324c9d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff1c128ed5bc9b9c387274c3d8880ba009754de013b5b1b2e9a5141324c9d8b->enter($__internal_2ff1c128ed5bc9b9c387274c3d8880ba009754de013b5b1b2e9a5141324c9d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e33efb0c76ced249aa6c047f78a527343fa12ffd82442a98e9383333dfff26->leave($__internal_22e33efb0c76ced249aa6c047f78a527343fa12ffd82442a98e9383333dfff26_prof);

        
        $__internal_2ff1c128ed5bc9b9c387274c3d8880ba009754de013b5b1b2e9a5141324c9d8b->leave($__internal_2ff1c128ed5bc9b9c387274c3d8880ba009754de013b5b1b2e9a5141324c9d8b_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2e4bd7dd4dfafe9bf32ecbb203fdcc2a881701b0e09201c7d358cc058bdb8360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4bd7dd4dfafe9bf32ecbb203fdcc2a881701b0e09201c7d358cc058bdb8360->enter($__internal_2e4bd7dd4dfafe9bf32ecbb203fdcc2a881701b0e09201c7d358cc058bdb8360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_24e3be4e7e578e68e85bf387caecfb61fd4629f839fbd51a998ca6c4d3d62999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e3be4e7e578e68e85bf387caecfb61fd4629f839fbd51a998ca6c4d3d62999->enter($__internal_24e3be4e7e578e68e85bf387caecfb61fd4629f839fbd51a998ca6c4d3d62999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register/register.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_24e3be4e7e578e68e85bf387caecfb61fd4629f839fbd51a998ca6c4d3d62999->leave($__internal_24e3be4e7e578e68e85bf387caecfb61fd4629f839fbd51a998ca6c4d3d62999_prof);

        
        $__internal_2e4bd7dd4dfafe9bf32ecbb203fdcc2a881701b0e09201c7d358cc058bdb8360->leave($__internal_2e4bd7dd4dfafe9bf32ecbb203fdcc2a881701b0e09201c7d358cc058bdb8360_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_689330f0606bd2ae9c8bcf6340596787d15181500443fabed9de6c0a346e4243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689330f0606bd2ae9c8bcf6340596787d15181500443fabed9de6c0a346e4243->enter($__internal_689330f0606bd2ae9c8bcf6340596787d15181500443fabed9de6c0a346e4243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c15e8b70dbf09966cd1ba6012cf44cfdd2e681e14e3e20cfb5e2d6722816bdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15e8b70dbf09966cd1ba6012cf44cfdd2e681e14e3e20cfb5e2d6722816bdf7->enter($__internal_c15e8b70dbf09966cd1ba6012cf44cfdd2e681e14e3e20cfb5e2d6722816bdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c15e8b70dbf09966cd1ba6012cf44cfdd2e681e14e3e20cfb5e2d6722816bdf7->leave($__internal_c15e8b70dbf09966cd1ba6012cf44cfdd2e681e14e3e20cfb5e2d6722816bdf7_prof);

        
        $__internal_689330f0606bd2ae9c8bcf6340596787d15181500443fabed9de6c0a346e4243->leave($__internal_689330f0606bd2ae9c8bcf6340596787d15181500443fabed9de6c0a346e4243_prof);

    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_39b3f996f75411a20028a249481b5918b885723c05a5c7471782a8a57d25f97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b3f996f75411a20028a249481b5918b885723c05a5c7471782a8a57d25f97a->enter($__internal_39b3f996f75411a20028a249481b5918b885723c05a5c7471782a8a57d25f97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2a22da6c9c73508995bbcf8ab468dc25daf09e8f682ce5a3c24e43a1eb0be186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a22da6c9c73508995bbcf8ab468dc25daf09e8f682ce5a3c24e43a1eb0be186->enter($__internal_2a22da6c9c73508995bbcf8ab468dc25daf09e8f682ce5a3c24e43a1eb0be186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        // line 53
        echo "     
";
        
        $__internal_2a22da6c9c73508995bbcf8ab468dc25daf09e8f682ce5a3c24e43a1eb0be186->leave($__internal_2a22da6c9c73508995bbcf8ab468dc25daf09e8f682ce5a3c24e43a1eb0be186_prof);

        
        $__internal_39b3f996f75411a20028a249481b5918b885723c05a5c7471782a8a57d25f97a->leave($__internal_39b3f996f75411a20028a249481b5918b885723c05a5c7471782a8a57d25f97a_prof);

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
