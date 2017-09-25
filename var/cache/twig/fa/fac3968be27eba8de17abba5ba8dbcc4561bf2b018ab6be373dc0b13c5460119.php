<?php

/* admin/providerEdit.html.twig */
class __TwigTemplate_9991a70db10a06c106f5b402a1ed5373bb2b2b4338e2adf740013ebcfb21836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin.html.twig", "admin/providerEdit.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb1a9302d2c12527c46ebd739952b14c8dd936e02a84d0d93b23accd67f88bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb1a9302d2c12527c46ebd739952b14c8dd936e02a84d0d93b23accd67f88bb->enter($__internal_deb1a9302d2c12527c46ebd739952b14c8dd936e02a84d0d93b23accd67f88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $__internal_1fff7c7e8f0657bc87d67bb853b55a4229dd683819c6450816c8880bccea47c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fff7c7e8f0657bc87d67bb853b55a4229dd683819c6450816c8880bccea47c8->enter($__internal_1fff7c7e8f0657bc87d67bb853b55a4229dd683819c6450816c8880bccea47c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb1a9302d2c12527c46ebd739952b14c8dd936e02a84d0d93b23accd67f88bb->leave($__internal_deb1a9302d2c12527c46ebd739952b14c8dd936e02a84d0d93b23accd67f88bb_prof);

        
        $__internal_1fff7c7e8f0657bc87d67bb853b55a4229dd683819c6450816c8880bccea47c8->leave($__internal_1fff7c7e8f0657bc87d67bb853b55a4229dd683819c6450816c8880bccea47c8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bb4f64d74a0869f2292c8c9ffdf574f5d4f6d0dd2cfad73d6e6a80b8971ff3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4f64d74a0869f2292c8c9ffdf574f5d4f6d0dd2cfad73d6e6a80b8971ff3f0->enter($__internal_bb4f64d74a0869f2292c8c9ffdf574f5d4f6d0dd2cfad73d6e6a80b8971ff3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_783f04795644668f291dc21ce564fc98681fc24c5fdd04a0133a9054e5546701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783f04795644668f291dc21ce564fc98681fc24c5fdd04a0133a9054e5546701->enter($__internal_783f04795644668f291dc21ce564fc98681fc24c5fdd04a0133a9054e5546701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_783f04795644668f291dc21ce564fc98681fc24c5fdd04a0133a9054e5546701->leave($__internal_783f04795644668f291dc21ce564fc98681fc24c5fdd04a0133a9054e5546701_prof);

        
        $__internal_bb4f64d74a0869f2292c8c9ffdf574f5d4f6d0dd2cfad73d6e6a80b8971ff3f0->leave($__internal_bb4f64d74a0869f2292c8c9ffdf574f5d4f6d0dd2cfad73d6e6a80b8971ff3f0_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_212c9bce78a8f5dbf4034b61758f195894cfa5b09aa92f96322b38e7c5738b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212c9bce78a8f5dbf4034b61758f195894cfa5b09aa92f96322b38e7c5738b32->enter($__internal_212c9bce78a8f5dbf4034b61758f195894cfa5b09aa92f96322b38e7c5738b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_72805d7d01ee0ecb04090fae872f0c087e11e59992a00e50d3837552e35adbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72805d7d01ee0ecb04090fae872f0c087e11e59992a00e50d3837552e35adbcf->enter($__internal_72805d7d01ee0ecb04090fae872f0c087e11e59992a00e50d3837552e35adbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
                        <div class=\"col-md-8\">
                            <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                                <option value=\"public\" ";
        // line 72
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 72, $this->getSourceContext()); })()), "status", array()) == "public")) {
            echo "selected";
        }
        echo ">Public</option>
                                <option value=\"privé\" ";
        // line 73
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 73, $this->getSourceContext()); })()), "status", array()) == "privé")) {
            echo "selected";
        }
        echo ">Privé</option>
                                <option value=\"archivé\" ";
        // line 74
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new Twig_Error_Runtime('Variable "provider" does not exist.', 74, $this->getSourceContext()); })()), "status", array()) == "archivé")) {
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
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

";
        
        $__internal_72805d7d01ee0ecb04090fae872f0c087e11e59992a00e50d3837552e35adbcf->leave($__internal_72805d7d01ee0ecb04090fae872f0c087e11e59992a00e50d3837552e35adbcf_prof);

        
        $__internal_212c9bce78a8f5dbf4034b61758f195894cfa5b09aa92f96322b38e7c5738b32->leave($__internal_212c9bce78a8f5dbf4034b61758f195894cfa5b09aa92f96322b38e7c5738b32_prof);

    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cb96701b490e35ac68d0cf5e88706840371203952f75c7f67923247f5e331e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb96701b490e35ac68d0cf5e88706840371203952f75c7f67923247f5e331e02->enter($__internal_cb96701b490e35ac68d0cf5e88706840371203952f75c7f67923247f5e331e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ba444131e3f0523c6ff6e960e3d7fb914753d85d544b87dff2520338f5e2cebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba444131e3f0523c6ff6e960e3d7fb914753d85d544b87dff2520338f5e2cebd->enter($__internal_ba444131e3f0523c6ff6e960e3d7fb914753d85d544b87dff2520338f5e2cebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var description = new Simditor({
             textarea: \$('#description')
        });
    </script>
";
        
        $__internal_ba444131e3f0523c6ff6e960e3d7fb914753d85d544b87dff2520338f5e2cebd->leave($__internal_ba444131e3f0523c6ff6e960e3d7fb914753d85d544b87dff2520338f5e2cebd_prof);

        
        $__internal_cb96701b490e35ac68d0cf5e88706840371203952f75c7f67923247f5e331e02->leave($__internal_cb96701b490e35ac68d0cf5e88706840371203952f75c7f67923247f5e331e02_prof);

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
        return array (  248 => 96,  244 => 95,  240 => 94,  236 => 93,  231 => 92,  222 => 91,  204 => 82,  191 => 74,  185 => 73,  179 => 72,  169 => 65,  160 => 59,  151 => 53,  142 => 47,  133 => 41,  124 => 35,  115 => 29,  106 => 23,  97 => 17,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/admin.html.twig\" %}

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
