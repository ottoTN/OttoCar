<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1aaa249ebb75b48b18853b050f9bbe9f63de133e6ddcd8dc1139d035dcad8c4b extends Twig_Template
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
        $__internal_3234d4dbba0cc22b1530e6f6a7c9f0c1a347b8cacba42cd4368521ed9291284f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3234d4dbba0cc22b1530e6f6a7c9f0c1a347b8cacba42cd4368521ed9291284f->enter($__internal_3234d4dbba0cc22b1530e6f6a7c9f0c1a347b8cacba42cd4368521ed9291284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f94245488880025f3337ef808635c1b35450fb11924e133113ae8b3522ff8aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94245488880025f3337ef808635c1b35450fb11924e133113ae8b3522ff8aa4->enter($__internal_f94245488880025f3337ef808635c1b35450fb11924e133113ae8b3522ff8aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3234d4dbba0cc22b1530e6f6a7c9f0c1a347b8cacba42cd4368521ed9291284f->leave($__internal_3234d4dbba0cc22b1530e6f6a7c9f0c1a347b8cacba42cd4368521ed9291284f_prof);

        
        $__internal_f94245488880025f3337ef808635c1b35450fb11924e133113ae8b3522ff8aa4->leave($__internal_f94245488880025f3337ef808635c1b35450fb11924e133113ae8b3522ff8aa4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7168ea41eaac9272ac4482281aaba6fae411bef78df94dd4e8d534c27535ba84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7168ea41eaac9272ac4482281aaba6fae411bef78df94dd4e8d534c27535ba84->enter($__internal_7168ea41eaac9272ac4482281aaba6fae411bef78df94dd4e8d534c27535ba84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2903d6fb69150dcbd3392a0db65d78801379425993b1f489f6a18d5bdafde255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2903d6fb69150dcbd3392a0db65d78801379425993b1f489f6a18d5bdafde255->enter($__internal_2903d6fb69150dcbd3392a0db65d78801379425993b1f489f6a18d5bdafde255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2903d6fb69150dcbd3392a0db65d78801379425993b1f489f6a18d5bdafde255->leave($__internal_2903d6fb69150dcbd3392a0db65d78801379425993b1f489f6a18d5bdafde255_prof);

        
        $__internal_7168ea41eaac9272ac4482281aaba6fae411bef78df94dd4e8d534c27535ba84->leave($__internal_7168ea41eaac9272ac4482281aaba6fae411bef78df94dd4e8d534c27535ba84_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_596cd6162f3fc3df81633e7d1c8d4b8a0b17df260426222d4110eec82eb5b525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596cd6162f3fc3df81633e7d1c8d4b8a0b17df260426222d4110eec82eb5b525->enter($__internal_596cd6162f3fc3df81633e7d1c8d4b8a0b17df260426222d4110eec82eb5b525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ab2317402afd5535d8a2a68586778fb83c00fcdd6486e7e03bf3e35ef4d14c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab2317402afd5535d8a2a68586778fb83c00fcdd6486e7e03bf3e35ef4d14c7->enter($__internal_1ab2317402afd5535d8a2a68586778fb83c00fcdd6486e7e03bf3e35ef4d14c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ab2317402afd5535d8a2a68586778fb83c00fcdd6486e7e03bf3e35ef4d14c7->leave($__internal_1ab2317402afd5535d8a2a68586778fb83c00fcdd6486e7e03bf3e35ef4d14c7_prof);

        
        $__internal_596cd6162f3fc3df81633e7d1c8d4b8a0b17df260426222d4110eec82eb5b525->leave($__internal_596cd6162f3fc3df81633e7d1c8d4b8a0b17df260426222d4110eec82eb5b525_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e37898b91b0458f95b455321c7ae096014e3ff6113aacad8cf8d17d0c571be50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37898b91b0458f95b455321c7ae096014e3ff6113aacad8cf8d17d0c571be50->enter($__internal_e37898b91b0458f95b455321c7ae096014e3ff6113aacad8cf8d17d0c571be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_992eeee3d6114fdfa91a81ddb053afd21c0aef4a542502aa4f146b5e3d39a418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992eeee3d6114fdfa91a81ddb053afd21c0aef4a542502aa4f146b5e3d39a418->enter($__internal_992eeee3d6114fdfa91a81ddb053afd21c0aef4a542502aa4f146b5e3d39a418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_992eeee3d6114fdfa91a81ddb053afd21c0aef4a542502aa4f146b5e3d39a418->leave($__internal_992eeee3d6114fdfa91a81ddb053afd21c0aef4a542502aa4f146b5e3d39a418_prof);

        
        $__internal_e37898b91b0458f95b455321c7ae096014e3ff6113aacad8cf8d17d0c571be50->leave($__internal_e37898b91b0458f95b455321c7ae096014e3ff6113aacad8cf8d17d0c571be50_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
