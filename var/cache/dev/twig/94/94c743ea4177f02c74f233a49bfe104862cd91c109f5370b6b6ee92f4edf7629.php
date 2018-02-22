<?php

/* tva/edit.html.twig */
class __TwigTemplate_1121ac4fdedc1546f6f8988f9e39c2714707652019b6a53503ad10463d4fe085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("tva/layout.html.twig", "tva/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tva/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c845cf12717cc6f879e5c515b806ee753d779f9b3ec1a96abc266ec45594181e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c845cf12717cc6f879e5c515b806ee753d779f9b3ec1a96abc266ec45594181e->enter($__internal_c845cf12717cc6f879e5c515b806ee753d779f9b3ec1a96abc266ec45594181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/edit.html.twig"));

        $__internal_b841ad54e0f2886eca1780a1d615fe145e65c353d4df49f51657ff9dfe9cdcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b841ad54e0f2886eca1780a1d615fe145e65c353d4df49f51657ff9dfe9cdcd8->enter($__internal_b841ad54e0f2886eca1780a1d615fe145e65c353d4df49f51657ff9dfe9cdcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c845cf12717cc6f879e5c515b806ee753d779f9b3ec1a96abc266ec45594181e->leave($__internal_c845cf12717cc6f879e5c515b806ee753d779f9b3ec1a96abc266ec45594181e_prof);

        
        $__internal_b841ad54e0f2886eca1780a1d615fe145e65c353d4df49f51657ff9dfe9cdcd8->leave($__internal_b841ad54e0f2886eca1780a1d615fe145e65c353d4df49f51657ff9dfe9cdcd8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8768d3b7f7e020568ee744e190bb8f3d5a5613a1969dd78d024cf58ee8d27e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8768d3b7f7e020568ee744e190bb8f3d5a5613a1969dd78d024cf58ee8d27e4c->enter($__internal_8768d3b7f7e020568ee744e190bb8f3d5a5613a1969dd78d024cf58ee8d27e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fab7ceeafe057130827071097dfa0fa02f5f2493b2ad61936fa5252b4c734451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab7ceeafe057130827071097dfa0fa02f5f2493b2ad61936fa5252b4c734451->enter($__internal_fab7ceeafe057130827071097dfa0fa02f5f2493b2ad61936fa5252b4c734451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Tva edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fab7ceeafe057130827071097dfa0fa02f5f2493b2ad61936fa5252b4c734451->leave($__internal_fab7ceeafe057130827071097dfa0fa02f5f2493b2ad61936fa5252b4c734451_prof);

        
        $__internal_8768d3b7f7e020568ee744e190bb8f3d5a5613a1969dd78d024cf58ee8d27e4c->leave($__internal_8768d3b7f7e020568ee744e190bb8f3d5a5613a1969dd78d024cf58ee8d27e4c_prof);

    }

    public function getTemplateName()
    {
        return "tva/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'tva/layout.html.twig' %}

{% block content %}
    <h1>Tva edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tva_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tva/edit.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/edit.html.twig");
    }
}
