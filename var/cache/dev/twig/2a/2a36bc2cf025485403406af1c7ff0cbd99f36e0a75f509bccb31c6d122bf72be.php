<?php

/* famille/layout.html.twig */
class __TwigTemplate_c504ec9eee19b7e05200c7755ea7753a0d55cc3ac7ab7c67418d65f590f571b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "famille/layout.html.twig", 1);
        $this->blocks = array(
            'page_entete_normal' => array($this, 'block_page_entete_normal'),
            'page_entete_petit' => array($this, 'block_page_entete_petit'),
            'breadcrump' => array($this, 'block_breadcrump'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb636b3cb631fee9200dda18d01eff363be053b67bcd96abfd8e86067149a1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb636b3cb631fee9200dda18d01eff363be053b67bcd96abfd8e86067149a1c0->enter($__internal_bb636b3cb631fee9200dda18d01eff363be053b67bcd96abfd8e86067149a1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "famille/layout.html.twig"));

        $__internal_6f5455c4966f6a8778eef8b706e6d5612749739a8887911d097eeddae4f39aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5455c4966f6a8778eef8b706e6d5612749739a8887911d097eeddae4f39aaf->enter($__internal_6f5455c4966f6a8778eef8b706e6d5612749739a8887911d097eeddae4f39aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "famille/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb636b3cb631fee9200dda18d01eff363be053b67bcd96abfd8e86067149a1c0->leave($__internal_bb636b3cb631fee9200dda18d01eff363be053b67bcd96abfd8e86067149a1c0_prof);

        
        $__internal_6f5455c4966f6a8778eef8b706e6d5612749739a8887911d097eeddae4f39aaf->leave($__internal_6f5455c4966f6a8778eef8b706e6d5612749739a8887911d097eeddae4f39aaf_prof);

    }

    // line 2
    public function block_page_entete_normal($context, array $blocks = array())
    {
        $__internal_30c9defc9904a7fbb8953386efbccaf39f14d3caafdde6337ff6b7bda283b56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c9defc9904a7fbb8953386efbccaf39f14d3caafdde6337ff6b7bda283b56e->enter($__internal_30c9defc9904a7fbb8953386efbccaf39f14d3caafdde6337ff6b7bda283b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        $__internal_7c7f9492317a71dbabbea1e856fe2a0ac25f5df329d18ba6c4af0a1faa9acec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7f9492317a71dbabbea1e856fe2a0ac25f5df329d18ba6c4af0a1faa9acec6->enter($__internal_7c7f9492317a71dbabbea1e856fe2a0ac25f5df329d18ba6c4af0a1faa9acec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        echo "Administration des familles d'articles";
        
        $__internal_7c7f9492317a71dbabbea1e856fe2a0ac25f5df329d18ba6c4af0a1faa9acec6->leave($__internal_7c7f9492317a71dbabbea1e856fe2a0ac25f5df329d18ba6c4af0a1faa9acec6_prof);

        
        $__internal_30c9defc9904a7fbb8953386efbccaf39f14d3caafdde6337ff6b7bda283b56e->leave($__internal_30c9defc9904a7fbb8953386efbccaf39f14d3caafdde6337ff6b7bda283b56e_prof);

    }

    // line 3
    public function block_page_entete_petit($context, array $blocks = array())
    {
        $__internal_e26df198f87d761239106df45db9a192bc9c264f0ec8e7ef486191b4b310b983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26df198f87d761239106df45db9a192bc9c264f0ec8e7ef486191b4b310b983->enter($__internal_e26df198f87d761239106df45db9a192bc9c264f0ec8e7ef486191b4b310b983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        $__internal_7f95a9f393b7f1e97e81c6241ea65feabdb468d633a5b35d458561dfbb7737b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f95a9f393b7f1e97e81c6241ea65feabdb468d633a5b35d458561dfbb7737b2->enter($__internal_7f95a9f393b7f1e97e81c6241ea65feabdb468d633a5b35d458561dfbb7737b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        
        $__internal_7f95a9f393b7f1e97e81c6241ea65feabdb468d633a5b35d458561dfbb7737b2->leave($__internal_7f95a9f393b7f1e97e81c6241ea65feabdb468d633a5b35d458561dfbb7737b2_prof);

        
        $__internal_e26df198f87d761239106df45db9a192bc9c264f0ec8e7ef486191b4b310b983->leave($__internal_e26df198f87d761239106df45db9a192bc9c264f0ec8e7ef486191b4b310b983_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = array())
    {
        $__internal_074e40094a41a2be932c3604eb3a831735921f49d9d726ed8756e0af834c3659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074e40094a41a2be932c3604eb3a831735921f49d9d726ed8756e0af834c3659->enter($__internal_074e40094a41a2be932c3604eb3a831735921f49d9d726ed8756e0af834c3659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        $__internal_39be3773e42f1c19c7b42ffe9da14e565fa165ddaf2939d7f0c93277378ac3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39be3773e42f1c19c7b42ffe9da14e565fa165ddaf2939d7f0c93277378ac3c5->enter($__internal_39be3773e42f1c19c7b42ffe9da14e565fa165ddaf2939d7f0c93277378ac3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        
        $__internal_39be3773e42f1c19c7b42ffe9da14e565fa165ddaf2939d7f0c93277378ac3c5->leave($__internal_39be3773e42f1c19c7b42ffe9da14e565fa165ddaf2939d7f0c93277378ac3c5_prof);

        
        $__internal_074e40094a41a2be932c3604eb3a831735921f49d9d726ed8756e0af834c3659->leave($__internal_074e40094a41a2be932c3604eb3a831735921f49d9d726ed8756e0af834c3659_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db2fccfc36728b3eefd7feb0ccf77fdc5282812cf75c7dd4b323e34545789fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2fccfc36728b3eefd7feb0ccf77fdc5282812cf75c7dd4b323e34545789fc3->enter($__internal_db2fccfc36728b3eefd7feb0ccf77fdc5282812cf75c7dd4b323e34545789fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_feb7ac2c2a144c45d2fe1c6e044a12687c236cf44907ca2bb244d9f62393d088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb7ac2c2a144c45d2fe1c6e044a12687c236cf44907ca2bb244d9f62393d088->enter($__internal_feb7ac2c2a144c45d2fe1c6e044a12687c236cf44907ca2bb244d9f62393d088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"  class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Articles</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Factures</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
";
        
        $__internal_feb7ac2c2a144c45d2fe1c6e044a12687c236cf44907ca2bb244d9f62393d088->leave($__internal_feb7ac2c2a144c45d2fe1c6e044a12687c236cf44907ca2bb244d9f62393d088_prof);

        
        $__internal_db2fccfc36728b3eefd7feb0ccf77fdc5282812cf75c7dd4b323e34545789fc3->leave($__internal_db2fccfc36728b3eefd7feb0ccf77fdc5282812cf75c7dd4b323e34545789fc3_prof);

    }

    public function getTemplateName()
    {
        return "famille/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  134 => 31,  124 => 24,  107 => 10,  104 => 9,  95 => 8,  78 => 4,  61 => 3,  43 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {% block page_entete_normal %}Administration des familles d'articles{% endblock %}
{% block page_entete_petit %}{% endblock %}
 {% block breadcrump %}{% endblock %}



{% block menu %}
    <li>
        <a href=\"{{ path('homepage') }}\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\"></span>
        </a>
    </li>
    <li  class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"  class=\"arrow \"></span>
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
{% endblock %}", "famille/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/famille/layout.html.twig");
    }
}
