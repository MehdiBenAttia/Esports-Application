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

/* competition/AfficheC.html.twig */
class __TwigTemplate_6df445377bf7f28da9b0386317ba696952ac2882cff0ace437552175952d717f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/AfficheC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/AfficheC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competition/AfficheC.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Les compétitions disponibles</h4>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ac");
        echo "\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter une compétition</a>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Compétition
                                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("croissantN");
        echo "\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decroissantN");
        echo "\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Jeu</th>
                            <th>nbparticipants</th>
                            <th>Image</th>
                            <th>
                                Date de début
                                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("croissant");
        echo "\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decroissant");
        echo "\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Date de fin
                                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("croissantF");
        echo "\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decroissantF");
        echo "\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class=\"table-hover\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 39
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "jeux", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nbparticipants", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"\" width=\"150\">
                            </td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dateDeb", [], "any", false, false, false, 45), "m/d/y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dateFin", [], "any", false, false, false, 46), "m/d/y"), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-outline-dark\" type=\"button\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Uc", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" ><i class=\"fa-solid fa-pen\"></i>Update</a>
                            </td>
                            <td><a class=\"btn btn-outline-danger\" type=\"button\" href=\" ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dc", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo " \" ><i class=\"fa-solid fa-trash\"></i>Delete   </a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <style>
                #calendrier{
                    width: 80%;
                    margin: auto;
                }
            </style>
            <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">

            <div id=\"calendrier\"></div>


            <script>
                window.onload = () =>{
                    let calendarElt = document.querySelector(\"#calendrier\")


                    let calendar = new FullCalendar.Calendar(calendarElt,{
                        initialView: 'dayGridMonth',
                        locale: 'fr',
                        timeZone: 'Europe/Paris',
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek'
                        },
                        events: ";
        // line 83
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })());
        echo "

                    })
                    calendar.render();
                }
            </script>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/AfficheC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 83,  177 => 53,  168 => 50,  163 => 48,  158 => 46,  154 => 45,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  132 => 39,  128 => 38,  117 => 30,  113 => 29,  107 => 26,  103 => 25,  93 => 18,  89 => 17,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Les compétitions disponibles</h4>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('Ac') }}\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter une compétition</a>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('home') }}\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>
                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Compétition
                                <a href=\"{{ path('croissantN') }}\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"{{ path('decroissantN') }}\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Jeu</th>
                            <th>nbparticipants</th>
                            <th>Image</th>
                            <th>
                                Date de début
                                <a href=\"{{ path('croissant') }}\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"{{ path('decroissant') }}\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Date de fin
                                <a href=\"{{ path('croissantF') }}\"><i class=\"fa-solid fa-arrow-circle-up\"></i></a>
                                <a href=\"{{ path('decroissantF') }}\"><i class=\"fa-solid fa-arrow-circle-down\"></i></a>
                            </th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class=\"table-hover\">
                            {%  for var in competition %}
                            <td>{{ var.id() }}</td>
                            <td>{{ var.nom }}</td>
                            <td>{{ var.jeux.nom }}</td>
                            <td>{{ var.nbparticipants }}</td>
                            <td><img src=\"{{ asset('/uploads/images/'~var.image) }}\" alt=\"\" width=\"150\">
                            </td>
                            <td>{{ var.dateDeb|date(\"m/d/y\") }}</td>
                            <td>{{ var.dateFin|date(\"m/d/y\") }}</td>
                            <td>
                                <a class=\"btn btn-outline-dark\" type=\"button\" href=\"{{ path('Uc',{'id':var.id}) }}\" ><i class=\"fa-solid fa-pen\"></i>Update</a>
                            </td>
                            <td><a class=\"btn btn-outline-danger\" type=\"button\" href=\" {{ path('dc',{'id':var.id}) }} \" ><i class=\"fa-solid fa-trash\"></i>Delete   </a></td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <style>
                #calendrier{
                    width: 80%;
                    margin: auto;
                }
            </style>
            <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">

            <div id=\"calendrier\"></div>


            <script>
                window.onload = () =>{
                    let calendarElt = document.querySelector(\"#calendrier\")


                    let calendar = new FullCalendar.Calendar(calendarElt,{
                        initialView: 'dayGridMonth',
                        locale: 'fr',
                        timeZone: 'Europe/Paris',
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek'
                        },
                        events: {{ data|raw }}

                    })
                    calendar.render();
                }
            </script>
        </div>
    </div>
{% endblock body %}", "competition/AfficheC.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\AfficheC.html.twig");
    }
}
