<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ec7865dd5140dfdc973135a467074ec86c2289741a57470206f67d553542f569 extends Twig_Template
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
        $__internal_de75e418db79e583c9b31446e67ffba65782fe959f095b2dd68e56faa9f91e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de75e418db79e583c9b31446e67ffba65782fe959f095b2dd68e56faa9f91e29->enter($__internal_de75e418db79e583c9b31446e67ffba65782fe959f095b2dd68e56faa9f91e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_bc281925a8bac472115e93aa06f7fb2be31c68d6d58ba531c96cc37e605cb719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc281925a8bac472115e93aa06f7fb2be31c68d6d58ba531c96cc37e605cb719->enter($__internal_bc281925a8bac472115e93aa06f7fb2be31c68d6d58ba531c96cc37e605cb719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_de75e418db79e583c9b31446e67ffba65782fe959f095b2dd68e56faa9f91e29->leave($__internal_de75e418db79e583c9b31446e67ffba65782fe959f095b2dd68e56faa9f91e29_prof);

        
        $__internal_bc281925a8bac472115e93aa06f7fb2be31c68d6d58ba531c96cc37e605cb719->leave($__internal_bc281925a8bac472115e93aa06f7fb2be31c68d6d58ba531c96cc37e605cb719_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
