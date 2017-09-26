<?php

/* admin/adminServiceEdit.html.twig */
class __TwigTemplate_c76019ca50f915a3b2dd8dd174485848e0cd48f0fe2bef8c628fe7edf0c822cd extends Twig_Template
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
        $__internal_0eb907e039afb10217e2937f67d7db1c27ce441643a22c3d2b65b4f879f79f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb907e039afb10217e2937f67d7db1c27ce441643a22c3d2b65b4f879f79f1c->enter($__internal_0eb907e039afb10217e2937f67d7db1c27ce441643a22c3d2b65b4f879f79f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $__internal_eba1606005392a2f668ce1660adf968044e6568e306de8aebb3ae401cc664442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba1606005392a2f668ce1660adf968044e6568e306de8aebb3ae401cc664442->enter($__internal_eba1606005392a2f668ce1660adf968044e6568e306de8aebb3ae401cc664442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb907e039afb10217e2937f67d7db1c27ce441643a22c3d2b65b4f879f79f1c->leave($__internal_0eb907e039afb10217e2937f67d7db1c27ce441643a22c3d2b65b4f879f79f1c_prof);

        
        $__internal_eba1606005392a2f668ce1660adf968044e6568e306de8aebb3ae401cc664442->leave($__internal_eba1606005392a2f668ce1660adf968044e6568e306de8aebb3ae401cc664442_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5183f493288fe8f5bb12083346fd38292d923b1d8fc4e2ec90354786029cd052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5183f493288fe8f5bb12083346fd38292d923b1d8fc4e2ec90354786029cd052->enter($__internal_5183f493288fe8f5bb12083346fd38292d923b1d8fc4e2ec90354786029cd052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cbe1bfbad6b8800fcb08de7482635fb643e11cea367f37890bae3a0bc8212952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe1bfbad6b8800fcb08de7482635fb643e11cea367f37890bae3a0bc8212952->enter($__internal_cbe1bfbad6b8800fcb08de7482635fb643e11cea367f37890bae3a0bc8212952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cbe1bfbad6b8800fcb08de7482635fb643e11cea367f37890bae3a0bc8212952->leave($__internal_cbe1bfbad6b8800fcb08de7482635fb643e11cea367f37890bae3a0bc8212952_prof);

        
        $__internal_5183f493288fe8f5bb12083346fd38292d923b1d8fc4e2ec90354786029cd052->leave($__internal_5183f493288fe8f5bb12083346fd38292d923b1d8fc4e2ec90354786029cd052_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_933d866547e4003e829a2e1606a2b8b460f80a8bfd83058eca29dd9ffc32abc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933d866547e4003e829a2e1606a2b8b460f80a8bfd83058eca29dd9ffc32abc5->enter($__internal_933d866547e4003e829a2e1606a2b8b460f80a8bfd83058eca29dd9ffc32abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_562aa98a77862507e423bbdfa0e037fac59fbae435b87947e272f2b9b8e4e508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562aa98a77862507e423bbdfa0e037fac59fbae435b87947e272f2b9b8e4e508->enter($__internal_562aa98a77862507e423bbdfa0e037fac59fbae435b87947e272f2b9b8e4e508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_562aa98a77862507e423bbdfa0e037fac59fbae435b87947e272f2b9b8e4e508->leave($__internal_562aa98a77862507e423bbdfa0e037fac59fbae435b87947e272f2b9b8e4e508_prof);

        
        $__internal_933d866547e4003e829a2e1606a2b8b460f80a8bfd83058eca29dd9ffc32abc5->leave($__internal_933d866547e4003e829a2e1606a2b8b460f80a8bfd83058eca29dd9ffc32abc5_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_18ea6f6ea6dbaca55dc5ac3dbd294f54bb3b74ad1d9856be82f94c67213a9411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ea6f6ea6dbaca55dc5ac3dbd294f54bb3b74ad1d9856be82f94c67213a9411->enter($__internal_18ea6f6ea6dbaca55dc5ac3dbd294f54bb3b74ad1d9856be82f94c67213a9411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_db484f878d305096ef5eb532b03af2684b1d573aa1413bb98cd9e52a17ffe674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db484f878d305096ef5eb532b03af2684b1d573aa1413bb98cd9e52a17ffe674->enter($__internal_db484f878d305096ef5eb532b03af2684b1d573aa1413bb98cd9e52a17ffe674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_db484f878d305096ef5eb532b03af2684b1d573aa1413bb98cd9e52a17ffe674->leave($__internal_db484f878d305096ef5eb532b03af2684b1d573aa1413bb98cd9e52a17ffe674_prof);

        
        $__internal_18ea6f6ea6dbaca55dc5ac3dbd294f54bb3b74ad1d9856be82f94c67213a9411->leave($__internal_18ea6f6ea6dbaca55dc5ac3dbd294f54bb3b74ad1d9856be82f94c67213a9411_prof);

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
{% endblock %}", "admin/adminServiceEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminServiceEdit.html.twig");
    }
}
