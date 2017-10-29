<?php

/* admin/adminServiceEdit.html.twig */
class __TwigTemplate_6c2af4aca1815ed6b8f417b7651bcb36534c84a77a0637caa58b5b1f62d3031c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminServiceEdit.html.twig", 1);
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
        $__internal_4ab7ad69b5b92865c4383a6d616ee6bcc547456140d37fcc11ea86c20ae223c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab7ad69b5b92865c4383a6d616ee6bcc547456140d37fcc11ea86c20ae223c7->enter($__internal_4ab7ad69b5b92865c4383a6d616ee6bcc547456140d37fcc11ea86c20ae223c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $__internal_82695d1b977b3ea6ca593ca3292cf7669f15dca5fb119481235e162305819624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82695d1b977b3ea6ca593ca3292cf7669f15dca5fb119481235e162305819624->enter($__internal_82695d1b977b3ea6ca593ca3292cf7669f15dca5fb119481235e162305819624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab7ad69b5b92865c4383a6d616ee6bcc547456140d37fcc11ea86c20ae223c7->leave($__internal_4ab7ad69b5b92865c4383a6d616ee6bcc547456140d37fcc11ea86c20ae223c7_prof);

        
        $__internal_82695d1b977b3ea6ca593ca3292cf7669f15dca5fb119481235e162305819624->leave($__internal_82695d1b977b3ea6ca593ca3292cf7669f15dca5fb119481235e162305819624_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9aa79b8fc795d0b605033bfae6a0e77bbf67e752025f915a05ca6139258d8c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa79b8fc795d0b605033bfae6a0e77bbf67e752025f915a05ca6139258d8c65->enter($__internal_9aa79b8fc795d0b605033bfae6a0e77bbf67e752025f915a05ca6139258d8c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2dd93ee6555a45e995e8d133a08c64112efcab6ce052f756d6884aa1c49610ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd93ee6555a45e995e8d133a08c64112efcab6ce052f756d6884aa1c49610ea->enter($__internal_2dd93ee6555a45e995e8d133a08c64112efcab6ce052f756d6884aa1c49610ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2dd93ee6555a45e995e8d133a08c64112efcab6ce052f756d6884aa1c49610ea->leave($__internal_2dd93ee6555a45e995e8d133a08c64112efcab6ce052f756d6884aa1c49610ea_prof);

        
        $__internal_9aa79b8fc795d0b605033bfae6a0e77bbf67e752025f915a05ca6139258d8c65->leave($__internal_9aa79b8fc795d0b605033bfae6a0e77bbf67e752025f915a05ca6139258d8c65_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_fde4a765be5eb8504f847161f48fecc59a12eb9784b8adb4fa25f9f7a4cffba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde4a765be5eb8504f847161f48fecc59a12eb9784b8adb4fa25f9f7a4cffba1->enter($__internal_fde4a765be5eb8504f847161f48fecc59a12eb9784b8adb4fa25f9f7a4cffba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b8a5b914f7bc23b1a48de231e8977b0fcb73f7f784ef5e5c10269ba4aade9840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a5b914f7bc23b1a48de231e8977b0fcb73f7f784ef5e5c10269ba4aade9840->enter($__internal_b8a5b914f7bc23b1a48de231e8977b0fcb73f7f784ef5e5c10269ba4aade9840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 10, $this->getSourceContext()); })()), "idservice", array())) {
            echo "Edit";
        } else {
            echo "Create";
        }
        echo " des services</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"target\">Cible</label>  
                    <div class=\"col-md-8\">
                        <p class=\"form-control p-md\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 16, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 23, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
               
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_service");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
";
        
        $__internal_b8a5b914f7bc23b1a48de231e8977b0fcb73f7f784ef5e5c10269ba4aade9840->leave($__internal_b8a5b914f7bc23b1a48de231e8977b0fcb73f7f784ef5e5c10269ba4aade9840_prof);

        
        $__internal_fde4a765be5eb8504f847161f48fecc59a12eb9784b8adb4fa25f9f7a4cffba1->leave($__internal_fde4a765be5eb8504f847161f48fecc59a12eb9784b8adb4fa25f9f7a4cffba1_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_09605a5413ec0a7c48311f129a61e3393c53faf84af5ceeddf7bfcccf0e186b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09605a5413ec0a7c48311f129a61e3393c53faf84af5ceeddf7bfcccf0e186b7->enter($__internal_09605a5413ec0a7c48311f129a61e3393c53faf84af5ceeddf7bfcccf0e186b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_79d09fb4537e816aa3126faa44636b2bda3d5351eb0db51f6285607380c434c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d09fb4537e816aa3126faa44636b2bda3d5351eb0db51f6285607380c434c6->enter($__internal_79d09fb4537e816aa3126faa44636b2bda3d5351eb0db51f6285607380c434c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#content')
        });
    </script>
";
        
        $__internal_79d09fb4537e816aa3126faa44636b2bda3d5351eb0db51f6285607380c434c6->leave($__internal_79d09fb4537e816aa3126faa44636b2bda3d5351eb0db51f6285607380c434c6_prof);

        
        $__internal_09605a5413ec0a7c48311f129a61e3393c53faf84af5ceeddf7bfcccf0e186b7->leave($__internal_09605a5413ec0a7c48311f129a61e3393c53faf84af5ceeddf7bfcccf0e186b7_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminServiceEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  153 => 43,  149 => 42,  145 => 41,  140 => 40,  131 => 39,  114 => 31,  103 => 23,  93 => 16,  80 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
        <h1>{% if service.idservice%}Edit{% else %}Create{% endif %} des services</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"target\">Cible</label>  
                    <div class=\"col-md-8\">
                        <p class=\"form-control p-md\">{{ service.target }}
                    </div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">{{ service.content }}</textarea>
                    </div>
                </div>
               
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"{{ path('admin_service') }}\" class=\"btn btn-primary\">Annuler</a>
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
{% endblock %}", "admin/adminServiceEdit.html.twig", "C:\\wamp64\\www\\hebya\\templates\\admin\\adminServiceEdit.html.twig");
    }
}
