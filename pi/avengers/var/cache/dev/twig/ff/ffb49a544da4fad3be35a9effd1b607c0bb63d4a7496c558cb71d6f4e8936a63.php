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

/* jeux/Ajout.html.twig */
class __TwigTemplate_e84196107ee9f8a8afc52d6c14043fec10accb298dd8e69f2f9e2c58165a5b9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/Ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/Ajout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/Ajout.html.twig", 1);
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
        echo "<div class=\"card-body\">
    <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter un jeu</h4>
    <a class=\"btn btn-outline-dark \" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheJ");
        echo "\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les jeux  </a>
    <p class=\"card-description\">
    </p>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
    <form class=\"forms-sample\">

        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label" => "Nom du jeu"]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du jeu"]]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

        </div>
        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 20, $this->source); })()), "imageFile", [], "any", false, false, false, 20), 'label', ["label" => "Image du jeu"]);
        echo "
";
        // line 23
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "imageFile", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "
";
        // line 25
        echo "        </div>
        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), 'label', ["label" => "Catégorie"]);
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type du jeu"]]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), 'errors');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "dates", [], "any", false, false, false, 32), 'label', ["label" => "Date de sortie"]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 33, $this->source); })()), "dates", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), "dates", [], "any", false, false, false, 34), 'errors');
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
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), "submit", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "cancel", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "
        </div>

        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
    </form>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux/Ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  152 => 44,  148 => 43,  136 => 34,  132 => 33,  128 => 32,  122 => 29,  118 => 28,  114 => 27,  110 => 25,  105 => 23,  101 => 20,  94 => 16,  90 => 15,  86 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card-body\">
    <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter un jeu</h4>
    <a class=\"btn btn-outline-dark \" href=\"{{ path('AfficheJ') }}\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les jeux  </a>
    <p class=\"card-description\">
    </p>

    {{ form_start(f) }}
    <form class=\"forms-sample\">

        <div class=\"form-group\">
            {{ form_label(f.nom, 'Nom du jeu', ) }}
            {{ form_widget(f.nom, {'attr': {'class': 'form-control','placeholder': 'Nom du jeu'}}) }}
            {{ form_errors(f.nom,{'attr': {'class':'text-danger'}}) }}

        </div>
        <div class=\"form-group\">
            {{ form_label(f.imageFile, 'Image du jeu', ) }}
{#                <input type=\"text\" class=\"form-control file-upload-info\" disabled>#}
{#                <span class=\"input-group-append\">#}
                    {{ form_row(f.imageFile,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}
{#                </span>#}
        </div>
        <div class=\"form-group\">
            {{ form_label(f.categorie, 'Catégorie', ) }}
            {{ form_widget(f.categorie, {'attr': {'class': 'form-control','placeholder': 'Type du jeu'}}) }}
            {{ form_errors(f.categorie) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(f.dates, 'Date de sortie', ) }}
            {{ form_widget(f.dates, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
            {{ form_errors(f.dates) }}
        </div>
        <div class=\"form-check form-check-flat form-check-primary\">
            <label class=\"form-check-label\">
                <input type=\"checkbox\" class=\"form-check-input\">
                Remember me
            </label>
        </div>
        <div class=\"input-group col-md-6\">
        {{ form_widget(f.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
        {{ form_widget(f.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}
        </div>

        {{ form_end(f) }}
    </form>

</div>
{% endblock %}
", "jeux/Ajout.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\jeux\\Ajout.html.twig");
    }
}
