<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1a7a117ef1962710fb2cc14d0f3bacf205880e9089bda6faeac00f5cbd635a95 extends Twig_Template
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
        $__internal_c05b832094595ef1286d0bcf2f86e0d8375a69c1c481ad5e1337f7522efb5a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05b832094595ef1286d0bcf2f86e0d8375a69c1c481ad5e1337f7522efb5a2e->enter($__internal_c05b832094595ef1286d0bcf2f86e0d8375a69c1c481ad5e1337f7522efb5a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_19f77ddc005d02e9eb44d41fe4d67b90d21b3401bb49d51570815b10426ea9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f77ddc005d02e9eb44d41fe4d67b90d21b3401bb49d51570815b10426ea9fe->enter($__internal_19f77ddc005d02e9eb44d41fe4d67b90d21b3401bb49d51570815b10426ea9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_c05b832094595ef1286d0bcf2f86e0d8375a69c1c481ad5e1337f7522efb5a2e->leave($__internal_c05b832094595ef1286d0bcf2f86e0d8375a69c1c481ad5e1337f7522efb5a2e_prof);

        
        $__internal_19f77ddc005d02e9eb44d41fe4d67b90d21b3401bb49d51570815b10426ea9fe->leave($__internal_19f77ddc005d02e9eb44d41fe4d67b90d21b3401bb49d51570815b10426ea9fe_prof);

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
", "@Twig/Exception/traces.txt.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
