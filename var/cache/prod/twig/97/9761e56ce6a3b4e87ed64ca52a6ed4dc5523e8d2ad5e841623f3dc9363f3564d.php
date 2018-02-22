<?php

/* base.html.twig */
class __TwigTemplate_71b155fc8444164eb88be936b463b948cb644fb64134321bffbf4b1ad583b7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'page_entete_normal' => array($this, 'block_page_entete_normal'),
            'page_entete_petit' => array($this, 'block_page_entete_petit'),
            'breadcrump' => array($this, 'block_breadcrump'),
            'content_entete' => array($this, 'block_content_entete'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>I-ecaisse | ";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <meta name=\"MobileOptimized\" content=\"320\">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style-conquer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"page-header-fixed\">
<!-- BEGIN HEADER -->
<div class=\"header navbar navbar-fixed-top\">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class=\"header-inner\">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
            </a>
        </div>
        <form class=\"search-form search-form-header\" role=\"form\" action=\"index.php\">
            <div class=\"input-icon right\">
                <i class=\"icon-magnifier\"></i>
                <input type=\"text\" class=\"form-control input-sm\" name=\"query\" placeholder=\"Search...\">
            </div>
        </form>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/menu-toggler.png"), "html", null, true);
        echo "\" alt=\"\"/>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"devider\">
                &nbsp;
            </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 86
            echo "                <li class=\"dropdown user\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                       data-close-others=\"true\">
                        <span class=\"username username-hide-on-mobile\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-key\"></i> Déconnecter</a>
                        </li>
                    </ul>
                </li>
            ";
        } else {
            // line 99
            echo "                <li>
                    <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-key\"></i> Connexion</a>
                </li>
            ";
        }
        // line 103
        echo "            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class=\"clearfix\">
</div>
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar-wrapper\">
        <div class=\"page-sidebar navbar-collapse collapse\">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
            <ul class=\"page-sidebar-menu\">
                <li class=\"sidebar-toggler-wrapper\">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class=\"sidebar-toggler\">
                    </div>
                    <div class=\"clearfix\">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class=\"sidebar-search-wrapper\">
                    <form class=\"search-form\" role=\"form\" action=\"index.php\" method=\"get\">
                        <div class=\"input-icon right\">
                            <i class=\"icon-magnifier\"></i>
                            <input type=\"text\" class=\"form-control\" name=\"query\" placeholder=\"Search...\">
                        </div>
                    </form>
                </li>
                ";
        // line 136
        $this->displayBlock('menu', $context, $blocks);
        // line 138
        echo "            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->
            <h3 class=\"page-title\">
                ";
        // line 147
        $this->displayBlock('page_entete_normal', $context, $blocks);
        echo " <small>";
        $this->displayBlock('page_entete_petit', $context, $blocks);
        echo "</small>
            </h3>
            ";
        // line 149
        $this->displayBlock('breadcrump', $context, $blocks);
        // line 150
        echo "            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Begin: life time stats -->
                    <div class=\"portlet\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"fa fa-shopping-cart\"></i>";
        // line 158
        $this->displayBlock('content_entete', $context, $blocks);
        // line 159
        echo "                            </div>
                            ";
        // line 160
        $this->displayBlock('actions', $context, $blocks);
        // line 161
        echo "                        </div>
                        <div class=\"portlet-body\">
                            ";
        // line 163
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"footer\">
    <div class=\"footer-inner\">
        2017 &copy; ICrm
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- END PAGE LEVEL PLUGINS -->
";
        // line 201
        $this->displayBlock('javascript', $context, $blocks);
        // line 202
        echo "</body>
<!-- END BODY -->
</html>";
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
    }

    // line 136
    public function block_menu($context, array $blocks = array())
    {
        // line 137
        echo "                ";
    }

    // line 147
    public function block_page_entete_normal($context, array $blocks = array())
    {
    }

    public function block_page_entete_petit($context, array $blocks = array())
    {
    }

    // line 149
    public function block_breadcrump($context, array $blocks = array())
    {
    }

    // line 158
    public function block_content_entete($context, array $blocks = array())
    {
    }

    // line 160
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
    }

    // line 201
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  410 => 201,  405 => 163,  400 => 160,  395 => 158,  390 => 149,  381 => 147,  377 => 137,  374 => 136,  369 => 23,  363 => 202,  361 => 201,  356 => 199,  352 => 198,  348 => 197,  344 => 196,  340 => 195,  336 => 194,  330 => 191,  326 => 190,  322 => 189,  318 => 188,  314 => 187,  310 => 186,  305 => 184,  301 => 183,  280 => 164,  278 => 163,  274 => 161,  272 => 160,  269 => 159,  267 => 158,  257 => 150,  255 => 149,  248 => 147,  237 => 138,  235 => 136,  200 => 103,  194 => 100,  191 => 99,  183 => 94,  175 => 89,  170 => 86,  168 => 85,  156 => 76,  141 => 64,  137 => 63,  121 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  95 => 42,  91 => 41,  87 => 40,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  52 => 23,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/ecaisse/app/Resources/views/base.html.twig");
    }
}
