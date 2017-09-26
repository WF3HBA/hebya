<?php

/* admin/providerEdit.html.twig */
class __TwigTemplate_9991a70db10a06c106f5b402a1ed5373bb2b2b4338e2adf740013ebcfb21836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/providerEdit.html.twig", 1);
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
        $__internal_f1f58c000bc8a89f3cd6811c29838c5033bc1f9f76fad2ff3a3b1a79802d210d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f58c000bc8a89f3cd6811c29838c5033bc1f9f76fad2ff3a3b1a79802d210d->enter($__internal_f1f58c000bc8a89f3cd6811c29838c5033bc1f9f76fad2ff3a3b1a79802d210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $__internal_b14e92af02af3ac05fc798ea9939552b703cafaf0eac427441a7c954d675bd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14e92af02af3ac05fc798ea9939552b703cafaf0eac427441a7c954d675bd9d->enter($__internal_b14e92af02af3ac05fc798ea9939552b703cafaf0eac427441a7c954d675bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f58c000bc8a89f3cd6811c29838c5033bc1f9f76fad2ff3a3b1a79802d210d->leave($__internal_f1f58c000bc8a89f3cd6811c29838c5033bc1f9f76fad2ff3a3b1a79802d210d_prof);

        
        $__internal_b14e92af02af3ac05fc798ea9939552b703cafaf0eac427441a7c954d675bd9d->leave($__internal_b14e92af02af3ac05fc798ea9939552b703cafaf0eac427441a7c954d675bd9d_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_78b4194596142a482d4f0d911b92372bdb52858834faec0eac11e9c7dc7a1878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b4194596142a482d4f0d911b92372bdb52858834faec0eac11e9c7dc7a1878->enter($__internal_78b4194596142a482d4f0d911b92372bdb52858834faec0eac11e9c7dc7a1878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2aab6cd05e5b2124fd4ac1b441cfc0609683fa041775981734a0014389a2a5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aab6cd05e5b2124fd4ac1b441cfc0609683fa041775981734a0014389a2a5b2->enter($__internal_2aab6cd05e5b2124fd4ac1b441cfc0609683fa041775981734a0014389a2a5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/provider_edit.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2aab6cd05e5b2124fd4ac1b441cfc0609683fa041775981734a0014389a2a5b2->leave($__internal_2aab6cd05e5b2124fd4ac1b441cfc0609683fa041775981734a0014389a2a5b2_prof);

        
        $__internal_78b4194596142a482d4f0d911b92372bdb52858834faec0eac11e9c7dc7a1878->leave($__internal_78b4194596142a482d4f0d911b92372bdb52858834faec0eac11e9c7dc7a1878_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_263052574ea06652528564bd65781a5b04fad960c1c091fcb614fe632941a8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263052574ea06652528564bd65781a5b04fad960c1c091fcb614fe632941a8b5->enter($__internal_263052574ea06652528564bd65781a5b04fad960c1c091fcb614fe632941a8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_198d6862b6a9d236c09b5684411a5840c615b2d1cbcd938c1f8b72335f487f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198d6862b6a9d236c09b5684411a5840c615b2d1cbcd938c1f8b72335f487f42->enter($__internal_198d6862b6a9d236c09b5684411a5840c615b2d1cbcd938c1f8b72335f487f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 11, $this->getSourceContext()); })()), "idprovider", array())) {
            echo "Edition";
        } else {
            echo "Création";
        }
        echo " innovateur</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 17, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                  </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 23, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                     </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"company\">Société</label>  
                    <div class=\"col-md-8\">
                        <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 29, $this->getSourceContext()); })()), "company", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"description\" name=\"description\" type=\"text\" placeholder=\"\" class=\"form-control textarea-md\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 35, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"email\">Email</label>  
                    <div class=\"col-md-8\">
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 41, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"phone\">Téléphone</label>  
                    <div class=\"col-md-8\">
                        <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 47, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"address\">Adresse</label>  
                    <div class=\"col-md-8\">
                        <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 53, $this->getSourceContext()); })()), "address", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"city\">Ville</label>  
                    <div class=\"col-md-8\">
                        <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 59, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"country\">Pays</label>
                     <div class=\"col-md-8\">
                        <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 65, $this->getSourceContext()); })()), "country", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"picture\">Photo</label>
                     <div class=\"col-md-8\">
                        <input id=\"picture\" name=\"picture\" type=\"text\" placeholder=\"\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 71, $this->getSourceContext()); })()), "picture", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
                    <div class=\"col-md-8\">
                        <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                            <option value=\"public\" ";
        // line 78
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 78, $this->getSourceContext()); })()), "status", array()) == "public")) {
            echo "selected";
        }
        echo ">Public</option>
                            <option value=\"privé\" ";
        // line 79
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 79, $this->getSourceContext()); })()), "status", array()) == "privé")) {
            echo "selected";
        }
        echo ">Privé</option>
                            <option value=\"archivé\" ";
        // line 80
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 80, $this->getSourceContext()); })()), "status", array()) == "archivé")) {
            echo "selected";
        }
        echo ">Archvé</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                    <div class=\"col-md-8\">
                        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                        <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

";
        
        $__internal_198d6862b6a9d236c09b5684411a5840c615b2d1cbcd938c1f8b72335f487f42->leave($__internal_198d6862b6a9d236c09b5684411a5840c615b2d1cbcd938c1f8b72335f487f42_prof);

        
        $__internal_263052574ea06652528564bd65781a5b04fad960c1c091fcb614fe632941a8b5->leave($__internal_263052574ea06652528564bd65781a5b04fad960c1c091fcb614fe632941a8b5_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c66e3f775ce1d0dd03ee4fdb114b1d5e72ce461815b9a17f435a5f99c49447b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66e3f775ce1d0dd03ee4fdb114b1d5e72ce461815b9a17f435a5f99c49447b7->enter($__internal_c66e3f775ce1d0dd03ee4fdb114b1d5e72ce461815b9a17f435a5f99c49447b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5f3a4021e08e692bc5dd1aedf885a9081effaae837e2560a455f2e9dd4a7a661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3a4021e08e692bc5dd1aedf885a9081effaae837e2560a455f2e9dd4a7a661->enter($__internal_5f3a4021e08e692bc5dd1aedf885a9081effaae837e2560a455f2e9dd4a7a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var description = new Simditor({
             textarea: \$('#description')
        });
    </script>
";
        
        $__internal_5f3a4021e08e692bc5dd1aedf885a9081effaae837e2560a455f2e9dd4a7a661->leave($__internal_5f3a4021e08e692bc5dd1aedf885a9081effaae837e2560a455f2e9dd4a7a661_prof);

        
        $__internal_c66e3f775ce1d0dd03ee4fdb114b1d5e72ce461815b9a17f435a5f99c49447b7->leave($__internal_c66e3f775ce1d0dd03ee4fdb114b1d5e72ce461815b9a17f435a5f99c49447b7_prof);

    }

    public function getTemplateName()
    {
        return "admin/providerEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 102,  253 => 101,  249 => 100,  245 => 99,  240 => 98,  231 => 97,  213 => 88,  200 => 80,  194 => 79,  188 => 78,  178 => 71,  169 => 65,  160 => 59,  151 => 53,  142 => 47,  133 => 41,  124 => 35,  115 => 29,  106 => 23,  97 => 17,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/admin/provider_edit.css\") }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/admin/simditor.css') }}\" />
{% endblock %}

{% block content %}
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>{% if provider.idprovider%}Edition{% else %}Création{% endif %} innovateur</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"{{ provider.lastname }}\" class=\"form-control input-md\">
                  </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"{{ provider.firstname }}\" class=\"form-control input-md\">
                     </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"company\">Société</label>  
                    <div class=\"col-md-8\">
                        <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"{{ provider.company }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"description\" name=\"description\" type=\"text\" placeholder=\"\" class=\"form-control textarea-md\">{{ provider.description }}</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"email\">Email</label>  
                    <div class=\"col-md-8\">
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"{{ provider.email }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"phone\">Téléphone</label>  
                    <div class=\"col-md-8\">
                        <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"{{ provider.phone }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"address\">Adresse</label>  
                    <div class=\"col-md-8\">
                        <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"{{ provider.address }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"city\">Ville</label>  
                    <div class=\"col-md-8\">
                        <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"\" value=\"{{ provider.city }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"country\">Pays</label>
                     <div class=\"col-md-8\">
                        <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"{{ provider.country }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"picture\">Photo</label>
                     <div class=\"col-md-8\">
                        <input id=\"picture\" name=\"picture\" type=\"text\" placeholder=\"\" value=\"{{ provider.picture }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
                    <div class=\"col-md-8\">
                        <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                            <option value=\"public\" {% if provider.status == \"public\" %}selected{% endif %}>Public</option>
                            <option value=\"privé\" {% if provider.status == \"privé\" %}selected{% endif %}>Privé</option>
                            <option value=\"archivé\" {% if provider.status == \"archivé\" %}selected{% endif %}>Archvé</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                    <div class=\"col-md-8\">
                        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                        <a href=\"{{ path('admin_provider') }}\" class=\"btn btn-primary\">Annuler</a>
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
             textarea: \$('#description')
        });
    </script>
{% endblock %}", "admin/providerEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\providerEdit.html.twig");
    }
}
