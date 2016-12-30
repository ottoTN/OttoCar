<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_63984cd2fe48921b07b043bf25ab72a732c76b36d0df1442811fb8acdba4b0f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e99e898e85d918d7e872f27bafef915223333fcffec2732fc415d9958072c31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99e898e85d918d7e872f27bafef915223333fcffec2732fc415d9958072c31d->enter($__internal_e99e898e85d918d7e872f27bafef915223333fcffec2732fc415d9958072c31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3a6a29022b67d34a16c3862b4c9b9701ee6d6a6e351d55a30d006d7bef7ae84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6a29022b67d34a16c3862b4c9b9701ee6d6a6e351d55a30d006d7bef7ae84b->enter($__internal_3a6a29022b67d34a16c3862b4c9b9701ee6d6a6e351d55a30d006d7bef7ae84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99e898e85d918d7e872f27bafef915223333fcffec2732fc415d9958072c31d->leave($__internal_e99e898e85d918d7e872f27bafef915223333fcffec2732fc415d9958072c31d_prof);

        
        $__internal_3a6a29022b67d34a16c3862b4c9b9701ee6d6a6e351d55a30d006d7bef7ae84b->leave($__internal_3a6a29022b67d34a16c3862b4c9b9701ee6d6a6e351d55a30d006d7bef7ae84b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c73a444e94a41b900fdf4487a3c9603b171bc1cb88422ae98bf148711d0fcd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73a444e94a41b900fdf4487a3c9603b171bc1cb88422ae98bf148711d0fcd2f->enter($__internal_c73a444e94a41b900fdf4487a3c9603b171bc1cb88422ae98bf148711d0fcd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3524258843d1c224d18927435e74a52b699b666263697bbb00087f6497392b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3524258843d1c224d18927435e74a52b699b666263697bbb00087f6497392b6d->enter($__internal_3524258843d1c224d18927435e74a52b699b666263697bbb00087f6497392b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3524258843d1c224d18927435e74a52b699b666263697bbb00087f6497392b6d->leave($__internal_3524258843d1c224d18927435e74a52b699b666263697bbb00087f6497392b6d_prof);

        
        $__internal_c73a444e94a41b900fdf4487a3c9603b171bc1cb88422ae98bf148711d0fcd2f->leave($__internal_c73a444e94a41b900fdf4487a3c9603b171bc1cb88422ae98bf148711d0fcd2f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9519339051487b520c3dff4461d8b8c8ad648c24009460ebe668fa2189532d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9519339051487b520c3dff4461d8b8c8ad648c24009460ebe668fa2189532d5->enter($__internal_e9519339051487b520c3dff4461d8b8c8ad648c24009460ebe668fa2189532d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a71b984092040794a87744f055c9670f118c87a90d508a52289c19dcf959ea84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71b984092040794a87744f055c9670f118c87a90d508a52289c19dcf959ea84->enter($__internal_a71b984092040794a87744f055c9670f118c87a90d508a52289c19dcf959ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a71b984092040794a87744f055c9670f118c87a90d508a52289c19dcf959ea84->leave($__internal_a71b984092040794a87744f055c9670f118c87a90d508a52289c19dcf959ea84_prof);

        
        $__internal_e9519339051487b520c3dff4461d8b8c8ad648c24009460ebe668fa2189532d5->leave($__internal_e9519339051487b520c3dff4461d8b8c8ad648c24009460ebe668fa2189532d5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_92bcdb0ad9a0ce36a92da4afa6211d15ca9d303925a1c3245b76b06f11f9ec85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bcdb0ad9a0ce36a92da4afa6211d15ca9d303925a1c3245b76b06f11f9ec85->enter($__internal_92bcdb0ad9a0ce36a92da4afa6211d15ca9d303925a1c3245b76b06f11f9ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fae72fbe562bc7f92e1686cf44637679e9caaa1a7f924e3e082f072ef3e731cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae72fbe562bc7f92e1686cf44637679e9caaa1a7f924e3e082f072ef3e731cc->enter($__internal_fae72fbe562bc7f92e1686cf44637679e9caaa1a7f924e3e082f072ef3e731cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fae72fbe562bc7f92e1686cf44637679e9caaa1a7f924e3e082f072ef3e731cc->leave($__internal_fae72fbe562bc7f92e1686cf44637679e9caaa1a7f924e3e082f072ef3e731cc_prof);

        
        $__internal_92bcdb0ad9a0ce36a92da4afa6211d15ca9d303925a1c3245b76b06f11f9ec85->leave($__internal_92bcdb0ad9a0ce36a92da4afa6211d15ca9d303925a1c3245b76b06f11f9ec85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
