<?php

/* Famille/data.json.twig */
class __TwigTemplate_c7b8d4ab72a54b01c01ab5ef67062d32bd95854eda7922776c52be736a46757b extends Twig_Template
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
        $__internal_67d4afdf240593a9eb836d57d5f93a8865145dbae9b406e1d615699b8be97464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d4afdf240593a9eb836d57d5f93a8865145dbae9b406e1d615699b8be97464->enter($__internal_67d4afdf240593a9eb836d57d5f93a8865145dbae9b406e1d615699b8be97464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/data.json.twig"));

        $__internal_ee2e706064271085e13089409b3d1d0253256b4d49bef6f1e9fc085acc7bf9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2e706064271085e13089409b3d1d0253256b4d49bef6f1e9fc085acc7bf9ae->enter($__internal_ee2e706064271085e13089409b3d1d0253256b4d49bef6f1e9fc085acc7bf9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Famille/data.json.twig"));

        // line 1
        echo "{
    \"data\": [
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familles"]) || array_key_exists("familles", $context) ? $context["familles"] : (function () { throw new Twig_Error_Runtime('Variable "familles" does not exist.', 3, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 4
            echo "        [
            \"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["famille"], "id", array()), "html", null, true);
            echo "\",
            \"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["famille"], "code", array()), "html", null, true);
            echo "\",
            \"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["famille"], "libelle", array()), "html", null, true);
            echo "\",
            \"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["famille"], "tva", array()), "html", null, true);
            echo "\",
            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["famille"], "id", array()))), "html", null, true);
            echo "\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]";
            // line 10
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                echo ",";
            }
            // line 11
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ],
    \"draw\": \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["draw"]) || array_key_exists("draw", $context) ? $context["draw"] : (function () { throw new Twig_Error_Runtime('Variable "draw" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsTotal\": \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["recordsTotal"]) || array_key_exists("recordsTotal", $context) ? $context["recordsTotal"] : (function () { throw new Twig_Error_Runtime('Variable "recordsTotal" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
    \"recordsFiltered\": \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["recordsFiltered"]) || array_key_exists("recordsFiltered", $context) ? $context["recordsFiltered"] : (function () { throw new Twig_Error_Runtime('Variable "recordsFiltered" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
}";
        
        $__internal_67d4afdf240593a9eb836d57d5f93a8865145dbae9b406e1d615699b8be97464->leave($__internal_67d4afdf240593a9eb836d57d5f93a8865145dbae9b406e1d615699b8be97464_prof);

        
        $__internal_ee2e706064271085e13089409b3d1d0253256b4d49bef6f1e9fc085acc7bf9ae->leave($__internal_ee2e706064271085e13089409b3d1d0253256b4d49bef6f1e9fc085acc7bf9ae_prof);

    }

    public function getTemplateName()
    {
        return "Famille/data.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  94 => 14,  90 => 13,  87 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"data\": [
        {% for famille in familles %}
        [
            \"{{ famille.id }}\",
            \"{{ famille.code }}\",
            \"{{ famille.libelle }}\",
            \"{{ famille.tva }}\",
            \"<div class=\\\"margin-bottom-5\\\"><a href=\\\"{{ path('famille_edit', { 'id': famille.id }) }}\\\" class=\\\"btn btn-sm btn-warning margin-bottom\\\"><i class=\\\"fa fa-search\\\"></i> Editer</a></div>\"
        ]{% if (loop.last == false) %},{% endif %}
        {% endfor %}
    ],
    \"draw\": \"{{ draw }}\",
    \"recordsTotal\": \"{{ recordsTotal }}\",
    \"recordsFiltered\": \"{{ recordsFiltered }}\"
}", "Famille/data.json.twig", "/var/www/html/ecaisse/app/Resources/views/Famille/data.json.twig");
    }
}
