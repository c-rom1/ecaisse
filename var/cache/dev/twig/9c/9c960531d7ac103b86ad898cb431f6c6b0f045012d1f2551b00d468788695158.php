<?php

/* Famille/index.html.twig */
class __TwigTemplate_5b2c0ddf172da0bd7d91e35151106e914f938e99d895bdf22bc30ee13facb225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Famille/layout.html.twig", "Famille/index.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Famille/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fa6d9696db0438aeb19772f37a46683f82d19d0983797d3d3fe6e3bce24263c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa6d9696db0438aeb19772f37a46683f82d19d0983797d3d3fe6e3bce24263c->enter($__internal_4fa6d9696db0438aeb19772f37a46683f82d19d0983797d3d3fe6e3bce24263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/index.html.twig"));

        $__internal_19e24de8daf1791cf32d819b1aa7964182573b3dc1e5f79806699b9adce58981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e24de8daf1791cf32d819b1aa7964182573b3dc1e5f79806699b9adce58981->enter($__internal_19e24de8daf1791cf32d819b1aa7964182573b3dc1e5f79806699b9adce58981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa6d9696db0438aeb19772f37a46683f82d19d0983797d3d3fe6e3bce24263c->leave($__internal_4fa6d9696db0438aeb19772f37a46683f82d19d0983797d3d3fe6e3bce24263c_prof);

        
        $__internal_19e24de8daf1791cf32d819b1aa7964182573b3dc1e5f79806699b9adce58981->leave($__internal_19e24de8daf1791cf32d819b1aa7964182573b3dc1e5f79806699b9adce58981_prof);

    }

    // line 4
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_501a56b331c0a367d13040a1e68cecbb9b0001ce29154f41b5f467504ab1983f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501a56b331c0a367d13040a1e68cecbb9b0001ce29154f41b5f467504ab1983f->enter($__internal_501a56b331c0a367d13040a1e68cecbb9b0001ce29154f41b5f467504ab1983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_69bb3d841eccd402bef85d1fda11af644b7f5c19cdad188b53c3d72aa20176f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bb3d841eccd402bef85d1fda11af644b7f5c19cdad188b53c3d72aa20176f4->enter($__internal_69bb3d841eccd402bef85d1fda11af644b7f5c19cdad188b53c3d72aa20176f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Liste des Familles";
        
        $__internal_69bb3d841eccd402bef85d1fda11af644b7f5c19cdad188b53c3d72aa20176f4->leave($__internal_69bb3d841eccd402bef85d1fda11af644b7f5c19cdad188b53c3d72aa20176f4_prof);

        
        $__internal_501a56b331c0a367d13040a1e68cecbb9b0001ce29154f41b5f467504ab1983f->leave($__internal_501a56b331c0a367d13040a1e68cecbb9b0001ce29154f41b5f467504ab1983f_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6be9da02a6e110f21812e5d79c45d8ed67ef3660ebea59542e7d958afec8cad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be9da02a6e110f21812e5d79c45d8ed67ef3660ebea59542e7d958afec8cad8->enter($__internal_6be9da02a6e110f21812e5d79c45d8ed67ef3660ebea59542e7d958afec8cad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_48cec4cc1e0c2c8c150243db5452ebbc3fa3ee670489dde6408be0a7e9736c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cec4cc1e0c2c8c150243db5452ebbc3fa3ee670489dde6408be0a7e9736c41->enter($__internal_48cec4cc1e0c2c8c150243db5452ebbc3fa3ee670489dde6408be0a7e9736c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "    <div class=\"actions\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
";
        
        $__internal_48cec4cc1e0c2c8c150243db5452ebbc3fa3ee670489dde6408be0a7e9736c41->leave($__internal_48cec4cc1e0c2c8c150243db5452ebbc3fa3ee670489dde6408be0a7e9736c41_prof);

        
        $__internal_6be9da02a6e110f21812e5d79c45d8ed67ef3660ebea59542e7d958afec8cad8->leave($__internal_6be9da02a6e110f21812e5d79c45d8ed67ef3660ebea59542e7d958afec8cad8_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_21605664d3005d3cfdea75c549e5a75a9bb569f6256cc9d65d1922b831c1c9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21605664d3005d3cfdea75c549e5a75a9bb569f6256cc9d65d1922b831c1c9cf->enter($__internal_21605664d3005d3cfdea75c549e5a75a9bb569f6256cc9d65d1922b831c1c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93e7d62e86f2d8db50c49cc58f086cb81e2fa5c1935cad7280dbeee6486cd968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e7d62e86f2d8db50c49cc58f086cb81e2fa5c1935cad7280dbeee6486cd968->enter($__internal_93e7d62e86f2d8db50c49cc58f086cb81e2fa5c1935cad7280dbeee6486cd968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">

                <th  width=\"5%\">Id</th>
                <th  width=\"5%\">Code</th>
                <th  width=\"15%\">Libelle</th>
                <th width=\"5%\">TVA</th>
                <th width=\"15%\">Actions</th>
            </tr>
            </thead>
        </table>
    </div>
";
        
        $__internal_93e7d62e86f2d8db50c49cc58f086cb81e2fa5c1935cad7280dbeee6486cd968->leave($__internal_93e7d62e86f2d8db50c49cc58f086cb81e2fa5c1935cad7280dbeee6486cd968_prof);

        
        $__internal_21605664d3005d3cfdea75c549e5a75a9bb569f6256cc9d65d1922b831c1c9cf->leave($__internal_21605664d3005d3cfdea75c549e5a75a9bb569f6256cc9d65d1922b831c1c9cf_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f29ea9b474c3390951811204b1ed72ea03cabd5b3cf9257981b386bf063e20fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29ea9b474c3390951811204b1ed72ea03cabd5b3cf9257981b386bf063e20fd->enter($__internal_f29ea9b474c3390951811204b1ed72ea03cabd5b3cf9257981b386bf063e20fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3f1087dd196268e467c3d98cd8587b87588383eedf149f7f2759cf1f71a81082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1087dd196268e467c3d98cd8587b87588383eedf149f7f2759cf1f71a81082->enter($__internal_3f1087dd196268e467c3d98cd8587b87588383eedf149f7f2759cf1f71a81082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 30
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/datatable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
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
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_data");
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
        
        $__internal_3f1087dd196268e467c3d98cd8587b87588383eedf149f7f2759cf1f71a81082->leave($__internal_3f1087dd196268e467c3d98cd8587b87588383eedf149f7f2759cf1f71a81082_prof);

        
        $__internal_f29ea9b474c3390951811204b1ed72ea03cabd5b3cf9257981b386bf063e20fd->leave($__internal_f29ea9b474c3390951811204b1ed72ea03cabd5b3cf9257981b386bf063e20fd_prof);

    }

    public function getTemplateName()
    {
        return "Famille/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  137 => 32,  133 => 31,  128 => 30,  119 => 29,  95 => 13,  86 => 12,  73 => 8,  70 => 7,  61 => 6,  43 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Famille/layout.html.twig' %}


{% block content_entete %}Liste des Familles{% endblock %}

{% block actions %}
    <div class=\"actions\">
        <a href=\"{{ path('famille_new') }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
{% endblock %}

{% block content %}
    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">

                <th  width=\"5%\">Id</th>
                <th  width=\"5%\">Code</th>
                <th  width=\"15%\">Libelle</th>
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
                        \"url\": \"{{ path('famille_data') }}\"
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
{% endblock %}", "Famille/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/Famille/index.html.twig");
    }
}
