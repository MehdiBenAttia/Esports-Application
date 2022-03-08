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

/* produit/detail.html.twig */
class __TwigTemplate_01653eda45017a71e28773784116fdf3008fe4c9971ffc829825193e73df0695 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/detail.html.twig"));

        // line 1
        echo "







<!DOCTYPE html>

";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/fontawesome-free/js/all.js"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/fontawesome-free/js/v4-shims.js"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/flickity/dist/flickity.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/photoswipe/dist/photoswipe.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/photoswipe/dist/default-skin/default-skin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/summernote/dist/summernote-bs4.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/goodgames.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/slide-5.jpg"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <title>GoodGames</title>

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
                                        <a href=\"front/store-product.html\">With what mingled joy</a>
                                    </h3>
                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"nk-product-price\">€ 14.00</div>
                                </div>

                                <div class=\"nk-gap-2\"></div>
                                <div class=\"text-center\">
                                    <a href=\"front/store-checkout.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white\">Proceed to Checkout</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->



        <!--
            START: Navbar

            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
        -->
        <nav class=\"nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide\">
            <div class=\"container\">
                <div class=\"nk-nav-table\">

                    <a href=\"index.html\" class=\"nk-nav-logo\">
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
                            <a href=\"";
        // line 370
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfront");
        echo "\">
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

                <li><a href=\"";
        // line 477
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfront");
        echo "\">Store</a></li>


                <li><span class=\"fa fa-angle-right\"></span></li>

                <li><a href=\"";
        // line 482
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfront");
        echo "\">Action Games</a></li>

                <li><span class=\"fa fa-angle-right\"></span></li>

                <li><span> Product Detail </span></li>

            </ul>
        </div>
        <div class=\"nk-gap-1\"></div>
        <!-- END: Breadcrumbs -->




        <div class=\"container\">
            <div class=\"row vertical-gap\">
                <div class=\"col-lg-8\">
                    <br class=\"nk-store-product\">
                        <div class=\"row vertical-gap\">
                            <div class=\"col-md-6\">
                                <!-- START: Product Photos -->
                                <div class=\"nk-popup-gallery\">
                                    <div class=\"nk-gallery-item-box\">
                                        <a href=\"front/assets/images/product-6.jpg\" class=\"nk-gallery-item\" data-size=\"1200x554\">
                                            <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                            <img src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 507, $this->source); })()), "image", [], "any", false, false, false, 507))), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </div>

                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"row vertical-gap sm-gap\">
                                        <div class=\"col-6 col-md-4\">
                                            <div class=\"nk-gallery-item-box\">
                                                <a src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 515, $this->source); })()), "image", [], "any", false, false, false, 515))), "html", null, true);
        echo "\" class=\"nk-gallery-item\" data-size=\"622x942\">
                                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                                    <img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 517, $this->source); })()), "image", [], "any", false, false, false, 517))), "html", null, true);
        echo "\" alt=\"\">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- END: Product Photos -->
                            </div>
                            <div class=\"col-md-6\">

                                <h2 class=\"nk-product-title h3\">";
        // line 529
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 529, $this->source); })()), "nom", [], "any", false, false, false, 529), "html", null, true);
        echo " </h2>



                                <div class=\"nk-product-description\">
                                    <p>";
        // line 534
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 534, $this->source); })()), "type", [], "any", false, false, false, 534), "html", null, true);
        echo ".</p>
                                </div>

                                <!-- START: Add to Cart -->
                                <div class=\"nk-gap-2\"></div>
                                <form action=\"#\" class=\"nk-product-addtocart\">
                                    <div class=\"nk-product-price\">€ ";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 540, $this->source); })()), "prix", [], "any", false, false, false, 540), "html", null, true);
        echo "</div>
                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"input-group\">
                                        <input type=\"number\" class=\"form-control\" value=\"1\" min=\"1\" max=\"21\">
                                        <button class=\"nk-btn nk-btn-rounded nk-btn-color-main-1\">Add to Cart</button>
                                        <a class=\"nk-btn nk-btn-rounded nk-btn-color-main-1\"  href=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imp", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 545, $this->source); })()), "id", [], "any", false, false, false, 545)]), "html", null, true);
        echo "\">imp </a>


                                    </div>
                                </form>

                                <div class=\"nk-gap-3\"></div>
                                <!-- END: Add to Cart -->

                                <!-- START: Meta -->
                                <div class=\"nk-product-meta\">
                                    <div><strong>REF</strong>: ";
        // line 556
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 556, $this->source); })()), "reference", [], "any", false, false, false, 556), "html", null, true);
        echo "</div>
                                    <div><strong>Categories</strong>:   ";
        // line 557
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 557, $this->source); })()), "categorie", [], "any", false, false, false, 557), "nomcateg", [], "any", false, false, false, 557), "html", null, true);
        echo " </div>
                                </div>
                            </div>
                        </div>

                        <!-- START: Share -->
                        <div class=\"nk-gap-2\"></div>
                        <div class=\"nk-post-share\">
                            <span class=\"h5\">Share Product:</span>
                            <ul class=\"nk-social-links-2\">


                            </ul>
                        </div>
                        <!-- END: Share -->

                    </br>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Ajouter un avis </h4>
                            <p class=\"card-description\">
                            </p>

                            ";
        // line 579
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 579, $this->source); })()), 'form_start');
        echo "
                            <div class=\"forms-sample\">



                                <div class=\"form-group\">
                                    ";
        // line 585
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 585, $this->source); })()), "noteProduit", [], "any", false, false, false, 585), 'label', ["label" => "noteProduit"]);
        echo "
                                    ";
        // line 586
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 586, $this->source); })()), "noteProduit", [], "any", false, false, false, 586), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "noteProduit"]]);
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 590
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 590, $this->source); })()), "avis", [], "any", false, false, false, 590), 'label', ["label" => "avis"]);
        echo "
                                    ";
        // line 591
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 591, $this->source); })()), "avis", [], "any", false, false, false, 591), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "avis"]]);
        echo "
                                </div>







                                <div class=\"input-group col-md-6\">
                                    ";
        // line 601
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 601, $this->source); })()), "submit", [], "any", false, false, false, 601), 'widget', ["attr" => ["class" => "form-control btn btn-primary mr-2"]]);
        echo "
                                    ";
        // line 602
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 602, $this->source); })()), "cancel", [], "any", false, false, false, 602), 'widget', ["attr" => ["class" => "btn btn-danger"]]);
        echo "
                                </div>
                                ";
        // line 604
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 604, $this->source); })()), 'form_end');
        echo "
                            </form>

                        </div>







                </div>

                    <!-- END: Reply -->

                        <div class=\"clearfix\"></div>
                        <div class=\"nk-gap-2\"></div>
                        <div class=\"nk-comments\">



                        </div>
                    </div>
            <!-- START: Comment -->
            <div class=\"nk-comment\">
                <div class=\"nk-comment-meta\">
            ";
        // line 630
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 630, $this->source); })()), "reviews", [], "any", false, false, false, 630));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 631
            echo "                <div class=\"nk-comment\">
                    <div class=\"nk-comment-meta\">
                        by <a href=\"#\">user</a>

                    </div>
                    <div class=\"nk-comment-text\">
                        <p>";
            // line 637
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["var"], "avis", [], "any", false, false, false, 637), "html", null, true);
            echo "</p>

                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "                </div>
            </div>
            <!-- END: Comment --

        <div class=\"nk-gap-2\"></div>
        <!-- START: Tabs -->
                        <div class=\"nk-tabs\">


                            <div class=\"tab-content\">


                            </div>
                        </div>
                        <!-- END: Tabs -->
                    </div>


                </div>

            </div>
        </div>
        <div class=\"nk-gap-2\"></div>





    </div>




    <!-- START: Page Background -->

    <img class=\"nk-page-background-top\" src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/bg-top-4.png"), "html", null, true);
        echo "\" alt=\"\">
    <img class=\"nk-page-background-bottom\" src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/images/bg-top-4.png"), "html", null, true);
        echo "\" alt=\"\">



    <!-- END: Page Background -->













    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  879 => 678,  875 => 677,  838 => 642,  827 => 637,  819 => 631,  815 => 630,  786 => 604,  781 => 602,  777 => 601,  764 => 591,  760 => 590,  753 => 586,  749 => 585,  740 => 579,  715 => 557,  711 => 556,  697 => 545,  689 => 540,  680 => 534,  672 => 529,  657 => 517,  652 => 515,  641 => 507,  613 => 482,  605 => 477,  495 => 370,  154 => 31,  144 => 30,  129 => 25,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  79 => 12,  69 => 11,  59 => 30,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("







<!DOCTYPE html>

{% block stylesheets %}
    <link href=\"{{ asset('front/assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/fontawesome-free/js/all.js') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/fontawesome-free/js/v4-shims.js') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/ionicons/css/ionicons.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/flickity/dist/flickity.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/photoswipe/dist/photoswipe.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

    <link href=\"{{ asset('front/assets/vendor/summernote/dist/summernote-bs4.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/css/goodgames.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/css/custom.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/css/custom.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('front/assets/images/slide-5.jpg') }}\" type=\"text/css\" rel=\"stylesheet\" />



{% endblock %}
{% block body %}
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <title>GoodGames</title>

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
                                        <a href=\"front/store-product.html\">With what mingled joy</a>
                                    </h3>
                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"nk-product-price\">€ 14.00</div>
                                </div>

                                <div class=\"nk-gap-2\"></div>
                                <div class=\"text-center\">
                                    <a href=\"front/store-checkout.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white\">Proceed to Checkout</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->



        <!--
            START: Navbar

            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
        -->
        <nav class=\"nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide\">
            <div class=\"container\">
                <div class=\"nk-nav-table\">

                    <a href=\"index.html\" class=\"nk-nav-logo\">
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
                            <a href=\"{{ path('affichfront') }}\">
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

                <li><a href=\"{{ path('affichfront') }}\">Store</a></li>


                <li><span class=\"fa fa-angle-right\"></span></li>

                <li><a href=\"{{ path('affichfront') }}\">Action Games</a></li>

                <li><span class=\"fa fa-angle-right\"></span></li>

                <li><span> Product Detail </span></li>

            </ul>
        </div>
        <div class=\"nk-gap-1\"></div>
        <!-- END: Breadcrumbs -->




        <div class=\"container\">
            <div class=\"row vertical-gap\">
                <div class=\"col-lg-8\">
                    <br class=\"nk-store-product\">
                        <div class=\"row vertical-gap\">
                            <div class=\"col-md-6\">
                                <!-- START: Product Photos -->
                                <div class=\"nk-popup-gallery\">
                                    <div class=\"nk-gallery-item-box\">
                                        <a href=\"front/assets/images/product-6.jpg\" class=\"nk-gallery-item\" data-size=\"1200x554\">
                                            <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                            <img src=\"{{asset('images/'~produit.image)}}\" alt=\"\">
                                        </a>
                                    </div>

                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"row vertical-gap sm-gap\">
                                        <div class=\"col-6 col-md-4\">
                                            <div class=\"nk-gallery-item-box\">
                                                <a src=\"{{asset('images/'~produit.image)}}\" class=\"nk-gallery-item\" data-size=\"622x942\">
                                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                                    <img src=\"{{asset('images/'~produit.image)}}\" alt=\"\">
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- END: Product Photos -->
                            </div>
                            <div class=\"col-md-6\">

                                <h2 class=\"nk-product-title h3\">{{  produit.nom}} </h2>



                                <div class=\"nk-product-description\">
                                    <p>{{  produit.type}}.</p>
                                </div>

                                <!-- START: Add to Cart -->
                                <div class=\"nk-gap-2\"></div>
                                <form action=\"#\" class=\"nk-product-addtocart\">
                                    <div class=\"nk-product-price\">€ {{  produit.prix}}</div>
                                    <div class=\"nk-gap-1\"></div>
                                    <div class=\"input-group\">
                                        <input type=\"number\" class=\"form-control\" value=\"1\" min=\"1\" max=\"21\">
                                        <button class=\"nk-btn nk-btn-rounded nk-btn-color-main-1\">Add to Cart</button>
                                        <a class=\"nk-btn nk-btn-rounded nk-btn-color-main-1\"  href=\"{{ path('imp',{'id':produit.id}) }}\">imp </a>


                                    </div>
                                </form>

                                <div class=\"nk-gap-3\"></div>
                                <!-- END: Add to Cart -->

                                <!-- START: Meta -->
                                <div class=\"nk-product-meta\">
                                    <div><strong>REF</strong>: {{  produit.reference}}</div>
                                    <div><strong>Categories</strong>:   {{ produit.categorie.nomcateg }} </div>
                                </div>
                            </div>
                        </div>

                        <!-- START: Share -->
                        <div class=\"nk-gap-2\"></div>
                        <div class=\"nk-post-share\">
                            <span class=\"h5\">Share Product:</span>
                            <ul class=\"nk-social-links-2\">


                            </ul>
                        </div>
                        <!-- END: Share -->

                    </br>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Ajouter un avis </h4>
                            <p class=\"card-description\">
                            </p>

                            {{ form_start(f) }}
                            <div class=\"forms-sample\">



                                <div class=\"form-group\">
                                    {{ form_label(f.noteProduit, 'noteProduit', ) }}
                                    {{ form_widget(f.noteProduit, {'attr': {'class': 'form-control','placeholder': 'noteProduit'}}) }}
                                </div>

                                <div class=\"form-group\">
                                    {{ form_label(f.avis, 'avis', ) }}
                                    {{ form_widget(f.avis, {'attr': {'class': 'form-control','placeholder': 'avis'}}) }}
                                </div>







                                <div class=\"input-group col-md-6\">
                                    {{ form_widget(f.submit, {'attr': {'class': 'form-control btn btn-primary mr-2' }}) }}
                                    {{ form_widget(f.cancel, {'attr': {'class': 'btn btn-danger' }}) }}
                                </div>
                                {{ form_end(f) }}
                            </form>

                        </div>







                </div>

                    <!-- END: Reply -->

                        <div class=\"clearfix\"></div>
                        <div class=\"nk-gap-2\"></div>
                        <div class=\"nk-comments\">



                        </div>
                    </div>
            <!-- START: Comment -->
            <div class=\"nk-comment\">
                <div class=\"nk-comment-meta\">
            {% for var in produit.reviews %}
                <div class=\"nk-comment\">
                    <div class=\"nk-comment-meta\">
                        by <a href=\"#\">user</a>

                    </div>
                    <div class=\"nk-comment-text\">
                        <p>{{ var.avis }}</p>

                    </div>
                </div>
            {% endfor %}
                </div>
            </div>
            <!-- END: Comment --

        <div class=\"nk-gap-2\"></div>
        <!-- START: Tabs -->
                        <div class=\"nk-tabs\">


                            <div class=\"tab-content\">


                            </div>
                        </div>
                        <!-- END: Tabs -->
                    </div>


                </div>

            </div>
        </div>
        <div class=\"nk-gap-2\"></div>





    </div>




    <!-- START: Page Background -->

    <img class=\"nk-page-background-top\" src=\"{{asset('front/assets/images/bg-top-4.png')}}\" alt=\"\">
    <img class=\"nk-page-background-bottom\" src=\"{{asset('front/assets/images/bg-top-4.png')}}\" alt=\"\">



    <!-- END: Page Background -->













    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
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
{% endblock %}
", "produit/detail.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\produit\\detail.html.twig");
    }
}
