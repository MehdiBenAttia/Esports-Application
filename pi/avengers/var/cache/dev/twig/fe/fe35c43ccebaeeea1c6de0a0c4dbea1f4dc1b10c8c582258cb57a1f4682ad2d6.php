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

/* competition/detail.html.twig */
class __TwigTemplate_13de2cba2ec1ceb67584aece2d514d5cfecfdd6c3d267361b0eb65c95bd4e35f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/detail.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "competition/detail.html.twig", 1);
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
    <div class=\"col-lg-8\">
        <!-- START: Post -->
        <div class=\"nk-blog-post nk-blog-post-single\">
            <!-- START: Post Text -->
            <div class=\"nk-post-text mt-0\">

                <div class=\"nk-gap-1\"></div>
                <h1 class=\"nk-post-title h3\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
                <div class=\"nk-post-img\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" alt=\"Grab your sword and fight the Horde\">
                </div>
                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-text\">
                    <span class=\"nk-post-title h4\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 18, $this->source); })()), "jeux", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo " </span></br>
                    <div class=\"nk-post-categories\">
                        <span class=\"bg-main-3\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 20, $this->source); })()), "nbparticipants", [], "any", false, false, false, 20), "html", null, true);
        echo " Participants</span>
                        <span class=\"bg-main-1\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 21, $this->source); })()), "jeux", [], "any", false, false, false, 21), "categorie", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"nk-post-date mt-10 mb-10\">
                        <span class=\"fa fa-calendar\"></span> ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 24, $this->source); })()), "dateDeb", [], "any", false, false, false, 24), "m/d/y"), "html", null, true);
        echo "
                        <span class=\"fa fa-calendar\"></span> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 25, $this->source); })()), "dateFin", [], "any", false, false, false, 25), "m/d/y"), "html", null, true);
        echo "
                    </div>
                    <div class=\"nk-post-text\"><p>Allez-y!       Inscrivez vous et tentez votre chance pour rejoindre le podium </p></div>

                </div>




                <div class=\"nk-gap\"></div>

                <div class=\"nk-gap\"></div>


                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-share\">
                    <span class=\"h5\">Partager la compétition: </span>

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
        <!-- END: Post -->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  105 => 24,  99 => 21,  95 => 20,  90 => 18,  83 => 14,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}

    <div class=\"col-lg-8\">
        <!-- START: Post -->
        <div class=\"nk-blog-post nk-blog-post-single\">
            <!-- START: Post Text -->
            <div class=\"nk-post-text mt-0\">

                <div class=\"nk-gap-1\"></div>
                <h1 class=\"nk-post-title h3\">{{ competition.nom }}</h1>
                <div class=\"nk-post-img\">
                    <img src=\"{{ asset('/uploads/images/'~ competition.image) }}\" alt=\"Grab your sword and fight the Horde\">
                </div>
                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-text\">
                    <span class=\"nk-post-title h4\">{{ competition.jeux.nom }} </span></br>
                    <div class=\"nk-post-categories\">
                        <span class=\"bg-main-3\">{{ competition.nbparticipants }} Participants</span>
                        <span class=\"bg-main-1\">{{ competition.jeux.categorie.nom }}</span>
                    </div>
                    <div class=\"nk-post-date mt-10 mb-10\">
                        <span class=\"fa fa-calendar\"></span> {{ competition.dateDeb|date(\"m/d/y\") }}
                        <span class=\"fa fa-calendar\"></span> {{ competition.dateFin|date(\"m/d/y\") }}
                    </div>
                    <div class=\"nk-post-text\"><p>Allez-y!       Inscrivez vous et tentez votre chance pour rejoindre le podium </p></div>

                </div>




                <div class=\"nk-gap\"></div>

                <div class=\"nk-gap\"></div>


                <div class=\"nk-gap\"></div>
                <div class=\"nk-post-share\">
                    <span class=\"h5\">Partager la compétition: </span>

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
        <!-- END: Post -->
    </div>


{% endblock %}", "competition/detail.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\detail.html.twig");
    }
}
