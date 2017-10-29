<?php

/* layout.html.twig */
class __TwigTemplate_f78d2337715d8c8c6ee6b74d815faea61ec320a376cc8b741f4a17b157ab0437 extends Twig_Template
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
        echo "  </head>
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["user_manager"] ?? null), "admin", array())) {
            // line 24
            echo "              <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\" class=\"btn btn-primary fa fa-pencil\" id=\"admin\" title=\"Gestion administrateur\"></a>
              <a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary fa fa-sign-out\" id=\"admin\" title=\"Déconnexion\"></a>
            ";
        }
        // line 27
        echo "          </div>                
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
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Hosted by Africa</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">À propos<span class=\"\"></span></a>                  
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos offres<span class=\"\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\">Nos services</a></li>
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">Nos produits</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos innovateurs<span class=\"\"></span></a>
            </li>
            <li class=\"dropdown\">
              <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos clients<span class=\"\"></span></a>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Emploi et carrière<span class=\"\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("opportunity");
        echo "\">Offres</a></li>
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("candidacy");
        echo "\">Candidature</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"";
        // line 68
        echo "contact";
        echo "\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Contact<span class=\"\"></span></a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4  col-md-4 col-sm-4\">
            <div class=\"footer_dv\">
              <h4>Pages</h4>
              <ul>
                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apropos");
        echo "\">À Propos</a></li>
                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services");
        echo "\">Services</a></li>
                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product");
        echo "\">Produits</a></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("innovateurs");
        echo "\">Nos innovateurs</a></li>
                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients");
        echo "\">Nos clients</a></li>
                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("opportunity");
        echo "\">Emploi et carrière</a></li>
                <li><a href=\"";
        // line 93
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
      <div style=\"text-align:center; margin-top:20px;background-color: rgba(20,20,20,0.5);\">
        <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mention");
        echo "\" class=\"text\">Mentions légales</a>
      </div>               
    </footer>
    <span id=\"scrollin\" class=\"glyphicon glyphicon-chevron-up\"></span>
    ";
        // line 137
        $this->displayBlock('javascript', $context, $blocks);
        // line 144
        echo "
  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">
      <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "
    ";
    }

    // line 137
    public function block_javascript($context, array $blocks = array())
    {
        // line 138
        echo "      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\"></script>
      <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrolltop.js"), "html", null, true);
        echo "\"></script>
    ";
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
        return array (  283 => 142,  279 => 141,  275 => 140,  271 => 138,  268 => 137,  263 => 76,  260 => 75,  254 => 10,  249 => 7,  246 => 6,  240 => 4,  234 => 144,  232 => 137,  225 => 133,  182 => 93,  178 => 92,  174 => 91,  170 => 90,  166 => 89,  162 => 88,  158 => 87,  154 => 86,  144 => 78,  142 => 75,  132 => 68,  125 => 64,  121 => 63,  113 => 58,  107 => 55,  100 => 51,  96 => 50,  88 => 45,  80 => 40,  65 => 27,  60 => 25,  55 => 24,  53 => 23,  43 => 18,  35 => 12,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\wamp64\\www\\hebya\\templates\\layout.html.twig");
    }
}
