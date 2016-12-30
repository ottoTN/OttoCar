<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_639cd0f7355c23a757c16db065f1eda52cd93c5c9ded9d675cb289cf70eb8c69 extends Twig_Template
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
        $__internal_485c00e16958772765a78dd92e21fe0f626cd37ce5f373436e92afc3492afcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485c00e16958772765a78dd92e21fe0f626cd37ce5f373436e92afc3492afcfa->enter($__internal_485c00e16958772765a78dd92e21fe0f626cd37ce5f373436e92afc3492afcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_538021d592051b74890ac2a81b74f2ee5d5f5015c97fd9c1f4108562462eb94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538021d592051b74890ac2a81b74f2ee5d5f5015c97fd9c1f4108562462eb94b->enter($__internal_538021d592051b74890ac2a81b74f2ee5d5f5015c97fd9c1f4108562462eb94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485c00e16958772765a78dd92e21fe0f626cd37ce5f373436e92afc3492afcfa->leave($__internal_485c00e16958772765a78dd92e21fe0f626cd37ce5f373436e92afc3492afcfa_prof);

        
        $__internal_538021d592051b74890ac2a81b74f2ee5d5f5015c97fd9c1f4108562462eb94b->leave($__internal_538021d592051b74890ac2a81b74f2ee5d5f5015c97fd9c1f4108562462eb94b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b7d600e22e9293826b83c67f84557f3ff4475f323ae7f9a55f27ecd98d832ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7d600e22e9293826b83c67f84557f3ff4475f323ae7f9a55f27ecd98d832ce->enter($__internal_5b7d600e22e9293826b83c67f84557f3ff4475f323ae7f9a55f27ecd98d832ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8199ef6d0e51ef2f2ab9f97a3e2067df12fee5a5e5c330ea36a6115607284631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8199ef6d0e51ef2f2ab9f97a3e2067df12fee5a5e5c330ea36a6115607284631->enter($__internal_8199ef6d0e51ef2f2ab9f97a3e2067df12fee5a5e5c330ea36a6115607284631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8199ef6d0e51ef2f2ab9f97a3e2067df12fee5a5e5c330ea36a6115607284631->leave($__internal_8199ef6d0e51ef2f2ab9f97a3e2067df12fee5a5e5c330ea36a6115607284631_prof);

        
        $__internal_5b7d600e22e9293826b83c67f84557f3ff4475f323ae7f9a55f27ecd98d832ce->leave($__internal_5b7d600e22e9293826b83c67f84557f3ff4475f323ae7f9a55f27ecd98d832ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0706a4c92c02cd5a20c397b791cb432cffd4af84732275a01a75d12bdec34352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0706a4c92c02cd5a20c397b791cb432cffd4af84732275a01a75d12bdec34352->enter($__internal_0706a4c92c02cd5a20c397b791cb432cffd4af84732275a01a75d12bdec34352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac1987dff84687aa2588cd2ccab4d44fae9d8e6be65e93bcdf04aba5779364bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1987dff84687aa2588cd2ccab4d44fae9d8e6be65e93bcdf04aba5779364bd->enter($__internal_ac1987dff84687aa2588cd2ccab4d44fae9d8e6be65e93bcdf04aba5779364bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac1987dff84687aa2588cd2ccab4d44fae9d8e6be65e93bcdf04aba5779364bd->leave($__internal_ac1987dff84687aa2588cd2ccab4d44fae9d8e6be65e93bcdf04aba5779364bd_prof);

        
        $__internal_0706a4c92c02cd5a20c397b791cb432cffd4af84732275a01a75d12bdec34352->leave($__internal_0706a4c92c02cd5a20c397b791cb432cffd4af84732275a01a75d12bdec34352_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64e779253f36745c94438f5a46f2f8870c1cb0ac39d1f91b5bdce8abe2b103d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64e779253f36745c94438f5a46f2f8870c1cb0ac39d1f91b5bdce8abe2b103d->enter($__internal_f64e779253f36745c94438f5a46f2f8870c1cb0ac39d1f91b5bdce8abe2b103d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3680b95dbbbb9ccbc20884f2a3836231ca3572c6dfbb57740d0cf0fddf07ff51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3680b95dbbbb9ccbc20884f2a3836231ca3572c6dfbb57740d0cf0fddf07ff51->enter($__internal_3680b95dbbbb9ccbc20884f2a3836231ca3572c6dfbb57740d0cf0fddf07ff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3680b95dbbbb9ccbc20884f2a3836231ca3572c6dfbb57740d0cf0fddf07ff51->leave($__internal_3680b95dbbbb9ccbc20884f2a3836231ca3572c6dfbb57740d0cf0fddf07ff51_prof);

        
        $__internal_f64e779253f36745c94438f5a46f2f8870c1cb0ac39d1f91b5bdce8abe2b103d->leave($__internal_f64e779253f36745c94438f5a46f2f8870c1cb0ac39d1f91b5bdce8abe2b103d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
