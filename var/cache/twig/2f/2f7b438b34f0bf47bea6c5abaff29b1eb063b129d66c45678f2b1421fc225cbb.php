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
        $__internal_adb2abcc71d532233f95b52e7eb28e59d95e863552739bb32bad4444624ee1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb2abcc71d532233f95b52e7eb28e59d95e863552739bb32bad4444624ee1ad->enter($__internal_adb2abcc71d532233f95b52e7eb28e59d95e863552739bb32bad4444624ee1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clientEdit.html.twig"));

        $__internal_989252c48cfc27ce01b72787c2a451c68fb0761f0e6377b46f7211febcb31d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989252c48cfc27ce01b72787c2a451c68fb0761f0e6377b46f7211febcb31d7e->enter($__internal_989252c48cfc27ce01b72787c2a451c68fb0761f0e6377b46f7211febcb31d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clientEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb2abcc71d532233f95b52e7eb28e59d95e863552739bb32bad4444624ee1ad->leave($__internal_adb2abcc71d532233f95b52e7eb28e59d95e863552739bb32bad4444624ee1ad_prof);

        
        $__internal_989252c48cfc27ce01b72787c2a451c68fb0761f0e6377b46f7211febcb31d7e->leave($__internal_989252c48cfc27ce01b72787c2a451c68fb0761f0e6377b46f7211febcb31d7e_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9abda019af4dba13dd7a3ee41ab1e00d14dce810773f7c31b4163447399ce662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abda019af4dba13dd7a3ee41ab1e00d14dce810773f7c31b4163447399ce662->enter($__internal_9abda019af4dba13dd7a3ee41ab1e00d14dce810773f7c31b4163447399ce662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c486dd88d51afa7083d3d574db7e81985a2859d53afde2392b94b8ff4d293b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c486dd88d51afa7083d3d574db7e81985a2859d53afde2392b94b8ff4d293b3e->enter($__internal_c486dd88d51afa7083d3d574db7e81985a2859d53afde2392b94b8ff4d293b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_c486dd88d51afa7083d3d574db7e81985a2859d53afde2392b94b8ff4d293b3e->leave($__internal_c486dd88d51afa7083d3d574db7e81985a2859d53afde2392b94b8ff4d293b3e_prof);

        
        $__internal_9abda019af4dba13dd7a3ee41ab1e00d14dce810773f7c31b4163447399ce662->leave($__internal_9abda019af4dba13dd7a3ee41ab1e00d14dce810773f7c31b4163447399ce662_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ff136fc4fc4c13695fde1cadaa0c5a0c4f4c5b9ce898ce47c8109d15fdb691d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff136fc4fc4c13695fde1cadaa0c5a0c4f4c5b9ce898ce47c8109d15fdb691d->enter($__internal_0ff136fc4fc4c13695fde1cadaa0c5a0c4f4c5b9ce898ce47c8109d15fdb691d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_da0b329b61a204c14595a7bc9cf746e324a5af1edb3176838078b1fee52aa6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0b329b61a204c14595a7bc9cf746e324a5af1edb3176838078b1fee52aa6f6->enter($__internal_da0b329b61a204c14595a7bc9cf746e324a5af1edb3176838078b1fee52aa6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div class=\"col-md-7 col-md-offset-2 table-listing\">
    <h1>";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 11, $this->getSourceContext()); })()), "idclient", array())) {
            echo "Edit";
        } else {
            echo "Create";
        }
        echo " Client</h1>
<form class=\"form-horizontal\" method=\"POST\">
    <fieldset>

    <!-- Form Name -->
    <legend></legend>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"lastname\">lastname</label>  
      <div class=\"col-md-5\">
      <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"firstname\">firstname</label>  
      <div class=\"col-md-5\">
      <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 31, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"company\">company</label>  
      <div class=\"col-md-5\">
      <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 40, $this->getSourceContext()); })()), "company", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"company_type\">company type</label>  
      <div class=\"col-md-5\">
          <select name=\"company_type\">
              <option value=\"\" class=\"form-control input-md\">Choisissez</option>
              
              <option  value=\"Entreprise\" class=\"form-control input-md\" ";
        // line 52
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 52, $this->getSourceContext()); })()), "company_type", array()) == "Entreprise")) {
            echo "selected";
        }
        echo ">Entreprise</option>
              <option  value=\"Association\" class=\"form-control input-md\" ";
        // line 53
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 53, $this->getSourceContext()); })()), "company_type", array()) == "Association")) {
            echo "selected";
        }
        echo ">Association</option>
              <option  value=\"Organisme public\" class=\"form-control input-md\" ";
        // line 54
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 54, $this->getSourceContext()); })()), "company_type", array()) == "Organisme public")) {
            echo "selected";
        }
        echo ">Organisme public</option>
              <option  value=\"Université\" class=\"form-control input-md\" ";
        // line 55
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 55, $this->getSourceContext()); })()), "company_type", array()) == "Université")) {
            echo "selected";
        }
        echo ">Université</option>
              <option  value=\"Centre de recherche\" class=\"form-control input-md\" ";
        // line 56
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 56, $this->getSourceContext()); })()), "company_type", array()) == "Centre de recherche")) {
            echo "selected";
        }
        echo ">Centre de recherche</option>
              <option  value=\"Autre\" class=\"form-control input-md\" ";
        // line 57
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 57, $this->getSourceContext()); })()), "company_type", array()) == "Autre")) {
            echo "selected";
        }
        echo ">Autre</option>
          </select>
      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"email\">email</label>  
      <div class=\"col-md-5\">
      <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 66, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"phone\">phone</label>  
      <div class=\"col-md-5\">
      <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 75, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"address\">address</label>  
      <div class=\"col-md-5\">
      <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 84, $this->getSourceContext()); })()), "address", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"country\">country</label>
      <div class=\"col-md-5\">
         <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 93, $this->getSourceContext()); })()), "country", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
      </div>
    </div>

      
  ";
        // line 104
        echo "
    <!-- Button (Double) -->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"submit\">submit</label>
      <div class=\"col-md-8\">
        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">submit</button>
        <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client");
        echo "\" class=\"btn btn-primary\">annuler</a>
      </div>
    </div>

    </fieldset>
</form>
</div>

    ";
        
        $__internal_da0b329b61a204c14595a7bc9cf746e324a5af1edb3176838078b1fee52aa6f6->leave($__internal_da0b329b61a204c14595a7bc9cf746e324a5af1edb3176838078b1fee52aa6f6_prof);

        
        $__internal_0ff136fc4fc4c13695fde1cadaa0c5a0c4f4c5b9ce898ce47c8109d15fdb691d->leave($__internal_0ff136fc4fc4c13695fde1cadaa0c5a0c4f4c5b9ce898ce47c8109d15fdb691d_prof);

    }

    // line 120
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3dc8b37024fd509f3d5efb38c5eb4e01d7b68fd166127b8de1b533a93280350c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc8b37024fd509f3d5efb38c5eb4e01d7b68fd166127b8de1b533a93280350c->enter($__internal_3dc8b37024fd509f3d5efb38c5eb4e01d7b68fd166127b8de1b533a93280350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_084c9a8316b8d6164f887c0b6c9ef68b4053e46d7d220e2fa6a865402d216e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084c9a8316b8d6164f887c0b6c9ef68b4053e46d7d220e2fa6a865402d216e4c->enter($__internal_084c9a8316b8d6164f887c0b6c9ef68b4053e46d7d220e2fa6a865402d216e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 121
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/edit.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var content = new Simditor({
             textarea: \$('#')
        });
    </script>
    ";
        
        $__internal_084c9a8316b8d6164f887c0b6c9ef68b4053e46d7d220e2fa6a865402d216e4c->leave($__internal_084c9a8316b8d6164f887c0b6c9ef68b4053e46d7d220e2fa6a865402d216e4c_prof);

        
        $__internal_3dc8b37024fd509f3d5efb38c5eb4e01d7b68fd166127b8de1b533a93280350c->leave($__internal_3dc8b37024fd509f3d5efb38c5eb4e01d7b68fd166127b8de1b533a93280350c_prof);

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
        return array (  286 => 126,  282 => 125,  278 => 124,  274 => 123,  270 => 122,  265 => 121,  256 => 120,  237 => 110,  229 => 104,  221 => 93,  209 => 84,  197 => 75,  185 => 66,  171 => 57,  165 => 56,  159 => 55,  153 => 54,  147 => 53,  141 => 52,  126 => 40,  114 => 31,  102 => 22,  84 => 11,  81 => 10,  72 => 9,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
<div class=\"col-md-7 col-md-offset-2 table-listing\">
    <h1>{% if client.idclient%}Edit{% else %}Create{% endif %} Client</h1>
<form class=\"form-horizontal\" method=\"POST\">
    <fieldset>

    <!-- Form Name -->
    <legend></legend>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"lastname\">lastname</label>  
      <div class=\"col-md-5\">
      <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"{{client.lastname}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"firstname\">firstname</label>  
      <div class=\"col-md-5\">
      <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"{{client.firstname}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"company\">company</label>  
      <div class=\"col-md-5\">
      <input id=\"company\" name=\"company\" type=\"text\" placeholder=\"\" value=\"{{client.company}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"company_type\">company type</label>  
      <div class=\"col-md-5\">
          <select name=\"company_type\">
              <option value=\"\" class=\"form-control input-md\">Choisissez</option>
              
              <option  value=\"Entreprise\" class=\"form-control input-md\" {% if client.company_type == 'Entreprise' %}selected{% endif %}>Entreprise</option>
              <option  value=\"Association\" class=\"form-control input-md\" {% if client.company_type == 'Association' %}selected{% endif %}>Association</option>
              <option  value=\"Organisme public\" class=\"form-control input-md\" {% if client.company_type == 'Organisme public' %}selected{% endif %}>Organisme public</option>
              <option  value=\"Université\" class=\"form-control input-md\" {% if client.company_type == 'Université' %}selected{% endif %}>Université</option>
              <option  value=\"Centre de recherche\" class=\"form-control input-md\" {% if client.company_type == 'Centre de recherche' %}selected{% endif %}>Centre de recherche</option>
              <option  value=\"Autre\" class=\"form-control input-md\" {% if client.company_type == 'Autre' %}selected{% endif %}>Autre</option>
          </select>
      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"email\">email</label>  
      <div class=\"col-md-5\">
      <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"\" value=\"{{client.email}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"phone\">phone</label>  
      <div class=\"col-md-5\">
      <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"\" value=\"{{client.phone}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- Text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"address\">address</label>  
      <div class=\"col-md-5\">
      <input id=\"address\" name=\"address\" type=\"text\" placeholder=\"\" value=\"{{client.address}}\" class=\"form-control input-md\">

      </div>
    </div>

    <!-- text input-->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"country\">country</label>
      <div class=\"col-md-5\">
         <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"\" value=\"{{client.country}}\" class=\"form-control input-md\">
      </div>
    </div>

      
  {#  <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"status\">status</label>
      <div class=\"col-md-5\">
         <input id=\"password\" name=\"password\" type=\"text\" placeholder=\"\" value=\"{{client.password}}\" class=\"form-control input-md\">
      </div>
    </div>#}

    <!-- Button (Double) -->
    <div class=\"form-group\">
      <label class=\"col-md-4 control-label\" for=\"submit\">submit</label>
      <div class=\"col-md-8\">
        <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">submit</button>
        <a href=\"{{ path('admin_client') }}\" class=\"btn btn-primary\">annuler</a>
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
             textarea: \$('#')
        });
    </script>
    {% endblock %}", "admin/clientEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\clientEdit.html.twig");
    }
}
