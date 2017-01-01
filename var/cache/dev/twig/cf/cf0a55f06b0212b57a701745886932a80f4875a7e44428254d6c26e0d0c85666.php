<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_617d65d3ac5d251734bae0e45bbceb54b11e2ef2fd1962198b5ca04908ba1fea extends Twig_Template
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
        $__internal_e14826f0b275082d764b0ac586db7638ebe794b35605046fe571eb4b593d84a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14826f0b275082d764b0ac586db7638ebe794b35605046fe571eb4b593d84a6->enter($__internal_e14826f0b275082d764b0ac586db7638ebe794b35605046fe571eb4b593d84a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d54b389c8b4453a42954f82d9b0c749846790f92524abb340a26b457a4fea4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54b389c8b4453a42954f82d9b0c749846790f92524abb340a26b457a4fea4b2->enter($__internal_d54b389c8b4453a42954f82d9b0c749846790f92524abb340a26b457a4fea4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14826f0b275082d764b0ac586db7638ebe794b35605046fe571eb4b593d84a6->leave($__internal_e14826f0b275082d764b0ac586db7638ebe794b35605046fe571eb4b593d84a6_prof);

        
        $__internal_d54b389c8b4453a42954f82d9b0c749846790f92524abb340a26b457a4fea4b2->leave($__internal_d54b389c8b4453a42954f82d9b0c749846790f92524abb340a26b457a4fea4b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3314f1982c1b09b3a20d26cce1dfc4fc7ac7cf943da6325b9893fd9578c9338e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3314f1982c1b09b3a20d26cce1dfc4fc7ac7cf943da6325b9893fd9578c9338e->enter($__internal_3314f1982c1b09b3a20d26cce1dfc4fc7ac7cf943da6325b9893fd9578c9338e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b7617a95a50da3afa72d18ad7522bc76db02c811189b5a9b3d2a5e0853825ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7617a95a50da3afa72d18ad7522bc76db02c811189b5a9b3d2a5e0853825ec->enter($__internal_0b7617a95a50da3afa72d18ad7522bc76db02c811189b5a9b3d2a5e0853825ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b7617a95a50da3afa72d18ad7522bc76db02c811189b5a9b3d2a5e0853825ec->leave($__internal_0b7617a95a50da3afa72d18ad7522bc76db02c811189b5a9b3d2a5e0853825ec_prof);

        
        $__internal_3314f1982c1b09b3a20d26cce1dfc4fc7ac7cf943da6325b9893fd9578c9338e->leave($__internal_3314f1982c1b09b3a20d26cce1dfc4fc7ac7cf943da6325b9893fd9578c9338e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56bc7ce1c2ca41a23ee86f82c660934dd7ec948b41cc776af147eead08e7f216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bc7ce1c2ca41a23ee86f82c660934dd7ec948b41cc776af147eead08e7f216->enter($__internal_56bc7ce1c2ca41a23ee86f82c660934dd7ec948b41cc776af147eead08e7f216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3651f53d7350def7cf08a0aa0b52f98c963a42a59716d283a291dcca111adc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3651f53d7350def7cf08a0aa0b52f98c963a42a59716d283a291dcca111adc91->enter($__internal_3651f53d7350def7cf08a0aa0b52f98c963a42a59716d283a291dcca111adc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3651f53d7350def7cf08a0aa0b52f98c963a42a59716d283a291dcca111adc91->leave($__internal_3651f53d7350def7cf08a0aa0b52f98c963a42a59716d283a291dcca111adc91_prof);

        
        $__internal_56bc7ce1c2ca41a23ee86f82c660934dd7ec948b41cc776af147eead08e7f216->leave($__internal_56bc7ce1c2ca41a23ee86f82c660934dd7ec948b41cc776af147eead08e7f216_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0110131d163dbefff990e8a59b810f8b19b07e93f3da34dc9932ef3fd753a89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0110131d163dbefff990e8a59b810f8b19b07e93f3da34dc9932ef3fd753a89e->enter($__internal_0110131d163dbefff990e8a59b810f8b19b07e93f3da34dc9932ef3fd753a89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dda40c821b7c1ae679769a7d90f8181a7b3f1d0f4157905a79fbc5094e7f3835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda40c821b7c1ae679769a7d90f8181a7b3f1d0f4157905a79fbc5094e7f3835->enter($__internal_dda40c821b7c1ae679769a7d90f8181a7b3f1d0f4157905a79fbc5094e7f3835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dda40c821b7c1ae679769a7d90f8181a7b3f1d0f4157905a79fbc5094e7f3835->leave($__internal_dda40c821b7c1ae679769a7d90f8181a7b3f1d0f4157905a79fbc5094e7f3835_prof);

        
        $__internal_0110131d163dbefff990e8a59b810f8b19b07e93f3da34dc9932ef3fd753a89e->leave($__internal_0110131d163dbefff990e8a59b810f8b19b07e93f3da34dc9932ef3fd753a89e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
