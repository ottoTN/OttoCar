<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b4a51f54100aca86d17ffae948bbf1a1595d26cecb0963c8f99f713a2d68c17e extends Twig_Template
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
        $__internal_fbe24978378b4cdcd559efaa9edb119b6507ce21ed45aa488af384de34454a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe24978378b4cdcd559efaa9edb119b6507ce21ed45aa488af384de34454a05->enter($__internal_fbe24978378b4cdcd559efaa9edb119b6507ce21ed45aa488af384de34454a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c64114ef71dd7d3d2d46fc4cc293392a28077944a07889961b059fab99a98a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c64114ef71dd7d3d2d46fc4cc293392a28077944a07889961b059fab99a98a2->enter($__internal_8c64114ef71dd7d3d2d46fc4cc293392a28077944a07889961b059fab99a98a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe24978378b4cdcd559efaa9edb119b6507ce21ed45aa488af384de34454a05->leave($__internal_fbe24978378b4cdcd559efaa9edb119b6507ce21ed45aa488af384de34454a05_prof);

        
        $__internal_8c64114ef71dd7d3d2d46fc4cc293392a28077944a07889961b059fab99a98a2->leave($__internal_8c64114ef71dd7d3d2d46fc4cc293392a28077944a07889961b059fab99a98a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cb2e501095d4b18123d4d21ad9e129de78b3208de951e385df978d62827c37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb2e501095d4b18123d4d21ad9e129de78b3208de951e385df978d62827c37e->enter($__internal_7cb2e501095d4b18123d4d21ad9e129de78b3208de951e385df978d62827c37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d89bd8444745480947f6d6be6137ae445e0aec3cdae819d0d051572a60d7d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d89bd8444745480947f6d6be6137ae445e0aec3cdae819d0d051572a60d7d1b->enter($__internal_5d89bd8444745480947f6d6be6137ae445e0aec3cdae819d0d051572a60d7d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d89bd8444745480947f6d6be6137ae445e0aec3cdae819d0d051572a60d7d1b->leave($__internal_5d89bd8444745480947f6d6be6137ae445e0aec3cdae819d0d051572a60d7d1b_prof);

        
        $__internal_7cb2e501095d4b18123d4d21ad9e129de78b3208de951e385df978d62827c37e->leave($__internal_7cb2e501095d4b18123d4d21ad9e129de78b3208de951e385df978d62827c37e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d86d0fe8d3c9cf3f7fc0d3e1d9889a61cbc39d81f6e1e29cd800499b67c5eb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86d0fe8d3c9cf3f7fc0d3e1d9889a61cbc39d81f6e1e29cd800499b67c5eb51->enter($__internal_d86d0fe8d3c9cf3f7fc0d3e1d9889a61cbc39d81f6e1e29cd800499b67c5eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45dbb16573cd386782b293dcb302bdf5799c2503dea3f50c6e7c02a8a9126f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dbb16573cd386782b293dcb302bdf5799c2503dea3f50c6e7c02a8a9126f06->enter($__internal_45dbb16573cd386782b293dcb302bdf5799c2503dea3f50c6e7c02a8a9126f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45dbb16573cd386782b293dcb302bdf5799c2503dea3f50c6e7c02a8a9126f06->leave($__internal_45dbb16573cd386782b293dcb302bdf5799c2503dea3f50c6e7c02a8a9126f06_prof);

        
        $__internal_d86d0fe8d3c9cf3f7fc0d3e1d9889a61cbc39d81f6e1e29cd800499b67c5eb51->leave($__internal_d86d0fe8d3c9cf3f7fc0d3e1d9889a61cbc39d81f6e1e29cd800499b67c5eb51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02252dba9a739b6a1f4b62d50bbab0e39f2708d97faf66886f98e6c32fc151a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02252dba9a739b6a1f4b62d50bbab0e39f2708d97faf66886f98e6c32fc151a7->enter($__internal_02252dba9a739b6a1f4b62d50bbab0e39f2708d97faf66886f98e6c32fc151a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3baedb5958676d488f0a9e330cd175abd8692c7cdbe22e52eb53891789a0964a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baedb5958676d488f0a9e330cd175abd8692c7cdbe22e52eb53891789a0964a->enter($__internal_3baedb5958676d488f0a9e330cd175abd8692c7cdbe22e52eb53891789a0964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3baedb5958676d488f0a9e330cd175abd8692c7cdbe22e52eb53891789a0964a->leave($__internal_3baedb5958676d488f0a9e330cd175abd8692c7cdbe22e52eb53891789a0964a_prof);

        
        $__internal_02252dba9a739b6a1f4b62d50bbab0e39f2708d97faf66886f98e6c32fc151a7->leave($__internal_02252dba9a739b6a1f4b62d50bbab0e39f2708d97faf66886f98e6c32fc151a7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
