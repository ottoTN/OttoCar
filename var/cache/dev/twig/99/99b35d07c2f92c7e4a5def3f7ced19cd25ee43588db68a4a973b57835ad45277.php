<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ba15a94f44307dbc09a9254b6ffc744d21b42e730bc63fdb7d4e5234b4e4ecb extends Twig_Template
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
        $__internal_429538d7cd1a1637ab8af22360643da9d4ee447c0febcd2131f9cd34e6cb71d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429538d7cd1a1637ab8af22360643da9d4ee447c0febcd2131f9cd34e6cb71d1->enter($__internal_429538d7cd1a1637ab8af22360643da9d4ee447c0febcd2131f9cd34e6cb71d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9ea3046e42a6a44eba2c2a39f964fd69c0a048fe87795a4138e2295b905941b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea3046e42a6a44eba2c2a39f964fd69c0a048fe87795a4138e2295b905941b1->enter($__internal_9ea3046e42a6a44eba2c2a39f964fd69c0a048fe87795a4138e2295b905941b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429538d7cd1a1637ab8af22360643da9d4ee447c0febcd2131f9cd34e6cb71d1->leave($__internal_429538d7cd1a1637ab8af22360643da9d4ee447c0febcd2131f9cd34e6cb71d1_prof);

        
        $__internal_9ea3046e42a6a44eba2c2a39f964fd69c0a048fe87795a4138e2295b905941b1->leave($__internal_9ea3046e42a6a44eba2c2a39f964fd69c0a048fe87795a4138e2295b905941b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_213596c82d394048650aad21896fca8dd8fbd3901c509210b37604675bc62619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213596c82d394048650aad21896fca8dd8fbd3901c509210b37604675bc62619->enter($__internal_213596c82d394048650aad21896fca8dd8fbd3901c509210b37604675bc62619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fcde142328487f94063b026c92923ce222bdd0bd572d90ca2f757f051d5185d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcde142328487f94063b026c92923ce222bdd0bd572d90ca2f757f051d5185d->enter($__internal_0fcde142328487f94063b026c92923ce222bdd0bd572d90ca2f757f051d5185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fcde142328487f94063b026c92923ce222bdd0bd572d90ca2f757f051d5185d->leave($__internal_0fcde142328487f94063b026c92923ce222bdd0bd572d90ca2f757f051d5185d_prof);

        
        $__internal_213596c82d394048650aad21896fca8dd8fbd3901c509210b37604675bc62619->leave($__internal_213596c82d394048650aad21896fca8dd8fbd3901c509210b37604675bc62619_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd34974022044f83c8f8224d848fb064858d0068a4234637844bc69271921aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd34974022044f83c8f8224d848fb064858d0068a4234637844bc69271921aa0->enter($__internal_fd34974022044f83c8f8224d848fb064858d0068a4234637844bc69271921aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22e1d44f9546d5bbdc8ea8d1966943597a2cc2b6619271f81cf8aba4903faaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e1d44f9546d5bbdc8ea8d1966943597a2cc2b6619271f81cf8aba4903faaaa->enter($__internal_22e1d44f9546d5bbdc8ea8d1966943597a2cc2b6619271f81cf8aba4903faaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22e1d44f9546d5bbdc8ea8d1966943597a2cc2b6619271f81cf8aba4903faaaa->leave($__internal_22e1d44f9546d5bbdc8ea8d1966943597a2cc2b6619271f81cf8aba4903faaaa_prof);

        
        $__internal_fd34974022044f83c8f8224d848fb064858d0068a4234637844bc69271921aa0->leave($__internal_fd34974022044f83c8f8224d848fb064858d0068a4234637844bc69271921aa0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0973d4ed6b0b2fd5a98cdceeed484254abe4d24fcdb2119c92497c49facada9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0973d4ed6b0b2fd5a98cdceeed484254abe4d24fcdb2119c92497c49facada9->enter($__internal_d0973d4ed6b0b2fd5a98cdceeed484254abe4d24fcdb2119c92497c49facada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ac590e67e03acc4a24756761428ee42707508a5f3a16c7aadf0dd7dedb10190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac590e67e03acc4a24756761428ee42707508a5f3a16c7aadf0dd7dedb10190->enter($__internal_8ac590e67e03acc4a24756761428ee42707508a5f3a16c7aadf0dd7dedb10190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ac590e67e03acc4a24756761428ee42707508a5f3a16c7aadf0dd7dedb10190->leave($__internal_8ac590e67e03acc4a24756761428ee42707508a5f3a16c7aadf0dd7dedb10190_prof);

        
        $__internal_d0973d4ed6b0b2fd5a98cdceeed484254abe4d24fcdb2119c92497c49facada9->leave($__internal_d0973d4ed6b0b2fd5a98cdceeed484254abe4d24fcdb2119c92497c49facada9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
