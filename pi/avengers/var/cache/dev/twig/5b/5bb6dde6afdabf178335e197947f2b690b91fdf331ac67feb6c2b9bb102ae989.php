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

/* produit/ajax.html.twig */
class __TwigTemplate_a793e0513332fdc61ef587847aeca01a6a12c77cc80e64e065bf6924e476699e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajax.html.twig"));

        // line 1
        echo "<div class=\"row vertical-gap\" id=\"all\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 3
            echo "

        <div class=\"col-md-6\"  >
            <div class=\"nk-product-cat\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfrontdetail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"nk-post-img\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 8))), "html", null, true);
            echo "\" alt=\"Grab your sword and fight the Horde\">

                    <span class=\"nk-post-categories\">
                          <span class=\"bg-main-1\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 11), "nomcateg", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
                                </span>

                </a>

                <div class=\"nk-blog-post\">
                    <h3 class=\"nk-product-title h5\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfrontdetail", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</a></h3>
                    <div class=\"nk-gap-1\"></div>


                    <div class=\"stars\">
                        <i class=\"lar la-star\" data-value=\"1\"></i>
                        <i class=\"lar la-star\" data-value=\"2\"></i>
                        <i class=\"lar la-star\" data-value=\"3\"></i>
                        <i class=\"lar la-star\" data-value=\"4\"></i>
                        <i class=\"lar la-star\" data-value=\"5\"></i>
                    </div>

                    <div class=\"nk-gap-1\"></div>

                    <div class=\"nk-product-price\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prix", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
                    <div class=\"nk-gap-1\"></div>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>
                </div>
            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
























</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  94 => 31,  75 => 17,  66 => 11,  60 => 8,  56 => 7,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row vertical-gap\" id=\"all\">
    {% for c in produit %}


        <div class=\"col-md-6\"  >
            <div class=\"nk-product-cat\">
                <a href=\"{{ path('affichfrontdetail',{'id':c.id}) }}\" class=\"nk-post-img\">
                    <img src=\"{{asset('images/'~c.image)}}\" alt=\"Grab your sword and fight the Horde\">

                    <span class=\"nk-post-categories\">
                          <span class=\"bg-main-1\">{{ c.categorie.nomcateg }}</span>
                                </span>

                </a>

                <div class=\"nk-blog-post\">
                    <h3 class=\"nk-product-title h5\"><a href=\"{{ path('affichfrontdetail',{'id':c.id}) }}\">{{ c.nom }}</a></h3>
                    <div class=\"nk-gap-1\"></div>


                    <div class=\"stars\">
                        <i class=\"lar la-star\" data-value=\"1\"></i>
                        <i class=\"lar la-star\" data-value=\"2\"></i>
                        <i class=\"lar la-star\" data-value=\"3\"></i>
                        <i class=\"lar la-star\" data-value=\"4\"></i>
                        <i class=\"lar la-star\" data-value=\"5\"></i>
                    </div>

                    <div class=\"nk-gap-1\"></div>

                    <div class=\"nk-product-price\">{{ c.prix }}</div>
                    <div class=\"nk-gap-1\"></div>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>
                </div>
            </div>
        </div>


    {% endfor %}

























</div>", "produit/ajax.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\ajax.html.twig");
    }
}
