<?php

/* about/about.html.twig */
class __TwigTemplate_79eff013454774c724869ebcfca7cdea3694b22e4fcf7896a425389b897cc893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "about/about.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dacd9bf08912dc604c13d9a575c248854f4a852280366541043b014d19bb079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dacd9bf08912dc604c13d9a575c248854f4a852280366541043b014d19bb079->enter($__internal_0dacd9bf08912dc604c13d9a575c248854f4a852280366541043b014d19bb079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_e00c8f8c04919c33cabe1dfb797200fb26cf16963be0dd3c20bcd36c8ec3d1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00c8f8c04919c33cabe1dfb797200fb26cf16963be0dd3c20bcd36c8ec3d1b8->enter($__internal_e00c8f8c04919c33cabe1dfb797200fb26cf16963be0dd3c20bcd36c8ec3d1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dacd9bf08912dc604c13d9a575c248854f4a852280366541043b014d19bb079->leave($__internal_0dacd9bf08912dc604c13d9a575c248854f4a852280366541043b014d19bb079_prof);

        
        $__internal_e00c8f8c04919c33cabe1dfb797200fb26cf16963be0dd3c20bcd36c8ec3d1b8->leave($__internal_e00c8f8c04919c33cabe1dfb797200fb26cf16963be0dd3c20bcd36c8ec3d1b8_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_10b9d76384c7b4563e3b2b2837cf825f2b62d9ce24409ea0021de0879580209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b9d76384c7b4563e3b2b2837cf825f2b62d9ce24409ea0021de0879580209e->enter($__internal_10b9d76384c7b4563e3b2b2837cf825f2b62d9ce24409ea0021de0879580209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5c804164825a3a808634aaa4c0e02d84e12a059ac56383d25c93825ea2963881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c804164825a3a808634aaa4c0e02d84e12a059ac56383d25c93825ea2963881->enter($__internal_5c804164825a3a808634aaa4c0e02d84e12a059ac56383d25c93825ea2963881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about/about.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_5c804164825a3a808634aaa4c0e02d84e12a059ac56383d25c93825ea2963881->leave($__internal_5c804164825a3a808634aaa4c0e02d84e12a059ac56383d25c93825ea2963881_prof);

        
        $__internal_10b9d76384c7b4563e3b2b2837cf825f2b62d9ce24409ea0021de0879580209e->leave($__internal_10b9d76384c7b4563e3b2b2837cf825f2b62d9ce24409ea0021de0879580209e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_503482d21f10e1bbeda7ad5a5e7525d833371364fc54eb65cd50d3a047fc833e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503482d21f10e1bbeda7ad5a5e7525d833371364fc54eb65cd50d3a047fc833e->enter($__internal_503482d21f10e1bbeda7ad5a5e7525d833371364fc54eb65cd50d3a047fc833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7b98fd031726583cebb13ad53419b9c26642de1511da467a1747b75fd57ccc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b98fd031726583cebb13ad53419b9c26642de1511da467a1747b75fd57ccc00->enter($__internal_7b98fd031726583cebb13ad53419b9c26642de1511da467a1747b75fd57ccc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-about/hosted_by_africa_about.jpg"), "html", null, true);
        echo "\"></div>
    <main id=\"about-content\" class=\"container\">
        <section class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "À propos"), "html", null, true);
        echo "</h1>
            </div>
        </section>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new Twig_Error_Runtime('Variable "abouts" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 17
            echo "        <section class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "section", array()), "html", null, true);
            echo "\" class=\"about-content\">
                    <h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "title", array()), "html", null, true);
            echo "</h2>
                    ";
            // line 21
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "content", array());
            echo "
                </div>
            </div>
        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <section id=\"team-members\" class=\"container\">
            <div class=\"row\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new Twig_Error_Runtime('Variable "teamMembers" does not exist.', 28, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 29
            echo "
                <div class=\"teem col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"box col-xs-10 col-xs-offset-2 col-md-12\">
                        <img class=\"img-responsive\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">
                        <div class=\"box-content\" data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\">
                            <h3 class=\"title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                             
                            <span class=\"post\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</span>
                        </div>
                    </div>                    
                </div>
<!--
                <div id=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "firstName", array()), "html", null, true);
            echo "\" class=\"team-member col-sm-6 col-md-3\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <div class=\"text-center\">
                        <img src=\"http://placehold.it/200x200\" />
                        <h3 class=\"text-center team-member-name\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>
                        <h4  class=\"text-center team-member-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</h4>
                        <div class=\"team-member-description hidden\">";
            // line 45
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "description", array());
            echo "</div>
                    </div>
                </div>
-->
                
                <div class=\"modal fade\" id=\"exampleModalLong-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                          <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo " </h2>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                      </div>

                      <div class=\"modal-footer text-center\">

                        <div class=\"col-xs-12\">
                            <h3 class=\"col-xs-12 text-center\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                                
                            <h3 class=\"col-xs-12 text-center\">";
            // line 64
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "description", array());
            echo "</h3>                                

                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div> 













            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            
        </section>
    </main>
    <div id=\"team-layer\">
        
    </div>
";
        
        $__internal_7b98fd031726583cebb13ad53419b9c26642de1511da467a1747b75fd57ccc00->leave($__internal_7b98fd031726583cebb13ad53419b9c26642de1511da467a1747b75fd57ccc00_prof);

        
        $__internal_503482d21f10e1bbeda7ad5a5e7525d833371364fc54eb65cd50d3a047fc833e->leave($__internal_503482d21f10e1bbeda7ad5a5e7525d833371364fc54eb65cd50d3a047fc833e_prof);

    }

    // line 93
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c639fc377807d5ed5d7843bccfea221c63b813b426d4118a746c53592faf1cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c639fc377807d5ed5d7843bccfea221c63b813b426d4118a746c53592faf1cad->enter($__internal_c639fc377807d5ed5d7843bccfea221c63b813b426d4118a746c53592faf1cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ee715ff683c67c5e371430e19d75d563435115ba0eecbadc4f1e386515ac687f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee715ff683c67c5e371430e19d75d563435115ba0eecbadc4f1e386515ac687f->enter($__internal_ee715ff683c67c5e371430e19d75d563435115ba0eecbadc4f1e386515ac687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/about/about.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ee715ff683c67c5e371430e19d75d563435115ba0eecbadc4f1e386515ac687f->leave($__internal_ee715ff683c67c5e371430e19d75d563435115ba0eecbadc4f1e386515ac687f_prof);

        
        $__internal_c639fc377807d5ed5d7843bccfea221c63b813b426d4118a746c53592faf1cad->leave($__internal_c639fc377807d5ed5d7843bccfea221c63b813b426d4118a746c53592faf1cad_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 96,  254 => 95,  249 => 94,  240 => 93,  224 => 85,  196 => 64,  192 => 63,  180 => 54,  173 => 50,  165 => 45,  161 => 44,  157 => 43,  151 => 40,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  126 => 29,  122 => 28,  118 => 26,  107 => 21,  103 => 20,  99 => 19,  95 => 17,  91 => 16,  85 => 13,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/about/about.css\") }}\"/>
{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/img-about/hosted_by_africa_about.jpg') }}\"></div>
    <main id=\"about-content\" class=\"container\">
        <section class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <h1>{{ \"À propos\"|upper }}</h1>
            </div>
        </section>
        {% for about in abouts%}
        <section class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"{{ about.section }}\" class=\"about-content\">
                    <h2>{{ about.title }}</h2>
                    {{ about.content|raw }}
                </div>
            </div>
        </section>
        {% endfor %}
        <section id=\"team-members\" class=\"container\">
            <div class=\"row\">
            {% for teamMember in teamMembers  %}

                <div class=\"teem col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"box col-xs-10 col-xs-offset-2 col-md-12\">
                        <img class=\"img-responsive\" src=\"{{ asset(teamMember.picture) }}\">
                        <div class=\"box-content\" data-toggle=\"modal\" data-target=\"#exampleModalLong-{{ teamMember.idteam_member }}\">
                            <h3 class=\"title\">{{ teamMember.fullName }}</h3>                             
                            <span class=\"post\">{{ teamMember.title }}</span>
                        </div>
                    </div>                    
                </div>
<!--
                <div id=\"{{ teamMember.firstName }}\" class=\"team-member col-sm-6 col-md-3\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <div class=\"text-center\">
                        <img src=\"http://placehold.it/200x200\" />
                        <h3 class=\"text-center team-member-name\">{{ teamMember.fullName }}</h3>
                        <h4  class=\"text-center team-member-title\">{{ teamMember.title }}</h4>
                        <div class=\"team-member-description hidden\">{{ teamMember.description|raw }}</div>
                    </div>
                </div>
-->
                
                <div class=\"modal fade\" id=\"exampleModalLong-{{ teamMember.idteam_member }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                          <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">{{ teamMember.fullName }} </h2>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                      </div>

                      <div class=\"modal-footer text-center\">

                        <div class=\"col-xs-12\">
                            <h3 class=\"col-xs-12 text-center\">{{ teamMember.fullName }}</h3>                                
                            <h3 class=\"col-xs-12 text-center\">{{ teamMember.description|raw }}</h3>                                

                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div> 













            {% endfor %}            
        </section>
    </main>
    <div id=\"team-layer\">
        
    </div>
{% endblock %}

{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
    <script src=\"{{ asset('js/about/about.js') }}\"></script>
{% endblock %}", "about/about.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\about\\about.html.twig");
    }
}
