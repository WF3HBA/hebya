<?php

/* innovator/innovator.html.twig */
class __TwigTemplate_f028357b55723dfea02ee43dc2e42d69d51f31c08db130fe442ea3e94a0e3b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "innovator/innovator.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/innovators/innovators.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"parallax\" data-image=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img-innovator/hosted_by_africa_innovators.jpg"), "html", null, true);
        echo "\"></div>
    <main>
        <section id=\"innovators-header\">
            <div class=\"container\">
                <div class=\"row\">
";
        // line 18
        echo "                    <div class=\"col-xs-12 text-center\">
                        <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nos innovateurs"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"row all-select-innovators\">
                    ";
        // line 34
        echo "                    <div class=\"col-xs-offset-1 col-xs-12  col-sm-offset-3 col-sm-6 \">
                        <form id=\"filter-form\">
                            <select class=\"col-xs-12 innovators-select-pays\">
                                <option value=\"\">choissisez un pays</option>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 39
            echo "                                <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </select>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section><br><br>
              
        <section id=\"innovators-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"innovator-list\">
                        ";
        // line 53
        $this->loadTemplate("innovator/innovatorList.html.twig", "innovator/innovator.html.twig", 53)->display($context);
        // line 54
        echo "                    </div>                  
                </div>                    
            </div>  
        </section>
    </main>
";
    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        // line 65
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.imageScroll.min.js"), "html", null, true);
        echo "\"></script>
     <script>
        var countrySelect = '";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_ajax");
        echo "';
        
    </script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/innovators/innovators.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"script/jquery.parallax-1.1.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "innovator/innovator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 71,  126 => 68,  121 => 66,  116 => 65,  113 => 64,  104 => 54,  102 => 53,  88 => 41,  79 => 39,  75 => 38,  69 => 34,  62 => 19,  59 => 18,  51 => 11,  48 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "innovator/innovator.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovator.html.twig");
    }
}
