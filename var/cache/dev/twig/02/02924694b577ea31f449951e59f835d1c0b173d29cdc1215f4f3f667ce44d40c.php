<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf5d7ae9f13901a9e2822226ce5918ae6c69f4c8d413d91036c61a0f3455f51e extends Twig_Template
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
        $__internal_03496aae9c5585c96020e2c3a115698da4fed3c9439e2faaf448f40e11c0c37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03496aae9c5585c96020e2c3a115698da4fed3c9439e2faaf448f40e11c0c37c->enter($__internal_03496aae9c5585c96020e2c3a115698da4fed3c9439e2faaf448f40e11c0c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c52dca55f8929c5ac964521d770ce2a54b309984734a84a6a2a81e27a4ddfcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52dca55f8929c5ac964521d770ce2a54b309984734a84a6a2a81e27a4ddfcdb->enter($__internal_c52dca55f8929c5ac964521d770ce2a54b309984734a84a6a2a81e27a4ddfcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03496aae9c5585c96020e2c3a115698da4fed3c9439e2faaf448f40e11c0c37c->leave($__internal_03496aae9c5585c96020e2c3a115698da4fed3c9439e2faaf448f40e11c0c37c_prof);

        
        $__internal_c52dca55f8929c5ac964521d770ce2a54b309984734a84a6a2a81e27a4ddfcdb->leave($__internal_c52dca55f8929c5ac964521d770ce2a54b309984734a84a6a2a81e27a4ddfcdb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b628eece12a8872308ffd3a854a3c5dbdee14a249c28eb04e1682a70a00561e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b628eece12a8872308ffd3a854a3c5dbdee14a249c28eb04e1682a70a00561e->enter($__internal_1b628eece12a8872308ffd3a854a3c5dbdee14a249c28eb04e1682a70a00561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a5b274b0e6ec1eed4f5750f53f8a7cb81cb951542f4ffc636d079a89390b26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5b274b0e6ec1eed4f5750f53f8a7cb81cb951542f4ffc636d079a89390b26b->enter($__internal_1a5b274b0e6ec1eed4f5750f53f8a7cb81cb951542f4ffc636d079a89390b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a5b274b0e6ec1eed4f5750f53f8a7cb81cb951542f4ffc636d079a89390b26b->leave($__internal_1a5b274b0e6ec1eed4f5750f53f8a7cb81cb951542f4ffc636d079a89390b26b_prof);

        
        $__internal_1b628eece12a8872308ffd3a854a3c5dbdee14a249c28eb04e1682a70a00561e->leave($__internal_1b628eece12a8872308ffd3a854a3c5dbdee14a249c28eb04e1682a70a00561e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b90c501bb3c8368559be1881e81ab96b506b412aa38e4abac48c49979031d6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90c501bb3c8368559be1881e81ab96b506b412aa38e4abac48c49979031d6f2->enter($__internal_b90c501bb3c8368559be1881e81ab96b506b412aa38e4abac48c49979031d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc8facfb24e160a12b7c5423f88bc97e0011b911b4568c14d913fe16917eb118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8facfb24e160a12b7c5423f88bc97e0011b911b4568c14d913fe16917eb118->enter($__internal_cc8facfb24e160a12b7c5423f88bc97e0011b911b4568c14d913fe16917eb118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc8facfb24e160a12b7c5423f88bc97e0011b911b4568c14d913fe16917eb118->leave($__internal_cc8facfb24e160a12b7c5423f88bc97e0011b911b4568c14d913fe16917eb118_prof);

        
        $__internal_b90c501bb3c8368559be1881e81ab96b506b412aa38e4abac48c49979031d6f2->leave($__internal_b90c501bb3c8368559be1881e81ab96b506b412aa38e4abac48c49979031d6f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe652850cbe99fb5a4845ca9cb185f8c0d5ce18bf23e231c3100d0f1012f40a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe652850cbe99fb5a4845ca9cb185f8c0d5ce18bf23e231c3100d0f1012f40a7->enter($__internal_fe652850cbe99fb5a4845ca9cb185f8c0d5ce18bf23e231c3100d0f1012f40a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80fe4a6b7314cbe9eed9dde3bf85f4eca3467b1d24bb61754038e9765a447ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fe4a6b7314cbe9eed9dde3bf85f4eca3467b1d24bb61754038e9765a447ee5->enter($__internal_80fe4a6b7314cbe9eed9dde3bf85f4eca3467b1d24bb61754038e9765a447ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80fe4a6b7314cbe9eed9dde3bf85f4eca3467b1d24bb61754038e9765a447ee5->leave($__internal_80fe4a6b7314cbe9eed9dde3bf85f4eca3467b1d24bb61754038e9765a447ee5_prof);

        
        $__internal_fe652850cbe99fb5a4845ca9cb185f8c0d5ce18bf23e231c3100d0f1012f40a7->leave($__internal_fe652850cbe99fb5a4845ca9cb185f8c0d5ce18bf23e231c3100d0f1012f40a7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
