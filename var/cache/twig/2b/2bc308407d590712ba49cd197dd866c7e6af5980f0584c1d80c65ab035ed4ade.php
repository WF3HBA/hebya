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
        $__internal_8d6c6792205d0c44d4892d6aeb68a6a20d30b313de956abe2f681fe845c0fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6c6792205d0c44d4892d6aeb68a6a20d30b313de956abe2f681fe845c0fed7->enter($__internal_8d6c6792205d0c44d4892d6aeb68a6a20d30b313de956abe2f681fe845c0fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $__internal_ea7a9d72d478c9060bcb92ae8bd12e7fce89667c44dbd31fefcc0522a0dab5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7a9d72d478c9060bcb92ae8bd12e7fce89667c44dbd31fefcc0522a0dab5ff->enter($__internal_ea7a9d72d478c9060bcb92ae8bd12e7fce89667c44dbd31fefcc0522a0dab5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6c6792205d0c44d4892d6aeb68a6a20d30b313de956abe2f681fe845c0fed7->leave($__internal_8d6c6792205d0c44d4892d6aeb68a6a20d30b313de956abe2f681fe845c0fed7_prof);

        
        $__internal_ea7a9d72d478c9060bcb92ae8bd12e7fce89667c44dbd31fefcc0522a0dab5ff->leave($__internal_ea7a9d72d478c9060bcb92ae8bd12e7fce89667c44dbd31fefcc0522a0dab5ff_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6635a7433504b8ea00046743262291864ca0a9a0155cef17f8801aae210d55fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6635a7433504b8ea00046743262291864ca0a9a0155cef17f8801aae210d55fd->enter($__internal_6635a7433504b8ea00046743262291864ca0a9a0155cef17f8801aae210d55fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cb954e4952c2754698858982421f9adf90d1a9306ef853859bbb507180304546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb954e4952c2754698858982421f9adf90d1a9306ef853859bbb507180304546->enter($__internal_cb954e4952c2754698858982421f9adf90d1a9306ef853859bbb507180304546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cb954e4952c2754698858982421f9adf90d1a9306ef853859bbb507180304546->leave($__internal_cb954e4952c2754698858982421f9adf90d1a9306ef853859bbb507180304546_prof);

        
        $__internal_6635a7433504b8ea00046743262291864ca0a9a0155cef17f8801aae210d55fd->leave($__internal_6635a7433504b8ea00046743262291864ca0a9a0155cef17f8801aae210d55fd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_24fd6dfcd4e46d6828390bb2e169ac552a0a280bfdda1324e18537d0c376ffec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fd6dfcd4e46d6828390bb2e169ac552a0a280bfdda1324e18537d0c376ffec->enter($__internal_24fd6dfcd4e46d6828390bb2e169ac552a0a280bfdda1324e18537d0c376ffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_24d9e05e1824b7ea07f4c58d2c43f7e1621946732a0d38ed390e9208d7bcf4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d9e05e1824b7ea07f4c58d2c43f7e1621946732a0d38ed390e9208d7bcf4a7->enter($__internal_24d9e05e1824b7ea07f4c58d2c43f7e1621946732a0d38ed390e9208d7bcf4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_24d9e05e1824b7ea07f4c58d2c43f7e1621946732a0d38ed390e9208d7bcf4a7->leave($__internal_24d9e05e1824b7ea07f4c58d2c43f7e1621946732a0d38ed390e9208d7bcf4a7_prof);

        
        $__internal_24fd6dfcd4e46d6828390bb2e169ac552a0a280bfdda1324e18537d0c376ffec->leave($__internal_24fd6dfcd4e46d6828390bb2e169ac552a0a280bfdda1324e18537d0c376ffec_prof);

    }

    // line 53
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b5f700587f576b582c4403d67d69066299fd4dd62ff39a83eedd90b59cb5895a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f700587f576b582c4403d67d69066299fd4dd62ff39a83eedd90b59cb5895a->enter($__internal_b5f700587f576b582c4403d67d69066299fd4dd62ff39a83eedd90b59cb5895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_38c49a9e6f14a89aa48f9213d9da1987ba281eb46c0ba210909bb29693e64670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c49a9e6f14a89aa48f9213d9da1987ba281eb46c0ba210909bb29693e64670->enter($__internal_38c49a9e6f14a89aa48f9213d9da1987ba281eb46c0ba210909bb29693e64670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_38c49a9e6f14a89aa48f9213d9da1987ba281eb46c0ba210909bb29693e64670->leave($__internal_38c49a9e6f14a89aa48f9213d9da1987ba281eb46c0ba210909bb29693e64670_prof);

        
        $__internal_b5f700587f576b582c4403d67d69066299fd4dd62ff39a83eedd90b59cb5895a->leave($__internal_b5f700587f576b582c4403d67d69066299fd4dd62ff39a83eedd90b59cb5895a_prof);

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
