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
        $__internal_ba40f3d9677bc62b1c996a3492e142335c3affee2eb1e6d541fcc437c68bbfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba40f3d9677bc62b1c996a3492e142335c3affee2eb1e6d541fcc437c68bbfca->enter($__internal_ba40f3d9677bc62b1c996a3492e142335c3affee2eb1e6d541fcc437c68bbfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $__internal_2790e09a71cef7ef623d615adb9128ca661f8d07169dbc28b334818f7d35765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2790e09a71cef7ef623d615adb9128ca661f8d07169dbc28b334818f7d35765b->enter($__internal_2790e09a71cef7ef623d615adb9128ca661f8d07169dbc28b334818f7d35765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminTeamEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba40f3d9677bc62b1c996a3492e142335c3affee2eb1e6d541fcc437c68bbfca->leave($__internal_ba40f3d9677bc62b1c996a3492e142335c3affee2eb1e6d541fcc437c68bbfca_prof);

        
        $__internal_2790e09a71cef7ef623d615adb9128ca661f8d07169dbc28b334818f7d35765b->leave($__internal_2790e09a71cef7ef623d615adb9128ca661f8d07169dbc28b334818f7d35765b_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b95263a39ad3900286333c4d5aab567b5e9bf6f68a0a2843c959e79592b7bd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95263a39ad3900286333c4d5aab567b5e9bf6f68a0a2843c959e79592b7bd8b->enter($__internal_b95263a39ad3900286333c4d5aab567b5e9bf6f68a0a2843c959e79592b7bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e9a2fbf059186aaf74562d9333a87f830e87f1dd2a688cb978709b868828d12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a2fbf059186aaf74562d9333a87f830e87f1dd2a688cb978709b868828d12e->enter($__internal_e9a2fbf059186aaf74562d9333a87f830e87f1dd2a688cb978709b868828d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/simditor.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e9a2fbf059186aaf74562d9333a87f830e87f1dd2a688cb978709b868828d12e->leave($__internal_e9a2fbf059186aaf74562d9333a87f830e87f1dd2a688cb978709b868828d12e_prof);

        
        $__internal_b95263a39ad3900286333c4d5aab567b5e9bf6f68a0a2843c959e79592b7bd8b->leave($__internal_b95263a39ad3900286333c4d5aab567b5e9bf6f68a0a2843c959e79592b7bd8b_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f226a004bad452151a053211d77dd22ade99d73817548ab8ae75adeba293e54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f226a004bad452151a053211d77dd22ade99d73817548ab8ae75adeba293e54d->enter($__internal_f226a004bad452151a053211d77dd22ade99d73817548ab8ae75adeba293e54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_437e14bf8ea3422ada1c8374e5c2d81b1819bf67cbd747a258a7c2d4dece713f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437e14bf8ea3422ada1c8374e5c2d81b1819bf67cbd747a258a7c2d4dece713f->enter($__internal_437e14bf8ea3422ada1c8374e5c2d81b1819bf67cbd747a258a7c2d4dece713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_437e14bf8ea3422ada1c8374e5c2d81b1819bf67cbd747a258a7c2d4dece713f->leave($__internal_437e14bf8ea3422ada1c8374e5c2d81b1819bf67cbd747a258a7c2d4dece713f_prof);

        
        $__internal_f226a004bad452151a053211d77dd22ade99d73817548ab8ae75adeba293e54d->leave($__internal_f226a004bad452151a053211d77dd22ade99d73817548ab8ae75adeba293e54d_prof);

    }

    // line 53
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_97ae842700c68bc49fa692022e5f3bffa58ac1391e48c52222b237fb15d2cec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ae842700c68bc49fa692022e5f3bffa58ac1391e48c52222b237fb15d2cec6->enter($__internal_97ae842700c68bc49fa692022e5f3bffa58ac1391e48c52222b237fb15d2cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2b209fa73c821ac9aa94aad0ed1b6e66f4506d43ca4c619a061c61c37702ab07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b209fa73c821ac9aa94aad0ed1b6e66f4506d43ca4c619a061c61c37702ab07->enter($__internal_2b209fa73c821ac9aa94aad0ed1b6e66f4506d43ca4c619a061c61c37702ab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_2b209fa73c821ac9aa94aad0ed1b6e66f4506d43ca4c619a061c61c37702ab07->leave($__internal_2b209fa73c821ac9aa94aad0ed1b6e66f4506d43ca4c619a061c61c37702ab07_prof);

        
        $__internal_97ae842700c68bc49fa692022e5f3bffa58ac1391e48c52222b237fb15d2cec6->leave($__internal_97ae842700c68bc49fa692022e5f3bffa58ac1391e48c52222b237fb15d2cec6_prof);

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
