<?php

/* layout.html.twig */
class __TwigTemplate_c5ee3401bee30cd07cbf267533d0e81256ead5e24dabd07bdd13d081885ba42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5914da51952215b72cd4b1caa53fe4603a317707ae79bdae074a0e2937ac2c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5914da51952215b72cd4b1caa53fe4603a317707ae79bdae074a0e2937ac2c8e->enter($__internal_5914da51952215b72cd4b1caa53fe4603a317707ae79bdae074a0e2937ac2c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_d096076c4bc9a0497727186be85c8795429ee61dcacb03159150672999d97f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d096076c4bc9a0497727186be85c8795429ee61dcacb03159150672999d97f73->enter($__internal_d096076c4bc9a0497727186be85c8795429ee61dcacb03159150672999d97f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - Hebya</title>
        <meta charset=\"utf-8\">
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <header>
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"col-xs-4\">
                       <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" id=\"hebya-logo\"><img id=\"top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/hebya-logo-normal.png"), "html", null, true);
        echo "\" title=\"Accueil\"/></a>
                   </div>
                   <div id=\"header-social\" class=\"col-xs-8\">
                       <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
                       <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i>
                        ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 23, $this->getSourceContext()); })()), "admin", array())) {
            // line 24
            echo "                           <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\" class=\"btn btn-primary fa fa-pencil\" id=\"admin\" title=\"Gestion administrateur\"></a>
                           <a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary fa fa-sign-out\" id=\"admin\" title=\"Déconnexion\"></a>
                        ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 26
(isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 26, $this->getSourceContext()); })()), "UserName", array())) {
            // line 27
            echo "                           <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
            echo "\" class=\"btn btn-primary\" id=\"admin\">Espace membre</a>
                           <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary\" id=\"admin\">Déconnexion</a>
                       ";
        } else {
            // line 30
            echo "                           <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"btn btn-primary fa fa-book\" aria-hidden=\"true\" id=\"admin\" title=\"Inscription\"></a>
                           <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" class=\"btn btn-primary fa fa-user\" aria-hidden=\"true\" id=\"admin\" title=\"Connexion\"></a>
                       ";
        }
        // line 33
        echo "                   </div>                
              </div>
           </div>
       </header>
        <nav id=\"sticker\" class=\"navbar navbar-inverse\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Hosted by Africa</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">À propos<span class=\"\"></span></a>                  
                </li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos offres<span class=\"\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\">Nos services</a></li>
                    <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">Nos produits</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos innovateurs<span class=\"\"></span></a>
                </li>
                <li class=\"dropdown\">
                  <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos clients<span class=\"\"></span></a>
                </li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Emploi et carrière<span class=\"\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("opportunity");
        echo "\">Offres</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("candidacy");
        echo "\">Candidature</a></li>
                   </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"";
        // line 74
        echo "contact";
        echo "\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Contact<span class=\"\"></span></a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    
        ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "    
  \t\t\t
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Pages</h4>
                        <ul>
                            <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À Propos</a></li>
                            <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">Produits</a></li>
                            <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\">Nos innovateurs</a></li>
                            <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\">Nos clients</a></li>
                            <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("opportunity");
        echo "\">Emploi et carrière</a></li>
                            <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Suivez-nous</h4>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-twitter\"><i class=\"fa fa-twitter-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-youtube\"><i class=\"fa fa-youtube-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin-square fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-rss\"><i class=\"fa fa-rss-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Contact</h4>
                        <form role=\"form\" method=\"post\">
                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" placeholder=\"Nom\" required>
                            </div>

                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" placeholder=\"Prénom\" required>
                            </div>

                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"societe\" name=\"societe\" placeholder=\"Nom de la société\" required>
                            </div>


                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
                            </div>


                            <div class=\"form-group\">
                            <textarea class=\"form-control\" type=\"textarea\" id=\"message\" placeholder=\"Message\" maxlength=\"140\" rows=\"2\"></textarea>

                            </div>

                            <button type=\"button\" id=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">Envoyer</button>
                        </form>\t\t
                    </div>

                </div>
            </div>
        </div>
                      ";
        // line 151
        echo "               
       <div style=\"text-align:center; margin-top:20px;background-color: rgba(20,20,20,0.5);\">
            <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mention");
        echo "\" class=\"text\">Mentions légales</a>
        </div>               
    </footer>
    <span id=\"scrollin\" class=\"glyphicon glyphicon-chevron-up\"></span>
    ";
        // line 157
        $this->displayBlock('javascript', $context, $blocks);
        // line 164
        echo "
    </body>
</html>";
        
        $__internal_5914da51952215b72cd4b1caa53fe4603a317707ae79bdae074a0e2937ac2c8e->leave($__internal_5914da51952215b72cd4b1caa53fe4603a317707ae79bdae074a0e2937ac2c8e_prof);

        
        $__internal_d096076c4bc9a0497727186be85c8795429ee61dcacb03159150672999d97f73->leave($__internal_d096076c4bc9a0497727186be85c8795429ee61dcacb03159150672999d97f73_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b26b8b9d5f9c7ec5e30015871a2951a2238f82bbe5fcdf409ec76f709049eb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26b8b9d5f9c7ec5e30015871a2951a2238f82bbe5fcdf409ec76f709049eb53->enter($__internal_b26b8b9d5f9c7ec5e30015871a2951a2238f82bbe5fcdf409ec76f709049eb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0456421346ba7225ee828625e2c0c946f501b50b33e8207e9f5064b730aa8b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0456421346ba7225ee828625e2c0c946f501b50b33e8207e9f5064b730aa8b6f->enter($__internal_0456421346ba7225ee828625e2c0c946f501b50b33e8207e9f5064b730aa8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_0456421346ba7225ee828625e2c0c946f501b50b33e8207e9f5064b730aa8b6f->leave($__internal_0456421346ba7225ee828625e2c0c946f501b50b33e8207e9f5064b730aa8b6f_prof);

        
        $__internal_b26b8b9d5f9c7ec5e30015871a2951a2238f82bbe5fcdf409ec76f709049eb53->leave($__internal_b26b8b9d5f9c7ec5e30015871a2951a2238f82bbe5fcdf409ec76f709049eb53_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ba9e95cf9c2bfc01bae6951ae15a1cf5503f44a5108eda25570c6c6442c4de89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e95cf9c2bfc01bae6951ae15a1cf5503f44a5108eda25570c6c6442c4de89->enter($__internal_ba9e95cf9c2bfc01bae6951ae15a1cf5503f44a5108eda25570c6c6442c4de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1e1bdc2ec9658fa073ca3ca7328fb3e454d195e2f312eb2f946fa448cb7bf5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1bdc2ec9658fa073ca3ca7328fb3e454d195e2f312eb2f946fa448cb7bf5e6->enter($__internal_1e1bdc2ec9658fa073ca3ca7328fb3e454d195e2f312eb2f946fa448cb7bf5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_1e1bdc2ec9658fa073ca3ca7328fb3e454d195e2f312eb2f946fa448cb7bf5e6->leave($__internal_1e1bdc2ec9658fa073ca3ca7328fb3e454d195e2f312eb2f946fa448cb7bf5e6_prof);

        
        $__internal_ba9e95cf9c2bfc01bae6951ae15a1cf5503f44a5108eda25570c6c6442c4de89->leave($__internal_ba9e95cf9c2bfc01bae6951ae15a1cf5503f44a5108eda25570c6c6442c4de89_prof);

    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        $__internal_76ce4b3093e678b21dec46da67ab4d72a92bf1c504cf8691141f00b3bb56fd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ce4b3093e678b21dec46da67ab4d72a92bf1c504cf8691141f00b3bb56fd63->enter($__internal_76ce4b3093e678b21dec46da67ab4d72a92bf1c504cf8691141f00b3bb56fd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f012d46e4d6758a35479d89a61c48b738f6585a5e0909c115bd88a73cb441508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f012d46e4d6758a35479d89a61c48b738f6585a5e0909c115bd88a73cb441508->enter($__internal_f012d46e4d6758a35479d89a61c48b738f6585a5e0909c115bd88a73cb441508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 82
        echo "            
        ";
        
        $__internal_f012d46e4d6758a35479d89a61c48b738f6585a5e0909c115bd88a73cb441508->leave($__internal_f012d46e4d6758a35479d89a61c48b738f6585a5e0909c115bd88a73cb441508_prof);

        
        $__internal_76ce4b3093e678b21dec46da67ab4d72a92bf1c504cf8691141f00b3bb56fd63->leave($__internal_76ce4b3093e678b21dec46da67ab4d72a92bf1c504cf8691141f00b3bb56fd63_prof);

    }

    // line 157
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ebee8746fde6479aeab4bb3d7adbb3da1667c54ae938e1f5eeb8313e5f8b62d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebee8746fde6479aeab4bb3d7adbb3da1667c54ae938e1f5eeb8313e5f8b62d8->enter($__internal_ebee8746fde6479aeab4bb3d7adbb3da1667c54ae938e1f5eeb8313e5f8b62d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4591d597882b86cf375b32a347c497ade1eab209d65b3fca59fbfced2719ef09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4591d597882b86cf375b32a347c497ade1eab209d65b3fca59fbfced2719ef09->enter($__internal_4591d597882b86cf375b32a347c497ade1eab209d65b3fca59fbfced2719ef09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 158
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrolltop.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4591d597882b86cf375b32a347c497ade1eab209d65b3fca59fbfced2719ef09->leave($__internal_4591d597882b86cf375b32a347c497ade1eab209d65b3fca59fbfced2719ef09_prof);

        
        $__internal_ebee8746fde6479aeab4bb3d7adbb3da1667c54ae938e1f5eeb8313e5f8b62d8->leave($__internal_ebee8746fde6479aeab4bb3d7adbb3da1667c54ae938e1f5eeb8313e5f8b62d8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 162,  367 => 161,  363 => 160,  359 => 158,  350 => 157,  339 => 82,  330 => 81,  318 => 10,  313 => 7,  304 => 6,  286 => 4,  274 => 164,  272 => 157,  265 => 153,  261 => 151,  210 => 100,  206 => 99,  202 => 98,  198 => 97,  194 => 96,  190 => 95,  186 => 94,  182 => 93,  171 => 84,  169 => 81,  159 => 74,  152 => 70,  148 => 69,  140 => 64,  134 => 61,  127 => 57,  123 => 56,  115 => 51,  107 => 46,  92 => 33,  87 => 31,  82 => 30,  77 => 28,  72 => 27,  70 => 26,  66 => 25,  61 => 24,  59 => 23,  49 => 18,  41 => 12,  39 => 6,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - Hebya</title>
        <meta charset=\"utf-8\">
        {% block stylesheet %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}
    </head>
    <body>
        <header>
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"col-xs-4\">
                       <a href=\"{{path('homepage')}}\" id=\"hebya-logo\"><img id=\"top\" src=\"{{ asset('img/hebya-logo-normal.png')}}\" title=\"Accueil\"/></a>
                   </div>
                   <div id=\"header-social\" class=\"col-xs-8\">
                       <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
                       <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i>
                        {% if user_manager.admin %}
                           <a href=\"{{ path('admin') }}\" class=\"btn btn-primary fa fa-pencil\" id=\"admin\" title=\"Gestion administrateur\"></a>
                           <a href=\"{{ path('logout') }}\" class=\"btn btn-primary fa fa-sign-out\" id=\"admin\" title=\"Déconnexion\"></a>
                        {% elseif user_manager.UserName %}
                           <a href=\"{{ path('profil') }}\" class=\"btn btn-primary\" id=\"admin\">Espace membre</a>
                           <a href=\"{{ path('logout') }}\" class=\"btn btn-primary\" id=\"admin\">Déconnexion</a>
                       {% else %}
                           <a href=\"{{ path('register') }}\" class=\"btn btn-primary fa fa-book\" aria-hidden=\"true\" id=\"admin\" title=\"Inscription\"></a>
                           <a href=\"{{ path('login') }}\" class=\"btn btn-primary fa fa-user\" aria-hidden=\"true\" id=\"admin\" title=\"Connexion\"></a>
                       {% endif %}
                   </div>                
              </div>
           </div>
       </header>
        <nav id=\"sticker\" class=\"navbar navbar-inverse\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">Hosted by Africa</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a href=\"{{path('apropos')}}\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">À propos<span class=\"\"></span></a>                  
                </li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos offres<span class=\"\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{path('services')}}\">Nos services</a></li>
                    <li><a href=\"{{path('product')}}\">Nos produits</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"{{path('innovateurs')}}\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos innovateurs<span class=\"\"></span></a>
                </li>
                <li class=\"dropdown\">
                  <a href=\"{{path('clients')}}\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos clients<span class=\"\"></span></a>
                </li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Emploi et carrière<span class=\"\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"{{path('opportunity')}}\">Offres</a></li>
                    <li><a href=\"{{path('candidacy')}}\">Candidature</a></li>
                   </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"{{('contact')}}\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Contact<span class=\"\"></span></a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    
        {% block content %}
            
        {% endblock %}
    
  \t\t\t
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Pages</h4>
                        <ul>
                            <li><a href=\"{{path('homepage')}}\">Accueil</a></li>
                            <li><a href=\"{{path('apropos')}}\">À Propos</a></li>
                            <li><a href=\"{{path('services')}}\">Services</a></li>
                            <li><a href=\"{{path('product')}}\">Produits</a></li>
                            <li><a href=\"{{path('innovateurs')}}\">Nos innovateurs</a></li>
                            <li><a href=\"{{path('clients')}}\">Nos clients</a></li>
                            <li><a href=\"{{path('opportunity')}}\">Emploi et carrière</a></li>
                            <li><a href=\"{{path('contact')}}\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Suivez-nous</h4>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-twitter\"><i class=\"fa fa-twitter-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-youtube\"><i class=\"fa fa-youtube-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin-square fa-4x\" aria-hidden=\"true\"></i></a><a href=\"#\" class=\"footer-link-rss\"><i class=\"fa fa-rss-square fa-4x\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4  col-md-4 col-sm-4\">
                    <div class=\"footer_dv\">
                        <h4>Contact</h4>
                        <form role=\"form\" method=\"post\">
                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" placeholder=\"Nom\" required>
                            </div>

                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" placeholder=\"Prénom\" required>
                            </div>

                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"societe\" name=\"societe\" placeholder=\"Nom de la société\" required>
                            </div>


                            <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
                            </div>


                            <div class=\"form-group\">
                            <textarea class=\"form-control\" type=\"textarea\" id=\"message\" placeholder=\"Message\" maxlength=\"140\" rows=\"2\"></textarea>

                            </div>

                            <button type=\"button\" id=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">Envoyer</button>
                        </form>\t\t
                    </div>

                </div>
            </div>
        </div>
                      {#  <a href=\"{{path('mention')}}\"style=\"color: #fff; font-size: 10px; padding-left: 600px; background-color: grey;\"> Mentions légales
                        </a><br>
                        <span style=\"background-color: grey;\" >Kikoo</span>#}
               
       <div style=\"text-align:center; margin-top:20px;background-color: rgba(20,20,20,0.5);\">
            <a href=\"{{path('mention')}}\" class=\"text\">Mentions légales</a>
        </div>               
    </footer>
    <span id=\"scrollin\" class=\"glyphicon glyphicon-chevron-up\"></span>
    {% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('js/scrolltop.js') }}\"></script>
    {% endblock %}

    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\layout.html.twig");
    }
}
