<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c120c299bdd706415cbee24b443e4c514810d4e8c674bb30d2d263b8c3a4d717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dd656cf9fdba9b9a5d1fd092dea0ac76d0b11ceaf8eff3147fed548977e929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd656cf9fdba9b9a5d1fd092dea0ac76d0b11ceaf8eff3147fed548977e929d->enter($__internal_6dd656cf9fdba9b9a5d1fd092dea0ac76d0b11ceaf8eff3147fed548977e929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b8357a79a496ddbe4d5795fef5098df813bbf33b1f8ca2bc56d1308f82ddfba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8357a79a496ddbe4d5795fef5098df813bbf33b1f8ca2bc56d1308f82ddfba3->enter($__internal_b8357a79a496ddbe4d5795fef5098df813bbf33b1f8ca2bc56d1308f82ddfba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dd656cf9fdba9b9a5d1fd092dea0ac76d0b11ceaf8eff3147fed548977e929d->leave($__internal_6dd656cf9fdba9b9a5d1fd092dea0ac76d0b11ceaf8eff3147fed548977e929d_prof);

        
        $__internal_b8357a79a496ddbe4d5795fef5098df813bbf33b1f8ca2bc56d1308f82ddfba3->leave($__internal_b8357a79a496ddbe4d5795fef5098df813bbf33b1f8ca2bc56d1308f82ddfba3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a68e778a1ed8f3491821e50366243c88d92826c125e0405a259598d670e87bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68e778a1ed8f3491821e50366243c88d92826c125e0405a259598d670e87bc5->enter($__internal_a68e778a1ed8f3491821e50366243c88d92826c125e0405a259598d670e87bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f73dbcbd0cef3d3b7dfb8c184f425703339845d068aecf95ad1fdd2202cc709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f73dbcbd0cef3d3b7dfb8c184f425703339845d068aecf95ad1fdd2202cc709->enter($__internal_0f73dbcbd0cef3d3b7dfb8c184f425703339845d068aecf95ad1fdd2202cc709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0f73dbcbd0cef3d3b7dfb8c184f425703339845d068aecf95ad1fdd2202cc709->leave($__internal_0f73dbcbd0cef3d3b7dfb8c184f425703339845d068aecf95ad1fdd2202cc709_prof);

        
        $__internal_a68e778a1ed8f3491821e50366243c88d92826c125e0405a259598d670e87bc5->leave($__internal_a68e778a1ed8f3491821e50366243c88d92826c125e0405a259598d670e87bc5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d0f42abbd3063a07a41a2641dab01c6b27b4bbea163271efe4628688ad41019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0f42abbd3063a07a41a2641dab01c6b27b4bbea163271efe4628688ad41019->enter($__internal_2d0f42abbd3063a07a41a2641dab01c6b27b4bbea163271efe4628688ad41019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a2c4ab864e67c3c361ca97098c07d476923700d8c3dd7e613dd9525a9270445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2c4ab864e67c3c361ca97098c07d476923700d8c3dd7e613dd9525a9270445->enter($__internal_4a2c4ab864e67c3c361ca97098c07d476923700d8c3dd7e613dd9525a9270445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a2c4ab864e67c3c361ca97098c07d476923700d8c3dd7e613dd9525a9270445->leave($__internal_4a2c4ab864e67c3c361ca97098c07d476923700d8c3dd7e613dd9525a9270445_prof);

        
        $__internal_2d0f42abbd3063a07a41a2641dab01c6b27b4bbea163271efe4628688ad41019->leave($__internal_2d0f42abbd3063a07a41a2641dab01c6b27b4bbea163271efe4628688ad41019_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_21bef83e6a464d32fdcc0147481c98be9235a1fbfe8423402b5cd70cb39ca7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bef83e6a464d32fdcc0147481c98be9235a1fbfe8423402b5cd70cb39ca7da->enter($__internal_21bef83e6a464d32fdcc0147481c98be9235a1fbfe8423402b5cd70cb39ca7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0664dd3d8f09ac7ea9115b754e3948cd29ee72e99d013b8569327bc851fe647f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0664dd3d8f09ac7ea9115b754e3948cd29ee72e99d013b8569327bc851fe647f->enter($__internal_0664dd3d8f09ac7ea9115b754e3948cd29ee72e99d013b8569327bc851fe647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0664dd3d8f09ac7ea9115b754e3948cd29ee72e99d013b8569327bc851fe647f->leave($__internal_0664dd3d8f09ac7ea9115b754e3948cd29ee72e99d013b8569327bc851fe647f_prof);

        
        $__internal_21bef83e6a464d32fdcc0147481c98be9235a1fbfe8423402b5cd70cb39ca7da->leave($__internal_21bef83e6a464d32fdcc0147481c98be9235a1fbfe8423402b5cd70cb39ca7da_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

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
", "@Twig/Exception/exception_full.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
