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

/* produit/afficherfront.html.twig */
class __TwigTemplate_ccfc0be487deeb1ea52c83ac89a27df946e674c7b585874a6eff5cd5bd743e08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficherfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/afficherfront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>


<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>GoodGames | Action Games</title>

    <meta name=\"description\" content=\"GoodGames - Bootstrap template for communities and games store\">
    <meta name=\"keywords\" content=\"game, gaming, template, HTML template, responsive, Bootstrap, premium\">
    <meta name=\"author\" content=\"_nK\">

    <link rel=\"icon\" type=\"image/png\" href=\"front/assets/images/favicon.png\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/bootstrap/dist/css/bootstrap.min.css\">

    <!-- FontAwesome -->
    <script defer src=\"front/assets/vendor/fontawesome-free/js/all.js\"></script>
    <script defer src=\"front/assets/vendor/fontawesome-free/js/v4-shims.js\"></script>

    <!-- IonIcons -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/ionicons/css/ionicons.min.css\">

    <!-- Flickity -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/flickity/dist/flickity.min.css\">

    <!-- Photoswipe -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/photoswipe/dist/photoswipe.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/photoswipe/dist/default-skin/default-skin.css\">

    <!-- Seiyria Bootstrap Slider -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css\">

    <!-- Summernote -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/summernote/dist/summernote-bs4.css\">

    <!-- GoodGames -->
    <link rel=\"stylesheet\" href=\"front/assets/css/goodgames.css\">

    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"front/assets/css/custom.css\">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src=\"front/assets/vendor/jquery/dist/jquery.min.js\"></script>


</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>





<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class=\"nk-header nk-header-opaque\">



    <!-- START: Top Contacts -->
    <div class=\"nk-contacts-top\">
        <div class=\"container\">
            <div class=\"nk-contacts-left\">
                <ul class=\"nk-social-links\">
                    <li><a class=\"nk-social-rss\" href=\"#\"><span class=\"fa fa-rss\"></span></a></li>
                    <li><a class=\"nk-social-twitch\" href=\"#\"><span class=\"fab fa-twitch\"></span></a></li>
                    <li><a class=\"nk-social-steam\" href=\"#\"><span class=\"fab fa-steam\"></span></a></li>
                    <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                    <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                    <li><a class=\"nk-social-twitter\" href=\"#\" target=\"_blank\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a class=\"nk-social-pinterest\" href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>

                    <
                </ul>
            </div>
            <div class=\"nk-contacts-right\">
                <ul class=\"nk-contacts-icons\">

                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modalSearch\">
                            <span class=\"fa fa-search\"></span>
                        </a>
                    </li>


                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modalLogin\">
                            <span class=\"fa fa-user\"></span>
                        </a>
                    </li>


                    <li>
                    <span class=\"nk-cart-toggle\">
                        <span class=\"fa fa-shopping-cart\"></span>
                        <span class=\"nk-badge\">27</span>
                    </span>
                        <div class=\"nk-cart-dropdown\">

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-5-xs.jpg\" alt=\"In all revolutions of\">
                                </a>
                                <h3 class=\"nk-post-title\">
                                    <a href=\"#\" class=\"nk-cart-remove-item\"><span class=\"ion-android-close\"></span></a>
                                    <a href=\"store-product.html\">In all revolutions of</a>
                                </h3>
                                <div class=\"nk-gap-1\"></div>
                                <div class=\"nk-product-price\">€ 23.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-7-xs.jpg\" alt=\"With what mingled joy\">
                                </a>
                                <h3 class=\"nk-post-title\">
                                    <a href=\"#\" class=\"nk-cart-remove-item\"><span class=\"ion-android-close\"></span></a>
                                    <a href=\"store-product.html\">With what mingled joy</a>
                                </h3>
                                <div class=\"nk-gap-1\"></div>
                                <div class=\"nk-product-price\">€ 14.00</div>
                            </div>

                            <div class=\"nk-gap-2\"></div>
                            <div class=\"text-center\">
                                <a href=\"store-checkout.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white\">Proceed to Checkout</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <nav class=\"nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide\">
        <div class=\"container\">
            <div class=\"nk-nav-table\">

                <a  href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\" class=\"nk-nav-logo\">
                    <img src=\"front/assets/images/logo.png\" alt=\"GoodGames\" width=\"199\">
                </a>

                <ul class=\"nk-nav nk-nav-right d-none d-lg-table-cell\" data-nav-mobile=\"#nk-nav-mobile\">

                    <li class=\" nk-drop-item\">
                        <a href=\"elements.html\">
                            Features

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"elements.html\">
                                    Elements (Shortcodes)

                                </a>
                            </li>
                            <li class=\" nk-drop-item\">
                                <a href=\"forum.html\">
                                    Forum

                                </a><ul class=\"dropdown\">

                                    <li>
                                        <a href=\"forum.html\">
                                            Forum

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"forum-topics.html\">
                                            Topics

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"forum-single-topic.html\">
                                            Single Topic

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"widgets.html\">
                                    Widgets

                                </a>
                            </li>
                            <li>
                                <a href=\"coming-soon.html\">
                                    Coming Soon

                                </a>
                            </li>
                            <li>
                                <a href=\"offline.html\">
                                    Offline

                                </a>
                            </li>
                            <li>
                                <a href=\"404.html\">
                                    404

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"blog-list.html\">
                            Blog

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"news.html\">
                                    News

                                </a>
                            </li>
                            <li class=\" nk-drop-item\">
                                <a href=\"blog-grid.html\">
                                    Blog With Sidebar

                                </a><ul class=\"dropdown\">

                                    <li>
                                        <a href=\"blog-grid.html\">
                                            Blog Grid

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"blog-list.html\">
                                            Blog List

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"blog-fullwidth.html\">
                                    Blog Fullwidth

                                </a>
                            </li>
                            <li>
                                <a href=\"blog-article.html\">
                                    Blog Article

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"gallery.html\">
                            Gallery

                        </a>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"tournaments.html\">
                            Tournaments

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"tournaments.html\">
                                    Tournament

                                </a>
                            </li>
                            <li>
                                <a href=\"tournaments-teams.html\">
                                    Teams

                                </a>
                            </li>
                            <li>
                                <a href=\"tournaments-teammate.html\">
                                    Teammate

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"active nk-drop-item\">
                        <a href=\"store.html\">
                            Store

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"store.html\">
                                    Store

                                </a>
                            </li>
                            <li>
                                <a href=\"store-product.html\">
                                    Product

                                </a>
                            </li>
                            <li class=\"active\">
                                <a href=\"store-catalog.html\">
                                    Catalog

                                </a>
                            </li>
                            <li>
                                <a href=\"store-catalog-alt.html\">
                                    Catalog Alt

                                </a>
                            </li>
                            <li>
                                <a href=\"store-checkout.html\">
                                    Checkout

                                </a>
                            </li>
                            <li>
                                <a href=\"store-cart.html\">
                                    Cart

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nk-nav nk-nav-right nk-nav-icons\">

                    <li class=\"single-icon d-lg-none\">
                        <a href=\"#\" class=\"no-link-effect\" data-nav-toggle=\"#nk-nav-mobile\">
                                <span class=\"nk-icon-burger\">
                                    <span class=\"nk-t-1\"></span>
                                    <span class=\"nk-t-2\"></span>
                                    <span class=\"nk-t-3\"></span>
                                </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>



<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
-->
<div id=\"nk-nav-mobile\" class=\"nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none\">
    <div class=\"nano\">
        <div class=\"nano-content\">
            <a href=\"index.html\" class=\"nk-nav-logo\">
                <img src=\"front/assets/images/logo.png\" alt=\"\" width=\"120\">

            </a>
            <div class=\"nk-navbar-mobile-content\">
                <ul class=\"nk-nav\">
                    <!-- Here will be inserted menu from [data-mobile-menu=\"#nk-nav-mobile\"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->



<div class=\"nk-main\">

    <!-- START: Breadcrumbs -->
    <div class=\"nk-gap-1\"></div>
    <div class=\"container\">
        <ul class=\"nk-breadcrumbs\">


            <li><a href=\"index.html\">Home</a></li>


            <li><span class=\"fa fa-angle-right\"></span></li>

            <li><a href=\"store.html\">Store</a></li>


            <li><span class=\"fa fa-angle-right\"></span></li>

            <li><span>Action Games</span></li>

        </ul>
    </div>
    <div class=\"nk-gap-1\"></div>
    <!-- END: Breadcrumbs -->


    <div class=\"container\" id=\"\">



    <div class=\"container\">
        <!-- START: Image Slider -->
        <div class=\"nk-image-slider\" data-autoplay=\"8000\" id=\"#all\">

            ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 438, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 439
            echo "
            <div class=\"nk-image-slider-item\">
                <img src=\"";
            // line 441
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 441))), "html", null, true);
            echo "\" alt=\"So saying he unbuckled\" alt=\"\" class=\"nk-image-slider-img\" data-thumb=\"front/assets/images/slide-1-thumb.jpg\">

                <div class=\"nk-image-slider-content\">

                    <h3 class=\"h4\">";
            // line 445
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "marque", [], "any", false, false, false, 445), "html", null, true);
            echo "</h3>
                    <p class=\"text-white\">";
            // line 446
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prix", [], "any", false, false, false, 446), "html", null, true);
            echo " DT</p>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1\">Read More</a>

                </div>

            </div>





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "

            </div>

        </div>
        <!-- END: Image Slider -->

        <!-- START: Categories -->

        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-mouse.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PC</a></h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-gamepad.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\">Price</h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">Start from higher</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-gamepad-2.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">Xbox</a></h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->
        <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-8\">
                <!-- START: Products -->
";
        // line 509
        $this->loadTemplate("produit/ajax.html.twig", "produit/afficherfront.html.twig", 509)->display($context);
        // line 510
        echo "

                <!-- END: Products -->

                <!-- START: Pagination -->
                <div class=\"nk-gap-3\"></div>
                <div class=\"nk-pagination nk-pagination-center\">
                    <a href=\"#\" class=\"nk-pagination-prev\">
                        <span class=\"ion-ios-arrow-back\"></span>
                    </a>
                    <nav>
                        <a class=\"nk-pagination-current\" href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\">3</a>
                        <a href=\"#\">4</a>
                        <span>...</span>
                        <a href=\"#\">14</a>
                    </nav>
                    <a href=\"#\" class=\"nk-pagination-next\">
                        <span class=\"ion-ios-arrow-forward\"></span>
                    </a>
                </div>
                <!-- END: Pagination -->
            </div>
            <div class=\"col-lg-4\">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class=\"nk-sidebar nk-sidebar-right nk-sidebar-sticky\">

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


                    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                    <script
                            src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
                    </script>


                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Category</span> Menu</span></h4>
                        <div class=\"nk-widget-content\">
                            <ul class=\"nk-widget-categories\">
                                ";
        // line 568
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 568, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 569
            echo "
                                <li><a href=\"#\">";
            // line 570
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomcateg", [], "any", false, false, false, 570), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 572
        echo "
                            </ul>
                        </div>
                    </div>

                    <div class=\"nk-widget nk-widget-highlighted\"   id=\"filter\" >
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\"   id=\"filter\" >Price</span> Filter</span></h4>
                        <div class=\"nk-widget-content\"   id=\"filter\">
                            <div class=\"nk-input-slider\"   id=\"filter\">
                                <input
                                        type=\"text\"
                                        name=\"filter\"
                                        id=\"filter\"
                                        data-slider-min=\"0\"
                                        data-slider-max=\"18000\"
                                        data-slider-step=\"1\"
                                        data-slider-value=\"[200, 1200]\"
                                >
                                <div class=\"nk-gap\"></div>
                                <div>
                                    <div class=\"text-white mt-4 float-left\"   id=\"filter\">
                                        PRICE:
                                        <strong class=\"text-main-1\">€ <span class=\"nk-input-slider-value-0\"></span></strong>
                                        -
                                        <strong class=\"text-main-1\">€ <span class=\"nk-input-slider-value-1\"></span></strong>
                                    </div>
                                    <a href=\"#\"   id=\"filter\"    class=\"nk-btn nk-btn-rounded nk-btn-color-white float-right\">Apply</a>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>

                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Most</span> Popular</span></h4>
                        <div class=\"nk-widget-content\">

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-1-xs.jpg\" alt=\"So saying he unbuckled\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">So saying he unbuckled</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"4\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"far fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 23.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-2-xs.jpg\" alt=\"However, I have reason\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">However, I have reason</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"2.5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fas fa-star-half\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 32.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-3-xs.jpg\" alt=\"It was some time before\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">It was some time before</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 14.00</div>
                            </div>

                        </div>
                    </div>



                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class=\"nk-gap-2\"></div>



    <!-- START: Footer -->
    <footer class=\"nk-footer\">

        <div class=\"container\">
            <div class=\"nk-gap-3\"></div>
            <div class=\"row vertical-gap\">
                <div class=\"col-md-6\">
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">Contact</span> With Us</h4>
                        <div class=\"nk-widget-content\">
                            <form action=\"php/ajax-contact-form.php\" class=\"nk-form nk-form-ajax\">
                                <div class=\"row vertical-gap sm-gap\">
                                    <div class=\"col-md-6\">
                                        <input type=\"email\" class=\"form-control required\" name=\"email\" placeholder=\"Email *\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control required\" name=\"name\" placeholder=\"Name *\">
                                    </div>
                                </div>
                                <div class=\"nk-gap\"></div>
                                <textarea class=\"form-control required\" name=\"message\" rows=\"5\" placeholder=\"Message *\"></textarea>
                                <div class=\"nk-gap-1\"></div>
                                <button class=\"nk-btn nk-btn-rounded nk-btn-color-white\">
                                    <span>Send</span>
                                    <span class=\"icon\"><i class=\"ion-paper-airplane\"></i></span>
                                </button>
                                <div class=\"nk-form-response-success\"></div>
                                <div class=\"nk-form-response-error\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">Latest</span> Posts</h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"row vertical-gap sm-gap\">

                                <div class=\"col-lg-6\">
                                    <div class=\"nk-widget-post-2\">
                                        <a href=\"blog-article.html\" class=\"nk-post-image\">
                                            <img src=\"front/assets/images/post-1-sm.jpg\" alt=\"\">
                                        </a>
                                        <div class=\"nk-post-title\"><a href=\"blog-article.html\">Smell magic in the air. Or maybe barbecue</a></div>
                                        <div class=\"nk-post-date\">
                                            <span class=\"fa fa-calendar\"></span> Sep 18, 2018
                                            <span class=\"fa fa-comments\"></span> <a href=\"#\">4</a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"nk-widget-post-2\">
                                        <a href=\"blog-article.html\" class=\"nk-post-image\">
                                            <img src=\"front/assets/images/post-2-sm.jpg\" alt=\"\">
                                        </a>
                                        <div class=\"nk-post-title\"><a href=\"blog-article.html\">Grab your sword and fight the Horde</a></div>
                                        <div class=\"nk-post-date\">
                                            <span class=\"fa fa-calendar\"></span> Sep 5, 2018
                                            <span class=\"fa fa-comments\"></span> <a href=\"#\">7</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">In</span> Twitter</h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-twitter-list\" data-twitter-count=\"1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-gap-3\"></div>
        </div>

        <div class=\"nk-copyright\">
            <div class=\"container\">
                <div class=\"nk-copyright-left\">
                    <a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
                </div>
                <div class=\"nk-copyright-right\">
                    <ul class=\"nk-social-links-2\">
                        <li><a class=\"nk-social-rss\" href=\"#\"><span class=\"fa fa-rss\"></span></a></li>
                        <li><a class=\"nk-social-twitch\" href=\"#\"><span class=\"fab fa-twitch\"></span></a></li>
                        <li><a class=\"nk-social-steam\" href=\"#\"><span class=\"fab fa-steam\"></span></a></li>
                        <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                        <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                        <li><a class=\"nk-social-twitter\" href=\"#\" target=\"_blank\"><span class=\"fab fa-twitter\"></span></a></li>
                        <li><a class=\"nk-social-pinterest\" href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>

                        <!-- Additional Social Buttons
                            <li><a class=\"nk-social-behance\" href=\"#\"><span class=\"fab fa-behance\"></span></a></li>
                            <li><a class=\"nk-social-bitbucket\" href=\"#\"><span class=\"fab fa-bitbucket\"></span></a></li>
                            <li><a class=\"nk-social-dropbox\" href=\"#\"><span class=\"fab fa-dropbox\"></span></a></li>
                            <li><a class=\"nk-social-dribbble\" href=\"#\"><span class=\"fab fa-dribbble\"></span></a></li>
                            <li><a class=\"nk-social-deviantart\" href=\"#\"><span class=\"fab fa-deviantart\"></span></a></li>
                            <li><a class=\"nk-social-flickr\" href=\"#\"><span class=\"fab fa-flickr\"></span></a></li>
                            <li><a class=\"nk-social-foursquare\" href=\"#\"><span class=\"fab fa-foursquare\"></span></a></li>
                            <li><a class=\"nk-social-github\" href=\"#\"><span class=\"fab fa-github\"></span></a></li>
                            <li><a class=\"nk-social-instagram\" href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                            <li><a class=\"nk-social-linkedin\" href=\"#\"><span class=\"fab fa-linkedin\"></span></a></li>
                            <li><a class=\"nk-social-medium\" href=\"#\"><span class=\"fab fa-medium\"></span></a></li>
                            <li><a class=\"nk-social-odnoklassniki\" href=\"#\"><span class=\"fab fa-odnoklassniki\"></span></a></li>
                            <li><a class=\"nk-social-paypal\" href=\"#\"><span class=\"fab fa-paypal\"></span></a></li>
                            <li><a class=\"nk-social-reddit\" href=\"#\"><span class=\"fab fa-reddit\"></span></a></li>
                            <li><a class=\"nk-social-skype\" href=\"#\"><span class=\"fab fa-skype\"></span></a></li>
                            <li><a class=\"nk-social-soundcloud\" href=\"#\"><span class=\"fab fa-soundcloud\"></span></a></li>
                            <li><a class=\"nk-social-slack\" href=\"#\"><span class=\"fab fa-slack\"></span></a></li>
                            <li><a class=\"nk-social-tumblr\" href=\"#\"><span class=\"fab fa-tumblr\"></span></a></li>
                            <li><a class=\"nk-social-vimeo\" href=\"#\"><span class=\"fab fa-vimeo\"></span></a></li>
                            <li><a class=\"nk-social-vk\" href=\"#\"><span class=\"fab fa-vk\"></span></a></li>
                            <li><a class=\"nk-social-wordpress\" href=\"#\"><span class=\"fab fa-wordpress\"></span></a></li>
                            <li><a class=\"nk-social-youtube\" href=\"#\"><span class=\"fab fa-youtube\"></span></a></li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>




<!-- START: Page Background -->

<img class=\"nk-page-background-top\" src=\"front/assets/images/bg-top-4.png\" alt=\"\">
<img class=\"nk-page-background-bottom\" src=\"front/assets/images/bg-bottom.png\" alt=\"\">

<!-- END: Page Background -->




<!-- START: Search Modal -->
<div class=\"nk-modal modal fade\" id=\"modalSearch\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span class=\"ion-android-close\"></span>
                </button>

                <h4 class=\"mb-0\">Search</h4>

                <div class=\"nk-gap-1\"></div>
                <form action=\"#\" class=\"nk-form nk-form-style-1\">
                    <input type=\"text\" value=\"\" name=\"search\" class=\"form-control\" placeholder=\"Type something and press Enter\" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->



<!-- START: Login Modal -->
<div class=\"nk-modal modal fade\" id=\"modalLogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span class=\"ion-android-close\"></span>
                </button>

                <h4 class=\"mb-0\"><span class=\"text-main-1\">Sign</span> In</h4>

                <div class=\"nk-gap-1\"></div>
                <form action=\"#\" class=\"nk-form text-white\">
                    <div class=\"row vertical-gap\">
                        <div class=\"col-md-6\">
                            Use email and password:

                            <div class=\"nk-gap\"></div>
                            <input type=\"email\" value=\"\" name=\"email\" class=\" form-control\" placeholder=\"Email\">

                            <div class=\"nk-gap\"></div>
                            <input type=\"password\" value=\"\" name=\"password\" class=\"required form-control\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-md-6\">
                            Or social account:

                            <div class=\"nk-gap\"></div>

                            <ul class=\"nk-social-links-2\">
                                <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                                <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                                <li><a class=\"nk-social-twitter\" href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"nk-gap-1\"></div>
                    <div class=\"row vertical-gap\">
                        <div class=\"col-md-6\">
                            <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block\">Sign In</a>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mnt-5\">
                                <small><a href=\"#\">Forgot your password?</a></small>
                            </div>
                            <div class=\"mnt-5\">
                                <small><a href=\"#\">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->




<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
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
        // line 956
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxproduit");
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






<script src=\"front/assets/vendor/object-fit-images/dist/ofi.min.js\"></script>

<!-- GSAP -->
<script src=\"front/assets/vendor/gsap/src/minified/TweenMax.min.js\"></script>
<script src=\"front/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js\"></script>

<!-- Popper -->
<script src=\"front/assets/vendor/popper.js/dist/umd/popper.min.js\"></script>

<!-- Bootstrap -->
<script src=\"front/assets/vendor/bootstrap/dist/js/bootstrap.min.js\"></script>

<!-- Sticky Kit -->
<script src=\"front/assets/vendor/sticky-kit/dist/sticky-kit.min.js\"></script>

<!-- Jarallax -->
<script src=\"front/assets/vendor/jarallax/dist/jarallax.min.js\"></script>
<script src=\"front/assets/vendor/jarallax/dist/jarallax-video.min.js\"></script>

<!-- imagesLoaded -->
<script src=\"front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>

<!-- Flickity -->
<script src=\"front/assets/vendor/flickity/dist/flickity.pkgd.min.js\"></script>

<!-- Photoswipe -->
<script src=\"front/assets/vendor/photoswipe/dist/photoswipe.min.js\"></script>
<script src=\"front/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js\"></script>

<!-- Jquery Validation -->
<script src=\"front/assets/vendor/jquery-validation/dist/jquery.validate.min.js\"></script>

<!-- Jquery Countdown + Moment -->
<script src=\"front/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js\"></script>
<script src=\"front/assets/vendor/moment/min/moment.min.js\"></script>
<script src=\"front/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js\"></script>

<!-- Hammer.js -->
<script src=\"front/assets/vendor/hammerjs/hammer.min.js\"></script>

<!-- NanoSroller -->
<script src=\"front/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js\"></script>

<!-- SoundManager2 -->
<script src=\"front/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js\"></script>

<!-- Seiyria Bootstrap Slider -->
<script src=\"front/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js\"></script>

<!-- Summernote -->
<script src=\"front/assets/vendor/summernote/dist/summernote-bs4.min.js\"></script>

<!-- nK Share -->
<script src=\"front/assets/plugins/nk-share/nk-share.js\"></script>

<!-- GoodGames -->
<script src=\"front/assets/js/goodgames.min.js\"></script>
<script src=\"front/assets/js/goodgames-init.js\"></script>
<!-- END: Scripts -->



</body>
</html>







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/afficherfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1041 => 956,  655 => 572,  647 => 570,  644 => 569,  640 => 568,  629 => 560,  577 => 510,  575 => 509,  522 => 458,  504 => 446,  500 => 445,  493 => 441,  489 => 439,  485 => 438,  204 => 160,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>


<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>GoodGames | Action Games</title>

    <meta name=\"description\" content=\"GoodGames - Bootstrap template for communities and games store\">
    <meta name=\"keywords\" content=\"game, gaming, template, HTML template, responsive, Bootstrap, premium\">
    <meta name=\"author\" content=\"_nK\">

    <link rel=\"icon\" type=\"image/png\" href=\"front/assets/images/favicon.png\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/bootstrap/dist/css/bootstrap.min.css\">

    <!-- FontAwesome -->
    <script defer src=\"front/assets/vendor/fontawesome-free/js/all.js\"></script>
    <script defer src=\"front/assets/vendor/fontawesome-free/js/v4-shims.js\"></script>

    <!-- IonIcons -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/ionicons/css/ionicons.min.css\">

    <!-- Flickity -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/flickity/dist/flickity.min.css\">

    <!-- Photoswipe -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/photoswipe/dist/photoswipe.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/photoswipe/dist/default-skin/default-skin.css\">

    <!-- Seiyria Bootstrap Slider -->
    <link rel=\"stylesheet\" href=\"front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css\">

    <!-- Summernote -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"front/assets/vendor/summernote/dist/summernote-bs4.css\">

    <!-- GoodGames -->
    <link rel=\"stylesheet\" href=\"front/assets/css/goodgames.css\">

    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"front/assets/css/custom.css\">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src=\"front/assets/vendor/jquery/dist/jquery.min.js\"></script>


</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>





<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class=\"nk-header nk-header-opaque\">



    <!-- START: Top Contacts -->
    <div class=\"nk-contacts-top\">
        <div class=\"container\">
            <div class=\"nk-contacts-left\">
                <ul class=\"nk-social-links\">
                    <li><a class=\"nk-social-rss\" href=\"#\"><span class=\"fa fa-rss\"></span></a></li>
                    <li><a class=\"nk-social-twitch\" href=\"#\"><span class=\"fab fa-twitch\"></span></a></li>
                    <li><a class=\"nk-social-steam\" href=\"#\"><span class=\"fab fa-steam\"></span></a></li>
                    <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                    <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                    <li><a class=\"nk-social-twitter\" href=\"#\" target=\"_blank\"><span class=\"fab fa-twitter\"></span></a></li>
                    <li><a class=\"nk-social-pinterest\" href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>

                    <
                </ul>
            </div>
            <div class=\"nk-contacts-right\">
                <ul class=\"nk-contacts-icons\">

                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modalSearch\">
                            <span class=\"fa fa-search\"></span>
                        </a>
                    </li>


                    <li>
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modalLogin\">
                            <span class=\"fa fa-user\"></span>
                        </a>
                    </li>


                    <li>
                    <span class=\"nk-cart-toggle\">
                        <span class=\"fa fa-shopping-cart\"></span>
                        <span class=\"nk-badge\">27</span>
                    </span>
                        <div class=\"nk-cart-dropdown\">

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-5-xs.jpg\" alt=\"In all revolutions of\">
                                </a>
                                <h3 class=\"nk-post-title\">
                                    <a href=\"#\" class=\"nk-cart-remove-item\"><span class=\"ion-android-close\"></span></a>
                                    <a href=\"store-product.html\">In all revolutions of</a>
                                </h3>
                                <div class=\"nk-gap-1\"></div>
                                <div class=\"nk-product-price\">€ 23.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-7-xs.jpg\" alt=\"With what mingled joy\">
                                </a>
                                <h3 class=\"nk-post-title\">
                                    <a href=\"#\" class=\"nk-cart-remove-item\"><span class=\"ion-android-close\"></span></a>
                                    <a href=\"store-product.html\">With what mingled joy</a>
                                </h3>
                                <div class=\"nk-gap-1\"></div>
                                <div class=\"nk-product-price\">€ 14.00</div>
                            </div>

                            <div class=\"nk-gap-2\"></div>
                            <div class=\"text-center\">
                                <a href=\"store-checkout.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white\">Proceed to Checkout</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <nav class=\"nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide\">
        <div class=\"container\">
            <div class=\"nk-nav-table\">

                <a  href=\"{{ path('front') }}\" class=\"nk-nav-logo\">
                    <img src=\"front/assets/images/logo.png\" alt=\"GoodGames\" width=\"199\">
                </a>

                <ul class=\"nk-nav nk-nav-right d-none d-lg-table-cell\" data-nav-mobile=\"#nk-nav-mobile\">

                    <li class=\" nk-drop-item\">
                        <a href=\"elements.html\">
                            Features

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"elements.html\">
                                    Elements (Shortcodes)

                                </a>
                            </li>
                            <li class=\" nk-drop-item\">
                                <a href=\"forum.html\">
                                    Forum

                                </a><ul class=\"dropdown\">

                                    <li>
                                        <a href=\"forum.html\">
                                            Forum

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"forum-topics.html\">
                                            Topics

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"forum-single-topic.html\">
                                            Single Topic

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"widgets.html\">
                                    Widgets

                                </a>
                            </li>
                            <li>
                                <a href=\"coming-soon.html\">
                                    Coming Soon

                                </a>
                            </li>
                            <li>
                                <a href=\"offline.html\">
                                    Offline

                                </a>
                            </li>
                            <li>
                                <a href=\"404.html\">
                                    404

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"blog-list.html\">
                            Blog

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"news.html\">
                                    News

                                </a>
                            </li>
                            <li class=\" nk-drop-item\">
                                <a href=\"blog-grid.html\">
                                    Blog With Sidebar

                                </a><ul class=\"dropdown\">

                                    <li>
                                        <a href=\"blog-grid.html\">
                                            Blog Grid

                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"blog-list.html\">
                                            Blog List

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"blog-fullwidth.html\">
                                    Blog Fullwidth

                                </a>
                            </li>
                            <li>
                                <a href=\"blog-article.html\">
                                    Blog Article

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"gallery.html\">
                            Gallery

                        </a>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"tournaments.html\">
                            Tournaments

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"tournaments.html\">
                                    Tournament

                                </a>
                            </li>
                            <li>
                                <a href=\"tournaments-teams.html\">
                                    Teams

                                </a>
                            </li>
                            <li>
                                <a href=\"tournaments-teammate.html\">
                                    Teammate

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"active nk-drop-item\">
                        <a href=\"store.html\">
                            Store

                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"store.html\">
                                    Store

                                </a>
                            </li>
                            <li>
                                <a href=\"store-product.html\">
                                    Product

                                </a>
                            </li>
                            <li class=\"active\">
                                <a href=\"store-catalog.html\">
                                    Catalog

                                </a>
                            </li>
                            <li>
                                <a href=\"store-catalog-alt.html\">
                                    Catalog Alt

                                </a>
                            </li>
                            <li>
                                <a href=\"store-checkout.html\">
                                    Checkout

                                </a>
                            </li>
                            <li>
                                <a href=\"store-cart.html\">
                                    Cart

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nk-nav nk-nav-right nk-nav-icons\">

                    <li class=\"single-icon d-lg-none\">
                        <a href=\"#\" class=\"no-link-effect\" data-nav-toggle=\"#nk-nav-mobile\">
                                <span class=\"nk-icon-burger\">
                                    <span class=\"nk-t-1\"></span>
                                    <span class=\"nk-t-2\"></span>
                                    <span class=\"nk-t-3\"></span>
                                </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>



<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
-->
<div id=\"nk-nav-mobile\" class=\"nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none\">
    <div class=\"nano\">
        <div class=\"nano-content\">
            <a href=\"index.html\" class=\"nk-nav-logo\">
                <img src=\"front/assets/images/logo.png\" alt=\"\" width=\"120\">

            </a>
            <div class=\"nk-navbar-mobile-content\">
                <ul class=\"nk-nav\">
                    <!-- Here will be inserted menu from [data-mobile-menu=\"#nk-nav-mobile\"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->



<div class=\"nk-main\">

    <!-- START: Breadcrumbs -->
    <div class=\"nk-gap-1\"></div>
    <div class=\"container\">
        <ul class=\"nk-breadcrumbs\">


            <li><a href=\"index.html\">Home</a></li>


            <li><span class=\"fa fa-angle-right\"></span></li>

            <li><a href=\"store.html\">Store</a></li>


            <li><span class=\"fa fa-angle-right\"></span></li>

            <li><span>Action Games</span></li>

        </ul>
    </div>
    <div class=\"nk-gap-1\"></div>
    <!-- END: Breadcrumbs -->


    <div class=\"container\" id=\"\">



    <div class=\"container\">
        <!-- START: Image Slider -->
        <div class=\"nk-image-slider\" data-autoplay=\"8000\" id=\"#all\">

            {% for c in produit %}

            <div class=\"nk-image-slider-item\">
                <img src=\"{{asset('images/'~c.image)}}\" alt=\"So saying he unbuckled\" alt=\"\" class=\"nk-image-slider-img\" data-thumb=\"front/assets/images/slide-1-thumb.jpg\">

                <div class=\"nk-image-slider-content\">

                    <h3 class=\"h4\">{{ c.marque }}</h3>
                    <p class=\"text-white\">{{ c.prix }} DT</p>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1\">Read More</a>

                </div>

            </div>





{% endfor %}


            </div>

        </div>
        <!-- END: Image Slider -->

        <!-- START: Categories -->

        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-mouse.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PC</a></h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-gamepad.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\">Price</h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">Start from higher</a></h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"front/assets/images/icon-gamepad-2.png\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">Xbox</a></h3>
                        <h3 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->
        <link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-8\">
                <!-- START: Products -->
{% include 'produit/ajax.html.twig' %}


                <!-- END: Products -->

                <!-- START: Pagination -->
                <div class=\"nk-gap-3\"></div>
                <div class=\"nk-pagination nk-pagination-center\">
                    <a href=\"#\" class=\"nk-pagination-prev\">
                        <span class=\"ion-ios-arrow-back\"></span>
                    </a>
                    <nav>
                        <a class=\"nk-pagination-current\" href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\">3</a>
                        <a href=\"#\">4</a>
                        <span>...</span>
                        <a href=\"#\">14</a>
                    </nav>
                    <a href=\"#\" class=\"nk-pagination-next\">
                        <span class=\"ion-ios-arrow-forward\"></span>
                    </a>
                </div>
                <!-- END: Pagination -->
            </div>
            <div class=\"col-lg-4\">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class=\"nk-sidebar nk-sidebar-right nk-sidebar-sticky\">

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


                    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                    <script
                            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
                    </script>


                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Category</span> Menu</span></h4>
                        <div class=\"nk-widget-content\">
                            <ul class=\"nk-widget-categories\">
                                {% for x in categorie %}

                                <li><a href=\"#\">{{ x.nomcateg }}</a></li>
                                {% endfor %}

                            </ul>
                        </div>
                    </div>

                    <div class=\"nk-widget nk-widget-highlighted\"   id=\"filter\" >
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\"   id=\"filter\" >Price</span> Filter</span></h4>
                        <div class=\"nk-widget-content\"   id=\"filter\">
                            <div class=\"nk-input-slider\"   id=\"filter\">
                                <input
                                        type=\"text\"
                                        name=\"filter\"
                                        id=\"filter\"
                                        data-slider-min=\"0\"
                                        data-slider-max=\"18000\"
                                        data-slider-step=\"1\"
                                        data-slider-value=\"[200, 1200]\"
                                >
                                <div class=\"nk-gap\"></div>
                                <div>
                                    <div class=\"text-white mt-4 float-left\"   id=\"filter\">
                                        PRICE:
                                        <strong class=\"text-main-1\">€ <span class=\"nk-input-slider-value-0\"></span></strong>
                                        -
                                        <strong class=\"text-main-1\">€ <span class=\"nk-input-slider-value-1\"></span></strong>
                                    </div>
                                    <a href=\"#\"   id=\"filter\"    class=\"nk-btn nk-btn-rounded nk-btn-color-white float-right\">Apply</a>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>

                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Most</span> Popular</span></h4>
                        <div class=\"nk-widget-content\">

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-1-xs.jpg\" alt=\"So saying he unbuckled\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">So saying he unbuckled</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"4\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"far fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 23.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-2-xs.jpg\" alt=\"However, I have reason\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">However, I have reason</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"2.5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fas fa-star-half\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 32.00</div>
                            </div>

                            <div class=\"nk-widget-post\">
                                <a href=\"store-product.html\" class=\"nk-post-image\">
                                    <img src=\"front/assets/images/product-3-xs.jpg\" alt=\"It was some time before\">
                                </a>
                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">It was some time before</a></h3>
                                <div class=\"nk-product-rating\" data-rating=\"5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i></div>
                                <div class=\"nk-product-price\">€ 14.00</div>
                            </div>

                        </div>
                    </div>



                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class=\"nk-gap-2\"></div>



    <!-- START: Footer -->
    <footer class=\"nk-footer\">

        <div class=\"container\">
            <div class=\"nk-gap-3\"></div>
            <div class=\"row vertical-gap\">
                <div class=\"col-md-6\">
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">Contact</span> With Us</h4>
                        <div class=\"nk-widget-content\">
                            <form action=\"php/ajax-contact-form.php\" class=\"nk-form nk-form-ajax\">
                                <div class=\"row vertical-gap sm-gap\">
                                    <div class=\"col-md-6\">
                                        <input type=\"email\" class=\"form-control required\" name=\"email\" placeholder=\"Email *\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control required\" name=\"name\" placeholder=\"Name *\">
                                    </div>
                                </div>
                                <div class=\"nk-gap\"></div>
                                <textarea class=\"form-control required\" name=\"message\" rows=\"5\" placeholder=\"Message *\"></textarea>
                                <div class=\"nk-gap-1\"></div>
                                <button class=\"nk-btn nk-btn-rounded nk-btn-color-white\">
                                    <span>Send</span>
                                    <span class=\"icon\"><i class=\"ion-paper-airplane\"></i></span>
                                </button>
                                <div class=\"nk-form-response-success\"></div>
                                <div class=\"nk-form-response-error\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">Latest</span> Posts</h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"row vertical-gap sm-gap\">

                                <div class=\"col-lg-6\">
                                    <div class=\"nk-widget-post-2\">
                                        <a href=\"blog-article.html\" class=\"nk-post-image\">
                                            <img src=\"front/assets/images/post-1-sm.jpg\" alt=\"\">
                                        </a>
                                        <div class=\"nk-post-title\"><a href=\"blog-article.html\">Smell magic in the air. Or maybe barbecue</a></div>
                                        <div class=\"nk-post-date\">
                                            <span class=\"fa fa-calendar\"></span> Sep 18, 2018
                                            <span class=\"fa fa-comments\"></span> <a href=\"#\">4</a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-lg-6\">
                                    <div class=\"nk-widget-post-2\">
                                        <a href=\"blog-article.html\" class=\"nk-post-image\">
                                            <img src=\"front/assets/images/post-2-sm.jpg\" alt=\"\">
                                        </a>
                                        <div class=\"nk-post-title\"><a href=\"blog-article.html\">Grab your sword and fight the Horde</a></div>
                                        <div class=\"nk-post-date\">
                                            <span class=\"fa fa-calendar\"></span> Sep 5, 2018
                                            <span class=\"fa fa-comments\"></span> <a href=\"#\">7</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"nk-widget\">
                        <h4 class=\"nk-widget-title\"><span class=\"text-main-1\">In</span> Twitter</h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-twitter-list\" data-twitter-count=\"1\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"nk-gap-3\"></div>
        </div>

        <div class=\"nk-copyright\">
            <div class=\"container\">
                <div class=\"nk-copyright-left\">
                    <a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
                </div>
                <div class=\"nk-copyright-right\">
                    <ul class=\"nk-social-links-2\">
                        <li><a class=\"nk-social-rss\" href=\"#\"><span class=\"fa fa-rss\"></span></a></li>
                        <li><a class=\"nk-social-twitch\" href=\"#\"><span class=\"fab fa-twitch\"></span></a></li>
                        <li><a class=\"nk-social-steam\" href=\"#\"><span class=\"fab fa-steam\"></span></a></li>
                        <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                        <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                        <li><a class=\"nk-social-twitter\" href=\"#\" target=\"_blank\"><span class=\"fab fa-twitter\"></span></a></li>
                        <li><a class=\"nk-social-pinterest\" href=\"#\"><span class=\"fab fa-pinterest-p\"></span></a></li>

                        <!-- Additional Social Buttons
                            <li><a class=\"nk-social-behance\" href=\"#\"><span class=\"fab fa-behance\"></span></a></li>
                            <li><a class=\"nk-social-bitbucket\" href=\"#\"><span class=\"fab fa-bitbucket\"></span></a></li>
                            <li><a class=\"nk-social-dropbox\" href=\"#\"><span class=\"fab fa-dropbox\"></span></a></li>
                            <li><a class=\"nk-social-dribbble\" href=\"#\"><span class=\"fab fa-dribbble\"></span></a></li>
                            <li><a class=\"nk-social-deviantart\" href=\"#\"><span class=\"fab fa-deviantart\"></span></a></li>
                            <li><a class=\"nk-social-flickr\" href=\"#\"><span class=\"fab fa-flickr\"></span></a></li>
                            <li><a class=\"nk-social-foursquare\" href=\"#\"><span class=\"fab fa-foursquare\"></span></a></li>
                            <li><a class=\"nk-social-github\" href=\"#\"><span class=\"fab fa-github\"></span></a></li>
                            <li><a class=\"nk-social-instagram\" href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                            <li><a class=\"nk-social-linkedin\" href=\"#\"><span class=\"fab fa-linkedin\"></span></a></li>
                            <li><a class=\"nk-social-medium\" href=\"#\"><span class=\"fab fa-medium\"></span></a></li>
                            <li><a class=\"nk-social-odnoklassniki\" href=\"#\"><span class=\"fab fa-odnoklassniki\"></span></a></li>
                            <li><a class=\"nk-social-paypal\" href=\"#\"><span class=\"fab fa-paypal\"></span></a></li>
                            <li><a class=\"nk-social-reddit\" href=\"#\"><span class=\"fab fa-reddit\"></span></a></li>
                            <li><a class=\"nk-social-skype\" href=\"#\"><span class=\"fab fa-skype\"></span></a></li>
                            <li><a class=\"nk-social-soundcloud\" href=\"#\"><span class=\"fab fa-soundcloud\"></span></a></li>
                            <li><a class=\"nk-social-slack\" href=\"#\"><span class=\"fab fa-slack\"></span></a></li>
                            <li><a class=\"nk-social-tumblr\" href=\"#\"><span class=\"fab fa-tumblr\"></span></a></li>
                            <li><a class=\"nk-social-vimeo\" href=\"#\"><span class=\"fab fa-vimeo\"></span></a></li>
                            <li><a class=\"nk-social-vk\" href=\"#\"><span class=\"fab fa-vk\"></span></a></li>
                            <li><a class=\"nk-social-wordpress\" href=\"#\"><span class=\"fab fa-wordpress\"></span></a></li>
                            <li><a class=\"nk-social-youtube\" href=\"#\"><span class=\"fab fa-youtube\"></span></a></li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>




<!-- START: Page Background -->

<img class=\"nk-page-background-top\" src=\"front/assets/images/bg-top-4.png\" alt=\"\">
<img class=\"nk-page-background-bottom\" src=\"front/assets/images/bg-bottom.png\" alt=\"\">

<!-- END: Page Background -->




<!-- START: Search Modal -->
<div class=\"nk-modal modal fade\" id=\"modalSearch\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span class=\"ion-android-close\"></span>
                </button>

                <h4 class=\"mb-0\">Search</h4>

                <div class=\"nk-gap-1\"></div>
                <form action=\"#\" class=\"nk-form nk-form-style-1\">
                    <input type=\"text\" value=\"\" name=\"search\" class=\"form-control\" placeholder=\"Type something and press Enter\" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->



<!-- START: Login Modal -->
<div class=\"nk-modal modal fade\" id=\"modalLogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span class=\"ion-android-close\"></span>
                </button>

                <h4 class=\"mb-0\"><span class=\"text-main-1\">Sign</span> In</h4>

                <div class=\"nk-gap-1\"></div>
                <form action=\"#\" class=\"nk-form text-white\">
                    <div class=\"row vertical-gap\">
                        <div class=\"col-md-6\">
                            Use email and password:

                            <div class=\"nk-gap\"></div>
                            <input type=\"email\" value=\"\" name=\"email\" class=\" form-control\" placeholder=\"Email\">

                            <div class=\"nk-gap\"></div>
                            <input type=\"password\" value=\"\" name=\"password\" class=\"required form-control\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-md-6\">
                            Or social account:

                            <div class=\"nk-gap\"></div>

                            <ul class=\"nk-social-links-2\">
                                <li><a class=\"nk-social-facebook\" href=\"#\"><span class=\"fab fa-facebook\"></span></a></li>
                                <li><a class=\"nk-social-google-plus\" href=\"#\"><span class=\"fab fa-google-plus\"></span></a></li>
                                <li><a class=\"nk-social-twitter\" href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"nk-gap-1\"></div>
                    <div class=\"row vertical-gap\">
                        <div class=\"col-md-6\">
                            <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block\">Sign In</a>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mnt-5\">
                                <small><a href=\"#\">Forgot your password?</a></small>
                            </div>
                            <div class=\"mnt-5\">
                                <small><a href=\"#\">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->




<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
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
                url : \"{{ path('ajaxproduit') }}\",
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






<script src=\"front/assets/vendor/object-fit-images/dist/ofi.min.js\"></script>

<!-- GSAP -->
<script src=\"front/assets/vendor/gsap/src/minified/TweenMax.min.js\"></script>
<script src=\"front/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js\"></script>

<!-- Popper -->
<script src=\"front/assets/vendor/popper.js/dist/umd/popper.min.js\"></script>

<!-- Bootstrap -->
<script src=\"front/assets/vendor/bootstrap/dist/js/bootstrap.min.js\"></script>

<!-- Sticky Kit -->
<script src=\"front/assets/vendor/sticky-kit/dist/sticky-kit.min.js\"></script>

<!-- Jarallax -->
<script src=\"front/assets/vendor/jarallax/dist/jarallax.min.js\"></script>
<script src=\"front/assets/vendor/jarallax/dist/jarallax-video.min.js\"></script>

<!-- imagesLoaded -->
<script src=\"front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>

<!-- Flickity -->
<script src=\"front/assets/vendor/flickity/dist/flickity.pkgd.min.js\"></script>

<!-- Photoswipe -->
<script src=\"front/assets/vendor/photoswipe/dist/photoswipe.min.js\"></script>
<script src=\"front/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js\"></script>

<!-- Jquery Validation -->
<script src=\"front/assets/vendor/jquery-validation/dist/jquery.validate.min.js\"></script>

<!-- Jquery Countdown + Moment -->
<script src=\"front/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js\"></script>
<script src=\"front/assets/vendor/moment/min/moment.min.js\"></script>
<script src=\"front/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js\"></script>

<!-- Hammer.js -->
<script src=\"front/assets/vendor/hammerjs/hammer.min.js\"></script>

<!-- NanoSroller -->
<script src=\"front/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js\"></script>

<!-- SoundManager2 -->
<script src=\"front/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js\"></script>

<!-- Seiyria Bootstrap Slider -->
<script src=\"front/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js\"></script>

<!-- Summernote -->
<script src=\"front/assets/vendor/summernote/dist/summernote-bs4.min.js\"></script>

<!-- nK Share -->
<script src=\"front/assets/plugins/nk-share/nk-share.js\"></script>

<!-- GoodGames -->
<script src=\"front/assets/js/goodgames.min.js\"></script>
<script src=\"front/assets/js/goodgames-init.js\"></script>
<!-- END: Scripts -->



</body>
</html>







", "produit/afficherfront.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\afficherfront.html.twig");
    }
}
