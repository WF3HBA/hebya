<?php

/* admin/clientEdit.html.twig */
class __TwigTemplate_7a9c89ba2bbc4c5bb07f0adf024b2cd9004aa4868b64ef6b1ed569852105f9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/admin.html.twig", "admin/clientEdit.html.twig", 1);
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
        $__internal_3a99336aaebe3079d9ceff3d96148d9d4feac015acb4346ac5a640a71b670160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a99336aaebe3079d9ceff3d96148d9d4feac015acb4346ac5a640a71b670160->enter($__internal_3a99336aaebe3079d9ceff3d96148d9d4feac015acb4346ac5a640a71b670160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clientEdit.html.twig"));

        $__internal_adc8c625cde71fc44806de328bd1d43057b8a4c59e5fe326068f669147163dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc8c625cde71fc44806de328bd1d43057b8a4c59e5fe326068f669147163dcb->enter($__internal_adc8c625cde71fc44806de328bd1d43057b8a4c59e5fe326068f669147163dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clientEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a99336aaebe3079d9ceff3d96148d9d4feac015acb4346ac5a640a71b670160->leave($__internal_3a99336aaebe3079d9ceff3d96148d9d4feac015acb4346ac5a640a71b670160_prof);

        
        $__internal_adc8c625cde71fc44806de328bd1d43057b8a4c59e5fe326068f669147163dcb->leave($__internal_adc8c625cde71fc44806de328bd1d43057b8a4c59e5fe326068f669147163dcb_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c1fc37d92ec340286479abef2be630c412d5e2b0cdbebde04150955d20bb3e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fc37d92ec340286479abef2be630c412d5e2b0cdbebde04150955d20bb3e07->enter($__internal_c1fc37d92ec340286479abef2be630c412d5e2b0cdbebde04150955d20bb3e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6b3e2e43121e28cb01b6cb27e97bfc6a4221fcd50800bbf1ac494e1565806c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3e2e43121e28cb01b6cb27e97bfc6a4221fcd50800bbf1ac494e1565806c37->enter($__internal_6b3e2e43121e28cb01b6cb27e97bfc6a4221fcd50800bbf1ac494e1565806c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_6b3e2e43121e28cb01b6cb27e97bfc6a4221fcd50800bbf1ac494e1565806c37->leave($__internal_6b3e2e43121e28cb01b6cb27e97bfc6a4221fcd50800bbf1ac494e1565806c37_prof);

        
        $__internal_c1fc37d92ec340286479abef2be630c412d5e2b0cdbebde04150955d20bb3e07->leave($__internal_c1fc37d92ec340286479abef2be630c412d5e2b0cdbebde04150955d20bb3e07_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2625d5c6dab84d3989d8498aa79d82693b4a2675f3e8448dacd391c1def797a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2625d5c6dab84d3989d8498aa79d82693b4a2675f3e8448dacd391c1def797a->enter($__internal_b2625d5c6dab84d3989d8498aa79d82693b4a2675f3e8448dacd391c1def797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_40b10fb82b15a525f52d7957f65a6eaa37c2f6b4c3b7d195a90187dfe7d1a125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b10fb82b15a525f52d7957f65a6eaa37c2f6b4c3b7d195a90187dfe7d1a125->enter($__internal_40b10fb82b15a525f52d7957f65a6eaa37c2f6b4c3b7d195a90187dfe7d1a125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div class=\"col-md-9 col-md-offset-2 table-listing\">
    <h1>";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 11, $this->getSourceContext()); })()), "idclient", array())) {
            echo "Edition";
        } else {
            echo "Création";
        }
        echo " client</h1>
<form class=\"form-horizontal\" method=\"POST\">
    <fieldset>
    <legend></legend>
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
      <div class=\"col-md-8\">
      <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
      <div class=\"col-md-8\">
      <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 27, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"company\">Société</label>  
      <div class=\"col-md-8\">
      <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 36, $this->getSourceContext()); })()), "company", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>
      
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
      <div class=\"col-md-8\">
          <textarea id=\"description\" name=\"description\" placeholder=\"\"  class=\"form-control textarea-md\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 44, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"email\">Email</label>  
      <div class=\"col-md-8\">
      <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 51, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"phone\">Téléphone</label>  
      <div class=\"col-md-8\">
      <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 60, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"address\">Adresse</label>  
      <div class=\"col-md-8\">
      <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 69, $this->getSourceContext()); })()), "address", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"city\">Ville</label>  
      <div class=\"col-md-8\">
      <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 76, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"country\">Pays</label>
      <div class=\"col-md-8\">
         <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 85, $this->getSourceContext()); })()), "country", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
      </div>
    </div>

     <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
        <div class=\"col-md-8\">
            <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                <option value=\"public\" ";
        // line 93
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 93, $this->getSourceContext()); })()), "status", array()) == "public")) {
            echo "selected";
        }
        echo ">Public</option>
                <option value=\"privé\" ";
        // line 94
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 94, $this->getSourceContext()); })()), "status", array()) == "privé")) {
            echo "selected";
        }
        echo ">Privé</option>
                <option value=\"archivé\" ";
        // line 95
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 95, $this->getSourceContext()); })()), "status", array()) == "archivé")) {
            echo "selected";
        }
        echo ">Archvé</option>
            </select>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"submit\"></label>
      <div class=\"col-md-8\">
        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
        <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client");
        echo "\" class=\"btn btn-primary\">Annuler</a>
      </div>
    </div>

    </fieldset>
</form>
</div>

    ";
        
        $__internal_40b10fb82b15a525f52d7957f65a6eaa37c2f6b4c3b7d195a90187dfe7d1a125->leave($__internal_40b10fb82b15a525f52d7957f65a6eaa37c2f6b4c3b7d195a90187dfe7d1a125_prof);

        
        $__internal_b2625d5c6dab84d3989d8498aa79d82693b4a2675f3e8448dacd391c1def797a->leave($__internal_b2625d5c6dab84d3989d8498aa79d82693b4a2675f3e8448dacd391c1def797a_prof);

    }

    // line 115
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_517fe5962fc656697ea52387ee7f2321e1b65fb80f4ec5213f17306892757c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517fe5962fc656697ea52387ee7f2321e1b65fb80f4ec5213f17306892757c82->enter($__internal_517fe5962fc656697ea52387ee7f2321e1b65fb80f4ec5213f17306892757c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6fd63a5537f9e3d044a750fdcd785a03a9fa96906a3cdb0a7099a53f72ff4383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd63a5537f9e3d044a750fdcd785a03a9fa96906a3cdb0a7099a53f72ff4383->enter($__internal_6fd63a5537f9e3d044a750fdcd785a03a9fa96906a3cdb0a7099a53f72ff4383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 116
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/edit.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#description')
        });
    </script>
    ";
        
        $__internal_6fd63a5537f9e3d044a750fdcd785a03a9fa96906a3cdb0a7099a53f72ff4383->leave($__internal_6fd63a5537f9e3d044a750fdcd785a03a9fa96906a3cdb0a7099a53f72ff4383_prof);

        
        $__internal_517fe5962fc656697ea52387ee7f2321e1b65fb80f4ec5213f17306892757c82->leave($__internal_517fe5962fc656697ea52387ee7f2321e1b65fb80f4ec5213f17306892757c82_prof);

    }

    public function getTemplateName()
    {
        return "admin/clientEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 121,  272 => 120,  268 => 119,  264 => 118,  260 => 117,  255 => 116,  246 => 115,  227 => 105,  212 => 95,  206 => 94,  200 => 93,  189 => 85,  177 => 76,  167 => 69,  155 => 60,  143 => 51,  133 => 44,  122 => 36,  110 => 27,  98 => 18,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>{% if client.idclient%}Edition{% else %}Création{% endif %} client</h1>
<form class=\"form-horizontal\" method=\"POST\">
    <fieldset>
    <legend></legend>
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
      <div class=\"col-md-8\">
      <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"{{client.lastname}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
      <div class=\"col-md-8\">
      <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"{{client.firstname}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"company\">Société</label>  
      <div class=\"col-md-8\">
      <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"{{client.company}}\" class=\"form-control input-md\">

      </div>
    </div>
      
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
      <div class=\"col-md-8\">
          <textarea id=\"description\" name=\"description\" placeholder=\"\"  class=\"form-control textarea-md\">{{client.description}}</textarea>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"email\">Email</label>  
      <div class=\"col-md-8\">
      <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"{{client.email}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"phone\">Téléphone</label>  
      <div class=\"col-md-8\">
      <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"{{client.phone}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"address\">Adresse</label>  
      <div class=\"col-md-8\">
      <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"{{client.address}}\" class=\"form-control input-md\">

      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"city\">Ville</label>  
      <div class=\"col-md-8\">
      <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"\" value=\"{{client.city}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- text input-->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"country\">Pays</label>
      <div class=\"col-md-8\">
         <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"{{client.country}}\" class=\"form-control input-md\">
      </div>
    </div>

     <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"status\">Statut</label>  
        <div class=\"col-md-8\">
            <select id=\"status\" name=\"status\" class=\"form-control select-md\">
                <option value=\"public\" {% if client.status == \"public\" %}selected{% endif %}>Public</option>
                <option value=\"privé\" {% if client.status == \"privé\" %}selected{% endif %}>Privé</option>
                <option value=\"archivé\" {% if client.status == \"archivé\" %}selected{% endif %}>Archvé</option>
            </select>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"submit\"></label>
      <div class=\"col-md-8\">
        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
        <a href=\"{{ path('admin_client') }}\" class=\"btn btn-primary\">Annuler</a>
      </div>
    </div>

    </fieldset>
</form>
</div>

    {% endblock %}
    
    {% block javascript %}
    {{ parent() }}
     <script src=\"{{ asset('js/admin/edit.js') }}\"></script>
     <script type=\"text/javascript\" src=\"{{ asset('js/admin/module.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/hotkeys.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/uploader.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/admin/simditor.min.js') }}\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#description')
        });
    </script>
    {% endblock %}", "admin/clientEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\clientEdit.html.twig");
    }
}
