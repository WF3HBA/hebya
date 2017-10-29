<?php

/* public/candidacy.html.twig */
class __TwigTemplate_7a27736d800968b68f1a80d991d50919f9ee1428a4f0e49e3d55dce45d4e66ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "public/candidacy.html.twig", 1);
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
        $__internal_ddecedeec3d0a2b2aa48fedaca16163397d801d6ab5ee553a923ee9f50e970bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddecedeec3d0a2b2aa48fedaca16163397d801d6ab5ee553a923ee9f50e970bb->enter($__internal_ddecedeec3d0a2b2aa48fedaca16163397d801d6ab5ee553a923ee9f50e970bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/candidacy.html.twig"));

        $__internal_864dc463391410b40b81eeb5596b21e159502f75695d9cb88d8d8e8673108d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864dc463391410b40b81eeb5596b21e159502f75695d9cb88d8d8e8673108d69->enter($__internal_864dc463391410b40b81eeb5596b21e159502f75695d9cb88d8d8e8673108d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/candidacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddecedeec3d0a2b2aa48fedaca16163397d801d6ab5ee553a923ee9f50e970bb->leave($__internal_ddecedeec3d0a2b2aa48fedaca16163397d801d6ab5ee553a923ee9f50e970bb_prof);

        
        $__internal_864dc463391410b40b81eeb5596b21e159502f75695d9cb88d8d8e8673108d69->leave($__internal_864dc463391410b40b81eeb5596b21e159502f75695d9cb88d8d8e8673108d69_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3e2da76020455aa225e24801e95e5b5b1c41e97fa044ee0509d1a519c42107df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2da76020455aa225e24801e95e5b5b1c41e97fa044ee0509d1a519c42107df->enter($__internal_3e2da76020455aa225e24801e95e5b5b1c41e97fa044ee0509d1a519c42107df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_31f761e58aac86e353bc55d594512fd7925f8fe4a56dd8b86a2c443285060a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f761e58aac86e353bc55d594512fd7925f8fe4a56dd8b86a2c443285060a55->enter($__internal_31f761e58aac86e353bc55d594512fd7925f8fe4a56dd8b86a2c443285060a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/candidacy/candidacy.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_31f761e58aac86e353bc55d594512fd7925f8fe4a56dd8b86a2c443285060a55->leave($__internal_31f761e58aac86e353bc55d594512fd7925f8fe4a56dd8b86a2c443285060a55_prof);

        
        $__internal_3e2da76020455aa225e24801e95e5b5b1c41e97fa044ee0509d1a519c42107df->leave($__internal_3e2da76020455aa225e24801e95e5b5b1c41e97fa044ee0509d1a519c42107df_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_e347a667b1ceb703ce094a6649728d7a372965808b82844e373578627e0265d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e347a667b1ceb703ce094a6649728d7a372965808b82844e373578627e0265d9->enter($__internal_e347a667b1ceb703ce094a6649728d7a372965808b82844e373578627e0265d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_10151fd015112d25347ab45df6be87ecf65c5ebfdd62fcbf06fd802d6f277359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10151fd015112d25347ab45df6be87ecf65c5ebfdd62fcbf06fd802d6f277359->enter($__internal_10151fd015112d25347ab45df6be87ecf65c5ebfdd62fcbf06fd802d6f277359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  <main>
    <section class=\"container candidacy\">
      <div class=\"row\">
        <div class=\"col-xs-12 text-center\">
          <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "candidatures"), "html", null, true);
        echo "</h1>
        </div>              
      </div>
      <div class=\"row\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1\">
            ";
        // line 19
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 19, $this->getSourceContext()); })())) {
            // line 20
            echo "              <div class=\"row\">
                <div class=\"col-sm-4\">Poste : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 21, $this->getSourceContext()); })()), "position", array()), "html", null, true);
            echo " </div>
                <div class=\"col-sm-4\">Réference : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 22, $this->getSourceContext()); })()), "reference", array()), "html", null, true);
            echo "</div>
              </div>
            ";
        }
        // line 25
        echo "            <div class=\"col-10\">
              ";
        // line 26
        if ( !(isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 26, $this->getSourceContext()); })())) {
            // line 27
            echo "                <label for=\"position\" class=\"col-2 col-form-label\">Poste recherché</label>   
              ";
        }
        // line 28
        echo "   
              <input name=\"position\" class=\"form-control input-md ";
        // line 29
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 29, $this->getSourceContext()); })())) {
            echo "hidden";
        }
        echo "\" ";
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 29, $this->getSourceContext()); })())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 29, $this->getSourceContext()); })()), "position", array()), "html", null, true);
            echo " ";
        }
        echo "\">
            </div>
            <div class=\"col-10\">
              <input name=\"idopportunity\" class=\"form-control input-md hidden\" value=\"";
        // line 32
        if ((isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 32, $this->getSourceContext()); })())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["opportunity"]) || array_key_exists("opportunity", $context) ? $context["opportunity"] : (function () { throw new Twig_Error_Runtime('Variable "opportunity" does not exist.', 32, $this->getSourceContext()); })()), "idopportunity", array()), "html", null, true);
        } else {
            echo "1";
        }
        echo "\">
            </div>
            <label for=\"firstname\" class=\"col-2 col-form-label\"> Nom </label>
            <div class=\"col-10\">
              <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
            </div>
            <label for=\"lastname\" class=\"col-2 col-form-label\">Prenom</label>
            <div class=\"col-10\">
              <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"Prenom\" class=\"form-control input-md\">
            </div>
            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
            <div class=\"col-10\">
              <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
            </div>
            <label for=\"phone\" class=\"col-2 col-form-label\">Téléphone</label>
            <div class=\"col-10\">
              <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Téléphone\" class=\"form-control input-md\">
            </div>
            <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
            <div class=\"col-10\">
              <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\">
            </div>
            <label for=\"country\" class=\"col-2 col-form-label\">Pays</label>
            <div class=\"col-10\">
              <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
            </div>
            <div class=\"form-group\">
              <label for=\"cv\"> CV </label>
              <input type=\"file\" name=\"cv\" id=\"cv\" >
              <small id=\"cv\" class=\"form-text text-muted\">Veuillez joindre un cv.</small>
            </div>
            <div class=\"form-group\">
              <label for=\"coverletter\"> Lettre de motivation </label>
              <input type=\"file\" name=\"coverletter\" id=\"coverletter\">
              <small id=\"coverletter\" class=\"form-text text-muted\">Veuillez joindre une lettre de motivation.</small>
            </div>
            <div class=\"col-10\">
              <input class=\"btn btn-primary boutton-form-candidacy\" type=\"submit\" value=\"Postuler\">
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
";
        
        $__internal_10151fd015112d25347ab45df6be87ecf65c5ebfdd62fcbf06fd802d6f277359->leave($__internal_10151fd015112d25347ab45df6be87ecf65c5ebfdd62fcbf06fd802d6f277359_prof);

        
        $__internal_e347a667b1ceb703ce094a6649728d7a372965808b82844e373578627e0265d9->leave($__internal_e347a667b1ceb703ce094a6649728d7a372965808b82844e373578627e0265d9_prof);

    }

    // line 78
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cf5f27d337f7bcabf815d465f9543f94a27771e51021b8b0d497fb1d30611755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5f27d337f7bcabf815d465f9543f94a27771e51021b8b0d497fb1d30611755->enter($__internal_cf5f27d337f7bcabf815d465f9543f94a27771e51021b8b0d497fb1d30611755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_cbd0efb33fa51a9d73b19b53ad16c8364e77a3cf5c00d53befc0e160b0153f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd0efb33fa51a9d73b19b53ad16c8364e77a3cf5c00d53befc0e160b0153f87->enter($__internal_cbd0efb33fa51a9d73b19b53ad16c8364e77a3cf5c00d53befc0e160b0153f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 79
        echo "  ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/public/candidacy.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cbd0efb33fa51a9d73b19b53ad16c8364e77a3cf5c00d53befc0e160b0153f87->leave($__internal_cbd0efb33fa51a9d73b19b53ad16c8364e77a3cf5c00d53befc0e160b0153f87_prof);

        
        $__internal_cf5f27d337f7bcabf815d465f9543f94a27771e51021b8b0d497fb1d30611755->leave($__internal_cf5f27d337f7bcabf815d465f9543f94a27771e51021b8b0d497fb1d30611755_prof);

    }

    public function getTemplateName()
    {
        return "public/candidacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 80,  201 => 79,  192 => 78,  133 => 32,  119 => 29,  116 => 28,  112 => 27,  110 => 26,  107 => 25,  101 => 22,  97 => 21,  94 => 20,  92 => 19,  83 => 13,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset(\"css/candidacy/candidacy.css\") }}\"/>
{% endblock %}

{% block content %}
  <main>
    <section class=\"container candidacy\">
      <div class=\"row\">
        <div class=\"col-xs-12 text-center\">
          <h1>{{ \"candidatures\"|upper }}</h1>
        </div>              
      </div>
      <div class=\"row\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1\">
            {% if opportunity %}
              <div class=\"row\">
                <div class=\"col-sm-4\">Poste : {{ opportunity.position }} </div>
                <div class=\"col-sm-4\">Réference : {{ opportunity.reference }}</div>
              </div>
            {% endif %}
            <div class=\"col-10\">
              {% if not opportunity %}
                <label for=\"position\" class=\"col-2 col-form-label\">Poste recherché</label>   
              {% endif %}   
              <input name=\"position\" class=\"form-control input-md {% if opportunity %}hidden{% endif %}\" {% if opportunity %}value=\"{{ opportunity.position }} {% endif %}\">
            </div>
            <div class=\"col-10\">
              <input name=\"idopportunity\" class=\"form-control input-md hidden\" value=\"{% if opportunity %}{{ opportunity.idopportunity }}{% else %}1{% endif %}\">
            </div>
            <label for=\"firstname\" class=\"col-2 col-form-label\"> Nom </label>
            <div class=\"col-10\">
              <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
            </div>
            <label for=\"lastname\" class=\"col-2 col-form-label\">Prenom</label>
            <div class=\"col-10\">
              <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"Prenom\" class=\"form-control input-md\">
            </div>
            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
            <div class=\"col-10\">
              <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
            </div>
            <label for=\"phone\" class=\"col-2 col-form-label\">Téléphone</label>
            <div class=\"col-10\">
              <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Téléphone\" class=\"form-control input-md\">
            </div>
            <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
            <div class=\"col-10\">
              <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\">
            </div>
            <label for=\"country\" class=\"col-2 col-form-label\">Pays</label>
            <div class=\"col-10\">
              <input id=\"country\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
            </div>
            <div class=\"form-group\">
              <label for=\"cv\"> CV </label>
              <input type=\"file\" name=\"cv\" id=\"cv\" >
              <small id=\"cv\" class=\"form-text text-muted\">Veuillez joindre un cv.</small>
            </div>
            <div class=\"form-group\">
              <label for=\"coverletter\"> Lettre de motivation </label>
              <input type=\"file\" name=\"coverletter\" id=\"coverletter\">
              <small id=\"coverletter\" class=\"form-text text-muted\">Veuillez joindre une lettre de motivation.</small>
            </div>
            <div class=\"col-10\">
              <input class=\"btn btn-primary boutton-form-candidacy\" type=\"submit\" value=\"Postuler\">
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
{% endblock %}

{% block javascript %}
  {{ parent() }}
  <script src=\"{{ asset('js/public/candidacy.js') }}\"></script>
{% endblock %}
", "public/candidacy.html.twig", "C:\\wamp64\\www\\hebya\\templates\\public\\candidacy.html.twig");
    }
}
