<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
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
        $__internal_4d6b8d0534688b8a6c6e9a319b696e4d304cad87a8745f3e7fbfffd1c48069fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6b8d0534688b8a6c6e9a319b696e4d304cad87a8745f3e7fbfffd1c48069fa->enter($__internal_4d6b8d0534688b8a6c6e9a319b696e4d304cad87a8745f3e7fbfffd1c48069fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_916b0dc8d2979007b0375c4ce7480eeff01cf56a3d1a54a19e256bdb6cee42f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916b0dc8d2979007b0375c4ce7480eeff01cf56a3d1a54a19e256bdb6cee42f7->enter($__internal_916b0dc8d2979007b0375c4ce7480eeff01cf56a3d1a54a19e256bdb6cee42f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\"/>
    
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style-conquer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"\"/>
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                <img src=\"";
        // line 66
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
        // line 78
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
        // line 87
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "user", array())) {
            // line 88
            echo "                <li class=\"dropdown user\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                       data-close-others=\"true\">
                        <span class=\"username username-hide-on-mobile\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-key\"></i> Déconnecter</a>
                        </li>
                    </ul>
                </li>
            ";
        } else {
            // line 101
            echo "                <li>
                    <a href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-key\"></i> Connexion</a>
                </li>
            ";
        }
        // line 105
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
        // line 138
        $this->displayBlock('menu', $context, $blocks);
        // line 140
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
        // line 149
        $this->displayBlock('page_entete_normal', $context, $blocks);
        echo " <small>";
        $this->displayBlock('page_entete_petit', $context, $blocks);
        echo "</small>
            </h3>
            ";
        // line 151
        $this->displayBlock('breadcrump', $context, $blocks);
        // line 152
        echo "            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Begin: life time stats -->
                    <div class=\"portlet\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"fa fa-shopping-cart\"></i>";
        // line 160
        $this->displayBlock('content_entete', $context, $blocks);
        // line 161
        echo "                            </div>
                            ";
        // line 162
        $this->displayBlock('actions', $context, $blocks);
        // line 163
        echo "                        </div>
                        <div class=\"portlet-body\">
                            ";
        // line 165
        $this->displayBlock('content', $context, $blocks);
        // line 166
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
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- END PAGE LEVEL PLUGINS -->
";
        // line 203
        $this->displayBlock('javascript', $context, $blocks);
        // line 204
        echo "</body>
<!-- END BODY -->
</html>";
        
        $__internal_4d6b8d0534688b8a6c6e9a319b696e4d304cad87a8745f3e7fbfffd1c48069fa->leave($__internal_4d6b8d0534688b8a6c6e9a319b696e4d304cad87a8745f3e7fbfffd1c48069fa_prof);

        
        $__internal_916b0dc8d2979007b0375c4ce7480eeff01cf56a3d1a54a19e256bdb6cee42f7->leave($__internal_916b0dc8d2979007b0375c4ce7480eeff01cf56a3d1a54a19e256bdb6cee42f7_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c59501e844ab45bc445071bb1e2bfe4587e6a8df85622a00f0c90e58f55c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c59501e844ab45bc445071bb1e2bfe4587e6a8df85622a00f0c90e58f55c73->enter($__internal_c5c59501e844ab45bc445071bb1e2bfe4587e6a8df85622a00f0c90e58f55c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c184a027f774eea8ed5fb6f90bb80fc660587a3ffb263cc18a7bf32745091375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c184a027f774eea8ed5fb6f90bb80fc660587a3ffb263cc18a7bf32745091375->enter($__internal_c184a027f774eea8ed5fb6f90bb80fc660587a3ffb263cc18a7bf32745091375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c184a027f774eea8ed5fb6f90bb80fc660587a3ffb263cc18a7bf32745091375->leave($__internal_c184a027f774eea8ed5fb6f90bb80fc660587a3ffb263cc18a7bf32745091375_prof);

        
        $__internal_c5c59501e844ab45bc445071bb1e2bfe4587e6a8df85622a00f0c90e58f55c73->leave($__internal_c5c59501e844ab45bc445071bb1e2bfe4587e6a8df85622a00f0c90e58f55c73_prof);

    }

    // line 138
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64483b0ef62520fd92bbc67da924a7c745f4737ec54528b798dcec6c3a9cd7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64483b0ef62520fd92bbc67da924a7c745f4737ec54528b798dcec6c3a9cd7fe->enter($__internal_64483b0ef62520fd92bbc67da924a7c745f4737ec54528b798dcec6c3a9cd7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03da62603af8790b1fc93262ec3c879b2bae5ddad55fe332db14085a38216b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03da62603af8790b1fc93262ec3c879b2bae5ddad55fe332db14085a38216b6c->enter($__internal_03da62603af8790b1fc93262ec3c879b2bae5ddad55fe332db14085a38216b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 139
        echo "                ";
        
        $__internal_03da62603af8790b1fc93262ec3c879b2bae5ddad55fe332db14085a38216b6c->leave($__internal_03da62603af8790b1fc93262ec3c879b2bae5ddad55fe332db14085a38216b6c_prof);

        
        $__internal_64483b0ef62520fd92bbc67da924a7c745f4737ec54528b798dcec6c3a9cd7fe->leave($__internal_64483b0ef62520fd92bbc67da924a7c745f4737ec54528b798dcec6c3a9cd7fe_prof);

    }

    // line 149
    public function block_page_entete_normal($context, array $blocks = array())
    {
        $__internal_9a68de5704fb2425407fb851d81ffe0a3f5eff511df5fbf66bde9190472b09df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a68de5704fb2425407fb851d81ffe0a3f5eff511df5fbf66bde9190472b09df->enter($__internal_9a68de5704fb2425407fb851d81ffe0a3f5eff511df5fbf66bde9190472b09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        $__internal_22e91ab5ccf67deffe00d6747e6df4d570219dfbed9ed34987e86678831eca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e91ab5ccf67deffe00d6747e6df4d570219dfbed9ed34987e86678831eca0a->enter($__internal_22e91ab5ccf67deffe00d6747e6df4d570219dfbed9ed34987e86678831eca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        
        $__internal_22e91ab5ccf67deffe00d6747e6df4d570219dfbed9ed34987e86678831eca0a->leave($__internal_22e91ab5ccf67deffe00d6747e6df4d570219dfbed9ed34987e86678831eca0a_prof);

        
        $__internal_9a68de5704fb2425407fb851d81ffe0a3f5eff511df5fbf66bde9190472b09df->leave($__internal_9a68de5704fb2425407fb851d81ffe0a3f5eff511df5fbf66bde9190472b09df_prof);

    }

    public function block_page_entete_petit($context, array $blocks = array())
    {
        $__internal_65a1e9f25a93305cd573cfbc840b5a47665c61c96f9821ed9efb20bd33531712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a1e9f25a93305cd573cfbc840b5a47665c61c96f9821ed9efb20bd33531712->enter($__internal_65a1e9f25a93305cd573cfbc840b5a47665c61c96f9821ed9efb20bd33531712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        $__internal_1593d277d92c3cb3ee147cbe56105f59f09281bafd3ce50bcf9cf8b4b1d21ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1593d277d92c3cb3ee147cbe56105f59f09281bafd3ce50bcf9cf8b4b1d21ec7->enter($__internal_1593d277d92c3cb3ee147cbe56105f59f09281bafd3ce50bcf9cf8b4b1d21ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        
        $__internal_1593d277d92c3cb3ee147cbe56105f59f09281bafd3ce50bcf9cf8b4b1d21ec7->leave($__internal_1593d277d92c3cb3ee147cbe56105f59f09281bafd3ce50bcf9cf8b4b1d21ec7_prof);

        
        $__internal_65a1e9f25a93305cd573cfbc840b5a47665c61c96f9821ed9efb20bd33531712->leave($__internal_65a1e9f25a93305cd573cfbc840b5a47665c61c96f9821ed9efb20bd33531712_prof);

    }

    // line 151
    public function block_breadcrump($context, array $blocks = array())
    {
        $__internal_92a808bade264627dff9de3765c794f84c8885e05ccd414007395b1321eb0e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a808bade264627dff9de3765c794f84c8885e05ccd414007395b1321eb0e0b->enter($__internal_92a808bade264627dff9de3765c794f84c8885e05ccd414007395b1321eb0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        $__internal_f4364d265ca05bf6e15a6fdca11b0a838425029ff5ff7eb5c6a390bdea2caf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4364d265ca05bf6e15a6fdca11b0a838425029ff5ff7eb5c6a390bdea2caf9b->enter($__internal_f4364d265ca05bf6e15a6fdca11b0a838425029ff5ff7eb5c6a390bdea2caf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        
        $__internal_f4364d265ca05bf6e15a6fdca11b0a838425029ff5ff7eb5c6a390bdea2caf9b->leave($__internal_f4364d265ca05bf6e15a6fdca11b0a838425029ff5ff7eb5c6a390bdea2caf9b_prof);

        
        $__internal_92a808bade264627dff9de3765c794f84c8885e05ccd414007395b1321eb0e0b->leave($__internal_92a808bade264627dff9de3765c794f84c8885e05ccd414007395b1321eb0e0b_prof);

    }

    // line 160
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_56c938b8724cf24d8bf677c91807e8b0813f0391c8194df261b1b0f7891bfbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c938b8724cf24d8bf677c91807e8b0813f0391c8194df261b1b0f7891bfbf4->enter($__internal_56c938b8724cf24d8bf677c91807e8b0813f0391c8194df261b1b0f7891bfbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_2160984eca1e43d36a9b43d461e9cac45190d9247166d528d3f5815a4e99899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2160984eca1e43d36a9b43d461e9cac45190d9247166d528d3f5815a4e99899f->enter($__internal_2160984eca1e43d36a9b43d461e9cac45190d9247166d528d3f5815a4e99899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        
        $__internal_2160984eca1e43d36a9b43d461e9cac45190d9247166d528d3f5815a4e99899f->leave($__internal_2160984eca1e43d36a9b43d461e9cac45190d9247166d528d3f5815a4e99899f_prof);

        
        $__internal_56c938b8724cf24d8bf677c91807e8b0813f0391c8194df261b1b0f7891bfbf4->leave($__internal_56c938b8724cf24d8bf677c91807e8b0813f0391c8194df261b1b0f7891bfbf4_prof);

    }

    // line 162
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8a548358adaf42fbb528b0557dd7b7a390f872a6e39342b6c2a170d5609cfc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a548358adaf42fbb528b0557dd7b7a390f872a6e39342b6c2a170d5609cfc90->enter($__internal_8a548358adaf42fbb528b0557dd7b7a390f872a6e39342b6c2a170d5609cfc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_83d38353739a687fc319107da9b97eaa30ca3f85a4e151643696c0a4bdb87317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d38353739a687fc319107da9b97eaa30ca3f85a4e151643696c0a4bdb87317->enter($__internal_83d38353739a687fc319107da9b97eaa30ca3f85a4e151643696c0a4bdb87317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_83d38353739a687fc319107da9b97eaa30ca3f85a4e151643696c0a4bdb87317->leave($__internal_83d38353739a687fc319107da9b97eaa30ca3f85a4e151643696c0a4bdb87317_prof);

        
        $__internal_8a548358adaf42fbb528b0557dd7b7a390f872a6e39342b6c2a170d5609cfc90->leave($__internal_8a548358adaf42fbb528b0557dd7b7a390f872a6e39342b6c2a170d5609cfc90_prof);

    }

    // line 165
    public function block_content($context, array $blocks = array())
    {
        $__internal_f439a0ddcbd2e997d49b58d2aa803743d1ae11b36bd72c71a6523af48056d27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f439a0ddcbd2e997d49b58d2aa803743d1ae11b36bd72c71a6523af48056d27f->enter($__internal_f439a0ddcbd2e997d49b58d2aa803743d1ae11b36bd72c71a6523af48056d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_79f776f2bca9edb37a35e005c83e499c073a8db3ac77c7ff22cf84c8e838933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f776f2bca9edb37a35e005c83e499c073a8db3ac77c7ff22cf84c8e838933c->enter($__internal_79f776f2bca9edb37a35e005c83e499c073a8db3ac77c7ff22cf84c8e838933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_79f776f2bca9edb37a35e005c83e499c073a8db3ac77c7ff22cf84c8e838933c->leave($__internal_79f776f2bca9edb37a35e005c83e499c073a8db3ac77c7ff22cf84c8e838933c_prof);

        
        $__internal_f439a0ddcbd2e997d49b58d2aa803743d1ae11b36bd72c71a6523af48056d27f->leave($__internal_f439a0ddcbd2e997d49b58d2aa803743d1ae11b36bd72c71a6523af48056d27f_prof);

    }

    // line 203
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_71f1301ab4a15918e01cbc23cde7bae18da2e1e61b4717ff248dccd49b9947f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f1301ab4a15918e01cbc23cde7bae18da2e1e61b4717ff248dccd49b9947f5->enter($__internal_71f1301ab4a15918e01cbc23cde7bae18da2e1e61b4717ff248dccd49b9947f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_02cbc5c2184651ec78e960a0feb4c31dcaec89856797dfa7b8666d31082e4eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cbc5c2184651ec78e960a0feb4c31dcaec89856797dfa7b8666d31082e4eba->enter($__internal_02cbc5c2184651ec78e960a0feb4c31dcaec89856797dfa7b8666d31082e4eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_02cbc5c2184651ec78e960a0feb4c31dcaec89856797dfa7b8666d31082e4eba->leave($__internal_02cbc5c2184651ec78e960a0feb4c31dcaec89856797dfa7b8666d31082e4eba_prof);

        
        $__internal_71f1301ab4a15918e01cbc23cde7bae18da2e1e61b4717ff248dccd49b9947f5->leave($__internal_71f1301ab4a15918e01cbc23cde7bae18da2e1e61b4717ff248dccd49b9947f5_prof);

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
        return array (  523 => 203,  506 => 165,  489 => 162,  472 => 160,  455 => 151,  422 => 149,  412 => 139,  403 => 138,  386 => 23,  374 => 204,  372 => 203,  367 => 201,  363 => 200,  359 => 199,  355 => 198,  351 => 197,  347 => 196,  341 => 193,  337 => 192,  333 => 191,  329 => 190,  325 => 189,  321 => 188,  316 => 186,  312 => 185,  291 => 166,  289 => 165,  285 => 163,  283 => 162,  280 => 161,  278 => 160,  268 => 152,  266 => 151,  259 => 149,  248 => 140,  246 => 138,  211 => 105,  205 => 102,  202 => 101,  194 => 96,  186 => 91,  181 => 88,  179 => 87,  167 => 78,  152 => 66,  148 => 65,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  86 => 36,  82 => 35,  78 => 34,  74 => 33,  70 => 32,  58 => 23,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
    <title>I-ecaisse | {% block title %}{% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <meta name=\"MobileOptimized\" content=\"320\">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/plugins/uniform/css/uniform.default.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/plugins/select2/select2.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}\"/>
    
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href=\"{{ asset('assets/css/style-conquer.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/style-responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/plugins.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/themes/default.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"{{ asset('assets/css/custom.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
    <link rel=\"shortcut icon\" href=\"\"/>
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
            <a href=\"{{ path('homepage') }}\">
                <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"logo\"/>
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
            <img src=\"{{ asset('assets/img/menu-toggler.png') }}\" alt=\"\"/>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"devider\">
                &nbsp;
            </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            {% if app.user %}
                <li class=\"dropdown user\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                       data-close-others=\"true\">
                        <span class=\"username username-hide-on-mobile\">{{ app.user.username }} </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-key\"></i> Déconnecter</a>
                        </li>
                    </ul>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-key\"></i> Connexion</a>
                </li>
            {% endif %}
            <!-- END USER LOGIN DROPDOWN -->
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
                {% block menu %}
                {% endblock %}
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <div class=\"page-content-wrapper\">
        <div class=\"page-content\">
            <!-- BEGIN PAGE HEADER-->
            <h3 class=\"page-title\">
                {% block page_entete_normal %}{% endblock %} <small>{% block page_entete_petit %}{% endblock %}</small>
            </h3>
            {% block breadcrump %}{% endblock %}
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Begin: life time stats -->
                    <div class=\"portlet\">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"fa fa-shopping-cart\"></i>{% block content_entete %}{% endblock %}
                            </div>
                            {% block actions %}{% endblock %}
                        </div>
                        <div class=\"portlet-body\">
                            {% block content %}{% endblock %}
                        </div>
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
<script src=\"{{ asset('assets/plugins/jquery-1.11.0.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js') }}\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/plugins/uniform/jquery.uniform.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/select2/select2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>
<!-- END PAGE LEVEL PLUGINS -->
{% block javascript %}{% endblock %}
</body>
<!-- END BODY -->
</html>", "base.html.twig", "/var/www/html/ecaisse/app/Resources/views/base.html.twig");
    }
}
