<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4734e95caa41ad6c2e4528eb921a955ad68f6418ae0c9a5acc2a8bb3c001d11b extends Twig_Template
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
        $__internal_23e92a15657051fef66fb8ab6c521afceaafd083eae78953fb69c0b8045e5c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e92a15657051fef66fb8ab6c521afceaafd083eae78953fb69c0b8045e5c62->enter($__internal_23e92a15657051fef66fb8ab6c521afceaafd083eae78953fb69c0b8045e5c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ed686d6e03b983b36a85f973ebfdcd57f59093db0149092715277c5f0b726561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed686d6e03b983b36a85f973ebfdcd57f59093db0149092715277c5f0b726561->enter($__internal_ed686d6e03b983b36a85f973ebfdcd57f59093db0149092715277c5f0b726561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e92a15657051fef66fb8ab6c521afceaafd083eae78953fb69c0b8045e5c62->leave($__internal_23e92a15657051fef66fb8ab6c521afceaafd083eae78953fb69c0b8045e5c62_prof);

        
        $__internal_ed686d6e03b983b36a85f973ebfdcd57f59093db0149092715277c5f0b726561->leave($__internal_ed686d6e03b983b36a85f973ebfdcd57f59093db0149092715277c5f0b726561_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4531b0dd85a895d6d34bb704d18ed5661ac3c5a68f284748030dc06f51bf097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4531b0dd85a895d6d34bb704d18ed5661ac3c5a68f284748030dc06f51bf097->enter($__internal_e4531b0dd85a895d6d34bb704d18ed5661ac3c5a68f284748030dc06f51bf097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7bfda27b5c277b7a44418847f65359a663230b84dac784471342dd69f24a772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bfda27b5c277b7a44418847f65359a663230b84dac784471342dd69f24a772->enter($__internal_f7bfda27b5c277b7a44418847f65359a663230b84dac784471342dd69f24a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f7bfda27b5c277b7a44418847f65359a663230b84dac784471342dd69f24a772->leave($__internal_f7bfda27b5c277b7a44418847f65359a663230b84dac784471342dd69f24a772_prof);

        
        $__internal_e4531b0dd85a895d6d34bb704d18ed5661ac3c5a68f284748030dc06f51bf097->leave($__internal_e4531b0dd85a895d6d34bb704d18ed5661ac3c5a68f284748030dc06f51bf097_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
