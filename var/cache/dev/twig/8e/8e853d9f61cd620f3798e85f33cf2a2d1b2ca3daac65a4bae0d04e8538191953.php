<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fb0de86d0342a7e4fa71aa5d0aef669365a0e79024462861cd8607c964524e66 extends Twig_Template
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
        $__internal_64547320c8d24622426af2724fc2fb06ab7321db02fb6fa66c42dc2b4228c574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64547320c8d24622426af2724fc2fb06ab7321db02fb6fa66c42dc2b4228c574->enter($__internal_64547320c8d24622426af2724fc2fb06ab7321db02fb6fa66c42dc2b4228c574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_88df8735b0de5ba6c897b0859569505099fcf6fb96da1e1bf06eb199c516c1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88df8735b0de5ba6c897b0859569505099fcf6fb96da1e1bf06eb199c516c1bf->enter($__internal_88df8735b0de5ba6c897b0859569505099fcf6fb96da1e1bf06eb199c516c1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64547320c8d24622426af2724fc2fb06ab7321db02fb6fa66c42dc2b4228c574->leave($__internal_64547320c8d24622426af2724fc2fb06ab7321db02fb6fa66c42dc2b4228c574_prof);

        
        $__internal_88df8735b0de5ba6c897b0859569505099fcf6fb96da1e1bf06eb199c516c1bf->leave($__internal_88df8735b0de5ba6c897b0859569505099fcf6fb96da1e1bf06eb199c516c1bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77166799e19489b9d4662ff159a7b39c224a461d61ebaef367257d3dc1f045f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77166799e19489b9d4662ff159a7b39c224a461d61ebaef367257d3dc1f045f2->enter($__internal_77166799e19489b9d4662ff159a7b39c224a461d61ebaef367257d3dc1f045f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc9e3f7e907723bdb4168d3a6d4a2e8f8ae2357a58437b98b42fd38b22d205fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9e3f7e907723bdb4168d3a6d4a2e8f8ae2357a58437b98b42fd38b22d205fb->enter($__internal_cc9e3f7e907723bdb4168d3a6d4a2e8f8ae2357a58437b98b42fd38b22d205fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cc9e3f7e907723bdb4168d3a6d4a2e8f8ae2357a58437b98b42fd38b22d205fb->leave($__internal_cc9e3f7e907723bdb4168d3a6d4a2e8f8ae2357a58437b98b42fd38b22d205fb_prof);

        
        $__internal_77166799e19489b9d4662ff159a7b39c224a461d61ebaef367257d3dc1f045f2->leave($__internal_77166799e19489b9d4662ff159a7b39c224a461d61ebaef367257d3dc1f045f2_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
