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

/* jeux/Update.html.twig */
class __TwigTemplate_ec6752ee1758ed3ee096199b692adf6329beb9230342dc10742882df26062566 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/Update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/Update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/Update.html.twig", 1);
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

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"card-body\">
        <h4 class=\"card-title\"><i class=\"fa-solid fa-pen\"></i>   Modifier un jeu</h4>
        <p class=\"card-description\">
        </p>

        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'label', ["label" => "Nom du jeu"]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du jeu"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "imageFile", [], "any", false, false, false, 29), 'label', ["label" => "Image du jeu"]);
        echo "
                <div class=\"input-group grid-col--4\">
                    <span class=\"input-group-append\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "imageFile", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "
                </span>
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "categorie", [], "any", false, false, false, 37), 'label', ["label" => "Catégorie"]);
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "categorie", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type du jeu"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), "dates", [], "any", false, false, false, 41), 'label', ["label" => "Date de sortie"]);
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "dates", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "DD/MM/YYYY"]]);
        echo "
            </div>

            <div class=\"input-group col-md-6\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "submit", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), "cancel", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control btn btn-light mr-2"]]);
        echo "
            </div>

            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jeux/Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  183 => 47,  179 => 46,  172 => 42,  168 => 41,  162 => 38,  158 => 37,  150 => 32,  144 => 29,  138 => 26,  134 => 25,  127 => 21,  120 => 16,  110 => 15,  98 => 11,  94 => 10,  90 => 9,  86 => 8,  82 => 7,  78 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
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
        <h4 class=\"card-title\"><i class=\"fa-solid fa-pen\"></i>   Modifier un jeu</h4>
        <p class=\"card-description\">
        </p>

        {{ form_start(f) }}
        <form class=\"forms-sample\">

            <div class=\"form-group\">
                {{ form_label(f.nom, 'Nom du jeu', ) }}
                {{ form_widget(f.nom, {'attr': {'class': 'form-control','placeholder': 'Nom du jeu'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(f.imageFile, 'Image du jeu', ) }}
                <div class=\"input-group grid-col--4\">
                    <span class=\"input-group-append\">
                        {{ form_row(f.imageFile,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}
                </span>
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(f.categorie, 'Catégorie', ) }}
                {{ form_widget(f.categorie, {'attr': {'class': 'form-control','placeholder': 'Type du jeu'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(f.dates, 'Date de sortie', ) }}
                {{ form_widget(f.dates, {'attr': {'class': 'form-control','placeholder': 'DD/MM/YYYY'}}) }}
            </div>

            <div class=\"input-group col-md-6\">
                {{ form_widget(f.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                {{ form_widget(f.cancel, {'attr': {'class': 'form-control btn btn-light mr-2' }}) }}
            </div>

            {{ form_end(f) }}
        </form>

    </div>
{% endblock body %}", "jeux/Update.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\jeux\\Update.html.twig");
    }
}
