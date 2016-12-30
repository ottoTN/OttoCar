<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ee7b1a41c959a4cd09491e781c4a18ba7da37a0dafb5ace52085558843693d7b extends Twig_Template
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
        $__internal_73f6e1433ebc04d835f39aedfa32c7121306366d00e04a48b383e5389477dcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f6e1433ebc04d835f39aedfa32c7121306366d00e04a48b383e5389477dcaf->enter($__internal_73f6e1433ebc04d835f39aedfa32c7121306366d00e04a48b383e5389477dcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c72ffab08cc8a6ea5f372a6fcdef76f28252d69116b25d3aa4bc09f8d5e7200e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72ffab08cc8a6ea5f372a6fcdef76f28252d69116b25d3aa4bc09f8d5e7200e->enter($__internal_c72ffab08cc8a6ea5f372a6fcdef76f28252d69116b25d3aa4bc09f8d5e7200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f6e1433ebc04d835f39aedfa32c7121306366d00e04a48b383e5389477dcaf->leave($__internal_73f6e1433ebc04d835f39aedfa32c7121306366d00e04a48b383e5389477dcaf_prof);

        
        $__internal_c72ffab08cc8a6ea5f372a6fcdef76f28252d69116b25d3aa4bc09f8d5e7200e->leave($__internal_c72ffab08cc8a6ea5f372a6fcdef76f28252d69116b25d3aa4bc09f8d5e7200e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_192a0344599836d9b4782fb3c939c9ea09dc4234184668f3cfe8f48f85ebe6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192a0344599836d9b4782fb3c939c9ea09dc4234184668f3cfe8f48f85ebe6ff->enter($__internal_192a0344599836d9b4782fb3c939c9ea09dc4234184668f3cfe8f48f85ebe6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da3ce39f1d0e2f54b5f1917ee91eae73379ee7a46902ba077c9f47c6c3e1f6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3ce39f1d0e2f54b5f1917ee91eae73379ee7a46902ba077c9f47c6c3e1f6e3->enter($__internal_da3ce39f1d0e2f54b5f1917ee91eae73379ee7a46902ba077c9f47c6c3e1f6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da3ce39f1d0e2f54b5f1917ee91eae73379ee7a46902ba077c9f47c6c3e1f6e3->leave($__internal_da3ce39f1d0e2f54b5f1917ee91eae73379ee7a46902ba077c9f47c6c3e1f6e3_prof);

        
        $__internal_192a0344599836d9b4782fb3c939c9ea09dc4234184668f3cfe8f48f85ebe6ff->leave($__internal_192a0344599836d9b4782fb3c939c9ea09dc4234184668f3cfe8f48f85ebe6ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0473a15555a4ec9ee573d97b6a7c2ef8aa2ad9fd927f913b4ebb43031a35499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0473a15555a4ec9ee573d97b6a7c2ef8aa2ad9fd927f913b4ebb43031a35499->enter($__internal_d0473a15555a4ec9ee573d97b6a7c2ef8aa2ad9fd927f913b4ebb43031a35499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e6433cdfff9465967442b1b6da07ee0391f5ce258c94c8fe2250f294ddf5c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6433cdfff9465967442b1b6da07ee0391f5ce258c94c8fe2250f294ddf5c22->enter($__internal_9e6433cdfff9465967442b1b6da07ee0391f5ce258c94c8fe2250f294ddf5c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9e6433cdfff9465967442b1b6da07ee0391f5ce258c94c8fe2250f294ddf5c22->leave($__internal_9e6433cdfff9465967442b1b6da07ee0391f5ce258c94c8fe2250f294ddf5c22_prof);

        
        $__internal_d0473a15555a4ec9ee573d97b6a7c2ef8aa2ad9fd927f913b4ebb43031a35499->leave($__internal_d0473a15555a4ec9ee573d97b6a7c2ef8aa2ad9fd927f913b4ebb43031a35499_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ad2ac63a364ca5c829bf7b69c6841369d3ff15d07dd4a9214f1ce8d4f4176ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad2ac63a364ca5c829bf7b69c6841369d3ff15d07dd4a9214f1ce8d4f4176ef->enter($__internal_8ad2ac63a364ca5c829bf7b69c6841369d3ff15d07dd4a9214f1ce8d4f4176ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_677282c23144748f41143c2390077fa9031f4810f8f8ded10c5b4e8388864d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677282c23144748f41143c2390077fa9031f4810f8f8ded10c5b4e8388864d12->enter($__internal_677282c23144748f41143c2390077fa9031f4810f8f8ded10c5b4e8388864d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_677282c23144748f41143c2390077fa9031f4810f8f8ded10c5b4e8388864d12->leave($__internal_677282c23144748f41143c2390077fa9031f4810f8f8ded10c5b4e8388864d12_prof);

        
        $__internal_8ad2ac63a364ca5c829bf7b69c6841369d3ff15d07dd4a9214f1ce8d4f4176ef->leave($__internal_8ad2ac63a364ca5c829bf7b69c6841369d3ff15d07dd4a9214f1ce8d4f4176ef_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
