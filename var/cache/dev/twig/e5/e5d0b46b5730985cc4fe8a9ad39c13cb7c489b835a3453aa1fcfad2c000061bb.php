<?php

/* tva/new.html.twig */
class __TwigTemplate_e2a28a1ccbc7dee71ba1ca2d4fcc610ee3a3546a816a982d2ccbece7b088824a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("tva/layout.html.twig", "tva/new.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
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
        $__internal_ecc7e5d9b9bbe0a82b236582d26d203ae7d9aceff79d817f376da69a94a8eb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc7e5d9b9bbe0a82b236582d26d203ae7d9aceff79d817f376da69a94a8eb60->enter($__internal_ecc7e5d9b9bbe0a82b236582d26d203ae7d9aceff79d817f376da69a94a8eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/new.html.twig"));

        $__internal_87a43f09b77c0730a533c76e6d1a7383c0443757a17696efa1d2a99d61eacded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a43f09b77c0730a533c76e6d1a7383c0443757a17696efa1d2a99d61eacded->enter($__internal_87a43f09b77c0730a533c76e6d1a7383c0443757a17696efa1d2a99d61eacded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc7e5d9b9bbe0a82b236582d26d203ae7d9aceff79d817f376da69a94a8eb60->leave($__internal_ecc7e5d9b9bbe0a82b236582d26d203ae7d9aceff79d817f376da69a94a8eb60_prof);

        
        $__internal_87a43f09b77c0730a533c76e6d1a7383c0443757a17696efa1d2a99d61eacded->leave($__internal_87a43f09b77c0730a533c76e6d1a7383c0443757a17696efa1d2a99d61eacded_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_78937c969a8214d8798123109c53530f662df6e52eedea29d8436565ec604d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78937c969a8214d8798123109c53530f662df6e52eedea29d8436565ec604d1a->enter($__internal_78937c969a8214d8798123109c53530f662df6e52eedea29d8436565ec604d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_154686e5edeb8df1cc873aec04502ecb64c7fe8222b3193fb98972759828a292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154686e5edeb8df1cc873aec04502ecb64c7fe8222b3193fb98972759828a292->enter($__internal_154686e5edeb8df1cc873aec04502ecb64c7fe8222b3193fb98972759828a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Création d'une TVA";
        
        $__internal_154686e5edeb8df1cc873aec04502ecb64c7fe8222b3193fb98972759828a292->leave($__internal_154686e5edeb8df1cc873aec04502ecb64c7fe8222b3193fb98972759828a292_prof);

        
        $__internal_78937c969a8214d8798123109c53530f662df6e52eedea29d8436565ec604d1a->leave($__internal_78937c969a8214d8798123109c53530f662df6e52eedea29d8436565ec604d1a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab7baf7689f217d7dff53b51b09f2e4e113e6ff72f88d5a8c194c715b41009eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7baf7689f217d7dff53b51b09f2e4e113e6ff72f88d5a8c194c715b41009eb->enter($__internal_ab7baf7689f217d7dff53b51b09f2e4e113e6ff72f88d5a8c194c715b41009eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7fddcbd51750d820762b779ff0dd6865c5ad8bcbe3ee13b2d845297331d28669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fddcbd51750d820762b779ff0dd6865c5ad8bcbe3ee13b2d845297331d28669->enter($__internal_7fddcbd51750d820762b779ff0dd6865c5ad8bcbe3ee13b2d845297331d28669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    
    <div class=\"form-body\">

        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "type", array()), 'label');
        echo "
            <div class=\"input-group input-medium\" >
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "taux", array()), 'label');
        echo "
            <div class=\"input-group input-medium\" >
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "dateDeb", array()), 'label');
        echo "
            <div class=\"input-group input-medium date date-picker\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "dateDeb", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "")));
        echo "
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "dateFin", array()), 'label');
        echo "
            <div class=\"input-group input-medium date date-picker\" data-date=\"12-02-2012\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "")));
        echo "
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
        
                
                
    </div>
        
     ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'widget');
        echo "
        <div class=\"btn-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

            <div class=\"btn-group\">
                <a class=\"btn btn-success dropdown-toggle\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">
                    <i class=\"fa fa-share\"></i>
                    <span class=\"hidden-480\">Retour </span>
                </a>
            </div>
        </div>

    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_7fddcbd51750d820762b779ff0dd6865c5ad8bcbe3ee13b2d845297331d28669->leave($__internal_7fddcbd51750d820762b779ff0dd6865c5ad8bcbe3ee13b2d845297331d28669_prof);

        
        $__internal_ab7baf7689f217d7dff53b51b09f2e4e113e6ff72f88d5a8c194c715b41009eb->leave($__internal_ab7baf7689f217d7dff53b51b09f2e4e113e6ff72f88d5a8c194c715b41009eb_prof);

    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8f53b5543e6aced97767f50ce5d8c89e77f688902754a181cff320f4ea56f442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f53b5543e6aced97767f50ce5d8c89e77f688902754a181cff320f4ea56f442->enter($__internal_8f53b5543e6aced97767f50ce5d8c89e77f688902754a181cff320f4ea56f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4078b4c7941263b52ee469e31ec382207578a2d44f481062f2c6742c459e443b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4078b4c7941263b52ee469e31ec382207578a2d44f481062f2c6742c459e443b->enter($__internal_4078b4c7941263b52ee469e31ec382207578a2d44f481062f2c6742c459e443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 64
        echo "<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/datatable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scripts/table-ajax.js"), "html", null, true);
        echo "\"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        TableAjax.init();
    });
</script>
";
        
        $__internal_4078b4c7941263b52ee469e31ec382207578a2d44f481062f2c6742c459e443b->leave($__internal_4078b4c7941263b52ee469e31ec382207578a2d44f481062f2c6742c459e443b_prof);

        
        $__internal_8f53b5543e6aced97767f50ce5d8c89e77f688902754a181cff320f4ea56f442->leave($__internal_8f53b5543e6aced97767f50ce5d8c89e77f688902754a181cff320f4ea56f442_prof);

    }

    public function getTemplateName()
    {
        return "tva/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 67,  185 => 66,  181 => 65,  178 => 64,  169 => 63,  157 => 59,  147 => 52,  139 => 47,  125 => 36,  120 => 34,  110 => 27,  105 => 25,  97 => 20,  92 => 18,  85 => 14,  80 => 12,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'tva/layout.html.twig' %}

{% block content_entete %}Création d'une TVA{% endblock %}

{% block content %}

    {{ form_start(form) }}
    
    <div class=\"form-body\">

        <div class=\"form-group\">
            {{ form_label(form.type) }}
            <div class=\"input-group input-medium\" >
                {{ form_widget(form.type, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.taux) }}
            <div class=\"input-group input-medium\" >
                {{ form_widget(form.taux, {'attr': {'class': 'form-control'} }) }}
        
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.dateDeb) }}
            <div class=\"input-group input-medium date date-picker\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                {{ form_widget(form.dateDeb, {'attr': {'class': 'form-control', 'readonly':''} }) }}
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.dateFin) }}
            <div class=\"input-group input-medium date date-picker\" data-date=\"12-02-2012\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                {{ form_widget(form.dateFin, {'attr': {'class': 'form-control', 'readonly':''} }) }}
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
        
                
                
    </div>
        
     {{ form_widget(form) }}
        <div class=\"btn-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

            <div class=\"btn-group\">
                <a class=\"btn btn-success dropdown-toggle\" href=\"{{ path('tva_index') }}\">
                    <i class=\"fa fa-share\"></i>
                    <span class=\"hidden-480\">Retour </span>
                </a>
            </div>
        </div>

    {{ form_end(form) }}
{% endblock %}


{% block javascript %}
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ asset('assets/scripts/app.js') }}\"></script>
<script src=\"{{ asset('assets/scripts/datatable.js') }}\"></script>
<script src=\"{{ asset('assets/scripts/table-ajax.js') }}\"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        TableAjax.init();
    });
</script>
{% endblock %}", "tva/new.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/new.html.twig");
    }
}
