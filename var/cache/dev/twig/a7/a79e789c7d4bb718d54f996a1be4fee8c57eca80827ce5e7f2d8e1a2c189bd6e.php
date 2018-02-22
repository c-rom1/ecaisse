<?php

/* Default/layout.html.twig */
class __TwigTemplate_fc22b837db6a171cef6042a1eb6b2606809aaa818d09c2626045017652a2fe96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Default/layout.html.twig", 1);
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
        $__internal_9efc11ee72dc17035ce40a3cdb9f13dd1624d2ce76a453bb2af5c3e027fe95ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efc11ee72dc17035ce40a3cdb9f13dd1624d2ce76a453bb2af5c3e027fe95ac->enter($__internal_9efc11ee72dc17035ce40a3cdb9f13dd1624d2ce76a453bb2af5c3e027fe95ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/layout.html.twig"));

        $__internal_2ad56119a0b08405de2607a4efe8c1d500811a592b9aac96ac7f345364d7b419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad56119a0b08405de2607a4efe8c1d500811a592b9aac96ac7f345364d7b419->enter($__internal_2ad56119a0b08405de2607a4efe8c1d500811a592b9aac96ac7f345364d7b419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efc11ee72dc17035ce40a3cdb9f13dd1624d2ce76a453bb2af5c3e027fe95ac->leave($__internal_9efc11ee72dc17035ce40a3cdb9f13dd1624d2ce76a453bb2af5c3e027fe95ac_prof);

        
        $__internal_2ad56119a0b08405de2607a4efe8c1d500811a592b9aac96ac7f345364d7b419->leave($__internal_2ad56119a0b08405de2607a4efe8c1d500811a592b9aac96ac7f345364d7b419_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5395f3513a2f60698fef4be9609193d6799621286df653d0e5e5c0095a7f5052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5395f3513a2f60698fef4be9609193d6799621286df653d0e5e5c0095a7f5052->enter($__internal_5395f3513a2f60698fef4be9609193d6799621286df653d0e5e5c0095a7f5052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_acb2c44b3c51afa356e78d3ee567477b428b8315affc459139df485989ade0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb2c44b3c51afa356e78d3ee567477b428b8315affc459139df485989ade0a5->enter($__internal_acb2c44b3c51afa356e78d3ee567477b428b8315affc459139df485989ade0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\" class=\"arrow \"></span>
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
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"></span>
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
        
        $__internal_acb2c44b3c51afa356e78d3ee567477b428b8315affc459139df485989ade0a5->leave($__internal_acb2c44b3c51afa356e78d3ee567477b428b8315affc459139df485989ade0a5_prof);

        
        $__internal_5395f3513a2f60698fef4be9609193d6799621286df653d0e5e5c0095a7f5052->leave($__internal_5395f3513a2f60698fef4be9609193d6799621286df653d0e5e5c0095a7f5052_prof);

    }

    public function getTemplateName()
    {
        return "Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  79 => 25,  69 => 18,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block menu %}
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\" class=\"arrow \"></span>
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
    <li>
        <a href=\"{{ path('facture_index') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"{{ path('tva_index') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
{% endblock %}", "Default/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/Default/layout.html.twig");
    }
}
