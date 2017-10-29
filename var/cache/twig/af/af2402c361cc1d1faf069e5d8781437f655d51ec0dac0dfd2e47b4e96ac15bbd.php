<?php

/* admin/productEdit.html.twig */
class __TwigTemplate_d8ba0b57980b4ca7b63c018796319f267ea2d96a7ae80b57479be29ae3a754bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/productEdit.html.twig", 1);
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
        $__internal_c47fcbc9a1317b7c878ae6913c6a429f7d30e9beafbc1ffdf41f10ee41e45231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47fcbc9a1317b7c878ae6913c6a429f7d30e9beafbc1ffdf41f10ee41e45231->enter($__internal_c47fcbc9a1317b7c878ae6913c6a429f7d30e9beafbc1ffdf41f10ee41e45231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/productEdit.html.twig"));

        $__internal_02d9af438323a6ab799f8d02fd9df14686727bd931d3d254bc68e85bb359031c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d9af438323a6ab799f8d02fd9df14686727bd931d3d254bc68e85bb359031c->enter($__internal_02d9af438323a6ab799f8d02fd9df14686727bd931d3d254bc68e85bb359031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/productEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47fcbc9a1317b7c878ae6913c6a429f7d30e9beafbc1ffdf41f10ee41e45231->leave($__internal_c47fcbc9a1317b7c878ae6913c6a429f7d30e9beafbc1ffdf41f10ee41e45231_prof);

        
        $__internal_02d9af438323a6ab799f8d02fd9df14686727bd931d3d254bc68e85bb359031c->leave($__internal_02d9af438323a6ab799f8d02fd9df14686727bd931d3d254bc68e85bb359031c_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b396ae375d08e1ece558601ea01d6059d25d5cfb3200c4a60acf3ce7225286bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396ae375d08e1ece558601ea01d6059d25d5cfb3200c4a60acf3ce7225286bf->enter($__internal_b396ae375d08e1ece558601ea01d6059d25d5cfb3200c4a60acf3ce7225286bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d82406e37d9b86a62b6446e3d42cdd3dd6eb308966fef3128d8f98c813d48191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82406e37d9b86a62b6446e3d42cdd3dd6eb308966fef3128d8f98c813d48191->enter($__internal_d82406e37d9b86a62b6446e3d42cdd3dd6eb308966fef3128d8f98c813d48191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/product_edit.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d82406e37d9b86a62b6446e3d42cdd3dd6eb308966fef3128d8f98c813d48191->leave($__internal_d82406e37d9b86a62b6446e3d42cdd3dd6eb308966fef3128d8f98c813d48191_prof);

        
        $__internal_b396ae375d08e1ece558601ea01d6059d25d5cfb3200c4a60acf3ce7225286bf->leave($__internal_b396ae375d08e1ece558601ea01d6059d25d5cfb3200c4a60acf3ce7225286bf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0334674e990c14823485148475819e6d08dcf510e7d0da3957c7647969fcf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0334674e990c14823485148475819e6d08dcf510e7d0da3957c7647969fcf7b->enter($__internal_d0334674e990c14823485148475819e6d08dcf510e7d0da3957c7647969fcf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_997f0d6fbceefa1eb786dbacf01e0ef385f87a9f765b106905479fbc0fa8f63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997f0d6fbceefa1eb786dbacf01e0ef385f87a9f765b106905479fbc0fa8f63c->enter($__internal_997f0d6fbceefa1eb786dbacf01e0ef385f87a9f765b106905479fbc0fa8f63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "idproduct", array())) {
            echo "Edition";
        } else {
            echo "Création";
        }
        echo " de produit</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <legend></legend>
                <div class=\"col-md-8\"> <!-- Left Column -->
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"name\">Nom</label>  
                        <div class=\"col-md-10\">
                             <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                             <input id=\"idproduct\" name=\"idproduct\" type=\"text\" placeholder=\"\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->getSourceContext()); })()), "idproduct", array()), "html", null, true);
        echo "\" class=\"form-control input-md hidden\">
                         </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"website\">Site web</label>  
                        <div class=\"col-md-10\">
                            <input id=\"website\" name=\"website\" type=\"text\" placeholder=\"\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->getSourceContext()); })()), "website", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"summary\">Résumé</label>  
                        <div class=\"col-md-10\">
                            <textarea id=\"summary\" name=\"summary\" type=\"text\" placeholder=\"\" rows=\"7\" class=\"form-control input-md\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 32, $this->getSourceContext()); })()), "summary", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                        <div class=\"col-md-10\">
                            <textarea id=\"description\" name=\"description\" type=\"text\" placeholder=\"\" rows=\"15\" class=\"form-control input-md\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 38, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"field\">Domaine</label>  
                        <div class=\"col-md-10\">
                            <select id=\"field\" name=\"field\" class=\"form-control select-md\">
                                <option value=\"Education\" ";
        // line 45
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->getSourceContext()); })()), "field", array()) == "Education")) {
            echo "selected";
        }
        echo ">Education</option>
                                <option value=\"Santé\" ";
        // line 46
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 46, $this->getSourceContext()); })()), "field", array()) == "Santé")) {
            echo "selected";
        }
        echo ">Santé</option>
                                <option value=\"Assurance\" ";
        // line 47
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->getSourceContext()); })()), "field", array()) == "Assurance")) {
            echo "selected";
        }
        echo ">Assurance</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
                        <div class=\"col-md-10\">
                            <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                                <option value=\"public\" ";
        // line 55
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 55, $this->getSourceContext()); })()), "status", array()) == "public")) {
            echo "selected";
        }
        echo ">Public</option>
                                <option value=\"privé\" ";
        // line 56
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 56, $this->getSourceContext()); })()), "status", array()) == "privé")) {
            echo "selected";
        }
        echo ">Privé</option>
                                <option value=\"archivé\" ";
        // line 57
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 57, $this->getSourceContext()); })()), "status", array()) == "archivé")) {
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-4\"> <!-- Right Column -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"><strong>Disponibilité par pays</strong></div>
                        <ul class=\"list-group\">
                            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 74, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 75
            echo "                            <li class=\"list-group-item\">
                                ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "
                                <div class=\"material-switch pull-right\">
                                    <input id=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "\" name=\"product-has-country[]\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()), "html", null, true);
            echo "\"
                                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["disponibilities"]) || array_key_exists("disponibilities", $context) ? $context["disponibilities"] : (function () { throw new Twig_Error_Runtime('Variable "disponibilities" does not exist.', 79, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["disponibility"]) {
                // line 80
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["disponibility"], "idcountry", array()))) {
                    // line 81
                    echo "                                            checked
                                        ";
                }
                // line 83
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disponibility'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "/>
                                    <label for=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "\" class=\"label-success\"></label>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </ul>
                    </div>            
                </div>      
            </fieldset>
        </form>
    </div>

    ";
        
        $__internal_997f0d6fbceefa1eb786dbacf01e0ef385f87a9f765b106905479fbc0fa8f63c->leave($__internal_997f0d6fbceefa1eb786dbacf01e0ef385f87a9f765b106905479fbc0fa8f63c_prof);

        
        $__internal_d0334674e990c14823485148475819e6d08dcf510e7d0da3957c7647969fcf7b->leave($__internal_d0334674e990c14823485148475819e6d08dcf510e7d0da3957c7647969fcf7b_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_947500b32276a732275ef81c275a520d558bd0fa9c89b6c2ca58c4d5ed0fa9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947500b32276a732275ef81c275a520d558bd0fa9c89b6c2ca58c4d5ed0fa9cd->enter($__internal_947500b32276a732275ef81c275a520d558bd0fa9c89b6c2ca58c4d5ed0fa9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_20a599696a5caf8bec717c43b5746fdc907a69c3f95736c47c205f021b6e134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a599696a5caf8bec717c43b5746fdc907a69c3f95736c47c205f021b6e134f->enter($__internal_20a599696a5caf8bec717c43b5746fdc907a69c3f95736c47c205f021b6e134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        var summary = new Simditor({
             textarea: \$('#summary')
        });
        var description = new Simditor({
             textarea: \$('#description')
        });
    </script>
    ";
        
        $__internal_20a599696a5caf8bec717c43b5746fdc907a69c3f95736c47c205f021b6e134f->leave($__internal_20a599696a5caf8bec717c43b5746fdc907a69c3f95736c47c205f021b6e134f_prof);

        
        $__internal_947500b32276a732275ef81c275a520d558bd0fa9c89b6c2ca58c4d5ed0fa9cd->leave($__internal_947500b32276a732275ef81c275a520d558bd0fa9c89b6c2ca58c4d5ed0fa9cd_prof);

    }

    public function getTemplateName()
    {
        return "admin/productEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 102,  288 => 101,  284 => 100,  280 => 99,  275 => 98,  266 => 97,  249 => 88,  239 => 84,  231 => 83,  227 => 81,  224 => 80,  220 => 79,  214 => 78,  209 => 76,  206 => 75,  202 => 74,  190 => 65,  177 => 57,  171 => 56,  165 => 55,  152 => 47,  146 => 46,  140 => 45,  130 => 38,  121 => 32,  112 => 26,  103 => 20,  99 => 19,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/admin/product_edit.css\") }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/admin/simditor.css') }}\" />
{% endblock %}

{% block content %}
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>{% if product.idproduct%}Edition{% else %}Création{% endif %} de produit</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <legend></legend>
                <div class=\"col-md-8\"> <!-- Left Column -->
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"name\">Nom</label>  
                        <div class=\"col-md-10\">
                             <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"\" value=\"{{product.name}}\" class=\"form-control input-md\">
                             <input id=\"idproduct\" name=\"idproduct\" type=\"text\" placeholder=\"\" value=\"{{product.idproduct}}\" class=\"form-control input-md hidden\">
                         </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"website\">Site web</label>  
                        <div class=\"col-md-10\">
                            <input id=\"website\" name=\"website\" type=\"text\" placeholder=\"\" value=\"{{product.website}}\" class=\"form-control input-md\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"summary\">Résumé</label>  
                        <div class=\"col-md-10\">
                            <textarea id=\"summary\" name=\"summary\" type=\"text\" placeholder=\"\" rows=\"7\" class=\"form-control input-md\">{{ product.summary }}</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                        <div class=\"col-md-10\">
                            <textarea id=\"description\" name=\"description\" type=\"text\" placeholder=\"\" rows=\"15\" class=\"form-control input-md\">{{ product.description }}</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"field\">Domaine</label>  
                        <div class=\"col-md-10\">
                            <select id=\"field\" name=\"field\" class=\"form-control select-md\">
                                <option value=\"Education\" {% if product.field == \"Education\" %}selected{% endif %}>Education</option>
                                <option value=\"Santé\" {% if product.field == \"Santé\" %}selected{% endif %}>Santé</option>
                                <option value=\"Assurance\" {% if product.field == \"Assurance\" %}selected{% endif %}>Assurance</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
                        <div class=\"col-md-10\">
                            <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                                <option value=\"public\" {% if product.status == \"public\" %}selected{% endif %}>Public</option>
                                <option value=\"privé\" {% if product.status == \"privé\" %}selected{% endif %}>Privé</option>
                                <option value=\"archivé\" {% if product.status == \"archivé\" %}selected{% endif %}>Archvé</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                        <div class=\"col-md-8\">
                            <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                            <a href=\"{{ path('admin_product') }}\" class=\"btn btn-primary\">Annuler</a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-4\"> <!-- Right Column -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"><strong>Disponibilité par pays</strong></div>
                        <ul class=\"list-group\">
                            {% for country in countries %}
                            <li class=\"list-group-item\">
                                {{ country.name }}
                                <div class=\"material-switch pull-right\">
                                    <input id=\"{{ country.name }}\" name=\"product-has-country[]\" type=\"checkbox\" value=\"{{ country.idcountry }}\"
                                    {% for disponibility in disponibilities %}
                                        {% if country.idcountry == disponibility.idcountry %}
                                            checked
                                        {% endif %}
                                    {% endfor %}/>
                                    <label for=\"{{ country.name }}\" class=\"label-success\"></label>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
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
        var summary = new Simditor({
             textarea: \$('#summary')
        });
        var description = new Simditor({
             textarea: \$('#description')
        });
    </script>
    {% endblock %}
", "admin/productEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\productEdit.html.twig");
    }
}
