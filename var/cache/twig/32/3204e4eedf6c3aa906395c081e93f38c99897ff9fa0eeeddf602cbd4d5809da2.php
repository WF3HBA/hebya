<?php

/* about/about.html.twig */
class __TwigTemplate_ca11deed9ad9925ca78429e51149035cfd78bd08f4afe8d97bb0e29aee44302b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/about/about.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["abouts"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["teamMembers"] ?? null));
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
    }

    // line 93
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  216 => 96,  212 => 95,  207 => 94,  204 => 93,  194 => 85,  166 => 64,  162 => 63,  150 => 54,  143 => 50,  135 => 45,  131 => 44,  127 => 43,  121 => 40,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  96 => 29,  92 => 28,  88 => 26,  77 => 21,  73 => 20,  69 => 19,  65 => 17,  61 => 16,  55 => 13,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "about/about.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\about\\about.html.twig");
    }
}
