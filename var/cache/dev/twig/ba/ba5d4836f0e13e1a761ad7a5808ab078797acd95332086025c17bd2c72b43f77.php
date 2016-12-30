<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_159c4f59774bc4c912f38a6ee42608e1d4887eec2bc703c8f0030b212b0ed53f extends Twig_Template
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
        $__internal_84cdd3cf14176ceedf03376ea8cee7b6aa783a5212cc935eee9f5006b863cff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cdd3cf14176ceedf03376ea8cee7b6aa783a5212cc935eee9f5006b863cff5->enter($__internal_84cdd3cf14176ceedf03376ea8cee7b6aa783a5212cc935eee9f5006b863cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c8154ae8d79f1a9cd33dcd4d451892c6c8feb0c8589460e10305bf99a0a7c528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8154ae8d79f1a9cd33dcd4d451892c6c8feb0c8589460e10305bf99a0a7c528->enter($__internal_c8154ae8d79f1a9cd33dcd4d451892c6c8feb0c8589460e10305bf99a0a7c528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_84cdd3cf14176ceedf03376ea8cee7b6aa783a5212cc935eee9f5006b863cff5->leave($__internal_84cdd3cf14176ceedf03376ea8cee7b6aa783a5212cc935eee9f5006b863cff5_prof);

        
        $__internal_c8154ae8d79f1a9cd33dcd4d451892c6c8feb0c8589460e10305bf99a0a7c528->leave($__internal_c8154ae8d79f1a9cd33dcd4d451892c6c8feb0c8589460e10305bf99a0a7c528_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
