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
        $__internal_07a1311ea92e42d06ec4c3ae90884bb36702e9f4b7bcef3f33a72c1e38b6fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a1311ea92e42d06ec4c3ae90884bb36702e9f4b7bcef3f33a72c1e38b6fa9d->enter($__internal_07a1311ea92e42d06ec4c3ae90884bb36702e9f4b7bcef3f33a72c1e38b6fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_2491de4b8afed26f0ec8a84617a4a615ae3dbee7267b7637b425e749077a9349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2491de4b8afed26f0ec8a84617a4a615ae3dbee7267b7637b425e749077a9349->enter($__internal_2491de4b8afed26f0ec8a84617a4a615ae3dbee7267b7637b425e749077a9349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a1311ea92e42d06ec4c3ae90884bb36702e9f4b7bcef3f33a72c1e38b6fa9d->leave($__internal_07a1311ea92e42d06ec4c3ae90884bb36702e9f4b7bcef3f33a72c1e38b6fa9d_prof);

        
        $__internal_2491de4b8afed26f0ec8a84617a4a615ae3dbee7267b7637b425e749077a9349->leave($__internal_2491de4b8afed26f0ec8a84617a4a615ae3dbee7267b7637b425e749077a9349_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0b497147ffa371b67e00ed3adf773dc6579997e243a375da07c05627ec1bcb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b497147ffa371b67e00ed3adf773dc6579997e243a375da07c05627ec1bcb2f->enter($__internal_0b497147ffa371b67e00ed3adf773dc6579997e243a375da07c05627ec1bcb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_db5d0bbae2c8746edcfd07ceaf09ebbe155cd83bc2f63c98d301eb82c3746d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5d0bbae2c8746edcfd07ceaf09ebbe155cd83bc2f63c98d301eb82c3746d87->enter($__internal_db5d0bbae2c8746edcfd07ceaf09ebbe155cd83bc2f63c98d301eb82c3746d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about/about.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_db5d0bbae2c8746edcfd07ceaf09ebbe155cd83bc2f63c98d301eb82c3746d87->leave($__internal_db5d0bbae2c8746edcfd07ceaf09ebbe155cd83bc2f63c98d301eb82c3746d87_prof);

        
        $__internal_0b497147ffa371b67e00ed3adf773dc6579997e243a375da07c05627ec1bcb2f->leave($__internal_0b497147ffa371b67e00ed3adf773dc6579997e243a375da07c05627ec1bcb2f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_ded938c2e480909aac72739a5f95c910d5421027c932a7b6aae487b64f4fc1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded938c2e480909aac72739a5f95c910d5421027c932a7b6aae487b64f4fc1df->enter($__internal_ded938c2e480909aac72739a5f95c910d5421027c932a7b6aae487b64f4fc1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_57cd72fdbda70a1b7255e7d27d3ff91b622eb3119c5b9aeb4e3cc3ec1fcf7867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cd72fdbda70a1b7255e7d27d3ff91b622eb3119c5b9aeb4e3cc3ec1fcf7867->enter($__internal_57cd72fdbda70a1b7255e7d27d3ff91b622eb3119c5b9aeb4e3cc3ec1fcf7867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                    <div class=\"img-modal col-xs-6 col-xs-offset-4\">
                                       <img class=\"img-responsive\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-xs-12\" >
                                        <h3 class=\" text-center col-xs-12\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                                
                                        <p class=\"text-center col-xs-12\">";
            // line 67
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
        // line 92
        echo "            
        </section>
    </main>
    <div id=\"team-layer\">
        
    </div>
";
        
        $__internal_57cd72fdbda70a1b7255e7d27d3ff91b622eb3119c5b9aeb4e3cc3ec1fcf7867->leave($__internal_57cd72fdbda70a1b7255e7d27d3ff91b622eb3119c5b9aeb4e3cc3ec1fcf7867_prof);

        
        $__internal_ded938c2e480909aac72739a5f95c910d5421027c932a7b6aae487b64f4fc1df->leave($__internal_ded938c2e480909aac72739a5f95c910d5421027c932a7b6aae487b64f4fc1df_prof);

    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4f7ddca0c970f679ab4fdd76f25582fbcd576fc3e50651703f8c6bfcbcddd759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7ddca0c970f679ab4fdd76f25582fbcd576fc3e50651703f8c6bfcbcddd759->enter($__internal_4f7ddca0c970f679ab4fdd76f25582fbcd576fc3e50651703f8c6bfcbcddd759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_473b5b0ab55d1376f466632f4459883430a7a5f005ed57322ea329f2cf0abbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473b5b0ab55d1376f466632f4459883430a7a5f005ed57322ea329f2cf0abbb5->enter($__internal_473b5b0ab55d1376f466632f4459883430a7a5f005ed57322ea329f2cf0abbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/about/about.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_473b5b0ab55d1376f466632f4459883430a7a5f005ed57322ea329f2cf0abbb5->leave($__internal_473b5b0ab55d1376f466632f4459883430a7a5f005ed57322ea329f2cf0abbb5_prof);

        
        $__internal_4f7ddca0c970f679ab4fdd76f25582fbcd576fc3e50651703f8c6bfcbcddd759->leave($__internal_4f7ddca0c970f679ab4fdd76f25582fbcd576fc3e50651703f8c6bfcbcddd759_prof);

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
        return array (  268 => 103,  264 => 102,  259 => 101,  250 => 100,  234 => 92,  202 => 67,  198 => 66,  192 => 63,  180 => 54,  173 => 50,  165 => 45,  161 => 44,  157 => 43,  151 => 40,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  126 => 29,  122 => 28,  118 => 26,  107 => 21,  103 => 20,  99 => 19,  95 => 17,  91 => 16,  85 => 13,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
