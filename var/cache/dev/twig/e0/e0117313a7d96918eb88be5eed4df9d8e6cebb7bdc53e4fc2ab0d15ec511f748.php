<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_322dbaca59ed99d11ce31810b18862922a420758dee90b23eb4c027029d8724a extends Twig_Template
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
        $__internal_131d4e957035b5d1e0679c1d0aabc3bd107aa0a61a79fcf2ed64248aa5461bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131d4e957035b5d1e0679c1d0aabc3bd107aa0a61a79fcf2ed64248aa5461bbf->enter($__internal_131d4e957035b5d1e0679c1d0aabc3bd107aa0a61a79fcf2ed64248aa5461bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8aa395a65c6d8805598e254949c7da11d254bd4b6649578efe47851983b21442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa395a65c6d8805598e254949c7da11d254bd4b6649578efe47851983b21442->enter($__internal_8aa395a65c6d8805598e254949c7da11d254bd4b6649578efe47851983b21442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_131d4e957035b5d1e0679c1d0aabc3bd107aa0a61a79fcf2ed64248aa5461bbf->leave($__internal_131d4e957035b5d1e0679c1d0aabc3bd107aa0a61a79fcf2ed64248aa5461bbf_prof);

        
        $__internal_8aa395a65c6d8805598e254949c7da11d254bd4b6649578efe47851983b21442->leave($__internal_8aa395a65c6d8805598e254949c7da11d254bd4b6649578efe47851983b21442_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
