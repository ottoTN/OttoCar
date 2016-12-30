<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f08fedc9587cdb59261794a2425082257a9d8ba521ea7d1e4b7189190fc75226 extends Twig_Template
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
        $__internal_cdca0e3994575a1b53a6a7a6d55058e5fa31be6d66ff2dc0f0d4ea930b546caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdca0e3994575a1b53a6a7a6d55058e5fa31be6d66ff2dc0f0d4ea930b546caf->enter($__internal_cdca0e3994575a1b53a6a7a6d55058e5fa31be6d66ff2dc0f0d4ea930b546caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cdc64821dee193b394a49b798ba2a38a820ee03f00e19f972ac886ebe82d1884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc64821dee193b394a49b798ba2a38a820ee03f00e19f972ac886ebe82d1884->enter($__internal_cdc64821dee193b394a49b798ba2a38a820ee03f00e19f972ac886ebe82d1884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdca0e3994575a1b53a6a7a6d55058e5fa31be6d66ff2dc0f0d4ea930b546caf->leave($__internal_cdca0e3994575a1b53a6a7a6d55058e5fa31be6d66ff2dc0f0d4ea930b546caf_prof);

        
        $__internal_cdc64821dee193b394a49b798ba2a38a820ee03f00e19f972ac886ebe82d1884->leave($__internal_cdc64821dee193b394a49b798ba2a38a820ee03f00e19f972ac886ebe82d1884_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f86fe09a75038c6956aa20e0da7d11d76218bdc3de4a225527c3ade787025bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f86fe09a75038c6956aa20e0da7d11d76218bdc3de4a225527c3ade787025bd->enter($__internal_8f86fe09a75038c6956aa20e0da7d11d76218bdc3de4a225527c3ade787025bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50d4403db799a30f93b3681e5e2e9486a9431f0cf321463aa7ea4aef557f96ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d4403db799a30f93b3681e5e2e9486a9431f0cf321463aa7ea4aef557f96ff->enter($__internal_50d4403db799a30f93b3681e5e2e9486a9431f0cf321463aa7ea4aef557f96ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_50d4403db799a30f93b3681e5e2e9486a9431f0cf321463aa7ea4aef557f96ff->leave($__internal_50d4403db799a30f93b3681e5e2e9486a9431f0cf321463aa7ea4aef557f96ff_prof);

        
        $__internal_8f86fe09a75038c6956aa20e0da7d11d76218bdc3de4a225527c3ade787025bd->leave($__internal_8f86fe09a75038c6956aa20e0da7d11d76218bdc3de4a225527c3ade787025bd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcc476ccf6d4d56fd8095c28e78d1b1dc8a194e288d9ecdd661e92ded7ed1922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc476ccf6d4d56fd8095c28e78d1b1dc8a194e288d9ecdd661e92ded7ed1922->enter($__internal_fcc476ccf6d4d56fd8095c28e78d1b1dc8a194e288d9ecdd661e92ded7ed1922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91fb5d42e31eead1cc8e381360d958ea407eab3fbfeb23e1093eb6f000517819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fb5d42e31eead1cc8e381360d958ea407eab3fbfeb23e1093eb6f000517819->enter($__internal_91fb5d42e31eead1cc8e381360d958ea407eab3fbfeb23e1093eb6f000517819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_91fb5d42e31eead1cc8e381360d958ea407eab3fbfeb23e1093eb6f000517819->leave($__internal_91fb5d42e31eead1cc8e381360d958ea407eab3fbfeb23e1093eb6f000517819_prof);

        
        $__internal_fcc476ccf6d4d56fd8095c28e78d1b1dc8a194e288d9ecdd661e92ded7ed1922->leave($__internal_fcc476ccf6d4d56fd8095c28e78d1b1dc8a194e288d9ecdd661e92ded7ed1922_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c28c440a57a8002e10aee4d06e2ba44d559a4b445822df4eb2778ae13d438ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28c440a57a8002e10aee4d06e2ba44d559a4b445822df4eb2778ae13d438ae8->enter($__internal_c28c440a57a8002e10aee4d06e2ba44d559a4b445822df4eb2778ae13d438ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e89beccbef8e4be0525bb0e400b784b20f4536cf68dbfa88f2cb5cb8406c648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e89beccbef8e4be0525bb0e400b784b20f4536cf68dbfa88f2cb5cb8406c648->enter($__internal_3e89beccbef8e4be0525bb0e400b784b20f4536cf68dbfa88f2cb5cb8406c648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3e89beccbef8e4be0525bb0e400b784b20f4536cf68dbfa88f2cb5cb8406c648->leave($__internal_3e89beccbef8e4be0525bb0e400b784b20f4536cf68dbfa88f2cb5cb8406c648_prof);

        
        $__internal_c28c440a57a8002e10aee4d06e2ba44d559a4b445822df4eb2778ae13d438ae8->leave($__internal_c28c440a57a8002e10aee4d06e2ba44d559a4b445822df4eb2778ae13d438ae8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
