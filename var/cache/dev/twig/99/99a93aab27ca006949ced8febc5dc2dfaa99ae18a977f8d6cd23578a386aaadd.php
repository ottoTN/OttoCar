<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_44cd5b071df179f4108fd576bb23aa113c847a04210895b9cd40583dbdb6bf85 extends Twig_Template
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
        $__internal_e422d3f1c00d1796657e89b7ca83066ffea91b5e48b2aa44a46209c372dd62c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e422d3f1c00d1796657e89b7ca83066ffea91b5e48b2aa44a46209c372dd62c6->enter($__internal_e422d3f1c00d1796657e89b7ca83066ffea91b5e48b2aa44a46209c372dd62c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_53ca037790bc6b1f8d4d5b03d3c94394715304ab10af5cb07f7cdb1bfb22f180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ca037790bc6b1f8d4d5b03d3c94394715304ab10af5cb07f7cdb1bfb22f180->enter($__internal_53ca037790bc6b1f8d4d5b03d3c94394715304ab10af5cb07f7cdb1bfb22f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e422d3f1c00d1796657e89b7ca83066ffea91b5e48b2aa44a46209c372dd62c6->leave($__internal_e422d3f1c00d1796657e89b7ca83066ffea91b5e48b2aa44a46209c372dd62c6_prof);

        
        $__internal_53ca037790bc6b1f8d4d5b03d3c94394715304ab10af5cb07f7cdb1bfb22f180->leave($__internal_53ca037790bc6b1f8d4d5b03d3c94394715304ab10af5cb07f7cdb1bfb22f180_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72e23ecdc194d44a9505366f80bcc93b8a19001b77ed098491ef5654ac033dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e23ecdc194d44a9505366f80bcc93b8a19001b77ed098491ef5654ac033dcf->enter($__internal_72e23ecdc194d44a9505366f80bcc93b8a19001b77ed098491ef5654ac033dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e511dfdb5d9d0ac34f9f4be9f22a567ca99c0c243afca66cb5c263cb0feab13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e511dfdb5d9d0ac34f9f4be9f22a567ca99c0c243afca66cb5c263cb0feab13d->enter($__internal_e511dfdb5d9d0ac34f9f4be9f22a567ca99c0c243afca66cb5c263cb0feab13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e511dfdb5d9d0ac34f9f4be9f22a567ca99c0c243afca66cb5c263cb0feab13d->leave($__internal_e511dfdb5d9d0ac34f9f4be9f22a567ca99c0c243afca66cb5c263cb0feab13d_prof);

        
        $__internal_72e23ecdc194d44a9505366f80bcc93b8a19001b77ed098491ef5654ac033dcf->leave($__internal_72e23ecdc194d44a9505366f80bcc93b8a19001b77ed098491ef5654ac033dcf_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
