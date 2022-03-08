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

/* produit/ajout.html.twig */
class __TwigTemplate_7e50dc44f15589d7059e660da2cc3c298e7423b9a1fc7da59b95b1593f81b91e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ajout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/ajout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"card-body\">
        <h4 class=\"card-title\">Ajouter un produit</h4>


        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "





        <form class=\"forms-sample\">

            <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">



            <div class=\"stars\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "reference", [], "any", false, false, false, 23), 'label', ["label" => "reference"]);
        echo "

             ";
        // line 31
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 31, $this->source); })()), "reference", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "reference"]]);
        echo "


            </div>



            <div class=\"form-group\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'label', ["label" => "nomz"]);
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors');
        echo "

            </div>
            <div class=\"form-group\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), "marque", [], "any", false, false, false, 45), 'label', ["label" => "marque"]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "marque", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "marque"]]);
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), "marque", [], "any", false, false, false, 47), 'errors');
        echo "

            </div>
            <div class=\"form-group\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "prix", [], "any", false, false, false, 51), 'label', ["label" => "prix"]);
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 52, $this->source); })()), "prix", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prix"]]);
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "prix", [], "any", false, false, false, 53), 'errors');
        echo "

            </div>

            <div class=\"form-group\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "imageFile", [], "any", false, false, false, 58), 'label', ["label" => "Image du jeu"]);
        echo "
                <div class=\"input-group grid-col--4\">
                    <input type=\"text\" class=\"form-control file-upload-info\" disabled>
                    <span class=\"input-group-append\">
";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 62, $this->source); })()), "imageFile", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control file-upload-browse btn btn-primary"]]);
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 63, $this->source); })()), "imageFile", [], "any", false, false, false, 63), 'errors');
        echo "
</span>
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "categorie", [], "any", false, false, false, 69), 'label', ["label" => "categorie"]);
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "categorie", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "class=\"dropdown-item\"", "placeholder" => "categorie"]]);
        echo "
            </div>

             ";
        // line 98
        echo "




            <div class=\"form-group\">
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 104, $this->source); })()), "type", [], "any", false, false, false, 104), 'label', ["label" => "description"]);
        echo "
                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 105, $this->source); })()), "type", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "description"]]);
        echo "
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106), 'errors');
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
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 121, $this->source); })()), "submit", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 122, $this->source); })()), "cancel", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "btn btn-danger"]]);
        echo "
            </div>
            ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 124, $this->source); })()), 'form_end');
        echo "
        </form>

    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 136
        echo "

    <script>
        window.onload = () => {
            // On va chercher toutes les étoiles
            const stars = document.querySelectorAll(\".la-star\");

            // On va chercher l'input
            const note = document.querySelector(\"#note\");

            // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
            for(star of stars){
                // On écoute le survol
                star.addEventListener(\"mouseover\", function(){
                    resetStars();
                    this.style.color = \"red\";
                    this.classList.add(\"las\");
                    this.classList.remove(\"lar\");
                    // L'élément précédent dans le DOM (de même niveau, balise soeur)
                    let previousStar = this.previousElementSibling;

                    while(previousStar){
                        // On passe l'étoile qui précède en rouge
                        previousStar.style.color = \"red\";
                        previousStar.classList.add(\"las\");
                        previousStar.classList.remove(\"lar\");
                        // On récupère l'étoile qui la précède
                        previousStar = previousStar.previousElementSibling;
                    }
                });

                // On écoute le clic
                star.addEventListener(\"click\", function(){
                    note.value = this.dataset.value;
                });

                star.addEventListener(\"mouseout\", function(){
                    resetStars(note.value);
                });
            }

            /**
             * Reset des étoiles en vérifiant la note dans l'input caché
             * @param {number} note
             */
            function resetStars(note = 0){
                for(star of stars){
                    if(star.dataset.value > note){
                        star.style.color = \"black\";
                        star.classList.add(\"lar\");
                        star.classList.remove(\"las\");
                    }else{
                        star.style.color = \"red\";
                        star.classList.add(\"las\");
                        star.classList.remove(\"lar\");
                    }
                }
            }
        }
    </script>

<script>

function changeOptions(selectEl) {
let selectedValue = selectEl.options[selectEl.selectedIndex].value;
let subForms = document.getElementsByClassName('className')
for (let i = 0; i < subForms.length; i += 1) {
if (selectedValue === subForms[i].name) {
subForms[i].setAttribute('style', 'display:block')
} else {
subForms[i].setAttribute('style', 'display:none')
}
}
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 136,  249 => 135,  228 => 124,  223 => 122,  219 => 121,  201 => 106,  197 => 105,  193 => 104,  185 => 98,  179 => 70,  175 => 69,  166 => 63,  162 => 62,  155 => 58,  147 => 53,  143 => 52,  139 => 51,  132 => 47,  128 => 46,  124 => 45,  117 => 41,  113 => 40,  109 => 39,  97 => 31,  92 => 23,  76 => 10,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <div class=\"card-body\">
        <h4 class=\"card-title\">Ajouter un produit</h4>


        {{ form_start(f,{'attr': {'novalidate': 'novalidate'}}) }}





        <form class=\"forms-sample\">

            <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">



            <div class=\"stars\">
                {{ form_label(f.reference, 'reference', ) }}

             {#    <i class=\"lar la-star\" data-value=\"1\"   ></i>
                <i class=\"lar la-star\" data-value=\"2\" {{ form_widget(f.reference, {'attr': {'class': 'form-control','placeholder': 'reference'}}) }}   ></i>
                <i class=\"lar la-star\" data-value=\"3\" {{ form_widget(f.reference, {'attr': {'class': 'form-control','placeholder': 'reference'}}) }}   ></i>
                <i class=\"lar la-star\" data-value=\"4\" {{ form_widget(f.reference, {'attr': {'class': 'form-control','placeholder': 'reference'}}) }}   ></i>
                <i class=\"lar la-star\" data-value=\"5\" {{ form_widget(f.reference, {'attr': {'class': 'form-control','placeholder': 'reference'}}) }}   ></i>
                #}
                {{ form_widget(f.reference, {'attr': {'class': 'form-control','placeholder': 'reference'}}) }}


            </div>



            <div class=\"form-group\">
                {{ form_label(f.nom, 'nomz', ) }}
                {{ form_widget(f.nom, {'attr': {'class': 'form-control','placeholder': 'nom'}}) }}
                {{ form_errors(f.nom) }}

            </div>
            <div class=\"form-group\">
                {{ form_label(f.marque, 'marque', ) }}
                {{ form_widget(f.marque, {'attr': {'class': 'form-control','placeholder': 'marque'}}) }}
                {{ form_errors(f.marque) }}

            </div>
            <div class=\"form-group\">
                {{ form_label(f.prix, 'prix', ) }}
                {{ form_widget(f.prix, {'attr': {'class': 'form-control','placeholder': 'prix'}}) }}
                {{ form_errors(f.prix) }}

            </div>

            <div class=\"form-group\">
                {{ form_label(f.imageFile, 'Image du jeu', ) }}
                <div class=\"input-group grid-col--4\">
                    <input type=\"text\" class=\"form-control file-upload-info\" disabled>
                    <span class=\"input-group-append\">
{{ form_row(f.imageFile,{'attr': {'class': 'form-control file-upload-browse btn btn-primary' }}) }}
                        {{ form_errors(f.imageFile) }}
</span>
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(f.categorie, 'categorie', ) }}
                {{ form_widget(f.categorie, {'attr': {'class': 'class=\"dropdown-item\"','placeholder': 'categorie'}}) }}
            </div>

             {#

             <div onchange=\"changeOptions(this)\" class=\"form-group\">
               {{ form_widget(f.categorie, {'label': \"Select Category\", 'attr': {'class': \"form-control\"} }) }}
           </div>


            <select onchange=\"changeOptions(this)\">
               <option value=\"\" selected=\"selected\"></option>
               <option value=\"form_1\">Form 1</option>
               <option value=\"pc\">Form 2</option>
           </select>


           <form class=\"className\" name=\"form_1\" id=\"form_1\" style=\"display:none\">

                    </form>

           <form class=\"className\" name=\"pc\" id=\"pc\" style=\"display:none\">
               <div class=\"form-group\">
                   {{ form_label(f.prix, 'prix', ) }}
                   {{ form_widget(f.prix, {'attr': {'class': 'form-control','placeholder': 'prix'}}) }}
               </div>
           </form>
             #}





            <div class=\"form-group\">
                {{ form_label(f.type, 'description', ) }}
                {{ form_widget(f.type, {'attr': {'class': 'form-control','placeholder': 'description'}}) }}
                {{ form_errors(f.type) }}

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






{% endblock %}
{% block js %}


    <script>
        window.onload = () => {
            // On va chercher toutes les étoiles
            const stars = document.querySelectorAll(\".la-star\");

            // On va chercher l'input
            const note = document.querySelector(\"#note\");

            // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
            for(star of stars){
                // On écoute le survol
                star.addEventListener(\"mouseover\", function(){
                    resetStars();
                    this.style.color = \"red\";
                    this.classList.add(\"las\");
                    this.classList.remove(\"lar\");
                    // L'élément précédent dans le DOM (de même niveau, balise soeur)
                    let previousStar = this.previousElementSibling;

                    while(previousStar){
                        // On passe l'étoile qui précède en rouge
                        previousStar.style.color = \"red\";
                        previousStar.classList.add(\"las\");
                        previousStar.classList.remove(\"lar\");
                        // On récupère l'étoile qui la précède
                        previousStar = previousStar.previousElementSibling;
                    }
                });

                // On écoute le clic
                star.addEventListener(\"click\", function(){
                    note.value = this.dataset.value;
                });

                star.addEventListener(\"mouseout\", function(){
                    resetStars(note.value);
                });
            }

            /**
             * Reset des étoiles en vérifiant la note dans l'input caché
             * @param {number} note
             */
            function resetStars(note = 0){
                for(star of stars){
                    if(star.dataset.value > note){
                        star.style.color = \"black\";
                        star.classList.add(\"lar\");
                        star.classList.remove(\"las\");
                    }else{
                        star.style.color = \"red\";
                        star.classList.add(\"las\");
                        star.classList.remove(\"lar\");
                    }
                }
            }
        }
    </script>

<script>

function changeOptions(selectEl) {
let selectedValue = selectEl.options[selectEl.selectedIndex].value;
let subForms = document.getElementsByClassName('className')
for (let i = 0; i < subForms.length; i += 1) {
if (selectedValue === subForms[i].name) {
subForms[i].setAttribute('style', 'display:block')
} else {
subForms[i].setAttribute('style', 'display:none')
}
}
}
</script>
{% endblock %}", "produit/ajout.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\ajout.html.twig");
    }
}
