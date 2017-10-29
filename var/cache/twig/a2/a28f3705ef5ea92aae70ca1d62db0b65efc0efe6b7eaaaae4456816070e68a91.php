<?php

/* admin/adminAboutEdit.html.twig */
class __TwigTemplate_7960f279cc89cc5541c1be6919cd20e52b3766b442c6054ccb5c276d93eaaee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminAboutEdit.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21f1c18901aed90a9ddbb2e6effe335b3021b5ca816182d6cddb2952f90e738c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f1c18901aed90a9ddbb2e6effe335b3021b5ca816182d6cddb2952f90e738c->enter($__internal_21f1c18901aed90a9ddbb2e6effe335b3021b5ca816182d6cddb2952f90e738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAboutEdit.html.twig"));

        $__internal_264247da14b14675a33594cde78c35d0cd63df65a19530df61f5c0fdd8d11f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264247da14b14675a33594cde78c35d0cd63df65a19530df61f5c0fdd8d11f9d->enter($__internal_264247da14b14675a33594cde78c35d0cd63df65a19530df61f5c0fdd8d11f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAboutEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f1c18901aed90a9ddbb2e6effe335b3021b5ca816182d6cddb2952f90e738c->leave($__internal_21f1c18901aed90a9ddbb2e6effe335b3021b5ca816182d6cddb2952f90e738c_prof);

        
        $__internal_264247da14b14675a33594cde78c35d0cd63df65a19530df61f5c0fdd8d11f9d->leave($__internal_264247da14b14675a33594cde78c35d0cd63df65a19530df61f5c0fdd8d11f9d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8511cdf08f03bfffec0145ba8c057aead3756070dd05869e700b16ad75c8adc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8511cdf08f03bfffec0145ba8c057aead3756070dd05869e700b16ad75c8adc5->enter($__internal_8511cdf08f03bfffec0145ba8c057aead3756070dd05869e700b16ad75c8adc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_07e7414eb263c61e2e63a62e1711103a85ce205e44130becea48b2ae068ba66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e7414eb263c61e2e63a62e1711103a85ce205e44130becea48b2ae068ba66b->enter($__internal_07e7414eb263c61e2e63a62e1711103a85ce205e44130becea48b2ae068ba66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_07e7414eb263c61e2e63a62e1711103a85ce205e44130becea48b2ae068ba66b->leave($__internal_07e7414eb263c61e2e63a62e1711103a85ce205e44130becea48b2ae068ba66b_prof);

        
        $__internal_8511cdf08f03bfffec0145ba8c057aead3756070dd05869e700b16ad75c8adc5->leave($__internal_8511cdf08f03bfffec0145ba8c057aead3756070dd05869e700b16ad75c8adc5_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8017be53d88ab948b608dc12ac248a94a694e71c82d2e02622aa70f8597c4d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8017be53d88ab948b608dc12ac248a94a694e71c82d2e02622aa70f8597c4d00->enter($__internal_8017be53d88ab948b608dc12ac248a94a694e71c82d2e02622aa70f8597c4d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0249346bbfb8b89ffa6fee9345e83b489ffef44c25b05784773ad7a96b16aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0249346bbfb8b89ffa6fee9345e83b489ffef44c25b05784773ad7a96b16aad->enter($__internal_d0249346bbfb8b89ffa6fee9345e83b489ffef44c25b05784773ad7a96b16aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>Edition des à propos</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"target\">Section</label>  
                    <div class=\"col-md-8\">
                        <p class=\"form-control p-md\">";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 16, $this->getSourceContext()); })()), "section", array())), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"title\">Titre</label>  
                    <div class=\"col-md-8\">
                        <input id=\"title\" name=\"title\" type=\"text\" placeholder=\"\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 22, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 28, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
               
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_about");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
";
        
        $__internal_d0249346bbfb8b89ffa6fee9345e83b489ffef44c25b05784773ad7a96b16aad->leave($__internal_d0249346bbfb8b89ffa6fee9345e83b489ffef44c25b05784773ad7a96b16aad_prof);

        
        $__internal_8017be53d88ab948b608dc12ac248a94a694e71c82d2e02622aa70f8597c4d00->leave($__internal_8017be53d88ab948b608dc12ac248a94a694e71c82d2e02622aa70f8597c4d00_prof);

    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2e115e38edebcda00da77c0d6663d0e27b5d4bf9689c3cf42a46c6e4a7026a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e115e38edebcda00da77c0d6663d0e27b5d4bf9689c3cf42a46c6e4a7026a6c->enter($__internal_2e115e38edebcda00da77c0d6663d0e27b5d4bf9689c3cf42a46c6e4a7026a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_bdd48be873337e3cc703fc20d080814e3df565bcf8b505ce43270b191a4dad1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd48be873337e3cc703fc20d080814e3df565bcf8b505ce43270b191a4dad1b->enter($__internal_bdd48be873337e3cc703fc20d080814e3df565bcf8b505ce43270b191a4dad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#content')
        });
    </script>
";
        
        $__internal_bdd48be873337e3cc703fc20d080814e3df565bcf8b505ce43270b191a4dad1b->leave($__internal_bdd48be873337e3cc703fc20d080814e3df565bcf8b505ce43270b191a4dad1b_prof);

        
        $__internal_2e115e38edebcda00da77c0d6663d0e27b5d4bf9689c3cf42a46c6e4a7026a6c->leave($__internal_2e115e38edebcda00da77c0d6663d0e27b5d4bf9689c3cf42a46c6e4a7026a6c_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminAboutEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  154 => 48,  150 => 47,  146 => 46,  141 => 45,  132 => 44,  115 => 36,  104 => 28,  95 => 22,  86 => 16,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/admin/simditor.css') }}\" />
{% endblock %}

{% block content %}
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>Edition des à propos</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"target\">Section</label>  
                    <div class=\"col-md-8\">
                        <p class=\"form-control p-md\">{{ about.section|capitalize }}</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"title\">Titre</label>  
                    <div class=\"col-md-8\">
                        <input id=\"title\" name=\"title\" type=\"text\" placeholder=\"\" value=\"{{ about.title }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">{{ about.content }}</textarea>
                    </div>
                </div>
               
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"{{ path('admin_about') }}\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/module.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/hotkeys.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/uploader.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/simditor.min.js') }}\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#content')
        });
    </script>
{% endblock %}
", "admin/adminAboutEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminAboutEdit.html.twig");
    }
}
