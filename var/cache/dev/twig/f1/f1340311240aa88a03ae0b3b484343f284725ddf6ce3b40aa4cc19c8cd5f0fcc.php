<?php

/* Famille/edit.html.twig */
class __TwigTemplate_e6820f7f7e8d0de53d634749ad37c91be0ae73f5a97519f422cbe436c9b03a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Famille/layout.html.twig", "Famille/edit.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
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
        $__internal_6a6132ecbce263407a756005088ffb020ccb6974315d3088a0618aabc822d460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6132ecbce263407a756005088ffb020ccb6974315d3088a0618aabc822d460->enter($__internal_6a6132ecbce263407a756005088ffb020ccb6974315d3088a0618aabc822d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/edit.html.twig"));

        $__internal_e09f5137c254ef749efe9558274eb91c808466eba4b27fe8554d696f4ab6325b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09f5137c254ef749efe9558274eb91c808466eba4b27fe8554d696f4ab6325b->enter($__internal_e09f5137c254ef749efe9558274eb91c808466eba4b27fe8554d696f4ab6325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6132ecbce263407a756005088ffb020ccb6974315d3088a0618aabc822d460->leave($__internal_6a6132ecbce263407a756005088ffb020ccb6974315d3088a0618aabc822d460_prof);

        
        $__internal_e09f5137c254ef749efe9558274eb91c808466eba4b27fe8554d696f4ab6325b->leave($__internal_e09f5137c254ef749efe9558274eb91c808466eba4b27fe8554d696f4ab6325b_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_d475bb00a614f7c83a2e96d3de9f3c3e5d5c788b6ecd112f196b9fde68ef7c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d475bb00a614f7c83a2e96d3de9f3c3e5d5c788b6ecd112f196b9fde68ef7c8b->enter($__internal_d475bb00a614f7c83a2e96d3de9f3c3e5d5c788b6ecd112f196b9fde68ef7c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_41c168948928a06d62453af98420c2a4a9d06efe030d7d26c4625f63e8040a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c168948928a06d62453af98420c2a4a9d06efe030d7d26c4625f63e8040a79->enter($__internal_41c168948928a06d62453af98420c2a4a9d06efe030d7d26c4625f63e8040a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Edition ";
        
        $__internal_41c168948928a06d62453af98420c2a4a9d06efe030d7d26c4625f63e8040a79->leave($__internal_41c168948928a06d62453af98420c2a4a9d06efe030d7d26c4625f63e8040a79_prof);

        
        $__internal_d475bb00a614f7c83a2e96d3de9f3c3e5d5c788b6ecd112f196b9fde68ef7c8b->leave($__internal_d475bb00a614f7c83a2e96d3de9f3c3e5d5c788b6ecd112f196b9fde68ef7c8b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_249655692aafde7adbd574bcb1c3cc1647e0318f9a987dd35ec2322d97de3110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249655692aafde7adbd574bcb1c3cc1647e0318f9a987dd35ec2322d97de3110->enter($__internal_249655692aafde7adbd574bcb1c3cc1647e0318f9a987dd35ec2322d97de3110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1f757b6c87e0c5cac88ec0fd060469808696c41b66da18aa1bb0147ac097e2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f757b6c87e0c5cac88ec0fd060469808696c41b66da18aa1bb0147ac097e2ca->enter($__internal_1f757b6c87e0c5cac88ec0fd060469808696c41b66da18aa1bb0147ac097e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "

    <div class=\"form-body\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group col-md-4\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->getSourceContext()); })()), "code", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 13, $this->getSourceContext()); })()), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->getSourceContext()); })()), "libelle", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 19, $this->getSourceContext()); })()), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->getSourceContext()); })()), "tva", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->getSourceContext()); })()), "tva", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"btn-group\"> 
            <input class=\"btn btn-primary filter-submit\" type=\"submit\" value=\"Valider\" />
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_end');
        echo "
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
            <input class=\"btn btn-danger filter-submit \" type=\"submit\" value=\"Supprimer\" />
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->getSourceContext()); })()), 'form_end');
        echo "
            <a class=\"btn btn-success dropdown-toggle \" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
            
        </div>

        <!--div class=\"table-container\">
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
        </div-->

    </div>

";
        
        $__internal_1f757b6c87e0c5cac88ec0fd060469808696c41b66da18aa1bb0147ac097e2ca->leave($__internal_1f757b6c87e0c5cac88ec0fd060469808696c41b66da18aa1bb0147ac097e2ca_prof);

        
        $__internal_249655692aafde7adbd574bcb1c3cc1647e0318f9a987dd35ec2322d97de3110->leave($__internal_249655692aafde7adbd574bcb1c3cc1647e0318f9a987dd35ec2322d97de3110_prof);

    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_22063658a1fdcedccfd91eeeb5fafe08a5dae8bdb918b4757ec6af74a9d19bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22063658a1fdcedccfd91eeeb5fafe08a5dae8bdb918b4757ec6af74a9d19bb2->enter($__internal_22063658a1fdcedccfd91eeeb5fafe08a5dae8bdb918b4757ec6af74a9d19bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ae3b5c48b39d3bc608119ee1fd26d2cf12d6d4bf69841d1da22c1b79cc967b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3b5c48b39d3bc608119ee1fd26d2cf12d6d4bf69841d1da22c1b79cc967b05->enter($__internal_ae3b5c48b39d3bc608119ee1fd26d2cf12d6d4bf69841d1da22c1b79cc967b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 64
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/datatable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articleFamille_data", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new Twig_Error_Runtime('Variable "famille" does not exist.', 97, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
        
        $__internal_ae3b5c48b39d3bc608119ee1fd26d2cf12d6d4bf69841d1da22c1b79cc967b05->leave($__internal_ae3b5c48b39d3bc608119ee1fd26d2cf12d6d4bf69841d1da22c1b79cc967b05_prof);

        
        $__internal_22063658a1fdcedccfd91eeeb5fafe08a5dae8bdb918b4757ec6af74a9d19bb2->leave($__internal_22063658a1fdcedccfd91eeeb5fafe08a5dae8bdb918b4757ec6af74a9d19bb2_prof);

    }

    public function getTemplateName()
    {
        return "Famille/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 97,  185 => 66,  181 => 65,  176 => 64,  167 => 63,  130 => 35,  126 => 34,  121 => 32,  117 => 31,  108 => 25,  103 => 23,  96 => 19,  91 => 17,  84 => 13,  79 => 11,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Famille/layout.html.twig' %}

{% block content_entete %}Edition {% endblock %}

{% block content %}


    <div class=\"form-body\">
        {{ form_start(edit_form) }}
        <div class=\"form-group col-md-4\">
            {{ form_label(edit_form.code) }}
            <div class=\"input-medium\">
                {{ form_widget(edit_form.code, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            {{ form_label(edit_form.libelle) }}
            <div class=\"input-medium\">
                {{ form_widget(edit_form.libelle, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            {{ form_label(edit_form.tva) }}
            <div class=\"input-medium\">
                {{ form_widget(edit_form.tva, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>

        <div class=\"btn-group\"> 
            <input class=\"btn btn-primary filter-submit\" type=\"submit\" value=\"Valider\" />
            {{ form_end(edit_form) }}
            {{ form_start(delete_form) }}
            <input class=\"btn btn-danger filter-submit \" type=\"submit\" value=\"Supprimer\" />
            {{ form_end(delete_form) }}
            <a class=\"btn btn-success dropdown-toggle \" href=\"{{ path('famille_index') }}\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
            
        </div>

        <!--div class=\"table-container\">
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
        </div-->

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
                            \"url\": \"{{ path('articleFamille_data', { 'id': famille.id }) }}\"
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
{% endblock %}", "Famille/edit.html.twig", "/var/www/html/ecaisse/app/Resources/views/Famille/edit.html.twig");
    }
}
