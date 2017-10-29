<?php

/* public/about.html.twig */
class __TwigTemplate_950ddb0a1c0e83b41fd8bd0aa4d77ba4c2ba74538338fc95f80379b323dcfa75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/about.html.twig", 1);
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
        $__internal_44dab107e4bc7534911b109bf2f52877b3cb03e8ae280f10151e8d8e9a66c241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dab107e4bc7534911b109bf2f52877b3cb03e8ae280f10151e8d8e9a66c241->enter($__internal_44dab107e4bc7534911b109bf2f52877b3cb03e8ae280f10151e8d8e9a66c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/about.html.twig"));

        $__internal_5518e2d119ce95ccf800bd091e7c98dd938490e256a4e982b7c9056f9dd940f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5518e2d119ce95ccf800bd091e7c98dd938490e256a4e982b7c9056f9dd940f1->enter($__internal_5518e2d119ce95ccf800bd091e7c98dd938490e256a4e982b7c9056f9dd940f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44dab107e4bc7534911b109bf2f52877b3cb03e8ae280f10151e8d8e9a66c241->leave($__internal_44dab107e4bc7534911b109bf2f52877b3cb03e8ae280f10151e8d8e9a66c241_prof);

        
        $__internal_5518e2d119ce95ccf800bd091e7c98dd938490e256a4e982b7c9056f9dd940f1->leave($__internal_5518e2d119ce95ccf800bd091e7c98dd938490e256a4e982b7c9056f9dd940f1_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d775ec85c3d9e41f23103eec957edb453ea5be4ba0a1a3fc527594cec6f8faaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d775ec85c3d9e41f23103eec957edb453ea5be4ba0a1a3fc527594cec6f8faaf->enter($__internal_d775ec85c3d9e41f23103eec957edb453ea5be4ba0a1a3fc527594cec6f8faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ec0379269a36335c1364dbf3a401e51c57bca3134aebdd2e7863d7678276e038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0379269a36335c1364dbf3a401e51c57bca3134aebdd2e7863d7678276e038->enter($__internal_ec0379269a36335c1364dbf3a401e51c57bca3134aebdd2e7863d7678276e038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/public/about.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_ec0379269a36335c1364dbf3a401e51c57bca3134aebdd2e7863d7678276e038->leave($__internal_ec0379269a36335c1364dbf3a401e51c57bca3134aebdd2e7863d7678276e038_prof);

        
        $__internal_d775ec85c3d9e41f23103eec957edb453ea5be4ba0a1a3fc527594cec6f8faaf->leave($__internal_d775ec85c3d9e41f23103eec957edb453ea5be4ba0a1a3fc527594cec6f8faaf_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d8b89a4775a165e79bb035551f06ae448877c629517b1bfb092b00736a5a827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8b89a4775a165e79bb035551f06ae448877c629517b1bfb092b00736a5a827->enter($__internal_1d8b89a4775a165e79bb035551f06ae448877c629517b1bfb092b00736a5a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_12ecfbd3f9d627cc3b10148354a3661d389ee682aa81733dae242c8b84e7afce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ecfbd3f9d627cc3b10148354a3661d389ee682aa81733dae242c8b84e7afce->enter($__internal_12ecfbd3f9d627cc3b10148354a3661d389ee682aa81733dae242c8b84e7afce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/public/hosted_by_africa_about.jpg"), "html", null, true);
        echo "\"></div>
  <main id=\"about-content\" class=\"container\">
    <section class=\"row\">
      <div class=\"col-xs-12 text-center\">
        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "A propos"), "html", null, true);
        echo "</h1>
      </div>
    </section>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abouts"]) || array_key_exists("abouts", $context) ? $context["abouts"] : (function () { throw new Twig_Error_Runtime('Variable "abouts" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 17
            echo "      <section class=\"row\">
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
        echo "    <section id=\"team-members\" class=\"container\">
      <div class=\"row\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new Twig_Error_Runtime('Variable "teamMembers" does not exist.', 28, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 29
            echo "          <div class=\"teem col-xs-12 col-sm-6 col-md-3\">
            <div class=\"box col-xs-10 col-xs-offset-2 col-md-12\">
              <img class=\"img-responsive\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">
              <div class=\"box-content\" data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\">
                <h3 class=\"title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                             
                <span class=\"post\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</span>
              </div>
            </div>                    
          </div>
          <!--
          <div id=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "firstName", array()), "html", null, true);
            echo "\" class=\"team-member col-sm-6 col-md-3\" data-toggle=\"modal\" data-target=\"#myModal\">
              <div class=\"text-center\">
                  <img src=\"http://placehold.it/200x200\" />
                  <h3 class=\"text-center team-member-name\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>
                  <h4  class=\"text-center team-member-title\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "title", array()), "html", null, true);
            echo "</h4>
                  <div class=\"team-member-description hidden\">";
            // line 44
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "description", array());
            echo "</div>
              </div>
          </div>
          -->
          <div class=\"modal fade\" id=\"exampleModalLong-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "idteam_member", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 52
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
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "picture", array())), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-xs-12\" >
                      <h3 class=\" text-center col-xs-12\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["teamMember"], "fullName", array()), "html", null, true);
            echo "</h3>                    
                      <p class=\"text-center col-xs-12\">";
            // line 64
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
        // line 72
        echo "            
    </section>
  </main>
  <div id=\"team-layer\">

  </div>
";
        
        $__internal_12ecfbd3f9d627cc3b10148354a3661d389ee682aa81733dae242c8b84e7afce->leave($__internal_12ecfbd3f9d627cc3b10148354a3661d389ee682aa81733dae242c8b84e7afce_prof);

        
        $__internal_1d8b89a4775a165e79bb035551f06ae448877c629517b1bfb092b00736a5a827->leave($__internal_1d8b89a4775a165e79bb035551f06ae448877c629517b1bfb092b00736a5a827_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f6d8a9b24b8a24306696d1bf6ff9cd743e5c105484d01f584f34c8caf8e4603e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d8a9b24b8a24306696d1bf6ff9cd743e5c105484d01f584f34c8caf8e4603e->enter($__internal_f6d8a9b24b8a24306696d1bf6ff9cd743e5c105484d01f584f34c8caf8e4603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_62538089f3d7cd1c3aedf82115cfb2cc937e797341cd79a84abf94be114ec8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62538089f3d7cd1c3aedf82115cfb2cc937e797341cd79a84abf94be114ec8aa->enter($__internal_62538089f3d7cd1c3aedf82115cfb2cc937e797341cd79a84abf94be114ec8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 81
        echo "  ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/about.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_62538089f3d7cd1c3aedf82115cfb2cc937e797341cd79a84abf94be114ec8aa->leave($__internal_62538089f3d7cd1c3aedf82115cfb2cc937e797341cd79a84abf94be114ec8aa_prof);

        
        $__internal_f6d8a9b24b8a24306696d1bf6ff9cd743e5c105484d01f584f34c8caf8e4603e->leave($__internal_f6d8a9b24b8a24306696d1bf6ff9cd743e5c105484d01f584f34c8caf8e4603e_prof);

    }

    public function getTemplateName()
    {
        return "public/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 83,  244 => 82,  239 => 81,  230 => 80,  214 => 72,  199 => 64,  195 => 63,  189 => 60,  178 => 52,  171 => 48,  164 => 44,  160 => 43,  156 => 42,  150 => 39,  142 => 34,  138 => 33,  134 => 32,  130 => 31,  126 => 29,  122 => 28,  118 => 26,  107 => 21,  103 => 20,  99 => 19,  95 => 17,  91 => 16,  85 => 13,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset(\"css/public/about.css\") }}\"/>
{% endblock %}

{% block content %}
  <div class=\"parallax\" data-image=\"{{ asset('img/public/hosted_by_africa_about.jpg') }}\"></div>
  <main id=\"about-content\" class=\"container\">
    <section class=\"row\">
      <div class=\"col-xs-12 text-center\">
        <h1>{{ \"A propos\"|upper }}</h1>
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
  <script src=\"{{ asset('js/public/about.js') }}\"></script>
{% endblock %}", "public/about.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\about.html.twig");
    }
}
