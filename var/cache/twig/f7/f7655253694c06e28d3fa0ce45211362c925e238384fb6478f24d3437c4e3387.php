<?php

/* mention/mention.html.twig */
class __TwigTemplate_b4f0d785cfdf498fb01692755bcf979d35087581c7a1d1dcd943317cf5388763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "mention/mention.html.twig", 1);
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
        $__internal_b083ca63873d73dde26163f5d9f2e4567829a385c7066b632017eaa65075318a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b083ca63873d73dde26163f5d9f2e4567829a385c7066b632017eaa65075318a->enter($__internal_b083ca63873d73dde26163f5d9f2e4567829a385c7066b632017eaa65075318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mention/mention.html.twig"));

        $__internal_b095320156ea27311213e8673a4b0fd68f3d578da78f52c98dcc97f5874a9d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b095320156ea27311213e8673a4b0fd68f3d578da78f52c98dcc97f5874a9d2c->enter($__internal_b095320156ea27311213e8673a4b0fd68f3d578da78f52c98dcc97f5874a9d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mention/mention.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b083ca63873d73dde26163f5d9f2e4567829a385c7066b632017eaa65075318a->leave($__internal_b083ca63873d73dde26163f5d9f2e4567829a385c7066b632017eaa65075318a_prof);

        
        $__internal_b095320156ea27311213e8673a4b0fd68f3d578da78f52c98dcc97f5874a9d2c->leave($__internal_b095320156ea27311213e8673a4b0fd68f3d578da78f52c98dcc97f5874a9d2c_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_02298907105a0de28143574f3bb4116957a1c066c81a34505052d84c30c87a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02298907105a0de28143574f3bb4116957a1c066c81a34505052d84c30c87a04->enter($__internal_02298907105a0de28143574f3bb4116957a1c066c81a34505052d84c30c87a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_15f5ee7a079af2e7a46b21b03754d56dc67ed82ba5c0359086fbd5104378ac84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f5ee7a079af2e7a46b21b03754d56dc67ed82ba5c0359086fbd5104378ac84->enter($__internal_15f5ee7a079af2e7a46b21b03754d56dc67ed82ba5c0359086fbd5104378ac84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mention/mention.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_15f5ee7a079af2e7a46b21b03754d56dc67ed82ba5c0359086fbd5104378ac84->leave($__internal_15f5ee7a079af2e7a46b21b03754d56dc67ed82ba5c0359086fbd5104378ac84_prof);

        
        $__internal_02298907105a0de28143574f3bb4116957a1c066c81a34505052d84c30c87a04->leave($__internal_02298907105a0de28143574f3bb4116957a1c066c81a34505052d84c30c87a04_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_9395e181d04078c52ef33b94028d05906624928104833210428d9dcb5213107a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9395e181d04078c52ef33b94028d05906624928104833210428d9dcb5213107a->enter($__internal_9395e181d04078c52ef33b94028d05906624928104833210428d9dcb5213107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_830236d431272da6a2a212ee148afce4f0721352c9ee94cc1788a76fcc8d4976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830236d431272da6a2a212ee148afce4f0721352c9ee94cc1788a76fcc8d4976->enter($__internal_830236d431272da6a2a212ee148afce4f0721352c9ee94cc1788a76fcc8d4976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    
    

<main>
      
            <div class=\"container\">
                                  
                    <div class=\"row\">    
    
                                <h1>Mentions Légales</h1>

                            <h2>1. Présentation de notre site web</h2>

                            <p>  Conformément à la loi n° 2004-2005 du 21 juin 2004 pour la confiance dans l'économie numérique, notre site web créé par <a href=\"www.wf3.fr\" title=\"Web Force 3\">Web Force 3</a>, propriétaire du site <a href=\"www.wf3.fr\" title=\"Web Force 3\">www.wf3.fr</a>, met à disposition du public les informations concernant notre entreprise.<br />
                            Eventuellement modifiables, nous vous invitons donc à consulter nos mentions légales le plus souvent possible, de manière à en prendre connaissance fréquemment</p>

                            <p>  Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> appartient à Hebya, dont le siège social est situé à l'adresse suivante : N 8 Résidence Al Baraka Rue Londres Vn 50000, Meknès, Maroc.<br />
                            Personne physique ou morale, Hebya est responsable de la publication, dont l'adresse e-mail est la suivante : <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a><br />
                            Le webmaster, Hebya, est responsable de l'administration du site, dont l'adresse e-mail est la suivante : <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>.<br />
                            Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> est hébergé par OVH, dont le siège social est localisé à l'adresse suivante : 2 rue Kellermann, 59100 Roubaix, France.</p>



                            <h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

                            <p>  En utilisant notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, vous acceptez pleinement et entièrement les conditions générales d'utilisation précisées dans nos mentions légales. Accessible à tout type de visiteurs, il est important de préciser toutefois qu'une interruption pour maintenance du site web peut-être décidée par Hebya. Les dates et heures d'interruptions seront néanmoins précisées à l'avance aux utilisateurs.</p>

                            <h2>3. Les produits ou services proposés par <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a></h2>

                            <p>  En accord avec sa politique de communication, le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> a pour vocation d'informer les utilisateurs sur les services proposés par Hebya, qui s'efforce alors de fournir des informations précises sur son activité. Cependant, des inexactitudes ou des omissions peuvent exister : la société ne pourra en aucun cas être tenue pour responsable pour toute erreur présente sur le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>.</p>

                            <h2>4. Limitations contractuelles</h2>

                            <p>  Les informations retranscrites sur notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> font l’objet de démarches qualitatives, en vue de nous assurer de leur fiabilité. Cependant, nous ne pourrons encourir de responsabilités en cas d’inexactitudes techniques lors de nos explications.<br />
                            Si vous constatez une erreur concernant des informations que nous auront pu omettre, n’hésitez pas à nous le signaler par mail à <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>.</p>

                            <p>  Les liens reliés directement ou indirectement à notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne sont pas sous le contrôle de notre société. Par conséquent, nous ne pouvons nous assurer de l’exactitude des informations présentes sur ces autres sites Internet.</p>

                            <p>  Utilisant la technologie JavaScript, le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne pourra être tenu pour responsable en cas de dommages matériels liés à son utilisation. Par ailleurs, toute autre type de conséquence liée à l'exploitation du site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, qu'elle soit direct ou indirect (bug, incompatibilité, virus, perte de marché, etc.).</p>

                            <h2>5. Propriété intellectuelle et contenu du site Internet</h2>

                            <p>  Le contenu rédactionnel du site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> appartient exclusivement à Hebya. Toute violation des droits d’auteur est sanctionnée par l’article L.335-2 du Code de la Propriété Intellectuelle, avec une peine encourue de 2 ans d’emprisonnement et de 150 000€ d’amende.</p>

                            <p>  Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne pourra être mis en cause en cas de propos injurieux, à caractère raciste, diffamant ou pornographique, échangés sur les espaces interactifs. La société se réserve également le droit de supprimer tout contenu contraire aux valeurs de l'entreprise ou à la législation applicable en France.</p>

                            <p>  En naviguant sur le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, l'utilisateur accepte également l'installation de cookies éventuelle sur son ordinateur.</p>

                            <h2>6. Données personnelles, respect de votre vie privée et de vos libertés</h2>

                            <p>  Toute informations recueillie sur le site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> se font dans le cadre des besoins liés à l'utilisation de notre plateforme, tels que le formulaire de commande ou la demande d'inscription à la Newsletter. Par ailleurs, le désabonnement de la Newsletter se fait grâce au lien situé en pied de page.<br />
                            Hebya s'engage à ne céder en aucun cas les informations concernant les utilisateurs du site Internet, de quelque façon qu'il soit (vente, échange, prêt, location, don).</p>

                            <p>  Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, l’utilisateur bénéficie d’un droit d’accès et de rectification aux informations le concernant, droit qu’il peut exercer à tout moment en adressant un mail à l’adresse <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>, ou en effectuant sa demande par courrier, à l’adresse suivante : N 8 Résidence Al Baraka Rue Londres Vn 50000, Meknès, Maroc.</p>



                            <h2>7. Droit applicable et lois concernées</h2>

                            <p>  Soumis au droit français, le site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> est encadré par la loi n° 2004-2005 du 21 juin 2004 pour la confiance dans l'économie numérique, l’article L.335-2 du Code de la Propriété Intellectuelle et la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004.</p>



      
                                  
                    </div>
                        
           </div>

    </main>
";
        
        $__internal_830236d431272da6a2a212ee148afce4f0721352c9ee94cc1788a76fcc8d4976->leave($__internal_830236d431272da6a2a212ee148afce4f0721352c9ee94cc1788a76fcc8d4976_prof);

        
        $__internal_9395e181d04078c52ef33b94028d05906624928104833210428d9dcb5213107a->leave($__internal_9395e181d04078c52ef33b94028d05906624928104833210428d9dcb5213107a_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2d4c648067d78bd5c8e8808b96317a51d3fa5610b7eaa8749dba748448bd01b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4c648067d78bd5c8e8808b96317a51d3fa5610b7eaa8749dba748448bd01b2->enter($__internal_2d4c648067d78bd5c8e8808b96317a51d3fa5610b7eaa8749dba748448bd01b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_8a582c4ed5a44a8632c9796258df86631aebc593ebb26a8cb80a44a867a6a086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a582c4ed5a44a8632c9796258df86631aebc593ebb26a8cb80a44a867a6a086->enter($__internal_8a582c4ed5a44a8632c9796258df86631aebc593ebb26a8cb80a44a867a6a086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

";
        
        $__internal_8a582c4ed5a44a8632c9796258df86631aebc593ebb26a8cb80a44a867a6a086->leave($__internal_8a582c4ed5a44a8632c9796258df86631aebc593ebb26a8cb80a44a867a6a086_prof);

        
        $__internal_2d4c648067d78bd5c8e8808b96317a51d3fa5610b7eaa8749dba748448bd01b2->leave($__internal_2d4c648067d78bd5c8e8808b96317a51d3fa5610b7eaa8749dba748448bd01b2_prof);

    }

    public function getTemplateName()
    {
        return "mention/mention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 82,  157 => 81,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block stylesheet %}
    {{ parent() }}   
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/mention/mention.css\") }}\"/>
{% endblock %}

{% block content %}
    
    

<main>
      
            <div class=\"container\">
                                  
                    <div class=\"row\">    
    
                                <h1>Mentions Légales</h1>

                            <h2>1. Présentation de notre site web</h2>

                            <p>  Conformément à la loi n° 2004-2005 du 21 juin 2004 pour la confiance dans l'économie numérique, notre site web créé par <a href=\"www.wf3.fr\" title=\"Web Force 3\">Web Force 3</a>, propriétaire du site <a href=\"www.wf3.fr\" title=\"Web Force 3\">www.wf3.fr</a>, met à disposition du public les informations concernant notre entreprise.<br />
                            Eventuellement modifiables, nous vous invitons donc à consulter nos mentions légales le plus souvent possible, de manière à en prendre connaissance fréquemment</p>

                            <p>  Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> appartient à Hebya, dont le siège social est situé à l'adresse suivante : N 8 Résidence Al Baraka Rue Londres Vn 50000, Meknès, Maroc.<br />
                            Personne physique ou morale, Hebya est responsable de la publication, dont l'adresse e-mail est la suivante : <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a><br />
                            Le webmaster, Hebya, est responsable de l'administration du site, dont l'adresse e-mail est la suivante : <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>.<br />
                            Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> est hébergé par OVH, dont le siège social est localisé à l'adresse suivante : 2 rue Kellermann, 59100 Roubaix, France.</p>



                            <h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

                            <p>  En utilisant notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, vous acceptez pleinement et entièrement les conditions générales d'utilisation précisées dans nos mentions légales. Accessible à tout type de visiteurs, il est important de préciser toutefois qu'une interruption pour maintenance du site web peut-être décidée par Hebya. Les dates et heures d'interruptions seront néanmoins précisées à l'avance aux utilisateurs.</p>

                            <h2>3. Les produits ou services proposés par <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a></h2>

                            <p>  En accord avec sa politique de communication, le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> a pour vocation d'informer les utilisateurs sur les services proposés par Hebya, qui s'efforce alors de fournir des informations précises sur son activité. Cependant, des inexactitudes ou des omissions peuvent exister : la société ne pourra en aucun cas être tenue pour responsable pour toute erreur présente sur le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>.</p>

                            <h2>4. Limitations contractuelles</h2>

                            <p>  Les informations retranscrites sur notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> font l’objet de démarches qualitatives, en vue de nous assurer de leur fiabilité. Cependant, nous ne pourrons encourir de responsabilités en cas d’inexactitudes techniques lors de nos explications.<br />
                            Si vous constatez une erreur concernant des informations que nous auront pu omettre, n’hésitez pas à nous le signaler par mail à <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>.</p>

                            <p>  Les liens reliés directement ou indirectement à notre site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne sont pas sous le contrôle de notre société. Par conséquent, nous ne pouvons nous assurer de l’exactitude des informations présentes sur ces autres sites Internet.</p>

                            <p>  Utilisant la technologie JavaScript, le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne pourra être tenu pour responsable en cas de dommages matériels liés à son utilisation. Par ailleurs, toute autre type de conséquence liée à l'exploitation du site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, qu'elle soit direct ou indirect (bug, incompatibilité, virus, perte de marché, etc.).</p>

                            <h2>5. Propriété intellectuelle et contenu du site Internet</h2>

                            <p>  Le contenu rédactionnel du site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> appartient exclusivement à Hebya. Toute violation des droits d’auteur est sanctionnée par l’article L.335-2 du Code de la Propriété Intellectuelle, avec une peine encourue de 2 ans d’emprisonnement et de 150 000€ d’amende.</p>

                            <p>  Le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> ne pourra être mis en cause en cas de propos injurieux, à caractère raciste, diffamant ou pornographique, échangés sur les espaces interactifs. La société se réserve également le droit de supprimer tout contenu contraire aux valeurs de l'entreprise ou à la législation applicable en France.</p>

                            <p>  En naviguant sur le site <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a>, l'utilisateur accepte également l'installation de cookies éventuelle sur son ordinateur.</p>

                            <h2>6. Données personnelles, respect de votre vie privée et de vos libertés</h2>

                            <p>  Toute informations recueillie sur le site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> se font dans le cadre des besoins liés à l'utilisation de notre plateforme, tels que le formulaire de commande ou la demande d'inscription à la Newsletter. Par ailleurs, le désabonnement de la Newsletter se fait grâce au lien situé en pied de page.<br />
                            Hebya s'engage à ne céder en aucun cas les informations concernant les utilisateurs du site Internet, de quelque façon qu'il soit (vente, échange, prêt, location, don).</p>

                            <p>  Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, l’utilisateur bénéficie d’un droit d’accès et de rectification aux informations le concernant, droit qu’il peut exercer à tout moment en adressant un mail à l’adresse <a href=\"mailto:contact@hebya.com\">contact@hebya.com</a>, ou en effectuant sa demande par courrier, à l’adresse suivante : N 8 Résidence Al Baraka Rue Londres Vn 50000, Meknès, Maroc.</p>



                            <h2>7. Droit applicable et lois concernées</h2>

                            <p>  Soumis au droit français, le site web <a href=\"www.hebya.com\" title=\"Hebya\">www.hebya.com</a> est encadré par la loi n° 2004-2005 du 21 juin 2004 pour la confiance dans l'économie numérique, l’article L.335-2 du Code de la Propriété Intellectuelle et la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004.</p>



      
                                  
                    </div>
                        
           </div>

    </main>
{% endblock %}

{% block javascript %}
    {{ parent() }}

{% endblock %}", "mention/mention.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\mention\\mention.html.twig");
    }
}
