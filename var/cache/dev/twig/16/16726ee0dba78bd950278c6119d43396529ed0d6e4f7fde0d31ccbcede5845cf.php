<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a25db00d0eca45538a9c9b755d8cace8178758223dd2320b318a255be7b23e6c extends Twig_Template
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
        $__internal_9f8b468c7d7902661bb4ee25d8401102b44acf7f35e0184e13f5b6ef200762df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8b468c7d7902661bb4ee25d8401102b44acf7f35e0184e13f5b6ef200762df->enter($__internal_9f8b468c7d7902661bb4ee25d8401102b44acf7f35e0184e13f5b6ef200762df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_525952a48476235e1e79fcdbb151e9911325c84f92a15d57f31e65b8a49819ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525952a48476235e1e79fcdbb151e9911325c84f92a15d57f31e65b8a49819ca->enter($__internal_525952a48476235e1e79fcdbb151e9911325c84f92a15d57f31e65b8a49819ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9f8b468c7d7902661bb4ee25d8401102b44acf7f35e0184e13f5b6ef200762df->leave($__internal_9f8b468c7d7902661bb4ee25d8401102b44acf7f35e0184e13f5b6ef200762df_prof);

        
        $__internal_525952a48476235e1e79fcdbb151e9911325c84f92a15d57f31e65b8a49819ca->leave($__internal_525952a48476235e1e79fcdbb151e9911325c84f92a15d57f31e65b8a49819ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
