<?php

/* article/layout.html.twig */
class __TwigTemplate_621ec27eabe6bcf6a2f6d24ec05aa3f4e2e3146ff929b95b838e3a8b2c355dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/layout.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'page_entete_normal' => array($this, 'block_page_entete_normal'),
            'page_entete_petit' => array($this, 'block_page_entete_petit'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_698f6f5d00ebc9d54211482f9b1de35ef671fb0e80174f2f469ec297f276d532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698f6f5d00ebc9d54211482f9b1de35ef671fb0e80174f2f469ec297f276d532->enter($__internal_698f6f5d00ebc9d54211482f9b1de35ef671fb0e80174f2f469ec297f276d532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/layout.html.twig"));

        $__internal_008311f282b4ef86feecbf2b7e0cba964ce78278d9633c3f9071a0beeefeded4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008311f282b4ef86feecbf2b7e0cba964ce78278d9633c3f9071a0beeefeded4->enter($__internal_008311f282b4ef86feecbf2b7e0cba964ce78278d9633c3f9071a0beeefeded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698f6f5d00ebc9d54211482f9b1de35ef671fb0e80174f2f469ec297f276d532->leave($__internal_698f6f5d00ebc9d54211482f9b1de35ef671fb0e80174f2f469ec297f276d532_prof);

        
        $__internal_008311f282b4ef86feecbf2b7e0cba964ce78278d9633c3f9071a0beeefeded4->leave($__internal_008311f282b4ef86feecbf2b7e0cba964ce78278d9633c3f9071a0beeefeded4_prof);

    }

    // line 2
    public function block_content_entete($context, array $blocks = array())
    {
        $__internal_cfed968f49175c88f52470c037a1c44d7f2fbe818574fb4c1869fb508043476b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfed968f49175c88f52470c037a1c44d7f2fbe818574fb4c1869fb508043476b->enter($__internal_cfed968f49175c88f52470c037a1c44d7f2fbe818574fb4c1869fb508043476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        $__internal_6071304f3c984d9e634b81532805210aabeef1705c8e2389d352fedb52b09910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6071304f3c984d9e634b81532805210aabeef1705c8e2389d352fedb52b09910->enter($__internal_6071304f3c984d9e634b81532805210aabeef1705c8e2389d352fedb52b09910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_entete"));

        echo "Administration des Articles";
        
        $__internal_6071304f3c984d9e634b81532805210aabeef1705c8e2389d352fedb52b09910->leave($__internal_6071304f3c984d9e634b81532805210aabeef1705c8e2389d352fedb52b09910_prof);

        
        $__internal_cfed968f49175c88f52470c037a1c44d7f2fbe818574fb4c1869fb508043476b->leave($__internal_cfed968f49175c88f52470c037a1c44d7f2fbe818574fb4c1869fb508043476b_prof);

    }

    // line 3
    public function block_page_entete_normal($context, array $blocks = array())
    {
        $__internal_a54f5025e8bfda119fa5b619b4099f46c1c59990829f864ccde1f62281d32d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54f5025e8bfda119fa5b619b4099f46c1c59990829f864ccde1f62281d32d3d->enter($__internal_a54f5025e8bfda119fa5b619b4099f46c1c59990829f864ccde1f62281d32d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        $__internal_49eb4226ed60e5b77d5c61ad36fa371b7751ba8c2ac9c09b3468796c0186b422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49eb4226ed60e5b77d5c61ad36fa371b7751ba8c2ac9c09b3468796c0186b422->enter($__internal_49eb4226ed60e5b77d5c61ad36fa371b7751ba8c2ac9c09b3468796c0186b422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        echo "Administration des articles";
        
        $__internal_49eb4226ed60e5b77d5c61ad36fa371b7751ba8c2ac9c09b3468796c0186b422->leave($__internal_49eb4226ed60e5b77d5c61ad36fa371b7751ba8c2ac9c09b3468796c0186b422_prof);

        
        $__internal_a54f5025e8bfda119fa5b619b4099f46c1c59990829f864ccde1f62281d32d3d->leave($__internal_a54f5025e8bfda119fa5b619b4099f46c1c59990829f864ccde1f62281d32d3d_prof);

    }

    // line 4
    public function block_page_entete_petit($context, array $blocks = array())
    {
        $__internal_1ae8e9edf0717c91d0a2b36b75c5eed5f4eb5ffc9976786ed1dcb804de8f2953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae8e9edf0717c91d0a2b36b75c5eed5f4eb5ffc9976786ed1dcb804de8f2953->enter($__internal_1ae8e9edf0717c91d0a2b36b75c5eed5f4eb5ffc9976786ed1dcb804de8f2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        $__internal_7aa68726c8f954b4f335114fb74339778b6c1197d4398956ae21c79369695fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa68726c8f954b4f335114fb74339778b6c1197d4398956ae21c79369695fa1->enter($__internal_7aa68726c8f954b4f335114fb74339778b6c1197d4398956ae21c79369695fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        
        $__internal_7aa68726c8f954b4f335114fb74339778b6c1197d4398956ae21c79369695fa1->leave($__internal_7aa68726c8f954b4f335114fb74339778b6c1197d4398956ae21c79369695fa1_prof);

        
        $__internal_1ae8e9edf0717c91d0a2b36b75c5eed5f4eb5ffc9976786ed1dcb804de8f2953->leave($__internal_1ae8e9edf0717c91d0a2b36b75c5eed5f4eb5ffc9976786ed1dcb804de8f2953_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcbf36a1a48a5516b09f85fb59a1e8f7c9995ed9906bfe53d644489399ffc0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbf36a1a48a5516b09f85fb59a1e8f7c9995ed9906bfe53d644489399ffc0e4->enter($__internal_bcbf36a1a48a5516b09f85fb59a1e8f7c9995ed9906bfe53d644489399ffc0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c49f32ea0d7904c2ff22d1dc8e4b0779db6ee74d3822a025e208c68fda5a4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c49f32ea0d7904c2ff22d1dc8e4b0779db6ee74d3822a025e208c68fda5a4f4->enter($__internal_1c49f32ea0d7904c2ff22d1dc8e4b0779db6ee74d3822a025e208c68fda5a4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    <li >
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
         <span class=\"title\">Articles</span>
          <span class=\"selected\"  class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
";
        
        $__internal_1c49f32ea0d7904c2ff22d1dc8e4b0779db6ee74d3822a025e208c68fda5a4f4->leave($__internal_1c49f32ea0d7904c2ff22d1dc8e4b0779db6ee74d3822a025e208c68fda5a4f4_prof);

        
        $__internal_bcbf36a1a48a5516b09f85fb59a1e8f7c9995ed9906bfe53d644489399ffc0e4->leave($__internal_bcbf36a1a48a5516b09f85fb59a1e8f7c9995ed9906bfe53d644489399ffc0e4_prof);

    }

    public function getTemplateName()
    {
        return "article/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  135 => 29,  118 => 15,  108 => 8,  105 => 7,  96 => 6,  79 => 4,  61 => 3,  43 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content_entete %}Administration des Articles{% endblock %}
 {% block page_entete_normal %}Administration des articles{% endblock %}
{% block page_entete_petit %}{% endblock %}

{% block menu %}
    <li >
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
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
         <span class=\"title\">Articles</span>
          <span class=\"selected\"  class=\"arrow \"></span>
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
{% endblock %}", "article/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/article/layout.html.twig");
    }
}
