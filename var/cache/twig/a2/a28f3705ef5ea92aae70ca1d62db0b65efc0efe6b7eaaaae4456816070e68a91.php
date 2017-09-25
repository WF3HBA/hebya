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
        $__internal_2873021c22e2352abe7d15fc7f286e0bd412d3b4001d66caa58b137cb7831906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2873021c22e2352abe7d15fc7f286e0bd412d3b4001d66caa58b137cb7831906->enter($__internal_2873021c22e2352abe7d15fc7f286e0bd412d3b4001d66caa58b137cb7831906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAboutEdit.html.twig"));

        $__internal_8b85529e2a9d6d899f9fe1efc0dfe3a38174a4af550a541aa9a3b9d30845b12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b85529e2a9d6d899f9fe1efc0dfe3a38174a4af550a541aa9a3b9d30845b12b->enter($__internal_8b85529e2a9d6d899f9fe1efc0dfe3a38174a4af550a541aa9a3b9d30845b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminAboutEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2873021c22e2352abe7d15fc7f286e0bd412d3b4001d66caa58b137cb7831906->leave($__internal_2873021c22e2352abe7d15fc7f286e0bd412d3b4001d66caa58b137cb7831906_prof);

        
        $__internal_8b85529e2a9d6d899f9fe1efc0dfe3a38174a4af550a541aa9a3b9d30845b12b->leave($__internal_8b85529e2a9d6d899f9fe1efc0dfe3a38174a4af550a541aa9a3b9d30845b12b_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_21e99a92e624360f3ca67df9d4577c265bcc9897a0e7c2e415253bb9771d72e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e99a92e624360f3ca67df9d4577c265bcc9897a0e7c2e415253bb9771d72e8->enter($__internal_21e99a92e624360f3ca67df9d4577c265bcc9897a0e7c2e415253bb9771d72e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7ea95be134cfde90908a39a56a92a6c83d158225f7bfb11e86aeea4d5a4aaff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea95be134cfde90908a39a56a92a6c83d158225f7bfb11e86aeea4d5a4aaff7->enter($__internal_7ea95be134cfde90908a39a56a92a6c83d158225f7bfb11e86aeea4d5a4aaff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7ea95be134cfde90908a39a56a92a6c83d158225f7bfb11e86aeea4d5a4aaff7->leave($__internal_7ea95be134cfde90908a39a56a92a6c83d158225f7bfb11e86aeea4d5a4aaff7_prof);

        
        $__internal_21e99a92e624360f3ca67df9d4577c265bcc9897a0e7c2e415253bb9771d72e8->leave($__internal_21e99a92e624360f3ca67df9d4577c265bcc9897a0e7c2e415253bb9771d72e8_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6238e48a0d4104e54a5f7975f5e35bf08f268066d81c649c7c8899647d0a876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6238e48a0d4104e54a5f7975f5e35bf08f268066d81c649c7c8899647d0a876->enter($__internal_d6238e48a0d4104e54a5f7975f5e35bf08f268066d81c649c7c8899647d0a876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac6373493cdd9bd2b9c7338ac295a2e5989fb53dcf9ae8ad43ca9e9529cae879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6373493cdd9bd2b9c7338ac295a2e5989fb53dcf9ae8ad43ca9e9529cae879->enter($__internal_ac6373493cdd9bd2b9c7338ac295a2e5989fb53dcf9ae8ad43ca9e9529cae879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ac6373493cdd9bd2b9c7338ac295a2e5989fb53dcf9ae8ad43ca9e9529cae879->leave($__internal_ac6373493cdd9bd2b9c7338ac295a2e5989fb53dcf9ae8ad43ca9e9529cae879_prof);

        
        $__internal_d6238e48a0d4104e54a5f7975f5e35bf08f268066d81c649c7c8899647d0a876->leave($__internal_d6238e48a0d4104e54a5f7975f5e35bf08f268066d81c649c7c8899647d0a876_prof);

    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f6d67f081364e7d3d77b5d950d746578c53bb88f1ce4b5ede7d46dc3d87707d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d67f081364e7d3d77b5d950d746578c53bb88f1ce4b5ede7d46dc3d87707d0->enter($__internal_f6d67f081364e7d3d77b5d950d746578c53bb88f1ce4b5ede7d46dc3d87707d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_bb95aee68763ca8639ca2fdba668e73880e8b9f77bed673c24a27ac1d0f49bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb95aee68763ca8639ca2fdba668e73880e8b9f77bed673c24a27ac1d0f49bcb->enter($__internal_bb95aee68763ca8639ca2fdba668e73880e8b9f77bed673c24a27ac1d0f49bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_bb95aee68763ca8639ca2fdba668e73880e8b9f77bed673c24a27ac1d0f49bcb->leave($__internal_bb95aee68763ca8639ca2fdba668e73880e8b9f77bed673c24a27ac1d0f49bcb_prof);

        
        $__internal_f6d67f081364e7d3d77b5d950d746578c53bb88f1ce4b5ede7d46dc3d87707d0->leave($__internal_f6d67f081364e7d3d77b5d950d746578c53bb88f1ce4b5ede7d46dc3d87707d0_prof);

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
