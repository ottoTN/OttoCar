<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ca3d2eaa10e254a72c84ad60f370600124ae3455f6d258a284ea20eb74fb9163 extends Twig_Template
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
        $__internal_7855972f30154db26edcd0e1e5a52e2c46e05d86b9ec2437a5425e7cfca966fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7855972f30154db26edcd0e1e5a52e2c46e05d86b9ec2437a5425e7cfca966fe->enter($__internal_7855972f30154db26edcd0e1e5a52e2c46e05d86b9ec2437a5425e7cfca966fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6d33fe11e36587e95f79a5c18aa1604afa689e235ae047d8624575c115291d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d33fe11e36587e95f79a5c18aa1604afa689e235ae047d8624575c115291d8->enter($__internal_d6d33fe11e36587e95f79a5c18aa1604afa689e235ae047d8624575c115291d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7855972f30154db26edcd0e1e5a52e2c46e05d86b9ec2437a5425e7cfca966fe->leave($__internal_7855972f30154db26edcd0e1e5a52e2c46e05d86b9ec2437a5425e7cfca966fe_prof);

        
        $__internal_d6d33fe11e36587e95f79a5c18aa1604afa689e235ae047d8624575c115291d8->leave($__internal_d6d33fe11e36587e95f79a5c18aa1604afa689e235ae047d8624575c115291d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b3ff488be5100516ba7ecb4ab7b6f87f8781b4f5f6101f7ce8d927a90c8ed62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3ff488be5100516ba7ecb4ab7b6f87f8781b4f5f6101f7ce8d927a90c8ed62->enter($__internal_4b3ff488be5100516ba7ecb4ab7b6f87f8781b4f5f6101f7ce8d927a90c8ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c49cb4ad19ef8e2c8f6058f79add534ce3acaa4a393d5a40c67d86daf1ce51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c49cb4ad19ef8e2c8f6058f79add534ce3acaa4a393d5a40c67d86daf1ce51e->enter($__internal_1c49cb4ad19ef8e2c8f6058f79add534ce3acaa4a393d5a40c67d86daf1ce51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c49cb4ad19ef8e2c8f6058f79add534ce3acaa4a393d5a40c67d86daf1ce51e->leave($__internal_1c49cb4ad19ef8e2c8f6058f79add534ce3acaa4a393d5a40c67d86daf1ce51e_prof);

        
        $__internal_4b3ff488be5100516ba7ecb4ab7b6f87f8781b4f5f6101f7ce8d927a90c8ed62->leave($__internal_4b3ff488be5100516ba7ecb4ab7b6f87f8781b4f5f6101f7ce8d927a90c8ed62_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82094be0f4bb891030bb5440447c3ce618d2c771fa07e99f77854a1ddeb453b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82094be0f4bb891030bb5440447c3ce618d2c771fa07e99f77854a1ddeb453b3->enter($__internal_82094be0f4bb891030bb5440447c3ce618d2c771fa07e99f77854a1ddeb453b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a14150ea27400ad6479b40dddfb1e448d86b1953031fcb073efd5e9228681d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a14150ea27400ad6479b40dddfb1e448d86b1953031fcb073efd5e9228681d1->enter($__internal_0a14150ea27400ad6479b40dddfb1e448d86b1953031fcb073efd5e9228681d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0a14150ea27400ad6479b40dddfb1e448d86b1953031fcb073efd5e9228681d1->leave($__internal_0a14150ea27400ad6479b40dddfb1e448d86b1953031fcb073efd5e9228681d1_prof);

        
        $__internal_82094be0f4bb891030bb5440447c3ce618d2c771fa07e99f77854a1ddeb453b3->leave($__internal_82094be0f4bb891030bb5440447c3ce618d2c771fa07e99f77854a1ddeb453b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51ca01d6f449d01bfecc0f95cdf6d02e7fc34ad6b50589ad54cee45b14e20f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ca01d6f449d01bfecc0f95cdf6d02e7fc34ad6b50589ad54cee45b14e20f10->enter($__internal_51ca01d6f449d01bfecc0f95cdf6d02e7fc34ad6b50589ad54cee45b14e20f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb217553c17df89bef75b98d8bf37e9b600cf303e6b580dfb480166638b5d2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb217553c17df89bef75b98d8bf37e9b600cf303e6b580dfb480166638b5d2c9->enter($__internal_bb217553c17df89bef75b98d8bf37e9b600cf303e6b580dfb480166638b5d2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bb217553c17df89bef75b98d8bf37e9b600cf303e6b580dfb480166638b5d2c9->leave($__internal_bb217553c17df89bef75b98d8bf37e9b600cf303e6b580dfb480166638b5d2c9_prof);

        
        $__internal_51ca01d6f449d01bfecc0f95cdf6d02e7fc34ad6b50589ad54cee45b14e20f10->leave($__internal_51ca01d6f449d01bfecc0f95cdf6d02e7fc34ad6b50589ad54cee45b14e20f10_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
