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

/* competition/choix_categorie.html.twig */
class __TwigTemplate_c552c4505324d302fbec9b314304fb58430092a32db5c9f8397c7a29a26087b0 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/choix_categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/choix_categorie.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "competition/choix_categorie.html.twig", 1);
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
    <div class=\"nk-gap-3\"></div>
    <h3 class=\"nk-decorated-h-2\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()), "games", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 9
            echo "            Les<span class=\"text-main-1\">Jeux</span><span class=\"text-main-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "categorie", [], "any", false, false, false, 9), "nom", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </h3>
    <div class=\"nk-gap\"></div>
    <div class=\"nk-tabs\">
        <!--
            Additional Classes:
                .nav-tabs-fill
        -->
        <ul class=\"nav nav-tabs nav-tabs-fill\" role=\"tablist\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 20
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choix_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["var"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        </ul>
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tabs-1-1\">
                <div class=\"nk-gap\"></div>
                <!-- START: Action Tab -->
                <div class=\"separator\"></div>

                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                    <div class=\"row vertical-gap\" id=\"all\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 34, $this->source); })()), "games", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 35
            echo "                            <div class=\"col-lg-3 col-md-5\">
                              <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournament");
            echo "\" class=\"nk-post-img\"> ";
            // line 37
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"At length one of them called out in a clear\">
                                    <span class=\"nk-post-categories\">
                                          <span class=\"bg-main-1\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["var"], "categorie", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                                     </span>
                                </a>
                            </div>
                            <div class=\"col-lg-9 col-md-7\">
                                <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></h2>
                                <div class=\"nk-post-date mt-10 mb-10\">
                                    <span class=\"fa fa-calendar\"></span> ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "dates", [], "any", false, false, false, 46), "m/d/y"), "html", null, true);
            echo "
                                </div>
                                <div class=\"nk-post-text\">
                                    <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </div>


";
        // line 57
        echo "
";
        // line 59
        echo "                </div>


            </div>



            <!-- END: Action Tab -->
            <div class=\"nk-gap\"></div>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competition/choix_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  173 => 57,  168 => 53,  155 => 46,  150 => 44,  142 => 39,  136 => 37,  133 => 36,  130 => 35,  126 => 34,  114 => 24,  103 => 21,  100 => 20,  96 => 19,  86 => 11,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block body %}

    <div class=\"nk-gap-3\"></div>
    <h3 class=\"nk-decorated-h-2\">
        {% for var in categories.games %}
            Les<span class=\"text-main-1\">Jeux</span><span class=\"text-main-1\">{{ var.categorie.nom }}</span>
        {% endfor %}
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
                    <a class=\"nav-link \" href=\"{{ path('choix_categorie',{'id' : var.id }) }}\">{{ var.nom }}</a>
                </li>
            {% endfor %}

        </ul>
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tabs-1-1\">
                <div class=\"nk-gap\"></div>
                <!-- START: Action Tab -->
                <div class=\"separator\"></div>

                <div class=\"nk-blog-post nk-blog-post-border-bottom\">
                    <div class=\"row vertical-gap\" id=\"all\">
                        {% for var in categories.games %}
                            <div class=\"col-lg-3 col-md-5\">
                              <a href=\"{{ path('tournament') }}\" class=\"nk-post-img\"> {#  blog-article.html#}
                                    <img src=\"{{ asset('/uploads/images/'~ var.image) }}\" alt=\"At length one of them called out in a clear\">
                                    <span class=\"nk-post-categories\">
                                          <span class=\"bg-main-1\">{{ var.categorie.nom }}</span>
                                     </span>
                                </a>
                            </div>
                            <div class=\"col-lg-9 col-md-7\">
                                <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">{{ var.nom }}</a></h2>
                                <div class=\"nk-post-date mt-10 mb-10\">
                                    <span class=\"fa fa-calendar\"></span> {{ var.dates|date(\"m/d/y\") }}
                                </div>
                                <div class=\"nk-post-text\">
                                    <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                                </div>
                            </div>
                        {% endfor %}
                    </div>


{#                    <div class=\"row vertical-gap\" id=\"search\">#}

{#                    </div>#}
                </div>


            </div>



            <!-- END: Action Tab -->
            <div class=\"nk-gap\"></div>
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

{% endblock %}", "competition/choix_categorie.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\competition\\choix_categorie.html.twig");
    }
}
