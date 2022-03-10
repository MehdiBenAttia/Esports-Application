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

/* competition/competition.html.twig */
class __TwigTemplate_eea740c75a493959921d0609bca46e57056ea7c19e15d69d00263a0cf427a1f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'calendrier' => [$this, 'block_calendrier'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/competition.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/competition.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "competition/competition.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">

    <div class=\"nk-gap-3\"></div>
                    <h3 class=\"nk-decorated-h-2\">
                            <span>Les</span>
                            <span class=\"text-main-1\">Compétitions</span>
                    </h3>
                    <div class=\"nk-gap\"></div>
                    <div class=\"nk-tabs\">
                        <!--
                            Additional Classes:
                                .nav-tabs-fill
                        -->
                        <ul class=\"nav nav-tabs nav-tabs-fill\" role=\"tablist\">
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 22
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tabs-1-1\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Action Tab -->
                                <div class=\"nk-widget\">
                                    <div class=\"nk-widget-content\">
                                        <form action=\"#\" class=\"nk-form nk-form-style-1\" novalidate=\"novalidate\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Type something...\" id=\"search\">
                                                <button class=\"nk-btn nk-btn-color-main-1\"><span class=\"ion-search\"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class=\"separator\"></div>

                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\" id=\"all\">
                                            ";
        // line 46
        $this->loadTemplate("competition/ajax.html.twig", "competition/competition.html.twig", 46)->display($context);
        // line 47
        echo "                                    </div>
                                    <div class=\"row vertical-gap\" id=\"search\">
                                    </div>
                                </div>
                            </div>
                        </div>



                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-2\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: MMO Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-1-fw.jpg\" alt=\"Smell magic in the air. Or maybe barbecue\">
                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-4\">MMO</span>
                                        </span>
                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">Smell magic in the air. Or maybe barbecue</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Sep 18, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">4 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-5-mid-square.jpg\" alt=\"He made his passenger captain of one\">

                                                <span class=\"nk-post-categories\">
                                                    <span class=\"bg-main-4\">MMO</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Jul 23, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">13 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: MMO Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-3\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Strategy Tab -->
                                <div>
                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-3-fw.jpg\" alt=\"We found a witch! May we burn her?\">

                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-3\">Strategy</span>
                                        </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">We found a witch! May we burn her?</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Aug 27, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">7 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-4-mid-square.jpg\" alt=\"For good, too though, in consequence\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-3\">Strategy</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">For good, too though, in consequence</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 14, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">23 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Strategy Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-4\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Adventure Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-6-fw.jpg\" alt=\"At first, for some time, I was not able to answer\">

                                        <span class=\"nk-post-categories\">
                <span class=\"bg-main-2\">Adventure</span>
            </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At first, for some time, I was not able to answer</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 3, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">0 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                    </div>
                                </div>



                                <!-- END: Adventure Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-5\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Racing Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-7-fw.jpg\" alt=\"At length one of them called out in a clear\">

                                        <span class=\"nk-post-categories\">
                <span class=\"bg-main-5\">Racing</span>
            </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At length one of them called out in a clear</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 3, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">0 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-3-mid-square.jpg\" alt=\"We found a witch! May we burn her?\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-5\">Racing</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">We found a witch! May we burn her?</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 27, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">7 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-4-mid-square.jpg\" alt=\"For good, too though, in consequence\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-5\">Racing</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">For good, too though, in consequence</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 14, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">23 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Racing Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-6\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Indie Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-5-fw.jpg\" alt=\"He made his passenger captain of one\">
                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-2\">Indie</span>
                                        </span>
                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 23, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">13 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                    </div>
                                </div>
                                <!-- END: Indie Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                        </div>
                    </div>
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script
            src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxcompetition");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function block_calendrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendrier"));

        // line 336
        echo "    <style>
        #calendrier{
            width: auto;
            display: inline-block;
            margin: auto;
        }
    </style>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">
    <div class=\"nk-widget nk-widget-highlighted\">
        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">We</span> Are Social</span></h4>
        <div class=\"nk-widget-content\">
            <div id=\"calendrier\"></div>
        </div>
    </div>
    <script>
        window.onload = () =>{
            let calendarElt = document.querySelector(\"#calendrier\")


            let calendar = new FullCalendar.Calendar(calendarElt,{
                initialView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                events: ";
        // line 365
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 365, $this->source); })());
        echo "

            })
            calendar.render();
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/competition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 365,  445 => 336,  435 => 335,  410 => 320,  392 => 305,  387 => 303,  129 => 47,  127 => 46,  105 => 26,  94 => 23,  91 => 22,  87 => 21,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">

    <div class=\"nk-gap-3\"></div>
                    <h3 class=\"nk-decorated-h-2\">
                            <span>Les</span>
                            <span class=\"text-main-1\">Compétitions</span>
                    </h3>
                    <div class=\"nk-gap\"></div>
                    <div class=\"nk-tabs\">
                        <!--
                            Additional Classes:
                                .nav-tabs-fill
                        -->
                        <ul class=\"nav nav-tabs nav-tabs-fill\" role=\"tablist\">
                            {% for var in categories %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"{{ path('choix_categorie',{'id' : var.id}) }}\">{{ var.nom }}</a>
                            </li>
                            {% endfor %}
                        </ul>
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tabs-1-1\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Action Tab -->
                                <div class=\"nk-widget\">
                                    <div class=\"nk-widget-content\">
                                        <form action=\"#\" class=\"nk-form nk-form-style-1\" novalidate=\"novalidate\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Type something...\" id=\"search\">
                                                <button class=\"nk-btn nk-btn-color-main-1\"><span class=\"ion-search\"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class=\"separator\"></div>

                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\" id=\"all\">
                                            {% include 'competition/ajax.html.twig' %}
                                    </div>
                                    <div class=\"row vertical-gap\" id=\"search\">
                                    </div>
                                </div>
                            </div>
                        </div>



                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-2\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: MMO Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-1-fw.jpg\" alt=\"Smell magic in the air. Or maybe barbecue\">
                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-4\">MMO</span>
                                        </span>
                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">Smell magic in the air. Or maybe barbecue</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Sep 18, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">4 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-5-mid-square.jpg\" alt=\"He made his passenger captain of one\">

                                                <span class=\"nk-post-categories\">
                                                    <span class=\"bg-main-4\">MMO</span>
                                                </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Jul 23, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">13 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: MMO Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-3\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Strategy Tab -->
                                <div>
                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-3-fw.jpg\" alt=\"We found a witch! May we burn her?\">

                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-3\">Strategy</span>
                                        </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">We found a witch! May we burn her?</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Aug 27, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">7 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-4-mid-square.jpg\" alt=\"For good, too though, in consequence\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-3\">Strategy</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">For good, too though, in consequence</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 14, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">23 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Strategy Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-4\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Adventure Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-6-fw.jpg\" alt=\"At first, for some time, I was not able to answer\">

                                        <span class=\"nk-post-categories\">
                <span class=\"bg-main-2\">Adventure</span>
            </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At first, for some time, I was not able to answer</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 3, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">0 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                    </div>
                                </div>



                                <!-- END: Adventure Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-5\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Racing Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-7-fw.jpg\" alt=\"At length one of them called out in a clear\">

                                        <span class=\"nk-post-categories\">
                <span class=\"bg-main-5\">Racing</span>
            </span>

                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At length one of them called out in a clear</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 3, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">0 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                    </div>
                                </div>



                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-3-mid-square.jpg\" alt=\"We found a witch! May we burn her?\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-5\">Racing</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">We found a witch! May we burn her?</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 27, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">7 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <div class=\"row vertical-gap\">
                                        <div class=\"col-lg-3 col-md-5\">
                                            <a href=\"blog-article.html\" class=\"nk-post-img\">
                                                <img src=\"Front/assets/images/post-4-mid-square.jpg\" alt=\"For good, too though, in consequence\">

                                                <span class=\"nk-post-categories\">
                        <span class=\"bg-main-5\">Racing</span>
                    </span>

                                            </a>
                                        </div>
                                        <div class=\"col-lg-9 col-md-7\">
                                            <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">For good, too though, in consequence</a></h2>
                                            <div class=\"nk-post-date mt-10 mb-10\">
                                                <span class=\"fa fa-calendar\"></span> Aug 14, 2018
                                                <span class=\"fa fa-comments\"></span> <a href=\"#\">23 comments</a>
                                            </div>
                                            <div class=\"nk-post-text\">
                                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- END: Racing Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tabs-1-6\">
                                <div class=\"nk-gap\"></div>
                                <!-- START: Indie Tab -->


                                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                                    <a href=\"blog-article.html\" class=\"nk-post-img\">
                                        <img src=\"Front/assets/images/post-5-fw.jpg\" alt=\"He made his passenger captain of one\">
                                        <span class=\"nk-post-categories\">
                                            <span class=\"bg-main-2\">Indie</span>
                                        </span>
                                    </a>
                                    <div class=\"nk-gap-1\"></div>
                                    <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>
                                    <div class=\"nk-post-date mt-10 mb-10\">
                                        <span class=\"fa fa-calendar\"></span> Jul 23, 2018
                                        <span class=\"fa fa-comments\"></span> <a href=\"#\">13 comments</a>
                                    </div>
                                    <div class=\"nk-post-text\">
                                        <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                    </div>
                                </div>
                                <!-- END: Indie Tab -->
                                <div class=\"nk-gap\"></div>
                            </div>
                        </div>
                    </div>
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script
            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"{{ path('ajaxcompetition') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
{% block calendrier %}
    <style>
        #calendrier{
            width: auto;
            display: inline-block;
            margin: auto;
        }
    </style>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\" integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">
    <div class=\"nk-widget nk-widget-highlighted\">
        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">We</span> Are Social</span></h4>
        <div class=\"nk-widget-content\">
            <div id=\"calendrier\"></div>
        </div>
    </div>
    <script>
        window.onload = () =>{
            let calendarElt = document.querySelector(\"#calendrier\")


            let calendar = new FullCalendar.Calendar(calendarElt,{
                initialView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek'
                },
                events: {{ data | raw }}

            })
            calendar.render();
        }
    </script>
{% endblock %}", "competition/competition.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\competition.html.twig");
    }
}
