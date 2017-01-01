<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_918e93df8faaaac66689bee186a0a4e856968acb8878cfbc71a9b5c5610fa8e4 extends Twig_Template
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
        $__internal_86b0e28bf26c6b4f02b8f451762856ba1282b1f6416f5bab3571dee1e75c7def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b0e28bf26c6b4f02b8f451762856ba1282b1f6416f5bab3571dee1e75c7def->enter($__internal_86b0e28bf26c6b4f02b8f451762856ba1282b1f6416f5bab3571dee1e75c7def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8c47736a208f02beb5edcd8f49c7c53b392df41b1d2a54d26f0747cf6e852002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c47736a208f02beb5edcd8f49c7c53b392df41b1d2a54d26f0747cf6e852002->enter($__internal_8c47736a208f02beb5edcd8f49c7c53b392df41b1d2a54d26f0747cf6e852002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b0e28bf26c6b4f02b8f451762856ba1282b1f6416f5bab3571dee1e75c7def->leave($__internal_86b0e28bf26c6b4f02b8f451762856ba1282b1f6416f5bab3571dee1e75c7def_prof);

        
        $__internal_8c47736a208f02beb5edcd8f49c7c53b392df41b1d2a54d26f0747cf6e852002->leave($__internal_8c47736a208f02beb5edcd8f49c7c53b392df41b1d2a54d26f0747cf6e852002_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c30457ff245ee4233a2929ac8c608c5bdf58a36db28ec11c14c3dc6b931a9c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30457ff245ee4233a2929ac8c608c5bdf58a36db28ec11c14c3dc6b931a9c92->enter($__internal_c30457ff245ee4233a2929ac8c608c5bdf58a36db28ec11c14c3dc6b931a9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e04c11e5030b11c37bb99e7262fa731dca93f223cb70447d3cf8e178b0f84ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04c11e5030b11c37bb99e7262fa731dca93f223cb70447d3cf8e178b0f84ceb->enter($__internal_e04c11e5030b11c37bb99e7262fa731dca93f223cb70447d3cf8e178b0f84ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e04c11e5030b11c37bb99e7262fa731dca93f223cb70447d3cf8e178b0f84ceb->leave($__internal_e04c11e5030b11c37bb99e7262fa731dca93f223cb70447d3cf8e178b0f84ceb_prof);

        
        $__internal_c30457ff245ee4233a2929ac8c608c5bdf58a36db28ec11c14c3dc6b931a9c92->leave($__internal_c30457ff245ee4233a2929ac8c608c5bdf58a36db28ec11c14c3dc6b931a9c92_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
