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

/* produit/affiche.html.twig */
class __TwigTemplate_565cd55baedb8fb51993cd46766ff58560fb0d43d9e0bfeb016634b0b4afbea6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/affiche.html.twig", 1);
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
                <h4 class=\"card-title\">Product Table</h4>
                <p class=\"card-description\">
                    <code>Sort Product By Price</code>
                </p>

                <div class=\"btn-group-horizental\" role=\"group\" aria-label=\"Basic example\" >
                    <a class=\"btn btn-outline-dark \" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("A");
        echo "\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter un produit</a>
                    <a class=\"btn btn-outline-dark \" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DESC");
        echo "\">
                        <i class=\"ti-upload\" ></i>
                    </a>

                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affich");
        echo "\">
                        <i class=\"ti-split-v\"></i>
                    </a>

                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ASC");
        echo "\">
                        <i class=\"ti-download\"></i>
                    </a>

                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\" width=\"50%\">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> reference </th>
                            <th> nom </th>
                            <th> marque </th>
                            <th> prix </th>
                            <th> image </th>

                            <th> nom categorie </th>
                            <th > description </th>
                            <th> note  </th>


                            <th>delete</th>
                            <th>update</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">

                            <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>

                            <td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "reference", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                            <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>

                            <td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "marque", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prix", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>

                            <td>
                                <img class=\"img-fluid\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 66))), "html", null, true);
            echo "\" >
                            </td>




                                <td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom_categ", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>


                            <td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "type", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                            ";
            // line 76
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["c"], "e", [], "any", false, false, false, 76), 5))) {
                // line 77
                echo "
                                <td class=\"text-success\"> ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "e", [], "any", false, false, false, 78), "html", null, true);
                echo " <i class=\"ti-arrow-up\"></i></td>
                            ";
            } else {
                // line 80
                echo "                                <td class=\"text-danger\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "e", [], "any", false, false, false, 80), "html", null, true);
                echo " <i class=\"ti-arrow-down\"></i></td>


                            ";
            }
            // line 84
            echo "
                            <td>  <a  href=\" ";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("d", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo " \"  >
                                    <img src=\"back/images/faces/bin.png\" alt=\"image\"/>



                                </a>


                            </td>

                            <td class=\"badge badge-warning\"><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("U", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" > Update</a> </td>




                        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo ">



                        </tbody>
                    </table>
";
        // line 107
        echo "
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 107,  233 => 100,  221 => 95,  208 => 85,  205 => 84,  197 => 80,  192 => 78,  189 => 77,  187 => 76,  183 => 75,  177 => 72,  168 => 66,  162 => 63,  158 => 62,  153 => 60,  149 => 59,  144 => 57,  137 => 55,  105 => 26,  98 => 22,  91 => 18,  87 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}




    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Product Table</h4>
                <p class=\"card-description\">
                    <code>Sort Product By Price</code>
                </p>

                <div class=\"btn-group-horizental\" role=\"group\" aria-label=\"Basic example\" >
                    <a class=\"btn btn-outline-dark \" href=\"{{ path('A') }}\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter un produit</a>
                    <a class=\"btn btn-outline-dark \" href=\"{{ path('home') }}\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"{{ path('DESC') }}\">
                        <i class=\"ti-upload\" ></i>
                    </a>

                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"{{ path('affich') }}\">
                        <i class=\"ti-split-v\"></i>
                    </a>

                    <a type=\"button\" class=\"btn btn-outline-secondary\" href=\"{{ path('ASC') }}\">
                        <i class=\"ti-download\"></i>
                    </a>

                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped\" width=\"50%\">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> reference </th>
                            <th> nom </th>
                            <th> marque </th>
                            <th> prix </th>
                            <th> image </th>

                            <th> nom categorie </th>
                            <th > description </th>
                            <th> note  </th>


                            <th>delete</th>
                            <th>update</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr {% for c in produit  %}>

                            <td> {{ c.id }}</td>

                            <td> {{ c.reference }}</td>
                            <td> {{ c.nom }}</td>

                            <td> {{ c.marque }}</td>
                            <td> {{ c.prix }}</td>

                            <td>
                                <img class=\"img-fluid\" src=\"{{asset('images/'~c.image)}}\" >
                            </td>




                                <td> {{ c.nom_categ}}</td>


                            <td> {{ c.type }}</td>
                            {% if c.e >=5 %}

                                <td class=\"text-success\"> {{ c.e}} <i class=\"ti-arrow-up\"></i></td>
                            {% else %}
                                <td class=\"text-danger\"> {{ c.e}} <i class=\"ti-arrow-down\"></i></td>


                            {% endif %}

                            <td>  <a  href=\" {{ path('d',{'id':c.id}) }} \"  >
                                    <img src=\"back/images/faces/bin.png\" alt=\"image\"/>



                                </a>


                            </td>

                            <td class=\"badge badge-warning\"><a href=\"{{ path('U',{'id':c.id}) }}\" > Update</a> </td>




                        </tr {% endfor %}>



                        </tbody>
                    </table>
{#                    {{ knp_pagination_render(produit) }}#}

                </div>
            </div>
        </div>
    </div>



{% endblock %}", "produit/affiche.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\affiche.html.twig");
    }
}
