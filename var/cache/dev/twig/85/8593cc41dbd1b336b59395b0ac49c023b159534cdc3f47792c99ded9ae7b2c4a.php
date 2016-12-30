<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2cc76c1edf2693c17148f4fd47cb96e0cd66ac2033a92ba40604dfae4ae6ec8 extends Twig_Template
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
        $__internal_c115493e77cfa17447bf4ea4e3b57995db6207cfad043e775d936f7c8f08bef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c115493e77cfa17447bf4ea4e3b57995db6207cfad043e775d936f7c8f08bef9->enter($__internal_c115493e77cfa17447bf4ea4e3b57995db6207cfad043e775d936f7c8f08bef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4741a5347ccb09b860c0d2fa129ab6c62fc88d7ea66ffa6ce5c517b83026d2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4741a5347ccb09b860c0d2fa129ab6c62fc88d7ea66ffa6ce5c517b83026d2d2->enter($__internal_4741a5347ccb09b860c0d2fa129ab6c62fc88d7ea66ffa6ce5c517b83026d2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c115493e77cfa17447bf4ea4e3b57995db6207cfad043e775d936f7c8f08bef9->leave($__internal_c115493e77cfa17447bf4ea4e3b57995db6207cfad043e775d936f7c8f08bef9_prof);

        
        $__internal_4741a5347ccb09b860c0d2fa129ab6c62fc88d7ea66ffa6ce5c517b83026d2d2->leave($__internal_4741a5347ccb09b860c0d2fa129ab6c62fc88d7ea66ffa6ce5c517b83026d2d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d1a9bff2df142d00b8b4bd0202e4c6d5dad47eadc9acd97390f86d950eb30b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1a9bff2df142d00b8b4bd0202e4c6d5dad47eadc9acd97390f86d950eb30b5->enter($__internal_8d1a9bff2df142d00b8b4bd0202e4c6d5dad47eadc9acd97390f86d950eb30b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb5889898fe61b339d9239fd5452025021d4f172dd0723c682d346d3e51de2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5889898fe61b339d9239fd5452025021d4f172dd0723c682d346d3e51de2fc->enter($__internal_fb5889898fe61b339d9239fd5452025021d4f172dd0723c682d346d3e51de2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fb5889898fe61b339d9239fd5452025021d4f172dd0723c682d346d3e51de2fc->leave($__internal_fb5889898fe61b339d9239fd5452025021d4f172dd0723c682d346d3e51de2fc_prof);

        
        $__internal_8d1a9bff2df142d00b8b4bd0202e4c6d5dad47eadc9acd97390f86d950eb30b5->leave($__internal_8d1a9bff2df142d00b8b4bd0202e4c6d5dad47eadc9acd97390f86d950eb30b5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_490aa4dd0587b99f279d1f162a296daeac04cda14618f25a9bde04f6bf1499c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490aa4dd0587b99f279d1f162a296daeac04cda14618f25a9bde04f6bf1499c2->enter($__internal_490aa4dd0587b99f279d1f162a296daeac04cda14618f25a9bde04f6bf1499c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f72be5445dc1a9eac902187636c6bc4184374b52fa2fafdfe1e459fc3bc3faed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72be5445dc1a9eac902187636c6bc4184374b52fa2fafdfe1e459fc3bc3faed->enter($__internal_f72be5445dc1a9eac902187636c6bc4184374b52fa2fafdfe1e459fc3bc3faed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f72be5445dc1a9eac902187636c6bc4184374b52fa2fafdfe1e459fc3bc3faed->leave($__internal_f72be5445dc1a9eac902187636c6bc4184374b52fa2fafdfe1e459fc3bc3faed_prof);

        
        $__internal_490aa4dd0587b99f279d1f162a296daeac04cda14618f25a9bde04f6bf1499c2->leave($__internal_490aa4dd0587b99f279d1f162a296daeac04cda14618f25a9bde04f6bf1499c2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c60dbe2bba18e03878c535ad006c699b2ebd52a9d3a0243d222e0e41119a8e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60dbe2bba18e03878c535ad006c699b2ebd52a9d3a0243d222e0e41119a8e2c->enter($__internal_c60dbe2bba18e03878c535ad006c699b2ebd52a9d3a0243d222e0e41119a8e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a5e6e1a4e98233e9dd7623e0618b6069d8900bdc394a4f23924fd932e4024be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5e6e1a4e98233e9dd7623e0618b6069d8900bdc394a4f23924fd932e4024be->enter($__internal_7a5e6e1a4e98233e9dd7623e0618b6069d8900bdc394a4f23924fd932e4024be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7a5e6e1a4e98233e9dd7623e0618b6069d8900bdc394a4f23924fd932e4024be->leave($__internal_7a5e6e1a4e98233e9dd7623e0618b6069d8900bdc394a4f23924fd932e4024be_prof);

        
        $__internal_c60dbe2bba18e03878c535ad006c699b2ebd52a9d3a0243d222e0e41119a8e2c->leave($__internal_c60dbe2bba18e03878c535ad006c699b2ebd52a9d3a0243d222e0e41119a8e2c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
