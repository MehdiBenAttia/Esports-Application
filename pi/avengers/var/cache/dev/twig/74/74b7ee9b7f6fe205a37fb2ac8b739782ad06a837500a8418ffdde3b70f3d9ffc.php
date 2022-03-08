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

/* front.html.twig */
class __TwigTemplate_82750118efbda08a6fbaea641c121f356710e88e39d17097db81363284993794 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'calendrier' => [$this, 'block_calendrier'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>


<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>GoodGames | Community and Store HTML Game Template</title>

    <meta name=\"description\" content=\"GoodGames - Bootstrap template for communities and games store\">
    <meta name=\"keywords\" content=\"game, gaming, template, HTML template, responsive, Bootstrap, premium\">
    <meta name=\"author\" content=\"_nK\">

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/favicon.png"), "html", null, true);
        echo "\">


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700')}}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- FontAwesome -->
    <script defer src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/fontawesome-free/js/all.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/fontawesome-free/js/v4-shims.js"), "html", null, true);
        echo "\"></script>

    <!-- IonIcons -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">

    <!-- Flickity -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/flickity/dist/flickity.min.css"), "html", null, true);
        echo "\">

    <!-- Photoswipe -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/photoswipe/dist/photoswipe.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/photoswipe/dist/default-skin/default-skin.css"), "html", null, true);
        echo "\">

    <!-- Seiyria Bootstrap Slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css"), "html", null, true);
        echo "\">

    <!-- Summernote -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/summernote/dist/summernote-bs4.css"), "html", null, true);
        echo "\">

    <!-- GoodGames -->
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/goodgames.css"), "html", null, true);
        echo "\">

    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/custom.css"), "html", null, true);
        echo "\">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>


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
                                <a href=\"Front/html-store-gaming-template/store-product.html\" class=\"nk-post-image\">
                                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/product-5-xs.jpg"), "html", null, true);
        echo "\" alt=\"In all revolutions of\">
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
                                    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/product-7-xs.jpg"), "html", null, true);
        echo "\" alt=\"With what mingled joy\">
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
                    <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"GoodGames\" width=\"199\">
                </a>

                <ul class=\"nk-nav nk-nav-right d-none d-lg-table-cell\" data-nav-mobile=\"#nk-nav-mobile\">

                    <li class=\" nk-drop-item\">
                        <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">
                            Home
                        </a>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"blog-list.html\">
                            Blog

                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichfront");
        echo "\">
                            Produit

                        </a>
                    </li>

                    <li class=\" nk-drop-item\">
                        <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournament");
        echo "\">
                            Compétition
                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournament");
        echo "\">
                                    Compétition

                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("games");
        echo "\">
                                    Jeux
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"store.html\">
                            Store

                        </a>
                    </li>
                    <li>
                        <a href=\"gallery.html\">
                            Contactez-nous

                        </a>
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
                <img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"120\">
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

    <div class=\"nk-gap-2\"></div>



    <div class=\"container\">

        <!-- START: Image Slider -->
        <div class=\"nk-image-slider\" data-autoplay=\"2000\">

            ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 313, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 314
            echo "            <div class=\"nk-image-slider-item\">
                <img width=\"1110px\" src=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 315))), "html", null, true);
            echo "\" alt=\"\" class=\"nk-image-slider-img\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 315))), "html", null, true);
            echo "\">

                <div class=\"nk-image-slider-content\">

                    <h3 class=\"h4\">Meilleurs jeux en ligne!</h3>
                    <p class=\"text-white\">Ne ratez pas votre chance,participez aux compétitions et affrontez les meilleurs joueurs du monde afin d'atteindre le rang ultime. </p>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1\">Read More</a>

                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "

        </div>
        <!-- END: Image Slider -->

        <!-- START: Categories -->
        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/icon-mouse.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PC</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("games");
        echo "\">View Games</a></h4>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/icon-gamepad.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PS4</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h4>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/images/icon-gamepad-2.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">Xbox</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->

";
        // line 375
        echo "
";
        // line 380
        echo "

";
        // line 388
        echo "
";
        // line 392
        echo "
";
        // line 399
        echo "

";
        // line 407
        echo "
";
        // line 411
        echo "
";
        // line 418
        echo "

";
        // line 426
        echo "
";
        // line 430
        echo "
";
        // line 437
        echo "

";
        // line 445
        echo "
";
        // line 449
        echo "
";
        // line 456
        echo "

";
        // line 464
        echo "
";
        // line 468
        echo "
";
        // line 475
        echo "

";
        // line 483
        echo "
";
        // line 487
        echo "
";
        // line 494
        echo "
";
        // line 520
        echo "
";
        // line 524
        echo "

";
        // line 532
        echo "
";
        // line 536
        echo "
";
        // line 549
        echo "

";
        // line 557
        echo "
";
        // line 561
        echo "
";
        // line 574
        echo "

";
        // line 582
        echo "
";
        // line 586
        echo "
";
        // line 599
        echo "

";
        // line 607
        echo "
";
        // line 611
        echo "
";
        // line 624
        echo "
";
        // line 627
        echo "        <!-- END: Latest News -->

        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-8\">

";
        // line 638
        echo "

";
        // line 661
        echo "

";
        // line 684
        echo "
";
        // line 687
        echo "                <!-- END: Latest Posts -->

                <!-- START: Latest Matches -->
";
        // line 752
        echo "
";
        // line 784
        echo "
";
        // line 816
        echo "                <!-- END: Latest Matches -->

                ";
        // line 818
        $this->displayBlock('body', $context, $blocks);
        // line 821
        echo "                <!-- START: Tabbed News  -->
";
        // line 896
        echo "

";
        // line 914
        echo "

";
        // line 932
        echo "

";
        // line 950
        echo "

";
        // line 968
        echo "
";
        // line 970
        echo "                <!-- END: Best Selling -->
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
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Type something...\">
                                    <button class=\"nk-btn nk-btn-color-main-1\"><span class=\"ion-search\"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                   ";
        // line 992
        $this->displayBlock('calendrier', $context, $blocks);
        // line 994
        echo "                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Latest</span> Video</span></h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-plain-video\" data-video=\"https://www.youtube.com/watch?v=vXy8UBazlO8\"></div>
                        </div>
                    </div>
";
        // line 1003
        echo "
";
        // line 1011
        echo "
";
        // line 1019
        echo "
";
        // line 1027
        echo "
";
        // line 1030
        echo "                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Latest</span> Games</span></h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-popup-gallery\">
                                <div class=\"row sm-gap vertical-gap\">
                                    ";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 1035, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 1036
            echo "                                    <div class=\"col-sm-6\">
                                        <div class=\"nk-gallery-item-box\">
                                            <a href=\"";
            // line 1038
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 1038))), "html", null, true);
            echo "\" class=\"nk-gallery-item\" data-size=\"1016x572\">
                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                                <img src=\"";
            // line 1040
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["var"], "image", [], "any", false, false, false, 1040))), "html", null, true);
            echo "\" alt=\"\" >
                                            </a>
";
            // line 1046
            echo "                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1092
        echo "                                </div>
                            </div>
                        </div>
                    </div>
";
        // line 1120
        echo "
";
        // line 1142
        echo "
";
        // line 1169
        echo "
";
        // line 1178
        echo "
";
        // line 1187
        echo "
";
        // line 1196
        echo "
";
        // line 1199
        echo "
                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class=\"nk-gap-4\"></div>



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
                                            <img src=\"Front/assets/images/post-1-sm.jpg\" alt=\"\">
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
                                            <img src=\"Front/assets/images/post-2-sm.jpg\" alt=\"\">
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

<img class=\"nk-page-background-top\" src=\"Front/assets/images/bg-top.png\" alt=\"\">
<img class=\"nk-page-background-bottom\" src=\"Front/assets/images/bg-bottom.png\" alt=\"\">

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

";
        // line 1437
        $this->displayBlock('js', $context, $blocks);
        // line 1500
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 818
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "!

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 992
    public function block_calendrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendrier"));

        // line 993
        echo "                   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1437
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1438
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/object-fit-images/dist/ofi.min.js"), "html", null, true);
        echo "\"></script>

<!-- GSAP -->
<script src=\"";
        // line 1441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/gsap/src/minified/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>

<!-- Popper -->
<script src=\"";
        // line 1445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/popper.js/dist/umd/popper.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Sticky Kit -->
<script src=\"";
        // line 1451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/sticky-kit/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jarallax -->
<script src=\"";
        // line 1454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/jarallax/dist/jarallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/jarallax/dist/jarallax-video.min.js"), "html", null, true);
        echo "\"></script>

<!-- imagesLoaded -->
<script src=\"";
        // line 1458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>

<!-- Flickity -->
<script src=\"";
        // line 1461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/flickity/dist/flickity.pkgd.min.js"), "html", null, true);
        echo "\"></script>

<!-- Photoswipe -->
<script src=\"";
        // line 1464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/photoswipe/dist/photoswipe.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Validation -->
<script src=\"";
        // line 1468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

<!-- Jquery Countdown + Moment -->
<script src=\"";
        // line 1471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"), "html", null, true);
        echo "\"></script>

<!-- Hammer.js -->
<script src=\"";
        // line 1476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/hammerjs/hammer.min.js"), "html", null, true);
        echo "\"></script>

<!-- NanoSroller -->
<script src=\"";
        // line 1479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"), "html", null, true);
        echo "\"></script>

<!-- SoundManager2 -->
<script src=\"";
        // line 1482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"), "html", null, true);
        echo "\"></script>

<!-- Seiyria Bootstrap Slider -->
<script src=\"";
        // line 1485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>

<!-- Summernote -->
<script src=\"";
        // line 1488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/summernote/dist/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>

<!-- nK Share -->
<script src=\"";
        // line 1491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/plugins/nk-share/nk-share.js"), "html", null, true);
        echo "\"></script>

<!-- GoodGames -->
<script src=\"";
        // line 1494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/goodgames.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/goodgames-init.js"), "html", null, true);
        echo "\"></script>

<!-- END: Scripts -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1218 => 1495,  1214 => 1494,  1208 => 1491,  1202 => 1488,  1196 => 1485,  1190 => 1482,  1184 => 1479,  1178 => 1476,  1172 => 1473,  1168 => 1472,  1164 => 1471,  1158 => 1468,  1152 => 1465,  1148 => 1464,  1142 => 1461,  1136 => 1458,  1130 => 1455,  1126 => 1454,  1120 => 1451,  1114 => 1448,  1108 => 1445,  1102 => 1442,  1098 => 1441,  1091 => 1438,  1081 => 1437,  1071 => 993,  1061 => 992,  1040 => 818,  1026 => 1500,  1024 => 1437,  784 => 1199,  781 => 1196,  778 => 1187,  775 => 1178,  772 => 1169,  769 => 1142,  766 => 1120,  760 => 1092,  752 => 1046,  747 => 1040,  742 => 1038,  738 => 1036,  734 => 1035,  727 => 1030,  724 => 1027,  721 => 1019,  718 => 1011,  715 => 1003,  707 => 994,  705 => 992,  681 => 970,  678 => 968,  674 => 950,  670 => 932,  666 => 914,  662 => 896,  659 => 821,  657 => 818,  653 => 816,  650 => 784,  647 => 752,  642 => 687,  639 => 684,  635 => 661,  631 => 638,  623 => 627,  620 => 624,  617 => 611,  614 => 607,  610 => 599,  607 => 586,  604 => 582,  600 => 574,  597 => 561,  594 => 557,  590 => 549,  587 => 536,  584 => 532,  580 => 524,  577 => 520,  574 => 494,  571 => 487,  568 => 483,  564 => 475,  561 => 468,  558 => 464,  554 => 456,  551 => 449,  548 => 445,  544 => 437,  541 => 430,  538 => 426,  534 => 418,  531 => 411,  528 => 407,  524 => 399,  521 => 392,  518 => 388,  514 => 380,  511 => 375,  497 => 360,  483 => 349,  473 => 342,  466 => 338,  453 => 327,  433 => 315,  430 => 314,  426 => 313,  398 => 288,  339 => 232,  330 => 226,  322 => 221,  312 => 214,  298 => 203,  289 => 197,  248 => 159,  233 => 147,  140 => 57,  132 => 52,  126 => 49,  120 => 46,  114 => 43,  108 => 40,  104 => 39,  98 => 36,  92 => 33,  86 => 30,  82 => 29,  76 => 26,  62 => 15,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>


<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>GoodGames | Community and Store HTML Game Template</title>

    <meta name=\"description\" content=\"GoodGames - Bootstrap template for communities and games store\">
    <meta name=\"keywords\" content=\"game, gaming, template, HTML template, responsive, Bootstrap, premium\">
    <meta name=\"author\" content=\"_nK\">

    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('Front/assets/images/favicon.png')}}\">


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700')}}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}\">

    <!-- FontAwesome -->
    <script defer src=\"{{ asset('Front/assets/vendor/fontawesome-free/js/all.js')}}\"></script>
    <script defer src=\"{{ asset('Front/assets/vendor/fontawesome-free/js/v4-shims.js')}}\"></script>

    <!-- IonIcons -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/vendor/ionicons/css/ionicons.min.css')}}\">

    <!-- Flickity -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/vendor/flickity/dist/flickity.min.css')}}\">

    <!-- Photoswipe -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Front/assets/vendor/photoswipe/dist/photoswipe.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Front/assets/vendor/photoswipe/dist/default-skin/default-skin.css')}}\">

    <!-- Seiyria Bootstrap Slider -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css')}}\">

    <!-- Summernote -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Front/assets/vendor/summernote/dist/summernote-bs4.css')}}\">

    <!-- GoodGames -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/css/goodgames.css')}}\">

    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/assets/css/custom.css')}}\">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src=\"{{ asset('Front/assets/vendor/jquery/dist/jquery.min.js')}}\"></script>


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
                                <a href=\"Front/html-store-gaming-template/store-product.html\" class=\"nk-post-image\">
                                    <img src=\"{{ asset('Front/assets/images/product-5-xs.jpg') }}\" alt=\"In all revolutions of\">
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
                                    <img src=\"{{ asset('Front/assets/images/product-7-xs.jpg') }}\" alt=\"With what mingled joy\">
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
                    <img src=\"{{ asset('Front/assets/images/logo.png') }}\" alt=\"GoodGames\" width=\"199\">
                </a>

                <ul class=\"nk-nav nk-nav-right d-none d-lg-table-cell\" data-nav-mobile=\"#nk-nav-mobile\">

                    <li class=\" nk-drop-item\">
                        <a href=\"{{ path('front') }}\">
                            Home
                        </a>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"blog-list.html\">
                            Blog

                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('affichfront') }}\">
                            Produit

                        </a>
                    </li>

                    <li class=\" nk-drop-item\">
                        <a href=\"{{ path('tournament') }}\">
                            Compétition
                        </a><ul class=\"dropdown\">

                            <li>
                                <a href=\"{{ path('tournament') }}\">
                                    Compétition

                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('games') }}\">
                                    Jeux
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\" nk-drop-item\">
                        <a href=\"store.html\">
                            Store

                        </a>
                    </li>
                    <li>
                        <a href=\"gallery.html\">
                            Contactez-nous

                        </a>
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
                <img src=\"{{ asset('Front/assets/images/logo.png') }}\" alt=\"\" width=\"120\">
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

    <div class=\"nk-gap-2\"></div>



    <div class=\"container\">

        <!-- START: Image Slider -->
        <div class=\"nk-image-slider\" data-autoplay=\"2000\">

            {% for var in jeux %}
            <div class=\"nk-image-slider-item\">
                <img width=\"1110px\" src=\"{{ asset('/uploads/images/'~var.image) }}\" alt=\"\" class=\"nk-image-slider-img\" data-thumb=\"{{ asset('/uploads/images/'~var.image) }}\">

                <div class=\"nk-image-slider-content\">

                    <h3 class=\"h4\">Meilleurs jeux en ligne!</h3>
                    <p class=\"text-white\">Ne ratez pas votre chance,participez aux compétitions et affrontez les meilleurs joueurs du monde afin d'atteindre le rang ultime. </p>
                    <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1\">Read More</a>

                </div>

            </div>
            {% endfor %}


        </div>
        <!-- END: Image Slider -->

        <!-- START: Categories -->
        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"{{ asset('Front/assets/images/icon-mouse.png')}}\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PC</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"{{ path('games') }}\">View Games</a></h4>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"{{ asset('Front/assets/images/icon-gamepad.png')}}\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">PS4</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h4>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"nk-feature-1\">
                    <div class=\"nk-feature-icon\">
                        <img src=\"{{ asset('Front/assets/images/icon-gamepad-2.png')}}\" alt=\"\">
                    </div>
                    <div class=\"nk-feature-cont\">
                        <h3 class=\"nk-feature-title\"><a href=\"#\">Xbox</a></h3>
                        <h4 class=\"nk-feature-title text-main-1\"><a href=\"#\">View Games</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->

{#        <!-- START: Latest News -->#}
{#        <div class=\"nk-gap-2\"></div>#}
{#        <h3 class=\"nk-decorated-h-2\"><span><span class=\"text-main-1\">Latest</span> News</span></h3>#}
{#        <div class=\"nk-gap\"></div>#}

{#        <div class=\"nk-news-box\">#}
{#            <div class=\"nk-news-box-list\">#}
{#                <div class=\"nano\">#}
{#                    <div class=\"nano-content\">#}


{#                        <div class=\"nk-news-box-item nk-news-box-item-active\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-1-sm.jpg\" alt=\"Smell magic in the air. Or maybe barbecue\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-1.jpg\" alt=\"Smell magic in the air. Or maybe barbecue\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">Smell magic in the air. Or maybe barbecue</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-4\">MMO</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Sep 18, 2018</div>#}
{#                        </div>#}


{#                        <div class=\"nk-news-box-item\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-2-sm.jpg\" alt=\"Grab your sword and fight the Horde\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-2.jpg\" alt=\"Grab your sword and fight the Horde\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">Grab your sword and fight the Horde</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-1\">Action</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Sep 5, 2018</div>#}
{#                        </div>#}


{#                        <div class=\"nk-news-box-item\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-3-sm.jpg\" alt=\"We found a witch! May we burn her?\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-3.jpg\" alt=\"We found a witch! May we burn her?\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">We found a witch! May we burn her?</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-2\">Adventure</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Aug 27, 2018</div>#}
{#                        </div>#}


{#                        <div class=\"nk-news-box-item\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-4-sm.jpg\" alt=\"For good, too though, in consequence\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-4.jpg\" alt=\"For good, too though, in consequence\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">For good, too though, in consequence</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-3\">Strategy</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Aug 14, 2018</div>#}
{#                        </div>#}


{#                        <div class=\"nk-news-box-item\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-5-sm.jpg\" alt=\"He made his passenger captain of one\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-5.jpg\" alt=\"He made his passenger captain of one\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">He made his passenger captain of one</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-5\">Indie</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Jul 23, 2018</div>#}
{#                        </div>#}


{#                        <div class=\"nk-news-box-item\">#}
{#                            <div class=\"nk-news-box-item-img\">#}
{#                                <img src=\"Front/assets/images/post-6-sm.jpg\" alt=\"At first, for some time, I was not able to answer\">#}
{#                            </div>#}
{#                            <img src=\"Front/assets/images/post-6.jpg\" alt=\"At first, for some time, I was not able to answer\" class=\"nk-news-box-item-full-img\">#}
{#                            <h3 class=\"nk-news-box-item-title\">At first, for some time, I was not able to answer</h3>#}

{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-5\">Racing</span>#}
{#                        </span>#}

{#                            <div class=\"nk-news-box-item-text\">#}
{#                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>#}
{#                            </div>#}
{#                            <a href=\"blog-article.html\" class=\"nk-news-box-item-url\">Read More</a>#}
{#                            <div class=\"nk-news-box-item-date\"><span class=\"fa fa-calendar\"></span> Jul 3, 2018</div>#}
{#                        </div>#}

{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#            <div class=\"nk-news-box-each-info\">#}
{#                <div class=\"nano\">#}
{#                    <div class=\"nano-content\">#}
{#                        <!-- There will be inserted info about selected news-->#}
{#                        <div class=\"nk-news-box-item-image\">#}
{#                            <img src=\"Front/assets/images/post-1.jpg\" alt=\"\">#}
{#                            <span class=\"nk-news-box-item-categories\">#}
{#                            <span class=\"bg-main-4\">MMO</span>#}
{#                        </span>#}
{#                        </div>#}
{#                        <h3 class=\"nk-news-box-item-title\">Smell magic in the air. Or maybe barbecue</h3>#}
{#                        <div class=\"nk-news-box-item-text\">#}
{#                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>#}
{#                        </div>#}
{#                        <a href=\"blog-article.html\" class=\"nk-news-box-item-more\">Read More</a>#}
{#                        <div class=\"nk-news-box-item-date\">#}
{#                            <span class=\"fa fa-calendar\"></span> Sep 18, 2018#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}

{#        <div class=\"nk-gap-2\"></div>#}
{#        <div class=\"nk-blog-grid\">#}
{#            <div class=\"row\">#}


{#                <div class=\"col-md-6 col-lg-3\">#}
{#                    <!-- START: Post -->#}
{#                    <div class=\"nk-blog-post\">#}
{#                        <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                            <img src=\"Front/assets/images/post-5-mid.jpg\" alt=\"He made his passenger captain of one\">#}
{#                            <span class=\"nk-post-comments-count\">13</span>#}

{#                            <span class=\"nk-post-categories\">#}
{#                                    <span class=\"bg-main-5\">Indie</span>#}
{#                                </span>#}

{#                        </a>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>#}
{#                        <div class=\"nk-post-text\">#}
{#                            <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>#}
{#                        </div>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                        <div class=\"nk-post-date float-right\"><span class=\"fa fa-calendar\"></span> Jul 23, 2018</div>#}
{#                    </div>#}
{#                    <!-- END: Post -->#}
{#                </div>#}


{#                <div class=\"col-md-6 col-lg-3\">#}
{#                    <!-- START: Post -->#}
{#                    <div class=\"nk-blog-post\">#}
{#                        <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                            <img src=\"Front/assets/images/post-6-mid.jpg\" alt=\"At first, for some time, I was not able to answer\">#}
{#                            <span class=\"nk-post-comments-count\">0</span>#}

{#                            <span class=\"nk-post-categories\">#}
{#                                    <span class=\"bg-main-5\">Racing</span>#}
{#                                </span>#}

{#                        </a>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At first, for some time, I was not able to answer</a></h2>#}
{#                        <div class=\"nk-post-text\">#}
{#                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>#}
{#                        </div>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                        <div class=\"nk-post-date float-right\"><span class=\"fa fa-calendar\"></span> Jul 3, 2018</div>#}
{#                    </div>#}
{#                    <!-- END: Post -->#}
{#                </div>#}


{#                <div class=\"col-md-6 col-lg-3\">#}
{#                    <!-- START: Post -->#}
{#                    <div class=\"nk-blog-post\">#}
{#                        <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                            <img src=\"Front/assets/images/post-7-mid.jpg\" alt=\"At length one of them called out in a clear\">#}
{#                            <span class=\"nk-post-comments-count\">0</span>#}

{#                            <span class=\"nk-post-categories\">#}
{#                                    <span class=\"bg-main-6\">MOBA</span>#}
{#                                </span>#}

{#                        </a>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At length one of them called out in a clear</a></h2>#}
{#                        <div class=\"nk-post-text\">#}
{#                            <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>#}
{#                        </div>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                        <div class=\"nk-post-date float-right\"><span class=\"fa fa-calendar\"></span> Jul 3, 2018</div>#}
{#                    </div>#}
{#                    <!-- END: Post -->#}
{#                </div>#}


{#                <div class=\"col-md-6 col-lg-3\">#}
{#                    <!-- START: Post -->#}
{#                    <div class=\"nk-blog-post\">#}
{#                        <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                            <img src=\"Front/assets/images/post-8-mid.jpg\" alt=\"For good, too though, in consequence\">#}
{#                            <span class=\"nk-post-comments-count\">0</span>#}

{#                            <span class=\"nk-post-categories\">#}
{#                                    <span class=\"bg-main-2\">Adventure</span>#}
{#                                </span>#}

{#                        </a>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">For good, too though, in consequence</a></h2>#}
{#                        <div class=\"nk-post-text\">#}
{#                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>#}
{#                        </div>#}
{#                        <div class=\"nk-gap\"></div>#}
{#                        <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                        <div class=\"nk-post-date float-right\"><span class=\"fa fa-calendar\"></span> Jul 3, 2018</div>#}
{#                    </div>#}
{#                    <!-- END: Post -->#}
{#                </div>#}

{#            </div>#}
{#        </div>#}
        <!-- END: Latest News -->

        <div class=\"nk-gap-2\"></div>
        <div class=\"row vertical-gap\">
            <div class=\"col-lg-8\">

{#                <!-- START: Latest Posts -->#}
{#                <h3 class=\"nk-decorated-h-2\"><span><span class=\"text-main-1\">Latest</span> Posts</span></h3>#}
{#                <div class=\"nk-gap\"></div>#}
{#                <div class=\"nk-blog-grid\">#}
{#                    <div class=\"row\">#}


{#                        <div class=\"col-md-6\">#}
{#                            <!-- START: Post -->#}
{#                            <div class=\"nk-blog-post\">#}
{#                                <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                                    <img src=\"Front/assets/images/post-5-mid.jpg\" alt=\"He made his passenger captain of one\">#}
{#                                    <span class=\"nk-post-comments-count\">13</span>#}
{#                                </a>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">He made his passenger captain of one</a></h2>#}
{#                                <div class=\"nk-post-by\">#}
{#                                    <img src=\"Front/assets/images/avatar-3.jpg\" alt=\"Wolfenstein\" class=\"rounded-circle\" width=\"35\"> by <a href=\"#\">Wolfenstein</a> in Jul 23, 2018#}
{#                                </div>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <div class=\"nk-post-text\">#}
{#                                    <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>#}
{#                                </div>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                            </div>#}
{#                            <!-- END: Post -->#}
{#                        </div>#}


{#                        <div class=\"col-md-6\">#}
{#                            <!-- START: Post -->#}
{#                            <div class=\"nk-blog-post\">#}
{#                                <a href=\"blog-article.html\" class=\"nk-post-img\">#}
{#                                    <img src=\"Front/assets/images/post-6-mid.jpg\" alt=\"At first, for some time, I was not able to answer\">#}
{#                                    <span class=\"nk-post-comments-count\">0</span>#}
{#                                </a>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <h2 class=\"nk-post-title h4\"><a href=\"blog-article.html\">At first, for some time, I was not able to answer</a></h2>#}
{#                                <div class=\"nk-post-by\">#}
{#                                    <img src=\"Front/assets/images/avatar-3.jpg\" alt=\"Wolfenstein\" class=\"rounded-circle\" width=\"35\"> by <a href=\"#\">Wolfenstein</a> in Jul 3, 2018#}
{#                                </div>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <div class=\"nk-post-text\">#}
{#                                    <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>#}
{#                                </div>#}
{#                                <div class=\"nk-gap\"></div>#}
{#                                <a href=\"blog-article.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Read More</a>#}
{#                            </div>#}
{#                            <!-- END: Post -->#}
{#                        </div>#}

{#                    </div>#}
{#                </div>#}
                <!-- END: Latest Posts -->

                <!-- START: Latest Matches -->
{#                <div class=\"nk-gap-2\"></div>#}
{#                <h3 class=\"nk-decorated-h-2\"><span><span class=\"text-main-1\">Latest</span> Matches</span></h3>#}
{#                <div class=\"nk-gap\"></div>#}
{#                <div class=\"row\">#}
{#                    <div class=\"col-md-4\">#}
{#                        <div class=\"nk-match-score bg-dark-3\">#}
{#                            Now Playing#}
{#                        </div>#}
{#                        <div class=\"nk-gap-2\"></div>#}
{#                        <div class=\"nk-widget-match p-0\">#}
{#                            <div class=\"nk-widget-match-teams\">#}
{#                                <div class=\"nk-widget-match-team-logo\">#}
{#                                    <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                                </div>#}
{#                                <div class=\"nk-widget-match-vs\">VS</div>#}
{#                                <div class=\"nk-widget-match-team-logo\">#}
{#                                    <img src=\"Front/assets/images/team-2.jpg\" alt=\"\">#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                        <div class=\"nk-gap-2\"></div>#}
{#                        <p>As she said this she looked down at her hands and was surprised to see.</p>#}
{#                        <a href=\"tournaments.html\" class=\"nk-btn nk-btn-rounded nk-btn-color-main-1\">Match Details</a>#}
{#                    </div>#}
{#                    <div class=\"col-md-8\">#}
{#                        <div class=\"responsive-embed responsive-embed-16x9\">#}
{#                            <iframe src=\"https://player.twitch.tv/?channel=eulcs&autoplay=false\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\" height=\"378\" width=\"620\"></iframe>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#                <div class=\"nk-gap\"></div>#}
{#                <div class=\"nk-match\">#}
{#                    <div class=\"nk-match-team-left\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-name\">#}
{#                            SK Telecom T1#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-status\">#}
{#                        <a href=\"#\">#}
{#                            <span class=\"nk-match-status-vs\">VS</span>#}
{#                            <span class=\"nk-match-status-date\">Apr 28, 2018 8:00 pm</span>#}
{#                            <span class=\"nk-match-score bg-danger\">#}
{#                            2 : 17#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-team-right\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-name\">#}
{#                            Cloud 9#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-2.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"nk-match\">#}
{#                    <div class=\"nk-match-team-left\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-3.jpg\" alt=\"\">#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-name\">#}
{#                            Counted logic gaming#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-status\">#}
{#                        <a href=\"#\">#}
{#                            <span class=\"nk-match-status-vs\">VS</span>#}
{#                            <span class=\"nk-match-status-date\">Apr 15, 2018 9:00 pm</span>#}
{#                            <span class=\"nk-match-score bg-success\">#}
{#                            28 : 19#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-team-right\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-name\">#}
{#                            SK Telecom T1#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"nk-match\">#}
{#                    <div class=\"nk-match-team-left\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-4.jpg\" alt=\"\">#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-name\">#}
{#                            Team SoloMid#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-status\">#}
{#                        <a href=\"#\">#}
{#                            <span class=\"nk-match-status-vs\">VS</span>#}
{#                            <span class=\"nk-match-status-date\">Apr 28, 2018 8:00 pm</span>#}
{#                            <span class=\"nk-match-score bg-dark-1\">#}
{#                            13 : 13#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                    <div class=\"nk-match-team-right\">#}
{#                        <a href=\"#\">#}
{#                        <span class=\"nk-match-team-name\">#}
{#                            SK Telecom T1#}
{#                        </span>#}
{#                            <span class=\"nk-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        </a>#}
{#                    </div>#}
{#                </div>#}
                <!-- END: Latest Matches -->

                {% block body  %}!

                {% endblock %}
                <!-- START: Tabbed News  -->
{#
                <!-- END: Tabbed News -->


                <!-- START: Latest Pictures -->
                <div class=\"nk-gap\"></div>
                <h2 class=\"nk-decorated-h-2 h3\"><span><span class=\"text-main-1\">Latest</span> Pictures</span></h2>
                <div class=\"nk-gap\"></div>
                <div class=\"nk-popup-gallery\">
                    <div class=\"row vertical-gap\">
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-1.jpg\" class=\"nk-gallery-item\" data-size=\"1016x572\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-1-thumb.jpg\" alt=\"\">
                                </a>
                                <div class=\"nk-gallery-item-description\">
                                    <h4>Called Let</h4>
                                    Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-2.jpg\" class=\"nk-gallery-item\" data-size=\"1188x594\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-2-thumb.jpg\" alt=\"\">
                                </a>
                                <div class=\"nk-gallery-item-description\">
                                    Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-3.jpg\" class=\"nk-gallery-item\" data-size=\"625x350\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-3-thumb.jpg\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-4.jpg\" class=\"nk-gallery-item\" data-size=\"873x567\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-4-thumb.jpg\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-5.jpg\" class=\"nk-gallery-item\" data-size=\"471x269\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-5-thumb.jpg\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"nk-gallery-item-box\">
                                <a href=\"Front/assets/images/gallery-6.jpg\" class=\"nk-gallery-item\" data-size=\"472x438\">
                                    <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                    <img src=\"Front/assets/images/gallery-6-thumb.jpg\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Pictures -->

                <!-- START: Best Selling -->
{#                <div class=\"nk-gap-3\"></div>#}
{#                <h3 class=\"nk-decorated-h-2\"><span><span class=\"text-main-1\">Best</span> Selling</span></h3>#}
{#                <div class=\"nk-gap\"></div>#}
{#                <div class=\"row vertical-gap\">#}


{#                    <div class=\"col-md-6\">#}
{#                        <div class=\"nk-product-cat\">#}
{#                            <a class=\"nk-product-image\" href=\"store-product.html\">#}
{#                                <img src=\"Front/assets/images/product-11-xs.jpg\" alt=\"She gave my mother\">#}
{#                            </a>#}
{#                            <div class=\"nk-product-cont\">#}
{#                                <h3 class=\"nk-product-title h5\"><a href=\"store-product.html\">She gave my mother</a></h3>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"3\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i></div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-price\">€ 14.00</div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}


{#                    <div class=\"col-md-6\">#}
{#                        <div class=\"nk-product-cat\">#}
{#                            <a class=\"nk-product-image\" href=\"store-product.html\">#}
{#                                <img src=\"Front/assets/images/product-12-xs.jpg\" alt=\"A hundred thousand\">#}
{#                            </a>#}
{#                            <div class=\"nk-product-cont\">#}
{#                                <h3 class=\"nk-product-title h5\"><a href=\"store-product.html\">A hundred thousand</a></h3>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"4.5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fas fa-star-half\"></i></div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-price\">€ 20.00</div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}


{#                    <div class=\"col-md-6\">#}
{#                        <div class=\"nk-product-cat\">#}
{#                            <a class=\"nk-product-image\" href=\"store-product.html\">#}
{#                                <img src=\"Front/assets/images/product-13-xs.jpg\" alt=\"So saying he unbuckled\">#}
{#                            </a>#}
{#                            <div class=\"nk-product-cont\">#}
{#                                <h3 class=\"nk-product-title h5\"><a href=\"store-product.html\">So saying he unbuckled</a></h3>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i></div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-price\">€ 23.00</div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}


{#                    <div class=\"col-md-6\">#}
{#                        <div class=\"nk-product-cat\">#}
{#                            <a class=\"nk-product-image\" href=\"store-product.html\">#}
{#                                <img src=\"Front/assets/images/product-14-xs.jpg\" alt=\"However, I have reason\">#}
{#                            </a>#}
{#                            <div class=\"nk-product-cont\">#}
{#                                <h3 class=\"nk-product-title h5\"><a href=\"store-product.html\">However, I have reason</a></h3>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"1.5\"> <i class=\"fa fa-star\"></i> <i class=\"fas fa-star-half\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i></div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <div class=\"nk-product-price\">€ 32.00</div>#}
{#                                <div class=\"nk-gap-1\"></div>#}
{#                                <a href=\"#\" class=\"nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1\">Add to Cart</a>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}

{#                </div>#}
                <!-- END: Best Selling -->
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
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Type something...\">
                                    <button class=\"nk-btn nk-btn-color-main-1\"><span class=\"ion-search\"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                   {% block calendrier %}
                   {% endblock %}
                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Latest</span> Video</span></h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-plain-video\" data-video=\"https://www.youtube.com/watch?v=vXy8UBazlO8\"></div>
                        </div>
                    </div>
{#                    <div class=\"nk-widget nk-widget-highlighted\">#}
{#                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Top 3</span> Recent</span></h4>#}
{#                        <div class=\"nk-widget-content\">#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"blog-article.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"{{ asset('Front/assets/images/post-1-sm.jpg')}}\" alt=\"\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"blog-article.html\">Smell magic in the air. Or maybe barbecue</a></h3>#}
{#                                <div class=\"nk-post-date\"><span class=\"fa fa-calendar\"></span> Sep 18, 2018</div>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"blog-article.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"{{ asset('Front/assets/images/post-2-sm.jpg')}}\" alt=\"\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"blog-article.html\">Grab your sword and fight the Horde</a></h3>#}
{#                                <div class=\"nk-post-date\"><span class=\"fa fa-calendar\"></span> Sep 5, 2018</div>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"blog-article.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"{{ asset('Front/assets/images/post-3-sm.jpg')}}\" alt=\"\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"blog-article.html\">We found a witch! May we burn her?</a></h3>#}
{#                                <div class=\"nk-post-date\"><span class=\"fa fa-calendar\"></span> Aug 27, 2018</div>#}
{#                            </div>#}

{#                        </div>#}
{#                    </div>#}
                    <div class=\"nk-widget nk-widget-highlighted\">
                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Latest</span> Games</span></h4>
                        <div class=\"nk-widget-content\">
                            <div class=\"nk-popup-gallery\">
                                <div class=\"row sm-gap vertical-gap\">
                                    {% for var in jeux %}
                                    <div class=\"col-sm-6\">
                                        <div class=\"nk-gallery-item-box\">
                                            <a href=\"{{ asset('/uploads/images/'~var.image) }}\" class=\"nk-gallery-item\" data-size=\"1016x572\">
                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>
                                                <img src=\"{{ asset('/uploads/images/'~var.image) }}\" alt=\"\" >
                                            </a>
{#                                            <div class=\"nk-gallery-item-description\">#}
{#                                                <h4>Called Let</h4>#}
{#                                                Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.#}
{#                                            </div>#}
                                        </div>
                                    </div>
                                    {% endfor %}
{#                                    <div class=\"col-sm-6\">#}
{#                                        <div class=\"nk-gallery-item-box\">#}
{#                                            <a href=\"{{ asset('Front/assets/images/gallery-2.jpg')}}\" class=\"nk-gallery-item\" data-size=\"1188x594\">#}
{#                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>#}
{#                                                <img src=\"{{ asset('Front/assets/images/gallery-2-thumb.jpg')}}\" alt=\"\">#}
{#                                            </a>#}
{#                                            <div class=\"nk-gallery-item-description\">#}
{#                                                Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"col-sm-6\">#}
{#                                        <div class=\"nk-gallery-item-box\">#}
{#                                            <a href=\"{{ asset('Front/assets/images/gallery-3.jpg')}}\" class=\"nk-gallery-item\" data-size=\"625x350\">#}
{#                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>#}
{#                                                <img src=\"{{ asset('Front/assets/images/gallery-3-thumb.jpg')}}\" alt=\"\">#}
{#                                            </a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"col-sm-6\">#}
{#                                        <div class=\"nk-gallery-item-box\">#}
{#                                            <a href=\"{{ asset('Front/assets/images/gallery-4.jpg')}}\" class=\"nk-gallery-item\" data-size=\"873x567\">#}
{#                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>#}
{#                                                <img src=\"{{ asset('Front/assets/images/gallery-4-thumb.jpg')}}\" alt=\"\">#}
{#                                            </a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"col-sm-6\">#}
{#                                        <div class=\"nk-gallery-item-box\">#}
{#                                            <a href=\"Front/assets/images/gallery-5.jpg\" class=\"nk-gallery-item\" data-size=\"471x269\">#}
{#                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>#}
{#                                                <img src=\"Front/assets/images/gallery-5-thumb.jpg\" alt=\"\">#}
{#                                            </a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"col-sm-6\">#}
{#                                        <div class=\"nk-gallery-item-box\">#}
{#                                            <a href=\"Front/assets/images/gallery-6.jpg\" class=\"nk-gallery-item\" data-size=\"472x438\">#}
{#                                                <div class=\"nk-gallery-item-overlay\"><span class=\"ion-eye\"></span></div>#}
{#                                                <img src=\"Front/assets/images/gallery-6-thumb.jpg\" alt=\"\">#}
{#                                            </a>#}
{#                                        </div>#}
{#                                    </div>#}
                                </div>
                            </div>
                        </div>
                    </div>
{#                    <div class=\"nk-widget nk-widget-highlighted\">#}
{#                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Next</span> Matches</span></h4>#}
{#                        <div class=\"nk-widget-content\">#}
{#                            <div class=\"nk-widget-match\">#}
{#                                <a href=\"#\">#}
{#                <span class=\"nk-widget-match-left\">#}
{#                    <span class=\"nk-widget-match-teams\">#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        <span class=\"nk-widget-match-vs\">VS</span>#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-2.jpg\" alt=\"\">#}
{#                        </span>#}
{#                    </span>#}
{#                    <span class=\"nk-widget-match-date\">CS:GO - Apr 28, 2018 8:00 pm</span>#}
{#                </span>#}
{#                                    <span class=\"nk-widget-match-right\">#}
{#                    <span class=\"nk-match-score\">#}
{#                        Upcoming#}
{#                    </span>#}
{#                </span>#}
{#                                </a>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-match\">#}
{#                                <a href=\"#\">#}
{#                <span class=\"nk-widget-match-left\">#}
{#                    <span class=\"nk-widget-match-teams\">#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-3.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        <span class=\"nk-widget-match-vs\">VS</span>#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-2.jpg\" alt=\"\">#}
{#                        </span>#}
{#                    </span>#}
{#                    <span class=\"nk-widget-match-date\">LoL - Apr 24, 2018 7:20 pm</span>#}
{#                </span>#}
{#                                    <span class=\"nk-widget-match-right\">#}
{#                    <span class=\"nk-match-score\">#}
{#                        Upcoming#}
{#                    </span>#}
{#                </span>#}
{#                                </a>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-match\">#}
{#                                <a href=\"#\">#}
{#                <span class=\"nk-widget-match-left\">#}
{#                    <span class=\"nk-widget-match-teams\">#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-1.jpg\" alt=\"\">#}
{#                        </span>#}
{#                        <span class=\"nk-widget-match-vs\">VS</span>#}
{#                        <span class=\"nk-widget-match-team-logo\">#}
{#                            <img src=\"Front/assets/images/team-4.jpg\" alt=\"\">#}
{#                        </span>#}
{#                    </span>#}
{#                    <span class=\"nk-widget-match-date\">Dota 2 - Apr 12, 2018 6:40 pm</span>#}
{#                </span>#}
{#                                    <span class=\"nk-widget-match-right\">#}
{#                    <span class=\"nk-match-score bg-dark-1\">#}
{#                        0 : 0#}
{#                    </span>#}
{#                </span>#}
{#                                </a>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"nk-widget nk-widget-highlighted\">#}
{#                        <h4 class=\"nk-widget-title\"><span><span class=\"text-main-1\">Most</span> Popular</span></h4>#}
{#                        <div class=\"nk-widget-content\">#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"store-product.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"Front/assets/images/product-1-xs.jpg\" alt=\"So saying he unbuckled\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">So saying he unbuckled</a></h3>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"4\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"far fa-star\"></i></div>#}
{#                                <div class=\"nk-product-price\">€ 23.00</div>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"store-product.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"Front/assets/images/product-2-xs.jpg\" alt=\"However, I have reason\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">However, I have reason</a></h3>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"2.5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fas fa-star-half\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i></div>#}
{#                                <div class=\"nk-product-price\">€ 32.00</div>#}
{#                            </div>#}

{#                            <div class=\"nk-widget-post\">#}
{#                                <a href=\"store-product.html\" class=\"nk-post-image\">#}
{#                                    <img src=\"Front/assets/images/product-3-xs.jpg\" alt=\"It was some time before\">#}
{#                                </a>#}
{#                                <h3 class=\"nk-post-title\"><a href=\"store-product.html\">It was some time before</a></h3>#}
{#                                <div class=\"nk-product-rating\" data-rating=\"5\"> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i></div>#}
{#                                <div class=\"nk-product-price\">€ 14.00</div>#}
{#                            </div>#}

{#                        </div>#}
{#                    </div>#}

                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class=\"nk-gap-4\"></div>



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
                                            <img src=\"Front/assets/images/post-1-sm.jpg\" alt=\"\">
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
                                            <img src=\"Front/assets/images/post-2-sm.jpg\" alt=\"\">
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

<img class=\"nk-page-background-top\" src=\"Front/assets/images/bg-top.png\" alt=\"\">
<img class=\"nk-page-background-bottom\" src=\"Front/assets/images/bg-bottom.png\" alt=\"\">

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

{% block js %}
<script src=\"{{ asset('Front/assets/vendor/object-fit-images/dist/ofi.min.js')}}\"></script>

<!-- GSAP -->
<script src=\"{{ asset('Front/assets/vendor/gsap/src/minified/TweenMax.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js')}}\"></script>

<!-- Popper -->
<script src=\"{{ asset('Front/assets/vendor/popper.js/dist/umd/popper.min.js')}}\"></script>

<!-- Bootstrap -->
<script src=\"{{ asset('Front/assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}\"></script>

<!-- Sticky Kit -->
<script src=\"{{ asset('Front/assets/vendor/sticky-kit/dist/sticky-kit.min.js')}}\"></script>

<!-- Jarallax -->
<script src=\"{{ asset('Front/assets/vendor/jarallax/dist/jarallax.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/vendor/jarallax/dist/jarallax-video.min.js')}}\"></script>

<!-- imagesLoaded -->
<script src=\"{{ asset('Front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}\"></script>

<!-- Flickity -->
<script src=\"{{ asset('Front/assets/vendor/flickity/dist/flickity.pkgd.min.js')}}\"></script>

<!-- Photoswipe -->
<script src=\"{{ asset('Front/assets/vendor/photoswipe/dist/photoswipe.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js')}}\"></script>

<!-- Jquery Validation -->
<script src=\"{{ asset('Front/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}\"></script>

<!-- Jquery Countdown + Moment -->
<script src=\"{{ asset('Front/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/vendor/moment/min/moment.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js')}}\"></script>

<!-- Hammer.js -->
<script src=\"{{ asset('Front/assets/vendor/hammerjs/hammer.min.js')}}\"></script>

<!-- NanoSroller -->
<script src=\"{{ asset('Front/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js')}}\"></script>

<!-- SoundManager2 -->
<script src=\"{{ asset('Front/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js')}}\"></script>

<!-- Seiyria Bootstrap Slider -->
<script src=\"{{ asset('Front/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js')}}\"></script>

<!-- Summernote -->
<script src=\"{{ asset('Front/assets/vendor/summernote/dist/summernote-bs4.min.js')}}\"></script>

<!-- nK Share -->
<script src=\"{{ asset('Front/assets/plugins/nk-share/nk-share.js')}}\"></script>

<!-- GoodGames -->
<script src=\"{{ asset('Front/assets/js/goodgames.min.js')}}\"></script>
<script src=\"{{ asset('Front/assets/js/goodgames-init.js')}}\"></script>

<!-- END: Scripts -->

{% endblock %}


</body>
</html>
", "front.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\front.html.twig");
    }
}
