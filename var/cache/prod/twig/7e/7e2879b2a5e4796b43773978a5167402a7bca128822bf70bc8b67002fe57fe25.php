<?php

/* tva/index.html.twig */
class __TwigTemplate_a41e4c7c161b09664950756a913f1a5d5cc2231a6d146a8549fc75ab324eee35 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        echo "Liste des TVA";
    }

    // line 4
    public function block_actions($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"actions\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i><span class=\"hidden-480\">Ajout</span></a>
    </div>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  117 => 61,  83 => 30,  79 => 29,  74 => 28,  71 => 27,  53 => 11,  50 => 10,  43 => 6,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tva/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/index.html.twig");
    }
}
