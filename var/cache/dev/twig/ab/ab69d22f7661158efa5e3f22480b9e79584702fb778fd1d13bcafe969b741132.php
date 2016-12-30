<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_baab0f15f4e312f75cca008c40466f50cc1a578723b2cb1312648bf64510f485 extends Twig_Template
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
        $__internal_6774f6ce5629c5fb43735780f4c257ee00e0ea2e846b4f81175813c49aefb908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6774f6ce5629c5fb43735780f4c257ee00e0ea2e846b4f81175813c49aefb908->enter($__internal_6774f6ce5629c5fb43735780f4c257ee00e0ea2e846b4f81175813c49aefb908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_036e88243e2fdd7728f40f2f31c1dc4e97b47f99e66a4c5243ad9a39e77bdd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036e88243e2fdd7728f40f2f31c1dc4e97b47f99e66a4c5243ad9a39e77bdd6c->enter($__internal_036e88243e2fdd7728f40f2f31c1dc4e97b47f99e66a4c5243ad9a39e77bdd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6774f6ce5629c5fb43735780f4c257ee00e0ea2e846b4f81175813c49aefb908->leave($__internal_6774f6ce5629c5fb43735780f4c257ee00e0ea2e846b4f81175813c49aefb908_prof);

        
        $__internal_036e88243e2fdd7728f40f2f31c1dc4e97b47f99e66a4c5243ad9a39e77bdd6c->leave($__internal_036e88243e2fdd7728f40f2f31c1dc4e97b47f99e66a4c5243ad9a39e77bdd6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
