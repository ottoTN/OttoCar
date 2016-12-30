<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4b4c3b1c3bae68d3ec89d7e2b14048a3aed66c52e8213a13212a5962c75632b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3c276c057de93f0e8af0284e959b8112fbb1e88253874f0bc5d5feb8a42d0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c276c057de93f0e8af0284e959b8112fbb1e88253874f0bc5d5feb8a42d0dd->enter($__internal_a3c276c057de93f0e8af0284e959b8112fbb1e88253874f0bc5d5feb8a42d0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_629f38256b3e3444e968832daef363ec98c9ebc551c9248e049f6f6d0a723fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629f38256b3e3444e968832daef363ec98c9ebc551c9248e049f6f6d0a723fb0->enter($__internal_629f38256b3e3444e968832daef363ec98c9ebc551c9248e049f6f6d0a723fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c276c057de93f0e8af0284e959b8112fbb1e88253874f0bc5d5feb8a42d0dd->leave($__internal_a3c276c057de93f0e8af0284e959b8112fbb1e88253874f0bc5d5feb8a42d0dd_prof);

        
        $__internal_629f38256b3e3444e968832daef363ec98c9ebc551c9248e049f6f6d0a723fb0->leave($__internal_629f38256b3e3444e968832daef363ec98c9ebc551c9248e049f6f6d0a723fb0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2cbd615a15e6596aead29e611d62744d326bfa2f8fcfe485a8533f12272a3fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbd615a15e6596aead29e611d62744d326bfa2f8fcfe485a8533f12272a3fb7->enter($__internal_2cbd615a15e6596aead29e611d62744d326bfa2f8fcfe485a8533f12272a3fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_040e0f6e06df8dd06eb5833ac77930d8931346a086a33ff5d62879c5a4cfcddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040e0f6e06df8dd06eb5833ac77930d8931346a086a33ff5d62879c5a4cfcddc->enter($__internal_040e0f6e06df8dd06eb5833ac77930d8931346a086a33ff5d62879c5a4cfcddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_040e0f6e06df8dd06eb5833ac77930d8931346a086a33ff5d62879c5a4cfcddc->leave($__internal_040e0f6e06df8dd06eb5833ac77930d8931346a086a33ff5d62879c5a4cfcddc_prof);

        
        $__internal_2cbd615a15e6596aead29e611d62744d326bfa2f8fcfe485a8533f12272a3fb7->leave($__internal_2cbd615a15e6596aead29e611d62744d326bfa2f8fcfe485a8533f12272a3fb7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5af251cad1e71b55b726d527a5fad5ac9a9c6519027aa8dc720aabfe22ace39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5af251cad1e71b55b726d527a5fad5ac9a9c6519027aa8dc720aabfe22ace39->enter($__internal_d5af251cad1e71b55b726d527a5fad5ac9a9c6519027aa8dc720aabfe22ace39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd0c4b263d8bcb7ee8204298004e42f8e8d5b00bf4c48549e5915bdf7e26e4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0c4b263d8bcb7ee8204298004e42f8e8d5b00bf4c48549e5915bdf7e26e4b6->enter($__internal_fd0c4b263d8bcb7ee8204298004e42f8e8d5b00bf4c48549e5915bdf7e26e4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fd0c4b263d8bcb7ee8204298004e42f8e8d5b00bf4c48549e5915bdf7e26e4b6->leave($__internal_fd0c4b263d8bcb7ee8204298004e42f8e8d5b00bf4c48549e5915bdf7e26e4b6_prof);

        
        $__internal_d5af251cad1e71b55b726d527a5fad5ac9a9c6519027aa8dc720aabfe22ace39->leave($__internal_d5af251cad1e71b55b726d527a5fad5ac9a9c6519027aa8dc720aabfe22ace39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
