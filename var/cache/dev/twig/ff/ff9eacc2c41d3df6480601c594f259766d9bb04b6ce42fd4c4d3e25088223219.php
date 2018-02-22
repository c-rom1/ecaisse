<?php

/* famille/index.html.twig */
class __TwigTemplate_b6be0d6dc44aa3a823769ef36f815bb6a838d03aa3cdc5eb27a70ea3227e5669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("famille/layout.html.twig", "famille/index.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "famille/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d82847f7ad3a81df9a085a21dac36a863d3fa2d6d5b5b8fa73bc8a98cd5caded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82847f7ad3a81df9a085a21dac36a863d3fa2d6d5b5b8fa73bc8a98cd5caded->enter($__internal_d82847f7ad3a81df9a085a21dac36a863d3fa2d6d5b5b8fa73bc8a98cd5caded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "famille/index.html.twig"));

        $__internal_0d7b386f10ba30ecab66b8746fa77afd8c1dae6c82e3d0347a0734633628fd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7b386f10ba30ecab66b8746fa77afd8c1dae6c82e3d0347a0734633628fd0d->enter($__internal_0d7b386f10ba30ecab66b8746fa77afd8c1dae6c82e3d0347a0734633628fd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "famille/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d82847f7ad3a81df9a085a21dac36a863d3fa2d6d5b5b8fa73bc8a98cd5caded->leave($__internal_d82847f7ad3a81df9a085a21dac36a863d3fa2d6d5b5b8fa73bc8a98cd5caded_prof);

        
        $__internal_0d7b386f10ba30ecab66b8746fa77afd8c1dae6c82e3d0347a0734633628fd0d->leave($__internal_0d7b386f10ba30ecab66b8746fa77afd8c1dae6c82e3d0347a0734633628fd0d_prof);

    }

    // line 4
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_51fedf1d67232538b1beda91483299d766c099512977c285835e07f1fe8f9c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fedf1d67232538b1beda91483299d766c099512977c285835e07f1fe8f9c98->enter($__internal_51fedf1d67232538b1beda91483299d766c099512977c285835e07f1fe8f9c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_df356cba9dbede991a43c2e289d4b11e0446a44624d86bb16baa4c98bcaf4d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df356cba9dbede991a43c2e289d4b11e0446a44624d86bb16baa4c98bcaf4d24->enter($__internal_df356cba9dbede991a43c2e289d4b11e0446a44624d86bb16baa4c98bcaf4d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Liste des Familles";
        
        $__internal_df356cba9dbede991a43c2e289d4b11e0446a44624d86bb16baa4c98bcaf4d24->leave($__internal_df356cba9dbede991a43c2e289d4b11e0446a44624d86bb16baa4c98bcaf4d24_prof);

        
        $__internal_51fedf1d67232538b1beda91483299d766c099512977c285835e07f1fe8f9c98->leave($__internal_51fedf1d67232538b1beda91483299d766c099512977c285835e07f1fe8f9c98_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1f8554238a631632f64b2bfbb0cef6857a0fa181a065494679fdce6df957a766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8554238a631632f64b2bfbb0cef6857a0fa181a065494679fdce6df957a766->enter($__internal_1f8554238a631632f64b2bfbb0cef6857a0fa181a065494679fdce6df957a766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_cadb34656a5dc6e32873989668d470cbedd30905fe908a3d9189cfe569470d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadb34656a5dc6e32873989668d470cbedd30905fe908a3d9189cfe569470d12->enter($__internal_cadb34656a5dc6e32873989668d470cbedd30905fe908a3d9189cfe569470d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "    <div class=\"actions\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
";
        
        $__internal_cadb34656a5dc6e32873989668d470cbedd30905fe908a3d9189cfe569470d12->leave($__internal_cadb34656a5dc6e32873989668d470cbedd30905fe908a3d9189cfe569470d12_prof);

        
        $__internal_1f8554238a631632f64b2bfbb0cef6857a0fa181a065494679fdce6df957a766->leave($__internal_1f8554238a631632f64b2bfbb0cef6857a0fa181a065494679fdce6df957a766_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_c087d86b5f9bf2a579fcb988b275ede2b8aeebaa901b372cc943ac25fd446a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c087d86b5f9bf2a579fcb988b275ede2b8aeebaa901b372cc943ac25fd446a08->enter($__internal_c087d86b5f9bf2a579fcb988b275ede2b8aeebaa901b372cc943ac25fd446a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1b909c9f9c3fea1ca17d547b90b8a3e287fadd4cccc5601900f161593d4dc15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b909c9f9c3fea1ca17d547b90b8a3e287fadd4cccc5601900f161593d4dc15e->enter($__internal_1b909c9f9c3fea1ca17d547b90b8a3e287fadd4cccc5601900f161593d4dc15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1b909c9f9c3fea1ca17d547b90b8a3e287fadd4cccc5601900f161593d4dc15e->leave($__internal_1b909c9f9c3fea1ca17d547b90b8a3e287fadd4cccc5601900f161593d4dc15e_prof);

        
        $__internal_c087d86b5f9bf2a579fcb988b275ede2b8aeebaa901b372cc943ac25fd446a08->leave($__internal_c087d86b5f9bf2a579fcb988b275ede2b8aeebaa901b372cc943ac25fd446a08_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_88fdea63f390a2c5bd8d72322af358c27654fe26e0aa4af2b719bee4c53ffa76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fdea63f390a2c5bd8d72322af358c27654fe26e0aa4af2b719bee4c53ffa76->enter($__internal_88fdea63f390a2c5bd8d72322af358c27654fe26e0aa4af2b719bee4c53ffa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_15aabe9614d8240e17282b487b7fb0681c7f6897ba4659bcfbc340e06da6535f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aabe9614d8240e17282b487b7fb0681c7f6897ba4659bcfbc340e06da6535f->enter($__internal_15aabe9614d8240e17282b487b7fb0681c7f6897ba4659bcfbc340e06da6535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_15aabe9614d8240e17282b487b7fb0681c7f6897ba4659bcfbc340e06da6535f->leave($__internal_15aabe9614d8240e17282b487b7fb0681c7f6897ba4659bcfbc340e06da6535f_prof);

        
        $__internal_88fdea63f390a2c5bd8d72322af358c27654fe26e0aa4af2b719bee4c53ffa76->leave($__internal_88fdea63f390a2c5bd8d72322af358c27654fe26e0aa4af2b719bee4c53ffa76_prof);

    }

    public function getTemplateName()
    {
        return "famille/index.html.twig";
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
        return new Twig_Source("{% extends 'famille/layout.html.twig' %}


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
{% endblock %}", "famille/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/famille/index.html.twig");
    }
}
