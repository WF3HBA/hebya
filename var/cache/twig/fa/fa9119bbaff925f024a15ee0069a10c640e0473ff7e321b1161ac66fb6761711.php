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
        $__internal_fea1bffc12d8a8e47f3a5467071dbf03db6374bc250618b8f1db351b535cf9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea1bffc12d8a8e47f3a5467071dbf03db6374bc250618b8f1db351b535cf9de->enter($__internal_fea1bffc12d8a8e47f3a5467071dbf03db6374bc250618b8f1db351b535cf9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $__internal_aa4d01dc217931033b707a66f09dc7351cee240113db33330738572d5fd2872e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4d01dc217931033b707a66f09dc7351cee240113db33330738572d5fd2872e->enter($__internal_aa4d01dc217931033b707a66f09dc7351cee240113db33330738572d5fd2872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea1bffc12d8a8e47f3a5467071dbf03db6374bc250618b8f1db351b535cf9de->leave($__internal_fea1bffc12d8a8e47f3a5467071dbf03db6374bc250618b8f1db351b535cf9de_prof);

        
        $__internal_aa4d01dc217931033b707a66f09dc7351cee240113db33330738572d5fd2872e->leave($__internal_aa4d01dc217931033b707a66f09dc7351cee240113db33330738572d5fd2872e_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_553c5f1f07393562ccfbb9d0105dfda558529023da845ad21f74c7c4381c2971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553c5f1f07393562ccfbb9d0105dfda558529023da845ad21f74c7c4381c2971->enter($__internal_553c5f1f07393562ccfbb9d0105dfda558529023da845ad21f74c7c4381c2971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0b7ca260ea11ce18f0f4989e6c085f29e7cdd29656fb4ed2f94447f46c79ba5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7ca260ea11ce18f0f4989e6c085f29e7cdd29656fb4ed2f94447f46c79ba5c->enter($__internal_0b7ca260ea11ce18f0f4989e6c085f29e7cdd29656fb4ed2f94447f46c79ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clients/clients.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_0b7ca260ea11ce18f0f4989e6c085f29e7cdd29656fb4ed2f94447f46c79ba5c->leave($__internal_0b7ca260ea11ce18f0f4989e6c085f29e7cdd29656fb4ed2f94447f46c79ba5c_prof);

        
        $__internal_553c5f1f07393562ccfbb9d0105dfda558529023da845ad21f74c7c4381c2971->leave($__internal_553c5f1f07393562ccfbb9d0105dfda558529023da845ad21f74c7c4381c2971_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_970948a38433e9020ff20a2e6bf0b1e088d87dcbbf5fb87139594226a49652b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970948a38433e9020ff20a2e6bf0b1e088d87dcbbf5fb87139594226a49652b1->enter($__internal_970948a38433e9020ff20a2e6bf0b1e088d87dcbbf5fb87139594226a49652b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac30da7156bc11357243ac021bf9d5164c9f37c13fba663788a496de99f77464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac30da7156bc11357243ac021bf9d5164c9f37c13fba663788a496de99f77464->enter($__internal_ac30da7156bc11357243ac021bf9d5164c9f37c13fba663788a496de99f77464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                            <div class=\"image-client\">
                            <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <h3>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "company", array()), "html", null, true);
            echo "</h3>
                            <p>";
            // line 56
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "description", array()), 0, 200);
            echo "...</p>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                   
                </div>
            </div>
        </section><br>
    </main>
    
";
        
        $__internal_ac30da7156bc11357243ac021bf9d5164c9f37c13fba663788a496de99f77464->leave($__internal_ac30da7156bc11357243ac021bf9d5164c9f37c13fba663788a496de99f77464_prof);

        
        $__internal_970948a38433e9020ff20a2e6bf0b1e088d87dcbbf5fb87139594226a49652b1->leave($__internal_970948a38433e9020ff20a2e6bf0b1e088d87dcbbf5fb87139594226a49652b1_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1b4367e9fd50f90c92067ee2f1edad9688963d65f5afae23e5b7230eb29d8de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4367e9fd50f90c92067ee2f1edad9688963d65f5afae23e5b7230eb29d8de0->enter($__internal_1b4367e9fd50f90c92067ee2f1edad9688963d65f5afae23e5b7230eb29d8de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_a2e9ddf3d2f1f52cbc7b59f61409e896c6861b370016bc52b086018f158c415b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e9ddf3d2f1f52cbc7b59f61409e896c6861b370016bc52b086018f158c415b->enter($__internal_a2e9ddf3d2f1f52cbc7b59f61409e896c6861b370016bc52b086018f158c415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clients/clients.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a2e9ddf3d2f1f52cbc7b59f61409e896c6861b370016bc52b086018f158c415b->leave($__internal_a2e9ddf3d2f1f52cbc7b59f61409e896c6861b370016bc52b086018f158c415b_prof);

        
        $__internal_1b4367e9fd50f90c92067ee2f1edad9688963d65f5afae23e5b7230eb29d8de0->leave($__internal_1b4367e9fd50f90c92067ee2f1edad9688963d65f5afae23e5b7230eb29d8de0_prof);

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
        return array (  197 => 69,  193 => 68,  188 => 67,  179 => 66,  163 => 59,  154 => 56,  150 => 55,  145 => 53,  141 => 51,  137 => 50,  125 => 40,  116 => 38,  112 => 37,  88 => 16,  78 => 10,  69 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                            <div class=\"image-client\">
                            <img src=\"{{ asset(client.picture)  }}\" alt=\"\">
                            </div>
                            <h3>{{ client.company }}</h3>
                            <p>{{ client.description[:200]|raw }}...</p>
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
