<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d1dba80da9d6bec3fb1bb1de82337fa6a47759762ee4ac2985f692709d159984 extends Twig_Template
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
        $__internal_9a261e1c6e90d60b00f22fc7b22a85c8b2fa67ff722e278d1bae6d08c34ae236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a261e1c6e90d60b00f22fc7b22a85c8b2fa67ff722e278d1bae6d08c34ae236->enter($__internal_9a261e1c6e90d60b00f22fc7b22a85c8b2fa67ff722e278d1bae6d08c34ae236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d21741b0c980938c486847f75d8472b5e3635840f99db6991db073336460832f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21741b0c980938c486847f75d8472b5e3635840f99db6991db073336460832f->enter($__internal_d21741b0c980938c486847f75d8472b5e3635840f99db6991db073336460832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_9a261e1c6e90d60b00f22fc7b22a85c8b2fa67ff722e278d1bae6d08c34ae236->leave($__internal_9a261e1c6e90d60b00f22fc7b22a85c8b2fa67ff722e278d1bae6d08c34ae236_prof);

        
        $__internal_d21741b0c980938c486847f75d8472b5e3635840f99db6991db073336460832f->leave($__internal_d21741b0c980938c486847f75d8472b5e3635840f99db6991db073336460832f_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Admin\\Desktop\\OTTOCar-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
