<?php

/* tva/layout.html.twig */
class __TwigTemplate_7985d29eae3d5f9cf65eca85daa3346ec73341e43eccd561aa69932a867aa466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tva/layout.html.twig", 1);
        $this->blocks = array(
            'page_entete_normal' => array($this, 'block_page_entete_normal'),
            'page_entete_petit' => array($this, 'block_page_entete_petit'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_entete_normal($context, array $blocks = array())
    {
        echo "Administration des TVA";
    }

    // line 4
    public function block_page_entete_petit($context, array $blocks = array())
    {
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "    <li >
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
            <span class=\"selected\" class=\"arrow \"></span>
        </a>
    </li>
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("famille_index");
        echo "\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Familles d'article</span>
            <span class=\"selected\"></span>
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
    <li class=\"start active \">
        <a href=\"javascript:;\">
            <i class=\"icon-puzzle\"></i>
            <span class=\"title\">TVA</span>
            <span class=\"selected\"></span>
        </a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "tva/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  67 => 24,  57 => 17,  47 => 10,  44 => 9,  41 => 8,  36 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tva/layout.html.twig", "/var/www/html/ecaisse/app/Resources/views/tva/layout.html.twig");
    }
}
