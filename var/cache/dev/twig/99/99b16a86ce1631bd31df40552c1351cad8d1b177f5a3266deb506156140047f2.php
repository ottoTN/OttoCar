<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e80d6168c3c7bf9fcf0b48bee5f4d182b39435f9ff24f5e69df2f30c0a26d5b3 extends Twig_Template
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
        $__internal_d66f4959eda047a453e2906d2666ff88fadb2e2b4c93cf24ad206dcd490e0838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66f4959eda047a453e2906d2666ff88fadb2e2b4c93cf24ad206dcd490e0838->enter($__internal_d66f4959eda047a453e2906d2666ff88fadb2e2b4c93cf24ad206dcd490e0838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_67b1acf97255ad95b15994f9c6f01246d37ea28685f6b5119205cc287d6e23a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b1acf97255ad95b15994f9c6f01246d37ea28685f6b5119205cc287d6e23a9->enter($__internal_67b1acf97255ad95b15994f9c6f01246d37ea28685f6b5119205cc287d6e23a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66f4959eda047a453e2906d2666ff88fadb2e2b4c93cf24ad206dcd490e0838->leave($__internal_d66f4959eda047a453e2906d2666ff88fadb2e2b4c93cf24ad206dcd490e0838_prof);

        
        $__internal_67b1acf97255ad95b15994f9c6f01246d37ea28685f6b5119205cc287d6e23a9->leave($__internal_67b1acf97255ad95b15994f9c6f01246d37ea28685f6b5119205cc287d6e23a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2986f9d00cb6bf52bdef9c046a84ad055a0d5add3c4cec6684400b48281b971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2986f9d00cb6bf52bdef9c046a84ad055a0d5add3c4cec6684400b48281b971->enter($__internal_f2986f9d00cb6bf52bdef9c046a84ad055a0d5add3c4cec6684400b48281b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df99b0af4ef082c371e9ff9ec17c2b29d883f00e3db2f0d6c4aecbdc4435a4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df99b0af4ef082c371e9ff9ec17c2b29d883f00e3db2f0d6c4aecbdc4435a4fd->enter($__internal_df99b0af4ef082c371e9ff9ec17c2b29d883f00e3db2f0d6c4aecbdc4435a4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df99b0af4ef082c371e9ff9ec17c2b29d883f00e3db2f0d6c4aecbdc4435a4fd->leave($__internal_df99b0af4ef082c371e9ff9ec17c2b29d883f00e3db2f0d6c4aecbdc4435a4fd_prof);

        
        $__internal_f2986f9d00cb6bf52bdef9c046a84ad055a0d5add3c4cec6684400b48281b971->leave($__internal_f2986f9d00cb6bf52bdef9c046a84ad055a0d5add3c4cec6684400b48281b971_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb0a39b0e8b41bf015bd3cffcb8cdaab37ee6e849881aa2697f5d63a7a038b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb0a39b0e8b41bf015bd3cffcb8cdaab37ee6e849881aa2697f5d63a7a038b9->enter($__internal_2cb0a39b0e8b41bf015bd3cffcb8cdaab37ee6e849881aa2697f5d63a7a038b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf213256a38e295e88e0d427aaceeb73f16e5d85268ad54adc80a5c0e5d214c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf213256a38e295e88e0d427aaceeb73f16e5d85268ad54adc80a5c0e5d214c9->enter($__internal_cf213256a38e295e88e0d427aaceeb73f16e5d85268ad54adc80a5c0e5d214c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf213256a38e295e88e0d427aaceeb73f16e5d85268ad54adc80a5c0e5d214c9->leave($__internal_cf213256a38e295e88e0d427aaceeb73f16e5d85268ad54adc80a5c0e5d214c9_prof);

        
        $__internal_2cb0a39b0e8b41bf015bd3cffcb8cdaab37ee6e849881aa2697f5d63a7a038b9->leave($__internal_2cb0a39b0e8b41bf015bd3cffcb8cdaab37ee6e849881aa2697f5d63a7a038b9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7348d1650ef69e318f768aad08397ab5dacd32cb4629f285d10265faf8b782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7348d1650ef69e318f768aad08397ab5dacd32cb4629f285d10265faf8b782->enter($__internal_3b7348d1650ef69e318f768aad08397ab5dacd32cb4629f285d10265faf8b782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_616dd012c0e8a770c2f449cf48f28fa1dbc40f1a468cad718a981b75858d75a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616dd012c0e8a770c2f449cf48f28fa1dbc40f1a468cad718a981b75858d75a8->enter($__internal_616dd012c0e8a770c2f449cf48f28fa1dbc40f1a468cad718a981b75858d75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_616dd012c0e8a770c2f449cf48f28fa1dbc40f1a468cad718a981b75858d75a8->leave($__internal_616dd012c0e8a770c2f449cf48f28fa1dbc40f1a468cad718a981b75858d75a8_prof);

        
        $__internal_3b7348d1650ef69e318f768aad08397ab5dacd32cb4629f285d10265faf8b782->leave($__internal_3b7348d1650ef69e318f768aad08397ab5dacd32cb4629f285d10265faf8b782_prof);

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
", "@Twig/Exception/exception_full.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
