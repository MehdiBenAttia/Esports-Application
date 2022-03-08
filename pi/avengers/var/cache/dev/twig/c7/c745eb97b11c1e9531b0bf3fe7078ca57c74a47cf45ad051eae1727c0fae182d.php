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

/* categorie_c/AjoutCat.html.twig */
class __TwigTemplate_4ba5f90863e2f9b60d63fa1d9e1cf9ac06dcd8795bef3612958cda156986de15 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_c/AjoutCat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_c/AjoutCat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie_c/AjoutCat.html.twig", 1);
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
        echo "    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter une catégorie</h4>
        <a class=\"btn btn-outline-dark \" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheCateg");
        echo "\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les catégories  </a>
        <p class=\"card-description\">
        </p>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label" => "Nom de la compétition"]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la compétition"]]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
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
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 25, $this->source); })()), "submit", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 26, $this->source); })()), "cancel", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "
            </div>

            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fcat"]) || array_key_exists("fcat", $context) ? $context["fcat"] : (function () { throw new RuntimeError('Variable "fcat" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie_c/AjoutCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  110 => 26,  106 => 25,  94 => 16,  90 => 15,  86 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter une catégorie</h4>
        <a class=\"btn btn-outline-dark \" href=\"{{ path('AfficheCateg') }}\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les catégories  </a>
        <p class=\"card-description\">
        </p>

        {{ form_start(fcat) }}
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                {{ form_label(fcat.nom, 'Nom de la compétition', ) }}
                {{ form_widget(fcat.nom, {'attr': {'class': 'form-control','placeholder': 'Nom de la compétition'}}) }}
                {{ form_errors(fcat.nom) }}
            </div>
            <div class=\"form-check form-check-flat form-check-primary\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" class=\"form-check-input\">
                    Remember me
                </label>
            </div>
            <div class=\"input-group col-md-6\">
                {{ form_widget(fcat.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                {{ form_widget(fcat.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}
            </div>

            {{ form_end(fcat) }}
        </form>

    </div>
{% endblock %}
", "categorie_c/AjoutCat.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\categorie_c\\AjoutCat.html.twig");
    }
}
