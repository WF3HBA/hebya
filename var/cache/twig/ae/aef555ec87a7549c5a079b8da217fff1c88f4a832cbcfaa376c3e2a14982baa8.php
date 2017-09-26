<?php

/* admin/admin.html.twig */
class __TwigTemplate_75e03cc7b38ea61738fb19ce720b70e72d817c8cf608b74412cb1788a15aee9e extends Twig_Template
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
        $__internal_6d3b50fbaff2658a83a69f533cc90a17e961c889ce1336394e56b2229ca4ce64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3b50fbaff2658a83a69f533cc90a17e961c889ce1336394e56b2229ca4ce64->enter($__internal_6d3b50fbaff2658a83a69f533cc90a17e961c889ce1336394e56b2229ca4ce64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_bc08f1ceac08c246373e27e0323084df20a947f76ed6d7effdc2df58ea31ddd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc08f1ceac08c246373e27e0323084df20a947f76ed6d7effdc2df58ea31ddd8->enter($__internal_bc08f1ceac08c246373e27e0323084df20a947f76ed6d7effdc2df58ea31ddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - Hebya - admin</title>
        <meta charset=\"utf-8\">
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        
        
    ";
        // line 28
        echo "       <div class=\"navbar navbar-inverse navbar-fixed-top\"> 
            <ul class=\"nav navbar-nav\" id=\"head-menu\">
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/hebya-logo-inverse.png"), "html", null, true);
        echo "\"/></a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product");
        echo "\">Produits</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider");
        echo "\">Fournisseur</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client");
        echo "\">Clients</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team");
        echo "\">Equipe</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_about");
        echo "\">A propos</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_service");
        echo "\">Services</a></li>
                <li class=\"li-nav\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Retour au site</a></li>
            </ul>
        </div>

       

         ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "        
           
        
 ";
        // line 104
        $this->displayBlock('javascript', $context, $blocks);
        // line 119
        echo "    
    
    </body>
</html>";
        
        $__internal_6d3b50fbaff2658a83a69f533cc90a17e961c889ce1336394e56b2229ca4ce64->leave($__internal_6d3b50fbaff2658a83a69f533cc90a17e961c889ce1336394e56b2229ca4ce64_prof);

        
        $__internal_bc08f1ceac08c246373e27e0323084df20a947f76ed6d7effdc2df58ea31ddd8->leave($__internal_bc08f1ceac08c246373e27e0323084df20a947f76ed6d7effdc2df58ea31ddd8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_29913c7f2c4f08f587d1019478b34ef6cf8e33d84e3f915ad1ddc4bd4d830bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29913c7f2c4f08f587d1019478b34ef6cf8e33d84e3f915ad1ddc4bd4d830bbd->enter($__internal_29913c7f2c4f08f587d1019478b34ef6cf8e33d84e3f915ad1ddc4bd4d830bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_283957b34361dc06dfc93cf66e91217a3445fa07540dc641c1ef0eec936c1b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283957b34361dc06dfc93cf66e91217a3445fa07540dc641c1ef0eec936c1b87->enter($__internal_283957b34361dc06dfc93cf66e91217a3445fa07540dc641c1ef0eec936c1b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_283957b34361dc06dfc93cf66e91217a3445fa07540dc641c1ef0eec936c1b87->leave($__internal_283957b34361dc06dfc93cf66e91217a3445fa07540dc641c1ef0eec936c1b87_prof);

        
        $__internal_29913c7f2c4f08f587d1019478b34ef6cf8e33d84e3f915ad1ddc4bd4d830bbd->leave($__internal_29913c7f2c4f08f587d1019478b34ef6cf8e33d84e3f915ad1ddc4bd4d830bbd_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a3192b5190b393e0f8b14af59f4b08d663b5d19b6f6f2252c1adc1be05bbbd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3192b5190b393e0f8b14af59f4b08d663b5d19b6f6f2252c1adc1be05bbbd5b->enter($__internal_a3192b5190b393e0f8b14af59f4b08d663b5d19b6f6f2252c1adc1be05bbbd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f3db2833c9bf2bc4940aec4088700f5bdef1dc94c32c128ceb960def4abbf3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3db2833c9bf2bc4940aec4088700f5bdef1dc94c32c128ceb960def4abbf3ec->enter($__internal_f3db2833c9bf2bc4940aec4088700f5bdef1dc94c32c128ceb960def4abbf3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css\" rel=\"stylesheet\"  crossorigin=\"anonymous\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_f3db2833c9bf2bc4940aec4088700f5bdef1dc94c32c128ceb960def4abbf3ec->leave($__internal_f3db2833c9bf2bc4940aec4088700f5bdef1dc94c32c128ceb960def4abbf3ec_prof);

        
        $__internal_a3192b5190b393e0f8b14af59f4b08d663b5d19b6f6f2252c1adc1be05bbbd5b->leave($__internal_a3192b5190b393e0f8b14af59f4b08d663b5d19b6f6f2252c1adc1be05bbbd5b_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_c942a5d4b402eb10dc88f56207acbed0888baa2f2b93854af3397cf9b7457006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c942a5d4b402eb10dc88f56207acbed0888baa2f2b93854af3397cf9b7457006->enter($__internal_c942a5d4b402eb10dc88f56207acbed0888baa2f2b93854af3397cf9b7457006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4e4c5dee7ac0edee33a4cb97d52c0d822da350bdaf4930754d771bd545f3a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4c5dee7ac0edee33a4cb97d52c0d822da350bdaf4930754d771bd545f3a42->enter($__internal_d4e4c5dee7ac0edee33a4cb97d52c0d822da350bdaf4930754d771bd545f3a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "             <div class=\"container col-md-offset-2\">
                <div class=\"row table-listing\">                    
                     <div class=\"col-md-3\">
                         <div class=\"asset1 asset\">
                            ";
        // line 49
        echo "                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset2 asset\">
                            ";
        // line 55
        echo "                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset3 asset\">
                            ";
        // line 61
        echo "                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset4 asset\">
                            ";
        // line 67
        echo "                           
                         </div> 
                         
                </div> 
                <div class=\"row\">
                    <span class=\"col-md-3 col-md-offset-9 powered\">Powered by <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/weatheru.jpg"), "html", null, true);
        echo "\"></span>
                </div>
                   
                
                 
                 <div class=\"row\">
                     <div class=\"col-md-5 table-listing\">
                         
                         <div class=\"add-on\">
                             <h2>Ajout</h2>
                             <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-address-card fa-5x\" aria-hidden=\"true\"></i><h5>Clients</h5></a>
                             <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-cart-plus fa-5x\" aria-hidden=\"true\"></i><h5>Produit</h5></a>
                             <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_team_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-users fa-5x\" aria-hidden=\"true\"></i><h5>Equipes</h5></a>
                             <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-globe fa-5x\" aria-hidden=\"true\"></i><h5>Pays</h5></a>
                             <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-lightbulb-o fa-5x\" aria-hidden=\"true\"></i><h5>Innovateurs</h5></a>
                             <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_provider_edit");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-handshake-o fa-5x\" aria-hidden=\"true\"></i><h5>Emplois</h5></a>
                         </div>
                         
                     </div>
                     <div class=\"col-md-6 asset table-listing\">
                         <div id=\"calendar\"></div>
                     </div>
                 </div>
                 
                
                 
            </div>  
           
        ";
        
        $__internal_d4e4c5dee7ac0edee33a4cb97d52c0d822da350bdaf4930754d771bd545f3a42->leave($__internal_d4e4c5dee7ac0edee33a4cb97d52c0d822da350bdaf4930754d771bd545f3a42_prof);

        
        $__internal_c942a5d4b402eb10dc88f56207acbed0888baa2f2b93854af3397cf9b7457006->leave($__internal_c942a5d4b402eb10dc88f56207acbed0888baa2f2b93854af3397cf9b7457006_prof);

    }

    // line 104
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e539dfb7c739e61bfa889e04edb8162ec727510bfe14b26186c7be11acd80bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e539dfb7c739e61bfa889e04edb8162ec727510bfe14b26186c7be11acd80bb8->enter($__internal_e539dfb7c739e61bfa889e04edb8162ec727510bfe14b26186c7be11acd80bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_684a8e9b009997445fed8dde1dc9acb911921afef8addbd0d613423f8e3dd461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684a8e9b009997445fed8dde1dc9acb911921afef8addbd0d613423f8e3dd461->enter($__internal_684a8e9b009997445fed8dde1dc9acb911921afef8addbd0d613423f8e3dd461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 105
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"crossorigin=\"anonymous\"></script>
    
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js\"  crossorigin=\"anonymous\"></script>
   
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/edit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin/calendrier.js"), "html", null, true);
        echo "\"></script>
    
     
    
   
    
    ";
        
        $__internal_684a8e9b009997445fed8dde1dc9acb911921afef8addbd0d613423f8e3dd461->leave($__internal_684a8e9b009997445fed8dde1dc9acb911921afef8addbd0d613423f8e3dd461_prof);

        
        $__internal_e539dfb7c739e61bfa889e04edb8162ec727510bfe14b26186c7be11acd80bb8->leave($__internal_e539dfb7c739e61bfa889e04edb8162ec727510bfe14b26186c7be11acd80bb8_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 112,  277 => 111,  271 => 108,  266 => 105,  257 => 104,  233 => 87,  229 => 86,  225 => 85,  221 => 84,  217 => 83,  213 => 82,  200 => 72,  193 => 67,  186 => 61,  179 => 55,  172 => 49,  166 => 44,  157 => 43,  145 => 11,  139 => 7,  130 => 6,  112 => 4,  99 => 119,  97 => 104,  92 => 101,  90 => 43,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  51 => 30,  47 => 28,  41 => 13,  39 => 6,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - Hebya - admin</title>
        <meta charset=\"utf-8\">
        {% block stylesheet %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Josefin+Sans|Open+Sans|Roboto\" rel=\"stylesheet\"> 
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css\" rel=\"stylesheet\"  crossorigin=\"anonymous\">
            <link href=\"{{ asset('css/admin/admin.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}
    </head>
    <body>
        
        
    {#    <div class=\"navbar navbar-inverse navbar-fixed-left\" id=\"leftside\">
            
           <ul class=\"nav navbar-nav\" id=\"left-menu\">
              
               <li class=\"li-left\"><a href=\"{{ path('admin_product') }}\">Produits</a></li>
               <li class=\"li-left\"><a href=\"{{ path('admin_provider') }}\">Fournisseur</a></li>
               <li class=\"li-left\"><a href=\"{{ path('admin_client') }}\">Clients</a></li>
               <li class=\"li-left\"><a href=\"{{ path('admin_team') }}\">Team</a></li>
               <li class=\"li-left\"><a href=\"{{ path('homepage') }}\">Retour au site</a></li>
           </ul>
       </div>#}
       <div class=\"navbar navbar-inverse navbar-fixed-top\"> 
            <ul class=\"nav navbar-nav\" id=\"head-menu\">
                <li><a href=\"{{ path('admin') }}\"><img src=\"{{ asset('img/hebya-logo-inverse.png')}}\"/></a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_product') }}\">Produits</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_provider') }}\">Fournisseur</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_client') }}\">Clients</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_team') }}\">Equipe</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_about') }}\">A propos</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('admin_service') }}\">Services</a></li>
                <li class=\"li-nav\"><a href=\"{{ path('homepage') }}\">Retour au site</a></li>
            </ul>
        </div>

       

         {% block content %}
             <div class=\"container col-md-offset-2\">
                <div class=\"row table-listing\">                    
                     <div class=\"col-md-3\">
                         <div class=\"asset1 asset\">
                            {#  weather api data   #}
                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset2 asset\">
                            {#  weather api data   #}
                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset3 asset\">
                            {#  weather api data   #}
                         </div> 
                    </div>                                    
                   
                     <div class=\"col-md-3\">
                         <div class=\"asset4 asset\">
                            {#  weather api data   #}
                           
                         </div> 
                         
                </div> 
                <div class=\"row\">
                    <span class=\"col-md-3 col-md-offset-9 powered\">Powered by <img src=\"{{ asset('img/weatheru.jpg') }}\"></span>
                </div>
                   
                
                 
                 <div class=\"row\">
                     <div class=\"col-md-5 table-listing\">
                         
                         <div class=\"add-on\">
                             <h2>Ajout</h2>
                             <a href=\"{{ path('admin_client_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-address-card fa-5x\" aria-hidden=\"true\"></i><h5>Clients</h5></a>
                             <a href=\"{{ path('admin_product_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-cart-plus fa-5x\" aria-hidden=\"true\"></i><h5>Produit</h5></a>
                             <a href=\"{{ path('admin_team_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-users fa-5x\" aria-hidden=\"true\"></i><h5>Equipes</h5></a>
                             <a href=\"{{ path('admin_provider_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-globe fa-5x\" aria-hidden=\"true\"></i><h5>Pays</h5></a>
                             <a href=\"{{ path('admin_provider_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-lightbulb-o fa-5x\" aria-hidden=\"true\"></i><h5>Innovateurs</h5></a>
                             <a href=\"{{ path('admin_provider_edit')}}\" class=\"btn btn-default\"><i class=\"fa fa-handshake-o fa-5x\" aria-hidden=\"true\"></i><h5>Emplois</h5></a>
                         </div>
                         
                     </div>
                     <div class=\"col-md-6 asset table-listing\">
                         <div id=\"calendar\"></div>
                     </div>
                 </div>
                 
                
                 
            </div>  
           
        {% endblock %}
        
           
        
 {% block javascript %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"crossorigin=\"anonymous\"></script>
    
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/admin/moment-with-locales.min.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js\"  crossorigin=\"anonymous\"></script>
   
    <script src=\"{{ asset('js/admin/edit.js') }}\"></script>
    <script src=\"{{ asset('js/admin/calendrier.js') }}\"></script>
    
     
    
   
    
    {% endblock %}
    
    
    </body>
</html>", "admin/admin.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\admin\\admin.html.twig");
    }
}
