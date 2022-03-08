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

/* /jeux/Affiche.html.twig */
class __TwigTemplate_98cc661007eccd4eeda4c37282cf8993f689d057bd6462b62ba1b53657d75be5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/jeux/Affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/jeux/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/jeux/Affiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "


";
        // line 34
        echo "
";
        // line 36
        echo "
";
        // line 40
        echo "
";
        // line 44
        echo "
";
        // line 47
        echo "
    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Les jeux disponibles</h4>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AJ");
        echo "\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter un nouveau jeu</a>
                <a class=\"btn btn-outline-dark \" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>

                ";
        // line 58
        echo "
    ";
        // line 60
        echo "    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>Nom du jeu</th>
                            <th>Image</th>
                            <th>Categorie</th>
                            <th>Nbr de compétition</th>
                            <th>Date de sortie</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class=\"table-hover\">
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 82
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>

                            <td><img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 85))), "html", null, true);
            echo "\" alt=\"\" width=\"150\" ></td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "c", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "f", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>

                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dates", [], "any", false, false, false, 89), "m/d/y"), "html", null, true);
            echo "</td>


                            <td>
                                <a class=\"btn btn-outline-dark\" type=\"button\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UJ", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" ><i class=\"fa-solid fa-pen\"></i>Update</a>
                            </td>
                            <td><a class=\"btn btn-outline-danger\" type=\"button\" href=\" ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dJ", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo " \" ><i class=\"fa-solid fa-trash\"></i>Delete   </a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        // line 108
        echo "
";
        // line 126
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/jeux/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 126,  187 => 108,  178 => 98,  169 => 95,  164 => 93,  157 => 89,  152 => 87,  148 => 86,  144 => 85,  139 => 83,  134 => 82,  130 => 81,  110 => 63,  108 => 62,  106 => 61,  104 => 60,  101 => 58,  96 => 53,  92 => 52,  85 => 47,  82 => 44,  79 => 40,  76 => 36,  73 => 34,  68 => 24,  58 => 23,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block stylesheets %}#}

{#{% endblock %}#}

{#{% block stylesheets %}#}

{#        <link href=\"{{ asset('vendors/feather/feather.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('vendors/ti-icons/css/themify-icons.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('vendors/css/vendor.bundle.base.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('vendors/ti-icons/css/themify-icons.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('js/select.dataTables.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('css/vertical-layout-light/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />#}
{#        <link href=\"{{ asset('images/favicon.png') }}\" type=\"text/css\" rel=\"shortcut icon\" />#}
{#    #}



{#{% endblock %}#}

{% block body %}



{#    <div class=\"card-body stretch-card\">#}
{#    <div class=\"slideshow-container \" style=\"width:50%\" >#}
{#    {% for var in jeux %}#}
{#        <div class=\"mySlides fade \">#}
{#            <img src=\"{{ asset('/uploads/images/'~var.image) }}\" style=\"width:100%;border-radius:25px;display: flex\">#}
{#            <img src=\"Uploads/Images/slider1.jpg\" style=\"width:100%;border-radius:25px;display: flex\">#}
{#        </div>#}

{#        {% endfor %}#}

{#        <div class=\"mySlides fade\">#}
{#            <img src=\"Uploads/Images/slider2.jpg\" style=\"width:100%;border-radius:25px;display: flex\">#}
{#        </div>#}

{#        <div class=\"mySlides fade\">#}
{#            <img src=\"Uploads/Images/slider3.jpg\" style=\"width:100%;border-radius:25px;display: flex\">#}
{#        </div>#}

{#    </div>#}
{#    </div>#}

    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Les jeux disponibles</h4>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('AJ') }}\" ><i class=\"fa-solid fa-circle-plus\"></i> Ajouter un nouveau jeu</a>
                <a class=\"btn btn-outline-dark \" href=\"{{ path('home') }}\" ><i class=\"fa-solid fa-house-user\"></i> Home</a>

                {#                <p class=\"card-description\">#}
{#                    Add class <code>.table-{color}</code>#}
{#                </p>#}

    {#                <form action=\"{{ path('jeux') }}\">#}
    {#                    <input type=\"text\" placeholder=\"search\" name=\"a\">#}
    {#                    <input type=\"submit\" value=\"Search\">#}
    {#                </form>#}
                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>Nom du jeu</th>
                            <th>Image</th>
                            <th>Categorie</th>
                            <th>Nbr de compétition</th>
                            <th>Date de sortie</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class=\"table-hover\">
                            {%  for var in jeux %}
                            <td>{{ var.id }}</td>
                            <td>{{ var.nom }}</td>

                            <td><img src=\"{{ asset('/uploads/images/'~var.image) }}\" alt=\"\" width=\"150\" ></td>
                                <td>{{ var.c }}</td>
                                <td>{{ var.f }}</td>

                            <td>{{ var.dates|date(\"m/d/y\") }}</td>


                            <td>
                                <a class=\"btn btn-outline-dark\" type=\"button\" href=\"{{ path('UJ',{'id':var.id}) }}\" ><i class=\"fa-solid fa-pen\"></i>Update</a>
                            </td>
                            <td><a class=\"btn btn-outline-danger\" type=\"button\" href=\" {{ path('dJ',{'id':var.id}) }} \" ><i class=\"fa-solid fa-trash\"></i>Delete   </a></td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{#    <script>#}
{#        var slideIndex = 0;#}
{#        showSlides();#}

{#        function showSlides() {#}
{#            var i;#}
{#            var slides = document.getElementsByClassName(\"mySlides\");#}
{#            // var dots = document.getElementsByClassName(\"dot\");#}
{#            for (i = 0; i < slides.length; i++) {#}
{#                slides[i].style.display = \"none\";#}
{#            }#}
{#            slideIndex++;#}
{#            if (slideIndex > slides.length) {slideIndex = 1}#}
{#            // for (i = 0; i < dots.length; i++) {#}
{#            //     dots[i].className = dots[i].className.replace(\" active\", \"\");#}
{#            // }#}
{#            slides[slideIndex-1].style.display = \"block\";#}
{#            // dots[slideIndex-1].className += \" active\";#}
{#            setTimeout(showSlides, 2000); // Change image every 2 seconds#}
{#        }#}
{#    </script>#}

{% endblock body %}


", "/jeux/Affiche.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\jeux\\Affiche.html.twig");
    }
}
