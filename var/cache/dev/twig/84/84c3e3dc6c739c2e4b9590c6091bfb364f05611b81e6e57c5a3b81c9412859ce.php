<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3c38bd2adf90be8275dc4abe30f79ea73d5f3db3456cb806ba2a5f37ee707a6a extends Twig_Template
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
        $__internal_cccb6c074fe04fbea2985f025e33c6fdaada52dcec321db0899fcb93a1b98379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccb6c074fe04fbea2985f025e33c6fdaada52dcec321db0899fcb93a1b98379->enter($__internal_cccb6c074fe04fbea2985f025e33c6fdaada52dcec321db0899fcb93a1b98379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a1a6f5fee35b6063814cd99f09e516c7d6ea853085a55e95a6e48ca242ffd045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a6f5fee35b6063814cd99f09e516c7d6ea853085a55e95a6e48ca242ffd045->enter($__internal_a1a6f5fee35b6063814cd99f09e516c7d6ea853085a55e95a6e48ca242ffd045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_cccb6c074fe04fbea2985f025e33c6fdaada52dcec321db0899fcb93a1b98379->leave($__internal_cccb6c074fe04fbea2985f025e33c6fdaada52dcec321db0899fcb93a1b98379_prof);

        
        $__internal_a1a6f5fee35b6063814cd99f09e516c7d6ea853085a55e95a6e48ca242ffd045->leave($__internal_a1a6f5fee35b6063814cd99f09e516c7d6ea853085a55e95a6e48ca242ffd045_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
