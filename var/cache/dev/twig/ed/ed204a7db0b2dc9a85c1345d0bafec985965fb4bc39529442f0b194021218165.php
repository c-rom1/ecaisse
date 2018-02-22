<?php

/* article/show.html.twig */
class __TwigTemplate_84cbbcea0b4c6e8396c06ec9c68983313a2ab6a4929a5dc1690d4cb4ee258109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("article/layout.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "article/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34b0cfd506d6d5872816049bb339b6ff0c25ffd72bf11844f4878163ff67a82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b0cfd506d6d5872816049bb339b6ff0c25ffd72bf11844f4878163ff67a82f->enter($__internal_34b0cfd506d6d5872816049bb339b6ff0c25ffd72bf11844f4878163ff67a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_a51aadbe2cbbd4216e297eece560976991b2ed3ce460e7d98fc6aa9e276e0a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51aadbe2cbbd4216e297eece560976991b2ed3ce460e7d98fc6aa9e276e0a67->enter($__internal_a51aadbe2cbbd4216e297eece560976991b2ed3ce460e7d98fc6aa9e276e0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b0cfd506d6d5872816049bb339b6ff0c25ffd72bf11844f4878163ff67a82f->leave($__internal_34b0cfd506d6d5872816049bb339b6ff0c25ffd72bf11844f4878163ff67a82f_prof);

        
        $__internal_a51aadbe2cbbd4216e297eece560976991b2ed3ce460e7d98fc6aa9e276e0a67->leave($__internal_a51aadbe2cbbd4216e297eece560976991b2ed3ce460e7d98fc6aa9e276e0a67_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1f764f363d0c8d81b9235c18cf2b0265a4cde566e3064205800cdde90eff231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f764f363d0c8d81b9235c18cf2b0265a4cde566e3064205800cdde90eff231->enter($__internal_a1f764f363d0c8d81b9235c18cf2b0265a4cde566e3064205800cdde90eff231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f507f99353b8c9cd267006b78db75d5740ffd5d0be2f5da020ba06d9f0700ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f507f99353b8c9cd267006b78db75d5740ffd5d0be2f5da020ba06d9f0700ec7->enter($__internal_f507f99353b8c9cd267006b78db75d5740ffd5d0be2f5da020ba06d9f0700ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 20, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 25, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f507f99353b8c9cd267006b78db75d5740ffd5d0be2f5da020ba06d9f0700ec7->leave($__internal_f507f99353b8c9cd267006b78db75d5740ffd5d0be2f5da020ba06d9f0700ec7_prof);

        
        $__internal_a1f764f363d0c8d81b9235c18cf2b0265a4cde566e3064205800cdde90eff231->leave($__internal_a1f764f363d0c8d81b9235c18cf2b0265a4cde566e3064205800cdde90eff231_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'article/layout.html.twig' %}

{% block content %}
    <h1>Article</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/show.html.twig", "/var/www/html/ecaisse/app/Resources/views/article/show.html.twig");
    }
}
