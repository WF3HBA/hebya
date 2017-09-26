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
        $__internal_60dca74940934da5cea8cd70fb50c2d729cf405c771e9d8b29c05bfe3d747de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dca74940934da5cea8cd70fb50c2d729cf405c771e9d8b29c05bfe3d747de7->enter($__internal_60dca74940934da5cea8cd70fb50c2d729cf405c771e9d8b29c05bfe3d747de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_cc800e9e2756f3d4033477b562f2054025ce9ca760ebc9642a16623d8199f746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc800e9e2756f3d4033477b562f2054025ce9ca760ebc9642a16623d8199f746->enter($__internal_cc800e9e2756f3d4033477b562f2054025ce9ca760ebc9642a16623d8199f746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60dca74940934da5cea8cd70fb50c2d729cf405c771e9d8b29c05bfe3d747de7->leave($__internal_60dca74940934da5cea8cd70fb50c2d729cf405c771e9d8b29c05bfe3d747de7_prof);

        
        $__internal_cc800e9e2756f3d4033477b562f2054025ce9ca760ebc9642a16623d8199f746->leave($__internal_cc800e9e2756f3d4033477b562f2054025ce9ca760ebc9642a16623d8199f746_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_24060abe29e3e24f8e5e0e0cb767258013064dee0d23aae3e13c220cf0b97c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24060abe29e3e24f8e5e0e0cb767258013064dee0d23aae3e13c220cf0b97c2b->enter($__internal_24060abe29e3e24f8e5e0e0cb767258013064dee0d23aae3e13c220cf0b97c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_61e9b968a2d863ef4b6350644de5230b9bdd9f75a6ae38e41a36c89ec734a1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e9b968a2d863ef4b6350644de5230b9bdd9f75a6ae38e41a36c89ec734a1f1->enter($__internal_61e9b968a2d863ef4b6350644de5230b9bdd9f75a6ae38e41a36c89ec734a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about/about.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_61e9b968a2d863ef4b6350644de5230b9bdd9f75a6ae38e41a36c89ec734a1f1->leave($__internal_61e9b968a2d863ef4b6350644de5230b9bdd9f75a6ae38e41a36c89ec734a1f1_prof);

        
        $__internal_24060abe29e3e24f8e5e0e0cb767258013064dee0d23aae3e13c220cf0b97c2b->leave($__internal_24060abe29e3e24f8e5e0e0cb767258013064dee0d23aae3e13c220cf0b97c2b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c43c3c295737a1b30abb7e44a0d81fd3aebede57ba407abea479a9c4d067c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c43c3c295737a1b30abb7e44a0d81fd3aebede57ba407abea479a9c4d067c2e->enter($__internal_5c43c3c295737a1b30abb7e44a0d81fd3aebede57ba407abea479a9c4d067c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dc1d1379b8d2e4e47e2aefd3a26bdf19cc2d7bce34bd64104e8461ff17e6b27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1d1379b8d2e4e47e2aefd3a26bdf19cc2d7bce34bd64104e8461ff17e6b27e->enter($__internal_dc1d1379b8d2e4e47e2aefd3a26bdf19cc2d7bce34bd64104e8461ff17e6b27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <div class=\"parallax\" data-image=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-about/hosted_by_africa_about.jpg"), "html", null, true);
        echo "\"></div>

    <main id=\"about-content\" class=\"container\">

        <section class=\"row\">

            <div class=\"col-xs-12 text-center\">

                <h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "À propos"), "html", null, true);
        echo "</h1>

            </div>

        </section>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new Twig_Error_Runtime('Variable "abouts" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 28
            echo "
        <section class=\"row\">

            <div class=\"col-xs-12\">

                <div id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "section", array()), "html", null, true);
            echo "\" class=\"about-content\">

                    <h2>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["about"], "title", array()), "html", null, true);
            echo "</h2>

                    ";
            // line 37
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
        // line 46
        echo "
        <section id=\"team-members\" class=\"container\">

            <div class=\"row\">

            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new Twig_Error_Runtime('Variable "teamMembers" does not exist.', 51, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 52
            echo "
                <div class=\"teem col-xs-12 col-sm-6 col-md-3\">

                    <div class=\"box col-xs-10 col-xs-offset-2 col-md-12\">

                        <img class=\"img-responsive\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">

                        <div class=\"box-content\" data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\">

                            <h3 class=\"title\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                             

                            <span class=\"post\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</span>

                        </div>

                    </div>                    

                </div>

<!--

                <div id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "firstName", array()), "html", null, true);
            echo "\" class=\"team-member col-sm-6 col-md-3\" data-toggle=\"modal\" data-target=\"#myModal\">

                    <div class=\"text-center\">

                        <img src=\"http://placehold.it/200x200\" />

                        <h3 class=\"text-center team-member-name\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>

                        <h4  class=\"text-center team-member-title\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</h4>

                        <div class=\"team-member-description hidden\">";
            // line 83
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "description", array());
            echo "</div>

                    </div>

                </div>

-->

                

                <div class=\"modal fade\" id=\"exampleModalLong-";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">

                    <div class=\"modal-dialog\" role=\"document\">

                        <div class=\"modal-content\">

                            <div class=\"modal-header\">

                                <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo " </h2>

                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">

                                    <span aria-hidden=\"true\">&times;</span>

                                </button>

                            </div>

                            <div class=\"modal-footer text-center\">

                                <div class=\"col-xs-12\">

                                    <div class=\"img-modal col-xs-6 col-xs-offset-4\">

                                       <img class=\"img-responsive\" src=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">

                                    </div>

                                    <div class=\"col-xs-12\" >

                                        <h3 class=\" text-center col-xs-12\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                                

                                        <p class=\"text-center col-xs-12\">";
            // line 125
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "description", array());
            echo "</p>

                                         <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>

                                    </div>

                                         

                                         

                                    

                                 

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
        // line 149
        echo "            

        </section>

    </main>

    <div id=\"team-layer\">

        

    </div>

";
        
        $__internal_dc1d1379b8d2e4e47e2aefd3a26bdf19cc2d7bce34bd64104e8461ff17e6b27e->leave($__internal_dc1d1379b8d2e4e47e2aefd3a26bdf19cc2d7bce34bd64104e8461ff17e6b27e_prof);

        
        $__internal_5c43c3c295737a1b30abb7e44a0d81fd3aebede57ba407abea479a9c4d067c2e->leave($__internal_5c43c3c295737a1b30abb7e44a0d81fd3aebede57ba407abea479a9c4d067c2e_prof);

    }

    // line 163
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6d242e14a3a9755c2dd2f15bbb96fafb01d551a81e4892b4cf9921e64e4fa76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d242e14a3a9755c2dd2f15bbb96fafb01d551a81e4892b4cf9921e64e4fa76b->enter($__internal_6d242e14a3a9755c2dd2f15bbb96fafb01d551a81e4892b4cf9921e64e4fa76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0180ef929b30ed6aba45b7d68b53890d3ad04c748eb806d7c3bdec4a01a18347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0180ef929b30ed6aba45b7d68b53890d3ad04c748eb806d7c3bdec4a01a18347->enter($__internal_0180ef929b30ed6aba45b7d68b53890d3ad04c748eb806d7c3bdec4a01a18347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 164
        echo "
    ";
        // line 165
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/about/about.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0180ef929b30ed6aba45b7d68b53890d3ad04c748eb806d7c3bdec4a01a18347->leave($__internal_0180ef929b30ed6aba45b7d68b53890d3ad04c748eb806d7c3bdec4a01a18347_prof);

        
        $__internal_6d242e14a3a9755c2dd2f15bbb96fafb01d551a81e4892b4cf9921e64e4fa76b->leave($__internal_6d242e14a3a9755c2dd2f15bbb96fafb01d551a81e4892b4cf9921e64e4fa76b_prof);

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
        return array (  337 => 169,  332 => 167,  327 => 165,  324 => 164,  315 => 163,  293 => 149,  262 => 125,  257 => 123,  248 => 117,  229 => 101,  218 => 93,  205 => 83,  200 => 81,  195 => 79,  186 => 73,  173 => 63,  168 => 61,  163 => 59,  158 => 57,  151 => 52,  147 => 51,  140 => 46,  125 => 37,  120 => 35,  115 => 33,  108 => 28,  104 => 27,  95 => 21,  84 => 13,  81 => 12,  72 => 11,  59 => 7,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

                                    <div class=\"img-modal col-xs-6 col-xs-offset-4\">

                                       <img class=\"img-responsive\" src=\"{{ asset(teamMember.picture) }}\">

                                    </div>

                                    <div class=\"col-xs-12\" >

                                        <h3 class=\" text-center col-xs-12\">{{ teamMember.fullName }}</h3>                                

                                        <p class=\"text-center col-xs-12\">{{ teamMember.description|raw }}</p>

                                         <button type=\"button\" class=\"btn btn-secondary col-xs-12\" data-dismiss=\"modal\">Fermer</button>

                                    </div>

                                         

                                         

                                    

                                 

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
