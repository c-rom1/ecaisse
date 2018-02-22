<?php

/* facture/index.html.twig */
class __TwigTemplate_c7e0da9fb57112e73c909f97374f0e90b818da7a90987bbf88ebb721c0f0ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("facture/layout.html.twig", "facture/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "facture/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49bb81a5eb1efb6a507f974266eeca680bb0170a317959c7d33ba94aceab7a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bb81a5eb1efb6a507f974266eeca680bb0170a317959c7d33ba94aceab7a46->enter($__internal_49bb81a5eb1efb6a507f974266eeca680bb0170a317959c7d33ba94aceab7a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_d42399a48f730c8de7659215314c315e87d8b36ccbe5e37fa6b0d214e3f0b0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42399a48f730c8de7659215314c315e87d8b36ccbe5e37fa6b0d214e3f0b0f1->enter($__internal_d42399a48f730c8de7659215314c315e87d8b36ccbe5e37fa6b0d214e3f0b0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bb81a5eb1efb6a507f974266eeca680bb0170a317959c7d33ba94aceab7a46->leave($__internal_49bb81a5eb1efb6a507f974266eeca680bb0170a317959c7d33ba94aceab7a46_prof);

        
        $__internal_d42399a48f730c8de7659215314c315e87d8b36ccbe5e37fa6b0d214e3f0b0f1->leave($__internal_d42399a48f730c8de7659215314c315e87d8b36ccbe5e37fa6b0d214e3f0b0f1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_47fefef975dc6057e9554ec50fc5fd96473c6bf0b45fd031b15cc7ed7168b9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fefef975dc6057e9554ec50fc5fd96473c6bf0b45fd031b15cc7ed7168b9cb->enter($__internal_47fefef975dc6057e9554ec50fc5fd96473c6bf0b45fd031b15cc7ed7168b9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2435316ad6620dfc8b9bc9260f542335d69ccd505f8b64d018751ea9a62c78d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2435316ad6620dfc8b9bc9260f542335d69ccd505f8b64d018751ea9a62c78d1->enter($__internal_2435316ad6620dfc8b9bc9260f542335d69ccd505f8b64d018751ea9a62c78d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Date</th>
                <th>Totalht</th>
                <th>Totaltva</th>
                <th>Totalttc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "totalHt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "totalTva", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "totalTtc", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["facture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_new");
        echo "\">Create a new facture</a>
        </li>
    </ul>
";
        
        $__internal_2435316ad6620dfc8b9bc9260f542335d69ccd505f8b64d018751ea9a62c78d1->leave($__internal_2435316ad6620dfc8b9bc9260f542335d69ccd505f8b64d018751ea9a62c78d1_prof);

        
        $__internal_47fefef975dc6057e9554ec50fc5fd96473c6bf0b45fd031b15cc7ed7168b9cb->leave($__internal_47fefef975dc6057e9554ec50fc5fd96473c6bf0b45fd031b15cc7ed7168b9cb_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 39,  110 => 33,  104 => 30,  97 => 26,  93 => 25,  89 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'facture/layout.html.twig' %}

{% block content %}
    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Date</th>
                <th>Totalht</th>
                <th>Totaltva</th>
                <th>Totalttc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <td><a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">{{ facture.id }}</a></td>
                <td>{{ facture.numero }}</td>
                <td>{% if facture.date %}{{ facture.date|date('Y-m-d') }}{% endif %}</td>
                <td>{{ facture.totalHt }}</td>
                <td>{{ facture.totalTva }}</td>
                <td>{{ facture.totalTtc }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('facture_edit', { 'id': facture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('facture_new') }}\">Create a new facture</a>
        </li>
    </ul>
{% endblock %}
", "facture/index.html.twig", "/var/www/html/ecaisse/app/Resources/views/facture/index.html.twig");
    }
}
