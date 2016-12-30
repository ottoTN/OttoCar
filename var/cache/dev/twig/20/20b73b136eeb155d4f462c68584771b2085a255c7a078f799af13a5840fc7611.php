<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b97bb56b002b3bd116e9b2133557bb7e7328b9bac0da3a135fd9a5e1c2755924 extends Twig_Template
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
        $__internal_fba9f14493145d1db68524bce2f73bb2d4b68b525ec2e99b639ee394807b61e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba9f14493145d1db68524bce2f73bb2d4b68b525ec2e99b639ee394807b61e7->enter($__internal_fba9f14493145d1db68524bce2f73bb2d4b68b525ec2e99b639ee394807b61e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_82fb91d8be11f6c51a8ec7c5f08e0db95ef4d7176668556d5e4ecb156d9828ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fb91d8be11f6c51a8ec7c5f08e0db95ef4d7176668556d5e4ecb156d9828ed->enter($__internal_82fb91d8be11f6c51a8ec7c5f08e0db95ef4d7176668556d5e4ecb156d9828ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fba9f14493145d1db68524bce2f73bb2d4b68b525ec2e99b639ee394807b61e7->leave($__internal_fba9f14493145d1db68524bce2f73bb2d4b68b525ec2e99b639ee394807b61e7_prof);

        
        $__internal_82fb91d8be11f6c51a8ec7c5f08e0db95ef4d7176668556d5e4ecb156d9828ed->leave($__internal_82fb91d8be11f6c51a8ec7c5f08e0db95ef4d7176668556d5e4ecb156d9828ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91ab7b5aa425de19e31047840a9959867ce9aab5eff51b97d7ec04b6e29af0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ab7b5aa425de19e31047840a9959867ce9aab5eff51b97d7ec04b6e29af0c2->enter($__internal_91ab7b5aa425de19e31047840a9959867ce9aab5eff51b97d7ec04b6e29af0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67362ae322574b59f91865be689214de8a01e33b2b3dfd76fe544de48dfee749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67362ae322574b59f91865be689214de8a01e33b2b3dfd76fe544de48dfee749->enter($__internal_67362ae322574b59f91865be689214de8a01e33b2b3dfd76fe544de48dfee749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_67362ae322574b59f91865be689214de8a01e33b2b3dfd76fe544de48dfee749->leave($__internal_67362ae322574b59f91865be689214de8a01e33b2b3dfd76fe544de48dfee749_prof);

        
        $__internal_91ab7b5aa425de19e31047840a9959867ce9aab5eff51b97d7ec04b6e29af0c2->leave($__internal_91ab7b5aa425de19e31047840a9959867ce9aab5eff51b97d7ec04b6e29af0c2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cfd2e75c96a3bc018d3b0c79dae644497e423ef46f1aa1084e6c636ad54a32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfd2e75c96a3bc018d3b0c79dae644497e423ef46f1aa1084e6c636ad54a32d->enter($__internal_9cfd2e75c96a3bc018d3b0c79dae644497e423ef46f1aa1084e6c636ad54a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a1376317be589ece3b94ce3d763da987f557e4101be80e59f4519dcb2e346b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1376317be589ece3b94ce3d763da987f557e4101be80e59f4519dcb2e346b7->enter($__internal_7a1376317be589ece3b94ce3d763da987f557e4101be80e59f4519dcb2e346b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a1376317be589ece3b94ce3d763da987f557e4101be80e59f4519dcb2e346b7->leave($__internal_7a1376317be589ece3b94ce3d763da987f557e4101be80e59f4519dcb2e346b7_prof);

        
        $__internal_9cfd2e75c96a3bc018d3b0c79dae644497e423ef46f1aa1084e6c636ad54a32d->leave($__internal_9cfd2e75c96a3bc018d3b0c79dae644497e423ef46f1aa1084e6c636ad54a32d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ca628b112b40600ae864dd4e4becd489be5f6d2c5164b80e4ebf7eb5fb5dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ca628b112b40600ae864dd4e4becd489be5f6d2c5164b80e4ebf7eb5fb5dba->enter($__internal_e7ca628b112b40600ae864dd4e4becd489be5f6d2c5164b80e4ebf7eb5fb5dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89544e81d3d05ba0ca83e05cf611f98dd69c31e779579f885ef4240705b9f5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89544e81d3d05ba0ca83e05cf611f98dd69c31e779579f885ef4240705b9f5f8->enter($__internal_89544e81d3d05ba0ca83e05cf611f98dd69c31e779579f885ef4240705b9f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_89544e81d3d05ba0ca83e05cf611f98dd69c31e779579f885ef4240705b9f5f8->leave($__internal_89544e81d3d05ba0ca83e05cf611f98dd69c31e779579f885ef4240705b9f5f8_prof);

        
        $__internal_e7ca628b112b40600ae864dd4e4becd489be5f6d2c5164b80e4ebf7eb5fb5dba->leave($__internal_e7ca628b112b40600ae864dd4e4becd489be5f6d2c5164b80e4ebf7eb5fb5dba_prof);

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
", "@Twig/Exception/exception_full.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
