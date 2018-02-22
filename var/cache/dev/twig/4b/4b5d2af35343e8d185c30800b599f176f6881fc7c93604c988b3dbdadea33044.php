<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9c938b17a0016e59db700d1877595790ab8fb7d79c16460ec44544ff03de597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c938b17a0016e59db700d1877595790ab8fb7d79c16460ec44544ff03de597->enter($__internal_c9c938b17a0016e59db700d1877595790ab8fb7d79c16460ec44544ff03de597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50fcb2fdee45694ca23cd2994a6109ee37c4f2f0ccf7698be7c1409cb1b9027d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fcb2fdee45694ca23cd2994a6109ee37c4f2f0ccf7698be7c1409cb1b9027d->enter($__internal_50fcb2fdee45694ca23cd2994a6109ee37c4f2f0ccf7698be7c1409cb1b9027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c938b17a0016e59db700d1877595790ab8fb7d79c16460ec44544ff03de597->leave($__internal_c9c938b17a0016e59db700d1877595790ab8fb7d79c16460ec44544ff03de597_prof);

        
        $__internal_50fcb2fdee45694ca23cd2994a6109ee37c4f2f0ccf7698be7c1409cb1b9027d->leave($__internal_50fcb2fdee45694ca23cd2994a6109ee37c4f2f0ccf7698be7c1409cb1b9027d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e22c6e1d50665679b8c60822b6d4ace91e5944f8b7b187da46143fc90d1656de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22c6e1d50665679b8c60822b6d4ace91e5944f8b7b187da46143fc90d1656de->enter($__internal_e22c6e1d50665679b8c60822b6d4ace91e5944f8b7b187da46143fc90d1656de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cb88a007815065fb9dcf733ac75abbc510ecf4019fdc9650ee8ab86fcc84e6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb88a007815065fb9dcf733ac75abbc510ecf4019fdc9650ee8ab86fcc84e6e2->enter($__internal_cb88a007815065fb9dcf733ac75abbc510ecf4019fdc9650ee8ab86fcc84e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb88a007815065fb9dcf733ac75abbc510ecf4019fdc9650ee8ab86fcc84e6e2->leave($__internal_cb88a007815065fb9dcf733ac75abbc510ecf4019fdc9650ee8ab86fcc84e6e2_prof);

        
        $__internal_e22c6e1d50665679b8c60822b6d4ace91e5944f8b7b187da46143fc90d1656de->leave($__internal_e22c6e1d50665679b8c60822b6d4ace91e5944f8b7b187da46143fc90d1656de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_789a6e41ae6a4bc18dc904738471642d86e7678436848b4e73aed211d6c2a80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789a6e41ae6a4bc18dc904738471642d86e7678436848b4e73aed211d6c2a80a->enter($__internal_789a6e41ae6a4bc18dc904738471642d86e7678436848b4e73aed211d6c2a80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28826c1a9897661be672997099e3022a3346de556400ea3f78a9f0b54613d3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28826c1a9897661be672997099e3022a3346de556400ea3f78a9f0b54613d3a1->enter($__internal_28826c1a9897661be672997099e3022a3346de556400ea3f78a9f0b54613d3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28826c1a9897661be672997099e3022a3346de556400ea3f78a9f0b54613d3a1->leave($__internal_28826c1a9897661be672997099e3022a3346de556400ea3f78a9f0b54613d3a1_prof);

        
        $__internal_789a6e41ae6a4bc18dc904738471642d86e7678436848b4e73aed211d6c2a80a->leave($__internal_789a6e41ae6a4bc18dc904738471642d86e7678436848b4e73aed211d6c2a80a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0eb79ec9e267d13d165b2e638eef5fdd5bd34699728957075adef43970b2fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0eb79ec9e267d13d165b2e638eef5fdd5bd34699728957075adef43970b2fc7->enter($__internal_d0eb79ec9e267d13d165b2e638eef5fdd5bd34699728957075adef43970b2fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8268d1a3771fa5660e713c23b156ac61f01c97a5e6f734f48ea17ee6c1131e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8268d1a3771fa5660e713c23b156ac61f01c97a5e6f734f48ea17ee6c1131e2a->enter($__internal_8268d1a3771fa5660e713c23b156ac61f01c97a5e6f734f48ea17ee6c1131e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8268d1a3771fa5660e713c23b156ac61f01c97a5e6f734f48ea17ee6c1131e2a->leave($__internal_8268d1a3771fa5660e713c23b156ac61f01c97a5e6f734f48ea17ee6c1131e2a_prof);

        
        $__internal_d0eb79ec9e267d13d165b2e638eef5fdd5bd34699728957075adef43970b2fc7->leave($__internal_d0eb79ec9e267d13d165b2e638eef5fdd5bd34699728957075adef43970b2fc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ecaisse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
