<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1d19d6287df4c3f6fdd08f70de9d84a1cf3d5311f56e2b81c241d107938f4b2b extends Twig_Template
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
        $__internal_80f86eca5bce7f8b41a319e4b3c427ee2e92ac208bee312ad8a0b844ea8086bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f86eca5bce7f8b41a319e4b3c427ee2e92ac208bee312ad8a0b844ea8086bc->enter($__internal_80f86eca5bce7f8b41a319e4b3c427ee2e92ac208bee312ad8a0b844ea8086bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d699da8b5647f90405a054a6be6e0fb2f45edd27d29bea30d481406df816c680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d699da8b5647f90405a054a6be6e0fb2f45edd27d29bea30d481406df816c680->enter($__internal_d699da8b5647f90405a054a6be6e0fb2f45edd27d29bea30d481406df816c680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_80f86eca5bce7f8b41a319e4b3c427ee2e92ac208bee312ad8a0b844ea8086bc->leave($__internal_80f86eca5bce7f8b41a319e4b3c427ee2e92ac208bee312ad8a0b844ea8086bc_prof);

        
        $__internal_d699da8b5647f90405a054a6be6e0fb2f45edd27d29bea30d481406df816c680->leave($__internal_d699da8b5647f90405a054a6be6e0fb2f45edd27d29bea30d481406df816c680_prof);

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
", "@Twig/Exception/traces.txt.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
