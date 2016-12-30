<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6e73ceb1d45cf0c5aedbd292d3313a0fb26b2fc0850cbbc7b241b0c0b49968ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db4f488b207b6c1d95c8b63acf88f9d7c22a5a1864edda68363d7a32c2e9f403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4f488b207b6c1d95c8b63acf88f9d7c22a5a1864edda68363d7a32c2e9f403->enter($__internal_db4f488b207b6c1d95c8b63acf88f9d7c22a5a1864edda68363d7a32c2e9f403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_697eb850cc58d2538f331053d5d102d95d2db62353dbae5da71f6951536a6e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697eb850cc58d2538f331053d5d102d95d2db62353dbae5da71f6951536a6e26->enter($__internal_697eb850cc58d2538f331053d5d102d95d2db62353dbae5da71f6951536a6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4f488b207b6c1d95c8b63acf88f9d7c22a5a1864edda68363d7a32c2e9f403->leave($__internal_db4f488b207b6c1d95c8b63acf88f9d7c22a5a1864edda68363d7a32c2e9f403_prof);

        
        $__internal_697eb850cc58d2538f331053d5d102d95d2db62353dbae5da71f6951536a6e26->leave($__internal_697eb850cc58d2538f331053d5d102d95d2db62353dbae5da71f6951536a6e26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83b463bc972fd7d532b7beb42c3b7372fadae2766eae5e7483ec4162748367bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b463bc972fd7d532b7beb42c3b7372fadae2766eae5e7483ec4162748367bb->enter($__internal_83b463bc972fd7d532b7beb42c3b7372fadae2766eae5e7483ec4162748367bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb774a0902fd067410e909ffbc68eb6e32e5b2a4efe66941bbbdd4031c9d2421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb774a0902fd067410e909ffbc68eb6e32e5b2a4efe66941bbbdd4031c9d2421->enter($__internal_cb774a0902fd067410e909ffbc68eb6e32e5b2a4efe66941bbbdd4031c9d2421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cb774a0902fd067410e909ffbc68eb6e32e5b2a4efe66941bbbdd4031c9d2421->leave($__internal_cb774a0902fd067410e909ffbc68eb6e32e5b2a4efe66941bbbdd4031c9d2421_prof);

        
        $__internal_83b463bc972fd7d532b7beb42c3b7372fadae2766eae5e7483ec4162748367bb->leave($__internal_83b463bc972fd7d532b7beb42c3b7372fadae2766eae5e7483ec4162748367bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b12fca298da33ccf041891105b255aff0f8ccedc69c2c3026a39f6d8aa4eaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b12fca298da33ccf041891105b255aff0f8ccedc69c2c3026a39f6d8aa4eaec->enter($__internal_7b12fca298da33ccf041891105b255aff0f8ccedc69c2c3026a39f6d8aa4eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03fd7948744e966f069f669988bfcf9949ea1c45a9d49e0d6d86fbf5021da647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fd7948744e966f069f669988bfcf9949ea1c45a9d49e0d6d86fbf5021da647->enter($__internal_03fd7948744e966f069f669988bfcf9949ea1c45a9d49e0d6d86fbf5021da647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_03fd7948744e966f069f669988bfcf9949ea1c45a9d49e0d6d86fbf5021da647->leave($__internal_03fd7948744e966f069f669988bfcf9949ea1c45a9d49e0d6d86fbf5021da647_prof);

        
        $__internal_7b12fca298da33ccf041891105b255aff0f8ccedc69c2c3026a39f6d8aa4eaec->leave($__internal_7b12fca298da33ccf041891105b255aff0f8ccedc69c2c3026a39f6d8aa4eaec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
