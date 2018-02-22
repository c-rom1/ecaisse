<?php

/* tva/data.json.twig */
class __TwigTemplate_aeea628ce44e4a5cb2c15a6d3ca9d200c3d787204741d26ab66538dd8d08fbc2 extends Twig_Template
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
        // line 1
        echo "{
    \"data\": [
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tvas"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["draw"] ?? null), "html", null, true);
        echo "\",
    \"recordsTotal\": \"";
        // line 19
        echo twig_escape_filter($this->env, ($context["recordsTotal"] ?? null), "html", null, true);
        echo "\",
    \"recordsFiltered\": \"";
        // line 20
        echo twig_escape_filter($this->env, ($context["recordsFiltered"] ?? null), "html", null, true);
        echo "\"
}";
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
        return array (  105 => 20,  101 => 19,  97 => 18,  94 => 17,  80 => 16,  76 => 15,  71 => 14,  67 => 12,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tva/data.json.twig", "/var/www/html/ecaisse/app/Resources/views/tva/data.json.twig");
    }
}
