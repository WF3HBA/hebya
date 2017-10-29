<?php

/* admin/adminProductEdit.html.twig */
class __TwigTemplate_f4d17953acb660057712efdd2a56d52a43d5fc9c13e483d1b9da9066261af988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminProductEdit.html.twig", 1);
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
        $__internal_830a0c7073d0cc1e56ae3638cfe278be106f53edf31ccf5aa7ef32340e566bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830a0c7073d0cc1e56ae3638cfe278be106f53edf31ccf5aa7ef32340e566bfd->enter($__internal_830a0c7073d0cc1e56ae3638cfe278be106f53edf31ccf5aa7ef32340e566bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProductEdit.html.twig"));

        $__internal_58e41c6eda27a18a3bf05c802a299fa8167ae7e092b5e13ce910c2fabf6e845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e41c6eda27a18a3bf05c802a299fa8167ae7e092b5e13ce910c2fabf6e845c->enter($__internal_58e41c6eda27a18a3bf05c802a299fa8167ae7e092b5e13ce910c2fabf6e845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProductEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830a0c7073d0cc1e56ae3638cfe278be106f53edf31ccf5aa7ef32340e566bfd->leave($__internal_830a0c7073d0cc1e56ae3638cfe278be106f53edf31ccf5aa7ef32340e566bfd_prof);

        
        $__internal_58e41c6eda27a18a3bf05c802a299fa8167ae7e092b5e13ce910c2fabf6e845c->leave($__internal_58e41c6eda27a18a3bf05c802a299fa8167ae7e092b5e13ce910c2fabf6e845c_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_710a5649c256dd976bf24bd423d34a9badb83b06a8d64b6ce13e52b31e54abc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710a5649c256dd976bf24bd423d34a9badb83b06a8d64b6ce13e52b31e54abc7->enter($__internal_710a5649c256dd976bf24bd423d34a9badb83b06a8d64b6ce13e52b31e54abc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0c86017075a61b4c017d52c48a7a48b776501f739a50f7952cfc7beb95ebd356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c86017075a61b4c017d52c48a7a48b776501f739a50f7952cfc7beb95ebd356->enter($__internal_0c86017075a61b4c017d52c48a7a48b776501f739a50f7952cfc7beb95ebd356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_0c86017075a61b4c017d52c48a7a48b776501f739a50f7952cfc7beb95ebd356->leave($__internal_0c86017075a61b4c017d52c48a7a48b776501f739a50f7952cfc7beb95ebd356_prof);

        
        $__internal_710a5649c256dd976bf24bd423d34a9badb83b06a8d64b6ce13e52b31e54abc7->leave($__internal_710a5649c256dd976bf24bd423d34a9badb83b06a8d64b6ce13e52b31e54abc7_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3e28645c40026e7814a98fdfeaa9cd386e3161753fa3c2a617aa616eb6f32f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e28645c40026e7814a98fdfeaa9cd386e3161753fa3c2a617aa616eb6f32f7->enter($__internal_b3e28645c40026e7814a98fdfeaa9cd386e3161753fa3c2a617aa616eb6f32f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a686de0f8424e8b1e6792279a01e2cb79a0ed5b561d0e5bf719099069bf6561f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a686de0f8424e8b1e6792279a01e2cb79a0ed5b561d0e5bf719099069bf6561f->enter($__internal_a686de0f8424e8b1e6792279a01e2cb79a0ed5b561d0e5bf719099069bf6561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <label class=\"col-md-2 control-label\" for=\"picture\">Image</label>  
                        <div class=\"col-md-10\">
                            <input id=\"picture\" name=\"picture\" type=\"text\" placeholder=\"\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 44, $this->getSourceContext()); })()), "picture", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\" for=\"field\">Domaine</label>  
                        <div class=\"col-md-10\">
                            <select id=\"field\" name=\"field\" class=\"form-control select-md\">
                                <option value=\"Education\" ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->getSourceContext()); })()), "field", array()) == "Education")) {
            echo "selected";
        }
        echo ">Education</option>
                                <option value=\"Santé\" ";
        // line 52
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 52, $this->getSourceContext()); })()), "field", array()) == "Santé")) {
            echo "selected";
        }
        echo ">Santé</option>
                                <option value=\"Assurance\" ";
        // line 53
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 53, $this->getSourceContext()); })()), "field", array()) == "Assurance")) {
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
        // line 61
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 61, $this->getSourceContext()); })()), "status", array()) == "public")) {
            echo "selected";
        }
        echo ">Public</option>
                                <option value=\"privé\" ";
        // line 62
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 62, $this->getSourceContext()); })()), "status", array()) == "privé")) {
            echo "selected";
        }
        echo ">Privé</option>
                                <option value=\"archivé\" ";
        // line 63
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 63, $this->getSourceContext()); })()), "status", array()) == "archivé")) {
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
        // line 71
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 81
            echo "                            <li class=\"list-group-item\">
                                ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "
                                <div class=\"material-switch pull-right\">
                                    <input id=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "\" name=\"product-has-country[]\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()), "html", null, true);
            echo "\"
                                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["disponibilities"]) || array_key_exists("disponibilities", $context) ? $context["disponibilities"] : (function () { throw new Twig_Error_Runtime('Variable "disponibilities" does not exist.', 85, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["disponibility"]) {
                // line 86
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "idcountry", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["disponibility"], "idcountry", array()))) {
                    // line 87
                    echo "                                            checked
                                        ";
                }
                // line 89
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disponibility'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "/>
                                    <label for=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "\" class=\"label-success\"></label>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </ul>
                    </div>            
                </div>      
            </fieldset>
        </form>
    </div>

    ";
        
        $__internal_a686de0f8424e8b1e6792279a01e2cb79a0ed5b561d0e5bf719099069bf6561f->leave($__internal_a686de0f8424e8b1e6792279a01e2cb79a0ed5b561d0e5bf719099069bf6561f_prof);

        
        $__internal_b3e28645c40026e7814a98fdfeaa9cd386e3161753fa3c2a617aa616eb6f32f7->leave($__internal_b3e28645c40026e7814a98fdfeaa9cd386e3161753fa3c2a617aa616eb6f32f7_prof);

    }

    // line 103
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f46a6da760c469e3342f33f31a45a384c33cb92ff994d03dffb72eb33089143b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46a6da760c469e3342f33f31a45a384c33cb92ff994d03dffb72eb33089143b->enter($__internal_f46a6da760c469e3342f33f31a45a384c33cb92ff994d03dffb72eb33089143b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f44a113d75302decb4958cb8d40d7352b7c9a466890997e07de3ed4e14e08eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44a113d75302decb4958cb8d40d7352b7c9a466890997e07de3ed4e14e08eb4->enter($__internal_f44a113d75302decb4958cb8d40d7352b7c9a466890997e07de3ed4e14e08eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 104
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 108
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
        
        $__internal_f44a113d75302decb4958cb8d40d7352b7c9a466890997e07de3ed4e14e08eb4->leave($__internal_f44a113d75302decb4958cb8d40d7352b7c9a466890997e07de3ed4e14e08eb4_prof);

        
        $__internal_f46a6da760c469e3342f33f31a45a384c33cb92ff994d03dffb72eb33089143b->leave($__internal_f46a6da760c469e3342f33f31a45a384c33cb92ff994d03dffb72eb33089143b_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminProductEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 108,  297 => 107,  293 => 106,  289 => 105,  284 => 104,  275 => 103,  258 => 94,  248 => 90,  240 => 89,  236 => 87,  233 => 86,  229 => 85,  223 => 84,  218 => 82,  215 => 81,  211 => 80,  199 => 71,  186 => 63,  180 => 62,  174 => 61,  161 => 53,  155 => 52,  149 => 51,  139 => 44,  130 => 38,  121 => 32,  112 => 26,  103 => 20,  99 => 19,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                        <label class=\"col-md-2 control-label\" for=\"picture\">Image</label>  
                        <div class=\"col-md-10\">
                            <input id=\"picture\" name=\"picture\" type=\"text\" placeholder=\"\" value=\"{{product.picture}}\" class=\"form-control input-md\">
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
", "admin/adminProductEdit.html.twig", "C:\\wamp64\\www\\hebya\\templates\\admin\\adminProductEdit.html.twig");
    }
}
