<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categorie/affichcat.html.twig */
class __TwigTemplate_ac091cbbfc15a1239673eee4280e14447bc907b0f73024160250cf8a410f5544 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/affichcat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/affichcat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/affichcat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


    <div class=\"col-lg-12 grid-margin stretch-card\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">type table</h4>
                <p class=\"card-description\">
                    <code>.all product types and providers </code>
                </p>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Acat");
        echo "\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter une catégorie</a>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th> ";
        // line 20
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 20, $this->source); })()), "ideee", "id");
        echo " </th>
                            <th> nom_categ </th>
                            <th> nom_fournisseur </th>
                            <th> mail_fournisseur </th>
                            <th> nbr_produits </th>



                            <th>delete</th>
                            <th>update</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            echo ">
                            <td> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                            <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nom_categ", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nom_fournisseur", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                            <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "mail_fournisseur", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "f", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>







                            <td>  <a  href=\" ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dcateg", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo " \"  >
                                    <img src=\"back/images/faces/bin.png\" alt=\"image\"/>



                                </a>


                            </td>

                            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Upc", ["id" => twig_get_attribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" > Update</a> </td>




                        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo ">




                        </tbody>
                    </table>
                    <div class=\"alert-danger\"   >
                        ";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 71, $this->source); })()));
        echo "
                    <br>
                    </div>
                    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
                            type=\"text/javascript\"></script>
                    <script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
                    <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
                    <script type=\"text/javascript\">
                        ";
        // line 79
        echo $this->extensions['Ob\HighchartsBundle\Twig\HighchartsExtension']->chart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 79, $this->source); })()));
        echo "
                    </script>
                    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 83
        echo "                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/affichcat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 83,  190 => 79,  179 => 71,  169 => 63,  157 => 58,  144 => 48,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  111 => 35,  93 => 20,  85 => 15,  81 => 14,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}



    <div class=\"col-lg-12 grid-margin stretch-card\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">type table</h4>
                <p class=\"card-description\">
                    <code>.all product types and providers </code>
                </p>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('Acat') }}\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter une catégorie</a>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('home') }}\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th> {{ knp_pagination_sortable(categorie,'ideee','id')}} </th>
                            <th> nom_categ </th>
                            <th> nom_fournisseur </th>
                            <th> mail_fournisseur </th>
                            <th> nbr_produits </th>



                            <th>delete</th>
                            <th>update</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr {% for g in categorie %}>
                            <td> {{ g.id }}</td>
                            <td> {{ g.nom_categ }}</td>
                            <td> {{ g.nom_fournisseur }}</td>
                            <td> {{ g.mail_fournisseur }}</td>
                            <td>{{ g.f }}</td>







                            <td>  <a  href=\" {{ path('dcateg',{'id':g.id}) }} \"  >
                                    <img src=\"back/images/faces/bin.png\" alt=\"image\"/>



                                </a>


                            </td>

                            <td><a href=\"{{ path('Upc',{'id':g.id}) }}\" > Update</a> </td>




                        </tr {% endfor %}>




                        </tbody>
                    </table>
                    <div class=\"alert-danger\"   >
                        {{ knp_pagination_render(categorie) }}
                    <br>
                    </div>
                    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
                            type=\"text/javascript\"></script>
                    <script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
                    <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
                    <script type=\"text/javascript\">
                        {{ chart(chart) }}
                    </script>
                    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>{# empty
Twig template #}
                </div>
            </div>
        </div>
    </div>



{% endblock %}", "categorie/affichcat.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\categorie\\affichcat.html.twig");
    }
}
