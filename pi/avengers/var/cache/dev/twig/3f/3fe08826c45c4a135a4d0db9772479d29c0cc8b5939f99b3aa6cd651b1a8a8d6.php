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

/* competition/ajax.html.twig */
class __TwigTemplate_7df1983b6abfd5e825bb38527f64842f6be1e1ca82556ae45ce314ec372e597c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/ajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 2
            echo "    <div class=\"col-lg-3 col-md-5\" >
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 3)]), "html", null, true);
            echo "\" class=\"nk-post-img\">
            <img style=\"display: flex\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 4))), "html", null, true);
            echo "\" alt=\"At length one of them called out in a clear\">
            <div class=\"nk-gap\"></div>
                <span class=\"nk-post-categories\">
                    <span class=\"bg-main-1\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "jeux", [], "any", false, false, false, 7), "categorie", [], "any", false, false, false, 7), "nom", [], "any", false, false, false, 7), "html", null, true);
            echo " </span>
                </span>
        </a>
    </div>
    <div class=\"col-lg-9 col-md-7\">
        <h2 class=\"nk-post-title h4\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "  </a></h2>
";
            // line 15
            echo "        <div class=\"nk-post-date mt-10 mb-10\">
            <span class=\"fa fa-calendar\"></span> ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dateDeb", [], "any", false, false, false, 16), "m/d/y"), "html", null, true);
            echo "
            <span class=\"fa fa-calendar\"></span> ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dateFin", [], "any", false, false, false, 17), "m/d/y"), "html", null, true);
            echo "
            ";
            // line 18
            $context["datePost"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dateDeb", [], "any", false, false, false, 18), "d-m-Y");
            // line 19
            echo "            ";
            $context["today"] = twig_date_format_filter($this->env, "now", "d-m-Y");
            // line 20
            echo "            ";
            $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 20, $this->source); })())), "diff", [0 => twig_date_converter($this->env, (isset($context["datePost"]) || array_key_exists("datePost", $context) ? $context["datePost"] : (function () { throw new RuntimeError('Variable "datePost" does not exist.', 20, $this->source); })()))], "method", false, false, false, 20);
            // line 21
            echo "            ";
            $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 21, $this->source); })()), "days", [], "any", false, false, false, 21);
            // line 22
            echo "
            ";
            // line 23
            if ((0 === twig_compare((isset($context["datePost"]) || array_key_exists("datePost", $context) ? $context["datePost"] : (function () { throw new RuntimeError('Variable "datePost" does not exist.', 23, $this->source); })()), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 23, $this->source); })())))) {
                // line 24
                echo "                <div class=\"badge badge-success float-right\" style=\"font-size: small\">1 day</div>
            ";
            } elseif ((-1 === twig_compare(twig_date_converter($this->env,             // line 25
(isset($context["datePost"]) || array_key_exists("datePost", $context) ? $context["datePost"] : (function () { throw new RuntimeError('Variable "datePost" does not exist.', 25, $this->source); })())), twig_date_converter($this->env, (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 25, $this->source); })()))))) {
                // line 26
                echo "                <div class=\"badge badge-danger float-right \" style=\"font-size: small\">expiré</div>
            ";
            } else {
                // line 28
                echo "                <div class=\"badge badge-success float-right\"style=\"font-size: small\">";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 28, $this->source); })()), "html", null, true);
                echo " jours restantes</div>
            ";
            }
            // line 30
            echo "        </div>


        <div class=\"nk-post-text\">
            <p>Allez-y!       Inscrivez vous et tentez votre chance pour rejoindre le podium </p>
        </div>
        ";
            // line 36
            if ((0 === twig_compare((isset($context["datePost"]) || array_key_exists("datePost", $context) ? $context["datePost"] : (function () { throw new RuntimeError('Variable "datePost" does not exist.', 36, $this->source); })()), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 36, $this->source); })())))) {
                // line 37
                echo "            <a class=\"btn btn-light btn-sm\">S'inscrire</a>
        ";
            } elseif ((-1 === twig_compare(twig_date_converter($this->env,             // line 38
(isset($context["datePost"]) || array_key_exists("datePost", $context) ? $context["datePost"] : (function () { throw new RuntimeError('Variable "datePost" does not exist.', 38, $this->source); })())), twig_date_converter($this->env, (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 38, $this->source); })()))))) {
                // line 39
                echo "        ";
            } else {
                // line 40
                echo "            <a class=\"btn btn-outline-secondary btn-sm \">S'inscrire</a>
        ";
            }
            // line 42
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competition/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  138 => 42,  134 => 40,  131 => 39,  129 => 38,  126 => 37,  124 => 36,  116 => 30,  110 => 28,  106 => 26,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  85 => 18,  81 => 17,  77 => 16,  74 => 15,  68 => 12,  60 => 7,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for var  in jeux %}
    <div class=\"col-lg-3 col-md-5\" >
        <a href=\"{{ path('detail',{'id' : var.id}) }}\" class=\"nk-post-img\">
            <img style=\"display: flex\" src=\"{{ asset('/uploads/images/'~ var.image) }}\" alt=\"At length one of them called out in a clear\">
            <div class=\"nk-gap\"></div>
                <span class=\"nk-post-categories\">
                    <span class=\"bg-main-1\">{{ var.jeux.categorie.nom }} </span>
                </span>
        </a>
    </div>
    <div class=\"col-lg-9 col-md-7\">
        <h2 class=\"nk-post-title h4\"><a href=\"{{ path('detail',{'id' : var.id}) }}\">{{ var.nom }}  </a></h2>
{#        <span class=\"nk-post-tags\">{{ var.jeux.nom }} </span></br>#}
{#        <span class=\"nk-post-tags\">{{ var.nbparticipants }} Participants</span>#}
        <div class=\"nk-post-date mt-10 mb-10\">
            <span class=\"fa fa-calendar\"></span> {{ var.dateDeb|date(\"m/d/y\") }}
            <span class=\"fa fa-calendar\"></span> {{ var.dateFin|date(\"m/d/y\") }}
            {% set datePost = var.dateDeb|date('d-m-Y') %}
            {% set today = \"now\"|date('d-m-Y') %}
            {% set difference = date(today).diff(date(datePost))%}
            {% set leftDays = difference.days %}

            {% if datePost == today %}
                <div class=\"badge badge-success float-right\" style=\"font-size: small\">1 day</div>
            {% elseif date(datePost)<(date(today)) %}
                <div class=\"badge badge-danger float-right \" style=\"font-size: small\">expiré</div>
            {% else %}
                <div class=\"badge badge-success float-right\"style=\"font-size: small\">{{ leftDays }} jours restantes</div>
            {% endif %}
        </div>


        <div class=\"nk-post-text\">
            <p>Allez-y!       Inscrivez vous et tentez votre chance pour rejoindre le podium </p>
        </div>
        {% if datePost == today %}
            <a class=\"btn btn-light btn-sm\">S'inscrire</a>
        {% elseif date(datePost)<(date(today)) %}
        {% else %}
            <a class=\"btn btn-outline-secondary btn-sm \">S'inscrire</a>
        {% endif %}
    </div>
{% endfor %}





", "competition/ajax.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\ajax.html.twig");
    }
}
