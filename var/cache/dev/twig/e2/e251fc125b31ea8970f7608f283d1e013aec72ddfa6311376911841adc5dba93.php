<?php

/* tva/index.html.twig */
class __TwigTemplate_d7ee46a706186983ff795fe8f1ac9cb8e92c8af011cf9b32fda85239d42675d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("tva/layout.html.twig", "tva/index.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tva/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_812ca6628ce6be8a650595f5780f67baef3c33365f7f0040a403038dde327a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ca6628ce6be8a650595f5780f67baef3c33365f7f0040a403038dde327a4d->enter($__internal_812ca6628ce6be8a650595f5780f67baef3c33365f7f0040a403038dde327a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/index.html.twig"));

        $__internal_a5266f76904d928eb4e47fe5499b6a1f2ec9c99bd0a5f04d885044522cd98fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5266f76904d928eb4e47fe5499b6a1f2ec9c99bd0a5f04d885044522cd98fa5->enter($__internal_a5266f76904d928eb4e47fe5499b6a1f2ec9c99bd0a5f04d885044522cd98fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812ca6628ce6be8a650595f5780f67baef3c33365f7f0040a403038dde327a4d->leave($__internal_812ca6628ce6be8a650595f5780f67baef3c33365f7f0040a403038dde327a4d_prof);

        
        $__internal_a5266f76904d928eb4e47fe5499b6a1f2ec9c99bd0a5f04d885044522cd98fa5->leave($__internal_a5266f76904d928eb4e47fe5499b6a1f2ec9c99bd0a5f04d885044522cd98fa5_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_469b9800670b68b9b1a8169760ccff88c143c75d7512bdfed2cb02da43f9eff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469b9800670b68b9b1a8169760ccff88c143c75d7512bdfed2cb02da43f9eff1->enter($__internal_469b9800670b68b9b1a8169760ccff88c143c75d7512bdfed2cb02da43f9eff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_c0aef1f39b3a838f7b4a8d848745005ca6b1ab750ce4638364420bc6c0f41b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0aef1f39b3a838f7b4a8d848745005ca6b1ab750ce4638364420bc6c0f41b12->enter($__internal_c0aef1f39b3a838f7b4a8d848745005ca6b1ab750ce4638364420bc6c0f41b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Liste des TVA";
        
        $__internal_c0aef1f39b3a838f7b4a8d848745005ca6b1ab750ce4638364420bc6c0f41b12->leave($__internal_c0aef1f39b3a838f7b4a8d848745005ca6b1ab750ce4638364420bc6c0f41b12_prof);

        
        $__internal_469b9800670b68b9b1a8169760ccff88c143c75d7512bdfed2cb02da43f9eff1->leave($__internal_469b9800670b68b9b1a8169760ccff88c143c75d7512bdfed2cb02da43f9eff1_prof);

    }

    // line 4
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e5d6375d56a36caca4c01d0242e7890d6b9b5a04bbe773bd267ebbdfaed00a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d6375d56a36caca4c01d0242e7890d6b9b5a04bbe773bd267ebbdfaed00a0a->enter($__internal_e5d6375d56a36caca4c01d0242e7890d6b9b5a04bbe773bd267ebbdfaed00a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_bb62bd6ba74b08f7dd35fe12f7de105b383304b7139bec795ee0293b85c952ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb62bd6ba74b08f7dd35fe12f7de105b383304b7139bec795ee0293b85c952ff->enter($__internal_bb62bd6ba74b08f7dd35fe12f7de105b383304b7139bec795ee0293b85c952ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 5
        echo "    <div class=\"actions\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
";
        
        $__internal_bb62bd6ba74b08f7dd35fe12f7de105b383304b7139bec795ee0293b85c952ff->leave($__internal_bb62bd6ba74b08f7dd35fe12f7de105b383304b7139bec795ee0293b85c952ff_prof);

        
        $__internal_e5d6375d56a36caca4c01d0242e7890d6b9b5a04bbe773bd267ebbdfaed00a0a->leave($__internal_e5d6375d56a36caca4c01d0242e7890d6b9b5a04bbe773bd267ebbdfaed00a0a_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d87bcb7c3e593b8c09a47b891d6f243a6c0964002b3ca0008e2227d837aa2c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87bcb7c3e593b8c09a47b891d6f243a6c0964002b3ca0008e2227d837aa2c58->enter($__internal_d87bcb7c3e593b8c09a47b891d6f243a6c0964002b3ca0008e2227d837aa2c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_305f823e437fde72655e3081d3a6af8550e7f981f4e545f854cdb65f4e2c556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305f823e437fde72655e3081d3a6af8550e7f981f4e545f854cdb65f4e2c556b->enter($__internal_305f823e437fde72655e3081d3a6af8550e7f981f4e545f854cdb65f4e2c556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">
                <th>Id</th>
                <th>Type</th>
                <th>Taux</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Actions</th>
            </tr>
            </thead>
        </table>
    </div>
";
        
        $__internal_305f823e437fde72655e3081d3a6af8550e7f981f4e545f854cdb65f4e2c556b->leave($__internal_305f823e437fde72655e3081d3a6af8550e7f981f4e545f854cdb65f4e2c556b_prof);

        
        $__internal_d87bcb7c3e593b8c09a47b891d6f243a6c0964002b3ca0008e2227d837aa2c58->leave($__internal_d87bcb7c3e593b8c09a47b891d6f243a6c0964002b3ca0008e2227d837aa2c58_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_11d070294f0fe109a91ec5a861f4042b41df01de4304c1fe555c90789e126718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d070294f0fe109a91ec5a861f4042b41df01de4304c1fe555c90789e126718->enter($__internal_11d070294f0fe109a91ec5a861f4042b41df01de4304c1fe555c90789e126718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_aa5f17ecc414ab9fbe0cea590b75f1408ba7fdf9aec55d6c4004b909aa660aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5f17ecc414ab9fbe0cea590b75f1408ba7fdf9aec55d6c4004b909aa660aba->enter($__internal_aa5f17ecc414ab9fbe0cea590b75f1408ba7fdf9aec55d6c4004b909aa660aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/datatable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
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
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_data");
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
        
        $__internal_aa5f17ecc414ab9fbe0cea590b75f1408ba7fdf9aec55d6c4004b909aa660aba->leave($__internal_aa5f17ecc414ab9fbe0cea590b75f1408ba7fdf9aec55d6c4004b909aa660aba_prof);

        
        $__internal_11d070294f0fe109a91ec5a861f4042b41df01de4304c1fe555c90789e126718->leave($__internal_11d070294f0fe109a91ec5a861f4042b41df01de4304c1fe555c90789e126718_prof);

    }

    public function getTemplateName()
    {
        return "tva/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  137 => 30,  133 => 29,  128 => 28,  119 => 27,  95 => 11,  86 => 10,  73 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'tva/layout.html.twig' %}

{% block content_entete %}Liste des TVA{% endblock %}
{% block actions %}
    <div class=\"actions\">
        <a href=\"{{ path('tva_new') }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
{% endblock %}

{% block content %}
    <div class=\"table-container\">
        <table class=\"table table-striped table-bordered table-hover\" id=\"datatable_ajax\">
            <thead>
            <tr  role=\"row\" class=\"heading\">
                <th>Id</th>
                <th>Type</th>
                <th>Taux</th>
                <th>Datedeb</th>
                <th>Datefin</th>
                <th>Actions</th>
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
                        \"url\": \"{{ path('tva_data') }}\"
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
{% endblock %}", "tva/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/index.html.twig");
    }
}
