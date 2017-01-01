<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_25ccf779590510cbeeb252cae7eed75addd4710e4164e34e70f9bf6bfb3a15a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e239fe14069549cca9098368f64ecc9b13198c11689cd6a6824bdc88829555ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e239fe14069549cca9098368f64ecc9b13198c11689cd6a6824bdc88829555ac->enter($__internal_e239fe14069549cca9098368f64ecc9b13198c11689cd6a6824bdc88829555ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a44042d2190d86ace4f0e542b66bc61aedcd5377e6f6046df50a7982d30cd9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44042d2190d86ace4f0e542b66bc61aedcd5377e6f6046df50a7982d30cd9f7->enter($__internal_a44042d2190d86ace4f0e542b66bc61aedcd5377e6f6046df50a7982d30cd9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e239fe14069549cca9098368f64ecc9b13198c11689cd6a6824bdc88829555ac->leave($__internal_e239fe14069549cca9098368f64ecc9b13198c11689cd6a6824bdc88829555ac_prof);

        
        $__internal_a44042d2190d86ace4f0e542b66bc61aedcd5377e6f6046df50a7982d30cd9f7->leave($__internal_a44042d2190d86ace4f0e542b66bc61aedcd5377e6f6046df50a7982d30cd9f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91b2284415b9d3f342615f2128789f52f16892d51bc8e72506b50a01af3872e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b2284415b9d3f342615f2128789f52f16892d51bc8e72506b50a01af3872e8->enter($__internal_91b2284415b9d3f342615f2128789f52f16892d51bc8e72506b50a01af3872e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30859db780b015e71e29d9eb1168d9f0249e336147cca0cfdcba44960da80990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30859db780b015e71e29d9eb1168d9f0249e336147cca0cfdcba44960da80990->enter($__internal_30859db780b015e71e29d9eb1168d9f0249e336147cca0cfdcba44960da80990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30859db780b015e71e29d9eb1168d9f0249e336147cca0cfdcba44960da80990->leave($__internal_30859db780b015e71e29d9eb1168d9f0249e336147cca0cfdcba44960da80990_prof);

        
        $__internal_91b2284415b9d3f342615f2128789f52f16892d51bc8e72506b50a01af3872e8->leave($__internal_91b2284415b9d3f342615f2128789f52f16892d51bc8e72506b50a01af3872e8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49ca37c6c148415d006943811a8c53908e7dd55b9af9c5426d0106874efaa702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ca37c6c148415d006943811a8c53908e7dd55b9af9c5426d0106874efaa702->enter($__internal_49ca37c6c148415d006943811a8c53908e7dd55b9af9c5426d0106874efaa702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7a0bdecc2aa6af8e941f955b4b9e775224b231d3df88323646629dd0eec9c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a0bdecc2aa6af8e941f955b4b9e775224b231d3df88323646629dd0eec9c2a->enter($__internal_a7a0bdecc2aa6af8e941f955b4b9e775224b231d3df88323646629dd0eec9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a7a0bdecc2aa6af8e941f955b4b9e775224b231d3df88323646629dd0eec9c2a->leave($__internal_a7a0bdecc2aa6af8e941f955b4b9e775224b231d3df88323646629dd0eec9c2a_prof);

        
        $__internal_49ca37c6c148415d006943811a8c53908e7dd55b9af9c5426d0106874efaa702->leave($__internal_49ca37c6c148415d006943811a8c53908e7dd55b9af9c5426d0106874efaa702_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2867eba6328a58f3f006a7ea0fb491d0d5c6e822092870968a8ee11c45a1ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2867eba6328a58f3f006a7ea0fb491d0d5c6e822092870968a8ee11c45a1ab0->enter($__internal_c2867eba6328a58f3f006a7ea0fb491d0d5c6e822092870968a8ee11c45a1ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_874246cc8a0199a75c08bf65403836418bee03a6574e5dae90880301e88f07c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874246cc8a0199a75c08bf65403836418bee03a6574e5dae90880301e88f07c6->enter($__internal_874246cc8a0199a75c08bf65403836418bee03a6574e5dae90880301e88f07c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_874246cc8a0199a75c08bf65403836418bee03a6574e5dae90880301e88f07c6->leave($__internal_874246cc8a0199a75c08bf65403836418bee03a6574e5dae90880301e88f07c6_prof);

        
        $__internal_c2867eba6328a58f3f006a7ea0fb491d0d5c6e822092870968a8ee11c45a1ab0->leave($__internal_c2867eba6328a58f3f006a7ea0fb491d0d5c6e822092870968a8ee11c45a1ab0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
