<?php

/* tva/data.json.twig */
class __TwigTemplate_f5537a23fdbd3f40c4d290e630637602444486fc9ba0defd2c041e3de2795eeb extends Twig_Template
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
        $__internal_4bc75984a31e32e3aa548b5f7b59ae0280aaffa1a2982cd70e680a4450298e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc75984a31e32e3aa548b5f7b59ae0280aaffa1a2982cd70e680a4450298e23->enter($__internal_4bc75984a31e32e3aa548b5f7b59ae0280aaffa1a2982cd70e680a4450298e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/data.json.twig"));

        $__internal_40d7a2b314d2c79244367f0c62c97bc2e2a5ccde644235f43e39f45dfdcb7a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d7a2b314d2c79244367f0c62c97bc2e2a5ccde644235f43e39f45dfdcb7a22->enter($__internal_40d7a2b314d2c79244367f0c62c97bc2e2a5ccde644235f43e39f45dfdcb7a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tva/data.json.twig"));

        // line 1
        echo "{
    \"data\": [
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tvas"]) || array_key_exists("tvas", $context) ? $context["tvas"] : (function () { throw new Twig_Error_Runtime('Variable "tvas" does not exist.', 3, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tva"]) {
            // line 4
            echo "        [
            \"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "id", array()), "html", null, true);
            echo "\",
            \"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "Type", array()), "html", null, true);
            echo "\",
            \"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "Taux", array()), "html", null, true);
            echo "\",
            \"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "Datedeb", array()), "d/m/Y"), "html", null, true);
            echo "\",
            ";
            // line 9
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "Datefin", array()))) {
                // line 10
                echo "                \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "Datefin", array()), "d/m/Y"), "html", null, true);
                echo "\",
            ";
            } else {
                // line 12
                echo "                \"\",
            ";
            }
            // line 14
            echo "            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["tva"], "id", array()))), "html", null, true);
            echo "\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]";
            // line 15
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                echo ",";
            }
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ],
    \"draw\": \"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["draw"]) || array_key_exists("draw", $context) ? $context["draw"] : (function () { throw new Twig_Error_Runtime('Variable "draw" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsTotal\": \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["recordsTotal"]) || array_key_exists("recordsTotal", $context) ? $context["recordsTotal"] : (function () { throw new Twig_Error_Runtime('Variable "recordsTotal" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsFiltered\": \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["recordsFiltered"]) || array_key_exists("recordsFiltered", $context) ? $context["recordsFiltered"] : (function () { throw new Twig_Error_Runtime('Variable "recordsFiltered" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
}";
        
        $__internal_4bc75984a31e32e3aa548b5f7b59ae0280aaffa1a2982cd70e680a4450298e23->leave($__internal_4bc75984a31e32e3aa548b5f7b59ae0280aaffa1a2982cd70e680a4450298e23_prof);

        
        $__internal_40d7a2b314d2c79244367f0c62c97bc2e2a5ccde644235f43e39f45dfdcb7a22->leave($__internal_40d7a2b314d2c79244367f0c62c97bc2e2a5ccde644235f43e39f45dfdcb7a22_prof);

    }

    public function getTemplateName()
    {
        return "tva/data.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  107 => 19,  103 => 18,  100 => 17,  86 => 16,  82 => 15,  77 => 14,  73 => 12,  67 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"data\": [
        {% for tva in tvas %}
        [
            \"{{ tva.id }}\",
            \"{{ tva.Type }}\",
            \"{{ tva.Taux }}\",
            \"{{ tva.Datedeb|date(\"d/m/Y\") }}\",
            {% if tva.Datefin is not null %}
                \"{{ tva.Datefin|date(\"d/m/Y\") }}\",
            {% else %}
                \"\",
            {% endif %}
            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"{{ path('tva_edit', { 'id': tva.id }) }}\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]{% if (loop.last == false) %},{% endif %}
        {% endfor %}
    ],
    \"draw\": \"{{ draw }}\",
    \"recordsTotal\": \"{{ recordsTotal }}\",
    \"recordsFiltered\": \"{{ recordsFiltered }}\"
}", "tva/data.json.twig", "/var/www/html/ecaisse/app/Resources/views/tva/data.json.twig");
    }
}
