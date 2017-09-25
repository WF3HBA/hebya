<?php

/* admin/adminTeamEdit.html.twig */
class __TwigTemplate_3212342ca4dbf181a187958973dd0c9a8328f1850ca206e636bc1eb39f5eb1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminTeamEdit.html.twig", 1);
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
        $__internal_a1470906b93c443984e59f8aedc3d84ac5e74ca147de540b5d4f699cbcaee30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1470906b93c443984e59f8aedc3d84ac5e74ca147de540b5d4f699cbcaee30c->enter($__internal_a1470906b93c443984e59f8aedc3d84ac5e74ca147de540b5d4f699cbcaee30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $__internal_01b0d7eea2857a97473aaf217c5dbd9c5ecbe57bd3d2184e2ad40edac7d479e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b0d7eea2857a97473aaf217c5dbd9c5ecbe57bd3d2184e2ad40edac7d479e7->enter($__internal_01b0d7eea2857a97473aaf217c5dbd9c5ecbe57bd3d2184e2ad40edac7d479e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1470906b93c443984e59f8aedc3d84ac5e74ca147de540b5d4f699cbcaee30c->leave($__internal_a1470906b93c443984e59f8aedc3d84ac5e74ca147de540b5d4f699cbcaee30c_prof);

        
        $__internal_01b0d7eea2857a97473aaf217c5dbd9c5ecbe57bd3d2184e2ad40edac7d479e7->leave($__internal_01b0d7eea2857a97473aaf217c5dbd9c5ecbe57bd3d2184e2ad40edac7d479e7_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8e38726e6041f6dc7f5a03005a2410f8f7227ff4b1b47f8019b363e76bf565de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e38726e6041f6dc7f5a03005a2410f8f7227ff4b1b47f8019b363e76bf565de->enter($__internal_8e38726e6041f6dc7f5a03005a2410f8f7227ff4b1b47f8019b363e76bf565de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c1ad4575faa395f14b3aaef4b80e78c3f5cd9dd4729999aa21f0457d04a964e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ad4575faa395f14b3aaef4b80e78c3f5cd9dd4729999aa21f0457d04a964e0->enter($__internal_c1ad4575faa395f14b3aaef4b80e78c3f5cd9dd4729999aa21f0457d04a964e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c1ad4575faa395f14b3aaef4b80e78c3f5cd9dd4729999aa21f0457d04a964e0->leave($__internal_c1ad4575faa395f14b3aaef4b80e78c3f5cd9dd4729999aa21f0457d04a964e0_prof);

        
        $__internal_8e38726e6041f6dc7f5a03005a2410f8f7227ff4b1b47f8019b363e76bf565de->leave($__internal_8e38726e6041f6dc7f5a03005a2410f8f7227ff4b1b47f8019b363e76bf565de_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5897ee865c88d2e1cd1179804eefbc6c09cf35c2c5f97d24b45f5ebfe6c8708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5897ee865c88d2e1cd1179804eefbc6c09cf35c2c5f97d24b45f5ebfe6c8708->enter($__internal_a5897ee865c88d2e1cd1179804eefbc6c09cf35c2c5f97d24b45f5ebfe6c8708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b39b6f023c03ce298cb45038d64fc15ca67fdc4aa6024b5e66d7237ea04cc606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39b6f023c03ce298cb45038d64fc15ca67fdc4aa6024b5e66d7237ea04cc606->enter($__internal_b39b6f023c03ce298cb45038d64fc15ca67fdc4aa6024b5e66d7237ea04cc606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <h1>";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 9, $this->getSourceContext()); })()), "idteam_member", array())) {
            echo "Edit";
        } else {
            echo "Create";
        }
        echo " membre de l'équipe</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 15, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 21, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"title\">Titre</label>  
                    <div class=\"col-md-8\">
                        <input id=\"title\" name=\"title\" type=\"text\" placeholder=\"\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 27, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"description\" name=\"description\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 33, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"linkedin\">Linkedin</label>  
                    <div class=\"col-md-8\">
                        <input id=\"linkedin\" name=\"linkedin\" type=\"text\" placeholder=\"\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["teamMember"]) || array_key_exists("teamMember", $context) ? $context["teamMember"] : (function () { throw new Twig_Error_Runtime('Variable "teamMember" does not exist.', 39, $this->getSourceContext()); })()), "linkedin", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team");
        echo "\" class=\"btn btn-primary\">Annuler</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
";
        
        $__internal_b39b6f023c03ce298cb45038d64fc15ca67fdc4aa6024b5e66d7237ea04cc606->leave($__internal_b39b6f023c03ce298cb45038d64fc15ca67fdc4aa6024b5e66d7237ea04cc606_prof);

        
        $__internal_a5897ee865c88d2e1cd1179804eefbc6c09cf35c2c5f97d24b45f5ebfe6c8708->leave($__internal_a5897ee865c88d2e1cd1179804eefbc6c09cf35c2c5f97d24b45f5ebfe6c8708_prof);

    }

    // line 53
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7c3568464eeb5f35a417581802f2a8dc8bc4a6bf5082a92723c202e282d6ef6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3568464eeb5f35a417581802f2a8dc8bc4a6bf5082a92723c202e282d6ef6b->enter($__internal_7c3568464eeb5f35a417581802f2a8dc8bc4a6bf5082a92723c202e282d6ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_372955268444cdbb64f665d20cf4301b60530462c0a4654980a6093be4c7d875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372955268444cdbb64f665d20cf4301b60530462c0a4654980a6093be4c7d875->enter($__internal_372955268444cdbb64f665d20cf4301b60530462c0a4654980a6093be4c7d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 54
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/module.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/hotkeys.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/uploader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/simditor.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var description = new Simditor({
             textarea: \$('#description')
        });
    </script>
";
        
        $__internal_372955268444cdbb64f665d20cf4301b60530462c0a4654980a6093be4c7d875->leave($__internal_372955268444cdbb64f665d20cf4301b60530462c0a4654980a6093be4c7d875_prof);

        
        $__internal_7c3568464eeb5f35a417581802f2a8dc8bc4a6bf5082a92723c202e282d6ef6b->leave($__internal_7c3568464eeb5f35a417581802f2a8dc8bc4a6bf5082a92723c202e282d6ef6b_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminTeamEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  178 => 57,  174 => 56,  170 => 55,  165 => 54,  156 => 53,  139 => 46,  129 => 39,  120 => 33,  111 => 27,  102 => 21,  93 => 15,  80 => 9,  77 => 8,  68 => 7,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
        <h1>{% if teamMember.idteam_member%}Edit{% else %}Create{% endif %} membre de l'équipe</h1>
        <form class=\"form-horizontal\" method=\"POST\">
            <fieldset>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"firstname\">Prénom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"\" value=\"{{ teamMember.firstname }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"lastname\">Nom</label>  
                    <div class=\"col-md-8\">
                        <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"\" value=\"{{ teamMember.lastname }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"title\">Titre</label>  
                    <div class=\"col-md-8\">
                        <input id=\"title\" name=\"title\" type=\"text\" placeholder=\"\" value=\"{{ teamMember.title }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"description\">Description</label>  
                    <div class=\"col-md-8\">
                        <textarea id=\"description\" name=\"description\" placeholder=\"\" class=\"form-control input-md\" rows=\"15\">{{ teamMember.description }}</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"linkedin\">Linkedin</label>  
                    <div class=\"col-md-8\">
                        <input id=\"linkedin\" name=\"linkedin\" type=\"text\" placeholder=\"\" value=\"{{ teamMember.linkedin }}\" class=\"form-control input-md\">
                    </div>
                </div>
                <div class=\"form-group\">
                     <label class=\"col-md-2 control-label\" for=\"submit\"></label>
                     <div class=\"col-md-8\">
                          <button  name=\"submit\" type=\"submit\" class=\"btn btn-success\">Valider</button>
                         <a href=\"{{ path('admin_team') }}\" class=\"btn btn-primary\">Annuler</a>
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
{% endblock %}
", "admin/adminTeamEdit.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\adminTeamEdit.html.twig");
    }
}
