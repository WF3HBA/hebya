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
        $__internal_c4888d95db4202d07f1547977cfd6961ef9daa65861ec670046bb9fbfc201a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4888d95db4202d07f1547977cfd6961ef9daa65861ec670046bb9fbfc201a06->enter($__internal_c4888d95db4202d07f1547977cfd6961ef9daa65861ec670046bb9fbfc201a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $__internal_5a9040fed519d30667c9e44e02a4de66a69e3661575454bbe31b397c1c430e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9040fed519d30667c9e44e02a4de66a69e3661575454bbe31b397c1c430e67->enter($__internal_5a9040fed519d30667c9e44e02a4de66a69e3661575454bbe31b397c1c430e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/providerEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4888d95db4202d07f1547977cfd6961ef9daa65861ec670046bb9fbfc201a06->leave($__internal_c4888d95db4202d07f1547977cfd6961ef9daa65861ec670046bb9fbfc201a06_prof);

        
        $__internal_5a9040fed519d30667c9e44e02a4de66a69e3661575454bbe31b397c1c430e67->leave($__internal_5a9040fed519d30667c9e44e02a4de66a69e3661575454bbe31b397c1c430e67_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_08e0aa0b8583a7ba9ea9616d8e7187bbe49bc81dae05ab2968f4d92ac1dc53b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e0aa0b8583a7ba9ea9616d8e7187bbe49bc81dae05ab2968f4d92ac1dc53b3->enter($__internal_08e0aa0b8583a7ba9ea9616d8e7187bbe49bc81dae05ab2968f4d92ac1dc53b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a51e4d630f1a1eb4b092b6e51f662e562ff33f0272c7bd6504498b0c8f2aec55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51e4d630f1a1eb4b092b6e51f662e562ff33f0272c7bd6504498b0c8f2aec55->enter($__internal_a51e4d630f1a1eb4b092b6e51f662e562ff33f0272c7bd6504498b0c8f2aec55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_a51e4d630f1a1eb4b092b6e51f662e562ff33f0272c7bd6504498b0c8f2aec55->leave($__internal_a51e4d630f1a1eb4b092b6e51f662e562ff33f0272c7bd6504498b0c8f2aec55_prof);

        
        $__internal_08e0aa0b8583a7ba9ea9616d8e7187bbe49bc81dae05ab2968f4d92ac1dc53b3->leave($__internal_08e0aa0b8583a7ba9ea9616d8e7187bbe49bc81dae05ab2968f4d92ac1dc53b3_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_679045814680b7083d8927a3abffdefb0188c3a2d235d7a4b711d381c6b4c4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679045814680b7083d8927a3abffdefb0188c3a2d235d7a4b711d381c6b4c4ee->enter($__internal_679045814680b7083d8927a3abffdefb0188c3a2d235d7a4b711d381c6b4c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a5ee388e1b4d7298c608d614829f76abf4b3429a8ddae2e9209cc9a7d1a0fc41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ee388e1b4d7298c608d614829f76abf4b3429a8ddae2e9209cc9a7d1a0fc41->enter($__internal_a5ee388e1b4d7298c608d614829f76abf4b3429a8ddae2e9209cc9a7d1a0fc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a5ee388e1b4d7298c608d614829f76abf4b3429a8ddae2e9209cc9a7d1a0fc41->leave($__internal_a5ee388e1b4d7298c608d614829f76abf4b3429a8ddae2e9209cc9a7d1a0fc41_prof);

        
        $__internal_679045814680b7083d8927a3abffdefb0188c3a2d235d7a4b711d381c6b4c4ee->leave($__internal_679045814680b7083d8927a3abffdefb0188c3a2d235d7a4b711d381c6b4c4ee_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c1b75668282a2434eccca9c6f839a66568bcaa91852cd9b0b2cbcc0372834577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b75668282a2434eccca9c6f839a66568bcaa91852cd9b0b2cbcc0372834577->enter($__internal_c1b75668282a2434eccca9c6f839a66568bcaa91852cd9b0b2cbcc0372834577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3142bcd0084811424e54b47d38ce63c899543e41ea6115bd1da07ec7b63389dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3142bcd0084811424e54b47d38ce63c899543e41ea6115bd1da07ec7b63389dd->enter($__internal_3142bcd0084811424e54b47d38ce63c899543e41ea6115bd1da07ec7b63389dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_3142bcd0084811424e54b47d38ce63c899543e41ea6115bd1da07ec7b63389dd->leave($__internal_3142bcd0084811424e54b47d38ce63c899543e41ea6115bd1da07ec7b63389dd_prof);

        
        $__internal_c1b75668282a2434eccca9c6f839a66568bcaa91852cd9b0b2cbcc0372834577->leave($__internal_c1b75668282a2434eccca9c6f839a66568bcaa91852cd9b0b2cbcc0372834577_prof);

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
