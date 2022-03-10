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

/* competition/games.html.twig */
class __TwigTemplate_9c97751cedee79482ea9e6213d7c069bfe7c64b45503d36839cae4dde4b36b71 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/games.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/games.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "competition/games.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"col-lg-12\">
        <!-- START: Post -->
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 12
            echo "        <div class=\"nk-blog-post nk-blog-post-single\">
            <!-- START: Post Text -->
            <div class=\"nk-post-text mt-0\">
                <div class=\"nk-post-img\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"Grab your sword and fight the Horde\">
                </div>
                <div class=\"nk-gap-1\"></div>
                <h1 class=\"nk-post-title h4\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
                <div class=\"nk-post-date\">
                    <span class=\"fa fa-calendar\"></span> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dates", [], "any", false, false, false, 21), "m/d/y"), "html", null, true);
            echo "
                </div>
                <div class=\"nk-post-by\">

                    <div class=\"nk-post-categories\">
                        <span class=\"bg-main-1\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "categorie", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                    </div>

                </div>
                <div class=\"nk-gap\"></div>

                <div class=\"nk-gap\"></div>


                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-share\">
                    <span class=\"h5\">Partagez le jeu sur :</span>
                    <ul class=\"nk-social-links-2\">
                        <li><span class=\"nk-social-facebook\" title=\"Share page on Facebook\" data-share=\"facebook\"><span class=\"fab fa-facebook\"></span></span></li>
                        <li><span class=\"nk-social-google-plus\" title=\"Share page on Google+\" data-share=\"google-plus\"><span class=\"fab fa-google-plus\"></span></span></li>
                        <li><span class=\"nk-social-twitter\" title=\"Share page on Twitter\" data-share=\"twitter\"><span class=\"fab fa-twitter\"></span></span></li>
                        <li><span class=\"nk-social-pinterest\" title=\"Share page on Pinterest\" data-share=\"pinterest\"><span class=\"fab fa-pinterest-p\"></span></span></li>

                        <!-- Additional Share Buttons
                            <li><span class=\"nk-social-linkedin\" title=\"Share page on LinkedIn\" data-share=\"linkedin\"><span class=\"fab fa-linkedin\"></span></span></li>
                            <li><span class=\"nk-social-vk\" title=\"Share page on VK\" data-share=\"vk\"><span class=\"fab fa-vk\"></span></span></li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- END: Post Text -->





        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <div class=\"nk-gap-2\"></div>
        <div class=\"nk-gap\"></div>
        <div class=\"nk-pagination nk-pagination-center nk-pagination-current\">
            ";
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 64, $this->source); })()));
        echo "
            ";
        // line 66
        echo "
            <nav>

                ";
        // line 70
        echo "                ";
        // line 71
        echo "                ";
        // line 72
        echo "                ";
        // line 73
        echo "                ";
        // line 74
        echo "                ";
        // line 75
        echo "            </nav>
            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "        </div>
        <!-- END: Post -->
    </div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/games.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 79,  175 => 78,  173 => 77,  170 => 75,  168 => 74,  166 => 73,  164 => 72,  162 => 71,  160 => 70,  155 => 66,  150 => 64,  148 => 63,  143 => 59,  104 => 26,  96 => 21,  91 => 19,  85 => 16,  79 => 12,  75 => 11,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'front.html.twig' %}



{% block body %}



    <div class=\"col-lg-12\">
        <!-- START: Post -->
    {% for var in jeux %}
        <div class=\"nk-blog-post nk-blog-post-single\">
            <!-- START: Post Text -->
            <div class=\"nk-post-text mt-0\">
                <div class=\"nk-post-img\">
                    <img src=\"{{ asset('/uploads/images/'~ var.image) }}\" alt=\"Grab your sword and fight the Horde\">
                </div>
                <div class=\"nk-gap-1\"></div>
                <h1 class=\"nk-post-title h4\">{{ var.nom }}</h1>
                <div class=\"nk-post-date\">
                    <span class=\"fa fa-calendar\"></span> {{ var.dates|date(\"m/d/y\") }}
                </div>
                <div class=\"nk-post-by\">

                    <div class=\"nk-post-categories\">
                        <span class=\"bg-main-1\">{{ var.categorie.nom }}</span>
                    </div>

                </div>
                <div class=\"nk-gap\"></div>

                <div class=\"nk-gap\"></div>


                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-share\">
                    <span class=\"h5\">Partagez le jeu sur :</span>
                    <ul class=\"nk-social-links-2\">
                        <li><span class=\"nk-social-facebook\" title=\"Share page on Facebook\" data-share=\"facebook\"><span class=\"fab fa-facebook\"></span></span></li>
                        <li><span class=\"nk-social-google-plus\" title=\"Share page on Google+\" data-share=\"google-plus\"><span class=\"fab fa-google-plus\"></span></span></li>
                        <li><span class=\"nk-social-twitter\" title=\"Share page on Twitter\" data-share=\"twitter\"><span class=\"fab fa-twitter\"></span></span></li>
                        <li><span class=\"nk-social-pinterest\" title=\"Share page on Pinterest\" data-share=\"pinterest\"><span class=\"fab fa-pinterest-p\"></span></span></li>

                        <!-- Additional Share Buttons
                            <li><span class=\"nk-social-linkedin\" title=\"Share page on LinkedIn\" data-share=\"linkedin\"><span class=\"fab fa-linkedin\"></span></span></li>
                            <li><span class=\"nk-social-vk\" title=\"Share page on VK\" data-share=\"vk\"><span class=\"fab fa-vk\"></span></span></li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- END: Post Text -->





        </div>
    {% endfor %}
        <div class=\"nk-gap-2\"></div>
        <div class=\"nk-gap\"></div>
        <div class=\"nk-pagination nk-pagination-center nk-pagination-current\">
            {#    <a href=\"#\" class=\"nk-pagination-prev\">#}
            {#        <span class=\"ion-ios-arrow-back\"></span>#}
            {{ knp_pagination_render(jeux) }}
            {#    </a>#}

            <nav>

                {#        <a class=\"nk-pagination-current\" href=\"#\">1</a>#}
                {#        <a href=\"#\">2</a>#}
                {#        <a href=\"#\">3</a>#}
                {#        <a href=\"#\">4</a>#}
                {#        <span>...</span>#}
                {#        <a href=\"#\">14</a>#}
            </nav>
            {#    <a href=\"#\" class=\"nk-pagination-next\">#}
            {#        <span class=\"ion-ios-arrow-forward\"></span>#}
            {#    </a>#}
        </div>
        <!-- END: Post -->
    </div>





{% endblock %}", "competition/games.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\games.html.twig");
    }
}
