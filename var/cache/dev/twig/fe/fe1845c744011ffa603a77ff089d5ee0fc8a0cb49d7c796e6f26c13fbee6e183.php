<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a6630f94148e191d33060fe1dbbbde73644eea6462f869b6ccd11271a2cfdc4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_b9c8120b2ae5fa5b04cabdcdf4bb0e9d7cd1c479c030bbf894cd721da42ce4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c8120b2ae5fa5b04cabdcdf4bb0e9d7cd1c479c030bbf894cd721da42ce4c9->enter($__internal_b9c8120b2ae5fa5b04cabdcdf4bb0e9d7cd1c479c030bbf894cd721da42ce4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fffddfc631c5793ad090e3f4980a14dbf03afa685516d8935cf2130e064b9b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffddfc631c5793ad090e3f4980a14dbf03afa685516d8935cf2130e064b9b9d->enter($__internal_fffddfc631c5793ad090e3f4980a14dbf03afa685516d8935cf2130e064b9b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c8120b2ae5fa5b04cabdcdf4bb0e9d7cd1c479c030bbf894cd721da42ce4c9->leave($__internal_b9c8120b2ae5fa5b04cabdcdf4bb0e9d7cd1c479c030bbf894cd721da42ce4c9_prof);

        
        $__internal_fffddfc631c5793ad090e3f4980a14dbf03afa685516d8935cf2130e064b9b9d->leave($__internal_fffddfc631c5793ad090e3f4980a14dbf03afa685516d8935cf2130e064b9b9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f520269f57dc23b02156f1b9dc69c3d7a57906d11b7ed7e7a9f18ff90b13c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f520269f57dc23b02156f1b9dc69c3d7a57906d11b7ed7e7a9f18ff90b13c50->enter($__internal_2f520269f57dc23b02156f1b9dc69c3d7a57906d11b7ed7e7a9f18ff90b13c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22e151d65317cde01250ab08e86838b9650825056738097455fd042f06b2f160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e151d65317cde01250ab08e86838b9650825056738097455fd042f06b2f160->enter($__internal_22e151d65317cde01250ab08e86838b9650825056738097455fd042f06b2f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_22e151d65317cde01250ab08e86838b9650825056738097455fd042f06b2f160->leave($__internal_22e151d65317cde01250ab08e86838b9650825056738097455fd042f06b2f160_prof);

        
        $__internal_2f520269f57dc23b02156f1b9dc69c3d7a57906d11b7ed7e7a9f18ff90b13c50->leave($__internal_2f520269f57dc23b02156f1b9dc69c3d7a57906d11b7ed7e7a9f18ff90b13c50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1bd88bafb7e02906597eccb547e914400769955c9a4c09d7561d48044e5d056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bd88bafb7e02906597eccb547e914400769955c9a4c09d7561d48044e5d056->enter($__internal_f1bd88bafb7e02906597eccb547e914400769955c9a4c09d7561d48044e5d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85f79cd16809156b97db275da5a3ef4d587c6939e76f7f8751a3c53c51a5fc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f79cd16809156b97db275da5a3ef4d587c6939e76f7f8751a3c53c51a5fc95->enter($__internal_85f79cd16809156b97db275da5a3ef4d587c6939e76f7f8751a3c53c51a5fc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85f79cd16809156b97db275da5a3ef4d587c6939e76f7f8751a3c53c51a5fc95->leave($__internal_85f79cd16809156b97db275da5a3ef4d587c6939e76f7f8751a3c53c51a5fc95_prof);

        
        $__internal_f1bd88bafb7e02906597eccb547e914400769955c9a4c09d7561d48044e5d056->leave($__internal_f1bd88bafb7e02906597eccb547e914400769955c9a4c09d7561d48044e5d056_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
