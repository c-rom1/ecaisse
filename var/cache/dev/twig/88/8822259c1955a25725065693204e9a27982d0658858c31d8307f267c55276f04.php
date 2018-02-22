<?php

/* Famille/layout.html.twig */
class __TwigTemplate_8073664901e13bfc3695a3ded2c0454f7bbff064e3e5136ac972174c773be39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Famille/layout.html.twig", 1);
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
        $__internal_a93acce26a9bcacdc8ebb96adc0d209007a28ce1f7604dd3be42eb3fc18f29ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93acce26a9bcacdc8ebb96adc0d209007a28ce1f7604dd3be42eb3fc18f29ee->enter($__internal_a93acce26a9bcacdc8ebb96adc0d209007a28ce1f7604dd3be42eb3fc18f29ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/layout.html.twig"));

        $__internal_9bf1d252c26f9f22e4a6bcd8724599505b85f3735fdf10d0ea2cc71ee708594d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf1d252c26f9f22e4a6bcd8724599505b85f3735fdf10d0ea2cc71ee708594d->enter($__internal_9bf1d252c26f9f22e4a6bcd8724599505b85f3735fdf10d0ea2cc71ee708594d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93acce26a9bcacdc8ebb96adc0d209007a28ce1f7604dd3be42eb3fc18f29ee->leave($__internal_a93acce26a9bcacdc8ebb96adc0d209007a28ce1f7604dd3be42eb3fc18f29ee_prof);

        
        $__internal_9bf1d252c26f9f22e4a6bcd8724599505b85f3735fdf10d0ea2cc71ee708594d->leave($__internal_9bf1d252c26f9f22e4a6bcd8724599505b85f3735fdf10d0ea2cc71ee708594d_prof);

    }

    // line 2
    public function block_page_entete_normal($context, array $blocks = array())
    {
        $__internal_4da16c966152b99db7ee86e129ea6732f225907e48f935e0b00846946bc0341d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da16c966152b99db7ee86e129ea6732f225907e48f935e0b00846946bc0341d->enter($__internal_4da16c966152b99db7ee86e129ea6732f225907e48f935e0b00846946bc0341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        $__internal_839ebd98e5da0df3db34ea672efdad718291bee1c34e15035745945ed1e469e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839ebd98e5da0df3db34ea672efdad718291bee1c34e15035745945ed1e469e3->enter($__internal_839ebd98e5da0df3db34ea672efdad718291bee1c34e15035745945ed1e469e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_normal"));

        echo "Administration des familles d'articles";
        
        $__internal_839ebd98e5da0df3db34ea672efdad718291bee1c34e15035745945ed1e469e3->leave($__internal_839ebd98e5da0df3db34ea672efdad718291bee1c34e15035745945ed1e469e3_prof);

        
        $__internal_4da16c966152b99db7ee86e129ea6732f225907e48f935e0b00846946bc0341d->leave($__internal_4da16c966152b99db7ee86e129ea6732f225907e48f935e0b00846946bc0341d_prof);

    }

    // line 3
    public function block_page_entete_petit($context, array $blocks = array())
    {
        $__internal_aa54ab4df95fc3b0832efb964f0614263e58c21c6508f4bf1527adcba0eb5538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa54ab4df95fc3b0832efb964f0614263e58c21c6508f4bf1527adcba0eb5538->enter($__internal_aa54ab4df95fc3b0832efb964f0614263e58c21c6508f4bf1527adcba0eb5538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        $__internal_ac7179040e01cb6ae42e02ff5b147cc43915368df6ad771978d40fb9e79cad3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7179040e01cb6ae42e02ff5b147cc43915368df6ad771978d40fb9e79cad3a->enter($__internal_ac7179040e01cb6ae42e02ff5b147cc43915368df6ad771978d40fb9e79cad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_entete_petit"));

        
        $__internal_ac7179040e01cb6ae42e02ff5b147cc43915368df6ad771978d40fb9e79cad3a->leave($__internal_ac7179040e01cb6ae42e02ff5b147cc43915368df6ad771978d40fb9e79cad3a_prof);

        
        $__internal_aa54ab4df95fc3b0832efb964f0614263e58c21c6508f4bf1527adcba0eb5538->leave($__internal_aa54ab4df95fc3b0832efb964f0614263e58c21c6508f4bf1527adcba0eb5538_prof);

    }

    // line 4
    public function block_breadcrump($context, array $blocks = array())
    {
        $__internal_78df9ff4bd7b5984386a897bf1b5d4718872891b619016d48d0613f8b5c85755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78df9ff4bd7b5984386a897bf1b5d4718872891b619016d48d0613f8b5c85755->enter($__internal_78df9ff4bd7b5984386a897bf1b5d4718872891b619016d48d0613f8b5c85755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        $__internal_cdba5520f5c2f4e8044f7950a5314a0d39731cd9733fe2305201db9b79510c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdba5520f5c2f4e8044f7950a5314a0d39731cd9733fe2305201db9b79510c40->enter($__internal_cdba5520f5c2f4e8044f7950a5314a0d39731cd9733fe2305201db9b79510c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrump"));

        
        $__internal_cdba5520f5c2f4e8044f7950a5314a0d39731cd9733fe2305201db9b79510c40->leave($__internal_cdba5520f5c2f4e8044f7950a5314a0d39731cd9733fe2305201db9b79510c40_prof);

        
        $__internal_78df9ff4bd7b5984386a897bf1b5d4718872891b619016d48d0613f8b5c85755->leave($__internal_78df9ff4bd7b5984386a897bf1b5d4718872891b619016d48d0613f8b5c85755_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2094174878a89d957ffc5df2cb41a21176dc86398bfe4469510eeec5961d780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2094174878a89d957ffc5df2cb41a21176dc86398bfe4469510eeec5961d780->enter($__internal_c2094174878a89d957ffc5df2cb41a21176dc86398bfe4469510eeec5961d780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c15fcdb002a2ccbdca6fde0836f50ed926ff5cfa485b43af20c93a3f434ce616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15fcdb002a2ccbdca6fde0836f50ed926ff5cfa485b43af20c93a3f434ce616->enter($__internal_c15fcdb002a2ccbdca6fde0836f50ed926ff5cfa485b43af20c93a3f434ce616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c15fcdb002a2ccbdca6fde0836f50ed926ff5cfa485b43af20c93a3f434ce616->leave($__internal_c15fcdb002a2ccbdca6fde0836f50ed926ff5cfa485b43af20c93a3f434ce616_prof);

        
        $__internal_c2094174878a89d957ffc5df2cb41a21176dc86398bfe4469510eeec5961d780->leave($__internal_c2094174878a89d957ffc5df2cb41a21176dc86398bfe4469510eeec5961d780_prof);

    }

    public function getTemplateName()
    {
        return "Famille/layout.html.twig";
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
{% endblock %}", "Famille/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/Famille/layout.html.twig");
    }
}
