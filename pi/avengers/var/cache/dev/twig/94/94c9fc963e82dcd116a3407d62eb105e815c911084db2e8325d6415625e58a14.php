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

/* produit/imp.html.twig */
class __TwigTemplate_d35d4bee61b7b0a6ac6f29ba45f488944c6e7f91184adc45873ae10b9ae53a49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/imp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/imp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <div id=\"logo\">
        E-TSports
    </div>
    <h1 align=\"center\">E-TSports Shop </h1>
    <hr></hr>
    <h4 >Nom du produit ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 15, $this->source); })()), "Id", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Nom </span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo " </div>
        <div><span>Reference</span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "reference", [], "any", false, false, false, 19), "html", null, true);
        echo "  </div>
        <div class=\"alert-danger\"><span class=\"alert-danger\">Prix</span> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), "html", null, true);
        echo " </div>



    </div><hr></hr>
    <div id=\"project\">
        <div><span>Categorie</span> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 26, $this->source); })()), "categorie", [], "any", false, false, false, 26), "nomcateg", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
        <div><span>Fournisseur</span> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), "nomfournisseur", [], "any", false, false, false, 27), "html", null, true);
        echo " </div>
    </div>
</header>

<hr></hr>

<div id=\"notices\">
    <div>NOTICE:</div>
    <div class=\"notice\">l'equipe etsports vous propose de bon plan</div>
</div>
</main>

</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/imp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <div id=\"logo\">
        E-TSports
    </div>
    <h1 align=\"center\">E-TSports Shop </h1>
    <hr></hr>
    <h4 >Nom du produit {{ produit.Id }}</h4>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Nom </span> {{ produit.nom }} </div>
        <div><span>Reference</span> {{ produit.reference}}  </div>
        <div class=\"alert-danger\"><span class=\"alert-danger\">Prix</span> {{ produit.prix}} </div>



    </div><hr></hr>
    <div id=\"project\">
        <div><span>Categorie</span> {{ produit.categorie.nomcateg }}</div>
        <div><span>Fournisseur</span> {{ produit.categorie.nomfournisseur }} </div>
    </div>
</header>

<hr></hr>

<div id=\"notices\">
    <div>NOTICE:</div>
    <div class=\"notice\">l'equipe etsports vous propose de bon plan</div>
</div>
</main>

</body>", "produit/imp.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\imp.html.twig");
    }
}
