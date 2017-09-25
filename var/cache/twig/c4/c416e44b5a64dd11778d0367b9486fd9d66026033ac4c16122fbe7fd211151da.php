<?php

/* contact/contact.html.twig */
class __TwigTemplate_cc7c8a0c4f3131110525bffdd0fc8e1abf6ab72399aaa2bd6d4a9119c5b603f4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/contact/contact.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "

    <main>
        <section id=\"title\">
            <div class=\"container\">
                <div class=\"form-group row text-center\">
                    <h1>CONTACT &#x2709</h1>
                    <hr>
                </div>
            </div>
        </section>
        <section class=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <form action=\"#\" method=\"post\" class=\"panel panel-default col-sm-7\">                  

                        <div class=\"col-md-10 col-md-offset-1\">

                            
                            <div class=\"col-sm-6\">
                                <label for=\"nom\" class=\"col-2 col-form-label\"> Nom </label>
                                <input id=\"nom\" name=\"nom\" type=\"text\" placeholder=\"Nom\" class=\"col-sm-6 form-control input-md \">
                            </div>


                            
                            <div class=\"col-sm-6\">
                                <label for=\"prenom\" class=\"col-2 col-form-label\">Prénom</label>
                                <input id=\"prenom\" name=\"prenom\" type=\"text\" placeholder=\"Prénom\" class=\"col-sm-6 form-control input-md\">
                            </div>


                                
                            <div class=\"col-sm-6\">
                                <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                            </div>


                            
                            <div class=\"col-sm-6\">
                                <label for=\"ville\" class=\"col-2 col-form-label\">Ville</label>
                                <input id=\"ville\" name=\"ville\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\">
                            </div>


                            
                            <div class=\"col-sm-6\">
                                <label for=\"pays\" class=\"col-2 col-form-label\">Pays</label>
                                <input id=\"pays\" name=\"pays\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\">
                            </div>

                           
                            <div class=\"col-sm-6\">
                                 <label for=\"organisation\" class=\"col-2 col-form-label\">Organisation</label>
                                <input id=\"organisation\" name=\"organisation\" type=\"text\" placeholder=\"Organisation\" class=\"form-control input-md\">
                            </div>

                            
                            <div class=\"col-sm-12\">
                                <label for=\"type-organisation\" class=\"col-2 col-form-label\">Type d'organisation</label>
                                <select id=\"type-organisation\" name=\"type-organisation\" placeholder=\"Organisation\" class=\"form-control input-md\">
                                    <option value=\"1\">Entreprise</option>
                                    <option value=\"2\">Association</option>
                                    <option value=\"3\">Organisme public</option>
                                    <option value=\"4\">Université</option>
                                    <option value=\"5\">Centre de recherche</option>
                                </select>
                            </div>

                           
                            <div class=\"col-sm-12\">
                                 <label for=\"message\" class=\"col-2 col-form-label\">Message</label>
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Message\" name=\"message\"></textarea>
                            </div>

                            <div class=\"col-sm-12\">
                                <input class=\"btn btn-primary boutton-form-contact\" type=\"submit\" value=\"Envoyer\">
                            </div>
                        </div>
                    </form>
                
                    <div class=\"panel panel-default information-contact-reseaux col-sm-4 col-sm-offset-1\" >
                        <div class=\"information-contact\">
                            <h4 class=\"\">Hebya</h4>
                            <div class=\"\">
                                <p><i class=\"fa fa-location-arrow fa-1g\" aria-hidden=\"true\"></i>      23 rue de france paris 75000 </p>
                                <p><i class=\"fa fa-mobile fa-2x\" aria-hidden=\"true\">  </i>01 02 03 04 05</p>
                                <p><i class=\"fa fa-envelope fa-1g\" aria-hidden=\"true\"> </i>hebya@hebya.fr </p>
                                <p><i class=\"fa fa-internet-explorer fa-1g\" aria-hidden=\"true\"></i> www.hebya.com </p>
                            </div>
                        </div>
                        
                        <div class=\"resaux\">
                            <h4 class=\"\">Suivez-nous</h4>
                            <div>
                              
                            <a><i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i></a>
                            <a><i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i></a>
                            <a><i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i></a>
                            <a><i class=\"fa fa-youtube fa-2x\" aria-hidden=\"true\"></i></a>
                            <a><i class=\"fa fa-linkedin fa-2x\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><br>
    </main>
";
    }

    // line 121
    public function block_javascript($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

";
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
        return array (  164 => 122,  161 => 121,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact/contact.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\contact\\contact.html.twig");
    }
}
