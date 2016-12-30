<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ff1f38262d6be089f190ba29e85949966a8fd0e5b9711af3e67b7a238bbc0f66 extends Twig_Template
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
        $__internal_a472f7617190df45c0a4a54edcde211e267e6e0207351236c3893fccb465935d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a472f7617190df45c0a4a54edcde211e267e6e0207351236c3893fccb465935d->enter($__internal_a472f7617190df45c0a4a54edcde211e267e6e0207351236c3893fccb465935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ab5d76b8065edd99cd18aaef3700aafcfa59b068a4150b9f736fa7d60b3360ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5d76b8065edd99cd18aaef3700aafcfa59b068a4150b9f736fa7d60b3360ef->enter($__internal_ab5d76b8065edd99cd18aaef3700aafcfa59b068a4150b9f736fa7d60b3360ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a472f7617190df45c0a4a54edcde211e267e6e0207351236c3893fccb465935d->leave($__internal_a472f7617190df45c0a4a54edcde211e267e6e0207351236c3893fccb465935d_prof);

        
        $__internal_ab5d76b8065edd99cd18aaef3700aafcfa59b068a4150b9f736fa7d60b3360ef->leave($__internal_ab5d76b8065edd99cd18aaef3700aafcfa59b068a4150b9f736fa7d60b3360ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
