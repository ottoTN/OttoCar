<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d37ddf89fd572da37385c7846d2576bd7dff6d50ca8145e0533cde5474e29f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1125a39bb44966c566fffd8d286c14ce524af7c8d5fd22a8c3de0980c5a7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1125a39bb44966c566fffd8d286c14ce524af7c8d5fd22a8c3de0980c5a7e5->enter($__internal_1b1125a39bb44966c566fffd8d286c14ce524af7c8d5fd22a8c3de0980c5a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c32bb169e22319452bc645a2977d98725661a992e829789ca2f013733f941f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32bb169e22319452bc645a2977d98725661a992e829789ca2f013733f941f32->enter($__internal_c32bb169e22319452bc645a2977d98725661a992e829789ca2f013733f941f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1b1125a39bb44966c566fffd8d286c14ce524af7c8d5fd22a8c3de0980c5a7e5->leave($__internal_1b1125a39bb44966c566fffd8d286c14ce524af7c8d5fd22a8c3de0980c5a7e5_prof);

        
        $__internal_c32bb169e22319452bc645a2977d98725661a992e829789ca2f013733f941f32->leave($__internal_c32bb169e22319452bc645a2977d98725661a992e829789ca2f013733f941f32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
