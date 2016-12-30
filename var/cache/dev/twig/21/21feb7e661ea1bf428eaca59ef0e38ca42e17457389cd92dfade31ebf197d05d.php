<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_220d0703e0c4140e6f19ecaf232a02140a82e5116217d01e498fa40f9b808ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5f11137813fc07272cedc331dafdd1861362220ab538baa23316b3ee3381bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f11137813fc07272cedc331dafdd1861362220ab538baa23316b3ee3381bacc->enter($__internal_5f11137813fc07272cedc331dafdd1861362220ab538baa23316b3ee3381bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d14a438c61dddc0fc741752e57f2e7c882c7cd7c35acb105b2721a3c657f5132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14a438c61dddc0fc741752e57f2e7c882c7cd7c35acb105b2721a3c657f5132->enter($__internal_d14a438c61dddc0fc741752e57f2e7c882c7cd7c35acb105b2721a3c657f5132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f11137813fc07272cedc331dafdd1861362220ab538baa23316b3ee3381bacc->leave($__internal_5f11137813fc07272cedc331dafdd1861362220ab538baa23316b3ee3381bacc_prof);

        
        $__internal_d14a438c61dddc0fc741752e57f2e7c882c7cd7c35acb105b2721a3c657f5132->leave($__internal_d14a438c61dddc0fc741752e57f2e7c882c7cd7c35acb105b2721a3c657f5132_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d551f78aa7bff6e8ea97ff98efac2273d96ce11cef685455f9afeb80c872114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d551f78aa7bff6e8ea97ff98efac2273d96ce11cef685455f9afeb80c872114->enter($__internal_4d551f78aa7bff6e8ea97ff98efac2273d96ce11cef685455f9afeb80c872114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28a7e363dda89873d0acac69c7c48ec5408d36cb1cb18008fddc028d63baffc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a7e363dda89873d0acac69c7c48ec5408d36cb1cb18008fddc028d63baffc8->enter($__internal_28a7e363dda89873d0acac69c7c48ec5408d36cb1cb18008fddc028d63baffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28a7e363dda89873d0acac69c7c48ec5408d36cb1cb18008fddc028d63baffc8->leave($__internal_28a7e363dda89873d0acac69c7c48ec5408d36cb1cb18008fddc028d63baffc8_prof);

        
        $__internal_4d551f78aa7bff6e8ea97ff98efac2273d96ce11cef685455f9afeb80c872114->leave($__internal_4d551f78aa7bff6e8ea97ff98efac2273d96ce11cef685455f9afeb80c872114_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e06ac4d8b1d71de671adf17f373b376d41f95e7c99fde58f8cc586f0a66c733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e06ac4d8b1d71de671adf17f373b376d41f95e7c99fde58f8cc586f0a66c733->enter($__internal_6e06ac4d8b1d71de671adf17f373b376d41f95e7c99fde58f8cc586f0a66c733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc2d1090163fefa61aba36602d02c0715c34381391f2d603c122dc1f14fcaf32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2d1090163fefa61aba36602d02c0715c34381391f2d603c122dc1f14fcaf32->enter($__internal_fc2d1090163fefa61aba36602d02c0715c34381391f2d603c122dc1f14fcaf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc2d1090163fefa61aba36602d02c0715c34381391f2d603c122dc1f14fcaf32->leave($__internal_fc2d1090163fefa61aba36602d02c0715c34381391f2d603c122dc1f14fcaf32_prof);

        
        $__internal_6e06ac4d8b1d71de671adf17f373b376d41f95e7c99fde58f8cc586f0a66c733->leave($__internal_6e06ac4d8b1d71de671adf17f373b376d41f95e7c99fde58f8cc586f0a66c733_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a4c3287bf8120776119dcf3cbcc415f422c6fe1c22d23072c2c21ae40eaa797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4c3287bf8120776119dcf3cbcc415f422c6fe1c22d23072c2c21ae40eaa797->enter($__internal_0a4c3287bf8120776119dcf3cbcc415f422c6fe1c22d23072c2c21ae40eaa797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b54fb3c8109f8fabd0c15af232e22d138dbcc47f671be3bce2ef2d17cb98f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b54fb3c8109f8fabd0c15af232e22d138dbcc47f671be3bce2ef2d17cb98f9d->enter($__internal_6b54fb3c8109f8fabd0c15af232e22d138dbcc47f671be3bce2ef2d17cb98f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b54fb3c8109f8fabd0c15af232e22d138dbcc47f671be3bce2ef2d17cb98f9d->leave($__internal_6b54fb3c8109f8fabd0c15af232e22d138dbcc47f671be3bce2ef2d17cb98f9d_prof);

        
        $__internal_0a4c3287bf8120776119dcf3cbcc415f422c6fe1c22d23072c2c21ae40eaa797->leave($__internal_0a4c3287bf8120776119dcf3cbcc415f422c6fe1c22d23072c2c21ae40eaa797_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
