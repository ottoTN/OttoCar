<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_195ddd502c291aa278adb3f0e1766eb534f3031b978e70f9b0b0d538291ffd76 extends Twig_Template
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
        $__internal_11abe7c4cc2dce5848eccf42813326738cdfe7915c1e5a5f531d293f825812f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11abe7c4cc2dce5848eccf42813326738cdfe7915c1e5a5f531d293f825812f2->enter($__internal_11abe7c4cc2dce5848eccf42813326738cdfe7915c1e5a5f531d293f825812f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0cae2b6c5277ced506cbf646a2abe8bb37bd1be2d31de159474631ea866a4c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cae2b6c5277ced506cbf646a2abe8bb37bd1be2d31de159474631ea866a4c33->enter($__internal_0cae2b6c5277ced506cbf646a2abe8bb37bd1be2d31de159474631ea866a4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11abe7c4cc2dce5848eccf42813326738cdfe7915c1e5a5f531d293f825812f2->leave($__internal_11abe7c4cc2dce5848eccf42813326738cdfe7915c1e5a5f531d293f825812f2_prof);

        
        $__internal_0cae2b6c5277ced506cbf646a2abe8bb37bd1be2d31de159474631ea866a4c33->leave($__internal_0cae2b6c5277ced506cbf646a2abe8bb37bd1be2d31de159474631ea866a4c33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21c50003949e46f7bc5829ad635c885939d238e5408b8b9e557f8d19ec922430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c50003949e46f7bc5829ad635c885939d238e5408b8b9e557f8d19ec922430->enter($__internal_21c50003949e46f7bc5829ad635c885939d238e5408b8b9e557f8d19ec922430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7344b6be27ac0abc8796608d3ae4efcba5aa17ddfc7bb569cf2b5c49e5dfc9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7344b6be27ac0abc8796608d3ae4efcba5aa17ddfc7bb569cf2b5c49e5dfc9ed->enter($__internal_7344b6be27ac0abc8796608d3ae4efcba5aa17ddfc7bb569cf2b5c49e5dfc9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7344b6be27ac0abc8796608d3ae4efcba5aa17ddfc7bb569cf2b5c49e5dfc9ed->leave($__internal_7344b6be27ac0abc8796608d3ae4efcba5aa17ddfc7bb569cf2b5c49e5dfc9ed_prof);

        
        $__internal_21c50003949e46f7bc5829ad635c885939d238e5408b8b9e557f8d19ec922430->leave($__internal_21c50003949e46f7bc5829ad635c885939d238e5408b8b9e557f8d19ec922430_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_004d342c569801632c763cb89dbf95f578aaa3cc0df64267686b6604ddda38e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004d342c569801632c763cb89dbf95f578aaa3cc0df64267686b6604ddda38e5->enter($__internal_004d342c569801632c763cb89dbf95f578aaa3cc0df64267686b6604ddda38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df8be0a38dcb40abff5ee10cc4205e448b5dbf1a4224a639ad78df664da785ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8be0a38dcb40abff5ee10cc4205e448b5dbf1a4224a639ad78df664da785ce->enter($__internal_df8be0a38dcb40abff5ee10cc4205e448b5dbf1a4224a639ad78df664da785ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_df8be0a38dcb40abff5ee10cc4205e448b5dbf1a4224a639ad78df664da785ce->leave($__internal_df8be0a38dcb40abff5ee10cc4205e448b5dbf1a4224a639ad78df664da785ce_prof);

        
        $__internal_004d342c569801632c763cb89dbf95f578aaa3cc0df64267686b6604ddda38e5->leave($__internal_004d342c569801632c763cb89dbf95f578aaa3cc0df64267686b6604ddda38e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a418e6df6f9e08c4b88efd99635c1c7219e3a87c447e69776380d617531818d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a418e6df6f9e08c4b88efd99635c1c7219e3a87c447e69776380d617531818d3->enter($__internal_a418e6df6f9e08c4b88efd99635c1c7219e3a87c447e69776380d617531818d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6329f13cafb034f0b568ead8c68a0ae1951588fb973ac53a29d9269f57354e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6329f13cafb034f0b568ead8c68a0ae1951588fb973ac53a29d9269f57354e8->enter($__internal_c6329f13cafb034f0b568ead8c68a0ae1951588fb973ac53a29d9269f57354e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c6329f13cafb034f0b568ead8c68a0ae1951588fb973ac53a29d9269f57354e8->leave($__internal_c6329f13cafb034f0b568ead8c68a0ae1951588fb973ac53a29d9269f57354e8_prof);

        
        $__internal_a418e6df6f9e08c4b88efd99635c1c7219e3a87c447e69776380d617531818d3->leave($__internal_a418e6df6f9e08c4b88efd99635c1c7219e3a87c447e69776380d617531818d3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
