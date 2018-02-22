<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/base.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce816b86c9b17c3db708beaff8968c0b81ebfe5706204e5a7bd0202f156fc490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce816b86c9b17c3db708beaff8968c0b81ebfe5706204e5a7bd0202f156fc490->enter($__internal_ce816b86c9b17c3db708beaff8968c0b81ebfe5706204e5a7bd0202f156fc490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_952b69e7c7610641c0a95dc93ef9fbe1bb558d142e5d77fbe0580472a1b91dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952b69e7c7610641c0a95dc93ef9fbe1bb558d142e5d77fbe0580472a1b91dc4->enter($__internal_952b69e7c7610641c0a95dc93ef9fbe1bb558d142e5d77fbe0580472a1b91dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce816b86c9b17c3db708beaff8968c0b81ebfe5706204e5a7bd0202f156fc490->leave($__internal_ce816b86c9b17c3db708beaff8968c0b81ebfe5706204e5a7bd0202f156fc490_prof);

        
        $__internal_952b69e7c7610641c0a95dc93ef9fbe1bb558d142e5d77fbe0580472a1b91dc4->leave($__internal_952b69e7c7610641c0a95dc93ef9fbe1bb558d142e5d77fbe0580472a1b91dc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90003f644698629e6f2c61bfc9cdfd76b0abd6dd66318de6c41525e830b72f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90003f644698629e6f2c61bfc9cdfd76b0abd6dd66318de6c41525e830b72f03->enter($__internal_90003f644698629e6f2c61bfc9cdfd76b0abd6dd66318de6c41525e830b72f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a7625e9c81ac55ec03f7e207bdf5a317e3ef32c28d52035fadcc54aa90143fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7625e9c81ac55ec03f7e207bdf5a317e3ef32c28d52035fadcc54aa90143fa->enter($__internal_8a7625e9c81ac55ec03f7e207bdf5a317e3ef32c28d52035fadcc54aa90143fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8a7625e9c81ac55ec03f7e207bdf5a317e3ef32c28d52035fadcc54aa90143fa->leave($__internal_8a7625e9c81ac55ec03f7e207bdf5a317e3ef32c28d52035fadcc54aa90143fa_prof);

        
        $__internal_90003f644698629e6f2c61bfc9cdfd76b0abd6dd66318de6c41525e830b72f03->leave($__internal_90003f644698629e6f2c61bfc9cdfd76b0abd6dd66318de6c41525e830b72f03_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5a76987eeb80deeb4dc58f6afaed5cbe534fa062fd7346baa06e22dc94fe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5a76987eeb80deeb4dc58f6afaed5cbe534fa062fd7346baa06e22dc94fe6f->enter($__internal_ac5a76987eeb80deeb4dc58f6afaed5cbe534fa062fd7346baa06e22dc94fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7e00bb3193cf2d70d0fab7d31a7fd54c0e748863359da833848f542e77b8c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e00bb3193cf2d70d0fab7d31a7fd54c0e748863359da833848f542e77b8c42->enter($__internal_f7e00bb3193cf2d70d0fab7d31a7fd54c0e748863359da833848f542e77b8c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f7e00bb3193cf2d70d0fab7d31a7fd54c0e748863359da833848f542e77b8c42->leave($__internal_f7e00bb3193cf2d70d0fab7d31a7fd54c0e748863359da833848f542e77b8c42_prof);

        
        $__internal_ac5a76987eeb80deeb4dc58f6afaed5cbe534fa062fd7346baa06e22dc94fe6f->leave($__internal_ac5a76987eeb80deeb4dc58f6afaed5cbe534fa062fd7346baa06e22dc94fe6f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d1bfad1a369cb9944602a7d50e11bcf6301449687559efd87cbacc8d2e911b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d1bfad1a369cb9944602a7d50e11bcf6301449687559efd87cbacc8d2e911b->enter($__internal_71d1bfad1a369cb9944602a7d50e11bcf6301449687559efd87cbacc8d2e911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b63015dd4ca0bf4f5fdafb3765e57da32b0ec67203acbcd81ecc3ba153c861a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b63015dd4ca0bf4f5fdafb3765e57da32b0ec67203acbcd81ecc3ba153c861a->enter($__internal_8b63015dd4ca0bf4f5fdafb3765e57da32b0ec67203acbcd81ecc3ba153c861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8b63015dd4ca0bf4f5fdafb3765e57da32b0ec67203acbcd81ecc3ba153c861a->leave($__internal_8b63015dd4ca0bf4f5fdafb3765e57da32b0ec67203acbcd81ecc3ba153c861a_prof);

        
        $__internal_71d1bfad1a369cb9944602a7d50e11bcf6301449687559efd87cbacc8d2e911b->leave($__internal_71d1bfad1a369cb9944602a7d50e11bcf6301449687559efd87cbacc8d2e911b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/base.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ecaisse/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
