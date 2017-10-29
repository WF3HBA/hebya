<?php

/* admin/adminProduct.html.twig */
class __TwigTemplate_f8163922a9f3ca15cdd699309bfcc098053a08b4746dc0f78c1dbe3848a0ec45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/adminProduct.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a07f32a7b5346e479c968618b98418d194c6611eeda66b96150067abce6b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a07f32a7b5346e479c968618b98418d194c6611eeda66b96150067abce6b38->enter($__internal_75a07f32a7b5346e479c968618b98418d194c6611eeda66b96150067abce6b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProduct.html.twig"));

        $__internal_c5ba812086c39d394f3b3f16098cf38f82c7faa1f07eae60bea0331b0f52f82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ba812086c39d394f3b3f16098cf38f82c7faa1f07eae60bea0331b0f52f82d->enter($__internal_c5ba812086c39d394f3b3f16098cf38f82c7faa1f07eae60bea0331b0f52f82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/adminProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a07f32a7b5346e479c968618b98418d194c6611eeda66b96150067abce6b38->leave($__internal_75a07f32a7b5346e479c968618b98418d194c6611eeda66b96150067abce6b38_prof);

        
        $__internal_c5ba812086c39d394f3b3f16098cf38f82c7faa1f07eae60bea0331b0f52f82d->leave($__internal_c5ba812086c39d394f3b3f16098cf38f82c7faa1f07eae60bea0331b0f52f82d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7aee1f05bd095cd9a52c20720fb5514f56c94893f1c99210a20b5846da5eb4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aee1f05bd095cd9a52c20720fb5514f56c94893f1c99210a20b5846da5eb4b8->enter($__internal_7aee1f05bd095cd9a52c20720fb5514f56c94893f1c99210a20b5846da5eb4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c0a6f59d4dc9975c0fcbcaa05f22df61c7e15be710f8aab7dd1e0bedad8acb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a6f59d4dc9975c0fcbcaa05f22df61c7e15be710f8aab7dd1e0bedad8acb5b->enter($__internal_c0a6f59d4dc9975c0fcbcaa05f22df61c7e15be710f8aab7dd1e0bedad8acb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Produit</h2>
            <p>Admin <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_edit");
        echo "\">add product</a></p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Nom</th>
                    <th>Site</th>
                    <th>Domaine</th>
                    <th>Innovateur</th>
                    <th>Status</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 20, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "website", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "field", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "providerCompany", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "status", array()), "html", null, true);
            echo "</td>
                         <td>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "idproduct", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">modifier</button></a>
                        </td>
                        <td>
                             <a href=\" ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "idproduct", array()))), "html", null, true);
            echo "\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo " 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </table>
        </div>
    </div>   

";
        
        $__internal_c0a6f59d4dc9975c0fcbcaa05f22df61c7e15be710f8aab7dd1e0bedad8acb5b->leave($__internal_c0a6f59d4dc9975c0fcbcaa05f22df61c7e15be710f8aab7dd1e0bedad8acb5b_prof);

        
        $__internal_7aee1f05bd095cd9a52c20720fb5514f56c94893f1c99210a20b5846da5eb4b8->leave($__internal_7aee1f05bd095cd9a52c20720fb5514f56c94893f1c99210a20b5846da5eb4b8_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  113 => 34,  104 => 31,  98 => 28,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  69 => 20,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin/admin.html.twig\" %}


{% block content %}

    <div class=\"col-md-9 col-md-offset-2 table-listing\">
        <div class=\"row\">
            <h2>Produit</h2>
            <p>Admin <a href=\"{{ path('admin_product_edit')}}\">add product</a></p>
            <table class=\"table table-striped\">
                <tr class=\"info\">
                    <th>Nom</th>
                    <th>Site</th>
                    <th>Domaine</th>
                    <th>Innovateur</th>
                    <th>Status</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                {% for product in products%}
                    <tr>
                        <td>{{ product.name }}</td>
                        <td>{{ product.website }}</td>
                        <td>{{ product.field }}</td>
                        <td>{{ product.providerCompany }}</td>
                        <td>{{ product.status }}</td>
                         <td>
                            <a href=\"{{ path('admin_product_edit', {id: product.idproduct}) }}\"><button class=\"btn btn-primary\">modifier</button></a>
                        </td>
                        <td>
                             <a href=\" {{path('admin_product_delete', {id: product.idproduct}) }}\"><button id=\"annuler\" name=\"annuler\" class=\"btn btn-danger\">delete</button></a>
                        </td>
                    </tr>
                {% else %} 
                    <tr><td colspan=\"2\">Aucun résultat</td></tr>
                {% endfor %}
            </table>
        </div>
    </div>   

{% endblock %}", "admin/adminProduct.html.twig", "C:\\wamp64\\www\\hebya\\templates\\admin\\adminProduct.html.twig");
    }
}
