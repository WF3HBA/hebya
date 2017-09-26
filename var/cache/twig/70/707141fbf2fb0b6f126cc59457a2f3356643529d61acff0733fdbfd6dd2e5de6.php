<?php

/* contact/contact.html.twig */
class __TwigTemplate_0db372ebbd7cef2cee9229bf25818ed7a6fc8ce21983ebfabc784e43225e5a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/contact.html.twig", 1);
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
        $__internal_0851166cfd48bf70473b0ebb474efdbf14507ad882120e7e58fcf8904e2b762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0851166cfd48bf70473b0ebb474efdbf14507ad882120e7e58fcf8904e2b762e->enter($__internal_0851166cfd48bf70473b0ebb474efdbf14507ad882120e7e58fcf8904e2b762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_09226bb804ef266b8f3a5638bc524172838a599983424862adf6aa14e9f1736f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09226bb804ef266b8f3a5638bc524172838a599983424862adf6aa14e9f1736f->enter($__internal_09226bb804ef266b8f3a5638bc524172838a599983424862adf6aa14e9f1736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0851166cfd48bf70473b0ebb474efdbf14507ad882120e7e58fcf8904e2b762e->leave($__internal_0851166cfd48bf70473b0ebb474efdbf14507ad882120e7e58fcf8904e2b762e_prof);

        
        $__internal_09226bb804ef266b8f3a5638bc524172838a599983424862adf6aa14e9f1736f->leave($__internal_09226bb804ef266b8f3a5638bc524172838a599983424862adf6aa14e9f1736f_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0e7412019083ed990f08c9fcb83c0d1dd461d87b6ecb648cfc14ff2b9b69add4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7412019083ed990f08c9fcb83c0d1dd461d87b6ecb648cfc14ff2b9b69add4->enter($__internal_0e7412019083ed990f08c9fcb83c0d1dd461d87b6ecb648cfc14ff2b9b69add4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4e59d1a5acd6e0378685f157051a5cc051b7beb6bb9f755eb3475a38184f95f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e59d1a5acd6e0378685f157051a5cc051b7beb6bb9f755eb3475a38184f95f6->enter($__internal_4e59d1a5acd6e0378685f157051a5cc051b7beb6bb9f755eb3475a38184f95f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/contact/contact.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_4e59d1a5acd6e0378685f157051a5cc051b7beb6bb9f755eb3475a38184f95f6->leave($__internal_4e59d1a5acd6e0378685f157051a5cc051b7beb6bb9f755eb3475a38184f95f6_prof);

        
        $__internal_0e7412019083ed990f08c9fcb83c0d1dd461d87b6ecb648cfc14ff2b9b69add4->leave($__internal_0e7412019083ed990f08c9fcb83c0d1dd461d87b6ecb648cfc14ff2b9b69add4_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb12d0185f91fdbb91afc8970b9e32d24129448a3ab81b57c3d935d110796c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb12d0185f91fdbb91afc8970b9e32d24129448a3ab81b57c3d935d110796c6b->enter($__internal_cb12d0185f91fdbb91afc8970b9e32d24129448a3ab81b57c3d935d110796c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aba599d2b325899cbf3367aebf0637753a7c887e98b49f0ecebb3d4ba79499e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba599d2b325899cbf3367aebf0637753a7c887e98b49f0ecebb3d4ba79499e4->enter($__internal_aba599d2b325899cbf3367aebf0637753a7c887e98b49f0ecebb3d4ba79499e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "

    <main>
        <section id=\"contact-form\">
            <div class=\"container\">
                <div class=\"form-group row text-center\">
                    <h1>CONTACT &#x2709</h1>
                </div>
                <form action=\"#\" method=\"post\">                     
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">

                            <label for=\"nom\" class=\"col-2 col-form-label\"> Nom </label>
                            <div class=\"col-10\">
                                <input id=\"nom\" name=\"nom\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
                            </div>


                            <label for=\"prenom\" class=\"col-2 col-form-label\">Prénom</label>
                            <div class=\"col-10\">
                                <input id=\"prenom\" name=\"prenom\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\">
                            </div>


                            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
                            <div class=\"col-10\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                            </div>


                            <label for=\"ville\" class=\"col-2 col-form-label\">Ville</label>
                            <div class=\"col-10\">
                                <input id=\"ville\" name=\"ville\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\">
                            </div>


                            <label for=\"pays\" class=\"col-2 col-form-label\">Pays</label>
                            <div class=\"col-10\">
                                <input id=\"pays\" name=\"pays\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
                            </div>

                            <label for=\"organisation\" class=\"col-2 col-form-label\">Organisation</label>
                            <div class=\"col-10\">
                                <input id=\"organisation\" name=\"organisation\" type=\"text\" placeholder=\"Organisation\" class=\"form-control input-md\">
                            </div>

                            <label for=\"type-organisation\" class=\"col-2 col-form-label\">Type d'organisation</label>
                            <div class=\"col-10\">
                                <select id=\"type-organisation\" name=\"type-organisation\" placeholder=\"Organisation\" class=\"form-control input-md\">
                                    <option value=\"1\">Entreprise</option>
                                    <option value=\"2\">Association</option>
                                    <option value=\"3\">Organisme public</option>
                                    <option value=\"4\">Université</option>
                                    <option value=\"5\">Centre de recherche</option>
                                </select>
                            </div>

                            <label for=\"message\" class=\"col-2 col-form-label\">Message</label>
                            <div class=\"col-10\">
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" name=\"message\"></textarea>
                            </div>

                            <div class=\"col-10\">
                                <input class=\"btn btn-primary boutton-form-contact\" type=\"submit\" value=\"Envoyer\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><br>
    </main>
";
        
        $__internal_aba599d2b325899cbf3367aebf0637753a7c887e98b49f0ecebb3d4ba79499e4->leave($__internal_aba599d2b325899cbf3367aebf0637753a7c887e98b49f0ecebb3d4ba79499e4_prof);

        
        $__internal_cb12d0185f91fdbb91afc8970b9e32d24129448a3ab81b57c3d935d110796c6b->leave($__internal_cb12d0185f91fdbb91afc8970b9e32d24129448a3ab81b57c3d935d110796c6b_prof);

    }

    // line 82
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d155090c34c32005307ee4c12c3915c8383788a158b2ea38c24a2a40886fd25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d155090c34c32005307ee4c12c3915c8383788a158b2ea38c24a2a40886fd25e->enter($__internal_d155090c34c32005307ee4c12c3915c8383788a158b2ea38c24a2a40886fd25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c788c27d36f2aea2f8f15fa18ce224e0ce63fb0c45862b1851492d9a5e681016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c788c27d36f2aea2f8f15fa18ce224e0ce63fb0c45862b1851492d9a5e681016->enter($__internal_c788c27d36f2aea2f8f15fa18ce224e0ce63fb0c45862b1851492d9a5e681016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 83
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

";
        
        $__internal_c788c27d36f2aea2f8f15fa18ce224e0ce63fb0c45862b1851492d9a5e681016->leave($__internal_c788c27d36f2aea2f8f15fa18ce224e0ce63fb0c45862b1851492d9a5e681016_prof);

        
        $__internal_d155090c34c32005307ee4c12c3915c8383788a158b2ea38c24a2a40886fd25e->leave($__internal_d155090c34c32005307ee4c12c3915c8383788a158b2ea38c24a2a40886fd25e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 83,  158 => 82,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}   
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/contact/contact.css\") }}\"/>
{% endblock %}

{% block content %}


    <main>
        <section id=\"contact-form\">
            <div class=\"container\">
                <div class=\"form-group row text-center\">
                    <h1>CONTACT &#x2709</h1>
                </div>
                <form action=\"#\" method=\"post\">                     
                    <div class=\"row\">
                        <div class=\"col-md-10 col-md-offset-1\">

                            <label for=\"nom\" class=\"col-2 col-form-label\"> Nom </label>
                            <div class=\"col-10\">
                                <input id=\"nom\" name=\"nom\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md \">
                            </div>


                            <label for=\"prenom\" class=\"col-2 col-form-label\">Prénom</label>
                            <div class=\"col-10\">
                                <input id=\"prenom\" name=\"prenom\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\">
                            </div>


                            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
                            <div class=\"col-10\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                            </div>


                            <label for=\"ville\" class=\"col-2 col-form-label\">Ville</label>
                            <div class=\"col-10\">
                                <input id=\"ville\" name=\"ville\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\">
                            </div>


                            <label for=\"pays\" class=\"col-2 col-form-label\">Pays</label>
                            <div class=\"col-10\">
                                <input id=\"pays\" name=\"pays\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
                            </div>

                            <label for=\"organisation\" class=\"col-2 col-form-label\">Organisation</label>
                            <div class=\"col-10\">
                                <input id=\"organisation\" name=\"organisation\" type=\"text\" placeholder=\"Organisation\" class=\"form-control input-md\">
                            </div>

                            <label for=\"type-organisation\" class=\"col-2 col-form-label\">Type d'organisation</label>
                            <div class=\"col-10\">
                                <select id=\"type-organisation\" name=\"type-organisation\" placeholder=\"Organisation\" class=\"form-control input-md\">
                                    <option value=\"1\">Entreprise</option>
                                    <option value=\"2\">Association</option>
                                    <option value=\"3\">Organisme public</option>
                                    <option value=\"4\">Université</option>
                                    <option value=\"5\">Centre de recherche</option>
                                </select>
                            </div>

                            <label for=\"message\" class=\"col-2 col-form-label\">Message</label>
                            <div class=\"col-10\">
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" name=\"message\"></textarea>
                            </div>

                            <div class=\"col-10\">
                                <input class=\"btn btn-primary boutton-form-contact\" type=\"submit\" value=\"Envoyer\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><br>
    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}

{% endblock %}", "contact/contact.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\contact\\contact.html.twig");
    }
}
