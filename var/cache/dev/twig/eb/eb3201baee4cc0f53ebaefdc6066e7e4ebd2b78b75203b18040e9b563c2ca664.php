<?php

/* article/data.json.twig */
class __TwigTemplate_363f9f5d4d97482625d5db39394f16a287d47c4e9902f95246ba534a65c79d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dad52e1a718a50769a3caf19d147ce1e95304ec7357e4cc5dec70b2296cd5c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad52e1a718a50769a3caf19d147ce1e95304ec7357e4cc5dec70b2296cd5c57->enter($__internal_dad52e1a718a50769a3caf19d147ce1e95304ec7357e4cc5dec70b2296cd5c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/data.json.twig"));

        $__internal_95592b43656d8ad1f5a60b75c7a174b03df82e507504d5f86229ce1f5684dd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95592b43656d8ad1f5a60b75c7a174b03df82e507504d5f86229ce1f5684dd05->enter($__internal_95592b43656d8ad1f5a60b75c7a174b03df82e507504d5f86229ce1f5684dd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/data.json.twig"));

        // line 1
        echo "{
    \"data\": [
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 3, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "        [
            \"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "\",
            \"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "famille", array()), "html", null, true);
            echo "\",
            \"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "code", array()), "html", null, true);
            echo "\",
            \"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "libelle", array()), "html", null, true);
            echo "\",
            \"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "prixUnitaire", array()), "html", null, true);
            echo "\",
            \"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "tva", array()), "html", null, true);
            echo "\",
            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]";
            // line 12
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                echo ",";
            }
            // line 13
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ],
    \"draw\": \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["draw"]) || array_key_exists("draw", $context) ? $context["draw"] : (function () { throw new Twig_Error_Runtime('Variable "draw" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsTotal\": \"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["recordsTotal"]) || array_key_exists("recordsTotal", $context) ? $context["recordsTotal"] : (function () { throw new Twig_Error_Runtime('Variable "recordsTotal" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsFiltered\": \"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["recordsFiltered"]) || array_key_exists("recordsFiltered", $context) ? $context["recordsFiltered"] : (function () { throw new Twig_Error_Runtime('Variable "recordsFiltered" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
}";
        
        $__internal_dad52e1a718a50769a3caf19d147ce1e95304ec7357e4cc5dec70b2296cd5c57->leave($__internal_dad52e1a718a50769a3caf19d147ce1e95304ec7357e4cc5dec70b2296cd5c57_prof);

        
        $__internal_95592b43656d8ad1f5a60b75c7a174b03df82e507504d5f86229ce1f5684dd05->leave($__internal_95592b43656d8ad1f5a60b75c7a174b03df82e507504d5f86229ce1f5684dd05_prof);

    }

    public function getTemplateName()
    {
        return "article/data.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  102 => 16,  98 => 15,  95 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"data\": [
        {% for article in articles %}
        [
            \"{{ article.id }}\",
            \"{{ article.famille }}\",
            \"{{ article.code }}\",
            \"{{ article.libelle }}\",
            \"{{ article.prixUnitaire }}\",
            \"{{ article.tva }}\",
            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"{{ path('article_edit', { 'id': article.id }) }}\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]{% if (loop.last == false) %},{% endif %}
        {% endfor %}
    ],
    \"draw\": \"{{ draw }}\",
    \"recordsTotal\": \"{{ recordsTotal }}\",
    \"recordsFiltered\": \"{{ recordsFiltered }}\"
}", "article/data.json.twig", "/var/www/html/ecaisse/app/Resources/views/article/data.json.twig");
    }
}
