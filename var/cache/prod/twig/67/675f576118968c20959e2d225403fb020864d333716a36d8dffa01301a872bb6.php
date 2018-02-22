<?php

/* tva/new.html.twig */
class __TwigTemplate_24f4d0a0ea35a25bd3cd41e04cce93b53021a0069f356a226ff519ef2739d474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("tva/layout.html.twig", "tva/new.html.twig", 1);
        $this->blocks = array(
            'content_entete' => array($this, 'block_content_entete'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tva/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_entete($context, array $blocks = array())
    {
        echo "Création d'une TVA";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
    <div class=\"form-body\">

        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array()), 'label');
        echo "
            <div class=\"input-group input-medium\" >
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "taux", array()), 'label');
        echo "
            <div class=\"input-group input-medium\" >
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateDeb", array()), 'label');
        echo "
            <div class=\"input-group input-medium date date-picker\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateDeb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateFin", array()), 'label');
        echo "
            <div class=\"input-group input-medium date date-picker\" data-date-format=\"dd-mm-yyyy\" data-date-viewmode=\"years\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-info\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span>
            </div>
        </div>
              
        
    </div>
        
     ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <div class=\"btn-group\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Créer\" />

            <div class=\"btn-group\">
                <a class=\"btn btn-success dropdown-toggle\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tva_index");
        echo "\">
                    <i class=\"fa fa-share\"></i>
                    <span class=\"hidden-480\">Retour </span>
                </a>
            </div>
        </div>

    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "tva/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 58,  115 => 51,  107 => 46,  94 => 36,  89 => 34,  79 => 27,  74 => 25,  66 => 20,  61 => 18,  54 => 14,  49 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tva/new.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/new.html.twig");
    }
}
