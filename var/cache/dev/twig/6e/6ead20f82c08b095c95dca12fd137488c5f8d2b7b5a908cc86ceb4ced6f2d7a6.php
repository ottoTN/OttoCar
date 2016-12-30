<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6aebdb087a4af76e21a2e3487d20bddbb65d2c5089aae3759b95d474f0a4e09c extends Twig_Template
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
        $__internal_1a075258e3ee305b2894b14dbe4da8862b11eb54cece80c287abc83db3c021e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a075258e3ee305b2894b14dbe4da8862b11eb54cece80c287abc83db3c021e9->enter($__internal_1a075258e3ee305b2894b14dbe4da8862b11eb54cece80c287abc83db3c021e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_fbe200e1e9357e22b66ad1d62077d876dc46e8afa419136faad90a67bd6c31d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe200e1e9357e22b66ad1d62077d876dc46e8afa419136faad90a67bd6c31d0->enter($__internal_fbe200e1e9357e22b66ad1d62077d876dc46e8afa419136faad90a67bd6c31d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1a075258e3ee305b2894b14dbe4da8862b11eb54cece80c287abc83db3c021e9->leave($__internal_1a075258e3ee305b2894b14dbe4da8862b11eb54cece80c287abc83db3c021e9_prof);

        
        $__internal_fbe200e1e9357e22b66ad1d62077d876dc46e8afa419136faad90a67bd6c31d0->leave($__internal_fbe200e1e9357e22b66ad1d62077d876dc46e8afa419136faad90a67bd6c31d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
