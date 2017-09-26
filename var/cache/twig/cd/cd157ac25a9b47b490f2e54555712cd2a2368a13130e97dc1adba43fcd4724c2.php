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
        $__internal_4a1ac76b881ec0cb80bd201fa48e25ef34099db6198314eacd9c3024be84289e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1ac76b881ec0cb80bd201fa48e25ef34099db6198314eacd9c3024be84289e->enter($__internal_4a1ac76b881ec0cb80bd201fa48e25ef34099db6198314eacd9c3024be84289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $__internal_7d9ebaf17c8ffdabd3648149845292c7cc563a5ea776b10a202ada0515387982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9ebaf17c8ffdabd3648149845292c7cc563a5ea776b10a202ada0515387982->enter($__internal_7d9ebaf17c8ffdabd3648149845292c7cc563a5ea776b10a202ada0515387982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminServiceEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1ac76b881ec0cb80bd201fa48e25ef34099db6198314eacd9c3024be84289e->leave($__internal_4a1ac76b881ec0cb80bd201fa48e25ef34099db6198314eacd9c3024be84289e_prof);

        
        $__internal_7d9ebaf17c8ffdabd3648149845292c7cc563a5ea776b10a202ada0515387982->leave($__internal_7d9ebaf17c8ffdabd3648149845292c7cc563a5ea776b10a202ada0515387982_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d50f6f0c1ec568697f914936a1a31417e12e5f374acb1c432cae2f149606840f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50f6f0c1ec568697f914936a1a31417e12e5f374acb1c432cae2f149606840f->enter($__internal_d50f6f0c1ec568697f914936a1a31417e12e5f374acb1c432cae2f149606840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c731360d4b5f0824d7a9f76b27317031f6488c456297999824f235e09af85453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c731360d4b5f0824d7a9f76b27317031f6488c456297999824f235e09af85453->enter($__internal_c731360d4b5f0824d7a9f76b27317031f6488c456297999824f235e09af85453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c731360d4b5f0824d7a9f76b27317031f6488c456297999824f235e09af85453->leave($__internal_c731360d4b5f0824d7a9f76b27317031f6488c456297999824f235e09af85453_prof);

        
        $__internal_d50f6f0c1ec568697f914936a1a31417e12e5f374acb1c432cae2f149606840f->leave($__internal_d50f6f0c1ec568697f914936a1a31417e12e5f374acb1c432cae2f149606840f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_336b2b40f9e0641967f2b66aac546862ea44ad6b6b73689b7c6de955c43bf95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336b2b40f9e0641967f2b66aac546862ea44ad6b6b73689b7c6de955c43bf95f->enter($__internal_336b2b40f9e0641967f2b66aac546862ea44ad6b6b73689b7c6de955c43bf95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2e03671f8bf0e39e9bfa5dcb0c349dc56ca6e9275096ae139e5dbf48d698155d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e03671f8bf0e39e9bfa5dcb0c349dc56ca6e9275096ae139e5dbf48d698155d->enter($__internal_2e03671f8bf0e39e9bfa5dcb0c349dc56ca6e9275096ae139e5dbf48d698155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2e03671f8bf0e39e9bfa5dcb0c349dc56ca6e9275096ae139e5dbf48d698155d->leave($__internal_2e03671f8bf0e39e9bfa5dcb0c349dc56ca6e9275096ae139e5dbf48d698155d_prof);

        
        $__internal_336b2b40f9e0641967f2b66aac546862ea44ad6b6b73689b7c6de955c43bf95f->leave($__internal_336b2b40f9e0641967f2b66aac546862ea44ad6b6b73689b7c6de955c43bf95f_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_54d50bdee06641966856be27114dda0d30f970e3f23e697999e1ddb26653a9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d50bdee06641966856be27114dda0d30f970e3f23e697999e1ddb26653a9ec->enter($__internal_54d50bdee06641966856be27114dda0d30f970e3f23e697999e1ddb26653a9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b6ce46ee7b7febad910a254bef4b36c24dff8ea62855694b95d09926a9b69e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ce46ee7b7febad910a254bef4b36c24dff8ea62855694b95d09926a9b69e00->enter($__internal_b6ce46ee7b7febad910a254bef4b36c24dff8ea62855694b95d09926a9b69e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_b6ce46ee7b7febad910a254bef4b36c24dff8ea62855694b95d09926a9b69e00->leave($__internal_b6ce46ee7b7febad910a254bef4b36c24dff8ea62855694b95d09926a9b69e00_prof);

        
        $__internal_54d50bdee06641966856be27114dda0d30f970e3f23e697999e1ddb26653a9ec->leave($__internal_54d50bdee06641966856be27114dda0d30f970e3f23e697999e1ddb26653a9ec_prof);

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
