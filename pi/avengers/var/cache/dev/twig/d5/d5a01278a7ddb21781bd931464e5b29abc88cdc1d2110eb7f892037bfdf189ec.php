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

/* competition/UpdateC.html.twig */
class __TwigTemplate_7a152af8e73ad0adbae816716ea68ca4945c6dfc39f1e2753ac737c5757e1721 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/UpdateC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/UpdateC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competition/UpdateC.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/feather/feather.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select.dataTables.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vertical-layout-light/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"shortcut icon\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Modifier une compétition</h4>
        <a class=\"btn btn-outline-dark \" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheC");
        echo "\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les compétitions  </a>
        <p class=\"card-description\">
        </p>

        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'label', ["label" => "Nom de la compétition"]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la compétition"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 29, $this->source); })()), "nbparticipants", [], "any", false, false, false, 29), 'label', ["label" => "nbparticipants"]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 30, $this->source); })()), "nbparticipants", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nbparticipants"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 33, $this->source); })()), "imageFile", [], "any", false, false, false, 33), 'label', ["label" => "Image compétition"]);
        echo "
                <div class=\"input-group grid-col--4\">
                    <span class=\"input-group-append\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 36, $this->source); })()), "imageFile", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "
                </span>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 41, $this->source); })()), "jeux", [], "any", false, false, false, 41), 'label', ["label" => "Jeu"]);
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 42, $this->source); })()), "jeux", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Jeu"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 45, $this->source); })()), "dateDeb", [], "any", false, false, false, 45), 'label', ["label" => "Date de Début"]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 46, $this->source); })()), "dateDeb", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 49, $this->source); })()), "dateFin", [], "any", false, false, false, 49), 'label', ["label" => "Date de Fin"]);
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 50, $this->source); })()), "dateFin", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
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
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 59, $this->source); })()), "submit", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 60, $this->source); })()), "cancel", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "
            </div>

            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fc"]) || array_key_exists("fc", $context) ? $context["fc"] : (function () { throw new RuntimeError('Variable "fc" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/UpdateC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 63,  212 => 60,  208 => 59,  196 => 50,  192 => 49,  186 => 46,  182 => 45,  176 => 42,  172 => 41,  164 => 36,  158 => 33,  152 => 30,  148 => 29,  142 => 26,  138 => 25,  131 => 21,  124 => 17,  120 => 15,  110 => 14,  98 => 11,  94 => 10,  90 => 9,  86 => 8,  82 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"{{ asset('vendors/feather/feather.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('vendors/ti-icons/css/themify-icons.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('vendors/css/vendor.bundle.base.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('vendors/ti-icons/css/themify-icons.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('js/select.dataTables.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/vertical-layout-light/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('images/favicon.png') }}\" type=\"text/css\" rel=\"shortcut icon\" />
{% endblock %}

{% block body %}
    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-circle-plus\"></i>  Modifier une compétition</h4>
        <a class=\"btn btn-outline-dark \" href=\"{{ path('AfficheC') }}\"><i class=\"fa-solid fa-gamepad\"></i> Afficher les compétitions  </a>
        <p class=\"card-description\">
        </p>

        {{ form_start(fc) }}
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                {{ form_label(fc.nom, 'Nom de la compétition', ) }}
                {{ form_widget(fc.nom, {'attr': {'class': 'form-control','placeholder': 'Nom de la compétition'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.nbparticipants, 'nbparticipants', ) }}
                {{ form_widget(fc.nbparticipants, {'attr': {'class': 'form-control','placeholder': 'nbparticipants'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.imageFile, 'Image compétition', ) }}
                <div class=\"input-group grid-col--4\">
                    <span class=\"input-group-append\">
                        {{ form_row(fc.imageFile,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}
                </span>
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.jeux, 'Jeu', ) }}
                {{ form_widget(fc.jeux, {'attr': {'class': 'form-control','placeholder': 'Jeu'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.dateDeb, 'Date de Début', ) }}
                {{ form_widget(fc.dateDeb, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(fc.dateFin, 'Date de Fin', ) }}
                {{ form_widget(fc.dateFin, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
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
", "competition/UpdateC.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\UpdateC.html.twig");
    }
}
