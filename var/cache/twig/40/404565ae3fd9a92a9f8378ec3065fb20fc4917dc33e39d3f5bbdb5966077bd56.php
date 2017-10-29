<?php

/* layout.html.twig */
class __TwigTemplate_375d50cbf82fe4cf04cb4a3a8fe8e1b807d42d5d8ebd8701441dfe867f80d06e extends Twig_Template
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
        $__internal_02e92db4c827623736e709fecd9585756fef539b983d7f9fcb4b938293be9162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e92db4c827623736e709fecd9585756fef539b983d7f9fcb4b938293be9162->enter($__internal_02e92db4c827623736e709fecd9585756fef539b983d7f9fcb4b938293be9162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_4bb000cfdb921878aaf15d5976572cf26a66c736d4fe25942f599ad4a3d11246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb000cfdb921878aaf15d5976572cf26a66c736d4fe25942f599ad4a3d11246->enter($__internal_4bb000cfdb921878aaf15d5976572cf26a66c736d4fe25942f599ad4a3d11246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 23, $this->getSourceContext()); })()), "admin", array())) {
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
        echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos<span class=\"\"></span></a>                  
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
        // line 146
        echo "
  </body>
</html>";
        
        $__internal_02e92db4c827623736e709fecd9585756fef539b983d7f9fcb4b938293be9162->leave($__internal_02e92db4c827623736e709fecd9585756fef539b983d7f9fcb4b938293be9162_prof);

        
        $__internal_4bb000cfdb921878aaf15d5976572cf26a66c736d4fe25942f599ad4a3d11246->leave($__internal_4bb000cfdb921878aaf15d5976572cf26a66c736d4fe25942f599ad4a3d11246_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a588e8049605dde0ee809b36274ace734aa7178c3cedcf60e3674cd598a60c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a588e8049605dde0ee809b36274ace734aa7178c3cedcf60e3674cd598a60c40->enter($__internal_a588e8049605dde0ee809b36274ace734aa7178c3cedcf60e3674cd598a60c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4dea1de0cae76158c65717b955ecfff71864b51f382cc66fa5a3eec38968307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dea1de0cae76158c65717b955ecfff71864b51f382cc66fa5a3eec38968307->enter($__internal_d4dea1de0cae76158c65717b955ecfff71864b51f382cc66fa5a3eec38968307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_d4dea1de0cae76158c65717b955ecfff71864b51f382cc66fa5a3eec38968307->leave($__internal_d4dea1de0cae76158c65717b955ecfff71864b51f382cc66fa5a3eec38968307_prof);

        
        $__internal_a588e8049605dde0ee809b36274ace734aa7178c3cedcf60e3674cd598a60c40->leave($__internal_a588e8049605dde0ee809b36274ace734aa7178c3cedcf60e3674cd598a60c40_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9c84da88c5b86180ed768a34448560321431dea0caed39fe0668908ea3d8c088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c84da88c5b86180ed768a34448560321431dea0caed39fe0668908ea3d8c088->enter($__internal_9c84da88c5b86180ed768a34448560321431dea0caed39fe0668908ea3d8c088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_fce0e4f87941477caae569a3151f3e233cdacb2a94367590046061402cc10f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce0e4f87941477caae569a3151f3e233cdacb2a94367590046061402cc10f2c->enter($__internal_fce0e4f87941477caae569a3151f3e233cdacb2a94367590046061402cc10f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">
      <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        
        $__internal_fce0e4f87941477caae569a3151f3e233cdacb2a94367590046061402cc10f2c->leave($__internal_fce0e4f87941477caae569a3151f3e233cdacb2a94367590046061402cc10f2c_prof);

        
        $__internal_9c84da88c5b86180ed768a34448560321431dea0caed39fe0668908ea3d8c088->leave($__internal_9c84da88c5b86180ed768a34448560321431dea0caed39fe0668908ea3d8c088_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_419113c92b416ee908d2c1d4f8a0925e59bc0c7144b324bd2d9b7813bd915b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419113c92b416ee908d2c1d4f8a0925e59bc0c7144b324bd2d9b7813bd915b0d->enter($__internal_419113c92b416ee908d2c1d4f8a0925e59bc0c7144b324bd2d9b7813bd915b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_49378c55267bcddfaf1cbda54c8074847047afd27c5a1b4c3e6a85bd53fd2c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49378c55267bcddfaf1cbda54c8074847047afd27c5a1b4c3e6a85bd53fd2c75->enter($__internal_49378c55267bcddfaf1cbda54c8074847047afd27c5a1b4c3e6a85bd53fd2c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "
    ";
        
        $__internal_49378c55267bcddfaf1cbda54c8074847047afd27c5a1b4c3e6a85bd53fd2c75->leave($__internal_49378c55267bcddfaf1cbda54c8074847047afd27c5a1b4c3e6a85bd53fd2c75_prof);

        
        $__internal_419113c92b416ee908d2c1d4f8a0925e59bc0c7144b324bd2d9b7813bd915b0d->leave($__internal_419113c92b416ee908d2c1d4f8a0925e59bc0c7144b324bd2d9b7813bd915b0d_prof);

    }

    // line 137
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dde24a93ea6bd348d56adb94f0ebcf5bcabce2f5c4a5e1ff6eb159f8c74b6444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde24a93ea6bd348d56adb94f0ebcf5bcabce2f5c4a5e1ff6eb159f8c74b6444->enter($__internal_dde24a93ea6bd348d56adb94f0ebcf5bcabce2f5c4a5e1ff6eb159f8c74b6444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4ff220e35402a0c1c68c7eb54e7ae85b4c4141806e65eb77dcb5cc57ec154691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff220e35402a0c1c68c7eb54e7ae85b4c4141806e65eb77dcb5cc57ec154691->enter($__internal_4ff220e35402a0c1c68c7eb54e7ae85b4c4141806e65eb77dcb5cc57ec154691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 138
        echo "
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
 
      <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrolltop.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4ff220e35402a0c1c68c7eb54e7ae85b4c4141806e65eb77dcb5cc57ec154691->leave($__internal_4ff220e35402a0c1c68c7eb54e7ae85b4c4141806e65eb77dcb5cc57ec154691_prof);

        
        $__internal_dde24a93ea6bd348d56adb94f0ebcf5bcabce2f5c4a5e1ff6eb159f8c74b6444->leave($__internal_dde24a93ea6bd348d56adb94f0ebcf5bcabce2f5c4a5e1ff6eb159f8c74b6444_prof);

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
        return array (  339 => 144,  335 => 143,  331 => 142,  325 => 138,  316 => 137,  305 => 76,  296 => 75,  284 => 10,  279 => 7,  270 => 6,  252 => 4,  240 => 146,  238 => 137,  231 => 133,  188 => 93,  184 => 92,  180 => 91,  176 => 90,  172 => 89,  168 => 88,  164 => 87,  160 => 86,  150 => 78,  148 => 75,  138 => 68,  131 => 64,  127 => 63,  119 => 58,  113 => 55,  106 => 51,  102 => 50,  94 => 45,  86 => 40,  71 => 27,  66 => 25,  61 => 24,  59 => 23,  49 => 18,  41 => 12,  39 => 6,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <title>{% block title '' %} - Hebya</title>
    <meta charset=\"utf-8\">
    {% block stylesheet %}
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">
      <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
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
              <a href=\"{{path('apropos')}}\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos<span class=\"\"></span></a>                  
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
      <div style=\"text-align:center; margin-top:20px;background-color: rgba(20,20,20,0.5);\">
        <a href=\"{{path('mention')}}\" class=\"text\">Mentions légales</a>
      </div>               
    </footer>
    <span id=\"scrollin\" class=\"glyphicon glyphicon-chevron-up\"></span>
    {% block javascript %}

      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
 
      <script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
      <script src=\"{{ asset('js/main.js') }}\"></script>
      <script src=\"{{ asset('js/scrolltop.js') }}\"></script>
    {% endblock %}

  </body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\hebya\\templates\\layout.html.twig");
    }
}
