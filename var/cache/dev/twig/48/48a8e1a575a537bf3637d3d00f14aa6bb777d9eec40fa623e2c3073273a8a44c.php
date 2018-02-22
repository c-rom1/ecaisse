<?php

/* tva/layout.html.twig */
class __TwigTemplate_6293bbdab611cd8c2af89d9e94222f73dd17b8799a37126ea0594a590145a2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tva/layout.html.twig", 1);
        $this->blocks = array(
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
        $__internal_810f55050f019b0e04f160c5e05b8cefb3bc0811b32c79e872f49529e74e6515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810f55050f019b0e04f160c5e05b8cefb3bc0811b32c79e872f49529e74e6515->enter($__internal_810f55050f019b0e04f160c5e05b8cefb3bc0811b32c79e872f49529e74e6515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/layout.html.twig"));

        $__internal_d0bc73f1edeaecfd4399ae887dee5ca83be4ad201b128e218c9f7529e6128823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bc73f1edeaecfd4399ae887dee5ca83be4ad201b128e218c9f7529e6128823->enter($__internal_d0bc73f1edeaecfd4399ae887dee5ca83be4ad201b128e218c9f7529e6128823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_810f55050f019b0e04f160c5e05b8cefb3bc0811b32c79e872f49529e74e6515->leave($__internal_810f55050f019b0e04f160c5e05b8cefb3bc0811b32c79e872f49529e74e6515_prof);

        
        $__internal_d0bc73f1edeaecfd4399ae887dee5ca83be4ad201b128e218c9f7529e6128823->leave($__internal_d0bc73f1edeaecfd4399ae887dee5ca83be4ad201b128e218c9f7529e6128823_prof);

    }

    // line 3
    public function block_page_entete_normal($context, array $blocks = array())
    {
        $__internal_2447b2f81d4913b59c024e9099b1fd4703c6e2a42cdcd878ccd1d0371edf73e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2447b2f81d4913b59c024e9099b1fd4703c6e2a42cdcd878ccd1d0371edf73e3->enter($__internal_2447b2f81d4913b59c024e9099b1fd4703c6e2a42cdcd878ccd1d0371edf73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        $__internal_25cbb1260fae0e7e00d74840a38923dea6387e7f84546c74d5c007f54ecce5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cbb1260fae0e7e00d74840a38923dea6387e7f84546c74d5c007f54ecce5c4->enter($__internal_25cbb1260fae0e7e00d74840a38923dea6387e7f84546c74d5c007f54ecce5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        echo "Administration des TVA";
        
        $__internal_25cbb1260fae0e7e00d74840a38923dea6387e7f84546c74d5c007f54ecce5c4->leave($__internal_25cbb1260fae0e7e00d74840a38923dea6387e7f84546c74d5c007f54ecce5c4_prof);

        
        $__internal_2447b2f81d4913b59c024e9099b1fd4703c6e2a42cdcd878ccd1d0371edf73e3->leave($__internal_2447b2f81d4913b59c024e9099b1fd4703c6e2a42cdcd878ccd1d0371edf73e3_prof);

    }

    // line 4
    public function block_page_entete_petit($context, array $blocks = array())
    {
        $__internal_207f31418543aac054a13528557b1c2a18d3cc4b7cf75a683dedfd2fd96fb7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207f31418543aac054a13528557b1c2a18d3cc4b7cf75a683dedfd2fd96fb7fb->enter($__internal_207f31418543aac054a13528557b1c2a18d3cc4b7cf75a683dedfd2fd96fb7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        $__internal_030576cd66069bb0268a6bcff2eb8a1d7e8bea2efd5282017d5a37a637a16800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030576cd66069bb0268a6bcff2eb8a1d7e8bea2efd5282017d5a37a637a16800->enter($__internal_030576cd66069bb0268a6bcff2eb8a1d7e8bea2efd5282017d5a37a637a16800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        
        $__internal_030576cd66069bb0268a6bcff2eb8a1d7e8bea2efd5282017d5a37a637a16800->leave($__internal_030576cd66069bb0268a6bcff2eb8a1d7e8bea2efd5282017d5a37a637a16800_prof);

        
        $__internal_207f31418543aac054a13528557b1c2a18d3cc4b7cf75a683dedfd2fd96fb7fb->leave($__internal_207f31418543aac054a13528557b1c2a18d3cc4b7cf75a683dedfd2fd96fb7fb_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8df0896eac9899623d344203fdc229d3ac835eba3e5b746f1ed669bc6597cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8df0896eac9899623d344203fdc229d3ac835eba3e5b746f1ed669bc6597cac->enter($__internal_e8df0896eac9899623d344203fdc229d3ac835eba3e5b746f1ed669bc6597cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee3c8c77dfd959310436d6e8705a06b57b48e4b33ca07b5951a6bb87bf930005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3c8c77dfd959310436d6e8705a06b57b48e4b33ca07b5951a6bb87bf930005->enter($__internal_ee3c8c77dfd959310436d6e8705a06b57b48e4b33ca07b5951a6bb87bf930005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "    <li >
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\" class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"></span>
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
    <li class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
";
        
        $__internal_ee3c8c77dfd959310436d6e8705a06b57b48e4b33ca07b5951a6bb87bf930005->leave($__internal_ee3c8c77dfd959310436d6e8705a06b57b48e4b33ca07b5951a6bb87bf930005_prof);

        
        $__internal_e8df0896eac9899623d344203fdc229d3ac835eba3e5b746f1ed669bc6597cac->leave($__internal_e8df0896eac9899623d344203fdc229d3ac835eba3e5b746f1ed669bc6597cac_prof);

    }

    public function getTemplateName()
    {
        return "tva/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  109 => 24,  99 => 17,  89 => 10,  86 => 9,  77 => 8,  60 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block page_entete_normal %}Administration des TVA{% endblock %}
{% block page_entete_petit %}{% endblock %}



{% block menu %}
    <li >
        <a href=\"{{ path('homepage') }}\">
            <i class=\"icon-home\"></i>
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
    <li class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
{% endblock %}", "tva/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/layout.html.twig");
    }
}
