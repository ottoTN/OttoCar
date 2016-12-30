<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_45fbd585d17f1d7b361ec06d018b5f546c81862b8e502a4f1bb5fe5afd18224a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e533b4b93957ca2d0ded715cea4e18a240276460b9a767bd828af98e3be9255a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e533b4b93957ca2d0ded715cea4e18a240276460b9a767bd828af98e3be9255a->enter($__internal_e533b4b93957ca2d0ded715cea4e18a240276460b9a767bd828af98e3be9255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cf4cb361cd9a816b63c3abd33f1f53d35db05b0b14e4e9589a2f6fb8c7a09d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4cb361cd9a816b63c3abd33f1f53d35db05b0b14e4e9589a2f6fb8c7a09d23->enter($__internal_cf4cb361cd9a816b63c3abd33f1f53d35db05b0b14e4e9589a2f6fb8c7a09d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e533b4b93957ca2d0ded715cea4e18a240276460b9a767bd828af98e3be9255a->leave($__internal_e533b4b93957ca2d0ded715cea4e18a240276460b9a767bd828af98e3be9255a_prof);

        
        $__internal_cf4cb361cd9a816b63c3abd33f1f53d35db05b0b14e4e9589a2f6fb8c7a09d23->leave($__internal_cf4cb361cd9a816b63c3abd33f1f53d35db05b0b14e4e9589a2f6fb8c7a09d23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a17a1337a6bcd4d69a15fac532ee3051116f6e2eaa18345df5c8a5bfbe9fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a17a1337a6bcd4d69a15fac532ee3051116f6e2eaa18345df5c8a5bfbe9fb6c->enter($__internal_6a17a1337a6bcd4d69a15fac532ee3051116f6e2eaa18345df5c8a5bfbe9fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28452906bb72b9dcda6800fc215b9c550eb77423c497909ebc670b95efa02d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28452906bb72b9dcda6800fc215b9c550eb77423c497909ebc670b95efa02d1e->enter($__internal_28452906bb72b9dcda6800fc215b9c550eb77423c497909ebc670b95efa02d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28452906bb72b9dcda6800fc215b9c550eb77423c497909ebc670b95efa02d1e->leave($__internal_28452906bb72b9dcda6800fc215b9c550eb77423c497909ebc670b95efa02d1e_prof);

        
        $__internal_6a17a1337a6bcd4d69a15fac532ee3051116f6e2eaa18345df5c8a5bfbe9fb6c->leave($__internal_6a17a1337a6bcd4d69a15fac532ee3051116f6e2eaa18345df5c8a5bfbe9fb6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b8cec9ecdcc05ee75520a5c3fe8d24c08cd7c56c49672a5de88d7a38576cbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8cec9ecdcc05ee75520a5c3fe8d24c08cd7c56c49672a5de88d7a38576cbbe->enter($__internal_5b8cec9ecdcc05ee75520a5c3fe8d24c08cd7c56c49672a5de88d7a38576cbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a6362deac98926ce697edbeeba56dceae7c98614833d86694bc6d39eda28473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6362deac98926ce697edbeeba56dceae7c98614833d86694bc6d39eda28473->enter($__internal_2a6362deac98926ce697edbeeba56dceae7c98614833d86694bc6d39eda28473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a6362deac98926ce697edbeeba56dceae7c98614833d86694bc6d39eda28473->leave($__internal_2a6362deac98926ce697edbeeba56dceae7c98614833d86694bc6d39eda28473_prof);

        
        $__internal_5b8cec9ecdcc05ee75520a5c3fe8d24c08cd7c56c49672a5de88d7a38576cbbe->leave($__internal_5b8cec9ecdcc05ee75520a5c3fe8d24c08cd7c56c49672a5de88d7a38576cbbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27becf357098d34f8de38ce8f7d0f05be79ec3c95b1f97f14acbea0a8fa0e027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27becf357098d34f8de38ce8f7d0f05be79ec3c95b1f97f14acbea0a8fa0e027->enter($__internal_27becf357098d34f8de38ce8f7d0f05be79ec3c95b1f97f14acbea0a8fa0e027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0226c5aef31ea341a228e7c7ba897f67f14970abec06009d62e0c2eb6b7eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0226c5aef31ea341a228e7c7ba897f67f14970abec06009d62e0c2eb6b7eaa5->enter($__internal_e0226c5aef31ea341a228e7c7ba897f67f14970abec06009d62e0c2eb6b7eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0226c5aef31ea341a228e7c7ba897f67f14970abec06009d62e0c2eb6b7eaa5->leave($__internal_e0226c5aef31ea341a228e7c7ba897f67f14970abec06009d62e0c2eb6b7eaa5_prof);

        
        $__internal_27becf357098d34f8de38ce8f7d0f05be79ec3c95b1f97f14acbea0a8fa0e027->leave($__internal_27becf357098d34f8de38ce8f7d0f05be79ec3c95b1f97f14acbea0a8fa0e027_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
