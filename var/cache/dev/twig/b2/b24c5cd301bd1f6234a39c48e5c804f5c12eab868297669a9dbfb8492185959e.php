<?php

/* Famille/new.html.twig */
class __TwigTemplate_f83e7a87682c362ec4e9480e093d62ddf9a8c19133809d48ba21f0ecdc28d9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Famille/layout.html.twig", "Famille/new.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Famille/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d9073b6034c9027aa40e0d9c0672ba3759fb5c381f5cec7c9d5132e0f63c1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9073b6034c9027aa40e0d9c0672ba3759fb5c381f5cec7c9d5132e0f63c1ce->enter($__internal_4d9073b6034c9027aa40e0d9c0672ba3759fb5c381f5cec7c9d5132e0f63c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/new.html.twig"));

        $__internal_4c789937267b5cee69af47866f92860f3c1d165423e94240accaa2212de213e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c789937267b5cee69af47866f92860f3c1d165423e94240accaa2212de213e8->enter($__internal_4c789937267b5cee69af47866f92860f3c1d165423e94240accaa2212de213e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9073b6034c9027aa40e0d9c0672ba3759fb5c381f5cec7c9d5132e0f63c1ce->leave($__internal_4d9073b6034c9027aa40e0d9c0672ba3759fb5c381f5cec7c9d5132e0f63c1ce_prof);

        
        $__internal_4c789937267b5cee69af47866f92860f3c1d165423e94240accaa2212de213e8->leave($__internal_4c789937267b5cee69af47866f92860f3c1d165423e94240accaa2212de213e8_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_b762dd07518a508ff957af17ad58b9c3a595c9e3b89f248ff53cde359a6cb149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b762dd07518a508ff957af17ad58b9c3a595c9e3b89f248ff53cde359a6cb149->enter($__internal_b762dd07518a508ff957af17ad58b9c3a595c9e3b89f248ff53cde359a6cb149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_3ada62e0bfdf831d42f0980454d074da1d2a946642da71d3f4270d21b7a3dae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ada62e0bfdf831d42f0980454d074da1d2a946642da71d3f4270d21b7a3dae4->enter($__internal_3ada62e0bfdf831d42f0980454d074da1d2a946642da71d3f4270d21b7a3dae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Création d'une Famille d'article";
        
        $__internal_3ada62e0bfdf831d42f0980454d074da1d2a946642da71d3f4270d21b7a3dae4->leave($__internal_3ada62e0bfdf831d42f0980454d074da1d2a946642da71d3f4270d21b7a3dae4_prof);

        
        $__internal_b762dd07518a508ff957af17ad58b9c3a595c9e3b89f248ff53cde359a6cb149->leave($__internal_b762dd07518a508ff957af17ad58b9c3a595c9e3b89f248ff53cde359a6cb149_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d617a905d0dfe0108cde549ccc517fe8460422c4543032054ce21c5e492cf3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d617a905d0dfe0108cde549ccc517fe8460422c4543032054ce21c5e492cf3a5->enter($__internal_d617a905d0dfe0108cde549ccc517fe8460422c4543032054ce21c5e492cf3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6e82a262a69b9a8893808cb04d972e28c2dc936f46d441a5e5dd7d08320b7db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e82a262a69b9a8893808cb04d972e28c2dc936f46d441a5e5dd7d08320b7db2->enter($__internal_6e82a262a69b9a8893808cb04d972e28c2dc936f46d441a5e5dd7d08320b7db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    <div class=\"form-body\">

        <div class=\"form-group col-md-4\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "code", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "libelle", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "tva", array()), 'label');
        echo "
            <div class=\"input-medium\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "tva", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>

        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
        echo "
        <div class=\"btn-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

            <div class=\"btn-group\">
                <a class=\"btn btn-success dropdown-toggle\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
                    <i class=\"fa fa-share\"></i>
                    <span class=\"hidden-480\">Retour </span>
                </a>
            </div>
        </div>

        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_6e82a262a69b9a8893808cb04d972e28c2dc936f46d441a5e5dd7d08320b7db2->leave($__internal_6e82a262a69b9a8893808cb04d972e28c2dc936f46d441a5e5dd7d08320b7db2_prof);

        
        $__internal_d617a905d0dfe0108cde549ccc517fe8460422c4543032054ce21c5e492cf3a5->leave($__internal_d617a905d0dfe0108cde549ccc517fe8460422c4543032054ce21c5e492cf3a5_prof);

    }

    public function getTemplateName()
    {
        return "Famille/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  123 => 35,  115 => 30,  107 => 25,  102 => 23,  95 => 19,  90 => 17,  83 => 13,  78 => 11,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Famille/layout.html.twig' %}

{% block content_entete %}Création d'une Famille d'article{% endblock %}

{% block content %}

    {{ form_start(form) }}
    <div class=\"form-body\">

        <div class=\"form-group col-md-4\">
            {{ form_label(form.code) }}
            <div class=\"input-medium\">
                {{ form_widget(form.code, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            {{ form_label(form.libelle) }}
            <div class=\"input-medium\">
                {{ form_widget(form.libelle, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"form-group col-md-4\">
            {{ form_label(form.tva) }}
            <div class=\"input-medium\">
                {{ form_widget(form.tva, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
    </div>

        {{ form_widget(form) }}
        <div class=\"btn-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

            <div class=\"btn-group\">
                <a class=\"btn btn-success dropdown-toggle\" href=\"{{ path('famille_index') }}\">
                    <i class=\"fa fa-share\"></i>
                    <span class=\"hidden-480\">Retour </span>
                </a>
            </div>
        </div>

        {{ form_end(form) }}

{% endblock %}
", "Famille/new.html.twig", "/var/www/html/ecaisse/app/Resources/views/Famille/new.html.twig");
    }
}
