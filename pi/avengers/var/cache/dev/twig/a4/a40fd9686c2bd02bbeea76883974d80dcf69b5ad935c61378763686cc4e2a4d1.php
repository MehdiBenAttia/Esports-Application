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

/* base.html.twig */
class __TwigTemplate_1defb98b4926ee455f5565d877717b08ee5945ccf4f6a7945560182cb0671967 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Skydash Admin</title>


    <script src=\"https://kit.fontawesome.com/85180f823b.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "</head>
<body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"images/logo-mini.svg\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end \">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"icon-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-settings d-none d-lg-flex\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"icon-ellipsis\"></i>
                    </a>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_settings-panel.html -->
        <div class=\"theme-setting-wrapper\">
            <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
            <div id=\"theme-settings\" class=\"settings-panel\">
                <i class=\"settings-close ti-close\"></i>
                <p class=\"settings-heading\">SIDEBAR SKINS</p>
                <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme \"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
                <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
                <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                <div class=\"color-tiles mx-0 px-4\">
                    <div class=\"tiles success\"></div>
                    <div class=\"tiles warning\"></div>
                    <div class=\"tiles danger\"></div>
                    <div class=\"tiles info\"></div>
                    <div class=\"tiles dark\"></div>
                    <div class=\"tiles default\"></div>
                </div>
            </div>
        </div>
        <div id=\"right-sidebar\" class=\"settings-panel\">
            <i class=\"settings-close ti-close\"></i>
            <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"setting-content\">
                <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
                    <div class=\"add-items d-flex px-3 mb-0\">
                        <form class=\"form w-100\">
                            <div class=\"form-group d-flex\">
                                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"list-wrapper px-3\">
                        <ul class=\"d-flex flex-column-reverse todo-list\">
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary mr-2\"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
                        <p class=\"text-gray mb-0\">The total number of sessions</p>
                    </div>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary mr-2\"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
                        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
                    <div class=\"d-flex align-items-center justify-content-between border-bottom\">
                        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
                        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
                    </div>
                    <ul class=\"chat-list\">
                        <li class=\"list active\">
                            <div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">19 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <div class=\"wrapper d-flex\">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                            <small class=\"text-muted my-auto\">23 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">14 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class=\"text-muted my-auto\">2 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">5 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.html\">
                        <i class=\"icon-grid menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Compétition\" aria-expanded=\"false\" aria-controls=\"Compétition\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Compétitions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Compétition\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" ";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheC");
        echo "\">Compétitions</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" ";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheJ");
        echo "\">Jeux</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" ";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheCateg");
        echo "\">Catégorie</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Utilisateurs\" aria-expanded=\"false\" aria-controls=\"Utilisateurs\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Utilisateurs</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Utilisateurs\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">user</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Blog\" aria-expanded=\"false\" aria-controls=\"Blog\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Blog</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Blog\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Blog</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Produit\" aria-expanded=\"false\" aria-controls=\"Produit\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Produit</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Produit\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" ";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affich");
        echo "\">Produit</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" ";
        // line 358
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichcat");
        echo "\">Categorie</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Boutique\" aria-expanded=\"false\" aria-controls=\"Boutique\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Boutique</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Boutique\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Boutique</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Réclamation\" aria-expanded=\"false\" aria-controls=\"Réclamation\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Réclamation</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Réclamation\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Réclamation</a></li>

                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12 grid-margin\">
                        <div class=\"row\">
                            <div class=\"col-12 col-xl-8 mb-4 mb-xl-0\">
                                <h3 class=\"font-weight-bold\">Marahbe bik!</h3>
                                <h6 class=\"font-weight-normal mb-0\">kol chay mriguel (nchalah 20)</h6>
                            </div>
                            <div class=\"col-12 col-xl-4\">
                                <div class=\"justify-content-end d-flex\">
                                    <div class=\"dropdown flex-md-grow-1 flex-xl-grow-0\">
                                        <button class=\"btn btn-sm btn-light bg-white dropdown-toggle\" type=\"button\" id=\"dropdownMenuDate2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                            <i class=\"mdi mdi-calendar\"></i> Today (10 Jan 2021)
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuDate2\">
                                            <a class=\"dropdown-item\" href=\"#\">January - March</a>
                                            <a class=\"dropdown-item\" href=\"#\">March - June</a>
                                            <a class=\"dropdown-item\" href=\"#\">June - August</a>
                                            <a class=\"dropdown-item\" href=\"#\">August - November</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 422
        $this->displayBlock('body', $context, $blocks);
        // line 425
        echo "
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
";
        // line 442
        $this->displayBlock('js', $context, $blocks);
        // line 466
        echo "</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "

        <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/feather/feather.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"vendors/css/vendor.bundle.base.css\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
    <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"js/select.dataTables.min.css\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"css/vertical-layout-light/style.css\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 422
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 423
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 442
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 443
        echo "<!-- plugins:js -->
<script src=\"vendors/js/vendor.bundle.base.js\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"vendors/chart.js/Chart.min.js\"></script>
<script src=\"vendors/datatables.net/jquery.dataTables.js\"></script>
<script src=\"vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
<script src=\"js/dataTables.select.min.js\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"js/off-canvas.js\"></script>
<script src=\"js/hoverable-collapse.js\"></script>
<script src=\"js/template.js\"></script>
<script src=\"js/settings.js\"></script>
<script src=\"js/todolist.js\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"js/dashboard.js\"></script>
<script src=\"js/Chart.roundedBarCharts.js\"></script>
<!-- End custom js for this page-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 443,  567 => 442,  556 => 423,  546 => 422,  522 => 16,  517 => 13,  507 => 12,  493 => 466,  491 => 442,  472 => 425,  470 => 422,  403 => 358,  399 => 357,  360 => 321,  356 => 320,  352 => 319,  61 => 30,  59 => 12,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Skydash Admin</title>


    <script src=\"https://kit.fontawesome.com/85180f823b.js\" crossorigin=\"anonymous\"></script>
    {% block stylesheets %}


        <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/feather/feather.css')}}\">
    <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"vendors/css/vendor.bundle.base.css\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"vendors/datatables.net-bs4/dataTables.bootstrap4.css\">
    <link rel=\"stylesheet\" href=\"vendors/ti-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"js/select.dataTables.min.css\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"css/vertical-layout-light/style.css\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
    {% endblock %}
</head>
<body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"images/logo-mini.svg\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end \">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"icon-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-settings d-none d-lg-flex\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"icon-ellipsis\"></i>
                    </a>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_settings-panel.html -->
        <div class=\"theme-setting-wrapper\">
            <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
            <div id=\"theme-settings\" class=\"settings-panel\">
                <i class=\"settings-close ti-close\"></i>
                <p class=\"settings-heading\">SIDEBAR SKINS</p>
                <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme \"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
                <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
                <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                <div class=\"color-tiles mx-0 px-4\">
                    <div class=\"tiles success\"></div>
                    <div class=\"tiles warning\"></div>
                    <div class=\"tiles danger\"></div>
                    <div class=\"tiles info\"></div>
                    <div class=\"tiles dark\"></div>
                    <div class=\"tiles default\"></div>
                </div>
            </div>
        </div>
        <div id=\"right-sidebar\" class=\"settings-panel\">
            <i class=\"settings-close ti-close\"></i>
            <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"setting-content\">
                <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
                    <div class=\"add-items d-flex px-3 mb-0\">
                        <form class=\"form w-100\">
                            <div class=\"form-group d-flex\">
                                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"list-wrapper px-3\">
                        <ul class=\"d-flex flex-column-reverse todo-list\">
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary mr-2\"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
                        <p class=\"text-gray mb-0\">The total number of sessions</p>
                    </div>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary mr-2\"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
                        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
                    <div class=\"d-flex align-items-center justify-content-between border-bottom\">
                        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
                        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
                    </div>
                    <ul class=\"chat-list\">
                        <li class=\"list active\">
                            <div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">19 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <div class=\"wrapper d-flex\">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                            <small class=\"text-muted my-auto\">23 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">14 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class=\"text-muted my-auto\">2 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">5 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.html\">
                        <i class=\"icon-grid menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Compétition\" aria-expanded=\"false\" aria-controls=\"Compétition\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Compétitions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Compétition\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" {{ path('AfficheC') }}\">Compétitions</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" {{ path('AfficheJ') }}\">Jeux</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" {{ path('AfficheCateg') }}\">Catégorie</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Utilisateurs\" aria-expanded=\"false\" aria-controls=\"Utilisateurs\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Utilisateurs</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Utilisateurs\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">user</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Blog\" aria-expanded=\"false\" aria-controls=\"Blog\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Blog</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Blog\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Blog</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Produit\" aria-expanded=\"false\" aria-controls=\"Produit\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Produit</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Produit\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" {{ path('affich') }}\">Produit</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\" {{ path('affichcat') }}\">Categorie</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Boutique\" aria-expanded=\"false\" aria-controls=\"Boutique\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Boutique</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Boutique\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Boutique</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#Réclamation\" aria-expanded=\"false\" aria-controls=\"Réclamation\">
                        <i class=\"icon-layout menu-icon\"></i>
                        <span class=\"menu-title\">Réclamation</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"Réclamation\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Réclamation</a></li>

                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-12 grid-margin\">
                        <div class=\"row\">
                            <div class=\"col-12 col-xl-8 mb-4 mb-xl-0\">
                                <h3 class=\"font-weight-bold\">Marahbe bik!</h3>
                                <h6 class=\"font-weight-normal mb-0\">kol chay mriguel (nchalah 20)</h6>
                            </div>
                            <div class=\"col-12 col-xl-4\">
                                <div class=\"justify-content-end d-flex\">
                                    <div class=\"dropdown flex-md-grow-1 flex-xl-grow-0\">
                                        <button class=\"btn btn-sm btn-light bg-white dropdown-toggle\" type=\"button\" id=\"dropdownMenuDate2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                            <i class=\"mdi mdi-calendar\"></i> Today (10 Jan 2021)
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuDate2\">
                                            <a class=\"dropdown-item\" href=\"#\">January - March</a>
                                            <a class=\"dropdown-item\" href=\"#\">March - June</a>
                                            <a class=\"dropdown-item\" href=\"#\">June - August</a>
                                            <a class=\"dropdown-item\" href=\"#\">August - November</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {% block body %}

                {% endblock %}

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
{% block js %}
<!-- plugins:js -->
<script src=\"vendors/js/vendor.bundle.base.js\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"vendors/chart.js/Chart.min.js\"></script>
<script src=\"vendors/datatables.net/jquery.dataTables.js\"></script>
<script src=\"vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
<script src=\"js/dataTables.select.min.js\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"js/off-canvas.js\"></script>
<script src=\"js/hoverable-collapse.js\"></script>
<script src=\"js/template.js\"></script>
<script src=\"js/settings.js\"></script>
<script src=\"js/todolist.js\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"js/dashboard.js\"></script>
<script src=\"js/Chart.roundedBarCharts.js\"></script>
<!-- End custom js for this page-->

{% endblock %}
</body>

</html>

", "base.html.twig", "C:\\Users\\USER\\OneDrive\\Documents\\GitHub\\Esports-Application\\pi\\avengers\\templates\\base.html.twig");
    }
}
