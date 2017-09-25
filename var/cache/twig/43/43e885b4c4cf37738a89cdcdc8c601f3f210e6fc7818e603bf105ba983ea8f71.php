<?php

/* candidacy/candidacy.html.twig */
class __TwigTemplate_42cf390c06fc9d6e05efdcf7ee9b0a7eae0ff746722c14c9b16e2020dc259653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "candidacy/candidacy.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/candidacy/candidacy.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <main>
        <section class=\"container\">
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
        // line 21
        if (($context["opportunity"] ?? null)) {
            // line 22
            echo "                            <div class=\"row\">
                                <div class=\"col-sm-4\">Poste : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["opportunity"] ?? null), "position", array()), "html", null, true);
            echo " </div>
                                <div class=\"col-sm-4\">Réference : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["opportunity"] ?? null), "reference", array()), "html", null, true);
            echo "</div>
                            </div>
                            ";
        }
        // line 27
        echo "                            <div class=\"col-10\">

                                ";
        // line 29
        if ( !($context["opportunity"] ?? null)) {
            // line 30
            echo "                                <label for=\"position\" class=\"col-2 col-form-label\">Poste recherché</label>   
                                ";
        }
        // line 31
        echo "   
                                <input name=\"position\" class=\"form-control input-md ";
        // line 32
        if (($context["opportunity"] ?? null)) {
            echo "hidden";
        }
        echo "\" ";
        if (($context["opportunity"] ?? null)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["opportunity"] ?? null), "position", array()), "html", null, true);
            echo " ";
        }
        echo "\">

                            </div>
                            
                            <div class=\"col-10\">
                                
                            
                                <input name=\"idopportunity\" class=\"form-control input-md hidden\" value=\"";
        // line 39
        if (($context["opportunity"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["opportunity"] ?? null), "idopportunity", array()), "html", null, true);
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
    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
       
    </script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidacy/candidacy.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "candidacy/candidacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 106,  182 => 102,  179 => 101,  110 => 39,  92 => 32,  89 => 31,  85 => 30,  83 => 29,  79 => 27,  73 => 24,  69 => 23,  66 => 22,  64 => 21,  53 => 13,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "candidacy/candidacy.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\candidacy\\candidacy.html.twig");
    }
}
