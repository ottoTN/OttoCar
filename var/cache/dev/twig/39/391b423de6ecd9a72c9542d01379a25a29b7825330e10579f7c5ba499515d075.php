<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_1f3116818871ef15a847c19e5f85a546352830c2c258544e9576fa382595e35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_8044a0a1283318477d71df9cfbae323fc2a266f1981151db5418d1831dc2f39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8044a0a1283318477d71df9cfbae323fc2a266f1981151db5418d1831dc2f39d->enter($__internal_8044a0a1283318477d71df9cfbae323fc2a266f1981151db5418d1831dc2f39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_00405d4133a7951e2e1eff1e61c689edc674e0a3655b08e6b461a8f90ec33aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00405d4133a7951e2e1eff1e61c689edc674e0a3655b08e6b461a8f90ec33aa3->enter($__internal_00405d4133a7951e2e1eff1e61c689edc674e0a3655b08e6b461a8f90ec33aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8044a0a1283318477d71df9cfbae323fc2a266f1981151db5418d1831dc2f39d->leave($__internal_8044a0a1283318477d71df9cfbae323fc2a266f1981151db5418d1831dc2f39d_prof);

        
        $__internal_00405d4133a7951e2e1eff1e61c689edc674e0a3655b08e6b461a8f90ec33aa3->leave($__internal_00405d4133a7951e2e1eff1e61c689edc674e0a3655b08e6b461a8f90ec33aa3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb377948d0cce2a3e108cbd8b14666518e00963d098210ccfa21dca2f8af4b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb377948d0cce2a3e108cbd8b14666518e00963d098210ccfa21dca2f8af4b1d->enter($__internal_fb377948d0cce2a3e108cbd8b14666518e00963d098210ccfa21dca2f8af4b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_876638725c7a7d7f77822b47a4b279b3b2b127e71c81d037ba0e2a7e104f2969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876638725c7a7d7f77822b47a4b279b3b2b127e71c81d037ba0e2a7e104f2969->enter($__internal_876638725c7a7d7f77822b47a4b279b3b2b127e71c81d037ba0e2a7e104f2969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_876638725c7a7d7f77822b47a4b279b3b2b127e71c81d037ba0e2a7e104f2969->leave($__internal_876638725c7a7d7f77822b47a4b279b3b2b127e71c81d037ba0e2a7e104f2969_prof);

        
        $__internal_fb377948d0cce2a3e108cbd8b14666518e00963d098210ccfa21dca2f8af4b1d->leave($__internal_fb377948d0cce2a3e108cbd8b14666518e00963d098210ccfa21dca2f8af4b1d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
