<?php

/* GarageBundle:Default:index.html.twig */
class __TwigTemplate_c9ee501a2ff93685582c696d5d3177543bccb1915ad87b7229739ed1ca370094 extends Twig_Template
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
        $__internal_82500775ec65fd92c19906a5b75dc521c321527b2d8c2e697c79d8bb43135143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82500775ec65fd92c19906a5b75dc521c321527b2d8c2e697c79d8bb43135143->enter($__internal_82500775ec65fd92c19906a5b75dc521c321527b2d8c2e697c79d8bb43135143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarageBundle:Default:index.html.twig"));

        $__internal_85e91f089df0ac843528c223997ff6439eef6df0a9c7b651392715515ca2b59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e91f089df0ac843528c223997ff6439eef6df0a9c7b651392715515ca2b59b->enter($__internal_85e91f089df0ac843528c223997ff6439eef6df0a9c7b651392715515ca2b59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarageBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!";
        
        $__internal_82500775ec65fd92c19906a5b75dc521c321527b2d8c2e697c79d8bb43135143->leave($__internal_82500775ec65fd92c19906a5b75dc521c321527b2d8c2e697c79d8bb43135143_prof);

        
        $__internal_85e91f089df0ac843528c223997ff6439eef6df0a9c7b651392715515ca2b59b->leave($__internal_85e91f089df0ac843528c223997ff6439eef6df0a9c7b651392715515ca2b59b_prof);

    }

    public function getTemplateName()
    {
        return "GarageBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!", "GarageBundle:Default:index.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\src\\GarageBundle/Resources/views/Default/index.html.twig");
    }
}
