<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_960bac706839bad8c47588f91715e6f3ebe428cfd3da9f5035f27f1c45335a65 extends Twig_Template
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
        $__internal_21dcb57e519c9dd91587d12d7452841d0d98b0f7a0e98e5f1d915ce67b810a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dcb57e519c9dd91587d12d7452841d0d98b0f7a0e98e5f1d915ce67b810a2d->enter($__internal_21dcb57e519c9dd91587d12d7452841d0d98b0f7a0e98e5f1d915ce67b810a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_5437c313b1720581de4a519568f75805e1e573ceabfcb9f0789d8ebf7315beff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5437c313b1720581de4a519568f75805e1e573ceabfcb9f0789d8ebf7315beff->enter($__internal_5437c313b1720581de4a519568f75805e1e573ceabfcb9f0789d8ebf7315beff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_21dcb57e519c9dd91587d12d7452841d0d98b0f7a0e98e5f1d915ce67b810a2d->leave($__internal_21dcb57e519c9dd91587d12d7452841d0d98b0f7a0e98e5f1d915ce67b810a2d_prof);

        
        $__internal_5437c313b1720581de4a519568f75805e1e573ceabfcb9f0789d8ebf7315beff->leave($__internal_5437c313b1720581de4a519568f75805e1e573ceabfcb9f0789d8ebf7315beff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
