<?php

/* article/new.html.twig */
class __TwigTemplate_11f85110452ac490a8a267cdb26e0de89ec0de531e3e401ef6aa8d7ba21bb028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("article/layout.html.twig", "article/new.html.twig", 1);
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
        $__internal_8087253febbeb484af1ae3e0e317a35eafd33b48ea35ae9d2e873f0dbd39548d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8087253febbeb484af1ae3e0e317a35eafd33b48ea35ae9d2e873f0dbd39548d->enter($__internal_8087253febbeb484af1ae3e0e317a35eafd33b48ea35ae9d2e873f0dbd39548d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_8a75a458b2e5ac19e4b56bbc4241eb56987c65086f4855928bee64c922bc7931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a75a458b2e5ac19e4b56bbc4241eb56987c65086f4855928bee64c922bc7931->enter($__internal_8a75a458b2e5ac19e4b56bbc4241eb56987c65086f4855928bee64c922bc7931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8087253febbeb484af1ae3e0e317a35eafd33b48ea35ae9d2e873f0dbd39548d->leave($__internal_8087253febbeb484af1ae3e0e317a35eafd33b48ea35ae9d2e873f0dbd39548d_prof);

        
        $__internal_8a75a458b2e5ac19e4b56bbc4241eb56987c65086f4855928bee64c922bc7931->leave($__internal_8a75a458b2e5ac19e4b56bbc4241eb56987c65086f4855928bee64c922bc7931_prof);

    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_c08faca4a15c8825ea94c0a4e6e4dc93c79999deb544c3d4659905b205efaeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08faca4a15c8825ea94c0a4e6e4dc93c79999deb544c3d4659905b205efaeee->enter($__internal_c08faca4a15c8825ea94c0a4e6e4dc93c79999deb544c3d4659905b205efaeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_4bb3db8e38d6e308a127e9a22efe66032dc7fb9474bb4612132c106b3c44b7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb3db8e38d6e308a127e9a22efe66032dc7fb9474bb4612132c106b3c44b7dd->enter($__internal_4bb3db8e38d6e308a127e9a22efe66032dc7fb9474bb4612132c106b3c44b7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Création d'un article";
        
        $__internal_4bb3db8e38d6e308a127e9a22efe66032dc7fb9474bb4612132c106b3c44b7dd->leave($__internal_4bb3db8e38d6e308a127e9a22efe66032dc7fb9474bb4612132c106b3c44b7dd_prof);

        
        $__internal_c08faca4a15c8825ea94c0a4e6e4dc93c79999deb544c3d4659905b205efaeee->leave($__internal_c08faca4a15c8825ea94c0a4e6e4dc93c79999deb544c3d4659905b205efaeee_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc018f80d8fcb93d256f2e8f337a5647b803f7ff02924b025eddab752b7a945c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc018f80d8fcb93d256f2e8f337a5647b803f7ff02924b025eddab752b7a945c->enter($__internal_bc018f80d8fcb93d256f2e8f337a5647b803f7ff02924b025eddab752b7a945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f663cf1b5a2918c8a183cb7c8f512cc1d493ece665fd9ec106bdeb0b8c28d030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f663cf1b5a2918c8a183cb7c8f512cc1d493ece665fd9ec106bdeb0b8c28d030->enter($__internal_f663cf1b5a2918c8a183cb7c8f512cc1d493ece665fd9ec106bdeb0b8c28d030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    <div class=\"form-body\">
        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "famille", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "famille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "code", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "libelle", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "prixUnitaire", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "prixUnitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "tva", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "tva", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "
    <div class=\"btn-group\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

        <div class=\"btn-group\">
            <a class=\"btn btn-success dropdown-toggle\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
        </div>
    </div>

    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_f663cf1b5a2918c8a183cb7c8f512cc1d493ece665fd9ec106bdeb0b8c28d030->leave($__internal_f663cf1b5a2918c8a183cb7c8f512cc1d493ece665fd9ec106bdeb0b8c28d030_prof);

        
        $__internal_bc018f80d8fcb93d256f2e8f337a5647b803f7ff02924b025eddab752b7a945c->leave($__internal_bc018f80d8fcb93d256f2e8f337a5647b803f7ff02924b025eddab752b7a945c_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  136 => 36,  128 => 31,  121 => 27,  117 => 26,  111 => 23,  107 => 22,  101 => 19,  97 => 18,  91 => 15,  87 => 14,  81 => 11,  77 => 10,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'article/layout.html.twig' %}

{% block content_entete %}Création d'un article{% endblock %}

{% block content %}

    {{ form_start(form) }}
    <div class=\"form-body\">
        <div class=\"form-group\">
            {{ form_label(form.famille) }}
            {{ form_widget(form.famille, {'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.code) }}
            {{ form_widget(form.code, {'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.libelle) }}
            {{ form_widget(form.libelle, {'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.prixUnitaire) }}
            {{ form_widget(form.prixUnitaire, {'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.tva) }}
            {{ form_widget(form.tva, {'attr': {'class': 'form-control'} }) }}
        </div>
    </div>

    {{ form_widget(form) }}
    <div class=\"btn-group\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

        <div class=\"btn-group\">
            <a class=\"btn btn-success dropdown-toggle\" href=\"{{ path('article_index') }}\">
                <i class=\"fa fa-share\"></i>
                <span class=\"hidden-480\">Retour </span>
            </a>
        </div>
    </div>

    {{ form_end(form) }}

{% endblock %}
", "article/new.html.twig", "/var/www/html/ecaisse/app/Resources/views/article/new.html.twig");
    }
}
