<?php

/* client/client.html.twig */
class __TwigTemplate_8b3c9b1b82cb442d4860af455f8e2031b91439ea19c923231967c6b78ce6376d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "client/client.html.twig", 1);
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
        $__internal_306ae017841db560f2bc9221782d0c707411fa640d95427c348f8010023ffc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ae017841db560f2bc9221782d0c707411fa640d95427c348f8010023ffc98->enter($__internal_306ae017841db560f2bc9221782d0c707411fa640d95427c348f8010023ffc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $__internal_a63a57ee5a7715a514dbc93fc0371ea4bae6393bacf5a69d34dfdbd846c4cae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63a57ee5a7715a514dbc93fc0371ea4bae6393bacf5a69d34dfdbd846c4cae9->enter($__internal_a63a57ee5a7715a514dbc93fc0371ea4bae6393bacf5a69d34dfdbd846c4cae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306ae017841db560f2bc9221782d0c707411fa640d95427c348f8010023ffc98->leave($__internal_306ae017841db560f2bc9221782d0c707411fa640d95427c348f8010023ffc98_prof);

        
        $__internal_a63a57ee5a7715a514dbc93fc0371ea4bae6393bacf5a69d34dfdbd846c4cae9->leave($__internal_a63a57ee5a7715a514dbc93fc0371ea4bae6393bacf5a69d34dfdbd846c4cae9_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3e16e0f42c6b1eccabf91919ca7733fc73115cba46866012a0a7e017a839ee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e16e0f42c6b1eccabf91919ca7733fc73115cba46866012a0a7e017a839ee33->enter($__internal_3e16e0f42c6b1eccabf91919ca7733fc73115cba46866012a0a7e017a839ee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a0940fca541ea782722257938cded417b66bd9b23449addb4d0bdd0459031afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0940fca541ea782722257938cded417b66bd9b23449addb4d0bdd0459031afe->enter($__internal_a0940fca541ea782722257938cded417b66bd9b23449addb4d0bdd0459031afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clients/clients.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_a0940fca541ea782722257938cded417b66bd9b23449addb4d0bdd0459031afe->leave($__internal_a0940fca541ea782722257938cded417b66bd9b23449addb4d0bdd0459031afe_prof);

        
        $__internal_3e16e0f42c6b1eccabf91919ca7733fc73115cba46866012a0a7e017a839ee33->leave($__internal_3e16e0f42c6b1eccabf91919ca7733fc73115cba46866012a0a7e017a839ee33_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0db5b1eddd665b05d3f4e77c275a29e8ded2493818cb0e66069946c0d9eb7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0db5b1eddd665b05d3f4e77c275a29e8ded2493818cb0e66069946c0d9eb7d5->enter($__internal_b0db5b1eddd665b05d3f4e77c275a29e8ded2493818cb0e66069946c0d9eb7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ffd5ca7bc72f939bed1acb989e40ad7a8c14d95c8a00d7957bf91ad27e0a91d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd5ca7bc72f939bed1acb989e40ad7a8c14d95c8a00d7957bf91ad27e0a91d6->enter($__internal_ffd5ca7bc72f939bed1acb989e40ad7a8c14d95c8a00d7957bf91ad27e0a91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"parallax\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/clients/hosted_by_africa_clients.jpg"), "html", null, true);
        echo "\"></div>
   <main>
        <section id=\"clients-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos clients"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row all-select-clients\">
                    <div class=\"col-xs-12 col-sm-6 clients-select-theme\">
                        <select class=\"col-xs-12\">
                            <option disabled></option>
                            <option selected>Tous les thèmes</option>
                            <option disabled>──────────</option>
                            <option>Education</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                            <option>Comptabilité</option>
                            <option>Numérisation GED</option>
                        </select>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 text-center\">
                        <select class=\"col-xs-12\">
                            <option disabled></option>
                            <option selected>Tous les pays</option>
                            <option disabled>──────────</option>
                         ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new Twig_Error_Runtime('Variable "countries" does not exist.', 37, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 38
            echo "                            <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </select>
                    </div>
                </div>
            </div>
        </section><br><br>
            
            
        <section id=\"clients-body\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 50, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 51
            echo "                    <div class=\"col-lg-4 col-sm-6 text-center mb-4\">
                        <a href=\"#\">
                            <div class=\"test\">
                                <img src=\"http://placehold.it/200x200\" alt=\"\">
                            </div>
                            <h3>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "company", array()), "html", null, true);
            echo "
                              <small>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "firstname", array()), "html", null, true);
            echo "</small>
                            </h3>
                            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                        </a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                   
                </div>
            </div>
        </section><br>
    </main>
    
";
        
        $__internal_ffd5ca7bc72f939bed1acb989e40ad7a8c14d95c8a00d7957bf91ad27e0a91d6->leave($__internal_ffd5ca7bc72f939bed1acb989e40ad7a8c14d95c8a00d7957bf91ad27e0a91d6_prof);

        
        $__internal_b0db5b1eddd665b05d3f4e77c275a29e8ded2493818cb0e66069946c0d9eb7d5->leave($__internal_b0db5b1eddd665b05d3f4e77c275a29e8ded2493818cb0e66069946c0d9eb7d5_prof);

    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e4bde08be25662170508919ec8af7f1d5eb5b999f3727d7b7ad61ccb433d80ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bde08be25662170508919ec8af7f1d5eb5b999f3727d7b7ad61ccb433d80ab->enter($__internal_e4bde08be25662170508919ec8af7f1d5eb5b999f3727d7b7ad61ccb433d80ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_374a3ee602ca4ed7ce8f579b2a7583b42f1fc641570d7e091703cf2021c9a784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374a3ee602ca4ed7ce8f579b2a7583b42f1fc641570d7e091703cf2021c9a784->enter($__internal_374a3ee602ca4ed7ce8f579b2a7583b42f1fc641570d7e091703cf2021c9a784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 71
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clients/clients.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_374a3ee602ca4ed7ce8f579b2a7583b42f1fc641570d7e091703cf2021c9a784->leave($__internal_374a3ee602ca4ed7ce8f579b2a7583b42f1fc641570d7e091703cf2021c9a784_prof);

        
        $__internal_e4bde08be25662170508919ec8af7f1d5eb5b999f3727d7b7ad61ccb433d80ab->leave($__internal_e4bde08be25662170508919ec8af7f1d5eb5b999f3727d7b7ad61ccb433d80ab_prof);

    }

    public function getTemplateName()
    {
        return "client/client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 73,  194 => 72,  189 => 71,  180 => 70,  164 => 63,  152 => 57,  148 => 56,  141 => 51,  137 => 50,  125 => 40,  116 => 38,  112 => 37,  88 => 16,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/clients/clients.css\") }}\"/>

{% endblock %}

{% block content %}
    <div class=\"parallax\" data-image=\"{{ asset('img/clients/hosted_by_africa_clients.jpg') }}\"></div>
   <main>
        <section id=\"clients-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <h1>{{ \"Nos clients\"|upper }}</h1>
                    </div>
                </div>
                <div class=\"row all-select-clients\">
                    <div class=\"col-xs-12 col-sm-6 clients-select-theme\">
                        <select class=\"col-xs-12\">
                            <option disabled></option>
                            <option selected>Tous les thèmes</option>
                            <option disabled>──────────</option>
                            <option>Education</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                            <option>Comptabilité</option>
                            <option>Numérisation GED</option>
                        </select>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 text-center\">
                        <select class=\"col-xs-12\">
                            <option disabled></option>
                            <option selected>Tous les pays</option>
                            <option disabled>──────────</option>
                         {% for country in countries %}
                            <option>{{ country.name }}</option>
                         {% endfor %}
                        </select>
                    </div>
                </div>
            </div>
        </section><br><br>
            
            
        <section id=\"clients-body\">
            <div class=\"container\">
                <div class=\"row\">
                    {% for client in clients %}
                    <div class=\"col-lg-4 col-sm-6 text-center mb-4\">
                        <a href=\"#\">
                            <div class=\"test\">
                                <img src=\"http://placehold.it/200x200\" alt=\"\">
                            </div>
                            <h3>{{ client.company }}
                              <small>{{ client.firstname }}</small>
                            </h3>
                            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                        </a>
                    </div>
                    {% endfor %}
                   
                </div>
            </div>
        </section><br>
    </main>
    
{% endblock %}
{% block javascript %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.imageScroll.min.js') }}\"></script>
    <script src=\"{{ asset('js/clients/clients.js') }}\"></script>
{% endblock %}
", "client/client.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\client\\client.html.twig");
    }
}
