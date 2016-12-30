<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea51695e51c9c103822928932811d72a8c9df87af0d9f2c66f9c990ff43da54a extends Twig_Template
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
        $__internal_97dfa59af022ad2afd381938f4f4c0c50575c77e0668eba994b0e3885e2f4fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dfa59af022ad2afd381938f4f4c0c50575c77e0668eba994b0e3885e2f4fed->enter($__internal_97dfa59af022ad2afd381938f4f4c0c50575c77e0668eba994b0e3885e2f4fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b7a5424ad82cd1d34a76eee0bb34d6c421e01fa7cb04fc172cbcc57eb63babb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a5424ad82cd1d34a76eee0bb34d6c421e01fa7cb04fc172cbcc57eb63babb0->enter($__internal_b7a5424ad82cd1d34a76eee0bb34d6c421e01fa7cb04fc172cbcc57eb63babb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97dfa59af022ad2afd381938f4f4c0c50575c77e0668eba994b0e3885e2f4fed->leave($__internal_97dfa59af022ad2afd381938f4f4c0c50575c77e0668eba994b0e3885e2f4fed_prof);

        
        $__internal_b7a5424ad82cd1d34a76eee0bb34d6c421e01fa7cb04fc172cbcc57eb63babb0->leave($__internal_b7a5424ad82cd1d34a76eee0bb34d6c421e01fa7cb04fc172cbcc57eb63babb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abffdd2b4a7f6947d59124bc1f43a30bc9d1b3b8c06f493e77768cb0011ca256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abffdd2b4a7f6947d59124bc1f43a30bc9d1b3b8c06f493e77768cb0011ca256->enter($__internal_abffdd2b4a7f6947d59124bc1f43a30bc9d1b3b8c06f493e77768cb0011ca256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06478389786b251ce9ec7287097a3688fcac8c1f32d4cce2622a399272a8a720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06478389786b251ce9ec7287097a3688fcac8c1f32d4cce2622a399272a8a720->enter($__internal_06478389786b251ce9ec7287097a3688fcac8c1f32d4cce2622a399272a8a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06478389786b251ce9ec7287097a3688fcac8c1f32d4cce2622a399272a8a720->leave($__internal_06478389786b251ce9ec7287097a3688fcac8c1f32d4cce2622a399272a8a720_prof);

        
        $__internal_abffdd2b4a7f6947d59124bc1f43a30bc9d1b3b8c06f493e77768cb0011ca256->leave($__internal_abffdd2b4a7f6947d59124bc1f43a30bc9d1b3b8c06f493e77768cb0011ca256_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8d361f3b8c19adb5c4d5058a0f6b9f1de9c626fbed1fe2f974778d0e0d7c115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d361f3b8c19adb5c4d5058a0f6b9f1de9c626fbed1fe2f974778d0e0d7c115->enter($__internal_c8d361f3b8c19adb5c4d5058a0f6b9f1de9c626fbed1fe2f974778d0e0d7c115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71550d02271bc577e94322d4db90b9733f8cf0cb8dc7535d2f61b40726ae771b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71550d02271bc577e94322d4db90b9733f8cf0cb8dc7535d2f61b40726ae771b->enter($__internal_71550d02271bc577e94322d4db90b9733f8cf0cb8dc7535d2f61b40726ae771b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71550d02271bc577e94322d4db90b9733f8cf0cb8dc7535d2f61b40726ae771b->leave($__internal_71550d02271bc577e94322d4db90b9733f8cf0cb8dc7535d2f61b40726ae771b_prof);

        
        $__internal_c8d361f3b8c19adb5c4d5058a0f6b9f1de9c626fbed1fe2f974778d0e0d7c115->leave($__internal_c8d361f3b8c19adb5c4d5058a0f6b9f1de9c626fbed1fe2f974778d0e0d7c115_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0e463e2cf2b4950b467f29f43996784b4fad9ee049b9cd0d09c86e9e54ba8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e463e2cf2b4950b467f29f43996784b4fad9ee049b9cd0d09c86e9e54ba8a4->enter($__internal_f0e463e2cf2b4950b467f29f43996784b4fad9ee049b9cd0d09c86e9e54ba8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2519272cbffadcbfb42fa8141b72f6ec9e42d37e6cc51aee2f4aed20cc892036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2519272cbffadcbfb42fa8141b72f6ec9e42d37e6cc51aee2f4aed20cc892036->enter($__internal_2519272cbffadcbfb42fa8141b72f6ec9e42d37e6cc51aee2f4aed20cc892036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2519272cbffadcbfb42fa8141b72f6ec9e42d37e6cc51aee2f4aed20cc892036->leave($__internal_2519272cbffadcbfb42fa8141b72f6ec9e42d37e6cc51aee2f4aed20cc892036_prof);

        
        $__internal_f0e463e2cf2b4950b467f29f43996784b4fad9ee049b9cd0d09c86e9e54ba8a4->leave($__internal_f0e463e2cf2b4950b467f29f43996784b4fad9ee049b9cd0d09c86e9e54ba8a4_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
