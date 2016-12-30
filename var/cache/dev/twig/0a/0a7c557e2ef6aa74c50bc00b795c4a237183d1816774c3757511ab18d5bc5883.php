<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7d7b3c0d2bd313d7c11684878a59bdbf628781d29e09160cb0415726066e4adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd89b0d7e8f5ff43b81f0dcc3fc012c12f9a9775f07e2c273788edb84bff9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd89b0d7e8f5ff43b81f0dcc3fc012c12f9a9775f07e2c273788edb84bff9ce->enter($__internal_ecd89b0d7e8f5ff43b81f0dcc3fc012c12f9a9775f07e2c273788edb84bff9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_05e4127bc4cacc917f77fdf4fff48de04af9f6bed419fc4cb580a70548431042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e4127bc4cacc917f77fdf4fff48de04af9f6bed419fc4cb580a70548431042->enter($__internal_05e4127bc4cacc917f77fdf4fff48de04af9f6bed419fc4cb580a70548431042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd89b0d7e8f5ff43b81f0dcc3fc012c12f9a9775f07e2c273788edb84bff9ce->leave($__internal_ecd89b0d7e8f5ff43b81f0dcc3fc012c12f9a9775f07e2c273788edb84bff9ce_prof);

        
        $__internal_05e4127bc4cacc917f77fdf4fff48de04af9f6bed419fc4cb580a70548431042->leave($__internal_05e4127bc4cacc917f77fdf4fff48de04af9f6bed419fc4cb580a70548431042_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_347c414a5b342d8f1e135730aa429f25b2fd66228e250cd07d109c1df467eff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347c414a5b342d8f1e135730aa429f25b2fd66228e250cd07d109c1df467eff0->enter($__internal_347c414a5b342d8f1e135730aa429f25b2fd66228e250cd07d109c1df467eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6acc50440f2aac905ea66db5e7630ac9ac69470d68bd10f14c115f56ddea9076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acc50440f2aac905ea66db5e7630ac9ac69470d68bd10f14c115f56ddea9076->enter($__internal_6acc50440f2aac905ea66db5e7630ac9ac69470d68bd10f14c115f56ddea9076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6acc50440f2aac905ea66db5e7630ac9ac69470d68bd10f14c115f56ddea9076->leave($__internal_6acc50440f2aac905ea66db5e7630ac9ac69470d68bd10f14c115f56ddea9076_prof);

        
        $__internal_347c414a5b342d8f1e135730aa429f25b2fd66228e250cd07d109c1df467eff0->leave($__internal_347c414a5b342d8f1e135730aa429f25b2fd66228e250cd07d109c1df467eff0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3394b6695d6cd6948a3f928af0c8d40df4122b48a11e0b38ca569d5b8bf1781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3394b6695d6cd6948a3f928af0c8d40df4122b48a11e0b38ca569d5b8bf1781->enter($__internal_f3394b6695d6cd6948a3f928af0c8d40df4122b48a11e0b38ca569d5b8bf1781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df476741bcb50c0e5a4ae25215c76a85add92ff33f65b52713978bd0274a109f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df476741bcb50c0e5a4ae25215c76a85add92ff33f65b52713978bd0274a109f->enter($__internal_df476741bcb50c0e5a4ae25215c76a85add92ff33f65b52713978bd0274a109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df476741bcb50c0e5a4ae25215c76a85add92ff33f65b52713978bd0274a109f->leave($__internal_df476741bcb50c0e5a4ae25215c76a85add92ff33f65b52713978bd0274a109f_prof);

        
        $__internal_f3394b6695d6cd6948a3f928af0c8d40df4122b48a11e0b38ca569d5b8bf1781->leave($__internal_f3394b6695d6cd6948a3f928af0c8d40df4122b48a11e0b38ca569d5b8bf1781_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6875e394c73aed38c0da1cf1d6a89839dbd6e0f9fc5031b52659e8777648b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6875e394c73aed38c0da1cf1d6a89839dbd6e0f9fc5031b52659e8777648b78->enter($__internal_a6875e394c73aed38c0da1cf1d6a89839dbd6e0f9fc5031b52659e8777648b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5643a95ebb886304707815606eb5bd7dc946df1b83e1ada33ea89c9c6c712c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5643a95ebb886304707815606eb5bd7dc946df1b83e1ada33ea89c9c6c712c6a->enter($__internal_5643a95ebb886304707815606eb5bd7dc946df1b83e1ada33ea89c9c6c712c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5643a95ebb886304707815606eb5bd7dc946df1b83e1ada33ea89c9c6c712c6a->leave($__internal_5643a95ebb886304707815606eb5bd7dc946df1b83e1ada33ea89c9c6c712c6a_prof);

        
        $__internal_a6875e394c73aed38c0da1cf1d6a89839dbd6e0f9fc5031b52659e8777648b78->leave($__internal_a6875e394c73aed38c0da1cf1d6a89839dbd6e0f9fc5031b52659e8777648b78_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
