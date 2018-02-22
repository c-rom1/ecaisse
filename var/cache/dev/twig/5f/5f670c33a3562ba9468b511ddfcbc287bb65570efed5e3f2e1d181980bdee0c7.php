<?php

/* article/index.html.twig */
class __TwigTemplate_0d74ab7cda0f720427a28924c1bcd175a69f0dd82662e69237cf1aa88da809b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("article/layout.html.twig", "article/index.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "article/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59e51f03440e971782444fd09423f56ae03ff73af34041651f25bd5db33d451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59e51f03440e971782444fd09423f56ae03ff73af34041651f25bd5db33d451->enter($__internal_a59e51f03440e971782444fd09423f56ae03ff73af34041651f25bd5db33d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6125aa33930a06059278148fe166ab0a34d0fdb85ab470e39e4f3bcb1603b4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6125aa33930a06059278148fe166ab0a34d0fdb85ab470e39e4f3bcb1603b4f5->enter($__internal_6125aa33930a06059278148fe166ab0a34d0fdb85ab470e39e4f3bcb1603b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59e51f03440e971782444fd09423f56ae03ff73af34041651f25bd5db33d451->leave($__internal_a59e51f03440e971782444fd09423f56ae03ff73af34041651f25bd5db33d451_prof);

        
        $__internal_6125aa33930a06059278148fe166ab0a34d0fdb85ab470e39e4f3bcb1603b4f5->leave($__internal_6125aa33930a06059278148fe166ab0a34d0fdb85ab470e39e4f3bcb1603b4f5_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_70d873f10e6a47693d2fb60d7a56586ab5bef1473f5bba569131cafc02e88449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d873f10e6a47693d2fb60d7a56586ab5bef1473f5bba569131cafc02e88449->enter($__internal_70d873f10e6a47693d2fb60d7a56586ab5bef1473f5bba569131cafc02e88449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_6955bfecfa852b8c9eefd02a9b2f867221b80e263bca2f463b7f181dcaed0d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6955bfecfa852b8c9eefd02a9b2f867221b80e263bca2f463b7f181dcaed0d05->enter($__internal_6955bfecfa852b8c9eefd02a9b2f867221b80e263bca2f463b7f181dcaed0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Liste des articles";
        
        $__internal_6955bfecfa852b8c9eefd02a9b2f867221b80e263bca2f463b7f181dcaed0d05->leave($__internal_6955bfecfa852b8c9eefd02a9b2f867221b80e263bca2f463b7f181dcaed0d05_prof);

        
        $__internal_70d873f10e6a47693d2fb60d7a56586ab5bef1473f5bba569131cafc02e88449->leave($__internal_70d873f10e6a47693d2fb60d7a56586ab5bef1473f5bba569131cafc02e88449_prof);

    }

    // line 5
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1ac16e2db00a939af75524b96c1983aa0330db7d1965b65728cfd990f4bc8106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac16e2db00a939af75524b96c1983aa0330db7d1965b65728cfd990f4bc8106->enter($__internal_1ac16e2db00a939af75524b96c1983aa0330db7d1965b65728cfd990f4bc8106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3ac1a51cd0abe1af4c53ca73da2436257cbce115a9d3c76b77f03e202d2a62f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac1a51cd0abe1af4c53ca73da2436257cbce115a9d3c76b77f03e202d2a62f8->enter($__internal_3ac1a51cd0abe1af4c53ca73da2436257cbce115a9d3c76b77f03e202d2a62f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        echo "    <div class=\"actions\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
";
        
        $__internal_3ac1a51cd0abe1af4c53ca73da2436257cbce115a9d3c76b77f03e202d2a62f8->leave($__internal_3ac1a51cd0abe1af4c53ca73da2436257cbce115a9d3c76b77f03e202d2a62f8_prof);

        
        $__internal_1ac16e2db00a939af75524b96c1983aa0330db7d1965b65728cfd990f4bc8106->leave($__internal_1ac16e2db00a939af75524b96c1983aa0330db7d1965b65728cfd990f4bc8106_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1f83793b3b26e94a1fbc1c4153574fb1ae785d314d2e0a6dfe3a739032229b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f83793b3b26e94a1fbc1c4153574fb1ae785d314d2e0a6dfe3a739032229b2f->enter($__internal_1f83793b3b26e94a1fbc1c4153574fb1ae785d314d2e0a6dfe3a739032229b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c319b31dcff7849297a868496940a936b0937fa1b05663733cc7f2c2412ae77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c319b31dcff7849297a868496940a936b0937fa1b05663733cc7f2c2412ae77c->enter($__internal_c319b31dcff7849297a868496940a936b0937fa1b05663733cc7f2c2412ae77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">

                <th  width=\"5%\">Id</th>
                <th width=\"15%\">Famille</th>
                <th  width=\"5%\">Code</th>
                <th  width=\"15%\">Libelle</th>
                <th width=\"15%\">Prix Unitaire</th>
                <th width=\"5%\">TVA</th>
                <th width=\"15%\">Actions</th>
            </tr>
            </thead>
        </table>
    </div>

";
        
        $__internal_c319b31dcff7849297a868496940a936b0937fa1b05663733cc7f2c2412ae77c->leave($__internal_c319b31dcff7849297a868496940a936b0937fa1b05663733cc7f2c2412ae77c_prof);

        
        $__internal_1f83793b3b26e94a1fbc1c4153574fb1ae785d314d2e0a6dfe3a739032229b2f->leave($__internal_1f83793b3b26e94a1fbc1c4153574fb1ae785d314d2e0a6dfe3a739032229b2f_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f0b96347c5759be0e8273ed7f96673e464d7a0a3d158627980a4cae9b904ee6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b96347c5759be0e8273ed7f96673e464d7a0a3d158627980a4cae9b904ee6a->enter($__internal_f0b96347c5759be0e8273ed7f96673e464d7a0a3d158627980a4cae9b904ee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_7732738af1d0799da6d43224262c14e59607c921084caf820d2786b3d5dc170d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7732738af1d0799da6d43224262c14e59607c921084caf820d2786b3d5dc170d->enter($__internal_7732738af1d0799da6d43224262c14e59607c921084caf820d2786b3d5dc170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/datatable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/table-ajax.js"), "html", null, true);
        echo "\"></script>
    <script>
        var TableAjax = function () {

            var initPickers = function () {
                //init date pickers
                \$('.date-picker').datepicker({
                    autoclose: true
                });
            }

            var handleRecords = function () {

                var grid = new Datatable();

                grid.init({
                    src: \$(\"#datatable_ajax\"),
                    onSuccess: function (grid) {
                        // execute some code after table records loaded
                    },
                    onError: function (grid) {
                        // execute some code on network or other general error
                    },
                    loadingMessage: 'Loading...',
                    dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options
                        \"lengthMenu\": [
                            [10, 20, 50, 100, 150, -1],
                            [10, 20, 50, 100, 150, \"All\"] // change per page values here
                        ],
                        \"pageLength\": 10, // default record count per page
                        \"ajax\": {
                            \"url\": \"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_data");
        echo "\"
                        },
                        \"order\": [
                            [1, \"asc\"]
                        ] // set first column as a default sort by asc
                    }
                });
            }

            return {

                //main function to initiate the module
                init: function () {

                    initPickers();
                    handleRecords();
                }

            };

        }();

        jQuery(document).ready(function() {
            App.init();
            TableAjax.init();
        });
</script>

";
        
        $__internal_7732738af1d0799da6d43224262c14e59607c921084caf820d2786b3d5dc170d->leave($__internal_7732738af1d0799da6d43224262c14e59607c921084caf820d2786b3d5dc170d_prof);

        
        $__internal_f0b96347c5759be0e8273ed7f96673e464d7a0a3d158627980a4cae9b904ee6a->leave($__internal_f0b96347c5759be0e8273ed7f96673e464d7a0a3d158627980a4cae9b904ee6a_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 65,  140 => 34,  136 => 33,  131 => 32,  122 => 31,  95 => 12,  86 => 11,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'article/layout.html.twig' %}

{% block content_entete %}Liste des articles{% endblock %}

{% block actions %}
    <div class=\"actions\">
        <a href=\"{{ path('article_new') }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
{% endblock %}

{% block content %}
    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">

                <th  width=\"5%\">Id</th>
                <th width=\"15%\">Famille</th>
                <th  width=\"5%\">Code</th>
                <th  width=\"15%\">Libelle</th>
                <th width=\"15%\">Prix Unitaire</th>
                <th width=\"5%\">TVA</th>
                <th width=\"15%\">Actions</th>
            </tr>
            </thead>
        </table>
    </div>

{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('assets/scripts/app.js') }}\"></script>
    <script src=\"{{ asset('assets/scripts/datatable.js') }}\"></script>
    <script src=\"{{ asset('assets/scripts/table-ajax.js') }}\"></script>
    <script>
        var TableAjax = function () {

            var initPickers = function () {
                //init date pickers
                \$('.date-picker').datepicker({
                    autoclose: true
                });
            }

            var handleRecords = function () {

                var grid = new Datatable();

                grid.init({
                    src: \$(\"#datatable_ajax\"),
                    onSuccess: function (grid) {
                        // execute some code after table records loaded
                    },
                    onError: function (grid) {
                        // execute some code on network or other general error
                    },
                    loadingMessage: 'Loading...',
                    dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options
                        \"lengthMenu\": [
                            [10, 20, 50, 100, 150, -1],
                            [10, 20, 50, 100, 150, \"All\"] // change per page values here
                        ],
                        \"pageLength\": 10, // default record count per page
                        \"ajax\": {
                            \"url\": \"{{ path('article_data') }}\"
                        },
                        \"order\": [
                            [1, \"asc\"]
                        ] // set first column as a default sort by asc
                    }
                });
            }

            return {

                //main function to initiate the module
                init: function () {

                    initPickers();
                    handleRecords();
                }

            };

        }();

        jQuery(document).ready(function() {
            App.init();
            TableAjax.init();
        });
</script>

{% endblock %}", "article/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/article/index.html.twig");
    }
}
