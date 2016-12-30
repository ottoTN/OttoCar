<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_429c0eafe9c9d416e9c6a036a9f15c6c549156843374792cb2ec8017c438dbdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430e5b5df956ab1afdba3673d491c057874d053406660f4ac5e9ba706038f9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430e5b5df956ab1afdba3673d491c057874d053406660f4ac5e9ba706038f9a3->enter($__internal_430e5b5df956ab1afdba3673d491c057874d053406660f4ac5e9ba706038f9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b2288ada50ace1aa02ef0e91bd41e5e325c0d015feb9493a72337dc828092129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2288ada50ace1aa02ef0e91bd41e5e325c0d015feb9493a72337dc828092129->enter($__internal_b2288ada50ace1aa02ef0e91bd41e5e325c0d015feb9493a72337dc828092129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430e5b5df956ab1afdba3673d491c057874d053406660f4ac5e9ba706038f9a3->leave($__internal_430e5b5df956ab1afdba3673d491c057874d053406660f4ac5e9ba706038f9a3_prof);

        
        $__internal_b2288ada50ace1aa02ef0e91bd41e5e325c0d015feb9493a72337dc828092129->leave($__internal_b2288ada50ace1aa02ef0e91bd41e5e325c0d015feb9493a72337dc828092129_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0feba2a7b5df47e7bb3a838ba2f8ab73564caa7497f1216fda1c295cab7307fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0feba2a7b5df47e7bb3a838ba2f8ab73564caa7497f1216fda1c295cab7307fe->enter($__internal_0feba2a7b5df47e7bb3a838ba2f8ab73564caa7497f1216fda1c295cab7307fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08711c380637a6466d15633e22815ca060a0d90ac6b741e64d8752e67d5b4d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08711c380637a6466d15633e22815ca060a0d90ac6b741e64d8752e67d5b4d25->enter($__internal_08711c380637a6466d15633e22815ca060a0d90ac6b741e64d8752e67d5b4d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_08711c380637a6466d15633e22815ca060a0d90ac6b741e64d8752e67d5b4d25->leave($__internal_08711c380637a6466d15633e22815ca060a0d90ac6b741e64d8752e67d5b4d25_prof);

        
        $__internal_0feba2a7b5df47e7bb3a838ba2f8ab73564caa7497f1216fda1c295cab7307fe->leave($__internal_0feba2a7b5df47e7bb3a838ba2f8ab73564caa7497f1216fda1c295cab7307fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
