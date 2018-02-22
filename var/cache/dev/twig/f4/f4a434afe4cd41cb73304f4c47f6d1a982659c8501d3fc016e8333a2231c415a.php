<?php

/* article/edit.html.twig */
class __TwigTemplate_6ad24cf23358cdd504a4a0cf6221ff80b55ea038e322935bc45fdaa934243ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("article/layout.html.twig", "article/edit.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "article/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7983cfe36300fb0c932c0f096e0e6f1466aca447eb994d51d70f47f0f8e7664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7983cfe36300fb0c932c0f096e0e6f1466aca447eb994d51d70f47f0f8e7664->enter($__internal_d7983cfe36300fb0c932c0f096e0e6f1466aca447eb994d51d70f47f0f8e7664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_fe53419f0ae849b83356d42e375cca9950af6c262ee8ba89910f0d8dc8790fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe53419f0ae849b83356d42e375cca9950af6c262ee8ba89910f0d8dc8790fe9->enter($__internal_fe53419f0ae849b83356d42e375cca9950af6c262ee8ba89910f0d8dc8790fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7983cfe36300fb0c932c0f096e0e6f1466aca447eb994d51d70f47f0f8e7664->leave($__internal_d7983cfe36300fb0c932c0f096e0e6f1466aca447eb994d51d70f47f0f8e7664_prof);

        
        $__internal_fe53419f0ae849b83356d42e375cca9950af6c262ee8ba89910f0d8dc8790fe9->leave($__internal_fe53419f0ae849b83356d42e375cca9950af6c262ee8ba89910f0d8dc8790fe9_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_9c21b5f0acf288f813e72b11787d6558b70b8a499b481acabeb24897ed7b8f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c21b5f0acf288f813e72b11787d6558b70b8a499b481acabeb24897ed7b8f03->enter($__internal_9c21b5f0acf288f813e72b11787d6558b70b8a499b481acabeb24897ed7b8f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_9a6c22a1c168012275cf037ac6b90c91274025b041a6d2e92c4d9d9d20001b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6c22a1c168012275cf037ac6b90c91274025b041a6d2e92c4d9d9d20001b11->enter($__internal_9a6c22a1c168012275cf037ac6b90c91274025b041a6d2e92c4d9d9d20001b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Edition ";
        
        $__internal_9a6c22a1c168012275cf037ac6b90c91274025b041a6d2e92c4d9d9d20001b11->leave($__internal_9a6c22a1c168012275cf037ac6b90c91274025b041a6d2e92c4d9d9d20001b11_prof);

        
        $__internal_9c21b5f0acf288f813e72b11787d6558b70b8a499b481acabeb24897ed7b8f03->leave($__internal_9c21b5f0acf288f813e72b11787d6558b70b8a499b481acabeb24897ed7b8f03_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b61db1c73260a3ca982c5f2c753257f27e6f76664a57a541ac56c1837b4ffc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b61db1c73260a3ca982c5f2c753257f27e6f76664a57a541ac56c1837b4ffc4->enter($__internal_7b61db1c73260a3ca982c5f2c753257f27e6f76664a57a541ac56c1837b4ffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eb46d75ece53ca3611d10460abf4eea15ac669f4b8618bafbbee14cf5364de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb46d75ece53ca3611d10460abf4eea15ac669f4b8618bafbbee14cf5364de9b->enter($__internal_eb46d75ece53ca3611d10460abf4eea15ac669f4b8618bafbbee14cf5364de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "

    <div class=\"form-body\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-body\">
            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 12, $this->getSourceContext()); })()), "famille", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 13, $this->getSourceContext()); })()), "famille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 16, $this->getSourceContext()); })()), "code", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->getSourceContext()); })()), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 20, $this->getSourceContext()); })()), "libelle", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 21, $this->getSourceContext()); })()), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->getSourceContext()); })()), "prixUnitaire", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->getSourceContext()); })()), "prixUnitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 28, $this->getSourceContext()); })()), "tva", array()), 'label');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->getSourceContext()); })()), "tva", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"btn-group\">
            <input class=\"btn btn-primary filter-submit \" type=\"submit\" value=\"Edit\" />
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end');
        echo "
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 36, $this->getSourceContext()); })()), 'form_start');
        echo "
            <input class=\"btn btn-danger filter-cancel filter-submit \" type=\"submit\" value=\"Supprimer\" />
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 38, $this->getSourceContext()); })()), 'form_end');
        echo "

            <a class=\"btn btn-success dropdown-toggle\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
        </div>

    </div>

";
        
        $__internal_eb46d75ece53ca3611d10460abf4eea15ac669f4b8618bafbbee14cf5364de9b->leave($__internal_eb46d75ece53ca3611d10460abf4eea15ac669f4b8618bafbbee14cf5364de9b_prof);

        
        $__internal_7b61db1c73260a3ca982c5f2c753257f27e6f76664a57a541ac56c1837b4ffc4->leave($__internal_7b61db1c73260a3ca982c5f2c753257f27e6f76664a57a541ac56c1837b4ffc4_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  141 => 38,  136 => 36,  132 => 35,  123 => 29,  119 => 28,  113 => 25,  109 => 24,  103 => 21,  99 => 20,  93 => 17,  89 => 16,  83 => 13,  79 => 12,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'article/layout.html.twig' %}

{% block content_entete %}Edition {% endblock %}

{% block content %}


    <div class=\"form-body\">
        {{ form_start(edit_form) }}
        <div class=\"form-body\">
            <div class=\"form-group\">
                {{ form_label(edit_form.famille) }}
                {{ form_widget(edit_form.famille, {'attr': {'class': 'form-control'} }) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(edit_form.code) }}
                {{ form_widget(edit_form.code, {'attr': {'class': 'form-control'} }) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(edit_form.libelle) }}
                {{ form_widget(edit_form.libelle, {'attr': {'class': 'form-control'} }) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(edit_form.prixUnitaire) }}
                {{ form_widget(edit_form.prixUnitaire, {'attr': {'class': 'form-control'} }) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(edit_form.tva) }}
                {{ form_widget(edit_form.tva, {'attr': {'class': 'form-control'} }) }}
            </div>
        </div>

        <div class=\"btn-group\">
            <input class=\"btn btn-primary filter-submit \" type=\"submit\" value=\"Edit\" />
            {{ form_end(edit_form) }}
            {{ form_start(delete_form) }}
            <input class=\"btn btn-danger filter-cancel filter-submit \" type=\"submit\" value=\"Supprimer\" />
            {{ form_end(delete_form) }}

            <a class=\"btn btn-success dropdown-toggle\" href=\"{{ path('article_index') }}\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
        </div>

    </div>

{% endblock %}
", "article/edit.html.twig", "/var/www/html/ecaisse/app/Resources/views/article/edit.html.twig");
    }
}
