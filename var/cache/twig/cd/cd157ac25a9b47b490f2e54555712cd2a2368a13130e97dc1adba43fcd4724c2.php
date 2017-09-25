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
        $__internal_a2cd7a2f267c7fc63fabb246854b4d17505dab528b7d93ba7f0c419b91cb5730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cd7a2f267c7fc63fabb246854b4d17505dab528b7d93ba7f0c419b91cb5730->enter($__internal_a2cd7a2f267c7fc63fabb246854b4d17505dab528b7d93ba7f0c419b91cb5730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $__internal_2bf9d61dbac39ffcaccbbad079cfabe3357813dbb1b29029be23bebe28e02bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf9d61dbac39ffcaccbbad079cfabe3357813dbb1b29029be23bebe28e02bae->enter($__internal_2bf9d61dbac39ffcaccbbad079cfabe3357813dbb1b29029be23bebe28e02bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cd7a2f267c7fc63fabb246854b4d17505dab528b7d93ba7f0c419b91cb5730->leave($__internal_a2cd7a2f267c7fc63fabb246854b4d17505dab528b7d93ba7f0c419b91cb5730_prof);

        
        $__internal_2bf9d61dbac39ffcaccbbad079cfabe3357813dbb1b29029be23bebe28e02bae->leave($__internal_2bf9d61dbac39ffcaccbbad079cfabe3357813dbb1b29029be23bebe28e02bae_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cb85463f43e9282289a18b4833a9a4664b19586d3feb46554d4935849207aba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb85463f43e9282289a18b4833a9a4664b19586d3feb46554d4935849207aba6->enter($__internal_cb85463f43e9282289a18b4833a9a4664b19586d3feb46554d4935849207aba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a36fb152c56c91adbc9c1b1133f55a65e2f29ed34c9465b18a0adb75a4ea6cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36fb152c56c91adbc9c1b1133f55a65e2f29ed34c9465b18a0adb75a4ea6cfb->enter($__internal_a36fb152c56c91adbc9c1b1133f55a65e2f29ed34c9465b18a0adb75a4ea6cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a36fb152c56c91adbc9c1b1133f55a65e2f29ed34c9465b18a0adb75a4ea6cfb->leave($__internal_a36fb152c56c91adbc9c1b1133f55a65e2f29ed34c9465b18a0adb75a4ea6cfb_prof);

        
        $__internal_cb85463f43e9282289a18b4833a9a4664b19586d3feb46554d4935849207aba6->leave($__internal_cb85463f43e9282289a18b4833a9a4664b19586d3feb46554d4935849207aba6_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_32f9045c4bfd2da101ea7215a1a59c3b1e2aeedd3be957fe031280f4e278f1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f9045c4bfd2da101ea7215a1a59c3b1e2aeedd3be957fe031280f4e278f1ae->enter($__internal_32f9045c4bfd2da101ea7215a1a59c3b1e2aeedd3be957fe031280f4e278f1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1cddc47b55d4f77710bf6c6197c2f8cd75949df3a2ad250f2f7aa832345e2ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cddc47b55d4f77710bf6c6197c2f8cd75949df3a2ad250f2f7aa832345e2ae2->enter($__internal_1cddc47b55d4f77710bf6c6197c2f8cd75949df3a2ad250f2f7aa832345e2ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1cddc47b55d4f77710bf6c6197c2f8cd75949df3a2ad250f2f7aa832345e2ae2->leave($__internal_1cddc47b55d4f77710bf6c6197c2f8cd75949df3a2ad250f2f7aa832345e2ae2_prof);

        
        $__internal_32f9045c4bfd2da101ea7215a1a59c3b1e2aeedd3be957fe031280f4e278f1ae->leave($__internal_32f9045c4bfd2da101ea7215a1a59c3b1e2aeedd3be957fe031280f4e278f1ae_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_070351c0f69e77525ac8d79412e2fc0b0b47626a8546f34631f22d684c26c69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070351c0f69e77525ac8d79412e2fc0b0b47626a8546f34631f22d684c26c69e->enter($__internal_070351c0f69e77525ac8d79412e2fc0b0b47626a8546f34631f22d684c26c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5efaac63a896860899dd5af55569721f35729a3dabda01a37a48ce4bd31724a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efaac63a896860899dd5af55569721f35729a3dabda01a37a48ce4bd31724a0->enter($__internal_5efaac63a896860899dd5af55569721f35729a3dabda01a37a48ce4bd31724a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_5efaac63a896860899dd5af55569721f35729a3dabda01a37a48ce4bd31724a0->leave($__internal_5efaac63a896860899dd5af55569721f35729a3dabda01a37a48ce4bd31724a0_prof);

        
        $__internal_070351c0f69e77525ac8d79412e2fc0b0b47626a8546f34631f22d684c26c69e->leave($__internal_070351c0f69e77525ac8d79412e2fc0b0b47626a8546f34631f22d684c26c69e_prof);

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
