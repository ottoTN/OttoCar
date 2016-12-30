<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b0cf0b67f37ed078374bf87fa60086ca950f6fbe908eb5c88467fd06bdb0e372 extends Twig_Template
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
        $__internal_57033c8c6705e197b1ed202e03f20edd49f57aa39b70a1c36841e96e608a0546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57033c8c6705e197b1ed202e03f20edd49f57aa39b70a1c36841e96e608a0546->enter($__internal_57033c8c6705e197b1ed202e03f20edd49f57aa39b70a1c36841e96e608a0546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f9553d93b6a1bb304c82dcb1d511856a959a0ba45018ba7e23a386762e3b16b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9553d93b6a1bb304c82dcb1d511856a959a0ba45018ba7e23a386762e3b16b1->enter($__internal_f9553d93b6a1bb304c82dcb1d511856a959a0ba45018ba7e23a386762e3b16b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_57033c8c6705e197b1ed202e03f20edd49f57aa39b70a1c36841e96e608a0546->leave($__internal_57033c8c6705e197b1ed202e03f20edd49f57aa39b70a1c36841e96e608a0546_prof);

        
        $__internal_f9553d93b6a1bb304c82dcb1d511856a959a0ba45018ba7e23a386762e3b16b1->leave($__internal_f9553d93b6a1bb304c82dcb1d511856a959a0ba45018ba7e23a386762e3b16b1_prof);

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
", "@Twig/Exception/traces.txt.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
