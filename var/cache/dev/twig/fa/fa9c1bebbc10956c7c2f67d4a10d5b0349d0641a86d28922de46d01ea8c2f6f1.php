<?php

/* facture/layout.html.twig */
class __TwigTemplate_ad134b79e187f609ec6f2d4fa7a83e88de31b3bd3e91b4dec4fb2f2c5cdf1c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "facture/layout.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39b98d5d886053364ae4f3a51582b70d3883835b09bcaadf0b1142e9da2e72c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b98d5d886053364ae4f3a51582b70d3883835b09bcaadf0b1142e9da2e72c4->enter($__internal_39b98d5d886053364ae4f3a51582b70d3883835b09bcaadf0b1142e9da2e72c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/layout.html.twig"));

        $__internal_8ecb747f2702d3f0bddc1b5175700b63b649098df8bd65c6fafdf5e83f51d38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecb747f2702d3f0bddc1b5175700b63b649098df8bd65c6fafdf5e83f51d38d->enter($__internal_8ecb747f2702d3f0bddc1b5175700b63b649098df8bd65c6fafdf5e83f51d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b98d5d886053364ae4f3a51582b70d3883835b09bcaadf0b1142e9da2e72c4->leave($__internal_39b98d5d886053364ae4f3a51582b70d3883835b09bcaadf0b1142e9da2e72c4_prof);

        
        $__internal_8ecb747f2702d3f0bddc1b5175700b63b649098df8bd65c6fafdf5e83f51d38d->leave($__internal_8ecb747f2702d3f0bddc1b5175700b63b649098df8bd65c6fafdf5e83f51d38d_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef97f8f6d794a6eaa151deb5876781e93fc9fa51bfd9b33369594463cf2de665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef97f8f6d794a6eaa151deb5876781e93fc9fa51bfd9b33369594463cf2de665->enter($__internal_ef97f8f6d794a6eaa151deb5876781e93fc9fa51bfd9b33369594463cf2de665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0c19b59e237c9fed599492457b784c6c5051aab95fdabe25946fb55c95ac774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c19b59e237c9fed599492457b784c6c5051aab95fdabe25946fb55c95ac774->enter($__internal_e0c19b59e237c9fed599492457b784c6c5051aab95fdabe25946fb55c95ac774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Articles</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"  class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
";
        
        $__internal_e0c19b59e237c9fed599492457b784c6c5051aab95fdabe25946fb55c95ac774->leave($__internal_e0c19b59e237c9fed599492457b784c6c5051aab95fdabe25946fb55c95ac774_prof);

        
        $__internal_ef97f8f6d794a6eaa151deb5876781e93fc9fa51bfd9b33369594463cf2de665->leave($__internal_ef97f8f6d794a6eaa151deb5876781e93fc9fa51bfd9b33369594463cf2de665_prof);

    }

    public function getTemplateName()
    {
        return "facture/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  72 => 18,  62 => 11,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block menu %}
    <li>
        <a href=\"{{ path('homepage') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"{{ path('famille_index') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"{{ path('article_index') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Articles</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"  class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"{{ path('tva_index') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
{% endblock %}", "facture/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/facture/layout.html.twig");
    }
}
