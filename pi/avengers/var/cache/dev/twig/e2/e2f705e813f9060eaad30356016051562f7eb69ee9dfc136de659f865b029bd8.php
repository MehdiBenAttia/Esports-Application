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

/* categorie/ajoutcat.html.twig */
class __TwigTemplate_9e7954df328672fabc93e15a73d0e0063c7d9533810e470478065f33dbd79123 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/ajoutcat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/ajoutcat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/ajoutcat.html.twig", 1);
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

    <div class=\"card-body\">
        <h4 class=\"card-title\">Ajouter une categorie</h4>
        <p class=\"card-description\">
        </p>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<form class=\"forms-sample\">

            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 14, $this->source); })()), "nom_categ", [], "any", false, false, false, 14), 'label', ["label" => "nom_categ"]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), "nom_categ", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom_categ"]]);
        echo "

            </div>
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 19, $this->source); })()), "nom_fournisseur", [], "any", false, false, false, 19), 'label', ["label" => "nom_fournisseur"]);
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 20, $this->source); })()), "nom_fournisseur", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom_fournisseur"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "mail_fournisseur", [], "any", false, false, false, 23), 'label', ["label" => "mail_fournisseur"]);
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 24, $this->source); })()), "mail_fournisseur", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "mail_fournisseur"]]);
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 25, $this->source); })()), "mail_fournisseur", [], "any", false, false, false, 25), 'errors');
        echo "
            </div>





            <div class=\"form-check form-check-flat form-check-primary\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" class=\"form-check-input\">
                    Remember me
                </label>
            </div>

            <div class=\"input-group col-md-6\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "submit", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), "cancel", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "btn btn-danger"]]);
        echo "
            </div>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/ajoutcat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  135 => 41,  131 => 40,  113 => 25,  109 => 24,  105 => 23,  99 => 20,  95 => 19,  88 => 15,  84 => 14,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


    <div class=\"card-body\">
        <h4 class=\"card-title\">Ajouter une categorie</h4>
        <p class=\"card-description\">
        </p>

        {{ form_start(f,{'attr': {'novalidate': 'novalidate'}}) }}
<form class=\"forms-sample\">

            <div class=\"form-group\">
                {{ form_label(f.nom_categ, 'nom_categ', ) }}
                {{ form_widget(f.nom_categ, {'attr': {'class': 'form-control','placeholder': 'nom_categ'}}) }}

            </div>
            <div class=\"form-group\">
                {{ form_label(f.nom_fournisseur, 'nom_fournisseur', ) }}
                {{ form_widget(f.nom_fournisseur, {'attr': {'class': 'form-control','placeholder': 'nom_fournisseur'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(f.mail_fournisseur, 'mail_fournisseur', ) }}
                {{ form_widget(f.mail_fournisseur, {'attr': {'class': 'form-control','placeholder': 'mail_fournisseur'}}) }}
                {{ form_errors(f.mail_fournisseur) }}
            </div>





            <div class=\"form-check form-check-flat form-check-primary\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" class=\"form-check-input\">
                    Remember me
                </label>
            </div>

            <div class=\"input-group col-md-6\">
                {{ form_widget(f.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                {{ form_widget(f.cancel, {'attr': {'class': 'btn btn-danger' }}) }}
            </div>
            {{ form_end(f) }}
        </form>

    </div>





{% endblock %}", "categorie/ajoutcat.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\categorie\\ajoutcat.html.twig");
    }
}
