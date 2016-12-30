<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_26f60688a3ee387140d1d246aff34073da1b12c949325352c9b21915af409ea6 extends Twig_Template
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
        $__internal_d46921b40be6637e8623be0c18af1cf7694a0b0579a9c05a86d1d6806d987c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46921b40be6637e8623be0c18af1cf7694a0b0579a9c05a86d1d6806d987c8d->enter($__internal_d46921b40be6637e8623be0c18af1cf7694a0b0579a9c05a86d1d6806d987c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_cc8ba1774d0d2a513ccbda0a2e7331ab5f5a2ca1da598fda9947448a172b755b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8ba1774d0d2a513ccbda0a2e7331ab5f5a2ca1da598fda9947448a172b755b->enter($__internal_cc8ba1774d0d2a513ccbda0a2e7331ab5f5a2ca1da598fda9947448a172b755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d46921b40be6637e8623be0c18af1cf7694a0b0579a9c05a86d1d6806d987c8d->leave($__internal_d46921b40be6637e8623be0c18af1cf7694a0b0579a9c05a86d1d6806d987c8d_prof);

        
        $__internal_cc8ba1774d0d2a513ccbda0a2e7331ab5f5a2ca1da598fda9947448a172b755b->leave($__internal_cc8ba1774d0d2a513ccbda0a2e7331ab5f5a2ca1da598fda9947448a172b755b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
