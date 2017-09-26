<?php

/* admin/adminCountryEdit.html.twig */
class __TwigTemplate_c543b44de43f87905c8c068d3ac5900c1bbec9150b7fb60a741d150b19d1c806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminCountryEdit.html.twig", 1);
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
        $__internal_7cb7be0dcf6b9d685153a5ca9fe673f2dce128c91f5e3de3bd7d998dedcfaa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb7be0dcf6b9d685153a5ca9fe673f2dce128c91f5e3de3bd7d998dedcfaa28->enter($__internal_7cb7be0dcf6b9d685153a5ca9fe673f2dce128c91f5e3de3bd7d998dedcfaa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountryEdit.html.twig"));

        $__internal_177aad68fb0e88e106ceaa443aa9881e83c4dacbadf1c3ff67f41f233b075f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177aad68fb0e88e106ceaa443aa9881e83c4dacbadf1c3ff67f41f233b075f3a->enter($__internal_177aad68fb0e88e106ceaa443aa9881e83c4dacbadf1c3ff67f41f233b075f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminCountryEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb7be0dcf6b9d685153a5ca9fe673f2dce128c91f5e3de3bd7d998dedcfaa28->leave($__internal_7cb7be0dcf6b9d685153a5ca9fe673f2dce128c91f5e3de3bd7d998dedcfaa28_prof);

        
        $__internal_177aad68fb0e88e106ceaa443aa9881e83c4dacbadf1c3ff67f41f233b075f3a->leave($__internal_177aad68fb0e88e106ceaa443aa9881e83c4dacbadf1c3ff67f41f233b075f3a_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5f381af5000e465570a70e675372d5683e9158cd8b1ea9a1816970aa47789806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f381af5000e465570a70e675372d5683e9158cd8b1ea9a1816970aa47789806->enter($__internal_5f381af5000e465570a70e675372d5683e9158cd8b1ea9a1816970aa47789806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ca5793ed9fb6c58c83e982b742ad3420fb9b51752a430e68a2c5443ddf561006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5793ed9fb6c58c83e982b742ad3420fb9b51752a430e68a2c5443ddf561006->enter($__internal_ca5793ed9fb6c58c83e982b742ad3420fb9b51752a430e68a2c5443ddf561006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    ";
        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ca5793ed9fb6c58c83e982b742ad3420fb9b51752a430e68a2c5443ddf561006->leave($__internal_ca5793ed9fb6c58c83e982b742ad3420fb9b51752a430e68a2c5443ddf561006_prof);

        
        $__internal_5f381af5000e465570a70e675372d5683e9158cd8b1ea9a1816970aa47789806->leave($__internal_5f381af5000e465570a70e675372d5683e9158cd8b1ea9a1816970aa47789806_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7741b02c765afa7023491ca5a166f00df96a0a3f7d8a493bff30bee29a268ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7741b02c765afa7023491ca5a166f00df96a0a3f7d8a493bff30bee29a268ace->enter($__internal_7741b02c765afa7023491ca5a166f00df96a0a3f7d8a493bff30bee29a268ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fbd987253b5284b69a6754b7ebebc20a818275dbf29068d76095261328a550ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd987253b5284b69a6754b7ebebc20a818275dbf29068d76095261328a550ae->enter($__internal_fbd987253b5284b69a6754b7ebebc20a818275dbf29068d76095261328a550ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 11, $this->getSourceContext()); })()), "idcountry", array())) {
            echo "Edition";
        } else {
            echo "Création";
        }
        echo " de pays</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"name\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 17, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                  </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"continent\">Continent</label>  
                    <div class=\"col-md-8\">
                        <input id=\"continent\" name=\"continent\" type=\"text\" placeholder=\"\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 23, $this->getSourceContext()); })()), "continent", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                     </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control textarea-md\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 29, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_name\">Contact</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"contact_name\" name=\"contact_name\" type=\"text\" placeholder=\"\" class=\"form-control textarea-md\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 35, $this->getSourceContext()); })()), "contact_name", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_phone\">Téléphone</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_phone\" name=\"contact_phone\" type=\"text\" placeholder=\"\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 41, $this->getSourceContext()); })()), "contact_phone", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_email\">Email</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_email\" name=\"contact_email\" type=\"text\" placeholder=\"\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 47, $this->getSourceContext()); })()), "contact_email", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_address\">Adresse</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_address\" name=\"contact_address\" type=\"text\" placeholder=\"\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 53, $this->getSourceContext()); })()), "contact_address", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_city\">Ville</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_city\" name=\"contact_city\" type=\"text\" placeholder=\"\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new Twig_Error_Runtime('Variable "country" does not exist.', 59, $this->getSourceContext()); })()), "contact_city", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                    <div class=\"col-md-8\">
                        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_country");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

";
        
        $__internal_fbd987253b5284b69a6754b7ebebc20a818275dbf29068d76095261328a550ae->leave($__internal_fbd987253b5284b69a6754b7ebebc20a818275dbf29068d76095261328a550ae_prof);

        
        $__internal_7741b02c765afa7023491ca5a166f00df96a0a3f7d8a493bff30bee29a268ace->leave($__internal_7741b02c765afa7023491ca5a166f00df96a0a3f7d8a493bff30bee29a268ace_prof);

    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ea666b824e4139901d12e945aff5c9fb69d29c4ee21ef5634401dbb8cd9e9b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea666b824e4139901d12e945aff5c9fb69d29c4ee21ef5634401dbb8cd9e9b63->enter($__internal_ea666b824e4139901d12e945aff5c9fb69d29c4ee21ef5634401dbb8cd9e9b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_93831be7390731f927e252a37b5d7c732c107c24d46ffe0b8ab2a1ecdf4f52d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93831be7390731f927e252a37b5d7c732c107c24d46ffe0b8ab2a1ecdf4f52d4->enter($__internal_93831be7390731f927e252a37b5d7c732c107c24d46ffe0b8ab2a1ecdf4f52d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 76
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var description = new Simditor({
             textarea: \$('#content')
        });
    </script>
";
        
        $__internal_93831be7390731f927e252a37b5d7c732c107c24d46ffe0b8ab2a1ecdf4f52d4->leave($__internal_93831be7390731f927e252a37b5d7c732c107c24d46ffe0b8ab2a1ecdf4f52d4_prof);

        
        $__internal_ea666b824e4139901d12e945aff5c9fb69d29c4ee21ef5634401dbb8cd9e9b63->leave($__internal_ea666b824e4139901d12e945aff5c9fb69d29c4ee21ef5634401dbb8cd9e9b63_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminCountryEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 80,  207 => 79,  203 => 78,  199 => 77,  194 => 76,  185 => 75,  167 => 66,  157 => 59,  148 => 53,  139 => 47,  130 => 41,  121 => 35,  112 => 29,  103 => 23,  94 => 17,  81 => 11,  78 => 10,  69 => 9,  56 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    {#<link rel=\"stylesheet\" href=\"{{ asset(\"css/admin/country_edit.css\") }}\"/>#}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/admin/simditor.css') }}\" />
{% endblock %}

{% block content %}
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>{% if country.idcountry%}Edition{% else %}Création{% endif %} de pays</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"name\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"\" value=\"{{ country.name }}\" class=\"form-control input-md\">
                  </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"continent\">Continent</label>  
                    <div class=\"col-md-8\">
                        <input id=\"continent\" name=\"continent\" type=\"text\" placeholder=\"\" value=\"{{ country.continent }}\" class=\"form-control input-md\">
                     </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"content\">Contenu</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"content\" name=\"content\" placeholder=\"\" class=\"form-control textarea-md\">{{ country.content }}</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_name\">Contact</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"contact_name\" name=\"contact_name\" type=\"text\" placeholder=\"\" class=\"form-control textarea-md\">{{ country.contact_name }}</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_phone\">Téléphone</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_phone\" name=\"contact_phone\" type=\"text\" placeholder=\"\" value=\"{{ country.contact_phone }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_email\">Email</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_email\" name=\"contact_email\" type=\"text\" placeholder=\"\" value=\"{{ country.contact_email }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_address\">Adresse</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_address\" name=\"contact_address\" type=\"text\" placeholder=\"\" value=\"{{ country.contact_address }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"contact_city\">Ville</label>  
                    <div class=\"col-md-8\">
                        <input id=\"contact_city\" name=\"contact_city\" type=\"text\" placeholder=\"\" value=\"{{ country.contact_city }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                    <div class=\"col-md-8\">
                        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                        <a href=\"{{ path('admin_country') }}\" class=\"btn btn-primary\">Annuler</a>
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
        var description = new Simditor({
             textarea: \$('#content')
        });
    </script>
{% endblock %}
", "admin/adminCountryEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminCountryEdit.html.twig");
    }
}
