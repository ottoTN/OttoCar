<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9493af20de4cd51b8c7ae9816b2df6e5f5cd7cfcf3102455b821ad70b0aac2b4 extends Twig_Template
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
        $__internal_be24c9257c7d40759f4a2c7e311b9b58ffa8a81bc15fcf9d0f2a9947a41e730e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be24c9257c7d40759f4a2c7e311b9b58ffa8a81bc15fcf9d0f2a9947a41e730e->enter($__internal_be24c9257c7d40759f4a2c7e311b9b58ffa8a81bc15fcf9d0f2a9947a41e730e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f86b7ca0d352cca5993dbb36f15cbc31f5ed6dd120bc993e787738bfdea665a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86b7ca0d352cca5993dbb36f15cbc31f5ed6dd120bc993e787738bfdea665a3->enter($__internal_f86b7ca0d352cca5993dbb36f15cbc31f5ed6dd120bc993e787738bfdea665a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be24c9257c7d40759f4a2c7e311b9b58ffa8a81bc15fcf9d0f2a9947a41e730e->leave($__internal_be24c9257c7d40759f4a2c7e311b9b58ffa8a81bc15fcf9d0f2a9947a41e730e_prof);

        
        $__internal_f86b7ca0d352cca5993dbb36f15cbc31f5ed6dd120bc993e787738bfdea665a3->leave($__internal_f86b7ca0d352cca5993dbb36f15cbc31f5ed6dd120bc993e787738bfdea665a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
