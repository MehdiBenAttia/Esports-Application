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

/* competition/AjoutC.html.twig */
class __TwigTemplate_796ecae1026bd5f2ee178bce3986aa77492e07f44c00d94f896b73514b6abe5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/AjoutC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/AjoutC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competition/AjoutC.html.twig", 1);
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
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter une compétition</h4>
        <a class=\"btn btn-outline-dark \" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheC");
        echo "\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les compétitions  </a>
        <p class=\"card-description\">
        </p>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label" => "Nom de la compétition"]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la compétition"]]);
        echo "
                <span class=\"text-danger\" >";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 19, $this->source); })()), "nbparticipants", [], "any", false, false, false, 19), 'label', ["label" => "nbparticipants"]);
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 20, $this->source); })()), "nbparticipants", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nbparticipants"]]);
        echo "
                <span class=\"text-danger\" >";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 21, $this->source); })()), "nbparticipants", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "</span>
            </div>
            <div class=\"form-group \">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 24, $this->source); })()), "imageFile", [], "any", false, false, false, 24), 'label', ["label" => "Image Compétition"]);
        echo "
                <span class=\"text-danger\" >";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "</span>

            </div>
            <div class=\"form-group\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 29, $this->source); })()), "jeux", [], "any", false, false, false, 29), 'label', ["label" => "Jeu"]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 30, $this->source); })()), "jeux", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Jeu"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 31, $this->source); })()), "jeux", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 34, $this->source); })()), "dateDeb", [], "any", false, false, false, 34), 'label', ["label" => "Date de Début"]);
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 35, $this->source); })()), "dateDeb", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 36, $this->source); })()), "dateDeb", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 39, $this->source); })()), "dateFin", [], "any", false, false, false, 39), 'label', ["label" => "Date de Fin"]);
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 40, $this->source); })()), "dateFin", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
        echo "
                <span class=\"text-danger\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 41, $this->source); })()), "dateFin", [], "any", false, false, false, 41), 'errors');
        echo "</span>
            </div>
            <div class=\"form-check form-check-flat form-check-primary\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" class=\"form-check-input\">
                    Remember me
                </label>
            </div>
            <div class=\"input-group col-md-6\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 50, $this->source); })()), "submit", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 51, $this->source); })()), "cancel", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "
            </div>

            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/AjoutC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  177 => 51,  173 => 50,  161 => 41,  157 => 40,  153 => 39,  147 => 36,  143 => 35,  139 => 34,  133 => 31,  129 => 30,  125 => 29,  118 => 25,  114 => 24,  108 => 21,  104 => 20,  100 => 19,  94 => 16,  90 => 15,  86 => 14,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Ajouter une compétition</h4>
        <a class=\"btn btn-outline-dark \" href=\"{{ path('AfficheC') }}\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les compétitions  </a>
        <p class=\"card-description\">
        </p>

        {{ form_start(fc,{'attr':{'novalidate':'novalidate'}}) }}
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                {{ form_label(fc.nom, 'Nom de la compétition', ) }}
                {{ form_widget(fc.nom, {'attr': {'class': 'form-control','placeholder': 'Nom de la compétition'}}) }}
                <span class=\"text-danger\" >{{ form_errors(fc.nom,{'attr': {'class':'text-danger'}}) }}</span>
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.nbparticipants, 'nbparticipants', ) }}
                {{ form_widget(fc.nbparticipants, {'attr': {'class': 'form-control','placeholder': 'nbparticipants'}}) }}
                <span class=\"text-danger\" >{{ form_errors(fc.nbparticipants,{'attr': {'class':'text-danger'}}) }}</span>
            </div>
            <div class=\"form-group \">
                {{ form_label(fc.imageFile, 'Image Compétition', ) }}
                <span class=\"text-danger\" >{{ form_row(fc.imageFile,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}</span>

            </div>
            <div class=\"form-group\">
                {{ form_label(fc.jeux, 'Jeu', ) }}
                {{ form_widget(fc.jeux, {'attr': {'class': 'form-control','placeholder': 'Jeu'}}) }}
                {{ form_errors(fc.jeux,{'attr': {'class':'text-danger'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.dateDeb, 'Date de Début', ) }}
                {{ form_widget(fc.dateDeb, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
                {{ form_errors(fc.dateDeb,{'attr': {'class':'text-danger'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.dateFin, 'Date de Fin', ) }}
                {{ form_widget(fc.dateFin, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
                <span class=\"text-danger\">{{ form_errors(fc.dateFin) }}</span>
            </div>
            <div class=\"form-check form-check-flat form-check-primary\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" class=\"form-check-input\">
                    Remember me
                </label>
            </div>
            <div class=\"input-group col-md-6\">
                {{ form_widget(fc.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                {{ form_widget(fc.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}
            </div>

            {{ form_end(fc) }}
        </form>

    </div>
{% endblock %}
", "competition/AjoutC.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\AjoutC.html.twig");
    }
}
