<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ce8d2bf73d3019b4f8971850f18f362e8fcabcd1ce45efef4a849c51d34c579 extends Twig_Template
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
        $__internal_799e6845ff7f8b5c4151a7f930b8f71797ab25825ccf218fb0caea965b408a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799e6845ff7f8b5c4151a7f930b8f71797ab25825ccf218fb0caea965b408a45->enter($__internal_799e6845ff7f8b5c4151a7f930b8f71797ab25825ccf218fb0caea965b408a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_27442890f5873e501a26bae263b95a56858ca5bee595b6abe09d2a2a07c81539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27442890f5873e501a26bae263b95a56858ca5bee595b6abe09d2a2a07c81539->enter($__internal_27442890f5873e501a26bae263b95a56858ca5bee595b6abe09d2a2a07c81539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799e6845ff7f8b5c4151a7f930b8f71797ab25825ccf218fb0caea965b408a45->leave($__internal_799e6845ff7f8b5c4151a7f930b8f71797ab25825ccf218fb0caea965b408a45_prof);

        
        $__internal_27442890f5873e501a26bae263b95a56858ca5bee595b6abe09d2a2a07c81539->leave($__internal_27442890f5873e501a26bae263b95a56858ca5bee595b6abe09d2a2a07c81539_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b952c94df4bf229a94329a22f383dad861c7c292acfc38bcab52f38d58fa69bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b952c94df4bf229a94329a22f383dad861c7c292acfc38bcab52f38d58fa69bf->enter($__internal_b952c94df4bf229a94329a22f383dad861c7c292acfc38bcab52f38d58fa69bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_47b3ac60c887384647d401501f4d7c982942efbb928ca15112f2f9df4264bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b3ac60c887384647d401501f4d7c982942efbb928ca15112f2f9df4264bf65->enter($__internal_47b3ac60c887384647d401501f4d7c982942efbb928ca15112f2f9df4264bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47b3ac60c887384647d401501f4d7c982942efbb928ca15112f2f9df4264bf65->leave($__internal_47b3ac60c887384647d401501f4d7c982942efbb928ca15112f2f9df4264bf65_prof);

        
        $__internal_b952c94df4bf229a94329a22f383dad861c7c292acfc38bcab52f38d58fa69bf->leave($__internal_b952c94df4bf229a94329a22f383dad861c7c292acfc38bcab52f38d58fa69bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4277e0b4846af80d64b8fb2dc8f396a713c78d34a0c7483e6600bf95440417a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4277e0b4846af80d64b8fb2dc8f396a713c78d34a0c7483e6600bf95440417a0->enter($__internal_4277e0b4846af80d64b8fb2dc8f396a713c78d34a0c7483e6600bf95440417a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_341acc5ead2e690def36896a655a46ba6a0bfa125731d436926a8beaf4002add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341acc5ead2e690def36896a655a46ba6a0bfa125731d436926a8beaf4002add->enter($__internal_341acc5ead2e690def36896a655a46ba6a0bfa125731d436926a8beaf4002add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_341acc5ead2e690def36896a655a46ba6a0bfa125731d436926a8beaf4002add->leave($__internal_341acc5ead2e690def36896a655a46ba6a0bfa125731d436926a8beaf4002add_prof);

        
        $__internal_4277e0b4846af80d64b8fb2dc8f396a713c78d34a0c7483e6600bf95440417a0->leave($__internal_4277e0b4846af80d64b8fb2dc8f396a713c78d34a0c7483e6600bf95440417a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2328b5564deb45c5b29a3c620736e5b508ddc33dfec25408bee636c5f37834f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2328b5564deb45c5b29a3c620736e5b508ddc33dfec25408bee636c5f37834f9->enter($__internal_2328b5564deb45c5b29a3c620736e5b508ddc33dfec25408bee636c5f37834f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e93363ec2e29101c8c9e08113661c2abce8fc32b470ad4fdee9c0ff3a4e9935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93363ec2e29101c8c9e08113661c2abce8fc32b470ad4fdee9c0ff3a4e9935d->enter($__internal_e93363ec2e29101c8c9e08113661c2abce8fc32b470ad4fdee9c0ff3a4e9935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e93363ec2e29101c8c9e08113661c2abce8fc32b470ad4fdee9c0ff3a4e9935d->leave($__internal_e93363ec2e29101c8c9e08113661c2abce8fc32b470ad4fdee9c0ff3a4e9935d_prof);

        
        $__internal_2328b5564deb45c5b29a3c620736e5b508ddc33dfec25408bee636c5f37834f9->leave($__internal_2328b5564deb45c5b29a3c620736e5b508ddc33dfec25408bee636c5f37834f9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
