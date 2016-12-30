<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f5effc075ec0ce8ced2a7bf5d13bb1fb39fa32fb673aeecd57d4f5694fe36ff6 extends Twig_Template
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
        $__internal_c39585e2794c36e346a9dcfe542adc0793b2b9fca21896885c80fdc435e2142a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39585e2794c36e346a9dcfe542adc0793b2b9fca21896885c80fdc435e2142a->enter($__internal_c39585e2794c36e346a9dcfe542adc0793b2b9fca21896885c80fdc435e2142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_03126a1f5df1596f2d7308e104eef4e45725bd2bf30614b008232291f3bf77b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03126a1f5df1596f2d7308e104eef4e45725bd2bf30614b008232291f3bf77b5->enter($__internal_03126a1f5df1596f2d7308e104eef4e45725bd2bf30614b008232291f3bf77b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c39585e2794c36e346a9dcfe542adc0793b2b9fca21896885c80fdc435e2142a->leave($__internal_c39585e2794c36e346a9dcfe542adc0793b2b9fca21896885c80fdc435e2142a_prof);

        
        $__internal_03126a1f5df1596f2d7308e104eef4e45725bd2bf30614b008232291f3bf77b5->leave($__internal_03126a1f5df1596f2d7308e104eef4e45725bd2bf30614b008232291f3bf77b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
