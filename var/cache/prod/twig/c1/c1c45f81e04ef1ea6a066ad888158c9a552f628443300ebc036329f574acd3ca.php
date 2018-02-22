<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c2ca61f314a73ab3cd6301ca410f5c0b6043579c92babe5b9c5a0f6018ce009b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Security:base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_content' => array($this, 'block_fos_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Security:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <!-- BEGIN BODY -->
    <body class=\"login\">
    <!-- BEGIN LOGO -->
    <div class=\"logo\">
        <a href=\"index.html\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
        <!-- BEGIN LOGIN FORM -->
        <form  action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login-form\" method=\"post\">
            <h3 class=\"form-title\">Se connecter</h3>
            <div class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>
\t\t\tEntrez vos identifiants. </span>
            </div>
            <div class=\"form-group\">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class=\"control-label visible-ie8 visible-ie9\">Login</label>
                <div class=\"input-icon\">
                    <i class=\"fa fa-user\"></i>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" id=\"username\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                <div class=\"input-icon\">
                    <i class=\"fa fa-lock\"></i>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" \" id=\"password\" placeholder=\"Password\" name=\"_password\"/>
                </div>
            </div>
            ";
        // line 38
        if (($context["csrf_token"] ?? null)) {
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />    ";
        }
        // line 39
        echo "            <div class=\"form-actions\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> Se souvenir de moi </label>

                <button type=\"submit\" class=\"btn btn-info pull-right\"> Connexion </button>
            </div>

        </form>
        <!-- END LOGIN FORM -->

    </div>

    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class=\"copyright\">
        2017 &copy; ECaisse.
    </div>
    <!-- END COPYRIGHT -->

    <div  style=\"width:20%; margin:auto; \">
        <div class=\"error\">
            ";
        // line 60
        if (($context["error"] ?? null)) {
            // line 61
            echo "                <div class=\"alert alert-danger\">Identifiants incorrects</div>
            ";
        }
        // line 63
        echo "        </div>
    </div>


    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            App.init();
            Login.init();
            var action = location.hash.substr(1);
            if (action == 'createaccount') {
                \$('.register-form').show();
                \$('.login-form').hide();
                \$('.forget-form').hide();
            } else if (action == 'forgetpassword')  {
                \$('.register-form').hide();
                \$('.login-form').hide();
                \$('.forget-form').show();
            }
        });
    </script>
    <!-- END JAVASCRIPTS -->
    </body>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 85,  165 => 84,  159 => 81,  155 => 80,  149 => 77,  145 => 76,  141 => 75,  137 => 74,  133 => 73,  129 => 72,  124 => 70,  120 => 69,  112 => 63,  108 => 61,  106 => 60,  83 => 39,  77 => 38,  64 => 28,  49 => 16,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/var/www/html/ecaisse/src/AppBundle/Resources/views/Security/login.html.twig");
    }
}
