<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0191ca9e4e2dd22928ae2039be5aacdc604953908eab43afb8997a43ccbed755 extends Twig_Template
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
        $__internal_787f01d865ee099765f2834fd0771fbe50b73408dcba778ed0fa6fb5d76d45c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f01d865ee099765f2834fd0771fbe50b73408dcba778ed0fa6fb5d76d45c9->enter($__internal_787f01d865ee099765f2834fd0771fbe50b73408dcba778ed0fa6fb5d76d45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_25de54b8dd4d8db9da11224207aacc5d77fe68fa964787d666c17fe7ad708859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25de54b8dd4d8db9da11224207aacc5d77fe68fa964787d666c17fe7ad708859->enter($__internal_25de54b8dd4d8db9da11224207aacc5d77fe68fa964787d666c17fe7ad708859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787f01d865ee099765f2834fd0771fbe50b73408dcba778ed0fa6fb5d76d45c9->leave($__internal_787f01d865ee099765f2834fd0771fbe50b73408dcba778ed0fa6fb5d76d45c9_prof);

        
        $__internal_25de54b8dd4d8db9da11224207aacc5d77fe68fa964787d666c17fe7ad708859->leave($__internal_25de54b8dd4d8db9da11224207aacc5d77fe68fa964787d666c17fe7ad708859_prof);

    }

    // line 2
    public function block_fos_content($context, array $blocks = array())
    {
        $__internal_8ee034d603d3a28e06048f111cbbdd3f1594a74143f65ca2122e3243bd4c5766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee034d603d3a28e06048f111cbbdd3f1594a74143f65ca2122e3243bd4c5766->enter($__internal_8ee034d603d3a28e06048f111cbbdd3f1594a74143f65ca2122e3243bd4c5766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_content"));

        $__internal_ddbf0421b5a87ad0c062f0524f4cdea8796ea62b5d760607c6baa222b4d2ac9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbf0421b5a87ad0c062f0524f4cdea8796ea62b5d760607c6baa222b4d2ac9f->enter($__internal_ddbf0421b5a87ad0c062f0524f4cdea8796ea62b5d760607c6baa222b4d2ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_content"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
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
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 38, $this->getSourceContext()); })())) {
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 60, $this->getSourceContext()); })())) {
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
        
        $__internal_ddbf0421b5a87ad0c062f0524f4cdea8796ea62b5d760607c6baa222b4d2ac9f->leave($__internal_ddbf0421b5a87ad0c062f0524f4cdea8796ea62b5d760607c6baa222b4d2ac9f_prof);

        
        $__internal_8ee034d603d3a28e06048f111cbbdd3f1594a74143f65ca2122e3243bd4c5766->leave($__internal_8ee034d603d3a28e06048f111cbbdd3f1594a74143f65ca2122e3243bd4c5766_prof);

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
        return array (  187 => 85,  183 => 84,  177 => 81,  173 => 80,  167 => 77,  163 => 76,  159 => 75,  155 => 74,  151 => 73,  147 => 72,  142 => 70,  138 => 69,  130 => 63,  126 => 61,  124 => 60,  101 => 39,  95 => 38,  82 => 28,  67 => 16,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Security:base.html.twig\"%}
{% block fos_content %}

    <!-- BEGIN BODY -->
    <body class=\"login\">
    <!-- BEGIN LOGO -->
    <div class=\"logo\">
        <a href=\"index.html\">
            <img src=\"{{asset('assets/img/logo.png') }}\" alt=\"\"/>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
        <!-- BEGIN LOGIN FORM -->
        <form  action=\"{{ path('fos_user_security_check') }}\" method=\"post\" class=\"login-form\" method=\"post\">
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
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" id=\"username\" placeholder=\"Username\" name=\"_username\" value=\"{{ last_username }}\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                <div class=\"input-icon\">
                    <i class=\"fa fa-lock\"></i>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" \" id=\"password\" placeholder=\"Password\" name=\"_password\"/>
                </div>
            </div>
            {% if csrf_token %}        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />    {% endif %}
            <div class=\"form-actions\">
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
            {% if error %}
                <div class=\"alert alert-danger\">Identifiants incorrects</div>
            {% endif %}
        </div>
    </div>


    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"{{asset('assets/plugins/jquery-1.11.0.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/jquery-migrate-1.2.1.min.js') }}\" type=\"text/javascript\"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src=\"{{asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/uniform/jquery.uniform.min.js') }}\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/plugins/select2/select2.min.js') }}\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"{{asset('assets/scripts/app.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/scripts/login.js') }}\" type=\"text/javascript\"></script>
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
{% endblock %}", "@FOSUser/Security/login.html.twig", "/var/www/html/ecaisse/src/AppBundle/Resources/views/Security/login.html.twig");
    }
}
