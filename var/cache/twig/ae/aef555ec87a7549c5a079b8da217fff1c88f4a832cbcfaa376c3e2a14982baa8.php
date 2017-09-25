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
        $__internal_ae909bb81b1cea1aa078fce42e8bde6d159f20b0ebbe791dd1b33a978b71432d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae909bb81b1cea1aa078fce42e8bde6d159f20b0ebbe791dd1b33a978b71432d->enter($__internal_ae909bb81b1cea1aa078fce42e8bde6d159f20b0ebbe791dd1b33a978b71432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_30888723448de8d52b47fc0bdad624b6d07abd07dc3b0a1a7ae5889f376b3ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30888723448de8d52b47fc0bdad624b6d07abd07dc3b0a1a7ae5889f376b3ee6->enter($__internal_30888723448de8d52b47fc0bdad624b6d07abd07dc3b0a1a7ae5889f376b3ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        
        $__internal_ae909bb81b1cea1aa078fce42e8bde6d159f20b0ebbe791dd1b33a978b71432d->leave($__internal_ae909bb81b1cea1aa078fce42e8bde6d159f20b0ebbe791dd1b33a978b71432d_prof);

        
        $__internal_30888723448de8d52b47fc0bdad624b6d07abd07dc3b0a1a7ae5889f376b3ee6->leave($__internal_30888723448de8d52b47fc0bdad624b6d07abd07dc3b0a1a7ae5889f376b3ee6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_975888b8e08300cd75e551fc9ee8267bde377bdc4d1b4442a74dd5140229aa02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975888b8e08300cd75e551fc9ee8267bde377bdc4d1b4442a74dd5140229aa02->enter($__internal_975888b8e08300cd75e551fc9ee8267bde377bdc4d1b4442a74dd5140229aa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_927c0aa00085631865298d424aa0222be7f97fd452302a0392c685bc5c14b796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927c0aa00085631865298d424aa0222be7f97fd452302a0392c685bc5c14b796->enter($__internal_927c0aa00085631865298d424aa0222be7f97fd452302a0392c685bc5c14b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_927c0aa00085631865298d424aa0222be7f97fd452302a0392c685bc5c14b796->leave($__internal_927c0aa00085631865298d424aa0222be7f97fd452302a0392c685bc5c14b796_prof);

        
        $__internal_975888b8e08300cd75e551fc9ee8267bde377bdc4d1b4442a74dd5140229aa02->leave($__internal_975888b8e08300cd75e551fc9ee8267bde377bdc4d1b4442a74dd5140229aa02_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fb1c8f2f74079034368326d4b369b9ccf2b7b27aceb14919755cbb39257d9689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1c8f2f74079034368326d4b369b9ccf2b7b27aceb14919755cbb39257d9689->enter($__internal_fb1c8f2f74079034368326d4b369b9ccf2b7b27aceb14919755cbb39257d9689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_83dff583889500ab86fa96723ccdd38a2154c87f5f3af8ba7c3a7cbc0218f971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dff583889500ab86fa96723ccdd38a2154c87f5f3af8ba7c3a7cbc0218f971->enter($__internal_83dff583889500ab86fa96723ccdd38a2154c87f5f3af8ba7c3a7cbc0218f971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_83dff583889500ab86fa96723ccdd38a2154c87f5f3af8ba7c3a7cbc0218f971->leave($__internal_83dff583889500ab86fa96723ccdd38a2154c87f5f3af8ba7c3a7cbc0218f971_prof);

        
        $__internal_fb1c8f2f74079034368326d4b369b9ccf2b7b27aceb14919755cbb39257d9689->leave($__internal_fb1c8f2f74079034368326d4b369b9ccf2b7b27aceb14919755cbb39257d9689_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_79eaf798ced527e7c554736220b514befc330ef4818f2e6e55ad11dfb18e4a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79eaf798ced527e7c554736220b514befc330ef4818f2e6e55ad11dfb18e4a7c->enter($__internal_79eaf798ced527e7c554736220b514befc330ef4818f2e6e55ad11dfb18e4a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1addbb7ad9bd09dfebe420e3fd914906375e36488184c99ab125d0a7a18ae0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1addbb7ad9bd09dfebe420e3fd914906375e36488184c99ab125d0a7a18ae0c6->enter($__internal_1addbb7ad9bd09dfebe420e3fd914906375e36488184c99ab125d0a7a18ae0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1addbb7ad9bd09dfebe420e3fd914906375e36488184c99ab125d0a7a18ae0c6->leave($__internal_1addbb7ad9bd09dfebe420e3fd914906375e36488184c99ab125d0a7a18ae0c6_prof);

        
        $__internal_79eaf798ced527e7c554736220b514befc330ef4818f2e6e55ad11dfb18e4a7c->leave($__internal_79eaf798ced527e7c554736220b514befc330ef4818f2e6e55ad11dfb18e4a7c_prof);

    }

    // line 104
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_58d3f9fbb01965dcb8e21376c9fca90d277217c7986bb8b67f9a17bdd6448e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d3f9fbb01965dcb8e21376c9fca90d277217c7986bb8b67f9a17bdd6448e97->enter($__internal_58d3f9fbb01965dcb8e21376c9fca90d277217c7986bb8b67f9a17bdd6448e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f04d528a0440cbc7881d22439e9cee1bfd9af71b2f01fe2f6a27932521c32fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04d528a0440cbc7881d22439e9cee1bfd9af71b2f01fe2f6a27932521c32fc1->enter($__internal_f04d528a0440cbc7881d22439e9cee1bfd9af71b2f01fe2f6a27932521c32fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_f04d528a0440cbc7881d22439e9cee1bfd9af71b2f01fe2f6a27932521c32fc1->leave($__internal_f04d528a0440cbc7881d22439e9cee1bfd9af71b2f01fe2f6a27932521c32fc1_prof);

        
        $__internal_58d3f9fbb01965dcb8e21376c9fca90d277217c7986bb8b67f9a17bdd6448e97->leave($__internal_58d3f9fbb01965dcb8e21376c9fca90d277217c7986bb8b67f9a17bdd6448e97_prof);

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
