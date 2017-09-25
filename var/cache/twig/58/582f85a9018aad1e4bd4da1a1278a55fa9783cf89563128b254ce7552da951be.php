<?php

/* innovator/innovatorList.html.twig */
class __TwigTemplate_ea826e866631f433060a5928b543194b4b16f9c3346caaa8b4063238e62d82d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 2
            echo "                        <div class=\"test col-lg-3 col-sm-6 text-center mb-4\">
                            <div class=\"box\">
                                <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">

                                <div class=\"box-content\">
                                    <h3 class=\"title\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h3>
                                    <p class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</p>
                                        <!-- Button trigger modal -->
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalLong-";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\">
                                      Détails
                                    </button>
                                </div>
                            </div>
                        </div>  
                                      
                         ";
            // line 18
            echo "                        <div class=\"modal fade\" id=\"exampleModalLong-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "idprovider", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                          <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                  <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "lastname", array()), "html", null, true);
            echo "</h2>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                  <span aria-hidden=\"true\">&times;</span>
                                </button>
                              </div>
                              
                              <div class=\"modal-footer text-center\">
                                <div class=\"col-xs-4\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "picture", array())), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"col-xs-7\">
                                    <h3 class=\"col-xs-12 text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "company", array()), "html", null, true);
            echo "</h3>                                
                                    <div class=\"text-center\"> ";
            // line 34
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["provider"], "description", array());
            echo "</div> 
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                                </div>
                              </div>
                            </div>       
                          </div>
                        </div>    
                         ";
            // line 41
            echo "        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
";
    }

    public function getTemplateName()
    {
        return "innovator/innovatorList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  96 => 41,  86 => 34,  82 => 33,  76 => 30,  63 => 22,  55 => 18,  45 => 10,  40 => 8,  34 => 7,  28 => 4,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "innovator/innovatorList.html.twig", "C:\\xampp\\htdocs\\hebya\\templates\\innovator\\innovatorList.html.twig");
    }
}
