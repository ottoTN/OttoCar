<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b553526b354de2cda227616d14659eb1779c7b14c1fdd6de03bef49654068f11 extends Twig_Template
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
        $__internal_30e0ca3e77fc50cc5aa8b6a10c9c1104bba83cceb669cb087f8a859e3a8f0ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e0ca3e77fc50cc5aa8b6a10c9c1104bba83cceb669cb087f8a859e3a8f0ce6->enter($__internal_30e0ca3e77fc50cc5aa8b6a10c9c1104bba83cceb669cb087f8a859e3a8f0ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_409125113620144f1304e6bb941d8c543dd80e509f4165349574b183454a03de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409125113620144f1304e6bb941d8c543dd80e509f4165349574b183454a03de->enter($__internal_409125113620144f1304e6bb941d8c543dd80e509f4165349574b183454a03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e0ca3e77fc50cc5aa8b6a10c9c1104bba83cceb669cb087f8a859e3a8f0ce6->leave($__internal_30e0ca3e77fc50cc5aa8b6a10c9c1104bba83cceb669cb087f8a859e3a8f0ce6_prof);

        
        $__internal_409125113620144f1304e6bb941d8c543dd80e509f4165349574b183454a03de->leave($__internal_409125113620144f1304e6bb941d8c543dd80e509f4165349574b183454a03de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_370de5ce14f484920e934cb96af1a6d8bade62ec0299b23b21a494a0705c8539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370de5ce14f484920e934cb96af1a6d8bade62ec0299b23b21a494a0705c8539->enter($__internal_370de5ce14f484920e934cb96af1a6d8bade62ec0299b23b21a494a0705c8539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_305b5cf34112756697ae0972e0d7019dcf71a6d56986ef57c049926b3a29d050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305b5cf34112756697ae0972e0d7019dcf71a6d56986ef57c049926b3a29d050->enter($__internal_305b5cf34112756697ae0972e0d7019dcf71a6d56986ef57c049926b3a29d050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_305b5cf34112756697ae0972e0d7019dcf71a6d56986ef57c049926b3a29d050->leave($__internal_305b5cf34112756697ae0972e0d7019dcf71a6d56986ef57c049926b3a29d050_prof);

        
        $__internal_370de5ce14f484920e934cb96af1a6d8bade62ec0299b23b21a494a0705c8539->leave($__internal_370de5ce14f484920e934cb96af1a6d8bade62ec0299b23b21a494a0705c8539_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
