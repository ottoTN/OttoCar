<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_23c9b61550f2921bf154cb9dc865b8168a0fa136e9e5777f012f32971cb17955 extends Twig_Template
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
        $__internal_f932021959b873c6d7fed22e6f0a3bc9a6a1193cb91dc10e2325d38aa35ce0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f932021959b873c6d7fed22e6f0a3bc9a6a1193cb91dc10e2325d38aa35ce0da->enter($__internal_f932021959b873c6d7fed22e6f0a3bc9a6a1193cb91dc10e2325d38aa35ce0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4f214b05bce76e18a01ef5bb3a46e8c51170d764f7c0aa4328d5131531bb96af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f214b05bce76e18a01ef5bb3a46e8c51170d764f7c0aa4328d5131531bb96af->enter($__internal_4f214b05bce76e18a01ef5bb3a46e8c51170d764f7c0aa4328d5131531bb96af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f932021959b873c6d7fed22e6f0a3bc9a6a1193cb91dc10e2325d38aa35ce0da->leave($__internal_f932021959b873c6d7fed22e6f0a3bc9a6a1193cb91dc10e2325d38aa35ce0da_prof);

        
        $__internal_4f214b05bce76e18a01ef5bb3a46e8c51170d764f7c0aa4328d5131531bb96af->leave($__internal_4f214b05bce76e18a01ef5bb3a46e8c51170d764f7c0aa4328d5131531bb96af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
