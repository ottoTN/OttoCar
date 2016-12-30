<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5f2bc20443b4bc48c44c6dc9d723ebbc5ddcdf7e9b683848a7a3a5e3d20978b extends Twig_Template
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
        $__internal_a2c6d6fa5d821ab261f0287b02b5cd3aaa8ac7eec36bc65ed2a9ed641453b9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c6d6fa5d821ab261f0287b02b5cd3aaa8ac7eec36bc65ed2a9ed641453b9b2->enter($__internal_a2c6d6fa5d821ab261f0287b02b5cd3aaa8ac7eec36bc65ed2a9ed641453b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_85d6fe7ae0d1ea7201938b35a816ac7873e348d9641be725001fb7ac031b0581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d6fe7ae0d1ea7201938b35a816ac7873e348d9641be725001fb7ac031b0581->enter($__internal_85d6fe7ae0d1ea7201938b35a816ac7873e348d9641be725001fb7ac031b0581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c6d6fa5d821ab261f0287b02b5cd3aaa8ac7eec36bc65ed2a9ed641453b9b2->leave($__internal_a2c6d6fa5d821ab261f0287b02b5cd3aaa8ac7eec36bc65ed2a9ed641453b9b2_prof);

        
        $__internal_85d6fe7ae0d1ea7201938b35a816ac7873e348d9641be725001fb7ac031b0581->leave($__internal_85d6fe7ae0d1ea7201938b35a816ac7873e348d9641be725001fb7ac031b0581_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d0545da02ffbf1561139d272702118345f33ec702e11740c1ea42e31e278512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0545da02ffbf1561139d272702118345f33ec702e11740c1ea42e31e278512->enter($__internal_3d0545da02ffbf1561139d272702118345f33ec702e11740c1ea42e31e278512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a67c99ab0a5a980ba68508fec49549dcd48c5330a79ab085d72f57f4e9320d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c99ab0a5a980ba68508fec49549dcd48c5330a79ab085d72f57f4e9320d18->enter($__internal_a67c99ab0a5a980ba68508fec49549dcd48c5330a79ab085d72f57f4e9320d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a67c99ab0a5a980ba68508fec49549dcd48c5330a79ab085d72f57f4e9320d18->leave($__internal_a67c99ab0a5a980ba68508fec49549dcd48c5330a79ab085d72f57f4e9320d18_prof);

        
        $__internal_3d0545da02ffbf1561139d272702118345f33ec702e11740c1ea42e31e278512->leave($__internal_3d0545da02ffbf1561139d272702118345f33ec702e11740c1ea42e31e278512_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2095fca875ca578afd457eff46c4995d13b0a2f64c6d972916b98a599103314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2095fca875ca578afd457eff46c4995d13b0a2f64c6d972916b98a599103314->enter($__internal_a2095fca875ca578afd457eff46c4995d13b0a2f64c6d972916b98a599103314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7911ce303e45f195c162aee0e1fcca272303cd77f46958575aa09e2a753bf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7911ce303e45f195c162aee0e1fcca272303cd77f46958575aa09e2a753bf11->enter($__internal_f7911ce303e45f195c162aee0e1fcca272303cd77f46958575aa09e2a753bf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7911ce303e45f195c162aee0e1fcca272303cd77f46958575aa09e2a753bf11->leave($__internal_f7911ce303e45f195c162aee0e1fcca272303cd77f46958575aa09e2a753bf11_prof);

        
        $__internal_a2095fca875ca578afd457eff46c4995d13b0a2f64c6d972916b98a599103314->leave($__internal_a2095fca875ca578afd457eff46c4995d13b0a2f64c6d972916b98a599103314_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fe3bc90dd3a70921212f9a1b29261d4c2873f10ea0fa2464b10463708370cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe3bc90dd3a70921212f9a1b29261d4c2873f10ea0fa2464b10463708370cda->enter($__internal_5fe3bc90dd3a70921212f9a1b29261d4c2873f10ea0fa2464b10463708370cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c48bbffd3b4f182fabc04fa00bbb8a949c7bb515921d5693c5cea48dc6918d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c48bbffd3b4f182fabc04fa00bbb8a949c7bb515921d5693c5cea48dc6918d7->enter($__internal_1c48bbffd3b4f182fabc04fa00bbb8a949c7bb515921d5693c5cea48dc6918d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1c48bbffd3b4f182fabc04fa00bbb8a949c7bb515921d5693c5cea48dc6918d7->leave($__internal_1c48bbffd3b4f182fabc04fa00bbb8a949c7bb515921d5693c5cea48dc6918d7_prof);

        
        $__internal_5fe3bc90dd3a70921212f9a1b29261d4c2873f10ea0fa2464b10463708370cda->leave($__internal_5fe3bc90dd3a70921212f9a1b29261d4c2873f10ea0fa2464b10463708370cda_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
