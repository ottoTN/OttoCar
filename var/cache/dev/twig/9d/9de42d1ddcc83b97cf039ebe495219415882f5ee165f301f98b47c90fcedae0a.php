<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_21032e2d0d41d5f41edc1b419fbdf046ccd78258696cdb6e1e7927eee14d83e0 extends Twig_Template
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
        $__internal_3f539f5e0c6ad69e6f1f19ad29347d4ba3ef437766730a693c86a1886148bab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f539f5e0c6ad69e6f1f19ad29347d4ba3ef437766730a693c86a1886148bab9->enter($__internal_3f539f5e0c6ad69e6f1f19ad29347d4ba3ef437766730a693c86a1886148bab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c01b17e098de5ee5db8d080308ecb921cfd481f3f9884a145a65713120a89b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01b17e098de5ee5db8d080308ecb921cfd481f3f9884a145a65713120a89b1d->enter($__internal_c01b17e098de5ee5db8d080308ecb921cfd481f3f9884a145a65713120a89b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3f539f5e0c6ad69e6f1f19ad29347d4ba3ef437766730a693c86a1886148bab9->leave($__internal_3f539f5e0c6ad69e6f1f19ad29347d4ba3ef437766730a693c86a1886148bab9_prof);

        
        $__internal_c01b17e098de5ee5db8d080308ecb921cfd481f3f9884a145a65713120a89b1d->leave($__internal_c01b17e098de5ee5db8d080308ecb921cfd481f3f9884a145a65713120a89b1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
