<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_63e1d2a01ea8f13bf3ed2ccef17897f3c4e2f3484f415c214234e487d00e07f2 extends Twig_Template
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
        $__internal_381bce137263c47d73c2c4d59526af9b8c984a0f54b6d8be2a978b15a0ab1675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381bce137263c47d73c2c4d59526af9b8c984a0f54b6d8be2a978b15a0ab1675->enter($__internal_381bce137263c47d73c2c4d59526af9b8c984a0f54b6d8be2a978b15a0ab1675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_bb407f198de3410cf588e1b2eacdbdfe33b2a554bb4ad1a150fcffd823bd235a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb407f198de3410cf588e1b2eacdbdfe33b2a554bb4ad1a150fcffd823bd235a->enter($__internal_bb407f198de3410cf588e1b2eacdbdfe33b2a554bb4ad1a150fcffd823bd235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_381bce137263c47d73c2c4d59526af9b8c984a0f54b6d8be2a978b15a0ab1675->leave($__internal_381bce137263c47d73c2c4d59526af9b8c984a0f54b6d8be2a978b15a0ab1675_prof);

        
        $__internal_bb407f198de3410cf588e1b2eacdbdfe33b2a554bb4ad1a150fcffd823bd235a->leave($__internal_bb407f198de3410cf588e1b2eacdbdfe33b2a554bb4ad1a150fcffd823bd235a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
