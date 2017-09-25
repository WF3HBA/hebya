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
        $__internal_7aae81fb06223e78658252d86938e41038a276e15b391465dca7277191fb2a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aae81fb06223e78658252d86938e41038a276e15b391465dca7277191fb2a63->enter($__internal_7aae81fb06223e78658252d86938e41038a276e15b391465dca7277191fb2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $__internal_df02e4eb7bf2dbf57f3158ac2cda4bad93aa2a4cac8ff68fffa26bca826c31dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df02e4eb7bf2dbf57f3158ac2cda4bad93aa2a4cac8ff68fffa26bca826c31dc->enter($__internal_df02e4eb7bf2dbf57f3158ac2cda4bad93aa2a4cac8ff68fffa26bca826c31dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aae81fb06223e78658252d86938e41038a276e15b391465dca7277191fb2a63->leave($__internal_7aae81fb06223e78658252d86938e41038a276e15b391465dca7277191fb2a63_prof);

        
        $__internal_df02e4eb7bf2dbf57f3158ac2cda4bad93aa2a4cac8ff68fffa26bca826c31dc->leave($__internal_df02e4eb7bf2dbf57f3158ac2cda4bad93aa2a4cac8ff68fffa26bca826c31dc_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a8fa6037a71f365013b7b8f18dcf1be9468a833e45caa4eec2c483d55e1ef265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fa6037a71f365013b7b8f18dcf1be9468a833e45caa4eec2c483d55e1ef265->enter($__internal_a8fa6037a71f365013b7b8f18dcf1be9468a833e45caa4eec2c483d55e1ef265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1a8476c7c901cbb3ba137a01e4655077e455480615188930b32d3013b571277b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8476c7c901cbb3ba137a01e4655077e455480615188930b32d3013b571277b->enter($__internal_1a8476c7c901cbb3ba137a01e4655077e455480615188930b32d3013b571277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clients/clients.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_1a8476c7c901cbb3ba137a01e4655077e455480615188930b32d3013b571277b->leave($__internal_1a8476c7c901cbb3ba137a01e4655077e455480615188930b32d3013b571277b_prof);

        
        $__internal_a8fa6037a71f365013b7b8f18dcf1be9468a833e45caa4eec2c483d55e1ef265->leave($__internal_a8fa6037a71f365013b7b8f18dcf1be9468a833e45caa4eec2c483d55e1ef265_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_603ccd1528515ba673068788b35785682221c3e3ca6fab86527ab28a979bfd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603ccd1528515ba673068788b35785682221c3e3ca6fab86527ab28a979bfd4f->enter($__internal_603ccd1528515ba673068788b35785682221c3e3ca6fab86527ab28a979bfd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c597016ab861505e3dcbc1b54c9b40a04bbf80e349241daf3a21d3a6ad6346f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c597016ab861505e3dcbc1b54c9b40a04bbf80e349241daf3a21d3a6ad6346f3->enter($__internal_c597016ab861505e3dcbc1b54c9b40a04bbf80e349241daf3a21d3a6ad6346f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c597016ab861505e3dcbc1b54c9b40a04bbf80e349241daf3a21d3a6ad6346f3->leave($__internal_c597016ab861505e3dcbc1b54c9b40a04bbf80e349241daf3a21d3a6ad6346f3_prof);

        
        $__internal_603ccd1528515ba673068788b35785682221c3e3ca6fab86527ab28a979bfd4f->leave($__internal_603ccd1528515ba673068788b35785682221c3e3ca6fab86527ab28a979bfd4f_prof);

    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f98282dacd7305716d781809b9eef9620b28a1313ddfabe0eb25498ab3eebb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98282dacd7305716d781809b9eef9620b28a1313ddfabe0eb25498ab3eebb51->enter($__internal_f98282dacd7305716d781809b9eef9620b28a1313ddfabe0eb25498ab3eebb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_131bea0a29c8e9099fd4377b58bcf2f299f28032d1d1bb88e5bd91a0f21e961e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131bea0a29c8e9099fd4377b58bcf2f299f28032d1d1bb88e5bd91a0f21e961e->enter($__internal_131bea0a29c8e9099fd4377b58bcf2f299f28032d1d1bb88e5bd91a0f21e961e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_131bea0a29c8e9099fd4377b58bcf2f299f28032d1d1bb88e5bd91a0f21e961e->leave($__internal_131bea0a29c8e9099fd4377b58bcf2f299f28032d1d1bb88e5bd91a0f21e961e_prof);

        
        $__internal_f98282dacd7305716d781809b9eef9620b28a1313ddfabe0eb25498ab3eebb51->leave($__internal_f98282dacd7305716d781809b9eef9620b28a1313ddfabe0eb25498ab3eebb51_prof);

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
